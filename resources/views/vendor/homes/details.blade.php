@extends("layouts.vendor")
@section('pageTitle', 'Koala Web Libraries')
@section('styleChart')
<link href="{{ asset('assets/admin/libs/c3/c3.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=6063a4476f7ab900129cec66&product=inline-share-buttons" async="async"></script>
@endsection
@section('content')
<style>
    .nav-link {
        display: block;
        padding: 0.5rem 0.5rem;
    }

    .page-content {
        padding: 11px 7px !important;
        text-align: center;
    }

    .col-4 {
        padding: 1px !important;
        margin: 0px !important;
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(0, 0, 0, .05);
    }

    .table-bordered td,
    .table-bordered th {
        border: 1px solid #bf465c;
    }
</style>
@php
$extras = explode(',',$home->extras)
@endphp












<div class="w-100 mx-auto bg-white" style="max-width:980px;">
    <div class="w-100">
        <div class="media-header">
            <div class="w-100 mt-0 card-header text-left d-flex justify-content-between align-items-center"
                style="border: 1px solid #ccc; border-radius: 0px; border-bottom: 0px; padding: 0;">
                <div class="float-left text-dark border-right px-2 py-1" style="font-size: 14px;">
                    شارك الاعلان
                    <ul class="d-inline-flex mb-0">
                        <li class="f-right px-2 py-1" style="font-size: 14px;">
                            <a onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=https://www.wenak.ps/car/{{ $home->id }}.html&amp;src=sdkpreparse','newwindow','width=300,height=250'); return false;"
                                style="color: #888"><i class="fab fa-facebook-square" style="font-size: 18px;"></i></a>
                        </li>
                        <li class="f-right px-2 py-1" style="font-size: 14px;">
                            <a onclick="window.open('https://twitter.com/intent/tweet?text=https://www.wenak.ps/home/{{ $home->id }}.html&amp;src=sdkpreparse','newwindow','width=300,height=250'); return false;"
                                style="color: #888"><i class="fab fa-twitter" style="font-size: 18px;"></i></a>
                        </li>
                        <li class="f-right px-2 py-1" style="font-size: 14px;">
                            <a onclick="window.open('https://api.whatsapp.com/send?text=https://www.wenak.ps/home/{{ $home->id }}.html','newwindow','width=1200,height=450'); return false;"
                                style="color: #888"><i class="fab fa-whatsapp" aria-hidden="true"
                                    style="font-size: 18px;"></i></a>
                        </li>
                        <li class="f-right px-2 py-1" style="font-size: 14px;">
                            <a onclick="window.open('https://mail.google.com/mail/?view=cm&amp;fs=1&amp;tf=1&amp;to=&amp;su=وينك من زمان - سيات | SEAT ابيزا 2009&amp;body=سيات | SEAT ابيزا 2009 https://www.wenak.ps/home/{{ $home->id }}.html&amp;ui=2&amp;tf=1&amp;pli=','newwindow','width=1200,height=450'); return false;"
                                style="color: #888"><i class="fas fa-envelope" aria-hidden="true"
                                    style="font-size: 18px;"></i></a>
                        </li>
                    </ul>
                </div>

                <a href="#" class="btn btn-light btn-sm" style="line-height: 22px; font-size: 14px; margin: 5px;"
                    onclick="CopyPageUrl()"><i class="fa-paperclip fas"></i></a>
            </div>
            <div class="col-md-12 padding-0px bg-white" style="   border: 1px solid #00000026; ">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-9" style="padding: 0;height: 110px;">
                        <div class="media h-100" style="width: 100%;">
                            <div style="position: relative" class="h-100">
                                <img class="first-img img-fluid"
                                    src="{{ asset('assets/site/images/homes/' . explode(',', $home->img)[0]) }}"
                                    alt="{{ $home->company }} | {{ $home->model }}"
                                    title="{{ $home->company }} | {{ $home->model }}"
                                    style="max-width:150px;height:100%">
                            </div>
                            <div class="media-body px-3 pt-1" style="">
                                <span style="color: #ff9800;  font-size: 13px ;font-weight: 700">
                                    <i class="fas  fa-map-marker-alt" style="    font-size: small;"></i>
                                    {{ $home->city }} {{ $home->address }}
                                </span>
                                <h5 class="mt-2 title " style="    font-size: 1.1rem;font-family:Tajawal">
                                    {{ $home->company }} | {{ $home->model }}</h5>
                                <li class="old-price not-cut d-block d-lg-none">{{ $home->price }}</li>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 border-right-dd border-right ">
                        <div class="">

                            <div class="">
                                <ul>
                                    <li class="old-price not-cut d-none d-lg-block" style="font-size: 20px;">
                                        {{ $home->price }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="w-100">
        <div class="row list-product m-0px list-product-details" style="display: inline;">
            <div class="row details" style="padding: 0;margin-right: 0px;margin-left: 0px;">
                <div class="col-sm-12 col-lg-8 col-xl-9 " style="padding: 13px;">
                    <div style="margin: -13px;margin-bottom:10px;porder-raduis: 0px;border-radius: 0;">
                        <table class="m-0 table table-bordered table-sm table-success">
                            <tbody>
                                <tr>
                                    <td style="width:130px;font-size:13px" class="p-2">تاريخ انتهاء العرض :</td>
                                    <td class="p-2">2023-09-02</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="w-100 px-2 bg-primary">
                        <h5 class="text-white ml-2 font-weight-bold text-center" 
                        style="font-family:Tajawal;line-height:48px;text-align:center;">بيانات المنزل</h5>
                    </div>
                    <div class="d-block d-lg-none">
                        <table class="table ">
                            <tbody style="font-weight:500">
                                <tr>
                                    <td>حاله المنزل</td>
                                    <td>{{ $home->status }}</td>
                                </tr>
                                <tr>
                                    <td>مساحه المنزل</td>
                                    <td>{{ $home->area }}</td>
                                </tr>
                                <tr>
                                    <td>مساحه الارض</td>
                                    <td> {{ $home->land_area }}</td>
                                </tr>
                                <tr>
                                    <td>العنوان</td>
                                    <td>{{$home->city}} {{$home->address}} </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <br>
                    <div class="d-none d-lg-block">
                        <div class="row mb-20px">
                            <div class="col-xl-4 col-md-6" style="    line-height: 28px;">
                                <span><i class="fas fa-tags"></i> حاله المنزل :</span> {{ $home->status }}
                            </div>
                            <div class="col-xl-4 col-md-6" style="    line-height: 28px;">
                                <span><i class="fas fa-globe"></i> مساحه المنزل :</span> {{ $home->area }}
                            </div>
                            <div class="col-xl-4 col-md-6" style="    line-height: 28px;">
                                <span><i class="fas fa-globe"></i> مساحه الارض :</span> {{ $home->land_area }}
                            </div>
                            <div class="col-xl-12 col-md-12" style="line-height: 28px;">
                                <span><i class="fas fa-compass"></i>العنوان :</span> {{$home->city}} {{$home->address}}
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="w-100 px-2 bg-primary">
                        <h5 class="text-white ml-2 font-weight-bold text-center"style="font-family:Tajawal;line-height:48px;text-align:center;">وصف المنزل</h5>
                    </div>
                    
                    <br>
                    <div style="    padding: 20px;
                                                 all: none;
                                                 animation: none;
                                                 animation-delay: 0;
                                                 animation-direction: normal;
                                                 animation-duration: 0;
                                                 animation-fill-mode: none;
                                                 animation-iteration-count: 1;
                                                 animation-name: none;
                                                 animation-play-state: running;
                                                 animation-timing-function: ease;
                                                 backface-visibility: visible;
                                                 background: 0;
                                                 background-attachment: scroll;
                                                 background-clip: border-box;
                                                 background-color: transparent;
                                                 background-image: none;
                                                 background-origin: padding-box;
                                                 background-position: 0 0;
                                                 background-position-x: 0;
                                                 background-position-y: 0;
                                                 background-repeat: repeat;
                                                 background-size: auto auto;
                                                 border: 0;
                                                 border-style: none;
                                                 border-width: medium;
                                                 border-color: inherit;
                                                 border-bottom: 0;
                                                 border-bottom-color: inherit;
                                                 border-bottom-left-radius: 0;
                                                 border-bottom-right-radius: 0;
                                                 border-bottom-style: none;
                                                 border-bottom-width: medium;
                                                 border-collapse: separate;
                                                 border-image: none;
                                                 border-left: 0;
                                                 border-left-color: inherit;
                                                 border-left-style: none;
                                                 border-left-width: medium;
                                                 border-radius: 0;
                                                 border-right: 0;
                                                 border-right-color: inherit;
                                                 border-right-style: none;
                                                 border-right-width: medium;
                                                 border-spacing: 0;
                                                 border-top: 0;
                                                 border-top-color: inherit;
                                                 border-top-left-radius: 0;
                                                 border-top-right-radius: 0;
                                                 border-top-style: none;
                                                 border-top-width: medium;
                                                 bottom: auto;
                                                 box-shadow: none;
                                                 box-sizing: content-box;
                                                 caption-side: top;
                                                 clear: none;
                                                 clip: auto;
                                                 color: inherit;
                                                 columns: auto;
                                                 column-count: auto;
                                                 column-fill: balance;
                                                 column-gap: normal;
                                                 column-rule: medium none currentColor;
                                                 column-rule-color: currentColor;
                                                 column-rule-style: none;
                                                 column-rule-width: none;
                                                 column-span: 1;
                                                 column-width: auto;
                                                 content: normal;
                                                 counter-increment: none;
                                                 counter-reset: none;
                                                 cursor: auto;

                                                 display: inline;
                                                 empty-cells: show;
                                                 float: none;
                                                 font: normal;
                                                 font-family: inherit;
                                                 font-size: medium;
                                                 font-style: normal;
                                                 font-variant: normal;
                                                 font-weight: normal;
                                                 height: auto;
                                                 hyphens: none;
                                                 left: auto;
                                                 letter-spacing: normal;
                                                 line-height: normal;
                                                 list-style: none;
                                                 list-style-image: none;
                                                 list-style-position: outside;
                                                 list-style-type: disc;
                                                 margin: 0;
                                                 margin-bottom: 0;
                                                 margin-left: 0;
                                                 margin-right: 0;
                                                 margin-top: 0;
                                                 max-height: none;
                                                 max-width: none;
                                                 min-height: 0;
                                                 min-width: 0;
                                                 opacity: 1;
                                                 orphans: 0;
                                                 outline: 0;
                                                 outline-color: invert;
                                                 outline-style: none;
                                                 outline-width: medium;
                                                 overflow: visible;
                                                 overflow-x: visible;
                                                 overflow-y: visible;
                                                 padding: 0;
                                                 padding-bottom: 0;
                                                 padding-left: 0;
                                                 padding-right: 0;
                                                 padding-top: 0;
                                                 page-break-after: auto;
                                                 page-break-before: auto;
                                                 page-break-inside: auto;
                                                 perspective: none;
                                                 perspective-origin: 50% 50%;
                                                 position: static;
                                                 quotes: '\201C' '\201D' '\2018' '\2019';
                                                 right: auto;
                                                 tab-size: 8;
                                                 table-layout: auto;
                                                 text-align: inherit;
                                                 text-align-last: auto;
                                                 text-decoration: none;
                                                 text-decoration-color: inherit;
                                                 text-decoration-line: none;
                                                 text-decoration-style: solid;
                                                 text-indent: 0;
                                                 text-shadow: none;
                                                 text-transform: none;
                                                 top: auto;
                                                 transform: none;
                                                 transform-style: flat;
                                                 transition: none;
                                                 transition-delay: 0s;
                                                 transition-duration: 0s;
                                                 transition-property: none;
                                                 transition-timing-function: ease;
                                                 unicode-bidi: normal;
                                                 vertical-align: baseline;
                                                 visibility: visible;
                                                 white-space: normal;
                                                 widows: 0;
                                                 width: auto;
                                                 word-spacing: normal;
                                                 z-index: auto;
                                                 all: initial;
                                                 all: unset;
                                                 direction: auto;
                                             ">
                        <div class="d-none d-lg-block">
                            <ul>
                                <li style="line-height: 1.3rem !important;"><pre>{{$home->description}}</pre></li>
                                @foreach($extras as $ext )
                                    <li style="line-height: 1.3rem !important;">{{$ext}}</li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="d-block d-lg-none">
                            <table class="table">
                                <tbody style="font-weight:500">
                                    <tr>
                                        <td>
                                            <li style="display: list-item !important;">لمن يبحث عن الهدوء والتميز </li>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <li style="display: list-item !important;">منزل عظم مستقل للبيع والتواصل مع
                                                المالك مباشرة بدون وسطاء </li>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <li style="display: list-item !important;">الموقع .. جنوب بيت لحم </li>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <li style="display: list-item !important;">تبعد عن حاجز مزموريا 15 دقيقة
                                            </li>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <li style="display: list-item !important;">المواصفات : </li>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <li style="display: list-item !important;"> مساحة الأرض 550 متر </li>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <li style="display: list-item !important;">مساحة البناء الكلي 250 متر </li>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <li style="display: list-item !important;"> الطابق الاول 135 متر </li>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <li style="display: list-item !important;"> الطابق الثاني 120 متر </li>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <li style="display: list-item !important;"> يوجد حديقة منفصلة عن المنزل
                                            </li>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <li style="display: list-item !important;">منطقة B طابو سلطة صادر </li>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <li style="display: list-item !important;">على قمة جبل . وعلى شارع مباشرة .
                                                إطلالة مميزة جدا وهادئة </li>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <li style="display: list-item !important;"> جميع الخدمات .. كهرباء ... ماء
                                                .. شارع </li>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <li style="display: list-item !important;"> بإشراف هندسي متكامل مع تصوير
                                                جميع مراحل البناء من البداية وحتى النهاية </li>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <li style="display: list-item !important;">للمعنيين فقط الاتصال على </li>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <li style="display: list-item !important;">0568233968 </li>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <li style="display: list-item !important;">0597949736 الواتس</li>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="w-100 px-2 bg-primary">
                        <h5 class="text-white ml-2 font-weight-bold text-center" 
                        style="font-family:Tajawal;line-height:48px;text-align:center;">ماذا يوجد في المنزل</h5>
                    </div>
                    <br>
                    <div class="d-block d-lg-none">
                        <table class="table">
                            <tbody style="font-weight:500">
                                <tr>
                                    <td> عدد الغرف</td>
                                    <td>{{$home->rooms_number}}</td>
                                </tr>
                                <tr>
                                    <td> عدد المطابخ</td>
                                    <td>{{$home->kitchen_number}}</td>
                                </tr>
                                <tr>
                                    <td> عدد البلكونات</td>
                                    <td>{{$home->balcony ?? 0}}</td>
                                </tr>
                                <tr>
                                    <td> عدد الحمامات</td>
                                    <td>{{$home->bathrooms_number}}</td>
                                </tr>
                                <tr>
                                    <td> عدد الصالة</td>
                                    <td>{{$home->loung}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="d-none d-lg-block">
                        <div class="row mb-20px">
                            <div class="col-xl-4 col-md-6" style="    line-height: 28px;">
                                <span><i class="fas fa-home"></i> عدد الغرف :</span>{{$home->rooms_number}}
                            </div>
                            <div class="col-xl-4 col-md-6" style="line-height: 28px;">
                                <span>عدد المطابخ :</span> {{$home->kitchen_number}}
                            </div>
                            <div class="col-xl-4 col-md-6" style="line-height: 28px;">
                                <span>عدد البلكونات :</span> {{$home->balcony ?? 0}}
                            </div>
                            <div class="col-xl-4 col-md-6" style="line-height: 28px;">
                                <span>عدد الحمامات :</span> {{$home->bathrooms_number}}
                            </div>
                            <div class="col-xl-4 col-md-6" style="line-height: 28px;">
                                <span>عدد الصالة :</span> {{$home->loung}} 
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="d-none d-lg-block">
                        <div class="row mb-20px" style="line-height: 28px;">
                            <div class="col-xl-6 col-md-6">
                                <span><i class="fas fa-map-marker"></i> العنوان :</span> رام الله والبيرة
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class=" border-md-top border-right d-block d-lg-none d-xl-none pt-2">
                        <div class="row " style="min-height: 83px;margin-right: 0px;margin-left: 0px;">
                            <div class="col text-center">
                                <div class="w-100 px-2 bg-primary">
                                <h5 class="text-white ml-2 font-weight-bold text-center"
                                    style="font-family:Tajawal;line-height:48px;text-align:center;">معلومات المعلن</h5>
                            </div>
                                
                                <table class="table table-sm">
                                    <tbody>
                                        <tr>
                                            <td>اسم المعلن</td>
                                            <td>محمد يوسف</td>
                                        </tr>
                                        <tr>
                                            <td>رقم الموبايل</td>
                                            <td><a class="text-dark" href="tel:0569838215"> 0569838215
                                                </a></td>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer w-100 mt-3 d-block d-lg-none">
                                <a href="javascript:ReportModal({{ $home->id }});">هل وجدت خطأ في الاعلان ؟</a>
                                <p>رقم الاعلان : {{ $home->id }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xl-3 border-right border-md-top d-none d-lg-block d-xl-block"
                    style="min-height: 230px;background-color: #fff;">
                    <div class="row text-center">
                        <div class="col-md-12 mt-5">
                            <div style="
                                                        background: #ece6e6;
                                                        border-radius: 50%;
                                                        height: 45px;
                                                        width: 45px;
                                                        line-height: 45px;
                                                        margin: auto;

                                                    "><i class="fas fa-user"></i></div>
                        </div>
                    </div>
                    <div class="col-md-12 text-center mt-1">
                        <b style="color: #ff9800 ;font-size: 20px;" class="text-dark">{{ $home->advertiser_name }}</b>
                    </div>
                    <div class="col-md-12 text-center mt-3">
                        <table class="table table-striped table-sm">
                            <tbody style="font-weight:500">
                                <tr>
                                    <td colspan="100%" style="font-size: 20px;">رقم الموبايل</td>
                                </tr>
                                <tr>
                                    <td><a dir="ltr" href="tel:{{ $home->mobile }}" style="font-size: 20px;"> {{ $home->mobile }} </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer mt-3 " style="position: absolute;
                                                bottom: 0;
                                                width: 100%;
                                                font-size: 11px;
                                                right: 0;">
                        <a href="javascript:ReportModal({{ $home->id }});">هل وجدت خطأ في الاعلان ؟</a>
                        <p>رقم الاعلان : {{ $home->id }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-100 px-1">
        <h5>اعلانات مشابهة</h5>
        <div class="row">
            @foreach ($similar as $home_similar)

                    <div class="col-6 col-xl-2 p-1 ">
                        
                         <div
                            class="annonce-item"style="border: 1px solid;border-color: #0000002b;border-radius: 5px;">
                            <a href="{{ asset('assets/site/images/homes/' . explode(',', $home_similar['img'])[0]) }}"
                                class="gallery-popup" style="height: 160px; width:100%">
                                <div class="project-item">
                                    <div class="overlay-container">
                                        <img src="{{ asset('assets/site/images/homes/' . explode(',', $home_similar['img'])[0]) }}"
                                            alt="img" style="height: 160px; width:100%">
                                        <div class="project-item-overlay text-right">
                                            <h2>شقق</h2>
                                            <p>
                                                <img src="{{ asset('assets/site/images/homes/' . explode(',', $home_similar['img'])[0]) }}"
                                                    alt="user" class="avatar-xs rounded-circle">
                                                <span class="ml-2">{{ $home_similar['advertiser_name'] }}</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="card-body">
                                <h4 class="card-title">شقق</h4>
                            </div>
                        </div> 
                    </div>
            @endforeach
        </div>
    </div>
</div>
<style>
ul , table li{
    list-style-type: none !important;
}

body,
h5,
h2,
h4,
p {
    font-family: 'Tajawal' !important;
}


</style>
<script>
function CopyPageUrl() {
    var pageUrl = window.location.href;
    var tempInput = document.createElement("input");
    document.body.appendChild(tempInput);
    tempInput.value = pageUrl;
    tempInput.select();
    document.execCommand("copy");
    document.body.removeChild(tempInput);
    alert("تم نسخ الرابط");
}
</script>
@endsection