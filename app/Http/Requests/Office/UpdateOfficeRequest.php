<?php

declare(strict_types=1);

namespace App\Http\Requests\Office;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateOfficeRequest extends FormRequest
{
    /**
     * @return bool
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * @return array
     */
    public function rules(): array
    {
        return [
            'country_id' => ['required', 'string', 'exists:countries,id'],
            'continent_id' => ['required', 'string', 'exists:continents,id'],
            'name' => ['required', 'string', 'max:255'],
            'image_file' => ['nullable', 'image'],
            'longitude' => ['required', 'string', 'max:255'],
            'latitude' => ['required', 'string', 'max:255'],
            'first_contact_name' => ['required', 'string', 'max:100'],
            'second_contact_name' => ['nullable', 'string', 'max:100'],
            'first_telp_num' => ['required', 'string'],
            'second_telp_num' => ['nullable', 'string'],
            'first_fax' => ['required', 'string'],
            'second_fax' => ['nullable', 'string'],
            'first_mob' => ['required', 'string'],
            'second_mob' => ['nullable', 'string'],
            'first_email' => ['required', 'string'],
            'second_email' => ['nullable', 'string'],
            'first_website' => ['required', 'url'],
            'second_website' => ['nullable', 'url'],
            'address' => ['required', 'string'],
        ];
    }
}
