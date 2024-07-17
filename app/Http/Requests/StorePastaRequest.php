<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePastaRequest extends FormRequest
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
            'title' => 'required|min:5|max:50|string',
            'cooking_time' => 'integer|nullable|min:0',
            'weight' => 'integer|nullable',
            'description' => 'string|nullable',
            'image' => 'nullable'
        ];
    }


    public function messages()
    {
        return [
            'title.required' => 'Il titolo è obbligatorio',
            'cooking_time.min' => 'Ahia, non hai rispettato il valore minimo'
        ];
    }
}

//Request -> default
//PastaRequest -> Aggiornamento e Creazione -> ComicRequest

//StorePastaRequest -> richieste di creazione
//UpdatePastaRequest -> richieste di aggiornamento
