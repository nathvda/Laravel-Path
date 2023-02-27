<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateClientRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'society' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'tva' => 'required|regex:/BE\s(\d){9}/',
        ];
    }

    public function messages(): array
    {
        return [
            'society.required' => 'Veuillez fournir un nom de société',
            'phone.required' => 'Veuillez fournir un numéro de téléphone',
            'email.required' => 'Veuillez fournir une adresse e-mail',
            'tva.required' => 'Veuillez renseigner un numéro de TVA',
            'tva.regex' => 'Le numéro de TVA doit être au format BE XXXXXXXXX'
        ];
    }
}
