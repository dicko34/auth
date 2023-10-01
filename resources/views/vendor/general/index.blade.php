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
                <form method="POST" action="{{ route("generals.search") }}">
                    @csrf
                    <div class="row m-2 mt-3">
                        <div class="col-4 col-sm-4">
                            <div class="form-group row">
                                <div class="col-12 m-0 p-0">
                                    <select name="category" class="form-control">
                                        <option selected disabeled>الأصناف</option>
                                        <option value="اثاث منزلي و مكتبي">اثاث منزلي و مكتبي</option>
                                        <option value="اجهزة الكترونية">اجهزة الكترونية</option>
                                        <option value="اجهزة انذار ومراقبة">اجهزة انذار ومراقبة</option>
                                        <option value="اجهزة طبية">اجهزة طبية</option>
                                        <option value="اجهزة كهربائية">اجهزة كهربائية</option>
                                        <option value="احذية">احذية</option>
                                        <option value="ادوات رياضية">ادوات رياضية</option>
                                        <option value="ادوات صحية">ادوات صحية</option>
                                        <option value="ادوات منزلية">ادوات منزلية</option>
                                        <option value="ازهار واشتال ونباتات">ازهار واشتال ونباتات</option>
                                        <option value="الات ومعدات">الات ومعدات</option>
                                        <option value="العاب">العاب</option>
                                        <option value="برامج كمبيوتر">برامج كمبيوتر</option>
                                        <option value="تجهيزات مكتبية">تجهيزات مكتبية</option>
                                        <option value="تحف وهدايا">تحف وهدايا</option>
                                        <option value="تكييف وتبريد">تكييف وتبريد</option>
                                        <option value="خلويات ولوازمها">خلويات ولوازمها</option>
                                        <option value="ديكور">ديكور</option>
                                        <option value="سجاد وموكيت">سجاد وموكيت</option>
                                        <option value="شحن وتخليص جمركي">شحن وتخليص جمركي</option>
                                        <option value="شروات وصفقات تجارية">شروات وصفقات تجارية</option>
                                        <option value="عطور">عطور</option>
                                        <option value="قرطاسية">قرطاسية</option>
                                        <option value="كمبيوتر ومستلزماته">كمبيوتر ومستلزماته</option>
                                        <option value="قطع سيارات">قطع سيارات</option>
                                        <option value="مجوهرات">مجوهرات</option>
                                        <option value="معدات ثقيلة">معدات ثقيلة</option>
                                        <option value="مفروشات">مفروشات</option>
                                        <option value="ملابس">ملابس</option>
                                        <option value="مواد تجميل">مواد تجميل</option>
                                        <option value="مواد غذائية">مواد غذائية</option>
                                        <option value="نظارات">نظارات</option>
                                        <option value="آلات موسيقية">آلات موسيقية</option>
                                        <option value="اتصالات">اتصالات</option>
                                        <option value="اكسسوارات ونثريات">اكسسوارات ونثريات</option>
                                        <option value="دورات تعليمية">دورات تعليمية</option>
                                        <option value="سيارات وتوابعها">سيارات وتوابعها</option>
                                        <option value="حيوانات">حيوانات</option>
                                        <option value="خدمات عامة">خدمات عامة</option>

                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Repeat the structure for other form groups -->

                        <div class="col-4 col-sm-4">
                            <div class="form-group row">
                                <div class="col-12 m-0 p-0">
                                    <input name="address"class="form-control" type="text" placeholder="مثال: التلفزيون">
                                </div>
                            </div>
                        </div>

                        <div class="col-4 col-sm-4">
                            <div class="form-group row">
                                <div  class="col-12 m-0 p-0">
                                    <select name="city" class="form-control">
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

        

<div class="row">
    <div class="card w-100">
        <div class="card-header m-0 p-0 w-100 d-inline-flex" style="height:60px;background:#262726 ;">

            <div class="h-100 text-white px-2" style="width:65%">
                <a href="/general" class="text-white">
                    <h3 class=""><i class="mdi mdi-view-module mr-2"></i> الإعلانات العامة </h3>
                </a>
            </div>


            <div class="h-100 mr-1 pt-1" style="width:34%;">
                <a href="{{route('general.add')}}" class="w-100 mx-auto btn mt-2 pt-1 px-1 btn-primary text-white"
                    style="height:33px;font-size: 11px;line-height:28px;max-width:100px;float:left !important;">

                    <i class="fa fa-plus-circle "></i>اضف اعلان جديد

                </a>
            </div>
        </div>
        <div class="row px-1" style="
            margin-left: 00px;
            margin-right: 0px;">

            @foreach ($generals as $general)
            <div class="col-6 col-xl-2 p-1">
                <div class="card annonce-item" style="border: 1px solid;border-color: #0000002b;border-radius: 5px;"">
                <button style="border: none; background: none;"class="p-0 m-0"
                    onclick="window.location.href = '{{route('general.product', ['general' => $general->id])}}'">          
                <a href=" {{  asset('assets/site/images/general/' . explode(',', $general->img)[0])}}" class="gallery-popup"
                    style="height: 160px; width:100%">
                    <div class="project-item">
                        <div class="overlay-container">
                            <img src="{{ asset('assets/site/images/general/' . explode(',', $general->img)[0]) }}" alt="img" class=""
                                style="height: 160px; width:100%">
                            <div class="project-item-overlay text-right">
                                <h4>{{$general->address}} </h4>
                                <p>
                                    <img src="{{ asset('assets/site/images/general/' . explode(',', $general->img)[0]) }}" alt="user"
                                        class="avatar-xs rounded-circle">
                                    <span class="ml-2">{{$general->advertiser_name}}</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    </a>
                    <div class="card-body">
                        <h4 class="card-title"> {{$general->address}}</h4>
                        <p class="card-text">
                            {{ $general->city }} {{ $general->address }} للبيع في
                            {{ $general->model }} اعلان
                        </p>
                    </div>
                </div>
            </button>
        </div>
        @endforeach

    </div>
    {{ $generals->links('vendor.paginate') }}
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