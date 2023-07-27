@extends("layouts.vendor")
@section('pageTitle', 'Koala Web Libraries')
@section('styleChart')
    <link href="{{ asset('assets/admin/libs/c3/c3.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <script type="text/javascript"
        src="https://platform-api.sharethis.com/js/sharethis.js#property=6063a4476f7ab900129cec66&product=inline-share-buttons"
        async="async"></script>
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
                                                هونداي اكسنت
                                            </h2>
                                            <h5 class="smallColor mt-3">
                                                موديل سنة 2007
                                            </h5>
                                            <h5 class="maincolor">1800 شيكل</h5>
                                        </div>
                                        <div>
                                            <div class="apsc-icons-wrapper clearfix apsc-theme-4">

                                                <div class="sharethis-inline-share-buttons"></div>

                                            </div>
                                        </div>

                                        <div class="row m-2">
                                            <div class="col-4">
                                                <a href="{{ asset('assets/admin/images/car.jpeg') }}"
                                                    class="gallery-popup" style="height: 100px; width:100%">
                                                    <div class="project-item">
                                                        <div class="overlay-container">
                                                            <img src="{{ asset('assets/admin/images/car.jpeg') }}"
                                                                alt="img" class="gallery-thumb-img m-0"
                                                                style="height: 100px; width:100%">
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a href="{{ asset('assets/admin/images/car.jpeg') }}"
                                                    class="gallery-popup" style="height: 100px; width:100%">
                                                    <div class="project-item">
                                                        <div class="overlay-container">
                                                            <img src="{{ asset('assets/admin/images/car.jpeg') }}"
                                                                alt="img" class="gallery-thumb-img m-0"
                                                                style="height: 100px; width:100%">
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a href="{{ asset('assets/admin/images/car.jpeg') }}"
                                                    class="gallery-popup" style="height: 100px; width:100%">
                                                    <div class="project-item">
                                                        <div class="overlay-container">
                                                            <img src="{{ asset('assets/admin/images/car.jpeg') }}"
                                                                alt="img" class="gallery-thumb-img m-0"
                                                                style="height: 100px; width:100%">
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                        {{-- <div class="col-12 mt-4">
                            <ul class="nav nav-tabs " id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active maincolor  btn-primary" id="home-tab" data-toggle="tab"
                                        href="#home" role="tab" aria-controls="home" aria-selected="true">الوصف</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link maincolor btn-primary" id="profile-tab" data-toggle="tab"
                                        href="#profile" role="tab" aria-controls="profile"
                                        aria-selected="false">الأضافات</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link maincolor btn-primary" id="contact-tab" data-toggle="tab"
                                        href="#contact" role="tab" aria-controls="contact" aria-selected="false">معلومات
                                        أضافية</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link maincolor btn-primary" id="seller-tab" data-toggle="tab"
                                        href="#seller" role="tab" aria-controls="seller" aria-selected="false">المُعلن</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 mt-4">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="m-lg-4 row">
                                        <div class="col-sm-4 col-lg-2 col-md-3 m-2">
                                            <div class="smallColor">لون السيارة : أخضر</div>
                                        </div>
                                        <div class="col-sm-4 col-lg-2 col-md-3 m-2">
                                            <div class="smallColor">نوع الوقود : بنزين</div>
                                        </div>
                                        <div class="col-sm-4 col-lg-2 col-md-3 m-2">
                                            <div class="smallColor">أصل السيارة : خصوصي</div>
                                        </div>
                                        <div class="col-sm-4 col-lg-2 col-md-3 m-2">
                                            <div class="smallColor">رخصة السيارة : فيلسطينية</div>
                                        </div>
                                        <div class="col-sm-4 col-lg-2 col-md-3 m-2">
                                            <div class="smallColor">نوع الجير : عادي</div>
                                        </div>
                                        <div class="col-sm-4 col-lg-2 col-md-3 m-2">
                                            <div class="smallColor">الزجاج : الكتروني</div>
                                        </div>

                                        <div class="col-sm-4 col-lg-2 col-md-3 m-2">
                                            <div class="smallColor">قوة الماتور : 1400</div>
                                        </div>
                                        <div class="col-sm-4 col-lg-2 col-md-3 m-2">
                                            <div class="smallColor">عداد السيارة : 150</div>
                                        </div>
                                        <div class="col-sm-4 col-lg-2 col-md-3 m-2">
                                            <div class="smallColor">عدد الركاب : 4 + 1</div>
                                        </div>
                                        <div class="col-sm-4 col-lg-2 col-md-3 m-2">
                                            <div class="smallColor">الدفع : دفع أمامي </div>
                                        </div>
                                        <div class="col-sm-4 col-lg-2 col-md-3 m-2">
                                            <div class="smallColor">وسيلة الدفع : نقدا فقط </div>
                                        </div>
                                        <div class="col-sm-4 col-lg-2 col-md-3 m-2">
                                            <div class="smallColor">معروضة : للبيع فقط </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="m-4">
                                        <ul class="list-unstyled m-3">
                                            <li>
                                                <ul>
                                                    <li class="m-2">مُكيّف</li>
                                                    <li class="m-2">إغلاق مركزي</li>
                                                    <li class="m-2">جهاز إنذار </li>
                                                    <li class="m-2">مسجل CD</li>
                                                    <li class="m-2">جنطات مغنيسيوم</li>
                                                    <li class="m-2">فرش جلد</li>
                                                </ul>
                                            </li>
                                        </ul>
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
                                            <div class="smallColor"> رقم الهاتف : خصوصي</div>
                                        </div>
                                        <div class="col-sm-12 col-lg-4 col-md-3 m-2">
                                            <div class="smallColor"> رقم الموبايل : 77778787</div>
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
                    </div> --}}


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
                            <td class="">اللون</td>
                            <td class=""> أخضر </td>
                        </tr>
                        <tr>
                            <td class="">أصل السيارة</td>
                            <td class=""> خصوصي </td>
                        </tr>
                        <tr>
                            <td class="">رخصة السيارة</td>
                            <td class=""> فلسطينية </td>
                        </tr>
                        <tr>
                            <td class="">نوع الوقود</td>
                            <td class=""> ديزل </td>
                        </tr>
                        <tr>
                            <td class="">نوع الجير</td>
                            <td class=""> اوتوماتيك </td>
                        </tr>
                        <tr>
                            <td class="">قوة الماتور</td>
                            <td class=""> 2200 </td>
                        </tr>
                        <tr>
                            <td class="">الزجاج</td>
                            <td class=""> الكتروني </td>
                        </tr>
                        <tr>
                            <td class="">عدد الركاب</td>
                            <td class=""> 6 </td>
                        </tr>
                        <tr>
                            <td class="">معروضة</td>
                            <td class=""> للبيع </td>
                        </tr>
                        <tr>
                            <td class="">وسيلة الدفع</td>
                            <td class=""> إمكانية التقسيط </td>
                        </tr>
                        <tr>
                            <td class="">إضافات</td>
                            <td class="">
                                <ul class="list-unstyled m-3 text-left">
                                    <li>
                                        <ul>
                                            <li class="m-2">مُكيّف</li>
                                            <li class="m-2">إغلاق مركزي</li>
                                            <li class="m-2">جهاز إنذار </li>
                                            <li class="m-2">مسجل CD</li>
                                            <li class="m-2">جنطات مغنيسيوم</li>
                                            <li class="m-2">فرش جلد</li>
                                        </ul>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="" colspan="2">
                                <ul class="list-unstyled m-3 text-left">
                                    <li>
                                        <ul>
                                            <li class="m-2">مُكيّف</li>
                                            <li class="m-2">إغلاق مركزي</li>
                                            <li class="m-2">جهاز إنذار </li>
                                            <li class="m-2">مسجل CD</li>
                                            <li class="m-2">جنطات مغنيسيوم</li>
                                            <li class="m-2">فرش جلد</li>
                                        </ul>
                                    </li>
                                </ul>
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
                            <td class=""> مارتينا جرجس </td>
                        </tr>
                        <tr>
                            <td class="">العنوان</td>
                            <td class=""> الخليل - شارع السلام </td>
                        </tr>
                        <tr>
                            <td class="">رقم الهاتف</td>
                            <td class=""> 12345678 </td>
                        </tr>
                        <tr>
                            <td class="">موبايل</td>
                            <td class=""> 1234567 </td>
                        </tr>
                        <tr>
                            <td class="">البريد الالكتروني</td>
                            <td class=""> 1123@nnn.com </td>
                        </tr>
                        <tr>
                            <td class=""> تاريخ نشر الاعلان</td>
                            <td class=""> 11-11-2022 </td>
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

                            @for ($i = 0; $i < 4; $i++)
                                <div class="col-12 p-0 bordertoty">
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
                                                            <img src="{{ asset('assets/admin/images/car.jpeg') }}"
                                                                alt="user" class="avatar-xs rounded-circle">
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
@endsection
