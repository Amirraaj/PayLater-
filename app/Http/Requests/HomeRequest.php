<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomeRequest extends FormRequest
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
            "Title1"=>["required"],
            "Title2"=>["required"],
            "Description"=>["required"],
            "Image"=>["required"],
        ];
    }
    public function messages()
    {
        return [
            "Title1.required"=>"Title1 cannot be empty",
            "Title2.required"=>"Title2 cannot be empty",
            "Description.required"=>"Description cannot be empty",
            "Image.required"=>"Image is required",

        ];
    }
}
