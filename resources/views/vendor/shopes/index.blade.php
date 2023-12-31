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

                    <form method="POST" action="{{ route("shopes.search") }}">
                        @csrf
                        <div class="row m-1">
                            <div class="col-12 col-sm-4">
                                <div class="form-group row">
                                    <div class="col-4 m-0 p-0">
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

                                    <div class="col-sm-4 col-4  m-0 p-0">
                                        <select class="form-control">
                                            <option selected disabeled> المعروض</option>
                                            <option value="محل">محل</option>
                                            <option value="مكتب">مكتب</option>
                                            <option value="مخزن">مخزن</option>
                                        </select>
                                    </div>

                                    <div class="col-sm-4 col-4  m-0 p-0">
                                        <select class="form-control">
                                            <option selected disabeled> العقد</option>
                                            <option value="للبيع">للبيع</option>
                                            <option value="للايجار">للايجار</option>
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
                    <a href="{{route('shop.add')}}" class="w-100 mx-auto btn mt-2 pt-1 px-1 btn-primary text-white"
                        style="height:33px;font-size: 11px;line-height:28px;max-width:100px;float:left !important;">

                        <i class="fa fa-plus-circle "></i>اضف اعلان جديد

                    </a>
                </div>
            </div>
            </div>
            <div class="row w-100 m-0 mt-3">
                <div class="col-lg-6 col-sm-12 mx-0 px-0">
                    <table class="table table-striped table-bordered">
                        <thead class="bg-blue text-white">
                        @if (count($shopes) == 0)
                                <h6 class="text-center pt-5 pb-5 mt-5 mb-5">
                                    لا يوجد اعلانات حاليا <br>
                                    <a class="text-primary"href="{{route('home')}}">عودة</a>
                                </h6>
                            @else
                                <tr class="bg-primary">
                                    <th style="font-family: 'Tajawal';">النبذة</th>
                                    <th style="font-family: 'Tajawal';">نوع العقد</th>
                                    <th style="font-family: 'Tajawal';">المدينة</th>
                                </tr>
                            @endif
                        </thead>
                        <tbody >
                            @foreach ($shopes as $shop)
                            <tr class="bg-white">
                                <td>{{$shop->brief}} </td>
                                <td>{{$shop->offer}}</td>
                                <td>{{$shop->city}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>





                </div>
                {{$shopes->links('vendor.paginate')}}
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