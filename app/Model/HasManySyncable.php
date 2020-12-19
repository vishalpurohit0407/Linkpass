<?php

namespace App\Model\Relations;

use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @link https://github.com/laravel/framework/blob/5.4/src/Illuminate/Database/Eloquent/Relations/HasMany.php
 */
class HasManySyncable extends HasMany
{
  private $_changes = [
    'created' => [], 'deleted' => [], 'updated' => [],
  ];

  private $_updates = [];

  public function sync($data, $deleting = true)
  {
    // Get primary key (usually id)
    $relatedKeyName = $this->related->getKeyName();

    // Get all Models
    $current = collect($this->newQuery()->get()->all());

    // Geat all current model Ids
    $currentIds = $current->pluck($relatedKeyName)->toArray();

    // delete any models not provided if $deleting is set to true
    if ($deleting) {
      	$deleteIds = $this->_changes['deleted'] = array_diff($currentIds, collect($data)->pluck($relatedKeyName)->toArray());

        if (count($deleteIds)) {
          $this->getRelated()->destroy($deleteIds);
        }

        // Update the current models and Ids
  			$current = $current->except($deleteIds);
        $currentIds = array_diff($currentIds, $deleteIds);
    }

    // loop through all current models and look for changes
  	$current->each(function ($item, $key) use ($data, $relatedKeyName) {
			$updatedItem = collect($data)->firstWhere($relatedKeyName, $item[$relatedKeyName]);
			if ($updatedItem) {
        $updateRequired = false;

        foreach($updatedItem as $field => $check) {
          if (in_array($field, $this->getRelated()->getFillable())) {
            if ($item[$field] != $check) {
              $updateRequired = true;
            }
          }
        };

        if ($updateRequired) {
          $this->_changes['updated'][] = $item[$relatedKeyName];
  				$this->_updates[] = $item->fill($updatedItem);
        }
			}
		});

    // Save changes if any exist
		if (count($this->_updates)) {
      $this->saveMany($this->_updates);
		}

    // Check for new models and create them
    collect($data)->where($relatedKeyName, null)->each(function ($item, $key)  use ($relatedKeyName) {
      $newItem = $this->create($item);
      $this->_changes['created'][] = $newItem->$relatedKeyName;
    });

    // return the priamry keys that changed
    return $this->_changes;
  }
}
