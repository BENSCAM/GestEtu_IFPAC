<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EtudiantRequest extends FormRequest
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
			'Matricule' => 'required|string',
			'Nom' => 'required|string',
			'Prenom' => 'required|string',
			'Sexe' => 'required|string',
			'DateNaissance' => 'required',
			'Adresse' => 'string',
			'Telephone' => 'required',
			'Email' => 'required|string',
        ];
    }
}
