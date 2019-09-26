@extends('layouts.template_user')

@section('contentuser')
<section id="features" >

<div class="container " style="margin-bottom: 36px;">
        <div class="text_image">
            <h3>{{__('Bienvenue ')}} <span>{{ Auth::user()->name}}</span></h3> 
        </div>

    <div class="row feature-item" style="margin-top: 50px;">
       
          <div class="col-lg-6 wow fadeInUp">
            <img src="template_sample_user/img/welcome.png" class="img-fluid" alt="">
          </div>

          <div class="  col-lg-6 wow fadeInUp pt-5 pt-lg-0" style="margin-top: 20px; color: black;">
             
          <div class="card">
                <div class="card-header">{{ __('Votre compte') }}</div>

                <div class="card-body">  
          
                <label class="col-md-6 col-form-label">  {{__('Solde dinvestissement')}} :</label>
                
                <span  class="col-md-4">
                    @if(Auth::user()->invest == null)
                    
                      {{__('0 $')}}
                    
                    @else
                    
                    {{Auth::user()->invest}} $
                    
                    @endif
                </span>

         <label class="col-md-6 col-form-label text-md-left">  {{__('Bénéfice')}} :</label>

                   <span  class="col-md-4"> 
                    @if(Auth::user()->bonus == null)
                    
                    {{__('0 $')}}
                    
                    @else
                    
                    {{Auth::user()->bonus}} $
                    
                    @endif</h4>
                </span>
                    
                    <div style="margin-top: 50px; text-align: center;">
                    <a class="btn btn-primary" href="{{route('invest')}}">{{__('Faire un investissement')}}<a>
                    </div>
                    

                    </div>
      
    </div>
      
    </div>
          </div>
      
    </div>


</div>
</section>
@endsection