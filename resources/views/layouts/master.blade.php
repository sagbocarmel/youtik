<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Youtik Credit, votre service de prêt radie en ligne">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="Youtik Credit" content="Youtik Credit vous facile la vie à travers l’emprunt en ligne quelque soit votre projet" >
    <meta name="Prêt Automobile" content="Youtik Credit vous facile la vie à travers l’emprunt en ligne quelque soit votre projet" >
    <meta name="Prêt immobilier" content="Youtik Credit vous facile la vie à travers l’emprunt en ligne quelque soit votre projet" >
    <meta name="Crédit agricole" content="Youtik Credit vous facile la vie à travers l’emprunt en ligne quelque soit votre projet" >
    <meta name="Rachat de crédit" content="Youtik Credit vous facile la vie à travers l’emprunt en ligne quelque soit votre projet" >
    <meta name="Credit" content="Besoin d’un pêt en ligne? Facile, rapide et sûre? Youtik Credit est la solution" >

    <meta name="keywords" content="prêt, crédit, banque en ligne, investir, prêt immobilier, prêt automobile, rachat de crédit, crédit conso" />

    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Youtik Credit</title>

    <!-- Favicon -->
    <link rel="icon" href="template_credit/img/core-img/favicon.ico">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="template_credit/style.css">

    <link rel="stylesheet" href="template_register/css/style.css"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="template_login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="template_login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="template_login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="template_login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="template_login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="template_login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="template_login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="template_login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="template_login/css/util.css">
    <link rel="stylesheet" type="text/css" href="template_login/css/main.css">
    <link rel="stylesheet" type="text/css" href="template_register/css/style.css">
    <link rel="stylesheet" type="text/css" href="template_more/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="template_more/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="template_more/css/icons.css" />
    <link rel="stylesheet" type="text/css" href="template_more/css/component.css" />

    <link rel="stylesheet" href="template_phone/css/intlTelInput.css">

<!--===============================================================================================-->

<!-- Font-->
	<link rel="stylesheet" type="text/css" href="template_register/css/roboto-font.css">
	<link rel="stylesheet" type="text/css" href="template_register/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- datepicker -->
    <link rel="stylesheet" type="text/css" href="template_register/css/jquery-ui.min.css">
    
  <!-- Libraries CSS Files -->
    <link href="template_testimonials/lib/ionicons/css/ionicons.min.css" rel="stylesheet">

  <link href="template_testimonials/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


</head>

<body>
    <!-- Preloader -->


    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 d-flex justify-content-between">
                        <!-- Logo Area -->
                        <div class="logo">
                            <a href="{{route('home')}}"><img src="template_credit/img/core-img/logo.png" alt=""></a>
                        </div>

                        <!-- Top Contact Info -->
                        <div class="top-contact-info d-flex align-items-center">
                            <a href="" data-toggle="tooltip" data-placement="bottom" title="1 Avenue du Général Sarrail, 75016 Paris"><img src="template_credit/img/core-img/placeholder.png" alt=""> <span>1 Avenue du Général Sarrail, 75016 Paris, France</span></a>
                            <a href="" data-toggle="tooltip" data-placement="bottom" 
                            title="contact@youtikcredit.com"><img src="template_credit/img/core-img/message.png" alt="">
                             <span>contact@youtikcredit.com</span></a>

                        @php
                        $locale = session()->get('locale');
                        @endphp
                         
                                <a style="margin-left: 50px;" href="lang/en" data-toggle="tooltip" data-placement="bottom"><img src="{{asset('img/us.png')}}" width="30px" height="20x"></a>
                                <a href="lang/fr" data-toggle="tooltip" data-placement="bottom"><img src="{{asset('img/fr.png')}}" width="30px" height="20x"></a>
                                <a href="lang/ge" data-toggle="tooltip" data-placement="bottom"><img src="{{asset('img/ge.png')}}" width="30px" height="20x"></a>
                                <a href="lang/es" data-toggle="tooltip" data-placement="bottom"><img src="{{asset('img/es.png')}}" width="30px" height="20x"></a>
                                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="credit-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="creditNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                              <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href=" {{route ('home', app()->getLocale() ) }} "> {{__('Accueil')}}</a></li>
                                    <li><a href="{{route ('aboutus', app()->getLocale()) }} ">{{__('Présentation') }} </a></li>
                                    <li><a href="{{route ('services', app()->getLocale()) }} ">{{__('Services')}}</a></li>  
                                    <li><a href="{{ route('emprunt', app()->getLocale())}}">{{__('Emprunt')}}</a></li>
                                     <li><a href="{{ route('investir',app()->getLocale())}}">{{__('Investir')}}</a></li> 
                                    <li><a href="{{route ('contact') }} ">{{__('Contact')}}</a></li>
                                    <li><a href="{{route ('posts') }} ">{{__('Leurs avis')}}</a></li>

                                    <li><a href="#">Espace Client</a>
                                        <ul class="dropdown">
                                                  <!-- Authentication Links -->
                                                  @guest
                                                      <li>
                                                          <a href="{{ route('login') }}">{{ __('Connexion') }}</a>
                                                     </li>
                                                      @if (Route::has('register'))
                                                          <li>
                                                              <a href="{{ route('register') }}">{{ __('Inscription') }}</a>
                                                          </li>
                                                      @endif
                                                  @else
                                                       @if ( Auth::user()->type== 'admin')
                                                       <li>
                                                          <a  href="{{ route('admin')}}">
                                                              Profil {{ Auth::user()->name }}
                                                          </a>
                                                        </li>
                                                        
                                                        @else
                                                        <li>
                                                          <a  href="{{ route('userhome')}}">
                                                              Profil {{ Auth::user()->name }}
                                                          </a>
                                                        </li>
                                                        @endif
                                                                                                          
                                                  @endguest
                                                <ul>
                                                  </li>


                                </ul>

                                   
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Contact -->
                        <div class="contact" style="text-align: right;">
                            <a href="#"> +33 8556 555 8855</a>
                        </div>
                        
                    </nav>
                </div>
            </div>
        </div>
    </header>


  @yield('contenthome')
  @yield('contentabout')
  @yield('contentservices')
  @yield('contentcontact')
  @yield('contentemprunt')
  @yield('contentinvestir')
  @yield('contentform')
  <!-- @yield('contentmail')
  @yield('contentfamily')
  @yield('contentlogement')
  @yield('contentactivite')
  @yield('contentincome')
  @yield('contentbanque')
  @yield('contentperso') -->
  @yield('contentavis')
  @yield('contentplus')
  @yield('contentfiles')
  @yield('content')
  @yield('contentuser')


<!-- ##### Footer Area Start ##### -->
    <footer  id="footer" class="footer-area section-padding-100-0 section-bg1">

    <div class="footer-top">
      <div class="container">

          <div class="row">
              <div class="col-lg-6">

                  <div class="row">

                  
                 
                    <div class="col-sm-6">
                      <div class="footer-links">
                          
                        <ul>
                            <li>👉 <a href="{{ route('home') }}">{{__('Accueil')}}</a></li>
                            <li>👉 <a href="{{ route('aboutus') }}">{{__('Présentation')}}</a></li>
                            <li>👉 <a href="{{ route('services') }}">{{__('Services')}}</a></li>
                            <li>👉 <a href="{{ route('emprunt') }}">{{__('Emprunt')}}</a></li>
                            <li>👉 <a href="{{ route('investir') }}">{{__('Investir')}}</a></li>
                            <li>👉 <a href="{{ route('contact') }}">{{__('Contact')}}</a></li>
                          </ul>
                      </div>

                      <div class="footer-links">
                        <h4>Contact</h4>
                            <p style="color : #fff;">
                              1 Avenue du Général Sarrail, <br>
                              75016 Paris,<br>
                              France <br>
                              <strong>Phone:</strong> +33 5589 55488 55<br>
                              <strong>Email:</strong> contact@youtikcredit.com<br>
                            </p>
                      </div>

                     

                    </div>
                                                 

                      <div class="col-sm-6">

                      <div class="footer-info">
<p>{{__('Le saviez vous?')}}</p> <br>
                                <p>{{__('Les taux emprunteurs (TAEG) sont fixes et varient de 0,75% à 4% l’an  et la durée de l’emprunt est comprise ente 3mois à 30ans.')}}</p>
                                <p>{{__('Youtik : SA à Directoire et Conseil de Surveillance au capital de  1 123 151 773 €  – RCS de Paris 517 586 376 – Numéro ORIAS 14023256.')}}</p>                      </div>


                    </div>
                  </div>

                
              </div>
                 

                  <div class="col-lg-6">

                    <div class="footer-info">
                              
                                                  <p>{{__('A réception de votre dossier complet, Youtik Credit peut vous faire une réponse de confirmation dans les 24h ouvrées par mail. Étude réalisée sur la base d’un relevé de taux effectué par Sémaphore Conseil, ainsi que le cabinet de conseil de youtik-credit.')}} </p>
                                <p>{{__('Un crédit vous engage et doit être remboursé. Vérifiez vos capacités de remboursement avant de vous engager. Youtik Credit est agréé en tant qu’établissement de crédit – Prestataire de Services d’Investissement par l’Autorité de Contrôle Prudentiel et de Résolution (ACPR, n° d’agrément : 16488).')}} </p>
                                <p>{{__('Le financement est accordé sous réserve d’acceptation définitive par Youtik credit après l’étude de votre dossier. Vous disposez d’un droit de rétractation de 14 jours calendaires révolus à compter de la signature de l’offre de contrat de prêt; si le contrat n’est pas signé apres les 14jours,votre dossier de prêt sera annulé.')}}</p>
                                <p>{{__('Si votre dossier est définitivement accepté, Youtik conserve un certain nombre de vos pièces justificatives pendant toute la durée de votre contrat.')}}</p>
                                <p>{{__('Vous pouvez exercer votre droit d’accès, de rectification, d’effacement, de portabilité aux données personnelles vous concernant, ou vous opposer à leur utilisation à des fins de prospection ou en limiter le traitement en contactant le service client.')}}</p>
                                
                    </div>
                    
                  </div>

                </div>

          </div>

   
 



        <!-- Copywrite Area -->
        <div class="copywrite-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="copywrite-content d-flex flex-wrap justify-content-between align-items-center">
                            <!-- Footer Logo -->
                            <!-- <a href="#" class="footer-logo"><img src="template_credit/img/core-img/logo.png" alt=""></a> -->

                            <!-- Copywrite Text -->
                             <div class="container">
      <div class="copyright">
        &copy; Copyright 2019. <strong> YoutikCredit</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Rapid
        -->
      </div>
    </div>

                        </div>
                    </div>
                </div>



            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="template_credit/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="template_credit/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="template_credit/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="template_credit/js/plugins/plugins.js"></script>
    
    <script src="template_credit/js/dobpicker.js"></script>
    <!-- Active js -->
    <script src="template_credit/js/active.js"></script>

    <script src="template_testimonials/lib/owlcarousel/owl.carousel.js"></script>

    <script src="template_testimonials/lib/owlcarousel/owl.carousel.min.js"></script>
      <script src="template_testimonials/lib/counterup/counterup.min.js"></script>

	<script type= "text/javascript" src = "template_country/countries.js"></script>

    <script>
   populateCountries("pays_res","ville_res");
    </script>

<script src="template_phone/js/intlTelInput.js"></script>

 <script src="{{ asset('js/function.js') }}"></script>

  <script>
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
      // allowDropdown: false,
      // autoHideDialCode: false,
      // autoPlaceholder: "off",
      // dropdownContainer: document.body,
      // excludeCountries: ["us"],
      // formatOnDisplay: false,
      // initialCountry: "auto",
      //  geoIpLookup: function(callback) {
      //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
      //     var countryCode = (resp && resp.country) ? resp.country : "";
      //     callback(countryCode);
      //    });
      //  },
      // hiddenInput: "full_number",
      
      // localizedCountries: { 'de': 'Deutschland' },
      // nationalMode: false,
      // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
      // placeholderNumberType: "MOBILE",
      // preferredCountries: ['cn', 'jp'],
      // separateDialCode: true,
      utilsScript: "template_phone/js/utils.js",
    });
  </script>
    
</body>
</html>
