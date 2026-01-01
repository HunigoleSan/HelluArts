<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class RegisterRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'nombre' => [
                'required',
                'string',
                'min:2',
                'max:30',
                'regex:/^[A-Za-zÁÉÍÓÚáéíóúÑñÜü\s]+$/u'
            ],
            'nombre_usuario' => [
                'required',
                'string',
                'min:2',
                'max:50',
                'alpha_dash',
                'unique:usuarios,nombre_usuario',
                'regex:/^[\p{L}\p{N}_\-\.\p{So}]+$/u'
            ],
            'correo' => 'required|string|email:rfc,dns|max:255|unique:usuarios,correo',
            'contrasenia' => ['required','string',Password::min(8)->numbers()->letters()->max(64)]
        ];
    }

    public function messages()
    {
        return [
            'nombre.regex' => __('validation.custom.nombre.regex'),
            'nombre_usuario.regex' => __('validation.custom.nombre_usuario.regex'),
        ];
    }

    public function attributes()
    {
        return [
            'nombre_usuario' => 'nombre de usuario',
            'contrasenia' => 'contraseña'
        ];
    }

    
}
