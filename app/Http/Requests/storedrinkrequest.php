<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storedrinkrequest extends FormRequest
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
            'drinkname' => ['required'],
            'drinkdesc' => ['required']

        ];
    }

    public function messages()
    {
         return[
            'drinkname.required'=>"The drink Name required",
            'drinkdesc.required'=>"The drink Description required"
         ];
    }
}
