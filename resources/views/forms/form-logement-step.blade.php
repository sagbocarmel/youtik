@extends('layouts.master')

@section('content')
<div class="container"  id="fieldlogement" >
    <div class="row justify-content-center mt-30 mb-30">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{__('Votre Logement')}}</div>

                <div class="card-body">

                <form id="regiration_form"  action="/logement/{{session('projectId')}}"  method="post" class="container" >
                 {{csrf_field()}}

    <div class="form-group row">

           <label for="vl" class="col-md-4 col-form-label text-md-right">{{__('Votre Logement')}}</label>

          <!-- Choisir logement -->
                           <div class="col-md-6">

                                   <select id="vl" name="logement" class="form-control select" style="font-size: medium;" onclick="logements()" required>
                                       <option selected value="">{{__('Choisir votre type de logement')}}</option>
                                       <option value="locataire">{{__('Locataire')}}</option>
                                       <option value="proprietaire_avec_credit">{{__('Propriétaire(avec crédit immobilier en cours)')}}</option>
                                       <option value="prosans">{{__('Propriétaire(sans crédit immobilier en cours)')}}</option>
                                       <option value="logepar_en">{{__('Logé(e) par les parents ou les enfants')}}</option>
                                       <option value="logeadm">{{__('Logé(e) par l’administration')}}</option>
                                       <option value="logecon">{{__('Logé(e) par le(la) conjointe')}}</option>
                                       <option value="logefam">{{__('Logé(e) par un autre membre de la famille')}}</option>
                                       <option value="sdfl">{{__('Sans domicile fixe(Hôtel...)')}}</option>
                                   </select>

                           </div>
    </div>

     <!--  -->
<!-- Section durée de logement -->
<div class="form-group row" id="vl1" style="display: none" >
           <label for="vl1" class="col-md-4 col-form-label text-md-right">{{__('Depuis quand?')}}</label>

        <!-- Mois logement -->
                <div class="col-md-3">
                    <select  id ="mois_location" name="mois_logement" class=" month form-control" style="font-size: medium;" >
                    <option value="" selected>MM</option>
                    </select>
                </div>

        <!-- Année logement -->
                <div class="col-md-3">
                    <select  id ="annee_location"  name="annee_logement" class=" year form-control" style="font-size: medium;" >
                    <option value="" selected>AAAA</option>
                    </select>
                </div>

</div>


    <input type="button" name="previous" class="previous1 btn btn-default" value="Retour" />
    <input type="submit" name="next" class="next3 btn btn-info" value="Continuer" />
</form>

</div>
</div>
</div>
</div>
</div>


@endsection
