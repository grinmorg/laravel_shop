<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class SignUpFormRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->guest();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:3'],
            'email' => ['required', 'email:dns', 'unique:users'],
            'password' => ['required', 'confirmed', Password::default()],
        ];
    }


    // Подготовка к валидации
    protected function prepareForValidation()
    {
        // squish - убирает пробелы
        // lower - нижний регистр
        // value - вернет строку (без него объект)
        $this->merge([
            'email' => str( request('email') )
                ->squish()
                ->lower()
                ->value()
        ]);
    }
}
