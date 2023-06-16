<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storefoodrequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'foodname' => ['required'],
            'fooddesc' => ['required']

        ];
    }

    public function messages()
    {
         return[
            'foodname.required'=>"The food Name required",
            'fooddesc.required'=>"The food Description required"
         ];
    }
}
