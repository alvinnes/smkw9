<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActivityRequest extends FormRequest
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
            'judul_kegiatan' => ['required', 'min:20', 'max:174'],
            'desk_kegiatan' => ['required', 'min:30'],
            'img_url' => ['required'],
        ];
    }

    public function messages(): array
    {
        return [
            'required' => ':attribute tidak boleh kosong!',
            'img_url.required' => 'gambar tidak boleh kosong!',
            'min' => ':attribute minimal :min!',
            'max' => ':attribute maksimal :max!',
        ];
    }
}
