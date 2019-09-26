@extends('layouts.master')

@section('contentabout')

    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(template_credit/img/bg-img/13.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>{{__('Présentation')}}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">{{__('Accueil')}}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{__('Présentation')}}</li>
                            </ol>
                            </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->


    <section id="about">

      <div class="container">
        <div class="row">

          <div class="col-lg-5 col-md-6 mt-50">
            <div class="about-img">
              <img src="template_credit/img/bg-img/coming.png" alt="">
            </div>
          </div>

          <div class="col-lg-7 col-md-6">
            <div class="about-content">
            <div class="section-heading white">
                            <div class="line"></div>

                            <h2>{{__('Qui sommes-nous ?')}}</h2>
                        </div>
                        <p>{{__('Nous sommes présents sur l’ensemble des métiers de la banque, de la finance et de l’assurance. Youtik Credit compte 3,6 millions de sociétaires et clients.')}} </p> <br>
                        <p class="mb-0"> {{__('Nous sommes dotées des agréments de Banque et de prestataire de service d’investissement par l’ACPR (Autorité de Contrôle Prudentiel et de Résolution) et de courtier en assurance par l’ORIAS (Organisme pour le Registre des Intermédiaires en Assurance). Depuis 2000, nous proposons une gamme complète de produits et de services : compte bancaire, Bourse, épargne, assurance-vie, assurance auto et crédit immobilier, crédit automobile, crédit tout projet...')}}
                        </p>
                    
            </div>

            </div>
          </div>
          
        </div>
      </div>

    </section><!-- #about -->
    

       <section id="about">

      <div class="container">
        <div class="row">


          <div class="col-lg-7 col-md-6">
            <div class="about-content">
                    <div class="section-heading white">
                            <div class="line"></div>

                            <h2>{{__('Expertise et Disponibilité')}}</h2>
                    </div>

                            <p>{{__('Recevez les conseils d’un expert patrimonial Vous avez besoin de conseils pour la gestion de votre patrimoine. Prenez contact avec notre équipe de conseillers spécialisés du Service Patrimonial.')}}
                            </p><br>
                            <p>{{__('Bénéficiez d’un Service Clients à votre écoute et basé en France, Belgique, Suisse, Espagne, Irlande, Allemagne, Roumanie.')}}
                            </p>
                            <p>
                            {{__('Nos équipes sont constituées de professionnels de la finance et sont à votre disposition du lundi au samedi.')}}</p>

            </div>

            </div>
          
          <div class="col-lg-5 col-md-6 mt-50">
            <div class="about-img">
              <img src="template_credit/img/bg-img/solution.png" alt="">
            </div>
          </div>

        </div>
      </div>

    </section><!-- #about -->
    
    <!-- ##### Call To Action Start ###### -->
    <section id="why-us" class="cta-area d-flex flex-wrap">
      
        <!-- Cta Content -->
        <div class="cta-content">
            <!-- Section Heading -->
            <div class="section-heading white">
                <div class="line"></div>
                <p>{{__('Un partenaire de référence')}}</p>
                <h2>{{__('En quelques chiffres')}}</h2>
            </div>
            <h6 class="mb-0">{{__('Plus de 740 000 clients actifs dans le monde nous font déjà confiance. Plus de 22,5 milliards d’euros d’encours. 9 clients sur 10 nous recommandent (91 % des clients ayant un compte bancaire chez nous).')}}<br>
                {{__('Un Service Client accueillant, disponible et réactif, à votre écoute du lundi au vendredi de 8h30 à 20h et le samedi de 9h à 18h.')}}
</h6>

          
            </div>
        </div>
        <!-- Cta Thumbnail -->
        <div class="cta-thumbnail bg-img jarallax" style="background-image: url(template_credit/img/bg-img/feedback.png);"></div>

      </div>

    </section>
    <!-- ##### Call To Action End ###### -->


    <!-- ##### Team Member Area Start ##### -->
    <section class="team-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading white text-center mb-100">
                        <div class="line"></div>
                      
                        <h2>{{__('Nos récompenses')}}</h2>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Single Team Member Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member-area mb-100">
                        <div class="team-thumb">
                            <img src="template_credit/img/bg-img/trophees1.png" alt="">

                          
                        </div>
                        <div class="team-info">
                          <p>{{__('Nous sommes aussi récompensés au Grand Prix de l’assurance-vie 2019 dans la catégorie "contrat multisupports" (Mieux Vivre Votre Argent, avril 2019).')}} </p>   
                        </div>
                    </div>
                </div>

                <!-- Single Team Member Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member-area mb-100">
                        <div class="team-thumb">
                            <img src="template_credit/img/bg-img/trophee2.jpg" alt="">
                          
                        </div>
                        <div class="team-info">
                            <p>{{__('Désignée comme l’agence de crédita moins chère en 2019 pour le profil cadre supérieur avec une carte World Elite (Challenges/Meilleurebanque.com, janvier 2019).')}} 
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Single Team Member Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member-area mb-100">
                        <div class="team-thumb">
                            <img src="template_credit/img/bg-img/17.jpg" alt="">
                            
                        </div>
                        <div class="team-info">
                            <p>{{__('Nous avons remporté l’oscar du meilleur contrat dans la catégorie fonds en euros dynamique (Gestion de Fortune, avril 2018).')}}
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Single Team Member Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member-area mb-100">
                        <div class="team-thumb">
                            <img src="template_credit/img/bg-img/18.jpg" alt="">
                           
                        </div>
                        <div class="team-info">
                            <p>{{__('Récompensée par le Label d’Excellence pour ses compte-titres Optimum et 0 Courtage (Les Dossiers de l’Épargne, septembre 2018).')}}
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### Team Member Area End ##### -->
@endsection