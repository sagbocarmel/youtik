@extends('layouts.master')

@section('content')
    <div class="container"  id="fieldprof" >
        <div class="row justify-content-center mt-30 mb-30">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{__('Situation professionnelle')}}</div>

                    <div class="card-body">

                        <form id="regiration_form"  action="/activity/{{session('projectId')}}"  method="post" class="container" >
                            {{csrf_field()}}

                            <div class="form-group row">

                                <label for="sp" class="col-md-4 col-form-label text-md-right">{{__('Secteur d’activité')}}</label>

                                <!-- Secteur d'activité -->
                                <div class="col-md-6">
                                    <select id="sp" name="secteur_activite" class="form-control" style="font-size: medium;" onclick='secteurs_activite()' required>
                                        <option selected value="">{{__('Choisissez votre secteur d’activité')}}</option>
                                        <option value="sal_priv">{{__('Salarié(e) du secteur privé')}}</option>
                                        <option value="sal_pub">{{__('Salarié(e) du secteur public')}}</option>
                                        <option value="agricole">{{__('Secteur agricole')}}</option>
                                        <option value="indep">{{__('Indépendants/Travailleurs non salariés')}}</option>
                                        <option value="retraite">{{__('Retraité(e)')}}</option>
                                        <option value="autres">{{__('Autres')}}</option>
                                    </select>
                                </div>
                            </div>



                            <!-- Section secteur privé-->


                            <div class="form-group row" id="sp1" style="display: none">

                                <label for="sp2" class="col-md-4 col-form-label text-md-right">{{__('Profession')}}</label>

                                <div class="col-md-6">
                                    <select id="sp2" class="form-control" style="font-size: medium;" onclick='secteur()' >
                                        <option selected value="">{{__('Choisissez votre profession')}}</option>
                                        <option value="agent_sec">{{__('Agent de sécurité')}}</option>
                                        <option value="assistant">Assistant(e) maternelle-Employé(e) de maison</option>
                                        <option value="cadre_moy">{{__('Cadre moyen')}}</option>
                                        <option value="cadre_sup">{{__('Cadre supérieur')}}</option>
                                        <option value="chauf_livre">{{__('Chauffeur et livreur')}}</option>
                                        <option value="contremaitre">{{__('Contremaître-Agent de maîtrise')}}</option>
                                        <option value="empl_bureau">{{__('Employé(e) de bureau')}}</option>
                                        <option value="empl_commerce">{{__('Employé(e) de commerce')}}</option>
                                        <option value="ingenieur">{{__('Ingénieur')}}</option>
                                        <option value="ouvrier">{{__('Ouvrier')}}</option>
                                        <option value="rep_salarie">{{__('Réprésentant salarié')}}</option>
                                        <option value="technicien">{{__('Technicien')}}</option>
                                        <option value="vendeur_caiss">{{__('Vendeur(se)- Caissier(ère) de maison')}}</option>
                                    </select>

                                </div>
                            </div>

                            <!-- Section secteur public-->
                            <div class="form-group row" id="sp6" style="display: none">

                                <label for="sp7" class="col-md-4 col-form-label text-md-right">{{__('Profession')}}</label>

                                <div class="col-md-6">

                                    <select id="sp7" name="professsion" class="form-control" style="font-size: medium;" onclick='secteur_pub()' >
                                        <option selected value="">{{__('Choisissez votre profession')}}</option>
                                        <option value="agent">{{__('Agent de service')}}</option>
                                        <option value="aide_soignant">{{__('Aide soigant hospitalier')}}</option>
                                        <option value="cadre_moy_inst">{{__('Cadre moyen et instituteur(trice)')}}</option>
                                        <option value="cadre_sup_pro">{{__('Cadre supérieur et professeur')}}</option>
                                        <option value="empl_agent">{{__('Employé(e) et agent administratif')}}</option>
                                        <option value="inf_para_med">{{__('Infirmier(ère) et profession para-médicale')}}</option>
                                        <option value="corps_arme">{{__('Militaire-Gendarme-Policier-Pompier')}}</option>
                                        <option value="ouvr_etat">{{__('Ouvrier d’état')}}</option>

                                    </select>

                                </div>
                            </div>

                            <!-- Section secteur independant-->

                            <div class="form-group row" id="sp12" style="display: none">

                                <label for="sp13" class="col-md-4 col-form-label text-md-right">{{__('Profession')}}</label>

                                <div class="col-md-6">

                                    <select id="sp13" name="professsion" class="form-control" style="font-size: medium;" onclick='independant()'>
                                        <option selected value="">{{__('Choisissez votre profession')}}</option>
                                        <option value="artisan">{{__('Artisan')}}</option>
                                        <option value="auto_entrep">{{__('Auto-Entrepreneur')}}</option>
                                        <option value="chef_entrep">{{__('Chef d’entreprise de 5 salariés ou +')}}</option>
                                        <option value="commercant">{{__('Commerçant(e)')}}</option>
                                        <option value="infirm">{{__('Infirmier(ère)et cadre moyen du secteur médical')}}</option>
                                        <option value="intermittent">{{__('Intermittent/Professionnel du spectacle')}}</option>
                                        <option value="pro_liberale">{{__('Profession libérale')}}</option>
                                        <option value="pro_med_param">{{__('Profession libérale médicale et paramédicale')}}</option>
                                        <option value="vrp">{{__('VRP sansfixe')}}</option>

                                    </select>
                                </div>

                            </div>

                            <!-- Section secteur agricole-->

                            <div class="form-group row" id="sp8" style="display: none">

                                <label for="sp7" class="col-md-4 col-form-label text-md-right">{{__('Profession')}}</label>

                                <div class="col-md-6">

                                    <select id="sp9" name="professsion" class="form-control" style="font-size: medium;" onclick='secteur_agri()' >
                                        <option selected value="">{{__('Choisissez votre profession')}}</option>
                                        <option value="pro_agricole">{{__('Propriétaire agricole')}}</option>
                                        <option value="sal_agricole">{{__('Salarié(e) agricole')}}</option>

                                    </select>

                                </div>
                            </div>

                            <!-- Section secteur retraite-->

                            <div class="form-group row" id="sp14" style="display: none">
                                <label for="sp7" class="col-md-4 col-form-label text-md-right">{{__('Profession')}}</label>

                                <div class="col-md-6">

                                    <select id="sp15" name="professsion" class="form-control" style="font-size: medium;" onclick='retraite()' >
                                        <option selected value="">{{__('Choisissez votre profession')}}</option>
                                        <option value="retraite_prive">{{__('Retraité du secteur privé')}}</option>
                                        <option value="retraite_public">{{__('Retraité du secteur public')}}</option>
                                    </select>

                                </div>
                            </div>

                            <!-- Section secteur autres-->

                            <div class="form-group row" id="sp17" style="display: none">

                                <label for="sp18" class="col-md-4 col-form-label text-md-right">Profession</label>

                                <div class="col-md-6">

                                    <select id="sp18" name="professsion" class="form-control" style="font-size: medium;" onclick='autres()' >
                                        <option selected value="">{{__('Choisissez votre profession')}}</option>
                                        <option value="dem_emploi">{{__('Demandeur d’emploi')}}</option>
                                        <option value="etudiant">{{__('Etudiant')}}</option>
                                        <option value="pension">{{__('Pensionné')}}</option>
                                        <option value="sans_pro_empl">{{__('Sans profession-Sans emploi')}}</option>

                                    </select>

                                </div>
                            </div>


                            <!-- Section type de contrat-->

                            <div class="form-group row"  id="sp3" style="display: none">

                                <label for="sp4" class="col-md-4 col-form-label text-md-right">Quel est le type de contrat ?</label>

                                <div class="col-md-6" >

                                    <select id="sp4" name="type_contrat" class="form-control" style="font-size: medium;" onclick='contrat()' >
                                        <option selected value="">{{__('Choisissez votre contrat de travail')}}</option>
                                        <option value="cdi">{{__('CDI')}}</option>
                                        <option value="cdd">{{__('CDD')}}</option>
                                        <option value="interimaire">{{__('Intérimaire')}}</option>
                                        <option value="ini_di">{{__('Contrat initiative emploi à duréé indeterminée')}}</option>
                                        <option value="ini_dd">{{__('Contrat initiative emploi à duréé determinée')}}</option>
                                        <option value="contrat_jeune">{{__('Contrat emploi jeune')}}</option>
                                        <option value="contrat_accomp">{{__('Contrat d’accompagnement dans l’emploi')}}</option>
                                        <option value="cne">{{__('CNE')}}</option>
                                        <option value="contrat_jeu_ent">{{__('Contrat jeune en entreprise')}}</option>

                                    </select>


                                </div>
                            </div>



                            <!-- Section durée de contrat-->


                            <div class="form-group row" id="sp5" style="display: none">

                                <label for="sp5" class="col-md-4 col-form-label text-md-right">{{__('Depuis quand ?')}}</label>


                                <!-- Mois retraite -->
                                <div class="col-md-3">
                                    <select id="mois_duree"  name="duree_mois" class=" month form-control" style="font-size: medium;" >
                                        <option value="" selected>MM</option>
                                    </select>
                                </div>

                                <!-- Année retraite-->
                                <div class="col-md-3">
                                    <select id="annee_duree"  name="duree_annee" class=" year form-control" style="font-size: medium;" >
                                        <option value="" selected>AAAA</option>
                                    </select>
                                </div>

                            </div>



                            <!-- Liquidation de société-->

                            <div class="form-group row" id="sp11" style="display: none">

                                <label for="sp11" class="col-md-4 col-form-label text-md-right">{{__('Une de vos sociétés est-elle en liquidation ou procédure collective ?')}}</label>

                                <div class="col-md-3">
                                    <input type="radio" class="form-control" name="liquidation" id="liquidation_oui" value="oui" checked="checked" />
                                    <label>{{__('Oui')}}</label>
                                </div>

                                <div class="col-md-3">
                                    <input type="radio" class="form-control" name="liquidation" id="liquidation_non" value="non" />
                                    <label>{{__('Non')}}</label>
                                </div>
                            </div>


                            <div class="form-group row">

                                <label for="salaire" class="col-md-4 col-form-label text-md-right">{{ __('Revenus mensuels (€)') }}</label>

                                <div class="col-md-6">
                                    <input id="salaire" type="number" class="form-control @error('salaire') is-invalid @enderror" name="revenus_mensuel" value="{{ old('revenus_mensuel') }}" required autofocus>

                                    @error('salaire')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <input type="button" name="previous" class="previous2 btn btn-default" value="Retour" />
                            <input type="submit" name="next" class="next4 btn btn-info" value="Continuer" />
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
