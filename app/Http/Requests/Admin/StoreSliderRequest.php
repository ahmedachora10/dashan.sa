<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreSliderRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title_ar' => ['nullable', 'string'],
            'title_en' => ['nullable', 'string'],
            'image' => strtolower($this->method()) == 'put' ? 'nullable|image' : 'required|image',
        ];
    }
}