<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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

            'name'           => 'required|string|max:255',
            'quantity'       => 'required|numeric|min:1',
            'current_price'  => 'required|numeric|min:1',
            'previous_price' => 'nullable|numeric|min:1',
            'saving'         => 'nullable|numeric|min:1',
            'categories'     => 'required|array',
            'sizes'          => 'nullable|array',
            'colors'         => 'nullable|array',
            'description'    => 'nullable|string',
            "photo.*"        => "nullable|mimes:jpeg,jpg,png,gif,webp|max:100",
        ];

        if ($this->getMethod() == 'POST') {

            return $rules + [

                'slug'  => 'required|string|max:350|unique:products,slug',
                'cover' => 'mimes:jpeg,jpg,png,gif,webp|max:100|required',

            ];
            
        } else {

            return $rules + [

                'slug'  => 'required|string|max:350|unique:products,slug,' . $this->product,
                'cover' => 'mimes:jpeg,jpg,png,gif,webp|max:100|nullable',

            ];
        }
    }
}
