@extends("layouts.vendor")
@section('pageTitle', 'Koala Web Libraries')
@section('styleChart')
<link href="{{ asset('assets/admin/libs/c3/c3.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
@endsection
@section('content')

<div class="row">
    <div class="col-lg-9 col-12">
        <div class="row">
            <div class="card w-100">
                <form method="POST" action="{{ route("car.search") }}">
                    @csrf
                    <div class="row m-2 mt-3">
                        <div class="col-4 col-sm-4">
                            <div class="form-group row">
                                <div class="col-12 m-0 p-0">
                                    <select class="form-control">
                                        <option value="">الأصناف</option>
                                        <option value="1">اثاث منزلي و مكتبي</option>
                                        <option value="2">اجهزة الكترونية</option>
                                        <option value="3">اجهزة انذار ومراقبة</option>
                                        <option value="4">اجهزة طبية</option>
                                        <option value="5">اجهزة كهربائية</option>
                                        <option value="6">احذية</option>
                                        <option value="7">ادوات رياضية</option>
                                        <option value="8">ادوات صحية</option>
                                        <option value="9">ادوات منزلية</option>
                                        <option value="10">ازهار واشتال ونباتات</option>
                                        <option value="11">الات ومعدات</option>
                                        <option value="12">العاب</option>
                                        <option value="13">برامج كمبيوتر</option>
                                        <option value="14">تجهيزات مكتبية</option>
                                        <option value="15">تحف وهدايا</option>
                                        <option value="16">تكييف وتبريد</option>
                                        <option value="21">خلويات ولوازمها</option>
                                        <option value="25">ديكور</option>
                                        <option value="26">سجاد وموكيت</option>
                                        <option value="29">شحن وتخليص جمركي</option>
                                        <option value="30">شروات وصفقات تجارية</option>
                                        <option value="31">عطور</option>
                                        <option value="32">قرطاسية</option>
                                        <option value="34">كمبيوتر ومستلزماته</option>
                                        <option value="35">قطع سيارات</option>
                                        <option value="36">مجوهرات</option>
                                        <option value="37">معدات ثقيلة</option>
                                        <option value="38">مفروشات</option>
                                        <option value="39">ملابس</option>
                                        <option value="40">مواد تجميل</option>
                                        <option value="41">مواد غذائية</option>
                                        <option value="42">نظارات</option>
                                        <option value="43">آلات موسيقية</option>
                                        <option value="44">اتصالات</option>
                                        <option value="45">اكسسوارات ونثريات</option>
                                        <option value="46">دورات تعليمية</option>
                                        <option value="47">سيارات وتوابعها</option>
                                        <option value="49">حيوانات</option>
                                        <option value="48">خدمات عامة</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Repeat the structure for other form groups -->

                        <div class="col-4 col-sm-4">
                            <div class="form-group row">
                                <div class="col-12 m-0 p-0">
                                    <input class="form-control" type="text" placeholder="مثال: التلفزيون">
                                </div>
                            </div>
                        </div>

                        <div class="col-4 col-sm-4">
                            <div class="form-group row">
                                <div class="col-12 m-0 p-0">
                                    <select class="form-control">
                                        <option selected="" disabeled="">المحافظة</option>
                                        <option value="1">رام الله والبيرة </option>
                                        <option value="2">القدس </option>
                                        <option value="14">قطاع غزة </option>
                                        <option value="4">الخليل </option>
                                        <option value="5">بيت لحم </option>
                                        <option value="6">أريحا </option>
                                        <option value="7">سلفيت وبديا </option>
                                        <option value="13">روابي </option>
                                        <option value="12">طوباس </option>
                                        <option value="11">قلقيلية </option>
                                        <option value="10">طولكرم </option>
                                        <option value="9">جنين </option>
                                        <option value="8">نابلس </option>
                                        <option value="15">جميع الاماكن </option>
                                        <option value="16">مناطق الداخل </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 text-center">
                            <button class="btn btn-primary w-md waves-effect waves-light mb-2" type="submit">بحث
                                الان</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>

        {{-- <div class="row">
        <div class="card w-100">
            <div class="body-card m-5">
                <div class="row">
                    <h3 class="mb-4 col-6"><i class="fas fa-star mr-2"></i> الاعلانات المميزة </h3>
                    <div class="col-6 text-right">
                        <a href="{{ route('choseAdd') }}" class="btn btn-primary w-md waves-effect waves-light" >أضافة
        أعلان هنا</a>
    </div>
</div>
<div class="row">

    @for ($i = 0; $i < 4; $i++) <div class="col-md-6 col-lg-6 col-xl-3">
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
</div> --}}

<div class="row">
    <div class="card w-100">
        <div class="card-header m-0 p-0 w-100 d-inline-flex" style="height:60px;background:#262726 ;">

            <div class="h-100 text-white px-2" style="width:65%">
                <a href="/general" class="text-white">
                    <h3 class=""><i class="mdi mdi-view-module mr-2"></i> الإعلانات العامة </h3>
                </a>
            </div>


            <div class="h-100 mr-1 pt-1" style="width:34%;">
                <button class="w-100 mx-auto btn mt-2 pt-1 px-1 btn-primary text-white"
                    style="height:33px;font-size: 11px;line-height:28px;max-width:100px;float:left !important;">

                    <i class="fa fa-plus-circle "></i>اضف اعلان جديد

                </button>
            </div>
        </div>
        <div class="row px-1" style="
            margin-left: 00px;
            margin-right: 0px;">

            @for ($i=0; $i < 8; $i++) <div class="col-6 col-xl-2 p-1">
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