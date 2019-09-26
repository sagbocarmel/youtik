@extends('layouts.master')


@section('contentinvestir')

 <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(template_credit/img/bg-img/13.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>{{__('Investir')}}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">{{__('Accueil')}}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{__('Investir')}}</li>
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


            <header class="section-header">
                <h3>{{__('INVESTIR ET BENEFICIER JUSQU’À 60% DE VOTRE INVESTISSEMENT PAR AN.')}}</h3>
            </header>
        </div>
            
    </section>

    <section class="pricing-section" >  

            <div class="pricing pricing--norbu">

                <div class="pricing__item">
                    <h3 class="pricing__title">Débutant</h3>
                    <p class="pricing__sentence">Pour votre première fois, veuillez investir entre 200€ et 2000€</p>
                    <div class="pricing__price"><span class="pricing__currency">€</span>50<span class="pricing__period">/ mois</span></div>
                    <ul class="pricing__feature-list">
                        <li class="pricing__feature">Bénéfice annuel :600€</li>
                        <li class="pricing__feature">Investissement de base à retirer :1000€</li>
                        <li class="pricing__feature">Bénéfice sur investissement : 5%/mois </li>
                    </ul>
                    <a href="{{ route('userhome')}}" class="pricing__action">Investir</a>
                </div>

                <div class="pricing__item pricing__item--featured">
                    <h3 class="pricing__title">Economique</h3>
                    <p class="pricing__sentence">Pour votre première fois, veuillez investir entre 2001€ et 10000€ </p>
                    <div class="pricing__price"><span class="pricing__currency">€</span>250<span class="pricing__period">/ mois</span></div>
                    <ul class="pricing__feature-list">
                        <li class="pricing__feature">Bénéfice annuel :600€</li>
                        <li class="pricing__feature">Investissement de base à retirer :1000€</li>
                        <li class="pricing__feature">Bénéfice sur investissement : 5%/mois</li>
                    </ul>
                    <a href="{{ route('userhome')}}" class="pricing__action">Investir</a>
                </div>

                <div class="pricing__item">
                    <h3 class="pricing__title">Avancé</h3>
                    <p class="pricing__sentence">Pour votre première fois, veuillez investir entre 10001€ et 50000€</p>
                    <div class="pricing__price"><span class="pricing__currency">€</span>500<span class="pricing__period">/ month</span></div>
                    <ul class="pricing__feature-list">
                        <li class="pricing__feature">Bénéfice annuel :600€</li>
                        <li class="pricing__feature">Investissement de base à retirer :1000€</li>
                        <li class="pricing__feature">Bénéfice sur investissement : 5%/mois</li>
                    </ul>
                    <a href="{{ route('userhome')}}" class="pricing__action">Investir</a>
                </div>
            </div>

            <div class="pricing pricing--norbu">
                <div class="pricing__item">
                    <h3 class="pricing__title">Business</h3>
                    <p class="pricing__sentence">Pour votre première fois, veuillez investir entre 50001€ et 100000€</p>
                    <div class="pricing__price"><span class="pricing__currency">€</span>1000<span class="pricing__period">/
                            month</span></div>
                    <ul class="pricing__feature-list">
                        <li class="pricing__feature">Bénéfice annuel :600€</li>
                        <li class="pricing__feature">Investissement de base à retirer :1000€</li>
                        <li class="pricing__feature">Bénéfice sur investissement : 5%/mois</li>
                    </ul>
                    <a href="{{ route('userhome')}}" class="pricing__action">Investir</a>
                </div>
                <div class="pricing__item pricing__item--featured">
                    <h3 class="pricing__title">Affaires</h3>
                    <p class="pricing__sentence">Pour votre première fois, veuillez investir entre 100001€ et 200000€</p>
                    <div class="pricing__price"><span class="pricing__currency">€</span>2500<span class="pricing__period">/
                            month</span></div>
                    <ul class="pricing__feature-list">
                        <li class="pricing__feature">Bénéfice annuel :600€</li>
                        <li class="pricing__feature">Investissement de base à retirer :1000€</li>
                        <li class="pricing__feature">Bénéfice sur investissement : 5%/mois</li>
                    </ul>
                    <a href="{{ route('userhome')}}" class="pricing__action">Investir</a>
                </div>
            
            </div>
        </section>

          
    <section class="about-area section-padding-5-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="about-content mb-50">

                                <div class="section-heading white">
                                    <div class="line"></div>

                                    <h2>{{__('Un produit dinvestissement dans l’économie reel.')}}</h2>

                                </div>
                                
                                    <p style="font-size: 16px; ">
                                        👉 Financez les crédits à la consommation des ménages européens ! <br>
                                        👉 Financez les petites et moyennes entreprises européennes<br>
                                        👉 Finance dans les projets agricole<br>
                                        👉 Financez dans l’investissement immobilier<br>
                                        Youtik-Credit vous offre l’opportunité d'investir dans plusieurs domaines (agricole, immobilier, crédit...).<br>
                                        Nous recevons votre investissement que nous faisons tourner dans des société et entreprise européennes.<br>
                                        Tout investisseur bénéficie de 5% de son investissement chaque mois (Par exemple, si vous décidez d'investir 1000€ chez Youtik-Credit, vous recevrez 50€ chaque fin du mois sur votre compte bancaire, soit 50€×12=600€ chaque année). Ce qui est encore plus bien, vous pouvez demander votre investissement de base à tout moment que vous désirez.<br>
                                        <a href="{{ route('more')}}">En savoir plus</a>
                                    </p>
                                </div>
                        </div>
                            
                        <div class="col-12 col-md-6">
                            <div class="about-content mb-50">
                                <!-- Section Heading -->
                                <div class="section-heading white">
                                    <div class="line"></div>

                                    <h2>{{__('Tout type d’investisseur')}}</h2>
                                </div>

                                    <p style="font-size: 16px; "> 
                                        Nous proposons également aux investisseurs institutionnels des solutions d’investissement et de partenariats dédiés.

                                        Investissez dans le domaine de votre choix. Bénéficiez de 60% de votre investissement chaque année.

                                        La documentation juridique des fonds, leurs comptes audités ainsi que leurs rapports hebdomadaires sont également disponibles sur demande auprès du service client d’investissement : <strong>investir@youtik-credit.com</strong>

                                        <br>COMMENT DEVENIR INVESTISSEUR :<br>
                                        👉 Ouvrez un compte en quelques clics<br>
                                        👉 Envoyez votre dossier complet<br>
                                        👉 Envoyez votre dossier d’ouverture de compte accompagné des justificatifs, par mail ou par courrier<br>
                                        👉 Envoyez l’argent que vous souhaitez investir par virement bancaire ou le moyens de paiement de votre choix.<br>
                                        
                                            <br>
                                        👉 Réfléchissez avant de vous engagez<br>
                                        👉 Répartissez votre investissement<br>
                                        👉 Répartissez votre investissement sur nos fonds.<br>


                                    </p>

                            </div>

                        </div>
                </div>


            </div>

            <p style=" font-size: 16px; text-align: center;"> <strong >Attention : Ce produit d’investissement est réservé aux personnes physiques majeur (+18 ans).</strong> </p><br>

            <p style="font-size: 16px;">
                L'accès à cette partie de notre site internet est réservé uniquement aux personnes décidant d'investir en ligne.
                Pour être sûr de notre crédibilité, vous pouviez commencer par le montant le plus petit.
                Un client décidé à investir est un client qui possède l’expérience, les connaissances et la compétence nécessaires pour prendre ses propres décisions d’investissement et évaluer correctement les risques encourus. Nous vous invitons à vous assurer que vous disposez bien de la qualité d'investisseur professionnel en vous référant à l'article L. 533-16 du code monétaire et financier.
                La responsabilité de Youtik-Credit ne pourra être engagée à la suite de la consultation de ces informations. <a href="{{ route('files')}}">Documents juridiques</a>
            </p>

             <p  style="text-align: center;"><a  href=" {{ route('userhome')}}" class="btn credit-btn btn-2 box-shadow mt-30 mb-30">Devenir investisseur</a></p>

            <p style="font-size: 16px;">
             N’hésitez pas à contacter l’équipe investisseurs par mail à l’adresse suivante : <strong>investisseurs@youtikcredit.com </strong>.

            Youtik-Credit est agréé en tant qu’Etablissement de Crédit par l’Autorité de Contrôle Prudentiel et de Résolution.
            </p>
        </div>

                                

    </section>
@endsection