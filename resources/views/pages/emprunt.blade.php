@extends('layouts.master')


@section('contentemprunt')
 <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(template_credit/img/bg-img/13.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>{{__('Emprunt')}}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">{{__('Accueil')}}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{__('Emprunt')}}</li>
                            </ol>
                            </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

        <!-- ##### About Area Start ###### -->


        
    <section class="about-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <div class="about-content mb-100">
                        <!-- Section Heading -->
                        <div class="section-heading white">
                            <div class="line"></div>

                            <h2>{{__('Taux d’intérêt')}}</h2>
                        </div>
                             <p style="font-size: 16px; text-align: justify;" >  {{__('TEG annuel variant de 2% à 6% en fonction du montant demandé et de la durée de remboursement, pas de frais de dossier.')}}</p>                   
                    </div>
                </div>

              
                 <div class="col-12 col-md-6">
                    <div class="about-content mb-100">
                         <!-- Section Heading -->
                        <div class="section-heading white">
                            <div class="line"></div>

                            <h2>{{__('Durée du prêt')}}</h2>
                        </div>

                            <p style="font-size: 16px; text-align: justify;"> {{__('La durée de votre prêt ne peut pas excéder les 30 ans.')}}
                            </p>

                     </div>

                </div>
            </div>
        </div>
    </section>

    <section class="about-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <div class="about-content mb-100">
                        <!-- Section Heading -->
                        <div class="section-heading white">
                            <div class="line"></div>

                            <h2>{{__('Conditions à remplir pour obtenir un crédit')}}</h2>
                        </div>
                             <p style="font-size: 16px; text-align: justify;">   {{__('- Être âgée d’au moins 18 ans.')}}<br>
                                {{__('- Être de bonne moralité quitte à honorer un engagement.')}}<br>
                                {{__('- Avoir une source de revenu mensuel minimum de 500€.')}}<br>
                                {{__('- Un prêt octroyé non remboursé dans les délais du contrat entraîne des poursuites judiciaires accompagnées de la publication de votre carte d’identité sur toutes les chaînes qui sont affichées a notre agence. Le délai de virement est de 48 heures au plus.')}}</p>
                        
                    
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="about-content mb-100">
                         <!-- Section Heading -->
                        <div class="section-heading white">
                            <div class="line"></div>

                            <h2>{{__('Documents à fournir')}}</h2>
                            </div>

                            <p style="font-size: 16px; text-align: justify;"> {{__('- Pièces d’identités scannées recto-verso.')}}<br>
                                {{__('- Copie d’un relevé d’identité bancaire (RIB) ou postal (RIP).')}}<br>
                                {{__('- Dernière facture électricité ou tout autre document équivalent pouvant justifier votre adresse.')}}<br>
                                {{__('- Dernier bulletin de salaire ou tout autre document pouvant justifier votre revenu mensuel.')}}
                            </p>

                        </div>
                        
                    </div>
                    </div>
            </div>
        </div>
    </section>


    <section class="about-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-center">


                <div class="col-12 col-md-6">
                    <div class="about-content mb-100">
                        <!-- Section Heading -->
                        <div class="section-heading white">
                            <div class="line"></div>

                            <h2>{{__('Début des prélèvements mensuels')}}</h2>
                        </div>
                             <p style="font-size: 16px; text-align: justify;"> 
                            {{__('Ils débutent entre 60 (2 mois) et 90 (3 mois) jours à compter du jour ou l’emprunteur reçoit le montant intégral de son prêt.')}}

                            </p>
                    </div>
                </div>

                


                <div class="col-12 col-md-6">
                    <div class="about-content mb-100">
                         <!-- Section Heading -->
                        <div class="section-heading white">
                            <div class="line"></div>

                            <h2>{{__('Pause dans le remboursement ou report de mensualités')}}</h2>
                            </div>

                            <p style="font-size: 16px;text-align: justify; "> 

                            {{__('Pour étudier la possibilité de reporter une échéance, vous pouvez nous contacter par téléphone ou depuis le formulaire de contact disponible sur notre site web. Le report produit des intérêts au taux en vigueur, la prime ayant pour objet la garantie du crédit sera calculée si l’assurance a été souscrite. Vous pouvez solliciter le report d’une ou deux échéances par an et ainsi bénéficier d’une « pause remboursement ». Vous devez faire la demande 7 jours avant la prochaine échéance. Cette pause paiement vous sera accordée sous réserve qu’au moment de votre demande de report, votre crédit renouvelable ne présente pas d’impayé ou de retard de paiement, ne soit pas pris en charge par l’assurance et que vous n’ayez pas bénéficié de report dans les 2 mois précédents.')}}
                            </p>

                        </div>
                       
                    </div>                   
                    </div>


            </div>
        </div>
    </section>

    
    <section class="about-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-center">
                 <div class="col-12 col-md-6">
                    <div class="about-content mb-100">
                         <!-- Section Heading -->
                        <div class="section-heading white">
                            <div class="line"></div>

                            <h2>{{__('Remboursement par anticipation.')}}</h2>
                            </div>

                            <p style="font-size: 16px;text-align: justify;"> 

                            {{__('Que vous ayez souscrit un crédit renouvelable ou un prêt personnel, vous pouvez à tout moment et sans frais supplémentaires rembourser tout ou partie de la somme qu’il vous reste à devoir. Que vous soyez intérimaire, en contrat de professionnalisation, d’apprentissage ou même en CDD nous pouvons vous aider.')}}
                            </p>

                        </div>
                       
                    
                </div>

                <div class="col-12 col-md-6">
                    <div class="about-content mb-100">
                         <!-- Section Heading -->
                        <div class="section-heading white">
                            <div class="line"></div>

                            <h2>{{__('Accord de prêt et assurance')}}</h2>
                            </div>

                            <p style="font-size: 16px; text-align: justify;"> 

                          {{__('L’emprunteur aura à signer un accord de prêt et un certificat d’assurance-crédit. L’assurance vous couvre en cas de décès, perte totale et irréversible d’autonomie, incapacité totale de travail par maladie ou accident (n°0081 FACL), et perte d’emploi par suite de licenciement indemnisé.')}}
                            </p>

                        </div>
                       
                    </div>
</div>
            </div>
        </div>
    </section>

     <section class="about-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-center">
                 <div class="col-12 col-md-6">
                    <div class="about-content mb-100">
                         <!-- Section Heading -->
                        <div class="section-heading white">
                            <div class="line"></div>

                            <h2>{{__('Procédure')}}</h2>
                            </div>

                            <p style="font-size: 16px; text-align: justify;"> 

                            <strong>{{__('ETAPE 1')}}</strong><br>
                                {{__('- L’inscription en ligne fournissent ensuite des informations et des pièces pour votre application après réponse essentiellement avec vos paramètres de crédit')}}
                            <br>
                                <strong>{{__('ETAPE 2')}}</strong><br>
                                {{__('- L’examen de vos données par nos spécialistes')}} <br>
                                {{__('- Constitution du dossier.')}} <br>
                                {{__('- Enregistrement de dossier.')}}
                            <br>
                                <strong>{{__('ETAPE 3')}}</strong><br>
                                {{__('- Signature de l’accord de prêt le notaire')}} <br>
                                {{__('- Virement des fonds dans le compte du client')}} <br>
                                {{__('- Ouverture d’un compte pour le règlement de vos paiements mensuels.')}}
<br>
                                <strong>{{__('ETAPE 4')}}</strong><br>
                                {{__('- Transfert des données de la banque pour le transfert d’argent à votre compte')}}
                                <br>{{__('- Authentification l’accord de prêt après réception des fonds dans votre compte.')}}
<br>
                                <strong>{{__('NB')}}</strong> : {{__('plus vite vous nous donner vos informations, plus rapide est votre dossier de crédit.')}}

                            </p>

                        </div>
                       
                    
                </div>

                
            </div>
        </div>
    </section>
    <!-- ##### About Area End ###### -->

    
@endsection