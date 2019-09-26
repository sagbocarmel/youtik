@extends('layouts.master')

@section('content')

<div class="container"  id="fieldmail" >
    <div class="row justify-content-center mt-30 mb-30">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">{{ __('Adresse Email') }}</div>

                <div class="card-body">
                    <form action="/mail/{{session('projectId')}}"  method="post" class="container" >

                             {{csrf_field()}}
                                         <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Adresse Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <div class="form-group">
                            <p id="notify1" style="color:red;"></p>
                            </div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>

     <input type="submit" class = "btn bt-sm text-light" style="background-color: rgba(236,91,38,1)" value="Voir mon offre" />

                    </form>
</div>
</div>
</div>
</div>
</div>
@endsection
