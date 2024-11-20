<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ModePaiementRequest extends FormRequest
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
			'nom_mode' => 'required|string',
			'reference' => 'string',
			'montant' => 'required',
			'etudiant_id' => 'required',
			'date_paiement' => 'required',
			'description' => 'string',
			'devise' => 'required|string',
        ];
    }
}
