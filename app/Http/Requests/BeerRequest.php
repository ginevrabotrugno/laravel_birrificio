<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BeerRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'name' => 'required|min:3|max:100',
            'price' => 'required|min:2',
            'average' => 'required|numeric|min:0|max:5',
            'image' => 'required|max:255'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Il nome è un campo obbligatorio',
            'name.min' => 'Il nome deve avere almeno :min caratteri',
            'name.max' => 'Il nome deve avere massimo :max caratteri',
            'price.required' => 'Il prezzo è un campo obbligatorio',
            'price.min' => 'Il prezzo deve avere almeno :min caratteri',
            'average.required' => 'Il voto è un campo obbligatorio',
            'average.numeric' => 'Il voto deve essere numerico',
            'average.min' => 'Il voto deve avere almeno :min caratteri',
            'average.max' => 'Il voto deve avere massimo :max caratteri',
            'image.required' => 'L\'immagine è un campo obbligatorio',
            'image.max' => 'L\'immagine deve avere massimo :max caratteri'
        ];
    }
}
