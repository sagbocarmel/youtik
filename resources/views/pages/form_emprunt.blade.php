@extends('layouts.master')

@section('content')

<form method="" action="" id="regiration_form">
    {{csrf_field()}}


<fieldset class="fieldmail">
        
<div class="container">
    <div class="row justify-content-center mt-30 mb-30">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Adresse Email') }}</div>

                <div class="card-body">
                    
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Adresse Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <div class="form-group">
                            <p id="notify1" style="color:red;"></p>
                            </div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                             
                        </div>

<input type="submit" class = "next1 btn bt-sm text-light" style="background-color: rgba(236,91,38,1)" value="Voir mon offre" />


 </div>
</div>
</div>
</div>
</div>
</fieldset>

<fieldset class="fieldfamily">
 <div class="container">
    <div class="row justify-content-center mt-30 mb-30">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Situation familiale') }}</div>

                <div class="card-body">

                    <div class="form-group row">
                     <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Situation familiale') }}</label>


                           <!-- Type Situation familiale -->
                            <div class="col-md-6">
                               
                                   <select id="sf" class="form-control @error('famille') is-invalid @enderror" style="font-size: medium;" name="famille" onclick='family()' required autocomplete="famille" autofocus>
                                       <option selected value="">{{__('Choisir votre situation familiale')}}</option>
                                       <option value="celibataire">{{__('Célibataire')}}</option>
                                       <option value="marital-pacs">{{__('Vie Marital / PACS')}}</option>
                                       <option value="divorce">{{__('Divorcé(e)')}}</option>
                                       <option value="marie">{{__('Marié(e)')}}</option>
                                       <option value="separe">{{__('Séparé(e)')}}</option>
                                       <option value="veuf">{{('Veuf(ve)')}}</option>
                                   </select>

                                @error('famille')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                    </div>

                    <!-- Section cas divorce et separation -->
                    <div class="form-group row" id="sf4" style="display : none">
                        <label for="sf4" class="col-md-4 col-form-label text-md-right">{{ __('Votre conjoint et vous étiez vous mariés ?') }}</label>
                                                
                            <div class="col-md-6">
                             
                                    <select id="sf1" class="form-control @error('marie') is-invalid @enderror" style="font-size: medium" onclick="divorce()" required autocomplete="marie" autofocus>
                                        <option selected value="">{{__('Choisissez')}}</option>
                                        <option value="oui">{{__('Oui')}}</option>
                                        <option value="non">{{__('Non')}}</option>
                                    </select>

                                     @error('marie')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              
                            </div>
                    </div>

                    <!-- Jugement de divorce ou ordonnance -->
                        <div class="form-group row" id="sf5" style="display : none">
                        
                                    <label for="sf5" class="col-md-4 col-form-label text-md-right">{{ __('Disposez vous d’un jugement de divorce ou d’une ordonnance de non conciliation ?') }}</label>

                           
                                <div class="col-md-6" >
                                   
                                        <select id="sf5" class="form-control @error('jugement') is-invalid @enderror" style="font-size: medium;" required autocomplete="jugement" autofocus>
                                            <option selected value="">{{__('Choisissez')}}</option>
                                            <option value="oui">{{__('Oui')}}</option>
                                            <option value="non">{{__('Non')}}</option>
                                        </select>

                                         @error('jugement')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                         @enderror
                                
                                </div>
                        </div>
                    <!-- Nombre d'enfants -->

                <div class="form-group row">    
    
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre d’enfants') }}</label>


                    <!-- Choisir le nombre d'enfants -->
                        <div class="col-md-6">
                                                    
                                    <select id="sf3" class="form-control @error('enfants') is-invalid @enderror" style="font-size: medium" title=" Prenez en compte uniquement les enfants qui sont rattachés à votre compte fiscal" required autofoucs autocomplete="enfants">
                                        <option selected value="">{{__('Choisissez')}}</option>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">+</option>
                                    </select>

                                    @error('enfants')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                </div>
    
    <input type="button" name="previous" class="previous btn btn-default" value="Retour" />
    <input type="submit" name="next" class="next2 btn btn-info" value="Continuer" />

</div>
</div>
</div>
</div>
</div>

</fieldset >


<fieldset class="fieldlogement">
<div class="container">
    <div class="row justify-content-center mt-30 mb-30">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{__('Votre Logement')}}</div>

                <div class="card-body">

    <div class="form-group row">
       
           <label for="vl" class="col-md-4 col-form-label text-md-right">{{__('Votre Logement')}}</label>

          <!-- Choisir logement -->
                           <div class="col-md-6">
                            
                                   <select id="vl" class="form-control select" style="font-size: medium;" onclick='logement()' required>
                                       <option selected value="">{{__('Choisir votre type de logement')}}</option>
                                       <option value="locataire">{{__('Locataire')}}</option>
                                       <option value="proprietaire_avec_credit">{{__('Propriétaire(avec crédit immobilier en cours)')}}</option>
                                       <option value="prosans">{{__('Propriétaire(sans crédit immobilier en cours)')}}</option>
                                       <option value="logepar_en">{{__('Logé(e) par les parents ou les enfants')}}</option>
                                       <option value="logeadm">{{__('Logé(e) par l’administration')}}</option>
                                       <option value="logecon">{{__('Logé(e) par le(la) conjointe')}}</option>
                                       <option value="logefam">{{__('Logé(e) par un autre membre de la famille')}}</option>
                                       <option value="sdf">{{__('Sans domicile fixe(Hôtel...)')}}</option>
                                   </select>
                          
                           </div>
     </div>

     <!--  -->
<!-- Section durée de logement -->
<div class="form-group row" id="vl1"style="display: none" >
           <label for="vl1" class="col-md-4 col-form-label text-md-right">{{__('Depuis quand?')}}</label>
                     
<!-- Mois logement -->
         <div class="col-md-3">
            <select  id ="mois_location" name="location_mois" class=" month form-control" style="font-size: medium;" required>
            <option value="" selected>MM</option>
            </select>                                        
         </div>
                                    
 <!-- Année logement -->                                  
        <div class="col-md-3">
             <select  id ="annee_location"  name="location_annee" class=" year form-control" style="font-size: medium;" required>
            <option value="" selected>AAAA</option>
            </select>                                       
        </div>

</div>
    

    <input type="button" name="previous" class="previous1 btn btn-default" value="Retour" />
    <input type="submit" name="next" class="next3 btn btn-info" value="Continuer" />

</div>
</div>
</div>
</div>
</div>

</fieldset>

<fieldset class="fieldprof">
  <!-- Situation professionnelle -->


<div class="container">
    <div class="row justify-content-center mt-30 mb-30">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{__('Situation professionnelle')}}</div>

                <div class="card-body">

<div class="form-group row">
                          
        <label for="sp" class="col-md-4 col-form-label text-md-right">{{__('Secteur d’activité')}}</label>
                    
            <!-- Secteur d'activité -->
                           <div class="col-md-6">
                              
                                   <select id="sp" class="form-control" style="font-size: medium;" onclick='secteur_activite()' required>
                                       <option selected>{{__('Choisissez votre secteur d’activité')}}</option>
                                       <option value="sal_priv">{{__('Salarié(e) du secteur privé')}}</option>
                                       <option value="sal_pub">{{__('Salarié(e) du secteur public')}}</option>
                                       <option value="agricole">{{__('Secteur agricole')}}</option>
                                       <option value="indep">{{__('Indépendants/Travailleurs non salariés')}}</option>
                                       <option value="retraite">{{__('Retraité(e)')}}</option>
                                       <option value="autres">{{__('Autres')}}</option>
                                   </select>
                          
                           </div>
</div>



<div class="form-group row">
                          
                            <label for="salaire" class="col-md-4 col-form-label text-md-right">{{ __('Revenus mensuels') }}</label>

                            <div class="col-md-6">
                                <input id="salaire" type="number" class="form-control @error('salaire') is-invalid @enderror" name="salaire" value="{{ old('salaire') }}" required autofocus>

                                @error('salaire')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
</div>
<!-- Section secteur privé-->


<div class="form-group row" id="sp1" style="display: none">
        
        <label for="sp2" class="col-md-4 col-form-label text-md-right">{{__('Profession')}}</label>
                          
                            <div class="col-md-6">
                                    <select id="sp2" class="form-control" style="font-size: medium;" onclick='secteur()' required>
                                       <option selected>{{__('Choisissez votre profession')}}</option>
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
                           
                                    <select id="sp7" class="form-control" style="font-size: medium;" onclick='secteur_pub()' required>
                                       <option selected>{{__('Choisissez votre profession')}}</option>
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
                                
                                    <select id="sp13" class="form-control" style="font-size: medium;" onclick='independant()' required>
                                       <option selected>{{__('Choisissez votre profession')}}</option>
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
                       
                                    <select id="sp9" class="form-control" style="font-size: medium;" onclick='secteur_agri()' required>
                                       <option selected>{{__('Choisissez votre profession')}}</option>
                                       <option value="pro_agricole">{{__('Propriétaire agricole')}}</option>
                                       <option value="sal_agricole">{{__('Salarié(e) agricole')}}</option>

                                   </select>
                         
                            </div>
</div>

<!-- Section secteur retraite-->

<div class="form-group row" id="sp14" style="display: none">
       <label for="sp7" class="col-md-4 col-form-label text-md-right">{{__('Profession')}}</label>
                   
                            <div class="col-md-6">
                           
                                    <select id="sp15" class="form-control" style="font-size: medium;" onclick='retraite()' required>
                                       <option selected>{{__('Choisissez votre profession')}}</option>
                                       <option value="retraite_prive">{{__('Retraité du secteur privé')}}</option>
                                       <option value="retraite_public">{{__('Retraité du secteur public')}}</option>

                                   </select>
                           
                            </div>
</div>

<!-- Section secteur autres-->

<div class="form-group row" id="sp17" style="display: none">
              
           <label for="sp18" class="col-md-4 col-form-label text-md-right">Profession</label>
                
                            <div class="col-md-6">
                               
                                    <select id="sp18" class="form-control" style="font-size: medium;" onclick='autres()' required>
                                       <option selected>{{__('Choisissez votre profession')}}</option>
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
                         
                                        <select id="sp4" class="form-control" style="font-size: medium;" onclick='contrat()' required>
                                       <option selected>{{__('Choisissez votre contrat de travail')}}</option>
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
            <select  name="duree_mois" class=" month form-control" style="font-size: medium;" >
            <option value="" selected>MM</option>
            </select>                                        
         </div>
                                    
 <!-- Année retraite-->                                  
        <div class="col-md-3">
             <select  name="duree_annee" class=" year form-control" style="font-size: medium;">
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

    
    <input type="button" name="previous" class="previous2 btn btn-default" value="Retour" />
    <input type="submit" name="next" class="next4 btn btn-info" value="Continuer" />


</div>
</div>
</div>
</div>
</div>
</fieldset>



<fieldset class="fieldperso">
<div class="container">
    <div class="row justify-content-center mt-30 mb-30">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{__('Informations personnelles')}}</div>

                <div class="card-body">
                    
            <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Prénom') }}</label>

                            <div class="col-md-6">
                                <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>

                                @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

<!-- Date de naissance -->
    <div class=" form-group row">
       <label for="post" class="col-md-4 col-form-label text-md-right">{{ __('Date de naissance') }}</label>

            <div class="col-md-6">
                                <input id="date_naiss" type="date" class="form-control @error('date_naiss') is-invalid @enderror" name="date_naiss" value="{{ old('date_naiss') }}" required  autofocus>

                                @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>                                       
            </div>
        
    </div>



                        
                        <div class="form-group row">
                            <label for="ville_naiss" class="col-md-4 col-form-label text-md-right">{{ __('Ville de naissance') }}</label>

                            <div class="col-md-6">
                                <input id="ville_naiss" type="text" class="form-control @error('ville_naiss') is-invalid @enderror" name="ville_naiss" value="{{ old('ville_naiss') }}" required autocomplete="ville_naiss" autofocus>

                                @error('ville_naiss')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
        
    </div>


     
    <input type="button" name="previous" class="previous3 btn btn-default" value="Retour" />
    <input type="submit" name="next" class="next5 btn btn-info" value="Continuer" />

</div>
</div>
</div>
</div>
</div>
</fieldset>

<fieldset class="fieldinfo">
<div class="container">
    <div class="row justify-content-center mt-30 mb-30">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{__('Vos coordonnées')}}</div>

                <div class="card-body">

          <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Telephone') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="tel" class="form-control @error('tel') is-invalid @enderror" name="tel" value="{{ old('tel') }}" required autofocus>

                                @error('tel')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
           </div>


           
<!-- Pays -->
         <div class="form-group row">
                            <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Pays de résidence') }}</label>

                            <div class="col-md-6">
             <select id="pays_res" class="form-control @error('pays_res') is-invalid @enderror" name="pays_res" value="{{ old('pays_res') }}" required autofocus autocomplete> </select>

                                @error('pays_res')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
           </div>

<!-- Ville -->
     <div class="form-group row">
                            <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Ville / Département') }}</label>

                            <div class="col-md-6">
             <select id="ville_res" class="form-control @error('ville_res') is-invalid @enderror" name="ville_res" value="{{ old('ville_res') }}" required autofocus autocomplete> </select>

                                @error('ville_res')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
           </div>
<!-- Code postal -->
<div class="form-group row">
                            <label for="post" class="col-md-4 col-form-label text-md-right">{{ __('Code postal') }}</label>

                            <div class="col-md-6">
                                <input id="post" type="number" class="form-control @error('poste') is-invalid @enderror" name="post" value="{{ old('post') }}" required autocomplete="post" autofocus>

                                @error('post')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
<!-- Adresse -->
       <div class="form-group row">
                            <label for="adresse" class="col-md-4 col-form-label text-md-right">{{ __('Adresse') }}</label>

                            <div class="col-md-6">
                                <input id="adresse" type="tel" class="form-control @error('adresse') is-invalid @enderror" name="adresse" value="{{ old('adresse') }}" required autofocus>

                                @error('adresse')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
           </div>

    <input type="button" name="previous" class="previous4 btn btn-default" value="Retour" />
    <input type="submit" name="submit" class="submit btn btn-success" value="Envoyer" />
</div>
</div>
</div>
</div>
</div>
</fieldset>

</form>

<script src="template_credit/js/jquery/jquery-2.2.4.min.js"></script>

 <script src="{{ asset('js/function.js') }}"></script>

@endsection