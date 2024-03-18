<?php

declare(strict_types=1);

namespace App\Http\Requests\EmailCarbon;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class AddEmailCarbonRequest extends FormRequest
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
            'email' => ['required', 'email', 'unique:email_carbons,email']
        ];
    }
}
