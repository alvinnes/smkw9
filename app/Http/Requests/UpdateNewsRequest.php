<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateNewsRequest extends FormRequest
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
            'judul_berita' => ['sometimes', 'max:255', 'min:20'],
            'kategori' => ['sometimes', 'max:255'],
            'isi_berita' => ['sometimes', 'min:30'],
            'img_url' => ['sometimes'],
        ];
    }

    public function messages(): array
    {
        return [
            'min' => ':attribute minimal :min!',
            'max' => ':attribute maksimal :max!',
        ];
    }
}
