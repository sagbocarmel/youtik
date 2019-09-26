<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Title -->
    <title>Youtik Credit</title>

    <!-- Favicon -->
    <link rel="icon" href="template_credit/img/core-img/favicon.ico">
  <!-- Bootstrap core CSS -->
  <link href="template_sample_user/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="template_sample_user/css/simple-sidebar.css" rel="stylesheet">
  <link href="template_user/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="border-right" id="sidebar-wrapper">
      <div class="sidebar-heading ">{{('Bienvenue')}} <span style="text-transform: capitalize;">{{ Auth::user()->name }} </span></div>
      <div class="list-group list-group-flush">
        <a href="{{ route('userhome')}}" class="list-group-item list-group-item-action ">{{__('Mon Compte')}}</a>
        <a href="{{ route('invest') }}" class="list-group-item list-group-item-action ">{{__('Investir')}}</a>
        <a href="{{ route('retrait') }}" class="list-group-item list-group-item-action">{{__('Retirer son investissement')}}</a>
        <a href="{{ route('benefice') }}" class="list-group-item list-group-item-action">{{__('Retirer son bénéfice')}}</a>
        <a href="{{ route('profil') }}" class="list-group-item list-group-item-action ">{{('Modifier mon profil')}}</a>
        <a href="{{ route('bestinvest') }}" class="list-group-item list-group-item-action">{{__('Meilleurs investisseurs')}}</a>

      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
            <div id="content">

                <nav class="navbar navbar-expand-lg navbar-light bg-orange border-bottom">
                  <button class="btn btn-primary" id="menu-toggle">{{__('Menu')}}</button>

                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">

                      <li class="nav-item active">
                        <a class="nav-link" href="{{ route('home')}}">{{__('YoutikCredit')}}</a>
                      </li>
                    
                      <li class="nav-item active dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" style="text-transform: capitalize;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                                {{ __('Déconnexion') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                            </form>
                        </div>
                      </li>
                    </ul>
                  </div>
                </nav>

                <div class="container-fluid">
                  @yield('contentuser')
                </div>
        <!-- /#main content -->
        
            <!-- Footer -->
          <footer class="sticky-footer bg-gris">
            <div class="container my-auto">
              <div class="copyright text-center my-auto">
                <span style="color: white">Copyright &copy; YoutikCredit 2019</span>
              </div>
            </div>
          </footer>
          <!-- End of Footer -->
    </div>
</div>
  <!-- /#wrapper -->

      

 
  <!-- Bootstrap core JavaScript -->
  <script src="template_sample_user/vendor/jquery/jquery.min.js"></script>

  <script src="template_sample_user/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<script type= "text/javascript" src = "template_country/countries.js"></script>

    <script>
   populateCountries("pays_res","ville_res");
    </script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
