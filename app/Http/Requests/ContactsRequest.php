<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactsRequest extends FormRequest
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
            'nama' => ['required', 'min:3', 'max:255'],
            'email' => ['required', 'email:rfc', 'max:255'],
            'pesan' => ['required']
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
