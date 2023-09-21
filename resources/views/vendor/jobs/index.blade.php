@extends("layouts.vendor")
@section('pageTitle', 'Koala Web Libraries')
@section('styleChart')
<link href="{{ asset('assets/admin/libs/c3/c3.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
@endsection
@section('content')

<div class="row">
    <div class="col-lg-9 col-12 mx-auto">
        <div class="row">
            <div class="card w-100">
                <div class="body-card m-2">
                    <form method="POST" action="{{ route("jobs.search") }}">
                        @csrf
                        <div class="row m-1">
                            <div class="col-6 col-sm-4">
                                <div class="form-group row">
                                    <div class="col-12 m-0 p-0">
                                        <select name="category" class="form-control" required="">
                                            <option value="" selected="" class="d-none">التخصص</option>
                                            <option value="6">تصميم الأزياء و الخياطة</option>
                                            <option value="7">مدرس\ة</option>
                                            <option value="8">تكنولوجيا المعلومات</option>
                                            <option value="9">ادارة مشاريع</option>
                                            <option value="10">اتمتة صناعية</option>
                                            <option value="11">احياء</option>
                                            <option value="12">اخصائي/ة سمع و نطق</option>
                                            <option value="13">اخصائي/ة تغذية</option>
                                            <option value="14">امين مستودع</option>
                                            <option value="16">علوم انسانية و اجتماعية</option>
                                            <option value="17">تسويق ومبيعات</option>
                                            <option value="18">علاقات عامة والاتصال والتواصل</option>
                                            <option value="19">صحافة واعلام</option>
                                            <option value="20">تخصصات أخرى</option>
                                            <option value="21">عمليات الدعم اللوجستي</option>
                                            <option value="22">قانون ومحاماة</option>
                                            <option value="23">فندقة وسياحة وسفر</option>
                                            <option value="24">طب وتمريض وصيدلة</option>
                                            <option value="25">تصميم داخلي</option>
                                            <option value="26">لغات وترجمة</option>
                                            <option value="27">محاسبة وعلوم مالية</option>
                                            <option value="28">هندسة</option>
                                            <option value="29">تعليم وتدريب</option>
                                            <option value="30">ثقافة وفنون</option>
                                            <option value="31">ادارة أعمال</option>
                                            <option value="32">بائع/ة</option>
                                            <option value="33">بصريات</option>
                                            <option value="34">تحليل مخبري</option>
                                            <option value="35">تخدير</option>
                                            <option value="36">تدريب سياقة</option>
                                            <option value="37">تربية اطفال</option>
                                            <option value="38">تصنيع غذائي</option>
                                            <option value="39">حراسة</option>
                                            <option value="40">حدادة</option>
                                            <option value="41">حلاقة</option>
                                            <option value="42">خباز و صانع حلويات</option>
                                            <option value="43">دهان</option>
                                            <option value="44">سائق</option>
                                            <option value="45">سكرتير/ة</option>
                                            <option value="46">صياغة مجوهرات</option>
                                            <option value="47">طب بيطري</option>
                                            <option value="48">عامل بناء</option>
                                            <option value="49">تجميل</option>
                                            <option value="50">فني ميكانيك وكهربائي سيارات</option>
                                            <option value="51">كيمياء</option>
                                            <option value="52">مدرب/ة رياضة</option>
                                            <option value="53">مصور/ة</option>
                                            <option value="54">منقذ/ة</option>
                                            <option value="55">مزارع/ة</option>
                                            <option value="56">فني تكييف</option>
                                            <option value="57">عامل/ة نظافة</option>
                                            <option value="58">علاج طبيعي</option>
                                            <option value="59">فني ألمنيوم</option>
                                            <option value="60">فني كهرباء</option>
                                            <option value="61">فني مصاعد</option>
                                            <option value="62">طباخ/ة</option>
                                            <option value="63">عامل/ة</option>
                                            <option value="64">نجارة وصناعة الاثاث</option>
                                            <option value="65">مسؤول برنامج</option>
                                            <option value="66">مشرف\ة</option>
                                            <option value="67">مندوب\ة مبيعات</option>
                                            <option value="68">جزار</option>
                                            <option value="69">تنجيد كنب</option>
                                            <option value="70">فني صيانة</option>
                                            <option value="71">سفرجي\ة</option>
                                            <option value="72">عدة تخصصات</option>
                                            <option value="73">موظف\ة استقبال</option>
                                            <option value="74">معلم شاورما</option>
                                            <option value="75">معلم مشاوي</option>
                                            <option value="76">جرافيكس</option>
                                            <option value="77">باحث</option>
                                            <option value="78">موظف/ة</option>
                                            <option value="79">كاشير</option>
                                            <option value="81">مدبرة منزل</option>
                                            <option value="82">فني الكترونيات</option>
                                            <option value="83">مبرمج/ة</option>
                                            <option value="84">ادخال بيانات</option>
                                            <option value="85">فني كاميرات</option>
                                            <option value="86">تجليس و دهان سيارات</option>
                                            <option value="87">موظف\ة باريستا</option>
                                            <option value="88">مدرب\ة</option>
                                            <option value="89">فني اتصالات</option>
                                            <option value="90">مساعد\ة ادارية</option>
                                            <option value="91">تربية خاصة</option>
                                            <option value="92">فني طباعة</option>
                                            <option value="93">اخرى</option>
                                            <option value="94">أمين صندوق</option>
                                            <option value="95">مروج/ة</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Repeat the structure for other form groups -->

                            <div class="col-6 col-sm-4">
                                <div class="form-group row">
                                    <div class="col-12 m-0 p-0">
                                        <select class="form-control">
                                            <option> الدوام</option>
                                            <option>كلي</option>
                                            <option>جزئي</option>
                                            <option value="دوام ليلي">دوام ليلي</option>
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

        <div class="">
            <div class="row">
                <div class="col-lg-9 col-sm-12" style="
                    padding-left: 0px;
                    padding-right: 0px;">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header m-0 p-0 w-100 d-inline-flex"
                                    style="height:60px;background:#262726;">

                                    <div class="h-100 text-white px-2" style="width:65%">
                                        <a href="/homes" class="text-white">
                                            <h3><i class="fas fa-user-friends mr-2"></i> توظيف </h3>
                                        </a>
                                    </div>

                                    <div class="h-100 mr-1 pt-1" style="width:34%;">
                                        <button class="w-100 mx-auto btn mt-2 pt-1 px-1 btn-primary text-white"
                                            style="height:33px;font-size: 11px;line-height:28px;max-width:100px;float:left !important;">
                                            <i class="fa fa-plus-circle "></i>اضف اعلان جديد
                                        </button>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-6">
                                        <table class="table table-striped table-bordered">
                                            <thead class="bg-blue text-white">
                                                <tr class="bg-primary">
                                                    <th style="font-family: 'Tajawal';">الشركة</th>
                                                    <th style="font-family:'Tajawal';">التخصص</th>
                                                    <th style="font-family:'Tajawal';">المدينه</th>
                                                </tr>
                                            </thead>
                                            <tbody>
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
                                                <tr>
                                                    <td>SonaTrack</td>
                                                    <td style="vertical-align: middle;"><a style="color:#000;"
                                                            href="https://www.wenak.ps/job/46383.html">محاضر</a></td>
                                                    <td style="vertical-align: middle;">نابلس</td>
                                                </tr>
                                                <tr>
                                                    <td>SonaTrack</td>
                                                    <td style="vertical-align: middle;"><a style="color:#000;"
                                                            href="https://www.wenak.ps/job/46375.html">معلم/ة</a></td>
                                                    <td style="vertical-align: middle;">قطاع غزة</td>
                                                </tr>
                                            </tbody>
                                        </table>


                                    </div>
                                    <div class="col-lg-6">
                                        <table class="table table-striped table-bordered">
                                            <thead class="d-lg-table d-none bg-primary text-white">
                                                <tr>

                                                    <th style="font-family: 'Tajawal';">الشركة</th>
                                                    <th style="font-family: 'Tajawal';">التخصص</th>
                                                    <th style="font-family: 'Tajawal';">المدينة</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>

                                                    <td>SonaTrack</td>
                                                    <td><a style="color:#000;"
                                                            href="https://www.wenak.ps/job/46388.html">محاضر</a></td>
                                                    <td>قطاع غزة</td>
                                                </tr>
                                                <tr>

                                                    <td>SonaTrack</td>
                                                    <td><a style="color:#000;"
                                                            href="https://www.wenak.ps/job/46387.html">مساعد شوفير</a>
                                                    </td>
                                                    <td>الخليل</td>
                                                </tr>
                                                <tr>

                                                    <td>SonaTrack</td>
                                                    <td><a style="color:#000;"
                                                            href="https://www.wenak.ps/job/46383.html">محاضر</a></td>
                                                    <td style="vertical-align: middle;">نابلس</td>
                                                </tr>
                                                <tr>

                                                    <td>SonaTrack</td>
                                                    <td><a style="color:#000;"
                                                            href="https://www.wenak.ps/job/46375.html">معلم/ة</a></td>
                                                    <td>قطاع غزة</td>
                                                </tr>
                                            </tbody>
                                        </table>


                                        <div class="col-12">
                                            <nav aria-label="..." class="w-100 m-auto">
                                                <ul class="pagination">
                                                    <li class="page-item disabled">
                                                        <a class="page-link" href="#" tabindex="-1">السابق</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item active">
                                                        <a class="page-link" href="#">2 <span
                                                                class="sr-only">(current)</span></a>
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
    h6,
    th {
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

        table thead {
            font-size: 15px !important;
            font-weight: 700 !important;
        }

        table {
            font-size: 14px !important;
        }
    }
    </style>

    @endsection