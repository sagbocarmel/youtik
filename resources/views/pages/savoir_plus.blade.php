@extends('layouts.master')


@section('contentplus')
 <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(template_credit/img/bg-img/13.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>{{__('Savoir plus')}}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">{{__('Accueil')}}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{__('En savoir plus')}}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <section>

    <div class="container">

    <div class="row">


   <p style="font-size: 16px; text-align: justify;">

-Vous êtes fonctionnaire d’état ?<br>
-Vous êtes dans la fonction privé ?<br>
-Vous êtes chômeur et procéder d'un capital de fonds à investir ?<br>
-Vous êtes à la retraite ?<br>
-Vous êtes à votre propre compte ?<br>
Plus de soucis à vous faire pour maximiser vos revenus. Investissez à Youtik et gagner jusqu'à 60% de votre investissement par an, tout en ayant votre investissement de base que vous pouviez retirer à tout moment.

La souscription des produits d’investissement est réservée aux investisseurs au sens de l’article L. 411-2 du Code Monétaire et Financier. Ceci ne constitue pas et ne saurait être considéré comme constituant une offre au public, ni une communication à caractère promotionnel ou un prospectus au sens de la Directive 2003/71/CE du parlement européen et du conseil du 4 novembre 2003 telle que modifiée, ou comme destiné à solliciter l’intérêt du public en vue de la souscription des parts des fonds, en Europe.
</p>
</div>
</div>
    </section>
  
@endsection