@extends('layouts.master')


@section('contentfiles')
 <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(template_credit/img/bg-img/13.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>{{__('Documents juridiques')}}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">{{__('Accueil')}}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{__('Documents juridiques')}}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Contact Area Start ##### -->

    <section >

        <div class="container">


            <header class="section-header mt-20">
                <h3>{{__('Documents')}}</h3>
            </header>
        </div>
            
    </section>

    <section>
    <div class="container">
     <div class="row">
         <div class="col-12">
                            <div class="about-content mt-50 mb-50">


                                <p style="font-size: 16px; text-align: justify;">
                                Les présents documents s’adressent à des investisseurs. Ils sont exclusivement conçus à des fins d’information. Ils ne constituent ni des éléments contractuels, ni des propositions ou incitations à l’investissement, ni offres de souscription ni conseils personnalisés. Ils ne peuvent être considérés comme des sollicitations.

                                Youtik attire l’attention des utilisateurs souhaitant investir, et les met en garde, de façon générale sur les risques associés à un investissement dans des titres financiers, à savoir les risques d’aléas, de volatilité, de liquidité et de perte en capital. 
                                Cependant les investissements proposés par Youtik étant garanti en capital, les investisseurs ne s'exposent pas à des risques de perte.

                                Avant toute passation d'ordre, Youtik recommande la consultation des informations relatives aux titres financiers, aux opérations concernées ainsi qu’à leurs caractéristiques et leurs risques éventuels, disponibles entre autres sur le site 

                                Nous déclinons toute responsabilité quant aux conséquences des ordres transmis, notamment des éventuelles pertes financières réalisées par un client quelle qu'en soit la raison, entre autres, la méconnaissance des marchés et des risques. Les investisseurs devront procéder à leur propre analyse des risques et devront, si nécessaire, consulter préalablement leurs propres conseils juridiques, financiers, fiscaux, comptables ou tout autre professionnel. En particulier, dès lors que votre résidence fiscale est située en dehors de l’Europe, vous êtes tenu avant de recourir aux services de Youtik, de vérifier que ceux-ci sont compatibles avec la législation qui vous est applicable. Youtik ne saurait supporter une quelconque responsabilité liée à une violation de celle-ci.

                                Les parts de fonds font l’objet d’un placement privé réservé aux investisseurs professionnels au sens de l’article L. 533-16 du Code Monétaire et Financier.

                                La catégorisation en client professionnel entraîne un niveau de protection moindre que le statut de client non professionnel. Youtik est libre d'accepter ou de refuser de catégoriser les investisseurs potentiels comme client professionnel sur la base de l'évaluation de leur compétence, expérience, connaissances en matière financière et capacité financière à absorber une perte.  Contactez le service d'investisseurs pour avoir les documents de juridiction :
                                <strong>serviceinvest@youtikcredit.com</strong>.<br>
                                Vous pouvez exercer votre droit d'accès, de rectification, d’effacement, de portabilité aux données personnelles vous concernant, ou vous opposer à leur utilisation à des fins de prospection ou en limiter le traitement en contactant le service client en cliquant ici.

                                <strong>serviceclient@youtikcredit.com</strong>.
                                </p>
             <p  style="text-align: center;"><a href="" class="btn credit-btn btn-2 box-shadow mt-30 mb-30">Devenir investisseur</a></p>

                            </div>
                 </div>







     </div>
    </div>

    </section>
  
@endsection