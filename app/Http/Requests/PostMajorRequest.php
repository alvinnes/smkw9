<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostMajorRequest extends FormRequest
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
            'nama' => ['required', 'min:13'],
            'img_url' => ['required'],
            'bg_img' => ['required'],
            'deskripsi' => ['required', 'min:30']
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute tidak boleh kosong!',
            'img_url.required' => 'gambar tidak boleh kosong!',
            'min' => ':attribute terlalu pendek!',
        ];
    }
}
