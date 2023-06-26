@extends("layouts.vendor")
@section('pageTitle', 'Koala Web Libraries')
@section('styleChart')
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
            </div>
        </div>
    </div>
@endsection
