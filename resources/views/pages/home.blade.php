@extends('layouts.master')


@section('contenthome')

<!-- ##### Hero Area Start ##### -->
    <div class="hero-area">
        <div class="hero-slideshow owl-carousel">

            <!-- Single Slide -->
            <div class="single-slide bg-img">
                <!-- Background Image-->
                <div class="slide-bg-img bg-img bg-overlay" style="background-image: url(template_credit/img/bg-img/pret.jpg);"></div>
                <!-- Welcome Text -->
                <div class="container h-100">
                    <div class="row h-100 align-items-center justify-content-center">
                        <div class="col-12 col-lg-10">
                            <div class="welcome-text text-center">
                                <h6 data-animation="fadeInUp" data-delay="100ms">{{__('Crédit rapide en ligne')}} </h6>
                                <h2 data-animation="fadeInUp" data-delay="300ms">{{__('obtenir')}} <span> {{__('un emprunt d’argent')}}</span> {{__('rapidement')}}</h2>
                                <p style="color : #fff" data-animation="fadeInUp" data-delay="500ms">{{__('Souscrire un prêt est souvent perçu comme une opération lourde et chronophage. Détrompez-vous ! Sur une plateforme en ligne, il est possible d’effectuer en peu de temps les démarches pour financer ses projets en urgence.')}}</p>
                                <br>
                                <a href="#emprunt" class="btn credit-btn btn-2 box-shadow" style="margin-bottom : 20px;">{{__('Demander un Emprunt')}}</a>

                              </div>

                        </div>
                    </div>
                </div>
                <!-- Slide Duration Indicator -->
                <div class="slide-du-indicator"></div>
            </div>




            <!-- Single Slide -->
            <div class="single-slide bg-img">
                <!-- Background Image-->
                <div class="slide-bg-img bg-img bg-overlay" style="background-image: url(template_credit/img/bg-img/perso.jpg);"></div>
                <!-- Welcome Text -->
                <div class="container h-100">
                    <div class="row h-100 align-items-center justify-content-center">
                        <div class="col-12 col-lg-9" >
                            <div class="welcome-text text-center">
                                <h6 data-animation="fadeInDown" data-delay="100ms">{{__('Emprunt rapide')}} </h6>
                                <h2 data-animation="fadeInDown" data-delay="300ms">{{__('Le crédit conso,')}} <span>{{__('la solution')}}</span> {{__('aux dépenses surprises')}}</h2>
                                <p style="color : #fff" data-animation="fadeInDown" data-delay="500ms">
                                {{__('Tout le monde est soumis aux aléas de la vie, et peut du jour au lendemain se retrouver dans une situation financière compliquée qui entraîne un besoin urgent d’argent.')}}
                                  
                                  </p>
                                  <br>
                                 <a href="#emprunt" class="btn credit-btn btn-2 box-shadow" style="margin-bottom : 20px;">{{__('Demander un Emprunt')}}</a>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide Duration Indicator -->
                <div class="slide-du-indicator"></div>
            </div>


            <!-- Single Slide -->
            <div class="single-slide bg-img">
                <!-- Background Image-->
                <div class="slide-bg-img bg-img bg-overlay" style="background-image: url(template_credit/img/bg-img/credit.jpg);"></div>
                <!-- Welcome Text -->
                <div class="container h-100 ">
                    <div class="row h-100 align-items-center justify-content-center">
                        <div class="col-12 col-lg-9">
                            <div class="welcome-text text-center">
                                <h6 data-animation="fadeInDown" data-delay="100ms">{{__('Emprunter rapidement en ligne avec Youtik Credit pour')}}</h6>
                                <h2 data-animation="fadeInDown" data-delay="300ms"> {{__('obtenir de')}}  <span>{{__('l’argent')}}</span> {{__('sans délai.')}}</h2>
                                <p style="color : #fff" data-animation="fadeInDown" data-delay="500ms">
                                {{__('Dans ces situations, il est possible de recourir au crédit urgent en ligne auprès de Youtik Crédit, une plateforme en ligne de crédit aux particuliers qui vous permet d’éviter de recourir aux banques en faisant appel à l’épargne d’investisseurs. Cette solution permet de profiter de plusieurs avantages.')}}
                                </p>
                                <br>
                                  <a href="#emprunt" class="btn credit-btn btn-2 box-shadow" style="margin-bottom : 20px;">{{__('Demander un Emprunt')}}</a>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide Duration Indicator -->
                <div class="slide-du-indicator"></div>
            </div>

        </div>
    </div>
    <!-- ##### Hero Area End ##### -->


    
    <!--==========================
      Services Section
    ============================-->
    <section id="services" class="">
      <div class="container">

        <header class="section-header">
          <h3>{{__('Services')}}</h3>
          <p>{{__('Empruntez auprès de notre communauté d’investisseurs et obtenez un prêt en moins de 24h* à des taux imbattables de 5000€  jusqu’à  12 000 000€** sans frais de remboursement anticipé !.')}}</p>
        </header>

        <div class="row">

          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #fceef3;"><i class="ion-android-car" style="color: rgba(236,91,38,1);"></i></div>
              <h4 class="title"><a href="{{route('services').'#pret_auto'}}">{{__('Prêt Automobile')}}</a></h4>
              <p class="description">{{__('Le crédit auto permet de financer l’achat d’un véhicule. Obtenez jusqu’à 90,000€ avec un taux d’intérêt de 1,5%.')}}</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #fff0da;"><i class="ion-android-home" style="color:rgba(236,91,38,1);"></i></div>
              <h4 class="title"><a href="{{route('services').'#pret_immo'}}">{{__('Prêt Immobilier')}}</a></h4>
              <p class="description">{{__('Nouvelle maison, nouvel appartement, pout tout prêt immobilier faites nous confiance...')}}</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #e6fdfc;"><i class="ion-cash" style="color: rgba(236,91,38,1);"></i></div>
              <h4 class="title"><a href="{{route('services').'#rachat'}}">{{__('Rachat de crédit')}}</a></h4>
              <p class="description">{{__('Le rachat de crédit pour les fonctionnaires permet aux agents de l’Etat qui ont contracté des prêts...')}}</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #eafde7;"><i class="ion-earth" style="color:rgba(236,91,38,1);"></i></div>
              <h4 class="title"><a href="{{route('services').'#cred_agr'}}">{{__('Crédit agricole')}}</a></h4>
              <p class="description">{{__('L’agriculture est un secteur d’activité à part. De son installation à sa retraite, l’agriculteur doit régulièrement...')}}</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #e1eeff;"><i class="ion-ios-world-outline" style="color: rgba(236,91,38,1);"></i></div>
              <h4 class="title"><a href="{{route('services').'#fin_pro'}}">{{__('Financement de projets')}}</a></h4>
              <p class="description">{{__('La demande en ligne est une démarche sécurisée sans engagement de votre part...')}}</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #ecebff;"><i class="ion-ios-clock-outline" style="color: rgba(236,91,38,1);"></i></div>
              <h4 class="title"><a href="{{route('services')}}">{{__('Autres projets')}}</a></h4>
              <p class="description">{{__('Un autre projet ? Suivez les différentes étapes pour indiquer ce que vous voulez.')}}</p>
            </div>
          </div>

        </div>

</div>
    </section><!-- #services -->


    <!-- Section formulaire emprunt -->

      <section id="emprunt" class="section-bg1 container">
      <header class="section-header1">
          <h3>{{__('Faire une demande')}}</h3>
          <p>{{__('Une fois la demande faite, nous vous répondons dans les plus brefs délais')}}</p>
        </header>

      <form method="post" action="/project" class="p-5 grey-text">
        @csrf
                        <div class="form-group row">
                            <div class="col-md-3">
                               <div class="md-form form-sm">
                                    <select  id="projet" class="form-control" required onclick='another()' name="projet" >
                                        <option selected value="">{{__('Votre Projet')}}</option>
                                        <option value="1">{{__('Prêt Automobile')}}</option>
                                        <option value="2">{{__('Prêt Immobilier')}}</option>
                                        <option value="3">{{__('Rachat de Crédit')}}</option>
                                        <option value="3">{{__('Financement de projets')}}</option>
                                        <option value="3">{{__('Crédit agricole')}}</option>
                                        <option value="autre">{{__('Autres projets')}}</option>
                                    </select>
                                </div>
                            </div>

                             <div id="another" class="col-md-3" style="display : none">
                                <div class="md-form form-sm">
                                    <input id="autre-projet" class="form-control" placeholder="Indiquer votre projet" name="autre_projet"  type=text >
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="md-form form-sm">
                                    <input class="form-control" name="montant_emprunt"  tilte="Entre 5000 et 12000000"  placeholder="Montant souhaité(€)" type=number min=5000 max=12000000 step=1000 required>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="md-form form-sm">
                                <input class="form-control" name="duree_projet" tilte="Entre 6 et 300mois(25 ans)" placeholder="Durée de remboursement (mois)" type=number min=6 max=300 step=1000 required>
                        
                                </div>
                            </div>
                            
                            <div class="col-md-2">
                                <button type="submit" class="btn bt-sm text-light" id="continuer" style="background-color: rgba(141,141,141,1); margin-top : 0px;">
                                    Continuer
                                </button>
                            </div>
                        </div>
                        {{--@if(isEmpty($data))--}}
                            {{--{{ $data }}--}}
                        {{--@endif--}}
            </form>


            </section>


    <!-- ##### Features Area Start ###### -->
    <section class="features-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-features-area mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Section Heading -->
                        <div class="section-heading white">
                            <div class="line"></div>

                            <h2>{{__('Youtik Credit')}}</h2>
                        </div>
                        <h6>
                        {{__('Découvrez nos offres, nous sommes à votre disposition pour toute information.')}}

                        </h6>
                        <a href="{{route('investir')}}" class="btn credit-btn mt-50">{{__('Investir')}}</a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-features-area mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <img src="template_credit/img/bg-img/assistant.png" alt="">
                        <h5>{{__('Nous prenons soin de vous')}}</h5>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-features-area mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <img src="template_credit/img/bg-img/call.png" alt="">
                        <h5>{{__('Pas besoin de documents')}}</h5>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-features-area mb-100 wow fadeInUp" data-wow-delay="700ms">
                        <img src="template_credit/img/bg-img/speed.png" alt="">
                        <h5>{{__('Rapide')}} &amp; {{__('facile')}}</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="team1" class="wow fadeInUpwow fadeInUp ">
		<div class="container">

     <header class="section-header">
          <h3>Le crédit, en plus simple</h3>
          <p>Donnez une bonne leçon au système bancaire en optant pour un crédit juste, transparent et rapide !  </p>
        </header>
			
			<div class="row flex-items-xs-middle flex-items-xs-center">
        
     <div class="col-xs-12 col-lg-4">
          
      <div class="title">
                <div class="team1 text-center">
                    <div class="cover" style="background:url('template_credit/img/bg-img/discuss.png'); background-size:cover;">
                      <div class="overlay text-center">
                        
                      </div>
                    </div>  

                  
                      <div class="card-header">
                        <h3 ><span class="currency">You</span>tik<span class="period">Credit</span></h3>
                  

                        <div class="card-block" >
                          <h4 class="card-title"> 
                          Un crédit rapide
                          </h4>

                          <p>
                            Une demande 100% en Ligne,une réponse à la réception de votre dossier complet, Youtik Credit vous faire une réponse dans les 24h.
                            <br>
                            <a href="#emprunt">Demander un emprunt</a>
                          </p>
                        </div>
        
                      </div>  
                  </div>
        </div>
      </div>


				<div class="col-xs-12 col-lg-4">
          <div class="title">
              <div class="team1 text-center">
                  <div class="cover" style="background:url('template_credit/img/bg-img/invest1.png'); background-size:cover;">
                    <div class="overlay text-center">
                      
                    </div>
                  </div>  

                
                  <div class="card-header">
                    <h3 ><span class="currency">You</span>tik<span class="period">Credit</span></h3>
                 

                      <div class="card-block" >
                        <h4 class="card-title"> 
                        Un crédit transparent 
                        </h4>

                        <p>
                            100% de nos clients bénéficient d’un crédit à taux fixe et à échéance de remboursement fixe.Aucun frais caché…  
                         <br>
                           <a href="#emprunt">Demander un emprunt</a>

                          </p>
                        </div>
      
                  </div>
               </div>

              
          </div>
        
        </div>
        

      <div class="col-xs-12 col-lg-4">
          <div class="title">
              <div class="team1 text-center">
                  <div class="cover" style="background:url('template_credit/img/bg-img/invest.png');
                   background-size:cover;">
                    <div class="overlay text-center">
                      
                    </div>
                  </div>  

                
                  <div class="card-header">
                    <h3 ><span class="currency">You</span>tik<span class="period">Credit</span></h3>
                 

                      <div class="card-block" >
                        <h4 class="card-title"> 
                        Un crédit juste
                        </h4>

                        <p>
                  100% des intérêts sont reversés à nos investisseurs professionnels (particuliers et personnes morales) Devenez investisseur !!!!
                 <br>
                         <a href="#emprunt">Demander un emprunt</a>
        
                </p>
                       
                        </div>
      
                   </div>
               </div>


			    </div>
      </div>
      

</div>
</div>
  </section>
  

    <!--==========================
      Features Section
    ============================-->
    <section id="features" >
      <div class="container" >

        <div class="row feature-item" style="margin-top: 50px;">
          <div class="col-lg-6 wow fadeInUp">
            <img src="template_credit/img/bg-img/famille.png" class="img-fluid" alt="">
          </div>
          <div class="  col-lg-6 wow fadeInUp pt-5 pt-lg-0" style="margin-top: 20px;">
            <h4>Le crédit, en plus rapide</h4>
            <p>
            Vous souhaitez conserver plus de pouvoir d'achat ? Baissez vos mensualités.
            </p>
            <p>
Vous souhaitez diminuer le coût du crédit ? Réduisez la durée de l'emprunt.            </p>
            <p >
Vous souhaitez conserver une partie de votre épargne ? Diminuez votre apport.            </p>
            <p >
            Souscrire un prêt est souvent perçu comme une opération lourde et chronophage. Détrompez-vous ! Sur une plateforme en ligne, il est possible d’effectuer en peu de temps les démarches pour financer ses projets en urgence.          
        </p>

            <p>
UNE SOUSCRIPTION SIMPLE, RAPIDE ET 100 % EN LIGNE            </p>
            <p>
Constituez votre dossier et suivez son avancement dans votre espace sécurisé puis signez votre offre de prêt tout cela 100 % en ligne si vous le souhaitez !            </p>
          </div>
        </div>

        <div class="row feature-item mt-5 pt-5">
          <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
            <img src="template_credit/img/bg-img/empty.png" class="img-fluid" alt="Credit conso, Youtik">
          </div>

          <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1" style="margin-top: 10px;">
            <h4>Emprunt rapide : Le crédit conso, la solution aux dépenses surprises</h4>
            <p>
Tout le monde est soumis aux aléas de la vie, et peut du jour au lendemain se retrouver dans une situation financière compliquée qui entraîne un besoin urgent d’argent :  
          </p>
          <p>
          une réparation matérielle incontournable ;
          </p>
          <p >
des soins médicaux ;          </p>
          <p >
une grosse facture imprévue ;          </p>
          <p >
des frais de garagiste pour utiliser son véhicule ;          </p>
          <p>
Toutes ces situations requièrent un apport d’argent immédiat. Mais la plupart des organismes prêteurs prennent plusieurs jours pour traiter les dossiers de demande. Cependant, il est possible de recourir à un crédit rapide en ligne pour réduire cette période.          </p>
            
          </div>
          
        </div>

         <div class="row feature-item mt-5 pt-5">
          <div class="col-lg-6 mt-100 wow fadeInUp">
            <img src="template_credit/img/bg-img/bank.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
            <h4>Emprunter rapidement en ligne avec Youtik credit pour obtenir de l’argent sans délai.</h4>
            <p>
Dans ces situations, il est possible de recourir au crédit urgent en ligne auprès de Youtik Credit, une plateforme en ligne de crédit aux particuliers qui vous permet d’éviter de recourir aux banques en faisant appel à l’épargne d’investisseurs. Cette solution permet de profiter de plusieurs avantages :
            </p>
            <p>
    un taux bas et attractif, sans aucun frais caché ni taux trompeurs ;
        </p>
         <p>
    un délai d’exécution express ;
        </p>
         <p >
        une transparence en temps réel à chaque étape du dossier (les informations sont données au demandeur par mail, et sur l’espace client).
        </p>
            <p>
Ainsi, dès l’acceptation de son dossier, le particulier reçoit son argent bien plus rapidement que dans une demande de crédit classique auprès d’une banque. Il est possible de simuler précisément sa demande de crédit express en cas de besoin d’argent soudain.   
         </p>
          </div>
        </div>

      </div>
    </section><!-- #about -->

<section id="testimonials" class="">
      <div class="container">

        <header class="section-header">
          <h3>{{('Témoignages')}}</h3>
        </header>

        <div class="row justify-content-center">
          <div class="col-lg-8">

            <div class="owl-carousel testimonials-carousel wow fadeInUp">
    
              <div class="testimonial-item">
                <img src="template_testimonials/img/testimonial-2.jpg" class="testimonial-img" alt="">
                <h3>Sarah</h3>
             
                <p>
 Je suis très satisfaite d'avoir fait appel à Youtik-Credit. J'ai eu une réponse très rapide. Vos démarches d'offres de crédit sont simplifiées, simple, et rapide.
 Bravo pour votre accueil sympathique et le suivi des dossiers, la rapidité dans vos décisions ainsi qu'à vos capacités de comprendre les clients peu importe leur situation. Mon expérience avec votre organisation fut la meilleure de tous. Je recommande Youtik-Credit vivement. Cordialement.
                </p>
              </div>
    
              <div class="testimonial-item">
                <img src="template_testimonials/img/testimonial-1.jpg" class="testimonial-img" alt="">
                <h3>Walker</h3>

                <p>
Youtik-Credit est la meilleure organisation de crédit que j'ai connu de ma vie. J’ai été plusieurs fois arnaquée par des faux prêteurs sur Facebook jusqu'à ce que j’aie entendu parler de Youtik-Credit par l'un de mes proches ici au canada, comme étant une organisation d'octroi de crédit d'argent et d'investissement de projets.
Je n'ai pas hésité à faire ma demande de prêt de 70,000€ en tant que crédit automobile. J’ai obtenu mon crédit en 72 heures sur mon compte bancaire.
Ce qui différencie les autres structures de crédit des services de Youtik-Credit est que leurs services est rapide, fiable et sécurisé.
J'ai obtenu mon crédit après avoir signé mon contrat de prêt me liant à Youtik-Credit.
Je recommande vivement Youtik-Credit à tout le monde.
                </p>
              </div>
    
              <div class="testimonial-item">
                <img src="template_testimonials/img/testimonial-3.jpg" class="testimonial-img" alt="">
                <h3>Julie</h3>
                
                <p>
Il y a de cela quelques années, j’ai eu besoin de faire un crédit de 130,000€ pour le financement de mon projet agricole.
J’ai donc fait une recherche de crédit sur internet. C’est en lisant les commentaires dithyrambiques d’autres gens qui avaient été convaincus par le service que j’ai choisi de faire ma demande chez Youtik-Credit, car ils présentent des services de qualité avec des imbattable de 2% l'an.
Finalement j'ai fait ma demande de crédit, puis reçu une confirmation dans moins de 24 heures. J’avais en effet un vieux crédit qui avait été remboursé 6 mois après et les conseillers de chez Youtik Credit ont pris le temps de creuser cette situation au lieu d'exprimer un refus automatique.
Youtik Credit est le meilleur site de crédit que j'ai connu. Mon expérience avec youtik est la plus belle expérience que j'ai connue.
Faites confiance à Youtik Credit et vous ne serez pas dessus.
                </p>
              </div>
    
              <div class="testimonial-item">
                <img src="template_testimonials/img/testimonial-4.jpg" class="testimonial-img" alt="">
                <h3>Louis</h3>

                <p>
Je suis entrepreneur, vivant à Norvège en suisse. J’avais besoin d'un prêt de 600,000€ pour une construction immobilière, mais aucune banque n’était prête à m'accorder un tel crédit. J’ai fait plusieurs demandes au particulier mais sans succès. Un jour, une amie m'a parlé des exploits de Youtik Credit et de leur capacité à emprunter partout dans le monde.
J'ai donc fait ma première demande de crédit avec Youtik Credit d'un montant de 600,000€. J’ai fourni des informations nécessaires à ma demande de crédit, puis obtenu mon prêt de 600,000€ après signature du contrat de prêt et l'établissement de mon assurance vie.
Youtik-Credit est la meilleure organisation de crédit que je connais. Je recommande Youtik-Credit à tous pour vos demandes de prêt.
                </p>
              </div>

            </div>

          </div>
        </div>


      </div>
    </section><!-- #testimonials -->

    
    <!-- ##### Newsletter Area Start ###### -->
    <section class="newsletter-area section-padding-100 bg-img jarallax" style="background-image: url(template_credit/img/bg-img/maison.png);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-lg-8">
                    <div class="nl-content text-center">
                        <h2>{{__('Ecrivez-nous')}}</h2>
                        
                        <h4 style="text-align:center; color:#fff">{{__('Besoin de plus d’informations ?')}}
</h4>
<br>
                    <a href="{{route('contact')}}" class="btn credit-btn mt-50">{{__('Contactez nous')}}
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Newsletter Area End ###### -->


    <script>
    
    function another()
    {
        var autre_projet = document.getElementById("autre-projet")

        if(document.getElementById('projet').value == 'autre')
        {
          document.getElementById('another').style.display = 'flex';
            autre_projet.setAttribute('required','required')
        }
        else
        {
          document.getElementById('another').style.display = 'none';
            autre_projet.removeAttribute('required');
        }
  }
    </script>
@endsection