<?php $lang = app()->getLocale(); ?>


<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar text-white-50 row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <small><i class="fa fa-map-marker-alt me-2"></i>{{__('trans.location')}}</small>
                <small class="ms-3"><i class="fa fa-envelope me-2"></i>info@example.com</small>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small>Follow us:</small>
                <a class="text-white-50 ms-3" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="text-white-50 ms-3" href=""><i class="fab fa-twitter"></i></a>
                <a class="text-white-50 ms-3" href=""><i class="fab fa-linkedin-in"></i></a>
                <a class="text-white-50 ms-3" href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-dark py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="{{route('index',$lang)}}" class="navbar-brand ms-4 ms-lg-0">
                <h1 class="fw-bold text-primary m-0">Org<span class="text-white">Profile</span></h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="{{route('index',$lang)}}" class="nav-item nav-link active">{{__('trans.home')}}</a>
                    <a href="{{route('about',$lang)}}" class="nav-item nav-link">{{__('trans.About')}}</a>
                    <a href="{{route('programs',$lang)}}" class="nav-item nav-link">{{__('trans.Programs')}}</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{__('trans.Media')}}</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{route('blog',$lang)}}" class="dropdown-item">{{__('trans.Blog')}}</a>
                            <a href="{{route('ourImages',$lang)}}" class="dropdown-item">{{__('trans.Galleries')}}</a>
                            <a href="{{route('ourVideos',$lang)}}" class="dropdown-item">{{__('trans.Videos')}}</a>
                        </div>
                    </div>
                    <a href="{{route('news',$lang)}}" class="nav-item nav-link">{{__('trans.News')}}</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{__('trans.Success Stories')}}</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{route('successStories',$lang)}}" class="dropdown-item">{{__('trans.Success Stories')}}</a>
                            <a href="{{route('ourVideos',$lang)}}" class="dropdown-item">{{__('trans.Videos')}}</a>
                        </div>
                    </div>
                    <a href="{{route('annualReports',$lang)}}" class="nav-item nav-link">{{__('trans.Annual Reports')}}</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{__('trans.Contact')}}</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{route('contact',$lang)}}" class="dropdown-item">{{__('trans.Contact Us')}}</a>
                            <a href="{{route('complaints',$lang)}}" class="dropdown-item">{{__('trans.Complaints')}}</a>
                            <a href="{{route('contributions',$lang)}}" class="dropdown-item">{{__('trans.Contribute')}}</a>
                        </div>
                    </div>
                </div>
                <div class="d-none d-lg-flex ms-2">
                    @if ($lang=='en')
                    <a class="btn btn-outline-primary py-2 px-3" href="/ar">
                        العربية                        
                    </a>
                    @else
                    <a class="btn btn-outline-primary py-2 px-3" href="/en">
                        English                        
                    </a>
                    @endif
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->
