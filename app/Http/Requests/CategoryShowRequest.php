<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryShowRequest extends FormRequest
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

            'category_id' => 'required|string|max: 255',
            'background'  => 'mimes:jpeg,jpg,png,gif,webp|max:100|required_if:type, 2',
            'title'       => 'required|string|max:255',
            'type'        => 'required|string|max:2|min:1',
        ];

        if ($this->getMethod() == 'POST') {

            return $rules + [

                'photo' => 'mimes:jpeg,jpg,png,gif,webp|max:1000|required',

            ];
        } else {

            return $rules + [

                'photo' => 'mimes:jpeg,jpg,png,gif,webp|max:1000|nullable',

            ];
        }
    }
}
