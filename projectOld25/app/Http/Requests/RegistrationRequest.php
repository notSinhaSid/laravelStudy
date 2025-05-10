<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return TRUE;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
        ];
    }

    public function messages()
    {
        return[
            'name.required'=>'This is mandatory field',
            'password.required'=>'Keep your account secured',
        ];
    }

    public function attributes()
    {
        return  [
            'email'=>'Mailing address',
        ];
    }
}
