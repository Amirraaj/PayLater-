<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CollectionRequest extends FormRequest
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
        // ['title1','description','image1','name1','price1','image2','name2','price2'];
            return [
                "title1"=>["required"],
                "description"=>["required"],
                "image1"=>["required"],
                "name1"=>["required"],
                "price1"=>["required","numeric"],
                "image2"=>["required"],
                "name2"=>["required"],
                "price2"=>["required","numeric"],
            ];

    }

    public function messages()
    {
        return [
            "name1.required"=>"Name cannot be empty",
            "name2.required"=>"Name cannot be empty",
            "title1.required"=>"Title cannot be empty",
            "description.required"=>"Description cannot be empty",
            "price1.required"=>"Price cannot be empty",
            "price2.required"=>"Price cannot be empty",
            "image1.required"=>"Image cannot be empty",
            "image2.required"=>"Image cannot be empty",
            "price1.numeric"=>"Price must be number",
            "price2.numeric"=>"price must be number",

        ];
    }
}
