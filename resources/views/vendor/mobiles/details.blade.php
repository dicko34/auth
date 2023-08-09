@extends("layouts.vendor")
@section('pageTitle', 'Koala Web Libraries')
@section('styleChart')
<<<<<<< Updated upstream
<<<<<<< Updated upstream
    <link href="{{ asset('assets/admin/libs/c3/c3.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <script type="text/javascript"
        src="https://platform-api.sharethis.com/js/sharethis.js#property=6063a4476f7ab900129cec66&product=inline-share-buttons"
        async="async"></script>
@endsection
@section('content')
    <div class="row">
        <div class="card w-100">
            <div class="body-card m-5">
                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-12">
                                <div id="carouselExampleCaptions" class="carousel slide m-lg-5" data-ride="carousel">
                                    <ol class="carousel-indicators" style="bottom: -50px;">
                                        <li data-target="#carouselExampleCaptions" data-slide-to="0"
                                            class="active bg-primary" style="border-radius: 100%;
                                                height: 9px;
                                                width: 9px;
                                                "></li>
                                        <li data-target="#carouselExampleCaptions" data-slide-to="1" class="bg-primary"
                                            style="border-radius: 100%;
                                                height: 9px;
                                                width: 9px;"></li>
                                    </ol>
                                    <div class="carousel-inner w-100 m-auto">
                                        <div class="carousel-item active">
                                            <img src="{{ asset('assets/admin/images/martina.jpg') }}" height="350"
                                                class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('assets/admin/images/mobile.jpg') }}" height="350"
                                                class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-7 col-md-12">
                                <div class="m-5">
                                    <div class="mb-3">
                                        <h2>
                                            سامسونج M62 - مستعمل
                                        </h2>
                                        <h5 class="maincolor">1100 شيكل
                                        </h5>
                                        <h5 class="smallColor mt-3">
                                            موديل سنة 2007
                                        </h5>
                                    </div>

                                    <h3 class="mt-5 mb-4">
                                        شارك علي
                                    </h3>
                                    <div>
                                        <div class="apsc-icons-wrapper clearfix apsc-theme-4">

                                            <div class="sharethis-inline-share-buttons"></div>

                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
 
                    </div>
                    <div class="row m-4 ">
                        <div class="col-12 mt-4">
                            <ul class="nav nav-tabs " id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active maincolor" id="home-tab" data-toggle="tab" href="#home"
                                        role="tab" aria-controls="home" aria-selected="true">الوصف</a>
                                </li> 
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link maincolor" id="contact-tab" data-toggle="tab" href="#contact"
                                        role="tab" aria-controls="contact" aria-selected="false">معلومات أضافية</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link maincolor" id="seller-tab" data-toggle="tab" href="#seller"
                                        role="tab" aria-controls="seller" aria-selected="false">المُعلن</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 mt-4">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="m-lg-4 row">
                                        <div class="col-sm-4 col-lg-2 col-md-3 m-2">
                                            <div class="smallColor">اسم الشركة : Apple</div>
                                        </div>
                                        <div class="col-sm-4 col-lg-2 col-md-3 m-2">
                                            <div class="smallColor">الموديل : ايباد 2</div>
                                        </div>
                                        <div class="col-sm-4 col-lg-2 col-md-3 m-2">
                                            <div class="smallColor">حالة الجهاز : جديد</div>
                                        </div>
                                        <div class="col-sm-4 col-lg-2 col-md-3 m-2">
                                            <div class="smallColor">عدد الشرائح : شريحتين</div>
                                        </div>
                                        <div class="col-sm-4 col-lg-2 col-md-3 m-2">
                                            <div class="smallColor">حجم الشاشة : 5 بوصة</div>
                                        </div>
                                        <div class="col-sm-4 col-lg-2 col-md-3 m-2">
                                            <div class="smallColor">الكاميرات : كاميرار خلفية</div>
                                        </div>

                                        <div class="col-sm-4 col-lg-2 col-md-3 m-2">
                                            <div class="smallColor">الذاكرة : 64 جيجا</div>
                                        </div>
                                        <div class="col-sm-4 col-lg-2 col-md-3 m-2">
                                            <div class="smallColor">سعة التخزين : 32 جيجا</div>
                                        </div>
                                        <div class="col-sm-4 col-lg-2 col-md-3 m-2">
                                            <div class="smallColor">السعر : 1200</div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                    <div class="m-4">
                                        <ul class="list-unstyled m-3">
                                            <li>
                                                <ul>
                                                    <li class="m-2">ترخيص تامين لشهر 3/2022</li>
                                                    <li class="m-2">ماطور جير 100‎%‎</li>
                                                    <li class="m-2">شاشه مع حساسات</li>
                                                    <li class="m-2">جنط 15 مسجل</li>
                                                    <li class="m-2">غرفه نضيفه</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="seller" role="tabpanel" aria-labelledby="seller-tab">
                                    <div class="m-lg-4 row">
                                        <div class="col-sm-12 col-lg-4 col-md-3 m-2">
                                            <div class="smallColor"> اسم المُعلن : مارتينا جرجس</div>
                                        </div>
                                        <div class="col-sm-12 col-lg-4 col-md-3 m-2">
                                            <div class="smallColor"> العنوان : طولكرم - عنبتا شارع السكه</div>
                                        </div>
                                        <div class="col-sm-12 col-lg-4 col-md-3 m-2">
                                            <div class="smallColor"> رقم الهاتف	 : خصوصي</div>
                                        </div>
                                        <div class="col-sm-12 col-lg-4 col-md-3 m-2">
                                            <div class="smallColor"> تاريخ نشر الإعلان : 2021-11-07
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-lg-4 col-md-3 m-2">
                                            <div class="smallColor"> تاريخ إنتهاء الإعلان : 2021-11-22
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="row">
        <div class="card w-100">
            <div class="body-card m-5">
                <div class="row">
                    <h3 class="mb-4 col-6"><i class="fas fa-star mr-2"></i> الاعلانات المميزة </h3>
                    <div class="col-6 text-right">
                        <a href="{{ route('choseAdd') }}"  class="btn btn-primary w-md waves-effect waves-light" >أضافة أعلان هنا</a>
                    </div>
                </div>
                <div class="row">

                    @for ($i = 0; $i < 4; $i++)
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="card">
                                <a href="{{ asset('assets/admin/images/martina.jpg') }}" class="gallery-popup"
                                    style="height: 230px; width:100%">
                                    <div class="project-item">
                                        <div class="overlay-container">
                                            <img src="{{ asset('assets/admin/images/martina.jpg') }}" alt="img"
                                                class="gallery-thumb-img m-0" style="height: 230px; width:100%">
                                            <div class="project-item-overlay text-right">
                                                <h4>عقارات</h4>
                                                <p>
                                                    <img src="{{ asset('assets/admin/images/martina.jpg') }}" alt="user"
                                                        class="avatar-xs rounded-circle">
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
=======
<link href="{{ asset('assets/admin/libs/c3/c3.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
<script type="text/javascript"
    src="https://platform-api.sharethis.com/js/sharethis.js#property=6063a4476f7ab900129cec66&product=inline-share-buttons"
    async="async"></script>
@endsection
@section('content')


<div class="w-100 mx-auto bg-white" style="max-width:980px;">
    <div class="w-100">
        <div class="media-header">
            <div class="w-100 mt-0 card-header text-left d-flex justify-content-between align-items-center"
                style="border: 1px solid #ccc; border-radius: 0px; border-bottom: 0px; padding: 0;">
                <div class="float-left text-dark border-right px-2 py-1" style="font-size: 14px;">
                    شارك الاعلان
                    <ul class="d-inline-flex mb-0">
                        <li class="f-right px-2 py-1" style="font-size: 14px;">
                            <a onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=https://www.wenak.ps/car/61128.html&amp;src=sdkpreparse','newwindow','width=300,height=250'); return false;"
                                style="color: #888"><i class="fab fa-facebook-square" style="font-size: 18px;"></i></a>
                        </li>
                        <li class="f-right px-2 py-1" style="font-size: 14px;">
                            <a onclick="window.open('https://twitter.com/intent/tweet?text=https://www.wenak.ps/car/61128.html&amp;src=sdkpreparse','newwindow','width=300,height=250'); return false;"
                                style="color: #888"><i class="fab fa-twitter" style="font-size: 18px;"></i></a>
                        </li>
                        <li class="f-right px-2 py-1" style="font-size: 14px;">
                            <a onclick="window.open('https://api.whatsapp.com/send?text=https://www.wenak.ps/car/61128.html','newwindow','width=1200,height=450'); return false;"
                                style="color: #888"><i class="fab fa-whatsapp" aria-hidden="true"
                                    style="font-size: 18px;"></i></a>
                        </li>
                        <li class="f-right px-2 py-1" style="font-size: 14px;">
                            <a onclick="window.open('https://mail.google.com/mail/?view=cm&amp;fs=1&amp;tf=1&amp;to=&amp;su=وينك من زمان - سيات | SEAT ابيزا 2009&amp;body=سيات | SEAT ابيزا 2009 https://www.wenak.ps/car/61128.html&amp;ui=2&amp;tf=1&amp;pli=','newwindow','width=1200,height=450'); return false;"
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
                                <img class="first-img img-fluid" src="{{ url('assets/admin/images/shopes.jpg') }}"
                                    alt="سيات | SEAT ابيزا 2009" title="سيات | SEAT ابيزا 2009"
                                    style="max-width:150px;height:100%">
                            </div>
                            <div class="media-body px-3 pt-1" style="">
                                <span style="color: #ff9800;  font-size: 13px ;font-weight: 700"><i
                                        class="fas  fa-map-marker-alt" style="    font-size: small;"></i> رام الله
                                    والبيرة </span>
                                <h5 class="mt-2 title" style="    font-size: 1.1rem;font-family:Tajawal">هاتف منفصل
                                    للبيع</h5>
                                <li class="old-price not-cut d-block d-lg-none">سعر غير محدد</li>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 border-right-dd border-right ">
                        <div class="">

                            <div class="">
                                <ul>
                                    <li class="old-price not-cut d-none d-lg-block" style="font-size: 20px;">سعر غير
                                        محدد</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

=======
<link href="{{ asset('assets/admin/libs/c3/c3.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
<script type="text/javascript"
    src="https://platform-api.sharethis.com/js/sharethis.js#property=6063a4476f7ab900129cec66&product=inline-share-buttons"
    async="async"></script>
@endsection
@section('content')


<div class="w-100 mx-auto bg-white" style="max-width:980px;">
    <div class="w-100">
        <div class="media-header">
            <div class="w-100 mt-0 card-header text-left d-flex justify-content-between align-items-center"
                style="border: 1px solid #ccc; border-radius: 0px; border-bottom: 0px; padding: 0;">
                <div class="float-left text-dark border-right px-2 py-1" style="font-size: 14px;">
                    شارك الاعلان
                    <ul class="d-inline-flex mb-0">
                        <li class="f-right px-2 py-1" style="font-size: 14px;">
                            <a onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=https://www.wenak.ps/car/61128.html&amp;src=sdkpreparse','newwindow','width=300,height=250'); return false;"
                                style="color: #888"><i class="fab fa-facebook-square" style="font-size: 18px;"></i></a>
                        </li>
                        <li class="f-right px-2 py-1" style="font-size: 14px;">
                            <a onclick="window.open('https://twitter.com/intent/tweet?text=https://www.wenak.ps/car/61128.html&amp;src=sdkpreparse','newwindow','width=300,height=250'); return false;"
                                style="color: #888"><i class="fab fa-twitter" style="font-size: 18px;"></i></a>
                        </li>
                        <li class="f-right px-2 py-1" style="font-size: 14px;">
                            <a onclick="window.open('https://api.whatsapp.com/send?text=https://www.wenak.ps/car/61128.html','newwindow','width=1200,height=450'); return false;"
                                style="color: #888"><i class="fab fa-whatsapp" aria-hidden="true"
                                    style="font-size: 18px;"></i></a>
                        </li>
                        <li class="f-right px-2 py-1" style="font-size: 14px;">
                            <a onclick="window.open('https://mail.google.com/mail/?view=cm&amp;fs=1&amp;tf=1&amp;to=&amp;su=وينك من زمان - سيات | SEAT ابيزا 2009&amp;body=سيات | SEAT ابيزا 2009 https://www.wenak.ps/car/61128.html&amp;ui=2&amp;tf=1&amp;pli=','newwindow','width=1200,height=450'); return false;"
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
                                <img class="first-img img-fluid" src="{{ url('assets/admin/images/shopes.jpg') }}"
                                    alt="سيات | SEAT ابيزا 2009" title="سيات | SEAT ابيزا 2009"
                                    style="max-width:150px;height:100%">
                            </div>
                            <div class="media-body px-3 pt-1" style="">
                                <span style="color: #ff9800;  font-size: 13px ;font-weight: 700"><i
                                        class="fas  fa-map-marker-alt" style="    font-size: small;"></i> رام الله
                                    والبيرة </span>
                                <h5 class="mt-2 title" style="    font-size: 1.1rem;font-family:Tajawal">هاتف منفصل
                                    للبيع</h5>
                                <li class="old-price not-cut d-block d-lg-none">سعر غير محدد</li>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 border-right-dd border-right ">
                        <div class="">

                            <div class="">
                                <ul>
                                    <li class="old-price not-cut d-none d-lg-block" style="font-size: 20px;">سعر غير
                                        محدد</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

>>>>>>> Stashed changes
    <div class="w-100">
        <div class="row list-product m-0px list-product-details" style="display: inline;">
            <div class="row details" style="padding: 0;margin-right: 0px;margin-left: 0px;">
                {{--
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
                            style="font-family:Tajawal;line-height:48px;text-align:center;">بيانات الاعلان</h5>
                    </div>
                    <div class="d-block d-lg-none">
                        <table class="table ">
                            <tbody style="font-weight:500">

                                <tr>
                                    <td>الموديل</td>
                                    <td>بيت لحم - جنوب بيت لحم </td>
                                </tr>
                                <tr>
                                    <td>الحالة</td>
                                    <td>9/10</td>
                                </tr>
                                <tr>
                                    <td>عدد الشرائح</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>حجم الشاشة</td>
                                    <td>700 بوصة</td>
                                </tr>
                                <tr>
                                    <td>الكاميرات</td>
                                    <td>3 كاميرات</td>
                                </tr>
                                <tr>
                                    <td>الذاكرة</td>
                                    <td>4 جيغا</td>
                                </tr>
                                <tr>
                                    <td>التخزين</td>
                                    <td>46 جيغا</td>
                                </tr>
                                <tr>
                                    <td>العنوان</td>
                                    <td>....</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <br>
                    <div class="d-none d-lg-block">
                        <div class="row mb-20px">
                            <div class="col-xl-12 col-md-12" style="line-height: 28px;">
                                <span><i class="fas fa-mobile-alt"></i> الموديل :</span> بيت لحم - جنوب بيت لحم
                            </div>

                            <div class="col-xl-12 col-md-12" style="line-height: 28px;">
                                <span><i class="fas fa-star"></i> الحالة :</span> 9/10
                            </div>

                            <div class="col-xl-12 col-md-12" style="line-height: 28px;">
                                <span><i class="fas fa-sliders-h"></i> عدد الشرائح :</span> 2
                            </div>

                            <div class="col-xl-12 col-md-12" style="line-height: 28px;">
                                <span><i class="fas fa-tv"></i> حجم الشاشة :</span> 700 بوصة
                            </div>

                            <div class="col-xl-12 col-md-12" style="line-height: 28px;">
                                <span><i class="fas fa-camera"></i> الكاميرات :</span> 3 كاميرات
                            </div>

                            <div class="col-xl-12 col-md-12" style="line-height: 28px;">
                                <span><i class="fas fa-memory"></i> الذاكرة :</span> 4 جيغا
                            </div>

                            <div class="col-xl-12 col-md-12" style="line-height: 28px;">
                                <span><i class="fas fa-hdd"></i> التخزين :</span> 46 جيغا
                            </div>

                            <div class="col-xl-12 col-md-12" style="line-height: 28px;">
                                <span><i class="fas fa-map-marker-alt"></i> العنوان :</span> بيت لحم - جنوب بيت لحم
                            </div>
                        </div>
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
                                <a href="javascript:ReportModal(61128);">هل وجدت خطأ في الاعلان ؟</a>
                                <p>رقم الاعلان : 61128</p>
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
                                                        margin: auto;"><i class="fas fa-user"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 text-center mt-1">
                            <b style="color: #ff9800 ;font-size: 20px;" class="text-dark">Anas Musa</b>
                        </div>
                        <div class="col-md-12 text-center mt-3">
                            <table class="table table-striped table-sm">
                                <tbody style="font-weight:500">
                                    <tr>
                                        <td colspan="100%" style="font-size: 20px;">رقم الموبايل</td>
                                    </tr>
                                    <tr>
                                        <td><a dir="ltr" href="tel:0569838215" style="font-size: 20px;"> 0569838215 </a>
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
                            <a href="javascript:ReportModal(61128);">هل وجدت خطأ في الاعلان ؟</a>
                            <p>رقم الاعلان : 61128</p>
                        </div>
                </div>
                --}}

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
                            style="font-family:Tajawal;line-height:48px;text-align:center;">بيانات الاعلان</h5>
                    </div>
                    <div class="d-block d-lg-none">
                        <table class="table ">
                            <tbody style="font-weight:500">

                                <tr>
                                    <td>الموديل</td>
                                    <td>بيت لحم - جنوب بيت لحم </td>
                                </tr>
                                <tr>
                                    <td>الحالة</td>
                                    <td>9/10</td>
                                </tr>
                                <tr>
                                    <td>عدد الشرائح</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>حجم الشاشة</td>
                                    <td>700 بوصة</td>
                                </tr>
                                <tr>
                                    <td>الكاميرات</td>
                                    <td>3 كاميرات</td>
                                </tr>
                                <tr>
                                    <td>الذاكرة</td>
                                    <td>4 جيغا</td>
                                </tr>
                                <tr>
                                    <td>التخزين</td>
                                    <td>46 جيغا</td>
                                </tr>
                                <tr>
                                    <td>العنوان</td>
                                    <td>....</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <br>
                    <div class="d-none d-lg-block">
                        <div class="row mb-20px">
                            <div class="col-xl-12 col-md-12" style="line-height: 28px;">
                                <span><i class="fas fa-mobile-alt"></i> الموديل :</span> بيت لحم - جنوب بيت لحم
                            </div>

                            <div class="col-xl-12 col-md-12" style="line-height: 28px;">
                                <span><i class="fas fa-star"></i> الحالة :</span> 9/10
                            </div>

                            <div class="col-xl-12 col-md-12" style="line-height: 28px;">
                                <span><i class="fas fa-sliders-h"></i> عدد الشرائح :</span> 2
                            </div>

                            <div class="col-xl-12 col-md-12" style="line-height: 28px;">
                                <span><i class="fas fa-tv"></i> حجم الشاشة :</span> 700 بوصة
                            </div>

                            <div class="col-xl-12 col-md-12" style="line-height: 28px;">
                                <span><i class="fas fa-camera"></i> الكاميرات :</span> 3 كاميرات
                            </div>

                            <div class="col-xl-12 col-md-12" style="line-height: 28px;">
                                <span><i class="fas fa-memory"></i> الذاكرة :</span> 4 جيغا
                            </div>

                            <div class="col-xl-12 col-md-12" style="line-height: 28px;">
                                <span><i class="fas fa-hdd"></i> التخزين :</span> 46 جيغا
                            </div>

                            <div class="col-xl-12 col-md-12" style="line-height: 28px;">
                                <span><i class="fas fa-map-marker-alt"></i> العنوان :</span> بيت لحم - جنوب بيت لحم
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    
                    
                    
                    
                    <br>
                    <br>
                    
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
                                <a href="javascript:ReportModal(61128);">هل وجدت خطأ في الاعلان ؟</a>
                                <p>رقم الاعلان : 61128</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-xl-3 border-right border-md-top d-none d-lg-block d-xl-block" style="min-height: 230px;background-color: #fff;">
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
                        <b style="color: #ff9800 ;font-size: 20px;" class="text-dark">Anas Musa</b>
                    </div>
                    <div class="col-md-12 text-center mt-3">
                        <table class="table table-sm">
                            <tbody>
                                <tr>
                                    <td colspan="100%" style="font-size: 20px;">رقم الموبايل</td>
                                </tr>
                                <tr>
                                    <td><a dir="ltr" href="tel:0569838215" style="font-size: 20px;"> 0569838215 </a>
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
                        <a href="javascript:ReportModal(61128);">هل وجدت خطأ في الاعلان ؟</a>
                        <p>رقم الاعلان : 61128</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-100 px-1">
            <h5>اعلانات مشابهة</h5>
            <div class="row">
                @for ($i=0; $i < 6; $i++) <div class="col-6 col-xl-2 p-1">
                    <div class="card annonce-item"
                        style="border: 1px solid;border-color: #0000002b;border-radius: 5px;">
                        <a href="{{ asset('/admin/images/land.jpg') }}" class="gallery-popup"
                            style="height: 160px; width:100%">
                            <div class="project-item">
                                <div class="overlay-container">
                                    <img src="{{ asset('/admin/images/land.jpg') }}" alt="img" class=""
                                        style="height: 160px; width:100%">
                                    <div class="project-item-overlay text-right">
                                        <h4>عقارات</h4>
                                        <p>
                                            <img src="{{ asset('/admin/images/land.jpg') }}" alt="user"
                                                class="avatar-xs rounded-circle">
                                            <span class="ml-2">مارتينا جرجس</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">شقق</h4>
                        </div>
                    </div>
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
            </div>
            @endfor
        </div>
    </div>
<<<<<<< Updated upstream
<<<<<<< Updated upstream
@endsection
=======
=======
>>>>>>> Stashed changes
    <style>
    ul,
    table li {
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

<<<<<<< Updated upstream
    @endsection
>>>>>>> Stashed changes
=======
    @endsection
>>>>>>> Stashed changes
