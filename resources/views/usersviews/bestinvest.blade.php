@extends('layouts.template_user')

@section('contentuser')

<div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">{{__('Top 10 des meilleurs investisseurs')}}</h6>
            </div>   <div class="card-body">

            <div>
                <p style="text-align: justify;">
                {{__('Ce classement des meilleurs investisseurs de notre plateforme d’investissement se fait en fonction de la performance acquise par les investisseurs et du montant investi.Ce tableau prend en compe la performance des investisseurs , le nombre d’années où ils furent en activité ce qui permet d’avoir leur performances annuelles et aussi leur revenu')}}
                </p>
   </div>
<!-- DataTales Example -->
          <div class="card shadow mb-4">
        
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="datatable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th  >{{__('Nom')}}</th>
                      <th  >{{__('Année d’intégration')}}</th>
                      <th  >{{__('Montant d’investissement ')}}</th>
                      <th >{{__('Revenus par investissement')}}</th>
                      <th >{{__('Revenus total depuis l’intégration')}}</th>
                      <th >{{__('Montant actuel en investissement')}}</th>
                      <th colspan="2">{{__('Revenus actuel')}}</th>

                    </tr>
                  </thead>
                 
                  <tbody>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <th>Mensuel</th>                  
                      <th>Annuel</th>
                    </tr>
                    <tr>
                      <td></td>
                      <td>Janvier 2012</td>
                      <td></td>
                      <td>63</td>
                      <td>322,000€</td>
                      <td>250,000€</td>
                      <td>12,500 €</td>
                      <td>150,000€</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>Mars 2019</td>
                      <td></td>
                      <td>66</td>
                      <td>339,000€</td>
                      <td>130,000€</td>
                      <td>6,500 €</td>
                      <td>78,000 €</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>Février 2014</td>
                      <td></td>
                      <td>22</td>
                      <td>395,000 €</td>
                      <td>150,000 €</td>
                      <td>7,500 €</td>
                      <td>90,000 €</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>Décembre 2017</td>
                      <td>400,000 €</td>
                      <td>420,000 €</td>
                      <td>420,000 €</td>
                      <td>400,000 €</td>
                      <td>20,000 €</td>
                      <td>240,000€</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>Septembre 2015</td>
                      <td>200,000 €</td>
                      <td>480,000 €</td>
                      <td>480,000 €</td>
                      <td>200,000 €</td>
                      <td>10,000 €</td>
                      <td>120,000€</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>329,000€</td>
                      <td>65,000 €</td>
                      <td>3,250 €</td>
                      <td>39,000 €</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>300,000 €</td>
                      <td>150,000 €</td>
                      <td>7,500 €</td>
                      <td>90,000 €</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>262,000 €</td>
                      <td>100,000 €</td>
                      <td>5,000 €</td>
                      <td>60,000 €</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>2018</td>
                      <td>300,000 €</td>
                      <td>240,000 €</td>
                      <td>240,000 €</td>
                      <td>300,000 €</td>
                      <td>150,000€</td>
                      <td>180,000€</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td>80,000 €</td>
                      <td>240,000 €</td>
                      <td>240,000 €</td>
                      <td>80,000 €</td>
                      <td>4,000 €</td>
                      <td>48,000 €</td>
                    </tr>
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
  
@endsection