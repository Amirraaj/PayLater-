<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RacingbootRequest extends FormRequest
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
        return [
            "title"=>["required"],
            "description"=>["required"],
            "image"=>["required"],
            "name"=>["required"],
            "price"=>["required","numeric"],
        ];

    }
    public function messages()
    {
        return [
            "name.required"=>"Name cannot be empty",
            "title.required"=>"Title cannot be empty",
            "description.required"=>"Description cannot be empty",
            "price.required"=>"Price cannot be empty",
            "image.required"=>"Image cannot be empty",
            "price.numeric"=>"Price must be number",
        ];
    }
}
