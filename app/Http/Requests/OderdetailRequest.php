<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OderdetailRequest extends FormRequest
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

            "Number"=>["required","numeric","digits:10"],
            "Email"=>["required", "email"],
            "Address"=>["required"],
            "Size"=>["required","numeric"],

        ];
    }

    public function messages()
    {
        return [

            "Number.required"=>"Number cannot be empty",
            "Number.numeric"=>"Only accept number",
            "Number.digits"=>"Invalid number",
            "Email.required"=>"Email cannot be empty",
            "Email.email"=>"Not a valid email",
            "Address.required"=>"Address is required",
            "Size.required"=>"Size cannot be empty",
            "Size.numeric"=>"Only accept number",

        ];
    }
}
