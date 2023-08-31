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
<div class="row px-3">
    <div class="col-lg-9 col-12">
        <div class="row">
            <div class="card w-100">
                <div class="body-card m-1 mt-3 mb-3">

                    <form method="POST" action="{{ route("lands.search") }}">
                        @csrf
                        <div class="row m-1">
                            <div class="col-12 col-sm-4">
                                <div class="form-group row">
                                    <div class="col-4 m-0 p-0">
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

                                    <div class="col-sm-4 col-4  m-0 p-0">
                                        <select class="form-control">
                                            <option selected disabeled> المعروض</option>
                                            <option>محل</option>
                                            <option>مكتب</option>
                                            <option>مخزن</option>
                                        </select>
                                    </div>

                                    <div class="col-sm-4 col-4  m-0 p-0">
                                        <select class="form-control">
                                            <option selected disabeled> العقد</option>
                                            <option>للبيع</option>
                                            <option>للايجار</option>
                                        </select>
                                    </div>

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

    <div class="row ">
        <div class="card w-100">
            <div class="m-0 p-0 px-2 x  d-inline-flex" style="height:60px;background:#262726 ;">

                <div class="h-100 text-white px-2" style="width:65%">
                    <a href="/general" class="text-white">
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
            <div class="row mt-3">
                <div class="col-lg-6">
                    <table class="table table-striped table-bordered">
                        <thead class="bg-blue text-white">
                            <tr class="bg-primary">
                                <th style="font-family: 'Tajawal';">النبذة</th>
                                <th style="font-family: 'Tajawal';">نوع العقد</th>
                                <th style="font-family: 'Tajawal';">المدينة</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>محل تجاري في وسط رام الله.</td>
                                <td>للبيع</td>
                                <td>رام الله</td>
                            </tr>
                            <tr>
                                <td>مخزن كبير للبيع في القدس الشرقية.</td>
                                <td>للبيع</td>
                                <td>القدس</td>
                            </tr>
                            <tr>
                                <td>محل صغير مميز في وسط نابلس.</td>
                                <td>للإيجار</td>
                                <td>نابلس</td>
                            </tr>
                            <tr>
                                <td>مخزن للإيجار في منطقة الخليل التجارية.</td>
                                <td>للإيجار</td>
                                <td>الخليل</td>
                            </tr>
                            <tr>
                                <td>محل تجاري في قلقيلية.</td>
                                <td>للبيع</td>
                                <td>قلقيلية</td>
                            </tr>
                            <tr>
                                <td>مخزن ممتاز للإيجار في بيت لحم.</td>
                                <td>للإيجار</td>
                                <td>بيت لحم</td>
                            </tr>
                            <tr>
                                <td>محل تجاري في وسط جنين.</td>
                                <td>للبيع</td>
                                <td>جنين</td>
                            </tr>
                            <tr>
                                <td>مخزن كبير للإيجار في سلفيت وبديا.</td>
                                <td>للإيجار</td>
                                <td>سلفيت وبديا</td>
                            </tr>
                        </tbody>
                    </table>





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
</div>
<div class="col-00 col-lg-3">
    <div class="row m-1">
        <div class="card w-100">
            <div class="body-card m-3">
                <div class="row">
                    <h3 class="mb-4 col-6 ">اعلانات</h3>
                </div>
                <div class="row m-2 mb-2">

                    @for ($i = 0; $i < 4; $i++) <div class="col-12 p-0 bordertoty">
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
                                                <img src="{{ asset('assets/admin/images/car.jpeg') }}" alt="user"
                                                    class="avatar-xs rounded-circle">
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