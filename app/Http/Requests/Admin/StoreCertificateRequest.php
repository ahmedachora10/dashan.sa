<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreCertificateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'image' => strtolower($this->method()) == 'put' ? 'nullable|image' : 'required|image',
            'title_ar' =>  ['nullable', 'string'],
            'title_en' =>  ['nullable', 'string'],
        ];
    }
}