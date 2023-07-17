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
$home = $homes[request()->home -1];
$extras = explode(',',$home->extras)
@endphp
<div class="row">
    <div class="col-lg-9 col-12">
        <div class="row text-center w-100">
            <div class=" w-100">
                <div class="body-card">
                    <div class="c0l-12">
                        <div class="row">
                            <div class=" col-12">
                                <div class="mt-5 m-1">
                                    <div class="mb-3">
                                        <h2>
                                            شقة للبيع
                                        </h2>
                                        <h5 class="smallColor mt-3">
                                            {{$home->price}} شيكل
                                        </h5>
                                        <h5 class="maincolor">{{$home->address}} - {{$home->street}} - {{$home->gov}} </h5>
                                    </div>
                                    <div>
                                        <div class="apsc-icons-wrapper clearfix apsc-theme-4">

                                            <div class="sharethis-inline-share-buttons"></div>

                                        </div>
                                    </div>

                                    <div class="row m-2">
                                        @foreach(explode(',',$home->img) as $img)
                                        <div class="col-4">
                                            <a href="{{ asset('assets/site/images/homes/'.$img) }}" class="gallery-popup" style="height: 100px; width:100%">
                                                <div class="project-item">
                                                    <div class="overlay-container">
                                                        <img src="{{ asset('assets/site/images/homes/'.$img) }}" alt="img" class="gallery-thumb-img m-0" style="height: 100px; width:100%">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row m-0 ">
            <table class="table table-striped  table-bordered mb-0 text-center h5">
                <thead>
                    <tr>
                        <th class="btn-primary">الصفة</th>
                        <th class="btn-primary"> الوصف</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="">العرض</td>
                        <td class=""> {{$home->show}} </td>
                    </tr>
                    <tr>
                        <td class="">نوع المنزل</td>
                        <td class=""> {{$home->home_type}} </td>
                    </tr>
                    <tr>
                        <td class="">السعر</td>
                        <td class=""> {{$home->price}}</td>
                    </tr>
                    <tr>
                        <td class="">المساحة</td>
                        <td class=""> {{$home->area}}</td>
                    </tr>
                    <tr>
                        <td class="">مساحة الارض</td>
                        <td class=""> {{$home->land_area}}</td>
                    </tr>
                    <tr>
                        <td class="">عدد الغرف</td>
                        <td class=""> {{$home->rooms_number}}</td>
                    </tr>
                    <tr>
                        <td class="">الحالة</td>
                        <td class=""> {{$home->status}} </td>
                    </tr>
                    <tr>
                    <tr>
                        <td class="">الصالة</td>
                        <td class=""> {{$home->loung}}</td>
                    </tr>
                    <tr>
                        <td class="">عدد البرندات</td>
                        <td class=""> 6 </td>
                    </tr>
                    <tr>
                        <td class="">عدد الحمامات</td>
                        <td class=""> {{$home->bathrooms_number}} </td>
                    </tr>
                    <tr>
                        <td class="">عدد المطابخ</td>
                        <td class=""> {{$home->kitchen_number}} </td>
                    </tr>
                    <tr>
                        <td class=""> يوجد موقف سيارات خاص </td>
                        <td class="">
                            @foreach($extras as $ext)
                            @if($ext == 'يوجد موقف سيارات خاص')
                            نعم
                            @break;
                            @else
                            لا
                            @endif

                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <td class="">إضافات</td>
                        <td class="">
                            @if(count($extras) > 0)
                            <ul class="list-unstyled m-3 text-left">
                                <li>
                                    @foreach($extras as $ext)
                                    <ul>
                                        <li class="m-2">{{$ext}}</li>
                                    </ul>
                                    @endforeach
                                </li>
                            </ul>
                            @endif
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
        <div class="row m-0 ">
            <table class="table table-striped  table-bordered mb-0 text-center h5">
                <thead>
                    <tr>
                        <th class="btn-primary" colspan="2">معلومات المعلن</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="">إسم المعلن</td>
                        <td class=""> {{$home->advertiser_name}}</td>
                    </tr>
                    <tr>
                        <td class="">العنوان</td>
                        <td class="">{{$home->address}}</td>
                    </tr>
                    <tr>
                        <td class="">رقم الهاتف</td>
                        <td class="">{{$home->phone_number}}</td>
                    </tr>
                    <tr>
                        <td class="">موبايل</td>
                        <td class="">{{$home->mobile}}</td>
                    </tr>
                    <tr>
                        <td class="">البريد الالكتروني</td>
                        <td class=""> {{$home->email}}</td>
                    </tr>
                    <tr>
                        <td class=""> تاريخ نشر الاعلان</td>
                        <td class=""> {{$home->created_at}}</td>
                    </tr>
                    <tr>
                        <td class="">تاريخ انتهاء الاعلان</td>
                        <td class=""> 11-12-2024 </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-00 col-lg-3 mt-5">
        <div class="row m-1">
            <div class="card w-100">
                <div class="body-card m-3">
                    <div class="row">
                        <h3 class="mb-4 col-6 ">اعلانات</h3>
                    </div>
                    <div class="row m-2 mb-2">

                        @foreach($homes as $home)
                        <div class="col-12 p-0 bordertoty">
                            <div class="cardtoty m-sm-1 m-0 p-1">
                                <a href="{{asset('assets/site/images/homes/'.$home->img)}}" class="gallery-popup" style="height: 130px; width:100%">
                                    <div class="project-item">
                                        <div class="overlay-container">
                                            <img src="{{asset('assets/site/images/homes/'.$home->img)}}" alt="img" class="gallery-thumb-img m-0" style="height: 130px; width:100%">
                                            <div class="project-item-overlay text-right">
                                                <h4>السيارات</h4>
                                                <p>
                                                    <img src="{{asset('assets/site/images/homes/'.$home->img)}}" alt="user" class="avatar-xs rounded-circle">
                                                    <span class="ml-2">{{$home->advertiser_name}}</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="mt-2 mb-2">
                                    <h4 class="" style="color:#820120">منازل</h4>
                                    <p class="card-text">{{$home->city}} {{$home->address}} للبيع في {{$home->model}} سيارة</p>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection