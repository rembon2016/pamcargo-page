<?php

declare(strict_types=1);

namespace App\Http\Requests\Continent;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class AddContinentRequest extends FormRequest
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
            'region' => ['required', 'string', 'max:255', 'unique:continents,region'],
            'description' => ['required', 'string'],
        ];
    }
}
