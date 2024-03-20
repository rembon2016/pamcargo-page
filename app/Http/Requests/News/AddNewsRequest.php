<?php

declare(strict_types=1);

namespace App\Http\Requests\News;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class AddNewsRequest extends FormRequest
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
            'title' => ['required', 'string', 'max:255'],
            'caption' => ['required', 'string', 'max:255'],
            'image_files' => ['required'],
            'image_files.*' => ['image', 'max:2048'],
            'description' => ['required', 'string'],
        ];
    }

    /**
     * @return array
     */
    public function attributes()
    {
        return [
            'image_files' => 'Image',
        ];
    }
}
