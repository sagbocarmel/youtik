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
                      <th>Pays</th>
                      <th>Adresse</th>
                      <th>Code Postal</th>
                      <th>Email</th>
                      <th>Action</th>
                    </tr>
                  </thead>                                  
       
                  <tbody>
                    @forelse($users as $user)
                    <tr>
                    <td>{{ $user-> id}}</td>
                      <td>{{ $user-> name}}</td>
                      <td>{{ $user-> surname}}</td>
                      <td>{{ $user-> country}}</td>
                      <td>{{ $user-> adresse}}</td>
                      <td>{{ $user-> codep}}</td>
                      <td>{{ $user-> email}}</td>
                      <td>
                          <form method="post" action="{{ route('delete', ['id'=> $user->id] )}}">
                                @method('DELETE')   
                                @csrf
                                <input class="btn btn-danger btn-xs" onclick="return confirm ('Supprimer le client?')" type="submit" value="Supprimer">
                                </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                   
                </table>
                
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

@stop