<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => ['required', 'email:rfc', 'max:255'],
            'password' => ['required', 'min:8', 'max:255'],
        ];
    }

    public function messages(): array
    {
        return [
            'required' => ':attribute tidak boleh kosong!',
            'min' => ':attribute minimal :min!',
            'max' => ':attribute maksimal :max!',
            'email' => 'format email salah!'
        ];
    }
}
