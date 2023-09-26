@extends("layouts.vendor")
@section('pageTitle', 'Koala Web Libraries')
@section('styleChart')
<link href="{{ asset('assets/admin/libs/c3/c3.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="row">
    <div class="card w-100">
        <div class="body-card m-2">
            <form method="POST" action="{{route('mobiles.search')}}">
                @csrf
                <div class="row m-1">
                    <div class="col-4 col-sm-4">
                        <div class="form-group row">
                            <div class="col-12 m-0 p-0">
                            <select name="model" class="form-control  model-type-car">
                                    <option selected="" disabeled="" value="">Model</option>
                                    <option value="Alcatel">Alcatel</option>
                                    <option value="Apple">Apple</option>
                                    <option value="Asus">Asus</option>
                                    <option value="BlackView">BlackView</option>
                                    <option value="Bluboo">Bluboo</option>
                                    <option value="Doogee">Doogee</option>
                                    <option value="Elephone">Elephone</option>
                                    <option value="Homtom">Homtom</option>
                                    <option value="HTC">HTC</option>
                                    <option value="Leagoo">Leagoo</option>
                                    <option value="LG">LG</option>
                                    <option value="Micromax">Micromax</option>
                                    <option value="OnePlus">OnePlus</option>
                                    <option value="Oppo">Oppo</option>
                                    <option value="Posh">Posh</option>
                                    <option value="Telego">Telego</option>
                                    <option value="UMi">UMi</option>
                                    <option value="Vernee">Vernee</option>
                                    <option value="XGody">XGody</option>
                                    <option value="بلاك بيري">بلاك بيري</option>
                                    <option value="توشيبا">توشيبا</option>
                                    <option value="جوجل">جوجل</option>
                                    <option value="سامسونج">سامسونج</option>
                                    <option value="سوني">سوني</option>
                                    <option value="شومي Xiaomi">شومي Xiaomi</option>
                                    <option value="لينوفو">لينوفو</option>
                                    <option value="موتورولا">موتورولا</option>
                                    <option value="نوكيا">نوكيا</option>
                                    <option value="هواوي">هواوي</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Repeat the structure for other form groups -->

                    <div class="col-4 col-sm-4">
                        <div class="form-group row">
                            <div class="col-12 m-0 p-0">
                                <input class="form-control"type="text" name="reset_model"placeholder="الموديل">
                            </div>
                        </div>
                    </div>

                    <div class="col-4 col-sm-4">
                        <div class="form-group row">
                            <div class="col-12 m-0 p-0">
                                <select class="form-control" name="device_status">
                                    <option selected="" disabeled="" value="">الحالة</option>
                                    <option value="جديد">جديد</option>
                                    <option value="مستعمل"> مستعمل</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-4">
                        <div class="form-group row">
                            <div class="col-12 m-0 p-0">
                                <select class="form-control" name="city">
                                    <option selected="" disabeled="" value="">المحافظة</option>
                                    <option value="رام الله والبيرة">رام الله والبيرة</option>
                                    <option value="القدس">القدس</option>
                                    <option value="قطاع غزة">قطاع غزة</option>
                                    <option value="الخليل">الخليل</option>
                                    <option value="بيت لحم">بيت لحم</option>
                                    <option value="أريحا">أريحا</option>
                                    <option value="سلفيت وبديا">سلفيت وبديا</option>
                                    <option value="روابي">روابي</option>
                                    <option value="طوباس">طوباس</option>
                                    <option value="قلقيلية">قلقيلية</option>
                                    <option value="طولكرم">طولكرم</option>
                                    <option value="جنين">جنين</option>
                                    <option value="نابلس">نابلس</option>
                                    <option value="جميع الاماكن">جميع الاماكن</option>
                                    <option value="مناطق الداخل">مناطق الداخل</option>

                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Repeat the structure for the remaining form groups -->
                    <div class="col-6 col-sm-4">
                        <div class="form-group row">
                            <div class="col-12 m-0 p-0">
                                <input class="form-control input-form-group" name="price_min" type="text" placeholder="اقل سعر">
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-sm-4">
                        <div class="form-group row">
                            <div class="col-12 m-0 p-0">
                                <input class="form-control input-form-group" name="price_max" type="text" placeholder="اعلى سعر">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <button class="btn btn-primary w-md waves-effect waves-light" type="submit">بحث
                            الان</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
</div>

<div class="row">
    <div class="card w-100">
        <div class="card-header m-0 p-0 w-100 d-inline-flex" style="height:60px;background:#262726 ;">

            <div class="h-100 text-white px-2" style="width:65%">
                <a href="/mobiles" class="text-white">
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

                @foreach ($mobiles_show as $mobile) 
                <div class="col-6 col-xl-2 p-1 ">
                    <div class="annonce-item" style="border: 1px solid;border-color: #0000002b;border-radius: 5px;">
                        <a href="{{ asset('assets/site/images/mobile/' . explode(',', $mobile->img)[0]) }}" class="gallery-popup"
                            style="height: 160px; width:100%">
                            <div class="project-item">
                                <div class="overlay-container">
                                    <img src="{{ asset('assets/site/images/mobile/' . explode(',', $mobile->img)[0]) }}" alt="img" class=""
                                        style="height: 160px; width:100%">
                                    <div class="project-item-overlay text-right">
                                        <h4>
                                             هاتف {{$mobile->model}} {{$mobile->reset_model}}
                                        </h4>
                                        <p>
                                            <img src="{{ asset('assets/site/images/mobile/' . explode(',', $mobile->img)[0]) }}" alt="user"
                                                class="avatar-xs rounded-circle">
                                            <span class="ml-2">{{$mobile->advertiser_name}} </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">هاتف
                                {{$mobile->model}} {{$mobile->reset_model}}
                            </h4>
                            <p class="card-text">
                                {{$mobile->model}} {{$mobile->reset_model}} - {{$mobile->device_status}}
                            </p>
                        </div>
                    </div>
            </div>

            @endforeach
        </div>
    </div>
    {{$mobiles_show->links('vendor.paginate')}}
</div>
</div>
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
    form input {
        height: 33px !important;
        font-size: 13px;
        box-sizing: border-box;
        margin: 0 !important;
    }
}
</style>


@endsection