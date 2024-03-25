<?php

declare(strict_types=1);

namespace App\Http\Requests\Agent;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateAgentRequest extends FormRequest
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
            'description' => ['required', 'string']
        ];
    }
}
