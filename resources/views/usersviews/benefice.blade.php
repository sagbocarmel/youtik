@extends('layouts.template_user')

@section('contentuser')

<div class="container form_style">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Demande de retrait de bénéfice') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('benefmail') }}">
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
                            <label for="retrait" class="col-md-4 col-form-label text-md-right">{{ __('Bénéfice à retirer') }}</label>                      

                            <div class="col-md-6">
                                <input  type="number" class="form-control @error('retrait') is-invalid @enderror" name="retrait" value="{{ old('retrait')}}" required autofocus min=100 max= "{{ Auth::user()->bonus  }}">

                                @error('retrait')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row" id="projet">
                            <label for="projet" class="col-md-4 col-form-label text-md-right">{{ __('Projet') }}</label>

                            <div class="col-md-6">
                                <textarea  rows="5" class="form-control @error('projet') is-invalid @enderror" name="projet" value="{{ old('projet')}}" required autofocus placeholder= "{{ __('Expliquer les raisons de votre demande de retrait')}}"></textarea>

                                @error('projet')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="background-color: rgba(236,91,38,1);">
                                    {{ __('Demande de retrait') }}
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