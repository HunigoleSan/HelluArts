<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */

    public function prepareForValidation()
    {
        $this->merge([
            'correo' => strtolower(filter_var(trim((string) $this->correo),FILTER_SANITIZE_EMAIL))
        ]);
    }
    
    public function rules() :array {
        return [
            'correo' => 'required|string|email:rfc,dns|max:255',
            'contrasenia' => ['required','string',Password::min(0)->max(64)]
        ];
    }

    public function attributes()
    {
        return [
            'contrasenia' => "contraseña"
        ];
    }
}
