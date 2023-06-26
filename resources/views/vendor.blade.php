<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>smle </title>

    <link rel="stylesheet" type="text/css" href="{{ asset("assets/site/css/bootstrap.min.css") }}">

    <link rel="stylesheet" type="text/css" href="{{ asset("assets/site/fonts/line-icons.css") }}">

    <link rel="stylesheet" type="text/css" href="{{ asset("assets/site/css/slicknav.css") }}">

    <link rel="stylesheet" type="text/css" href="{{ asset("assets/site/css/nivo-lightbox.css") }}">

    <link rel="stylesheet" type="text/css" href="{{ asset("assets/site/css/color-switcher.css") }}">

    <link rel="stylesheet" type="text/css" href="{{ asset("assets/site/css/animate.css") }}">

    <link rel="stylesheet" type="text/css" href="{{ asset("assets/site/css/main.css") }}">

    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/responsive.css") }}">
</head>

<body>

    <header id="header-wrap">

        <nav class="navbar navbar-expand-lg bg-dark fixed-top scrolling-navbar text-right">
            <div class="container">
                <div class="theme-header clearfix">

                    <a href="index.html" class="navbar-brand"><img src="assets/img/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="lni-menu"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mr-auto w-100 justify-content-end" >
                            <li class="nav-item">
                                <form action="{{route('logout')}}" method="post">
                                    @csrf
                                    <input type="submit" value="تسجيل خروج" class="btn nav-link" style="color: #ff4b68 !important">
                                </form>
                                {{-- <a class="nav-link" style="color: #ff4b68 !important">
                                    تسجيل خروج
                                </a>  --}}
                            </li> 
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('vendor.dashboard') }}" style="color: #ff4b68 !important">
                                    الرئيسة
                                </a>
                            </li>
                             
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mobile-menu" data-logo="assets/img/logo.png"></div>
        </nav>

    </header>


    <section id="team" class="section-padding text-center mt-5" dir="rtl">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-header text-center">
                        <h2 class="section-title wow fadeInUp" data-wow-delay="0.2s">الاقسام</h2>
                    </div>
                </div>
            </div>
            
                
            
            <div class="row justify-content-bt">
                @foreach ($categories as $category)
                    <div class="col-lg-3 col-md-6 col-xs-12">
                        <div class="team-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="team-img">
                                <img class="img-fluid" src="{{asset('assets/images/category/'.$category->img)}}" style="height: 250px; width:100%" alt="">
                                <div class="team-overlay">
                                    
                                </div>
                            </div>
                            <div class="info-text">
                                <h3><a href="{{ route('vendor.gallery',['id'=>$category->id]) }}">{{ $category->name }}</a></h3>
                            </div>
                        </div>

                    </div> 
                @endforeach
            </div>
    </section>


    
    <script src="{{ asset("assets/site/js/jquery-min.js") }}"></script>
    <script src="{{ asset("assets/site/js/popper.min.js") }}"></script>
    <script src="{{ asset("assets/site/js/bootstrap.min.js") }}"></script>
    {{-- <script src="{{ asset("assets/site/js/color-switcher.js") }}"></script> --}}
    <script src="{{ asset("assets/site/js/jquery.countdown.min.js") }}"></script>
    <script src="{{ asset("assets/site/js/waypoints.min.js") }}"></script>
    <script src="{{ asset("assets/site/js/jquery.counterup.min.js") }}"></script>
    <script src="{{ asset("assets/site/js/jquery.nav.js") }}"></script>
    <script src="{{ asset("assets/site/js/jquery.easing.min.js") }}"></script>
    <script src="{{ asset("assets/site/js/wow.js") }}"></script>
    <script src="{{ asset("assets/site/js/jquery.slicknav.js") }}"></script>
    <script src="{{ asset("assets/site/js/nivo-lightbox.js") }}"></script>
    <script src="{{ asset("assets/site/js/main.js") }}"></script>
    <script src="{{ asset("assets/site/js/form-validator.min.js") }}"></script>
    <script src="{{ asset("assets/site/js/contact-form-script.min.js") }}"></script>
</body>

</html>
