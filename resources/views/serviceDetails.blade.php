<?php $lang = app()->getLocale(); ?>

@extends('mainlayout')


@section('content')




<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center">
        <h1 class="display-4 text-white animated slideInDown mb-4">{{__('trans.Service Details')}}</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white"
                        href="{{route('index',$lang)}}">{{__('trans.home')}}</a></li>
                <li class="breadcrumb-item"></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">{{__('trans.Service Details')}}</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->



<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container pt-2 pb-3">
        <div class="row">

            <div class="col-lg-8 col-12">
                <div class="">
                    <img class="img-fluid mb-4" src="{{asset('assets/img/courses-3.jpg')}}" width="100%" alt="">
                    <hr/>
                    <div class="text-justify mb-4">{{__('trans.aboutdetails1')}}</div>


                </div>
            </div>
            <div class="col-lg-4 col-12">
                <h4 class="text-uppercase text-center mb-4">{{__('trans.other articles')}}</h4>

                <div class="rent-item">
                    <h6 class="text-uppercase mb-1">| <a href="{{route('articleDetails',$lang)}}">
                             {{__('trans.article title')}} </a></h6>
                    <hr />
                </div>
                <div class="rent-item mb-1">
                    <h6 class="text-uppercase mb-1">| <a href="{{route('articleDetails',$lang)}}">
                            {{__('trans.article title')}} </a></h6>
                    <hr />
                </div>
                <div class="rent-item">
                    <h6 class="text-uppercase mb-1">| <a href="{{route('articleDetails',$lang)}}">
                            {{__('trans.article title')}} </a></h6>
                    <hr />
                </div>
                <div class="rent-item ">
                    <h6 class="text-uppercase mb-1">| <a href="{{route('articleDetails',$lang)}}">
                            {{__('trans.article title')}} </a></h6>

                    <hr />
                </div>
            </div>

        </div>

    </div>
</div>
<!-- About End -->







@endsection