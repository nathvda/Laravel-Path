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
            'name.max' => 'Max 25 letters please',
            'description.required' => 'The description is required',
            'description.min' => 'Min 100 letters please',
            'description.max' => 'Max 300 letters please',
            'zipCode.required' => 'The zipCode is required',
            'zipCode.min' => 'Min 5 characters please',
            'zipCode.max' => 'Max 25 characters please',
            'town.required' => 'The town is required',
            'town.min' => 'Min 4 characters please',
            'town.max' => 'Max 40 characters please',
            'review.required' => 'The review is required',
            'review.min' => 'Min 1 please',
            'review.max' => 'Max 5 please',
            'adress.required' => 'The adress is required',
            'adress.min' => 'Min 10 please',
            'adress.max' => 'Max 256 please'
        ];
    }
}
