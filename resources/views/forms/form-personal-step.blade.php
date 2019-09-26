@extends('layouts.master')

@section('content')
    <div class="container"  id="fieldperso" >
        <div class="row justify-content-center mt-30 mb-30">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{__('Informations personnelles')}}</div>

                    <div class="card-body">

                        <form id="regiration_form"  action="/personal/{{session('projectId')}}"  method="post" class="container" >
                            {{csrf_field()}}
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="nom" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Prénom') }}</label>

                                <div class="col-md-6">
                                    <input id="surname" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('surname') }}" required autocomplete="surname" autofocus>

                                    @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Date de naissance -->
                            <div class=" form-group row">
                                <label for="post" class="col-md-4 col-form-label text-md-right">{{ __('Date de naissance') }}</label>

                                <div class="col-md-6">
                                    <input id="date_naiss" type="date" class="form-control @error('date_naissance') is-invalid @enderror" name="date_naissance" value="{{ old('date_naiss') }}" required  autofocus>

                                    @error('date_naissance')
                                    <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="ville_naiss" class="col-md-4 col-form-label text-md-right">{{ __('Ville de naissance') }}</label>

                                <div class="col-md-6">
                                    <input id="ville_naiss" type="text" class="form-control @error('ville_naissance') is-invalid @enderror" name="ville_naissance" value="{{ old('ville_naiss') }}" required autocomplete="ville_naiss" autofocus>

                                    @error('ville_naissance')
                                    <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                    @enderror
                                </div>
                            </div>


                            <input type="button" name="previous" class="previous3 btn btn-default" value="Retour" />
                            <input type="submit" name="next" class="next5 btn btn-info" value="Continuer" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
