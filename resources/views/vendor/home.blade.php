@extends("layouts.vendor")
@section('pageTitle', 'Koala Web Libraries')
@section('styleChart')
<link href="{{ url('assets/admin/libs/c3/c3.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
@endsection

@section('content')

<div class="row main-section">
    <div class="w-100">
        <div class="card-header m-0 p-0 w-100 d-inline-flex" style="height:60px;background:#262726 ;">

            <div class="h-100 text-white px-2" style="width:65%">
                <a href="{{route('general.index')}}" class="text-white">
                    <h3 class="mb-4"><i class="mdi mdi-view-module mr-2"></i> الإعلانات العامة </h3>
                </a>
            </div>


            <div class="h-100 mr-1 pt-1" style="width:34%;">
                <a href="{{route('general.add')}}" class="w-100 mx-auto btn mt-2 pt-1 px-1 btn-primary text-white"
                    style="height:33px;font-size: 11px;line-height:28px;max-width:100px;float:left !important;">

                    <i class="fa fa-plus-circle "></i>اضف اعلان جديد

                </a>
            </div>
        </div>

        <div class="body-card m-3">
            <div class="row">

                @foreach($generals as $general)
                <div class="col-6 col-xl-2 p-1">
                    <div class="card annonce-item"
                        style="border: 1px solid;border-color: #0000002b;border-radius: 5px;height: 230px;">
                        <button style="border: none; background: none;"class="p-0 m-0"
                            onclick="window.location.href = '/general/product/{{$general->id}}'">
                            <a href=" {{ asset('assets/site/images/general/' . explode(',', $general->img)[0])}}"
                                class="gallery-popup" style="height: 160px; width:100%">
                                <div class="project-item">
                                    <div class="overlay-container">
                                        <img src="{{ asset('assets/site/images/general/' . explode(',', $general->img)[0])}}"
                                            alt="img" class="" style="height: 160px; width:100%">
                                        <div class="project-item-overlay text-right">
                                            <h4>{{$general->address}}</h4>
                                            <p>
                                                <img src="{{ asset('assets/site/images/general/' . explode(',', $general->img)[0])}}"
                                                    alt="user" class="avatar-xs rounded-circle">
                                                <span class="ml-2">{{$general->advertiser_name}} </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="card-body p-0">
                                <h4 class="card-title"> {{$general->address}}</h4>
                                <p class="card-text">{{$general->description}}</p>
                            </div>
                    </div>
                </div>
                @endforeach
                @if(count($generals) > 6)
                <div class="mx-auto" style="width:150px;">
                    <button class="w-100 mx-auto btn mt-2 p-0 px-1 btn-primary text-white"
                        style="height:33px;font-size: 11px;line-height:33px;">
                        تصفح المزيد
                    </button>
                </div>
                @elseif (count($generals) == 0)
                <h6 class="text-center pt-2 pb-2">لا توجد اعلانات في هذه الفئة</h6>
                @endif
            </div>
        </div>
    </div>
    </button>
</div>

<div class="row main-section">
    <div class="w-100">
        <div class="card-header m-0 p-0 w-100 d-inline-flex" style="height:60px;background:#262726 ;">

            <div class="h-100 text-white px-2" style="width:65%">
                <a href="{{route('car.index')}}" class="text-white">
                    <h3><i class="mdi mdi-car-side mr-2"></i> سيارات </h3>
                </a>
            </div>


            <div class="h-100 mr-1 pt-1" style="width:34%;">
                <a href="{{route('car.add')}}" class="w-100 mx-auto btn mt-2 pt-1 px-1 btn-primary text-white"
                    style="height:33px;font-size: 11px;line-height:28px;max-width:100px;float:left !important;">

                    <i class="fa fa-plus-circle "></i>اضف اعلان جديد

                </a>
            </div>
        </div>
        <div class="body-card m-3">



            <div class="row">
                @foreach ($cars as $car)
                <div class="col-6 col-xl-2 p-1 ">
                    <div class="annonce-item" style="border: 1px solid #0000002b;border-radius: 5px;">
                        <button style="border: none; background: none;"class="p-0 m-0"
                            onclick="window.location.href = '/car/product/{{$car->id}}'">
                            <a href="{{ asset('assets/site/images/cars/' . explode(',', $car->img)[0]) }}"
                                class="gallery-popup" style="height: 160px; width:100%">
                                <div class="project-item">
                                    <div class="overlay-container">
                                        <img src="{{ asset('assets/site/images/cars/' . explode(',', $car->img)[0])  }}"
                                            alt="img" style="height: 160px; width:100%">
                                        <div class="project-item-overlay text-right">
                                            <h2>{{$car->company. $car->model}}</h2>
                                            <p>
                                                <img src="{{ asset('assets/site/images/cars/' . explode(',', $car->img)[0])  }}"
                                                    alt="user" class="avatar-xs rounded-circle">
                                                <span class="ml-2">{{$car->advertiser_name}}</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <div class="card-body">
                                <h4 class="card-title">
                                    {{ $car->company . ' ' . ($car->model ? $car->model : 'reset_model') }}</h4>
                                <p class="card-text">
                                    {{$car->description}}
                                </p>
                            </div>
                        </button>
                    </div>
                </div>

                @endforeach
                @if(count($cars) > 6)
                <div class="mx-auto" style="width:150px;">
                    <button class="w-100 mx-auto btn mt-2 p-0 px-1 btn-primary text-white"
                        style="height:33px;font-size: 11px;line-height:33px;">
                        تصفح المزيد
                    </button>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row main-section">
    <div class="w-100">
        <div class="card-header m-0 p-0 w-100 d-inline-flex" style="height: 60px; background:#262726;">

            <div class="h-100 text-white px-2" style="width: 65%;">
                <a href="{{route('home.index')}}" class="text-white">
                    <h3><i class="mdi mdi-home mr-2"></i> شقق </h3>
                </a>
            </div>

            <div class="h-100 mr-1 pt-1" style="width: 34%;">
                <a href="{{route('home.add')}}" class="w-100 mx-auto btn mt-2 pt-1 px-1 btn-primary text-white"
                    style="height: 33px; font-size: 11px; line-height: 28px; max-width: 100px; float: left !important;">
                    <i class="fa fa-plus-circle"></i>اضف اعلان جديد
                </a>
            </div>
        </div>
        <div class="body-card m-3">
            <div class="row">
                <table class="table table-striped table-bordered">
                    <tbody>
                        @foreach ($homes as $home)

                                <tr>
                                    <td><a href="home/product/{{$home->id}}">{{$home->home_type}}</td>
                                    <td><a href="home/product/{{$home->id}}">{{$home->show}}</a></td>
                                    <td><a href="home/product/{{$home->id}}">{{$home->city}} </td>
                                </tr>
                           
                        @endforeach
                    </tbody>
                </table>
                @if(count($homes) > 6)
                <div class="mx-auto" style="width: 150px;">
                    <button onclick="window.location.href = '/browse-more-homes'"
                        class="w-100 mx-auto btn mt-2 p-0 px-1 btn-primary text-white"
                        style="height: 33px; font-size: 11px; line-height: 33px; border: none;">
                        تصفح المزيد
                    </button>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row main-section">
    <div class="w-100">
        <div class="card-header m-0 p-0 w-100 d-inline-flex" style="height:60px;background:#262726 ;">

            <div class="h-100 text-white px-2" style="width:65%">
                <a href="{{route('shop.index')}}" class="text-white">
                    <h3><i class=" mdi mdi-shopping-search mr-2"></i> محلات و مكاتب </h3>
                </a>
            </div>


            <div class="h-100 mr-1 pt-1" style="width:34%;">
                <a href="{{route('shop.add')}}" class="w-100 mx-auto btn mt-2 pt-1 px-1 btn-primary text-white"
                    style="height:33px;font-size: 11px;line-height:28px;max-width:100px;float:left !important;">

                    <i class="fa fa-plus-circle "></i>اضف اعلان جديد

                </a>
            </div>
        </div>
        <div class="body-card m-3">

            <h3 class="mb-4"></h3>
            <div class="row">
                <table class="table table-striped table-bordered">

                    <tbody>
                        @foreach ($shops as $shop)
                        
                            <tr>
                                <td><a href="shop/product/{{$shop->id}}">{{$shop->brief}}</td>
                                <td><a href="shop/product/{{$shop->id}}">{{$shop->offer}}</td>
                                <td><a href="shop/product/{{$shop->id}}">{{$shop->city}}</td>
                            </tr>
                        </a>
                        @endforeach
                    </tbody>
                </table>

                @if(count($shops) > 6)
                <div class="mx-auto" style="width:150px;">
                    <button class="w-100 mx-auto btn mt-2 p-0 px-1 btn-primary text-white"
                        style="height:33px;font-size: 11px;line-height:33px;">
                        تصفح المزيد
                    </button>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row main-section">
    <div class="w-100">
        <div class="card-header m-0 p-0 w-100 d-inline-flex" style="height:60px;background:#262726 ;">

            <div class="h-100 text-white px-2" style="width:65%">
                <a href="{{route('land.index')}}" class="text-white">
                    <h3><i class="mdi mdi-view-dashboard mr-2"></i> اراضي </h3>
                </a>
            </div>


            <div class="h-100 mr-1 pt-1" style="width:34%;">
                <a href="{{route('land.add')}}" class="w-100 mx-auto btn mt-2 pt-1 px-1 btn-primary text-white"
                    style="height:33px;font-size: 11px;line-height:28px;max-width:100px;float:left !important;">

                    <i class="fa fa-plus-circle "></i>اضف اعلان جديد

                </a>
            </div>
        </div>
        <div class="body-card m-3">

            <h3 class="mb-4"></h3>
            <div class="row">
                <table class="table table-striped table-bordered">
                    <tbody>
                        @foreach ($lands as $land)
                        <div class="col-6 col-xl-2 p-1">
                            <tr>
                                <td><a href="land/product/{{$land->id}}">{{$land->brief}}</td>
                                <td><a href="land/product/{{$land->id}}">{{$land->area}}</td>
                                <td><a href="land/product/{{$land->id}}">{{$land->city}}</td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
                @if(count($lands) > 6)
                <div class="mx-auto" style="width:150px;">
                    <button class="w-100 mx-auto btn mt-2 p-0 px-1 btn-primary text-white"
                        style="height:33px;font-size: 11px;line-height:33px;">
                        تصفح المزيد
                    </button>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row main-section">
    <div class="w-100">
        <div class="card-header m-0 p-0 w-100 d-inline-flex" style="height:60px;background:#262726 ;">

            <div class="h-100 text-white px-2" style="width:65%">
                <a href="{{route('job.index')}}" class="text-white">
                    <h3><i class=" fas fa-user-friends mr-2"></i> توظيف </h3>
                </a>
            </div>


            <div class="h-100 mr-1 pt-1" style="width:34%;">
                <a href="{{route('job.add')}}" class="w-100 mx-auto btn mt-2 pt-1 px-1 btn-primary text-white"
                    style="height:33px;font-size: 11px;line-height:28px;max-width:100px;float:left !important;">

                    <i class="fa fa-plus-circle "></i>اضف اعلان جديد

                </a>
            </div>
        </div>
        <div class="body-card m-3">


            <div class="row">


                <table class="table table-striped table-bordered">
                    <tbody>
                        @foreach ($jobs as $job)
                        <tr>
                            <td><a href="job/product/{{$job->id}}">{{$job->advertiser_name}} </td>
                            <td style="vertical-align: middle;"><a href="job/product/{{$job->id}}">{{$job->specialization}} </td>
                            <td style="vertical-align: middle;"><a href="job/product/{{$job->id}}">{{$job->city}} </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @if(count($jobs) > 6)
                <div class="mx-auto" style="width:150px;">
                    <button class="w-100 mx-auto btn mt-2 p-0 px-1 btn-primary text-white"
                        style="height:33px;font-size: 11px;line-height:33px;">
                        تصفح المزيد
                    </button>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row main-section">
    <div class="w-100">
        <div class="card-header m-0 p-0 w-100 d-inline-flex" style="height:60px;background:#262726 ;">

            <div class="h-100 text-white px-2" style="width:65%">
                <a href="{{route('mobile.index')}}" class="text-white">
                    <h3><i class="mbri-mobile2 mr-2"></i> الاجهزة الذكية </h3>
                </a>
            </div>


            <div class="h-100 mr-1 pt-1" style="width:34%;">
                <a href="{{route('mobile.add')}}" class="w-100 mx-auto btn mt-2 pt-1 px-1 btn-primary text-white"
                    style="height:33px;font-size: 11px;line-height:28px;max-width:100px;float:left !important;">

                    <i class="fa fa-plus-circle "></i>اضف اعلان جديد

                </a>
            </div>
        </div>
        <div class="body-card m-3">

            <div class="row">

                @foreach ($mobiles as $mobile)
                <div class="col-6 col-xl-2 p-1">
                <button style="border: none; background: none;"class="p-0 m-0"
                            onclick="window.location.href = '/general/product/{{$general->id}}'">
                    <div class="annonce-item" style="border: 1px solid;border-color: #0000002b;border-radius: 5px;height: 230px;">
                        
                    <a href="{{ asset('assets/site/images/mobiles/' . explode(',', $mobile->img)[0]) }}"
                            class="gallery-popup" style="height: 160px; width:100%">
                            <div class="project-item">
                                <div class="overlay-container">
                                    <img src="{{  asset('assets/site/images/mobiles/' . explode(',', $mobile->img)[0])  }}"
                                        alt="img" class="" style="height: 160px; width:100%">
                                    <div class="project-item-overlay text-right">
                                        <h4>الاجهزة الذكية</h4>
                                        <p>
                                            <img src="{{ asset('assets/site/images/mobiles/' . explode(',', $mobile->img)[0])}}"
                                                alt="user" class="avatar-xs rounded-circle">
                                            <span class="ml-2">{{$mobile->advertiser_name}}</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">{{$mobile->model}}</h4>
                            <p class="card-text">{{$mobile->description}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                @if(count($mobiles) > 6)
                <div class="mx-auto" style="width:150px;">
                    <button class="w-100 mx-auto btn mt-2 p-0 px-1 btn-primary text-white"
                        style="height:33px;font-size: 11px;line-height:33px;">
                        تصفح المزيد
                    </button>
                </div>
                @endif
            </div>
        </div>
        </button>
    </div>
</div>




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
    font-size: large !important;
    font-weight: bolder;
    line-height: 60px;
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
    margin: 10px 0px 10px 0px;
    box-shadow: 0px 0px 1px 0px;
    background: #fff;
}

p {
    font-weight: normal !important;
}

table tr {
    height: 48px !important;
    font-size: 15px;
}

.card-body {
    max-height: 230px; /* Adjust the max height as needed */
    overflow: hidden;
    text-overflow: ellipsis;
    
}

@media (max-width:560px) {
    .dropdown a {
        font-size: 12px !important;
    }

    .card-body p {
        display: none;
    }

    form .form-control option,
    form .form-control,
    form select,
    form input,
        {
        height: 33px !important;
        font-size: 13px;
        box-sizing: border-box;
        margin: 0 !important;
    }


}
</style>
@endsection