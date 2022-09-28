<?php $lang = app()->getLocale(); ?>

@extends('mainlayout')


@section('content')

@include('slider')


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100 pt-5 pe-5" src="{{asset('assets/img/about-1.jpg')}}"
                        alt="" style="object-fit: cover;">
                    <img class="position-absolute top-0 end-0 bg-white ps-2 pb-2"
                        src="{{asset('assets/img/about-2.jpg')}}" alt="" style="width: 200px; height: 200px;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">
                        {{__('trans.abouttitle')}}</div>
                    <h1 class="display-6 mb-5">{{__('trans.abouttitle2')}}</h1>
                    <div class="bg-light border-bottom border-5 border-primary rounded p-4 mb-4">
                        <div class="text-dark mb-2" style="text-align:justify">{{__('trans.aboutdetails1')}}</div>

                    </div>

                    <a class="btn btn-primary py-2 px-3 me-3" href="{{route('about',$lang)}}">
                        {{__('trans.Learn More')}}
                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                    <a class="btn btn-outline-primary py-2 px-3" href="{{route('contact',$lang)}}">
                        {{__('trans.Contact Us')}}
                        <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Programs Start -->
<div class="container-xxl bg-light my-5 py-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">
                {{__('trans.What We Offer')}}</div>
            <h1 class="display-6 mb-5">{{__('trans.Our programs')}}</h1>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div
                    class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                            <small>{{__('trans.Program Category')}}</small>
                        </div>
                        <h5 class="mb-3">{{__('trans.service title')}}</h5>

                    </div>
                    <div class="position-relative mt-auto">
                        <img class="img-fluid" src="{{asset('assets/img/courses-1.jpg')}}" alt="">
                        <div class="causes-overlay">
                            <a class="btn btn-outline-primary" href="{{route('programDetails',$lang)}}">
                                {{__('trans.View')}}
                                <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div
                    class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                            <small>{{__('trans.Program Category')}}</small>
                        </div>
                        <h5 class="mb-3">{{__('trans.service title')}}</h5>

                    </div>
                    <div class="position-relative mt-auto">
                        <img class="img-fluid" src="{{asset('assets/img/courses-2.jpg')}}" alt="">
                        <div class="causes-overlay">
                            <a class="btn btn-outline-primary" href="{{route('programDetails',$lang)}}">
                                {{__('trans.View')}}

                                <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div
                    class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                            <small>{{__('trans.Program Category')}}</small>
                        </div>
                        <h5 class="mb-3">{{__('trans.service title')}}</h5>

                    </div>
                    <div class="position-relative mt-auto">
                        <img class="img-fluid" src="{{asset('assets/img/courses-3.jpg')}}" alt="">
                        <div class="causes-overlay">
                            <a class="btn btn-outline-primary" href="{{route('programDetails',$lang)}}">
                                {{__('trans.View')}}

                                <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="text-center mx-auto mt-4 mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">

            <a class="btn btn-outline-primary px-3" href="{{route('programs',$lang)}}">
                {{__('trans.View More Services')}}
                <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                    <i class="fa fa-arrow-right"></i>
                </div>
            </a>
        </div>



    </div>
</div>
<!-- Programs End -->


<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">
                {{__('trans.Latest Portfolio')}}</div>
            <h1 class="display-6 mb-5">{{__('trans.PortfolioSub')}}</h1>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                    <img class="img-fluid mb-4" src="{{asset('assets/img/icon-1.png')}}" alt="">
                    <h4 class="mb-3">{{__('trans.prev work title')}}</h4>
                    <!-- <p class="mb-4">Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed vero
                        dolor duo.</p> -->
                    <a class="btn btn-outline-primary px-3" href="{{route('serviceDetails',$lang)}}">
                        {{__('trans.View')}}
                        <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                            >
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                    <img class="img-fluid mb-4" src="{{asset('assets/img/icon-2.png')}}" alt="">
                    <h4 class="mb-3">{{__('trans.prev work title')}}</h4>

                    <a class="btn btn-outline-primary px-3" href="{{route('serviceDetails',$lang)}}">
                        {{__('trans.View')}}
                        <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                            >
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                    <img class="img-fluid mb-4" src="{{asset('assets/img/icon-3.png')}}" alt="">
                    <h4 class="mb-3">{{__('trans.prev work title')}}</h4>

                    <a class="btn btn-outline-primary px-3" href="{{route('serviceDetails',$lang)}}">
                        {{__('trans.View')}}
                        <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                            >
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->


<!-- Video Start -->
<div class="container-fluid donate my-5 py-5" data-parallax="scroll"
    data-image-src="{{asset('assets/img/carousel-2.jpg')}}">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <iframe width="100%" height="350px" src="https://www.youtube.com/embed/fjrprh9SvKw"
                    title="Watch To Donate Yemen - Donate with no Money Yemen #SafeYemen" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">

                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">
                    {{__('trans.Videos')}}</div>
                <h1 class="display-6 text-white mb-5">{{__('trans.video title')}}</h1>
                <p class="text-white mb-0">{{__('trans.video description')}}</p>

            </div>
        </div>
    </div>
</div>
<!-- Video End -->

<!-- Articles Start -->
<div class="container-xxl bg-light my-5 py-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">{{__('trans.Our Blog')}}
            </div>
            <h1 class="display-6 mb-5">{{__('trans.Our Blog Sub')}}</h1>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div
                    class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                            <small>10 May 2022</small>
                        </div>
                        <h5 class="mb-3">{{__('trans.article title')}}</h5>
                        <p>{{__('trans.subarticle')}}</p>

                    </div>
                    <div class="position-relative mt-auto">
                        <img class="img-fluid" src="{{asset('assets/img/courses-1.jpg')}}" alt="">
                        <div class="causes-overlay">
                            <a class="btn btn-outline-primary" href="{{route('articleDetails',$lang)}}">
                                {{__('trans.View')}}
                                <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div
                    class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                            <small>10 May 2022</small>
                        </div>
                        <h5 class="mb-3">{{__('trans.article title')}}</h5>
                        <p>{{__('trans.subarticle')}}</p>

                    </div>
                    <div class="position-relative mt-auto">
                        <img class="img-fluid" src="{{asset('assets/img/courses-2.jpg')}}" alt="">
                        <div class="causes-overlay">
                            <a class="btn btn-outline-primary" href="{{route('articleDetails',$lang)}}">
                                {{__('trans.View')}}
                                <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div
                    class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                            <small>12 May 2022</small>
                        </div>
                        <h5 class="mb-3">{{__('trans.article title')}}</h5>
                        <p>{{__('trans.subarticle')}}</p>

                    </div>
                    <div class="position-relative mt-auto">
                        <img class="img-fluid" src="{{asset('assets/img/courses-3.jpg')}}" alt="">
                        <div class="causes-overlay">
                            <a class="btn btn-outline-primary" href="{{route('articleDetails',$lang)}}">
                                {{__('trans.View')}}
                                <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="text-center mx-auto mt-4 mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">

            <a class="btn btn-outline-primary px-3" href="{{route('blog',$lang)}}">
                {{__('trans.View More')}}
                <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                    <i class="fa fa-arrow-right"></i>
                </div>
            </a>
        </div>



    </div>
</div>
<!-- Articles End -->



<!-- Success Stories Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">
                {{ __('trans.Success Stories')}}</div>
            <h1 class="display-6 mb-5">{{__('trans.Lets Meet With Our Ordinary Soldiers')}}</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item position-relative rounded overflow-hidden">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="{{asset('assets/img/team-1.jpg')}}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-4">
                        <h5><a href="{{route('storyDetails',$lang)}}">{{__('trans.article title')}}</a></h5>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item position-relative rounded overflow-hidden">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="{{asset('assets/img/team-2.jpg')}}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-4">
                        <h5><a href="{{route('storyDetails',$lang)}}">{{__('trans.article title')}}</a></h5>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item position-relative rounded overflow-hidden">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="{{asset('assets/img/team-3.jpg')}}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-4">
                        <h5><a href="{{route('storyDetails',$lang)}}">{{__('trans.article title')}}</a></h5>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item position-relative rounded overflow-hidden">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="{{asset('assets/img/team-4.jpg')}}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-4">
                        <h5><a href="{{route('storyDetails',$lang)}}">{{__('trans.article title')}}</a></h5>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Success Stories End -->





<!-- Our Partners Start -->

<div class="container" style="margin-bottom:80px;">
    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
        <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-2  mt-4">
            {{ __('trans.Our Partners')}}</div>
        <!-- <h1 class="display-6 mb-5">{{__('trans.Our Partners Sub')}}</h1> -->
    </div>
    <div class="row">
        <div class="col-md-12">
            <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
                <!-- Carousel indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for carousel items -->
                <div class="carousel-inner">
                    <div class="item carousel-item active">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="thumb-wrapper">
                                    <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                    <div class="img-box">
                                        <img src="{{asset('assets/img/team-1.jpg')}}" class="img-fluid" alt="">
                                    </div>
                                    <!-- <div class="thumb-content">
                                        <h4>Apple iPad</h4>
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumb-wrapper">
                                    <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                    <div class="img-box">
                                        <img src="{{asset('assets/img/team-1.jpg')}}" class="img-fluid" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <!-- <h4>Apple iPad</h4>									 -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumb-wrapper">
                                    <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                    <div class="img-box">
                                        <img src="{{asset('assets/img/team-1.jpg')}}" class="img-fluid" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <!-- <h4>Apple iPad</h4>									 -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumb-wrapper">
                                    <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                    <div class="img-box">
                                        <img src="{{asset('assets/img/team-1.jpg')}}" class="img-fluid" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <!-- <h4>Apple iPad</h4>									 -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item carousel-item">
                        <div class="row">

                            <div class="col-sm-3">
                                <div class="thumb-wrapper">
                                    <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                    <div class="img-box">
                                        <img src="{{asset('assets/img/team-1.jpg')}}" class="img-fluid" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <!-- <h4>Apple iPad</h4>									 -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumb-wrapper">
                                    <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                    <div class="img-box">
                                        <img src="{{asset('assets/img/team-1.jpg')}}" class="img-fluid" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <!-- <h4>Apple iPad</h4>									 -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumb-wrapper">
                                    <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                    <div class="img-box">
                                        <img src="{{asset('assets/img/team-1.jpg')}}" class="img-fluid" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <!-- <h4>Apple iPad</h4>									 -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumb-wrapper">
                                    <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                    <div class="img-box">
                                        <img src="{{asset('assets/img/team-1.jpg')}}" class="img-fluid" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <!-- <h4>Apple iPad</h4>									 -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item carousel-item">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="thumb-wrapper">
                                    <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                    <div class="img-box">
                                        <img src="{{asset('assets/img/team-1.jpg')}}" class="img-fluid" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <!-- <h4>Apple iPad</h4>									 -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumb-wrapper">
                                    <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                    <div class="img-box">
                                        <img src="{{asset('assets/img/team-1.jpg')}}" class="img-fluid" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <!-- <h4>Apple iPad</h4>									 -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumb-wrapper">
                                    <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                    <div class="img-box">
                                        <img src="{{asset('assets/img/team-1.jpg')}}" class="img-fluid" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <!-- <h4>Apple iPad</h4>									 -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumb-wrapper">
                                    <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                    <div class="img-box">
                                        <img src="{{asset('assets/img/team-1.jpg')}}" class="img-fluid" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <!-- <h4>Apple iPad</h4>									 -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Carousel controls -->
                <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Our Partners End -->





@endsection