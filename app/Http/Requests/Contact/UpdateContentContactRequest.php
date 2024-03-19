<?php

declare(strict_types=1);

namespace App\Http\Requests\Contact;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateContentContactRequest extends FormRequest
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
            'mark' => ['required', 'string', 'max:255'],
            'title' => ['required', 'string', 'max:255'],
            'icon' => ['nullable', 'image'],
            'description' => ['required', 'string'],
        ];
    }

    /**
     * @return array
     */
    public function attributes()
    {
        return [
            'mark' => 'Mark/Head'
        ];
    }
}
