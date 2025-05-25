<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreJobPostRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title_ar'              => 'required|string',
            'title_en'              => 'required|string',
            'location_ar'           => 'required|string',
            'location_en'           => 'required|string',
            'type_ar'               => 'required|string',
            'type_en'               => 'required|string',
            'responsibilities_ar'   => 'required|string',
            'responsibilities_en'   => 'required|string',
            'description_ar'        => 'required|string',
            'description_en'        => 'required|string',
            'experience_ar'         => 'required|string',
            'experience_en'         => 'required|string',
            'qualifications_ar'     => 'required|string',
            'qualifications_en'     => 'required|string',
            'code'                  => 'required|integer',
        ];
    }
}
