@extends("layouts.admin")
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
            padding: 20px 20px !important;
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
        .table td,
        .table th {
            padding: .2rem;
            vertical-align: middle;
        }

    </style>
    <div class="row mt-4 mb-5">
        <div class="col-lg-12 col-12">
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
            <div class="row mt-3">
                <div class="col-12 text-center">
                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit">قبول
                        الأعلان</button>
                        <button class="btn btn-primary w-md waves-effect waves-light" type="submit">رفض
                            الأعلان</button>
                </div>
            </div>
        </div>
        
    </div>
    
    
@endsection
