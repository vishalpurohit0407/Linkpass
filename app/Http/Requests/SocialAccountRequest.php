<?php

namespace App\Http\Requests;

use App\User;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class SocialAccountRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'        => ['required', 'min:3'],
            'url'         => ['required', 'url'],
            'account_url' => ['required', 'url'],
            'image'       => 'mimes:jpeg,png,jpg,gif,svg|max:2048'
        ];
    }
}
