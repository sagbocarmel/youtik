@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-30 mb-30">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Inscription') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

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
                                <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>

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
                            
                            <select id="gender" class="form-control @error('gender') is-invalid @enderror " name="gender" value="{{ old('gender') }}" required autocomplete="gender" autofocus style="font-size: medium;" required>
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
                            <label for="birth" class="col-md-4 col-form-label text-md-right">{{ __('Date de naissance') }}</label>

                            <div class="col-md-6">

                            
                            
                            <input id="birth"  type="date" class="form-control @error('birth') is-invalid @enderror " name="birth" value="{{ old('birth') }}" required autocomplete="birth" autofocus style="font-size: medium;" required>
                              

                                @error('birth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                          <div class="form-group row">
                            <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('Pays') }}</label>

                            <div class="col-md-6">
                            
                            
                            <select id="pays_res" class="form-control @error('country') is-invalid @enderror " name="country" value="{{ old('country') }}" required  autofocus style="font-size: medium;" >
                               
                            </select>

                                @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label for="adresse" class="col-md-4 col-form-label text-md-right">{{ __('Adresse') }}</label>

                            <div class="col-md-6">
                                <input id="adresse" type="text" class="form-control @error('adresse') is-invalid @enderror" name="adresse" value="{{ old('adresse') }}" required autocomplete="codep" autofocus>

                                @error('adresse')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="codep" class="col-md-4 col-form-label text-md-right">{{ __('Code postal') }}</label>

                            <div class="col-md-6">
                                <input id="codep" type="number" class="form-control @error('codep') is-invalid @enderror" name="codep" value="{{ old('codep') }}" required autocomplete="codep" autofocus>

                                @error('codep')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Adresse Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmer mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="confirmold" id="confirmold" required {{ old('confirmold') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="confirmold">
                                        {{ __('Je confirme avoir lu, consenti et accepté les termes de YoutikCredit') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="background-color: rgba(236,91,38,1);">
                                    {{ __('Ouvrir un compte') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
