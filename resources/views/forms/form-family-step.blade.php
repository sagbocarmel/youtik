@extends('layouts.master')

@section('content')
<div class="container"  id="fieldfamily" >
    <div class="row justify-content-center mt-30 mb-30">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Situation familiale') }}</div>

                <div class="card-body">

                <form id="regiration_form"  action="/family/{{session('projectId')}}"  method="post" class="container" >
                 {{csrf_field()}}

                    <div class="form-group row">
                     <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Situation familiale') }}</label>


                           <!-- Type Situation familiale -->
                            <div class="col-md-6">

                                   <select id="sf" class="form-control @error('famille') is-invalid @enderror" style="font-size: medium;" name="famille" onclick='family()' required autocomplete="famille" autofocus>
                                       <option selected value="">{{__('Choisir votre situation familiale')}}</option>
                                       <option value="Célibataire">{{__('Célibataire')}}</option>
                                       <option value="marital-pacs">{{__('Vie Marital / PACS')}}</option>
                                       <option value="divorce">{{__('Divorcé(e)')}}</option>
                                       <option value="Marie">{{__('Marié(e)')}}</option>
                                       <option value="separe">{{__('Séparé(e)')}}</option>
                                       <option value="Veuf(ve)">{{('Veuf(ve)')}}</option>
                                   </select>

                                @error('famille')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                    </div>

                    <!-- Section cas divorce et separation -->
                    <div class="form-group row" id="sf4" style="display : none">
                        <label for="marie" class="col-md-4 col-form-label text-md-right">{{ __('Votre conjoint et vous étiez vous mariés ?') }}</label>

                            <div class="col-md-6">

                                    <select id="marie" class="form-control @error('marie') is-invalid @enderror" style="font-size: medium" onclick="divorce()"  autocomplete="marie" autofocus>
                                        <option selected value="">{{__('Choisissez')}}</option>
                                        <option value="Oui">{{__('Oui')}}</option>
                                        <option value="Non">{{__('Non')}}</option>
                                    </select>

                                     @error('marie')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                    </div>

                    <!-- Jugement de divorce ou ordonnance -->
                        <div class="form-group row" id="sf5" style="display : none">

                                    <label for="jugement" class="col-md-4 col-form-label text-md-right">{{ __('Disposez vous d’un jugement de divorce ou d’une ordonnance de non conciliation ?') }}</label>


                                <div class="col-md-6" >

                                        <select id="jugement" class="form-control @error('jugement') is-invalid @enderror" style="font-size: medium;" autocomplete="jugement" name="jugement" autofocus>
                                            <option selected value="">{{__('Choisissez')}}</option>
                                            <option value="oui">{{__('Oui')}}</option>
                                            <option value="non">{{__('Non')}}</option>
                                        </select>

                                         @error('jugement')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                         @enderror

                                </div>
                        </div>
                    <!-- Nombre d'enfants -->

                    <div class="form-group row">

                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre d’enfants') }}</label>


                        <!-- Choisir le nombre d'enfants -->
                            <div class="col-md-6">

                                        <select id="sf3" class="form-control @error('enfants') is-invalid @enderror" style="font-size: medium" title=" Prenez en compte uniquement les enfants qui sont rattachés à votre compte fiscal" required name="enfants" autofoucs autocomplete="enfants">
                                            <option selected value="">{{__('Choisissez')}}</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">+</option>
                                        </select>

                                        @error('enfants')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                    </div>

                    <input type="button" name="previous" class="previous btn btn-default" value="Retour" />
                    <input type="submit" name="next" class="next2 btn btn-info" value="Continuer" />


                </form>
</div>
</div>
</div>
</div>
</div>

@endsection
