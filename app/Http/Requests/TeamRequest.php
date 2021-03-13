<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [

            'name'      => 'required|string|max:255',
            'position'  => 'required|string|max:255',
            'priority'  => 'required|numeric|min:1',
            'facebook'  => 'nullable|string|max:255',
            'twitter'   => 'nullable|string|max:255',
            'linkedin'  => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
        ];

        if ($this->getMethod() == 'POST') {

            return $rules + [

                'photo'  => 'mimes:jpeg,jpg,png,gif,webp,svg|max:1000|required',

            ];
        } else {

            return $rules + [

                'photo'  => 'mimes:jpeg,jpg,png,gif,webp,svg|max:1000|nullable',

            ];
        }
    }
}
