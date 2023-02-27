<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
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
            'ref' => 'required|regex:/^REF\d{3}-\d{3}-\d{2}$/',
            'title' => 'required',
            'price' => 'required',
            'tva' => 'required',
            'client' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'ref.required' => 'Votre facture doit avoir une référence',
            'ref.regex' => 'La référence doit répondre au format suivant : REFXXX-XXX-XX',
            'title.required' => 'Votre facture doit avoir un titre',
            'price.required' => 'Le prix doit être renseigné',
            'tva.required' => 'La TVA doit être renseignée',
            'client.required' => 'Veuillez choisir un client'
            ];
    }
}
