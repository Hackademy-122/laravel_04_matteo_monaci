<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        //? lasciando false non partirà niente

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
            // 'name' => 'required|min:5',
            'name' => 'min:5|required',
            'price' => 'required|numeric|min:2',
            'brand' => 'required|min:3|max:30',
            'img' => 'image',
        ];
    }

    //! il nome della funzione è obbligatoria - gli errori verranno comunicato in base all'ordine della funzione rule, se name è vuoto NON dirà che deve essere almeno di 5 caratteri. NON PROPRIO, se si inserisce prima min e poi required comunque required viene comunicato
    public function messages() {
        return [
            'name.required' => "Il campo nome non può rimanere vuoto",
            'name.min' => "il nome deve contenere almeno 5 caratteri",
            'price.required' => "il prezzo va necessariamente inserito",
            'price.numeric' => "il campo prezzo deve essere per forza un numero",
            'price.min' => "il prezzo deve avere almeno 2 decimali",
            'brand.required' => "il campo brand non può essere lasciata vuota",
            'brand.min' => "il brand deve contenere almeno 3 caratteri",
            'brand.max' => "il brand può al massimo contenere 30 caratteri",
            'img.image' => "questo campo deve necessariamente accogliere un'immagine"
        ];
    }
}
