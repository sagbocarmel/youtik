<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActivityRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'secteur_activite' => 'required',
            'professsion' => 'required',
            'revenus_mensuel' => 'required',
            'duree_mois' => 'nullable',
            'duree_annee' => 'nullable',
            'liquidation' => 'nullable',
            'type_contrat' => 'nullable'
        ];
    }
}
