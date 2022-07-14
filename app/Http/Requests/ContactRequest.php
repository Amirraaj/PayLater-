<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "name"=>["required"],
            "number"=>["required","numeric","digits:10"],
            "email"=>["required", "email"],
            "message"=>["required"],

        ];
    }

    public function messages()
    {
        return [
            "name.required"=>"name cannot be empty",
            "number.required"=>"number cannot be empty",
            "number.numeric"=>"Only accept number",
            "number.digits"=>"Invalid number",
            "email.required"=>"Email cannot be empty",
            "email.email"=>"Not a valid email",
            "message.required"=>"Message is required",

        ];
    }
}
