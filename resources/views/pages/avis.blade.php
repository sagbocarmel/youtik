@extends('layouts.master')

@section('contentavis')

    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(template_credit/img/bg-img/13.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>{{__('Que disent-ils de nous?')}}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">{{__('Accueil')}}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{__('Leurs Avis')}}</li>
                            </ol>
                            </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section class="post-news-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <!-- Comment Area Start -->
                    <div class="comment_area clearfix mb-100">
                        <h4 class="mb-50">Les avis de nos clients</h4>
                        
                        <ol>
                            @forelse($posts as $post)
                            <!-- Single Comment Area -->
                            <li class="single_comment_area">
                                <!-- Comment Content -->
                                <div class="comment-content d-flex">
                                    <div class="comment-author">
                                    @if($post->user->gender =='F')
                                       <img src="template_credit/img/bg-img/femme.png" alt="author">
                                        @else
                                    <img src="template_credit/img/bg-img/homme.png" alt="author">
                                        @endif                                      
                                    </div>
                                    <!-- Comment Meta -->
                                    <div class="comment-meta">
                                        <div class="d-flex">
                                            <a href="#" class="post-author">{{ $post->user->name}} {{ $post->user->surname}}</a>
                                        </div>
                                                <p>{{ $post->body}}</p>
                                        
                                    </div>
                                </div>
                             
                            </li>
                            @empty
						 Aucun avis disponible
                       @endforelse
                       </ol>
                    
                        
                    </div>
                    <div class="post-a-comment-area mb-100 clearfix">
                         <h4 class="mb-50">{{__('Donnez le vôtre')}}</h4>

                                <!-- Reply Form -->
                            <div class="">
                                <form method="POST" action="{{ route('posts.store') }}">
                                            @csrf
                                

                                            <div class="form-group row">

                                                <div class="col-md-10">
                                                <textarea  rows="8" cols="6" class="form-control @error('bodyavis') is-invalid @enderror" name="bodyavis" required autofocus placeholder= "{{ __('Votre avis compte, donnez-le nous')}}"></textarea>

                                                    @error('bodyavis')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                            </div>


                                            <div class="form-group row mb-0">
                                                <div class="col-md-8 offset-md-4">
                                                    <button type="submit" class="btn btn-primary" style="background-color: rgba(236,91,38,1); border-color:none;">
                                                        {{ __('Envoyer') }}
                                                    </button>
                                                
                                                </div>
                                            </div>

                                </form>
                            </div>
                            </div>
                
                
                    </div>
               
                    <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                        <div class="sidebar-area mb-100">

                        
                            <!-- Single Sidebar Widget -->
                            <div class="single-widget-area cata-widget">
                                <div class="widget-heading">
                                    <div class="line"></div>
                                    <h4>Categories</h4>
                                </div>

                                <ul>
                                    <li><a href="#">Advices</a></li>
                                    <li><a href="#">Budgeting</a></li>
                                    <li><a href="#">Fast cash</a></li>
                                    <li><a href="#">Loans for students</a></li>
                                    <li><a href="#">Money hacks</a></li>
                                    <li><a href="#">Payday Loans</a></li>
                                    <li><a href="#">Quick cash</a></li>
                                    <li><a href="#">Supplement income</a></li>
                                    <li><a href="#">Сash loans</a></li>
                                </ul>
                            </div>

                            

                        </div>
                    </div>

            </div>
            </div>
        </div>
    </section>
    <!-- ##### Post Details Area End ##### -->

@endsection