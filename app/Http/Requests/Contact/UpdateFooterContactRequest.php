<?php

declare(strict_types=1);

namespace App\Http\Requests\Contact;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFooterContactRequest extends FormRequest
{
    /**
     * @return bool
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * @return array
     */
    public function rules(): array
    {
        return [
            //
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            //
        ];
    }

    /**
     * @return array
     */
    public function attributes()
    {
        return [
            //
        ];
    }
}
