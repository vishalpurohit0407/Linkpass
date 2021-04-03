<div class="row">
    @php $i=0; @endphp
    @foreach($userPreferencesGroups as $item)
        <aside class="col-md-6 userPreferencesBox">
        <article class="SettingBox">
            <div class="d-flex justify-content-between align-items-center SettingBoxHead">
            <h5 class="user-preferences-group"><a href="javascript:void(0);"># {{$item->name}} {{$i+1}} :</a></h5>
            <div class="custom-control custom-switch">
                @php $status = $item->status == 1 ? 'checked' : ''; @endphp
                <input name="subscribe" type="checkbox" class="custom-control-input condition-trigger groupStatusToggle" data-group-id="{{$item->id}}" id="customSwitch{{$item->id}}" {{$status}}>
                <label class="custom-control-label" for="customSwitch{{$item->id}}"></label>
                {{-- <span class="text-primary" id="valueOfSwitch{{$item->id}}"> {{$item->status ? 'On' : 'Off'}}</span> --}}
             </div>
            <div class="SettingBoxHeadLast">
                <ul>
                <li><a href="javascript:void(0);" data-group-id="{{$item->id}}" class="btn btn-dark btn-sm rounded-30 addNewTag" id="addNewTag{{$item->id}}">Add #</a></li>
                @if($i > 0)
                    <li><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                        <li class="nav-item"> <a class="nav-link editNewUserPreferencesGroup" data-group-id="{{$item->id}}" data-group-name="{{$item->name}}" href="javascript:void(0);"><i class="fal fa-edit"></i> Edit</a> </li>
                        <li class="nav-item"> <a class="nav-link deleteUserPreferencesGroup" data-group-id="{{$item->id}}" href="javascript:void(0);"><i class="fal fa-trash-alt"></i> Delete</a> </li>
                        </ul>
                    </li>
                @endif
                </ul>
            </div>
            </div>
            <div class="card mt-2 py-2 px-3 rounded-lg">
                <div class="detail-tag">
                    <span id="user-tags-box-{{$item->id}}">
                        @if($item->tags()->count())
                            @foreach ($item->tags as $tag)
                                <span class="label-info-tag label-tag-{{base64_encode($tag->name)}}"><a href="javascript:void(0);"># {{$tag->name}}</a></span>
                            @endforeach
                        @else
                            <span class="label-info-tag no-tags">No tags found</span>
                        @endif
                    </span>
                    @php $tags = $item->tags()->get()->pluck('name')->toArray(); @endphp
                    <input style="display:none;" type="text" name="tags" class="user-tags-input" id="user-tags-input-{{$item->id}}" value="{{implode(',', $tags)}}" />
                </div>
            </div>
        </article>
        </aside>
        @php $i++; @endphp
    @endforeach

  </div>