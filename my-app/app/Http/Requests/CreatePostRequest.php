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
            'name' => 'required|min:5|max:25',
            'description' => 'required|min:100|max:300',
            'zipCode' => 'required|min:5|max:25',
            'town' => 'required|min:4|max:40',
            'review' => 'required|min:1|max:5',
            'adress' => 'required|min:10|max:256'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'The name is required',
            'name.min' => 'Min 5 letters please',
            'name.max' => 'Max 25 letters please'
        ];
    }
}
