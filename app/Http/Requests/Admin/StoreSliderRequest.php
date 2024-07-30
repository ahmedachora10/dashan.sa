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
            // 'title_ar' => ['nullable', 'string'],
            // 'title_en' => ['nullable', 'string'],
            'link' => ['nullable', 'string'],
            'top' => ['nullable', 'integer'],
            'left' => ['nullable', 'integer'],
            'right' => ['nullable', 'integer'],
            'bottom' => ['nullable', 'integer'],
            'image_ar' => strtolower($this->method()) == 'put' ? 'nullable|image' : 'required|image',
            'image_en' => strtolower($this->method()) == 'put' ? 'nullable|image' : 'required|image',
        ];
    }
}
