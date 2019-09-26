<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emprunt extends Model
{
        
    protected $fillable = [
        'projet',
        'montant_emprunt',
        'duree_remboursement',
        'email',
        'situation_familiale',
        'marie',
        'jugement',
        'nbre_enfants',
        'logement',
        'mois_logement',
        'annee_logement',
        'secteur_activite',
        'professsion',
        'type_contrat',
        'duree_mois',
        'duree_annee',
        'liquidation',
        'revenus_mensuel',
        'nom',
        'prenom',
        'date_naissance',
        'ville_naissance',
        'telephone',
        'pays_residence',
        'ville_residence',
        'code_postal',
        'adresse'
    ];
}
