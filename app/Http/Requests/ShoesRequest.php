<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShoesRequest extends FormRequest
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
            "id"=>["required","unique:shoes,Id,except,id"],
            "ShoesName"=>["required"],
            "Color"=>["required"],
            "Price"=>["required"],
            "Image"=>["required"],
        ];
    }
    public function messages()
    {
        return [
            "id.required"=>"ID cannot be empty",
            "id.unique"=>"ID need to unique",
            "ShoesName.required"=>"ShoesName cannot be empty",
            "Price.required"=>"Price cannot be empty",
            "Image.required"=>"Image is required",

        ];
    }
}
