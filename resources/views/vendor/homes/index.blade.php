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

                    <form method="POST" action="{{ route("homes.search") }}">
                        @csrf
                        <div class="row m-1">
                            <div class="col-12 col-sm-4">
                                <div class="form-group row">
                                    <div class="col-12 m-0 p-0">
                                        <select name="city" class="form-control">
                                            <option selected="" value="" disabeled="">المحافظة</option>
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

                            <div class="col-4">
                                <div class="form-group row">
                                    <div class="col-12 m-0 p-0">
                                        <select name="home_type" class="form-control" type="text">
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
                                        <select name="rooms_number" class="form-control" type="text">
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
                                        <select name="status" class="form-control" type="text">
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
                                        <select name="show" class="form-control">
                                            <option selected disabled>العروض</option>
                                            <option>لل للبيع</option>
                                            <option>للايجار</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <h3 class="mb-4 m-auto"><i class="mdi mdi-home mr-2"></i> اعلانات الشقق و المنازل </h3>
                        </div>
                        <form method="POST" action="{{ route('homes.search') }}">
                            @csrf
                            <div class="row m-1">
                                <div class="col-4">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">جميع الشركات</label>
                                        <div class="col-12 m-0 p-0">
                                            <select name="city" class="form-control">
                                                <option value="الكل">الكل</option>
                                                @foreach ($homes->unique('city') as $home)
                                                    <option value="{{ $home->city }}">{{ $home->city }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">الموديل</label>
                                        <div class="col-12 m-0 p-0">
                                            <select name="address" class="form-control">
                                                <option value="الكل">الكل</option>
                                                @foreach ($homes->unique('address') as $home)
                                                    <option value="{{ $home->address }}">{{ $home->address }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">المحافظة</label>
                                        <div class="col-12 m-0 p-0">
                                            <select name="street" class="form-control">
                                                <option value="الكل">الكل</option>
                                                @foreach ($homes->unique('street') as $home)
                                                    <option value="{{ $home->street }}">{{ $home->street }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">المحافظة</label>
                                        <div class="col-12 m-0 p-0">
                                            <select name="home_type" class="form-control">
                                                <option value="الكل">الكل</option>
                                                @foreach ($homes->unique('home_type') as $home)
                                                    <option value="{{ $home->home_type }}">{{ $home->home_type }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">من سنة</label>
                                        <div class="col-12 m-0 p-0">
                                            <select name="" class="form-control">
                                                <option value="الكل">الكل</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">نوع الجير</label>
                                        <div class="col-12 m-0 p-0">
                                            <select name="status" class="form-control">
                                                <option value="الكل">الكل</option>
                                                @foreach ($homes->unique('status') as $home)
                                                    <option value="{{ $home->status }}">{{ $home->status }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">العرض</label>
                                        <div class="col-12 m-0 p-0">
                                            <select name="show" class="form-control">
                                                <option value="الكل">الكل</option>
                                                @foreach ($homes->unique('show') as $home)
                                                    <option value="{{ $home->show }}">{{ $home->show }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <div class="row">
                        <div class="col-12 text-center">
                            <button class="btn btn-primary w-md waves-effect waves-light" type="submit">بحث الان</button>
                        </div> 
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="card w-100">
            <div class="body-card m-3">
                <div class="row">
                    <h3 class="mb-4 col-6 btn btn-primary w-md waves-effect waves-light"><i class="mdi mdi-home mr-2"></i>{{$homes->total()}} شقة</h3>
                    <div class="col-6 text-right">
                        <a class="btn btn-primary w-md waves-effect waves-light w-100" href="{{ route("home.add") }}">أضافة أعلان هنا</a>
                    </div>
                </div>
                <div class="row mt-2 mb-2">

                @foreach($homes as $home)
                        <div class="col-6 col-xl-4  p-0 bordertoty">
                            <div class="cardtoty m-sm-1 m-0 p-1">
                                <a href="{{ asset('assets/site/images/homes/'.explode(',',$home->img)[0]) }}" class="gallery-popup"
                                    style="height: 130px; width:100%">
                                    <div class="project-item">
                                        <div class="overlay-container">
                                            <img src="{{ asset('assets/site/images/homes/'.explode(',',$home->img)[0]) }}" alt="img"
                                                class="gallery-thumb-img m-0" style="height: 130px; width:100%">
                                            <div class="project-item-overlay text-right">
                                                <h4>عقارات</h4>
                                                <p>
                                                    <img src="{{ asset('assets/site/images/homes/'.explode(',',$home->img)[0]) }}" alt="user"
                                                        class="avatar-xs rounded-circle">
                                                    <span class="ml-2">{{$home->advertiser_name}}</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="mt-2 mb-2">
                                    <h4 class="" style="color:#820120">شقق</h4>
                                    <p class="card-text">
                                    {{$home->city}} {{$home->address}} للبيع في  {{$home->model}} شقة
                                       
                                </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
                @endforeach
            <div class="row">
                <div class="card w-100">
                    <div class="body-card m-3">
                        <div class="row">
                            <h3 class="mb-4 col-6 btn btn-primary w-md waves-effect waves-light"><i
                                    class="mdi mdi-home mr-2"></i>{{ $homes->total() }} شقة</h3>
                            <div class="col-6 text-right">
                                <a class="btn btn-primary w-md waves-effect waves-light w-100"
                                    href="{{ route('home.add') }}">أضافة أعلان هنا</a>
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
                        <a href="{{route('home.add')}}" class="w-100 mx-auto btn mt-2 pt-1 px-1 btn-primary text-white"
                            style="height:33px;font-size: 11px;line-height:28px;max-width:100px;float:left !important;">

                            <i class="fa fa-plus-circle "></i>اضف اعلان جديد

                        </a>
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
                                @foreach ($homes_show as $home)
                                <tr>
                                    <td>{{$home->home_type}} </td>
                                    <td>{{$home->show}} </td>
                                    <td>{{$home->city}} </td>
                                </tr>
                                @endforeach
                                @if(count($homes) == NULL)
                                    <h6>لا يوجد اعلانات حاليا <br>
                                    <a class="text-primary" href="{{route('home')}} ">عودة</a>
                                    </h6>
                                @endif
                            </tbody>
                        </table>
                       





                    </div>
                    <div class="col-lg-6">



                        <div class="col-12">
                        {{ $homes_show->links('vendor.paginate') }}
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