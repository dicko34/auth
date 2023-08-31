@extends("layouts.vendor")
@section('pageTitle', 'Koala Web Libraries')
@section('styleChart')
<link href="{{ asset('assets/admin/libs/c3/c3.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<style>
.form-group {
    margin-bottom: 0rem;
}
</style>
<div class="row ">
    <div class="col-lg-9 col-12">
        <div class="row">
            <div class="card w-100">
                <div class="body-card m-1 mb-3">

                    <form method="POST" action="{{ route("car.search") }}">
                        @csrf
                        <div class="row m-1">
                            <div class="col-12 col-sm-4">
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




                            <!-- Repeat the structure for the remaining form groups -->

                            <div class="col-4">
                                <div class="form-group row">
                                    <div class="col-12 m-0 p-0">
                                        <select name="house_type" class="form-control" type="text">
                                            <option value="" selected disabled> العقار</option>
                                            <option value="شقه">شقه</option>
                                            <option value="منزل منفصل">منزل منفصل</option>
                                            <option value="رووف">رووف</option>
                                            <option value="فيلا">فيلا</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="form-group row">
                                    <div class="col-12 m-0 p-0">
                                        <select name="rooms" class="form-control" type="text">
                                            <option value="" selected disabled> الغرف</option>
                                            <option value="1">غرفة واحدة - ستوديو</option>
                                            <option value="2">غرفتين</option>
                                            <option value="3">ثلاث غرف</option>
                                            <option value="4">اربع غرف</option>
                                            <option value="5">خمس غرف</option>
                                            <option value="6">أكثر من خمس غرف</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="form-group row">
                                    <div class="col-12 m-0 p-0">
                                        <select name="house_status" class="form-control" type="text">
                                            <option value="" selected disabled> الحالة </option>
                                            <option value="مفروشه">مفروشة</option>
                                            <option value="غير مفروشه">غير مفروشة</option>
                                            <option value="عظم">عظم</option>
                                            <option value="مشطب">مشطب</option>
                                            <option value="مشتركة">مشتركة</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group row">
                                    <div class="col-12 m-0 p-0">
                                        <select class="form-control">
                                            <option selected disabled>العروض</option>
                                            <option>لل للبيع</option>
                                            <option>للايجار</option>
                                        </select>
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

        <div class="row">
            <div class="card w-100">
                <div class="card-header m-0 p-0 w-100 d-inline-flex" style="height:60px;background:#262726 ;">

                    <div class="h-100 text-white px-2" style="width:65%">
                        <a href="/general" class="text-white">
                            <h3><i class="mdi mdi-car-side mr-2"></i> شقق </h3>
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
                                    <th style="font-family: 'Tajawal';">نوع العقار</th>
                                    <th style="font-family: 'Tajawal';">نوع العقد</th>
                                    <th style="font-family: 'Tajawal';">المدينة</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>شقة</td>
                                    <td><a style="color:#000;" href="https://www.example.com/job/1.html"> للايجار</a>
                                    </td>
                                    <td>رام الله</td>
                                </tr>
                                <tr>
                                    <td>منزل منفصل</td>
                                    <td><a style="color:#000;" href="https://www.example.com/job/2.html"> للبيع</a>
                                    </td>
                                    <td>القدس</td>
                                </tr>
                                <tr>
                                    <td>شقة</td>
                                    <td><a style="color:#000;" href="https://www.example.com/job/3.html"> للايجار</a>
                                    </td>
                                    <td>نابلس</td>
                                </tr>
                                <tr>
                                    <td>منزل منفصل</td>
                                    <td><a style="color:#000;" href="https://www.example.com/job/4.html"> للبيع</a>
                                    </td>
                                    <td>الخليل</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">شقة</td>
                                    <td style="vertical-align: middle;"><a style="color:#000;"
                                            href="https://www.example.com/job/1.html"> للايجار</a></td>
                                    <td>جنين</td>
                                </tr>
                                <tr>
                                    <td>منزل منفصل</td>
                                    <td><a style="color:#000;" href="https://www.example.com/job/2.html"> للبيع</a>
                                    </td>
                                    <td>بيت لحم</td>
                                </tr>
                                <tr>
                                    <td>شقة</td>
                                    <td><a style="color:#000;" href="https://www.example.com/job/3.html"> للايجار</a>
                                    </td>
                                    <td>قلقيلية</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">منزل منفصل</td>
                                    <td style="vertical-align: middle;"><a style="color:#000;"
                                            href="https://www.example.com/job/4.html"> للبيع</a></td>
                                    <td>سلفيت وبديا</td>
                                </tr>
                            </tbody>
                        </table>






                    </div>
                    <div class="col-lg-6">



                        <div class="col-12">
                            <nav aria-label="..." class="w-100 m-auto">
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