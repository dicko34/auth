@extends('layouts.vendor')
@section('pageTitle', 'Koala Web Libraries')
@section('styleChart')
    <link href="{{ asset('assets/admin/libs/c3/c3.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    {{-- <div class="row">
        <div class="card w-100">
            <div class="body-card m-5">

                <h3 class="mb-4"><i class="fas fa-star mr-2"></i> الاعلانات المميزة </h3>
                <div class="row">

                    @for ($i = 0; $i < 8; $i++)
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="card">
                            <a href="{{ asset('assets/admin/images/martina.jpg') }}" class="gallery-popup" style="height: 230px; width:100%">
<div class="project-item">
    <div class="overlay-container">
        <img src="{{ asset('assets/admin/images/martina.jpg') }}" alt="img" class="gallery-thumb-img m-0" style="height: 230px; width:100%">
        <div class="project-item-overlay text-right">
            <h4>عقارات</h4>
            <p>
                <img src="{{ asset('assets/admin/images/martina.jpg') }}" alt="user" class="avatar-xs rounded-circle">
                <span class="ml-2">مارتينا جرجس</span>
            </p>
        </div>
    </div>
</div>
</a>
<div class="card-body">
    <h4 class="card-title">شقق</h4>
    <p class="card-text">
        {{$home->city}} {{$home->address}} للبيع في {{$home->model}} شقة
        شقة عظم للبيع في الخليل ١٣٦ م - فيصل بريك 0562700836
        وسط الخليل على بعد 570 متر من مستشفى الأهلي
    </p>
</div>
</div>
</div>
@endfor

</div>
</div>
</div>
</div> --}}
    {{-- <div class="row" id="results">
    
</div> --}}
    <div class="row">
        <div class="card w-100">
            <div class="body-card m-3">


                <h3 class="mb-4"><i class="mdi mdi-car-side mr-2"></i> سيارات </h3>
                <div class="row">
                    @foreach ($cars as $car)
                        <div class="col-6 col-xl-2 p-1">
                            <div class="">
                                <a href="{{ asset('assets/site/images/cars/' . $car->img) }}" class="gallery-popup"
                                    style="height: 160px; width:100%">
                                    <div class="project-item">
                                        <div class="overlay-container">
                                            <img src="{{ asset('assets/site/images/cars/' . $car->img) }}" alt="img"
                                                class="gallery-thumb-img m-0" style="height: 160px; width:100%">
                                            <div class="project-item-overlay text-right">
                                                <h4>سيارات</h4>
                                                <p>
                                                    <img src="{{ asset('assets/site/images/cars/' . $car->img) }}"
                                                        alt="user" class="avatar-xs rounded-circle">
                                                    <span class="ml-2">{{ $car->advertiser_name }}</span>
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </a>
                                <div class="card-body">
                                    <h4 class="card-title">سيارات</h4>
                                    <p class="card-text">
                                        سيارة {{ $car->city }} {{ $car->address }} للبيع في {{ $car->phone_number }} -
                                        {{ $car->advertiser_name }} - {{ $car->model }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="card w-100">
            <div class="body-card m-3">

                <h3 class="mb-4"><i class="mdi mdi-home mr-2"></i> شقق </h3>
                <div class="row">
                    @foreach ($homes as $home)
                        <div class="col-6 col-xl-2 p-1">
                            <div class="">
                                <a href="{{ asset('assets/site/images/homes/' . $home->img) }}" class="gallery-popup"
                                    style="height: 160px; width:100%">
                                    <div class="project-item">
                                        <div class="overlay-container">
                                            <img src="{{ asset('assets/site/images/homes/' . $home->img) }}" alt="img"
                                                class="gallery-thumb-img m-0" style="height: 160px; width:100%">
                                            <div class="project-item-overlay text-right">
                                                <h4>عقارات</h4>
                                                <p>
                                                    <img src="{{ asset('assets/site/images/homes/' . $home->img) }}"
                                                        alt="user" class="avatar-xs rounded-circle">
                                                    <span class="ml-2">{{ $home->advertiser_name }}</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <h4 class="card-title">عقارات</h4>
                                    <p class="card-text">
                                        شقة {{ $home->city }} {{ $home->address }} للبيع في {{ $home->phone_number }} -
                                        {{ $home->advertiser_name }} - {{ $home->home_type }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="card w-100">
            <div class="body-card m-3">

                <h3 class="mb-4"><i class=" mdi mdi-shopping-search mr-2"></i> محلات و مكاتب </h3>
                <div class="row">
                    @foreach ($shops as $shop)
                        <div class="col-6 col-xl-2 p-1">
                            <div class="">
                                <a href="{{ asset('assets/site/images/shops/' . $shop->img) }}" class="gallery-popup"
                                    style="height: 160px; width:100%">
                                    <div class="project-item">
                                        <div class="overlay-container">
                                            <img src="{{ asset('assets/site/images/shops/' . $shop->img) }}" alt="img"
                                                class="gallery-thumb-img m-0" style="height: 160px; width:100%">
                                            <div class="project-item-overlay text-right">
                                                <h4>محلات</h4>
                                                <p>
                                                    <img src="{{ asset('assets/site/images/shops/' . $shop->img) }}"
                                                        alt="user" class="avatar-xs rounded-circle">
                                                    <span class="ml-2">{{ $shop->advertiser_name }}</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <h4 class="card-title">محل</h4>
                                    <p class="card-text">
                                        محل {{ $shop->city }} {{ $shop->address }} للبيع في {{ $shop->phone_number }} -
                                        {{ $shop->advertiser_name }} - {{ $shop->offer }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="card w-100">
            <div class="body-card m-3">

                <h3 class="mb-4"><i class="mdi mdi-view-dashboard mr-2"></i> اراضي </h3>
                <div class="row">
                    @foreach ($lands as $land)
                        <div class="col-6 col-xl-2 p-1">
                            <div class="">
                                <a href="{{ asset('assets/site/images/lands/' . $land->img) }}" class="gallery-popup"
                                    style="height: 160px; width:100%">
                                    <div class="project-item">
                                        <div class="overlay-container">
                                            <img src="{{ asset('assets/site/images/lands/' . $land->img) }}" alt="img"
                                                class="gallery-thumb-img m-0" style="height: 160px; width:100%">

                                            <img src="{{ asset('assets/site/images/lands/' . $land->img) }}" alt="img"
                                                class="gallery-thumb-img m-0" style="height: 160px; width:100%">
                                            <div class="project-item-overlay text-right">
                                                <h4>اراضي</h4>
                                                <p>
                                                    <img src="{{ asset('assets/site/images/lands/' . $land->img) }}"
                                                        alt="user" class="avatar-xs rounded-circle">
                                                    <img src="{{ asset('assets/site/images/lands/' . $land->img) }}"
                                                        alt="user" class="avatar-xs rounded-circle">
                                                    <img src="{{ asset('assets/site/images/lands/' . $land->img) }}"
                                                        alt="user" class="avatar-xs rounded-circle">
                                                    <span class="ml-2">{{ $land->advertiser_name }}</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <h4 class="card-title">اراضي</h4>
                                    <p class="card-text">
                                        ارض {{ $land->city }} {{ $land->address }} للبيع في {{ $land->phone_number }} -
                                        {{ $land->advertiser_name }} - {{ $land->brief }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="card w-100">
            <div class="body-card m-3">

                <h3 class="mb-4"><i class=" fas fa-user-friends mr-2"></i> توظيف </h3>
                <div class="row">
                    @foreach ($jobs as $job)
                        <div class="col-6 col-xl-2 p-1">
                            <div class="">
                                <a href="{{ asset('assets/site/images/jobs/' . $job->img) }}" class="gallery-popup"
                                    style="height: 160px; width:100%">
                                    <div class="project-item">
                                        <div class="overlay-container">
                                            <img src="{{ asset('assets/site/images/jobs/' . $job->img) }}" alt="img"
                                                class="gallery-thumb-img m-0" style="height: 160px; width:100%">
                                            <div class="project-item-overlay text-right">
                                                <h4>توظيف</h4>
                                                <p>
                                                    <img src="{{ asset('assets/site/images/jobs/' . $job->img) }}"
                                                        alt="user" class="avatar-xs rounded-circle">
                                                    <span class="ml-2">{{ $job->advertiser_name }}</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <h4 class="card-title">توظيف</h4>
                                    <p class="card-text">
                                        وظيفة {{ $job->city }} {{ $job->address }} في {{ $job->phone_number }} -
                                        {{ $job->advertiser_name }} - {{ $job->specialization }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="card w-100">
            <div class="body-card m-3">

                <h3 class="mb-4"><i class="mbri-mobile2 mr-2"></i> الاجهزة الذكية </h3>
                <div class="row">

                    @foreach ($mobiles as $mobile)
                        <div class="col-6 col-xl-2 p-1">
                            <div class="">
                                <a href="{{ asset('assets/site/images/mobiles/' . $mobile->img) }}" class="gallery-popup"
                                    style="height: 160px; width:100%">
                                    <div class="project-item">
                                        <div class="overlay-container">
                                            <img src="{{ asset('assets/site/images/mobiles/' . $mobile->img) }}"
                                                alt="img" class="gallery-thumb-img m-0"
                                                style="height: 160px; width:100%">
                                            <div class="project-item-overlay text-right">
                                                <h4>الاجهزة الذكية </h4>
                                                <p>
                                                    <img src="{{ asset('assets/site/images/mobiles/' . $mobile->img) }}"
                                                        alt="user" class="avatar-xs rounded-circle">
                                                    <span class="ml-2">{{ $mobile->advertiser_name }}</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <h4 class="card-title">الاجهزة الذكية </h4>
                                    <p class="card-text">
                                        جهاز {{ $mobile->city }} {{ $mobile->address }} في {{ $mobile->phone_number }} -
                                        {{ $mobile->advertiser_name }} - {{ $mobile->model }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="card w-100">
            <div class="body-card m-3">

                <h3 class="mb-4"><i class="fab fa-telegram-plane mr-2"></i> الإعلانات العامة </h3>
                <div class="row">

                    @foreach ($generals as $general)
                        <div class="col-6 col-xl-2 p-1">
                            <div class="">
                                <a href="{{ asset('assets/site/images/generals/' . $general->img) }}"
                                    class="gallery-popup" style="height: 160px; width:100%">
                                    <div class="project-item">
                                        <div class="overlay-container">
                                            <img src="{{ asset('assets/site/images/generals/' . $general->img) }}"
                                                alt="img" class="gallery-thumb-img m-0"
                                                style="height: 160px; width:100%">
                                            <div class="project-item-overlay text-right">
                                                <h4>الإعلانات العامة</h4>
                                                <p>
                                                    <img src="{{ asset('assets/site/images/generals/' . $general->img) }}"
                                                        alt="user" class="avatar-xs rounded-circle">
                                                    <span class="ml-2">{{ $general->advertiser_name }}</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <h4 class="card-title">الإعلانات العامة</h4>
                                    <p class="card-text">
                                        إعلان {{ $general->city }} {{ $general->address }} في
                                        {{ $general->phone_number }} - {{ $general->advertiser_name }} -
                                        {{ $general->category }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    {{-- <div class="row">
        <div class="w-100">
            <div class="body-card m-5">

                <h3 class="mb-4"><i class="fas fa-star mr-2"></i> الاعلانات المميزة </h3>
                <div class="row">

                    @for ($i = 0; $i < 6; $i++)
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="card">
                            <a href="{{ asset('assets/admin/images/martina.jpg') }}" class="gallery-popup" style="height: 230px; width:100%">
                                <div class="project-item">
                                    <div class="overlay-container">
                                        <img src="{{ asset('assets/admin/images/martina.jpg') }}" alt="img" class="" style="height: 230px; width:100%">
                                        <div class="project-item-overlay text-right">
                                            <h4>عقارات</h4>
                                            <p>
                                                <img src="{{ asset('assets/admin/images/martina.jpg') }}" alt="user" class="avatar-xs rounded-circle">
                                                <span class="ml-2">مارتينا جرجس</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="card-body">
                                <h4 class="card-title">شقق</h4>
                                <p class="card-text">شقة عظم للبيع في الخليل ١٣٦ م - فيصل بريك 0562700836
                                    وسط الخليل على بعد 570 متر من مستشفى الأهلي</p>
                            </div>
                        </div> 
                    </div>
                    @endfor
                
                </div>
            </div>
        </div>
    </div> --}}


    <style>
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Tajawal';
        }

        h3 {
            font-size: xx-large !important;
            font-weight: bolder;
        }

        h4 {
            font-family: 'Tajawal';
            color: #000 !important;
            font-size: large !important;
            font-weight: bold;
        }

        .annonce-item:hover {
            box-shadow: 1px 3px 8px 0px;
        }

        .main-section {
            margin: 10px 5px 10px 5px;
            box-shadow: 0px 0px 1px 0px;
            background: #fff;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            console.log($(".search-wrap input"));
            $('.search-wrap.open input').on('keypress', function(e) {

                var input = encodeURIComponent($(this).val());

                if (input) {
                    if (e.which == 13) {
                        $.ajax({
                            type: "GET",
                            url: "/get-car-models/" + input,
                            success: function(data) {
                                //                             let imgLink = "{{ asset("+data[i]['img'].split(',')[0]+") }}";
                                //                             document.getElementById("results").innerHTML ="<div class=\"row\"> \
                                //                                 <div class=\"card w-100\"> \
                                //                                     <div class=\"body-card m-3\"> \
                                //                                         <div class=\"row\"> \
                                //                                             "for(let i = 0; i <  data.length; i++){"
                                //                     <div class=\"col-6 col-xl-2 p-1\"> \
                                //                         <div class=\"\"> \
                                //                             <a href=\""+ imgLink  + "\" class=\"gallery-popup\"
                                //                                 style=\"height: 160px; width:100%\"> \
                                //                                 <div class=\"project-item\"> \
                                //                                     <div class=\"overlay-container\"> \
                                //                                         <img src=\"\" alt=\"img\"
                                //                                             class=\"gallery-thumb-img m-0\" style=\"height: 160px; width:100%\"> \
                                //                                         <div class=\"project-item-overlay text-right\"> \
                                //                                             <h4>سيارات</h4> \
                                //                                             <p> \
                                //                                                 <img src=\"\"
                                //                                                     alt=\"user\" class=\"avatar-xs rounded-circle\"> \
                                //                                                 <span class=\"ml-2\">{{ $car->advertiser_name }}</span> \
                                //                                             </p> \
                                //                                         </div> \
                                //                                     </div> \
                                //                                 </div> \
                                //                             </a> \
                                //                             <div class=\"card-body\"> \
                                //                                 <h4 class=\"card-title\">سيارات</h4> \
                                //                                 <p class=\"card-text\"> \
                                //                                     \
                                //                                 </p> \
                                //                             </div> \
                                //                         </div> \
                                //                     </div> \
                                //                 "}" \

                                //             </div> \
                                //         </div> \
                                //     </div> \
                                // </div>";

                            }
                        });
                    }
                }
            });
        });
    </script>
@endsection
