<?php

namespace App\Http\Controllers;

use App\Emprunt;
use App\Http\Requests\ActivityRequest;
use App\Http\Requests\FamilyRequest;
use App\Http\Requests\LogementRequest;
use App\Http\Requests\MailRequest;
use App\Http\Requests\PersonalRequest;
use App\Http\Requests\PositionRequest;
use App\Http\Requests\ProjectRequest;
use Illuminate\Http\Request;

class EmpruntController extends Controller
{
    public function redirectTo()
    {
        return app()->getLocale();
    }

    public function mail()
    {
        return view('forms.form-mail-step');
    }
    public function famille()
    {
        return view('forms.form-family-step');
    }
    public function logement()
    {
         return view('forms.form-logement-step');
    }
    public function activity()
    {
         return view('forms.form-activite-step');
    }
    public function personnel()
    {
        return view('forms.form-personal-step');

    }
    public function coordonnee()
    {
        return view('forms.form-cordonee-step');
    }

    /**
     * @param ProjectRequest $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function postProjet(ProjectRequest $request){

        $data = [
            'projet' => $request->projet,
            'montant_emprunt' => $request->montant_emprunt,
            'duree_remboursement' => $request->duree_projet
        ];

         $projets = ['Prêt Automobile',
            'Prêt Immobilier',
          'Rachat de Crédit',
           'Financement de projets',
           'Crédit agricole'
           ];
        $i = 1;
        foreach ($projets as $projet)
        {
            if($i == $data['projet']){
                $data['projet'] = $projet;
                break;
            }
            $i = $i + 1;
        }

        if($request->projet == 'autre' && $request->autre_projet != '')
        {
            $data['projet'] = $request->autre_projet;
        }
        else if($request->projet == 'autre')
        {
            return view('pages.home');
        }

        $empruntDetails = Emprunt::create($data);
        session(['projectId' => $empruntDetails->id]);
        return view('forms.form-mail-step', compact('empruntDetails'));

    }

    /**
     * @param MailRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postMail(MailRequest $request, $id)
    {
        $data = [
            'email' => $request->email
        ];
        $empruntDetails = Emprunt::where('id',$id)->first();
        $empruntDetails->email = $data['email'];
        $empruntDetails->save();
        session(['projectId' => $empruntDetails->id]);
        return redirect()->route('family', compact('empruntDetails'));
    }

    /**
     * @param FamilyRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postFamille(FamilyRequest $request, $id)
    {

        $empruntDetails = Emprunt::where('id',$id)->first();
        $empruntDetails->situation_familiale = $request->famille;
        $empruntDetails->marie = $request->marie;
        $empruntDetails->jugement = $request->jugement;
        $empruntDetails->nbre_enfants = $request->enfants;

        $empruntDetails->save();
        session(['projectId' => $empruntDetails->id]);
        return redirect()->route('logement', compact('empruntDetails'));

    }

    /**
     * @param LogementRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postLogement(LogementRequest $request, $id)
    {
        $empruntDetails = Emprunt::where('id',$id)->first();

        switch ($request->logement){
            case 'locataire':
                $empruntDetails->logement = 'Locataire'
                ;
                break;
            case 'proprietaire_avec_credit':
                $empruntDetails->logement = 'Propriétaire(avec crédit immobilier en cours)'
                ;
                break;
            case 'prosans':
                $empruntDetails->logement = 'Propriétaire(sans crédit immobilier en cours)'
                ;
                break;
            case 'logepar_en':
                $empruntDetails->logement = 'Logé(e) par les parents ou les enfants'
                ;
                break;
            case 'logeadm':
                $empruntDetails->logement = 'Logé(e) par l’administration'
                ;
                break;
            case 'logecon':
                $empruntDetails->logement =   'Logé(e) par le(la) conjointe'
                ;
                break;
            case 'logefam':
                $empruntDetails->logement = 'Logé(e) par un autre membre de la famille'
                ;
                break;
            case 'sdf':
                $empruntDetails->logement = 'Sans domicile fixe(Hôtel...)'
                ;
                break;
        }
        $empruntDetails->annee_logement = $request->annee_logement;
        $empruntDetails->mois_logement = $request->mois_logement;

        $empruntDetails->save();
        session(['projectId' => $empruntDetails->id]);
        return redirect()->route('activity', compact('empruntDetails'));
    }

    /**
     * @param ActivityRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postActivity(ActivityRequest $request , $id)
    {
        $empruntDetails = Emprunt::where('id',$id)->first();

        switch ($request->secteur_activite){
            case 'sal_priv':
                $empruntDetails->secteur_activite = 'Salarié(e) du secteur privé';
                $empruntDetails->duree_mois =  $request->duree_mois;
                $empruntDetails->duree_annee = $request->duree_annee;
                $empruntDetails->type_contrat = $request->type_contrat;
                switch ($request->professsion){
                    case 'agent_sec':
                        $empruntDetails->professsion = 'Agent de sécurité'
                        ;
                        break;
                    case 'assistant':
                        $empruntDetails->professsion = 'Assistant(e) maternelle-Employé(e) de maison'
                        ;
                        break;
                    case 'cadre_moy':
                        $empruntDetails->professsion = 'Cadre moyen'
                        ;
                        break;
                    case 'cadre_sup':
                        $empruntDetails->professsion = 'Cadre supérieur'
                        ;
                        break;
                    case 'chauf_livre':
                        $empruntDetails->professsion = 'Chauffeur et livreur'
                        ;
                        break;
                    case 'contremaitre':
                        $empruntDetails->professsion =   'Contremaître-Agent de maîtrise'
                        ;
                        break;
                    case 'empl_bureau':
                        $empruntDetails->professsion = 'Employé(e) de bureau'
                        ;
                        break;
                    case 'empl_commerce':
                        $empruntDetails->professsion = 'Employé(e) de commerce'
                        ;
                        break;
                    case 'ingenieur':
                        $empruntDetails->professsion = 'Ingénieur'
                        ;
                        break;
                    case 'ouvrier':
                        $empruntDetails->professsion = 'Ouvrier'
                        ;
                        break;
                    case 'rep_salarie':
                        $empruntDetails->professsion =   'Représentant salarié'
                        ;
                        break;
                    case 'technicien':
                        $empruntDetails->professsion = 'Technicien'
                        ;
                        break;
                    case 'vendeur_caiss':
                        $empruntDetails->professsion = 'Vendeur(se)- Caissier(ère) de maison'
                        ;
                        break;
                }
                $empruntDetails->type_contrat = $request->type_contrat;
                break;
            case 'sal_pub':
                $empruntDetails->secteur_activite = 'Salarié(e) du secteur public';
                $empruntDetails->duree_mois =  $request->duree_mois;
                $empruntDetails->duree_annee = $request->duree_annee;
                $empruntDetails->type_contrat = $request->type_contrat;
                switch ($request->professsion){
                    case 'agent':
                        $empruntDetails->professsion = 'Agent de service'
                        ;
                        break;
                    case 'aide_soignant':
                        $empruntDetails->professsion = 'Aide soigant hospitalier'
                        ;
                        break;
                    case 'cadre_moy_inst':
                        $empruntDetails->professsion = 'Cadre moyen et instituteur(trice)'
                        ;
                        break;
                    case 'cadre_sup_pro':
                        $empruntDetails->professsion = 'Cadre supérieur et professeur'
                        ;
                        break;
                    case 'empl_agent':
                        $empruntDetails->professsion = 'Employé(e) et agent administratif'
                        ;
                        break;
                    case 'inf_para_med':
                        $empruntDetails->professsion =   'Infirmier(ère) et profession para-médicale'
                        ;
                        break;
                    case 'corps_arme':
                        $empruntDetails->professsion = 'Militaire-Gendarme-Policier-Pompier'
                        ;
                        break;
                    case 'ouvr_etat':
                        $empruntDetails->professsion = 'Ouvrier d’état'
                        ;
                        break;
                }
                $empruntDetails->type_contrat = $request->type_contrat;
                break;
            case 'agricole':
                $empruntDetails->secteur_activite = 'Secteur agricole';
                switch ($request->professsion){
                    case 'pro_agricole':
                        $empruntDetails->professsion = 'Propriétaire agricole';
                        $empruntDetails->liquidation = $request->liquidation;
                        break;
                    case 'sal_agricole':
                        $empruntDetails->professsion = 'Salarié(e) agricole';
                        $empruntDetails->type_contrat = $request->type_contrat;
                        $empruntDetails->duree_mois =  $request->duree_mois;
                        $empruntDetails->duree_annee = $request->duree_annee;
                        break;
                }
                break;
            case 'indep':
                $empruntDetails->secteur_activite = 'Indépendants/Travailleurs non salariés';
                $empruntDetails->duree_mois =  $request->duree_mois;
                $empruntDetails->duree_annee = $request->duree_annee;
                switch ($request->professsion){
                    case 'artisan':
                        $empruntDetails->professsion = 'Artisan';
                        break;
                    case 'auto_entrep':
                        $empruntDetails->professsion = 'Auto-Entrepreneur';
                        break;
                    case 'chef_entrep':
                        $empruntDetails->professsion = 'Chef d’entreprise de 5 salariés ou +';
                        break;
                    case 'commercant':
                        $empruntDetails->professsion = 'Commerçant(e)';
                        break;
                    case 'infirm':
                        $empruntDetails->professsion = 'Infirmier(ère)et cadre moyen du secteur médical';
                        break;
                    case 'intermittent':
                        $empruntDetails->professsion =   'Intermittent/Professionnel du spectacle';
                        break;
                    case 'pro_liberale':
                        $empruntDetails->professsion = 'Profession libérale';
                        break;
                    case 'pro_med_param':
                        $empruntDetails->professsion = 'Profession libérale médicale et paramédicale';
                        break;
                    case 'vrp':
                        $empruntDetails->professsion = 'VRP sansfixe';
                        break;
                }
                break;
            case 'retraite':
                $empruntDetails->secteur_activite = 'Retraité(e)';
                $empruntDetails->duree_mois =  $request->duree_mois;
                $empruntDetails->duree_annee = $request->duree_annee;
                switch ($request->professsion){
                    case 'retraite_prive':
                        $empruntDetails->professsion = 'Retraité du secteur privé';
                        break;
                    case 'retraite_public':
                        $empruntDetails->professsion = 'Retraité du secteur public';
                        break;
                }
                break;
            case 'autres':
                $empruntDetails->secteur_activite =   'Autres';
                switch ($request->professsion){
                    case 'dem_emploi':
                        $empruntDetails->professsion = 'Demandeur d’emploi';
                        break;
                    case 'etudiant':
                        $empruntDetails->professsion = 'Etudiant';
                        break;
                    case 'pension':
                        $empruntDetails->professsion = 'Pensionné';
                        break;
                    case 'sans_pro_empl':
                        $empruntDetails->professsion = 'Sans profession-Sans emploi';
                        break;
                }
                break;
        }

        $empruntDetails->revenus_mensuel = $request->revenus_mensuel;

        $empruntDetails->save();
        session(['projectId' => $empruntDetails->id]);
        return redirect()->route('personal', compact('empruntDetails'));
    }

    /**
     * @param PersonalRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postPersonnel(PersonalRequest $request, $id)
    {
        $empruntDetails = Emprunt::where('id',$id)->first();
        $empruntDetails->nom = $request->nom;
        $empruntDetails->prenom = $request->prenom;
        $empruntDetails->date_naissance = $request->date_naissance;
        $empruntDetails->ville_naissance = $request->ville_naissance;

        $empruntDetails->save();
        session(['projectId' => $empruntDetails->id]);
        return redirect()->route('info', compact('empruntDetails'));


    }

    /**
     * @param PositionRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postCoordonnee(PositionRequest $request, $id)
    {

        $empruntDetails = Emprunt::where('id',$id)->first();
        $empruntDetails->telephone = $request->telephone;
        $empruntDetails->pays_residence = $request->pays_residence;
        $empruntDetails->ville_residence = $request->ville_residence;
        $empruntDetails->code_postal = $request->code_postal;
        $empruntDetails->adresse = $request->adresse;

        $empruntDetails->save();
        session(['projectId' => $empruntDetails->id]);
        return redirect()->route('home', compact('empruntDetails'));
    }
}
