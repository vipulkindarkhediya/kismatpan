<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;


class RegisterRequest extends FormRequest {
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'name' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'contact' => 'required',
            'countrie' => 'required',
            'state' => 'required',
            'district' => 'required',
            'sub_district' => 'required',
            'village' => 'required',
            'postcode' => 'required',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'address' => 'required',
            'photo' => 'required',

        ];
    }

    public function messages(): array
    {
        return [
            //
            'name.required' => 'Please enter your name.',
            'email.required' => 'Please enter your email address.',
            'gender.required' => 'Please select your gender.',
            'contact.required' => 'Please enter your contact number.',
        ];
    }
}
