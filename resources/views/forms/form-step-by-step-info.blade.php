<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body style="background-color: #4a5b64">

<!-- Start your project here-->
<div style="height: 100vh">
    <div class="flex-center flex-column">
        <!--Grid column-->
        <div class="col contact-form-area ">
            <!--Card-->
            <div class="card">

                <!--Card content-->
                <div class="card-body">
                    <!--Title-->
                    <h4 class="card-title">Le Crédit, en plus rapide</h4>
                    <!--Text-->
                    <form method="post" action="/info" class="p-5 grey-text">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="md-form form-sm">
                                    <select id="sp" class="browser-default custom-select custom-select-lg mb-3" required>
                                        <option selected>{{__('Votre Projet')}}</option>
                                        <option value="1">{{__('Prêt Automobile')}}</option>
                                        <option value="2">{{__('Prêt Immobilier')}}</option>
                                        <option value="3">{{__('Rachat de Crédit')}}</option>
                                        <option value="3">{{__('Financement de projets')}}</option>
                                        <option value="3">{{__('Crédit agricole')}}</option>
                                        <option value="3">{{__('Autres projets')}}</option>
                                    </select>
                                </div>
                            </div>

                             <div class="row" id="sp1" style="display: none">
                            <div class="col-md-4 mt-5">
                                <label for="sf1" style="font-size: medium; color: #2e5e86; font-weight: bold;">Votre conjoint et vous étiez vous mariés ?</label>
                            </div>
                            <div class="col-md-4 mt-2">
                                <div class="md-form form-sm">
                                    <select id="sf1" class="browser-default custom-select custom-select-lg mb-5" style="font-size: medium" onclick="divorce()">
                                        <option selected>Choisissez</option>
                                        <option value="oui">Oui</option>
                                        <option value="non">Non</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                            <div class="col-md-3">
                                <div class="md-form form-sm">
                                    <input class="browser-default" name="montant" placeholder="Montant souhaité(€)" type=number min=2000 max=1000000 step=1000 required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="md-form form-sm">
   <input class="browser-default" name="montant" placeholder="Durée du crédit(mois)" type=number min=12 max=360 step=1 required>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mt-2">
                                    <button class="btn bt-sm text-light" style="background-color: rgba(236,91,38,1);">
                                        <div class="row fixed-section">
                                            <div class="text-left font-weight-bold col">
                                        <span class="">
                                        Continuer Sans engagement
                                            </span>
                                        </span>
                                            </div>
                                            <div class="col-md-1 mt-3">
                                                <i class="fa fa-arrow-right"></i>
                                            </div>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <!--/.Card-->
            <!-- Form contact -->
        </div>
        <!--Grid column-->
    </div>
</div>
<!-- /Start your project here-->

<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>

<script>

function family() {
        if (document.getElementById('sf').value == 'separe' || document.getElementById('sf').value == 'divorce') {
            document.getElementById('sf4').style.display = 'flex';
            document.getElementById('sf5').style.display = 'none';;
        } else {
            document.getElementById('sf4').style.display = 'none';
            document.getElementById('sf5').style.display = 'none';;
        }
    }

    function divorce() {
        if (document.getElementById('sf').value == 'divorce' && document.getElementById('sf1').value == 'oui' ) {
            document.getElementById('sf5').style.display = 'flex';
        } else {
            document.getElementById('sf5').style.display = 'none';
        }
    }
</script>
</body>

</html>
