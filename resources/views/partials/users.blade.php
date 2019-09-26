@extends('partials.admin')

@section('content')

<!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Liste des utilisateurs</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">

              

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  
                <thead>
                    <tr>
                      <th>Identifiant</th>  
                      <th>Nom</th>
                      <th>Prénom</th>
                      <th>Sexe</th>
                      <th>Date de naissance</th>
                      <th>Pays</th>
                      <th>Adresse</th>
                      <th>Code Postal</th>
                      <th>Email</th>
                      <th>Invest</th>
                      <th>Bonus</th>
                    </tr>
                  </thead>                                  
       
                  <tbody>
                    @forelse($users as $user)
                    <tr>
                    <td>{{ $user-> id}}</td>
                      <td>{{ $user-> name}}</td>
                      <td>{{ $user-> surname}}</td>
                      <td>{{ $user-> gender}}</td>
                      <td>{{ $user-> birth}}</td>
                      <td>{{ $user-> country}}</td>
                      <td>{{ $user-> adresse}}</td>
                      <td>{{ $user-> codep}}</td>
                      <td>{{ $user-> email}}</td>
                      <td>{{ $user-> invest}}</td>
                      <td>{{ $user-> bonus}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                   
                </table>
                
              </div>
            </div>
          </div>
  
  <div class="container" >
    <div class="row justify-content-center mt-30 mb-30">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{__('Formulaire de modification d’investissement et de bonus')}} </div>

                <div class="card-body">

                    <form method="post" action="{{ route('modify')}} ">
                        @csrf
                        {{ method_field('PUT')}}
                        
                          <div class="form-group row">
                            <label for="id" class="col-md-4 col-form-label text-md-right">{{ __('Identifiant') }}</label>

                            <div class="col-md-6">
                                <input id="id" type="number" class="form-control @error('id') is-invalid @enderror" name="id" value="{{ old('id') }}" required autocomplete="id">

                                @error('id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                           </div>

                        <div class="form-group row">
                            <label for="invest" class="col-md-4 col-form-label text-md-right">{{ __('Investissement') }}</label>

                            <div class="col-md-6">
                                <input id="invest" type="number" class="form-control @error('invest') is-invalid @enderror" name="invest" required autofocus>

                                @error('invest')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        
                        <div class="form-group row">
                            <label for="bonus" class="col-md-4 col-form-label text-md-right">{{ __('Bénéfice') }}</label>

                            <div class="col-md-6">
                                <input id="bonus" type="number" class="form-control @error('bonus') is-invalid @enderror" name="bonus"  required autofocus>

                                @error('bonus')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                     
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="background-color: rgba(236,91,38,1);">
                                    {{ __('Modifier') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- Bootstrap core JavaScript-->
  <script src="template_user/vendor/jquery/jquery.min.js"></script>
  <script src="template_user/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>



 <!-- Page level custom scripts -->
  <script src="template_user/js/demo/datatables-demo.js"></script>

  
    <!-- Page level plugins -->
  <script src="template_user/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="template_user/vendor/datatables/dataTables.bootstrap4.min.js"></script>



@endsection