<?php

declare(strict_types=1);

namespace App\Http\Requests\Slider;

use Illuminate\Foundation\Http\FormRequest;

class AddSliderRequest extends FormRequest
{
    /**
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable'],
            'image_file' => ['required', 'image']
        ];
    }

    /**
     * @return array
     */
    public function attributes()
    {
        return [
            'image_file' => 'Image',
        ];
    }
}
