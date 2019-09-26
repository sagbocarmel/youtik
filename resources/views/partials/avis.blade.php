@extends('partials.admin')

@section('content')
 <!-- <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>
                            Avis
                        </h2>
                    </div>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="datatable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Nom Auteur</th>
                                                <th>Prénom</th>
                                                <th>Avis donné</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @forelse ($posts as $post)
                                                <tr>
                                                
                                                    <td>{{ $post->body }}</td>
                                                    <td>{{ $post->user->name }}</td>
                                                    <td>{{ $post->user->surname }}</td>
                                                    <td>
                                                    
                                                    <form method="post" action="{{ route('deleteavis', ['id'=> $post->id] )}}">
                                                    @method('DELETE')   
                                                    @csrf
                                                    <input class="btn btn-danger btn-xs" onclick="return confirm ('Veux tu vraiment supprimer l’avis du client ?')" type="submit" value="Supprimer le post">
                                                    </form>
                                                </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="4">Pas d'avis disponible.</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>

</div> -->

<!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Liste des avis</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  
                <thead>
                    <tr>
                      <th>Nom Auteur</th>
                      <th>Prénom</th>
                      <th>Avis donné</th>
                      <th>Action</th>
                    </tr>
                  </thead>                                  
       
                  <tbody>
                            @forelse($posts as $post)
                            <tr>
                                <td>{{ $post-> user->name}}</td>
                                <td>{{ $post->user-> surname}}</td>  
                                <td>{{ $post->body}}</td>                            
                                <td>                                                           
                                <form method="post" action="{{ route('deleteavis', ['id'=> $post->id] )}}">
                                @method('DELETE')   
                                @csrf
                                <input class="btn btn-danger btn-xs" onclick="return confirm ('Veux tu vraiment supprimer l’avis du client ?')" type="submit" value="Supprimer le post">
                                </form>
                            </td>

                            </tr>
                    @empty
                      <tr>
                       <td colspan="4">Pas d'avis disponible.</td>
                    </tr>
                    @endforelse
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