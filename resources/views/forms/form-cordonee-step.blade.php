@extends('layouts.master')

@section('content')
    <div class="container"  id="fieldinfo" >
        <div class="row justify-content-center mt-30 mb-30">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{__('Vos corrdonnées')}}</div>

                    <div class="card-body">

                        <form id="regiration_form"  action="/position/{{session('projectId')}}"  method="post" class="container" >
                            {{csrf_field()}}

                            <div class="form-group row">
                                <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Telephone') }}</label>

                                <div class="col-md-6">
                                    <input id="phone" type="tel" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}" required autofocus>

                                    @error('telephone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>



                            <!-- Pays -->
                            <div class="form-group row">
                                <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Pays de résidence') }}</label>

                                <div class="col-md-6">
                                    <select id="pays_res" class="form-control @error('pays_residence') is-invalid @enderror" name="pays_residence" value="{{ old('pays_res') }}" required autofocus autocomplete> </select>

                                    @error('pays_residence')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Ville -->
                            <div class="form-group row">
                                <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Ville / Département') }}</label>

                                <div class="col-md-6">
                                    <select id="ville_res" class="form-control @error('ville_residence') is-invalid @enderror" name="ville_residence" value="{{ old('ville_residence') }}" required autofocus autocomplete> </select>

                                    @error('ville_residence')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- Code postal -->
                            <div class="form-group row">
                                <label for="post" class="col-md-4 col-form-label text-md-right">{{ __('Code postal') }}</label>

                                <div class="col-md-6">
                                    <input id="post" type="number" class="form-control @error('code_postal') is-invalid @enderror" name="code_postal" value="{{ old('code_postal') }}" required autocomplete="post" autofocus>

                                    @error('code_postal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <!-- Adresse -->
                            <div class="form-group row">
                                <label for="adresse" class="col-md-4 col-form-label text-md-right">{{ __('Adresse') }}</label>

                                <div class="col-md-6">
                                    <input id="adresse" type="text" class="form-control @error('adresse') is-invalid @enderror" name="adresse" value="{{ old('adresse') }}" required autofocus>

                                    @error('adresse')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <input type="button" name="previous" class="previous4 btn btn-default" value="Retour" />
                            <input type="submit" name="submit" class="submit btn btn-success" value="Envoyer" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
