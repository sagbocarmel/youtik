@extends('layouts.master')


@section('contentcontact')
 <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(template_credit/img/bg-img/13.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>{{__('Contact')}}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">{{__('Accueil')}}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{__('Contact')}}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <section>
        

        <!-- ##### Google Maps ##### -->
        <div class="map-area">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22236.4
                0558254599!2d-118.25292394686001!3d34.057682914027104!2m3!1f0!2f0!3f0!3
                m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f
                4!2z4Kay4Ka4IOCmj-CmnuCnjeCmnOCnh-CmsuCnh-CmuCwg4KaV4KeN4Kav4Ka-4Kay4Ka
                _4Kar4KeL4Kaw4KeN4Kao4Ka_4Kav4Ka84Ka-LCDgpq7gpr7gprDgp43gppXgpr_gpqgg4Ka
                v4KeB4KaV4KeN4Kak4Kaw4Ka-4Ka34KeN4Kaf4KeN4Kaw!5e0!3m2!1sbn!2sbd!4v1532328
                708137" allowfullscreen>
            
            </iframe>
            
            
            
            
                <!-- Contact Area -->
            <div class="contact---area">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <!-- Contact Area -->
                            <div class="contact-form-area contact-page">
                                <h4 class="mb-50">{{__('Envoyer un message')}}</h4>

                                <form  method="POST" action="{{ route('send') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" name="nom" class="form-control" id="name" placeholder="{{__('Nom')}}" required>
                                            </div> 
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control" id="email" placeholder="{{__('E-mail')}}" required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input type="text" name="sujet" class="form-control" id="subject" placeholder="{{__('Sujet')}}" required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="{{__('Message')}}" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn credit-btn mt-30" type="submit">{{__('Envoyer')}}</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->
@endsection