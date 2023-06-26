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
                                                شقة للبيع
                                            </h2>
                                            <h5 class="smallColor mt-3">
                                                200 شيكل 
                                            </h5>
                                            <h5 class="maincolor">رام الله والبيرة - مدينة رام الله - بير نبالا</h5>
                                        </div>
                                        <div>
                                            <div class="apsc-icons-wrapper clearfix apsc-theme-4">

                                                <div class="sharethis-inline-share-buttons"></div>

                                            </div>
                                        </div>

                                        <div class="row m-2">
                                            <div class="col-4">
                                                <a href="{{ asset('assets/admin/images/home.jpg') }}"
                                                    class="gallery-popup" style="height: 100px; width:100%">
                                                    <div class="project-item">
                                                        <div class="overlay-container">
                                                            <img src="{{ asset('assets/admin/images/home.jpg') }}"
                                                                alt="img" class="gallery-thumb-img m-0"
                                                                style="height: 100px; width:100%">
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a href="{{ asset('assets/admin/images/home.jpg') }}"
                                                    class="gallery-popup" style="height: 100px; width:100%">
                                                    <div class="project-item">
                                                        <div class="overlay-container">
                                                            <img src="{{ asset('assets/admin/images/home.jpg') }}"
                                                                alt="img" class="gallery-thumb-img m-0"
                                                                style="height: 100px; width:100%">
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a href="{{ asset('assets/admin/images/home.jpg') }}"
                                                    class="gallery-popup" style="height: 100px; width:100%">
                                                    <div class="project-item">
                                                        <div class="overlay-container">
                                                            <img src="{{ asset('assets/admin/images/home.jpg') }}"
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
                            <td class="">العرض</td>
                            <td class=""> للبيع </td>
                        </tr>
                        <tr>
                            <td class="">نوع المنزل</td>
                            <td class=""> شقة </td>
                        </tr>
                        <tr>
                            <td class="">السعر</td>
                            <td class=""> 1000 شيكل </td>
                        </tr>
                        <tr>
                            <td class="">المساحة</td>
                            <td class=""> 124 متر مربع </td>
                        </tr>
                        <tr>
                            <td class="">مساحة الارض</td>
                            <td class="">  124 متر مربع  </td>
                        </tr>
                        <tr>
                            <td class="">عدد الغرف</td>
                            <td class=""> ثلاث غرف </td>
                        </tr>
                        <tr>
                            <td class="">الحالة</td>
                            <td class=""> عظم </td>
                        </tr>
                        <tr>
                        <tr>
                            <td class="">الصالة</td>
                            <td class=""> صالة كبيرة </td>
                        </tr>
                        <tr>
                            <td class="">عدد البرندات</td>
                            <td class=""> 6 </td>
                        </tr>
                        <tr>
                            <td class="">عدد الحمامات</td>
                            <td class=""> 6 </td>
                        </tr>
                        <tr>
                            <td class="">عدد المطابخ</td>
                            <td class=""> 6 </td>
                        </tr>
                        <tr>
                            <td class=""> يوجد موقف سيارات خاص </td>
                            <td class=""> نعم </td>
                        </tr> 
                        <tr>
                            <td class="">إضافات</td>
                            <td class="">
                                <ul class="list-unstyled m-3 text-left">
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
