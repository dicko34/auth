@extends("layouts.vendor")
@section('pageTitle', 'Koala Web Libraries')
@section('styleChart')
<link href="{{ asset('/admin/libs/c3/c3.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
@endsection

@section('content')
{{-- <div class="row">
        <div class="w-100">
            <div class="body-card m-5">

                <h3 class="mb-4"><i class="fas fa-star mr-2"></i> الاعلانات المميزة </h3>
                <div class="row">

                    @for ($i=0; $i < 6; $i++)
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="card">
                            <a href="{{ asset('/admin/images/martina.jpg') }}" class="gallery-popup" style="height:
230px; width:100%">
<div class="project-item">
    <div class="overlay-container">
        <img src="{{ asset('a/admin/images/martina.jpg') }}" alt="img" class="" style="height: 230px; width:100%">
        <div class="project-item-overlay text-right">
            <h4>عقارات</h4>
            <p>
                <img src="{{ asset('/admin/images/martina.jpg') }}" alt="user" class="avatar-xs rounded-circle">
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

<div class="row main-section">
    <div class="w-100">
        <div class="card-header m-0 p-0 w-100 d-inline-flex" style="height:60px;background:#262726 ;">

            <div class="h-100 text-white px-2" style="width:65%">
                <a href="/general" class="text-white">
                    <h3 class="mb-4"><i class="mdi mdi-view-module mr-2"></i> الإعلانات العامة </h3>
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

                @for ($i=0; $i < 6; $i++) <div class="col-6 col-xl-2 p-1">
                    <div class="card annonce-item" style="border: 1px solid;border-color: #0000002b;border-radius: 5px;"">
                            <a href=" {{ asset('/admin/images/general.jpg') }}" class="gallery-popup"
                        style="height: 160px; width:100%">
                        <div class="project-item">
                            <div class="overlay-container">
                                <img src="{{ asset('/admin/images/general.jpg') }}" alt="img" class=""
                                    style="height: 160px; width:100%">
                                <div class="project-item-overlay text-right">
                                    <h4>الإعلانات العامة</h4>
                                    <p>
                                        <img src="{{ asset('/admin/images/general.jpg') }}" alt="user"
                                            class="avatar-xs rounded-circle">
                                        <span class="ml-2">مارتينا جرجس</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">الإعلانات العامة</h4>
                            <p class="card-text">شقة عظم للبيع في الخليل ١٣٦ م - فيصل بريك 0562700836
                                وسط الخليل على بعد 570 متر من مستشفى الأهلي</p>
                        </div>
                    </div>
            </div>
            @endfor
            <div class="mx-auto" style="width:150px;">
                <button class="w-100 mx-auto btn mt-2 p-0 px-1 btn-primary text-white"
                    style="height:33px;font-size: 11px;line-height:33px;">
                    تصفح المزيد
                </button>
            </div>
        </div>
    </div>
</div>
</div>

<div class="row main-section">
    <div class="w-100">
        <div class="card-header m-0 p-0 w-100 d-inline-flex" style="height:60px;background:#262726 ;">

            <div class="h-100 text-white px-2" style="width:65%">
                <a href="/general" class="text-white">
                    <h3><i class="mdi mdi-car-side mr-2"></i> سيارات </h3>
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

                @for ($i=0; $i < 6; $i++) <div class="col-6 col-xl-2 p-1 ">
                    <div class="annonce-item" style="border: 1px solid;border-color: #0000002b;border-radius: 5px;">
                        <a href="{{  asset('/admin/images/car.jpeg')  }}" class="gallery-popup"
                            style="height: 160px; width:100%">
                            <div class="project-item">
                                <div class="overlay-container">
                                    <img src="{{ asset('/admin/images/car.jpeg') }}" alt="img"
                                        style="height: 160px; width:100%">
                                    <div class="project-item-overlay text-right">
                                        <h2>سيارات</h2>
                                        <p>
                                            <img src="{{ asset('/admin/images/car.jpeg') }}" alt="user"
                                                class="avatar-xs rounded-circle">
                                            <span class="ml-2">مارتينا جرجس</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">سيارات</h4>
                            <p class="card-text">
                                تويوتا لاند كروزر موديل سنة 2019 فل الفل سبورت (قصير) بابين
                            </p>
                        </div>
                    </div>
            </div>
            @endfor
            <div class="mx-auto" style="width:150px;">
                <button class="w-100 mx-auto btn mt-2 p-0 px-1 btn-primary text-white"
                    style="height:33px;font-size: 11px;line-height:33px;">
                    تصفح المزيد
                </button>
            </div>
        </div>
    </div>
</div>
</div>

<div class="row main-section">
    <div class="w-100">
        <div class="card-header m-0 p-0 w-100 d-inline-flex" style="height:60px;background:#262726 ;">

            <div class="h-100 text-white px-2" style="width:65%">
                <a href="/homes" class="text-white">
                    <h3><i class="mdi mdi-home mr-2"></i> شقق </h3>
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



                <table class="table table-striped table-bordered">

                    <tbody>
                        @for ($i=0; $i < 6; $i++) <tr>
                            <td>شقة</td>
                            <td><a style="color:#000;" href="https://www.example.com/job/1.html"> للايجار</a>
                            </td>
                            <td>رام الله</td>
                            </tr>
                            @endfor
                    </tbody>
                </table>

                <div class="mx-auto" style="width:150px;">
                    <button class="w-100 mx-auto btn mt-2 p-0 px-1 btn-primary text-white"
                        style="height:33px;font-size: 11px;line-height:33px;">
                        تصفح المزيد
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row main-section">
    <div class="w-100">
        <div class="card-header m-0 p-0 w-100 d-inline-flex" style="height:60px;background:#262726 ;">

            <div class="h-100 text-white px-2" style="width:65%">
                <a href="/homes" class="text-white">
                    <h3><i class=" mdi mdi-shopping-search mr-2"></i> محلات و مكاتب </h3>
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

            <h3 class="mb-4"></h3>
            <div class="row">
                <table class="table table-striped table-bordered">

                    <tbody>
                        @for ($i=0; $i < 6; $i++) <tr>
                            <td>محل تجاري في وسط رام الله.</td>
                            <td>للبيع</td>
                            <td>رام الله</td>
                            </tr>
                            @endfor
                    </tbody>
                </table>

                <div class="mx-auto" style="width:150px;">
                    <button class="w-100 mx-auto btn mt-2 p-0 px-1 btn-primary text-white"
                        style="height:33px;font-size: 11px;line-height:33px;">
                        تصفح المزيد
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row main-section">
    <div class="w-100">
        <div class="card-header m-0 p-0 w-100 d-inline-flex" style="height:60px;background:#262726 ;">

            <div class="h-100 text-white px-2" style="width:65%">
                <a href="/homes" class="text-white">
                    <h3><i class="mdi mdi-view-dashboard mr-2"></i> اراضي </h3>
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

            <h3 class="mb-4"></h3>
            <div class="row">
                <table class="table table-striped table-bordered">
                    <tbody>
                        @for ($i=0; $i < 6; $i++) <div class="col-6 col-xl-2 p-1">
                            <tr>
                                <td>أرض جميلة</td>
                                <td>120m²</td>
                                <td>رام الله</td>
                            </tr>
                            @endfor
                    </tbody>
                </table>
                <div class="mx-auto" style="width:150px;">
                    <button class="w-100 mx-auto btn mt-2 p-0 px-1 btn-primary text-white"
                        style="height:33px;font-size: 11px;line-height:33px;">
                        تصفح المزيد
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row main-section">
    <div class="w-100">
        <div class="card-header m-0 p-0 w-100 d-inline-flex" style="height:60px;background:#262726 ;">

            <div class="h-100 text-white px-2" style="width:65%">
                <a href="/homes" class="text-white">
                    <h3><i class=" fas fa-user-friends mr-2"></i> توظيف </h3>
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


                <table class="table table-striped table-bordered">
                    <tbody>
                        @for ($i=0; $i < 6; $i++) <div class="col-6 col-xl-2 p-1">
                            <tr>
                                <td>SonaTrack</td>
                                <td style="vertical-align: middle;"><a style="color:#000;"
                                        href="https://www.wenak.ps/job/46388.html">محاضر</a></td>
                                <td style="vertical-align: middle;">قطاع غزة</td>
                            </tr>
                            <tr>
                                <td>SonaTrack</td>
                                <td style="vertical-align: middle;"><a style="color:#000;"
                                        href="https://www.wenak.ps/job/46387.html">مساعد شوفير</a>
                                </td>
                                <td style="vertical-align: middle;">الخليل</td>
                            </tr>
                            @endfor
                    </tbody>
                </table>
                <div class="mx-auto" style="width:150px;">
                    <button class="w-100 mx-auto btn mt-2 p-0 px-1 btn-primary text-white"
                        style="height:33px;font-size: 11px;line-height:33px;">
                        تصفح المزيد
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <div class="row">
        <div class="w-100">
            <div class="body-card m-5">

                <h3 class="mb-4"><i class="fas fa-address-book mr-2"></i> إعلانات الوظائف الشاغرة </h3>
                <div class="row">

                    @for ($i=0; $i < 8; $i++)
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="card annonce-item"style="border: 1px solid;border-color: #0000002b;border-radius: 5px;">
                            <a href="{{ asset('/admin/images/job2.jpg') }}" class="gallery-popup" style="height: 230px;
width:100%">
<div class="project-item">
    <div class="overlay-container">
        <img src="{{ asset('/admin/images/job2.jpg') }}" alt="img" class="" style="height: 230px; width:100%">
        <div class="project-item-overlay text-right">
            <h4>إعلانات الوظائف الشاغرة</h4>
            <p>
                <img src="{{ asset('/admin/images/job2.jpg') }}" alt="user" class="avatar-xs rounded-circle">
                <span class="ml-2">مارتينا جرجس</span>
            </p>
        </div>
    </div>
</div>
</a>
<div class="card-body">
    <h4 class="card-title">إعلانات الوظائف الشاغرة</h4>
    <p class="card-text">شقة عظم للبيع في الخليل ١٣٦ م - فيصل بريك 0562700836
        وسط الخليل على بعد 570 متر من مستشفى الأهلي</p>
</div>
</div>
</div>
@endfor
<div class="mx-auto" style="width:150px;">
    <button class="w-100 mx-auto btn mt-2 p-0 px-1 btn-primary text-white"
        style="height:33px;font-size: 11px;line-height:33px;">
        تصفح المزيد
    </button>
</div>
</div>
</div>
</div>
</div> --}}

<div class="row main-section">
    <div class="w-100">
        <div class="card-header m-0 p-0 w-100 d-inline-flex" style="height:60px;background:#262726 ;">

            <div class="h-100 text-white px-2" style="width:65%">
                <a href="/homes" class="text-white">
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

                @for ($i=0; $i < 6; $i++) <div class="col-6 col-xl-2 p-1">
                    <div class="annonce-item" style="border: 1px solid;border-color: #0000002b;border-radius: 5px;">
                        <a href="{{ asset('/admin/images/mobile.jpg') }}" class="gallery-popup"
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
            @endfor
            <div class="mx-auto" style="width:150px;">
                <button class="w-100 mx-auto btn mt-2 p-0 px-1 btn-primary text-white"
                    style="height:33px;font-size: 11px;line-height:33px;">
                    تصفح المزيد
                </button>
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

table tr {
    height: 48px !important;
    font-size: 15px;
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