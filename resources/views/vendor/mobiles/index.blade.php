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
                <input type="hidden" name="_token" value="77oiXIoX8qobY8K1FEqLOmNWutRIb9lTHcvckJwD">
                <div class="row m-1">
                    <div class="col-4 col-sm-4">
                        <div class="form-group row">
                            <div class="col-12 m-0 p-0">
                            <select name="model" class="form-control  model-type-car" id="carCompany"
                                    required="">
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
                                <input type="text" name="model"placeholder="الموديل">
                            </div>
                        </div>
                    </div>

                    <div class="col-4 col-sm-4">
                        <div class="form-group row">
                            <div class="col-12 m-0 p-0">
                                <select class="form-control">
                                    <option selected="" disabeled="">الحالة</option>
                                    <option value="جديد">جديد</option>
                                    <option value="مستعمل"> مستعمل</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-4">
                        <div class="form-group row">
                            <div class="col-12 m-0 p-0">
                                <select class="form-control">
                                    <option selected="" disabeled="">المحافظة</option>
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
                                <input class="form-control input-form-group" type="text" placeholder="اقل سعر">
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-sm-4">
                        <div class="form-group row">
                            <div class="col-12 m-0 p-0">
                                <input class="form-control input-form-group" type="text" placeholder="اعلى سعر">
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
                <a href="/general" class="text-white">
                    <h3><i class="mbri-mobile2 mr-2"></i> الاجهزة الذكية </h3>
                </a>
            </div>


            <div class="h-100 mr-1 pt-1" style="width:34%;">
                <button class="w-100 mx-auto btn mt-2 pt-1 px-1 btn-primary text-white"
                    style="height:33px;font-size: 11px;line-height:28px;max-width:100px;float:left !important;">

                    <i class="fa fa-plus-circle "></i>اضف اعلان جديد

                </button>
            </div>
        </div>
        <div class="body-card m-3">



            <div class="row">

                @foreach ($mobiles as $mobile) 
                <div class="col-6 col-xl-2 p-1 ">
                    <div class="annonce-item" style="border: 1px solid;border-color: #0000002b;border-radius: 5px;">
                        <a href="{{ asset('/admin/images/ $mobiles') }}" class="gallery-popup"
                            style="height: 160px; width:100%">
                            <div class="project-item">
                                <div class="overlay-container">
                                    <img src="{{ asset('/admin/images/mobile.jpg') }}" alt="img" class=""
                                        style="height: 160px; width:100%">
                                    <div class="project-item-overlay text-right">
                                        <h4>الاجهزة الذكية</h4>
                                        <p>
                                            <img src="{{ asset('/admin/images/mobile.jpg') }}" alt="user"
                                                class="avatar-xs rounded-circle">
                                            <span class="ml-2">مارتينا جرجس</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">الاجهزة الذكية</h4>
                            <p class="card-text">شقة عظم للبيع في الخليل ١٣٦ م - فيصل بريك 0562700836
                                وسط الخليل على بعد 570 متر من مستشفى الأهلي</p>
                        </div>
                    </div>
            </div>

            @endforeach
        </div>
    </div>
    <nav aria-label="..." class="">
        <ul class="pagination">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">السابق</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active">
                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">التالي</a>
            </li>
        </ul>
    </nav>
</div>
</div>
</div>
</div>
<div class="col-00 col-lg-3">
    <div class="row m-1">
        <div class="card w-100">
            <div class="body-card m-3">
                <div class="row">
                    <h3 class="mb-4 col-6 ">اعلانات</h3>
                </div>
                <div class="row m-2 mb-2">

                    @for ($i = 0; $i < 4; $i++) <div class="col-12 p-0 bordertoty">
                        <div class="cardtoty m-sm-1 m-0 p-1">
                            <a href="{{ asset('assets/admin/images/car.jpeg') }}" class="gallery-popup"
                                style="height: 130px; width:100%">
                                <div class="project-item">
                                    <div class="overlay-container">
                                        <img src="{{ asset('assets/admin/images/car.jpeg') }}" alt="img"
                                            class="gallery-thumb-img m-0" style="height: 130px; width:100%">
                                        <div class="project-item-overlay text-right">
                                            <h4>عقارات</h4>
                                            <p>
                                                <img src="{{ asset('assets/admin/images/car.jpeg') }}" alt="user"
                                                    class="avatar-xs rounded-circle">
                                                <span class="ml-2">مارتينا جرجس</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="mt-2 mb-2">
                                <h4 class="" style="color:#820120">شقق</h4>
                                <p class="card-text">شقة عظم للبيع في الخليل ١٣٦ م
                                    وسط الخليل على بعد 570 متري</p>
                            </div>
                        </div>
                </div>
                @endfor

            </div>
        </div>
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