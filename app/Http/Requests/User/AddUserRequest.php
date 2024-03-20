<?php

declare(strict_types=1);

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class AddUserRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8'],
            'address' => ['nullable', 'string'],
            'role_id' => ['required', 'string', 'exists:roles,id']
        ];
    }

    /**
     * @return array
     */
    public function attributes()
    {
        return [
            'role_id' => 'Role',
        ];
    }
}
