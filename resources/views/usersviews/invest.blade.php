@extends('layouts.template_user')

@section('contentuser')

<div class="container form_style">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Formulaire de demande d’investissement') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('investmail') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ Auth::user()->name }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Prénom') }}</label>

                            <div class="col-md-6">
                                <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ Auth::user()->surname}}" required autocomplete="surname" autofocus>

                                @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                          <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Sexe') }}</label>

                            <div class="col-md-6">
                            
                            <select id="gender" class="form-control @error('gender') is-invalid @enderror " name="gender" value="{{ Auth::user()->gender }}" required autocomplete="gender" autofocus style="font-size: medium;" required>
                                <option value="M" selected>{{__('M')}}</option>
                                <option value="F">{{__('F')}}</option>
                            </select>

                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Adresse Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth::user()->email }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="montant_invest" class="col-md-4 col-form-label text-md-right">{{ __('Catégorie d’investissement') }}</label>

                            <div class="col-md-6">

                                       <select id="montant" class="form-control" style="font-size: medium;" name="montant_invest" required >
                                       <option selected value="">{{__(' Faites votre choix' )}}</option>
                                       <option value="debutant">{{__(' Débutant (200€ - 2000€)' )}}</option>
                                       <option value="economique">{{__('Economique (2001€ - 10000€)')}}</option>
                                       <option value="avance">{{__('Avancé (10000€ - 50000€)')}}</option>
                                       <option value="business">{{__('Business (50000€ - 100000€)')}}</option>
                                       <option value="affaire">{{__('Affaires (100000€ - 200000€)')}}</option>
                                       
                                   </select>

                                @error('montant_invest')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>  

                           <div class="form-group row">
                            <label for="debutant" class="col-md-4 col-form-label text-md-right">{{ __('Montant') }}</label>

                            <div class="col-md-6">
                                <input  type="number" id="debutant" class="form-control @error('debutant') is-invalid @enderror" name="prix_invest" value="{{ old('debutant')}}" required autofocus min="" max="" >

                                @error('debutant')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                           <!-- <div class="form-group row" id="economique" style="display :none">
                            <label for="economique" class="col-md-4 col-form-label text-md-right">{{ __('Montant') }}</label>

                            <div class="col-md-6">
                                <input  type="number" class="form-control @error('economique') is-invalid @enderror" name="prix_invest" value="{{ old('economique')}}" required autofocus min=2001 max=10000>

                                @error('economique')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                           <div class="form-group row"  id="avance" style="display :none">
                            <label for="avance" class="col-md-4 col-form-label text-md-right">{{ __('Montant') }}</label>

                            <div class="col-md-6">
                                <input type="number" class="form-control @error('avance') is-invalid @enderror" name="prix_invest" value="{{ old('avance')}}" required autofocus min=10000 max=50000>

                                @error('avance')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    
                          <div class="form-group row"  id="business" style="display :none">
                            <label for="business" class="col-md-4 col-form-label text-md-right">{{ __('Montant') }}</label>

                            <div class="col-md-6">
                                <input type="number" class="form-control @error('business') is-invalid @enderror" name="prix_invest" value="{{ old('business')}}" required autofocus min=50000 max=100000>

                                @error('business')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                           <div class="form-group row" id="affaire" style="display :none">
                            <label for="affaires" class="col-md-4 col-form-label text-md-right">{{ __('Montant') }}</label>

                            <div class="col-md-6">
                                <input  type="number" class="form-control @error('affaires') is-invalid @enderror" name="prix_invest" value="{{ old('affaires')}}" required autofocus min=100000 max=200000>

                                @error('affaires')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->

                         <div class="form-group row" id="projet">
                            <label for="projet" class="col-md-4 col-form-label text-md-right">{{ __('Projet') }}</label>

                            <div class="col-md-6">
                                <textarea  rows="5" class="form-control @error('projet') is-invalid @enderror" name="projet" value="{{ old('projet')}}" required autofocus placeholder= "{{ __('Décrivez votre projet')}}"></textarea>

                                @error('projet')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
             <button class="btn btn-primary" type="submit">{{__('Envoyer')}}</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<script>

  
    var input= document.getElementById('debutant');
    input.setAttribute("min", 200);
    input.setAttribute("max", 2000);

</script>

@endsection