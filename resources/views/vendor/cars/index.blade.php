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

<div class="row">
    <div class="col-lg-9 col-12">
        <div class="row">
            <div class="card w-100">
            <form method="POST" action='{{ route("cars.search") }}'>
                    @csrf
                    <div class="row m-1">
                        <div class="col-6 col-sm-4">
                            <div class="form-group row">
                                <div class="col-12 m-0 p-0">
                                <select name="company"  class="form-control form-control model-type-car" id="carCompany"
                                    required="">
                                    <option value=""selected disabled> الشركات</option>
                                        @foreach ($carCompanies as $carCompany)
                                            <option value="{{ $carCompany->name}}">{{ $carCompany->name }}</option>
                                        @endforeach
                                </select>
                                </div>
                            </div>
                        </div>

                        <!-- Repeat the structure for other form groups -->

                        <div class="col-6 col-sm-4">
                            <div class="form-group row">
                                <div class="col-12 m-0 p-0">
                                    <select name="model" class="form-control form-control model-type-car" id="carModel"
                                        required="">
                                        <option value=""selected disabled> الموديل</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-4">
                            <div class="form-group row">
                                <div class="col-12 m-0 p-0">
                                    <select name="city"class="form-control">
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
                        <div class="col-6 col-sm-4">
                            <div class="form-group row">
                                <div class="col-12 m-0 p-0">
                                    <input type="text" class="form-control" placeholder="من سنة:">
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4">
                            <div class="form-group row">
                                <div class="col-12 m-0 p-0">
                                    <input type="text" class="form-control" placeholder="الى سنة:">
                                </div>
                            </div>
                        </div>


                        <div class="col-6 col-sm-4">
                            <div class="form-group row">
                                <div class="col-12 m-0 p-0">
                                    <select name="lime_type" class="form-control">
                                        <option selected="" disabeled="">نوع الجير</option>
                                        <option value="عادي">عادي</option>
                                        <option value="اوتوماتيك">اوتوماتيك</option>
                                        <option value=" نصف اوتوماتيك">نصف اوتوماتيك</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                                
                        <div class="col-6 col-sm-4">
                            <div class="form-group row">
                                <div class="col-12 m-0 p-0">
                                    <select name="fuel_type" class="form-control">
                                        <option selected="" disabeled="">نوع الوقود</option>
                                        <option value="بنزين">بنزين</option>
                                        <option value="هايبرد">هايبرد</option>
                                        <option value="سولار">سولار </option>
                                        <option value="كهرباء">كهرباء</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-4">
                            <div class="form-group row">
                                <div class="col-12 m-0 p-0">
                                    <select name="driving_license" class="form-control">
                                        <option selected disabeled>الرخصة</option>
                                        <option value="فلسطينية">فلسطينية</option>
                                        <option value="نمرة صفرة">نمرة صفرة</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                                
                        <div class="col-6 col-sm-4">
                            <div class="form-group row">
                                <div class="col-12 m-0 p-0">
                                    <input class="form-control input-form-group"name="price_min" type="text" placeholder="اقل سعر">
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4">
                            <div class="form-group row">
                                <div class="col-12 m-0 p-0">
                                    <input class="form-control input-form-group" name="price_max" type="text" placeholder="اعلى سعر">
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

        <div class="row">
            <div class="card w-100">
                <div class="card-header m-0 p-0 w-100 d-inline-flex" style="height:60px;background:#262726 ;">

                    <div class="h-100 text-white px-2" style="width:65%">
                        <a class="text-white">
                            <h3><i class="mdi mdi-car-side mr-2"></i> سيارات </h3>
                        </a>
                    </div>


                    <div class="h-100 mr-1 pt-1" style="width:34%;">
                        <a  href="{{route('car.add')}}"
                         class="btn w-100 mx-auto btn mt-2 pt-1 px-1 btn-primary text-white"
                            style="height:33px;font-size: 11px;line-height:28px;max-width:100px;
                            float:left !important;">

                            <i class="fa fa-plus-circle "></i>اضف اعلان جديد

                        </a>
                    </div>
                </div>
                <div class="body-card m-3">



                    <div class="row px-1 m-0">

                    @foreach ($cars as $car)
                                <div class="col-sm-12 col-lg-4 p-0">
                                    <div class="cardtoty m-sm-1 m-0 p-1">
                                        <a href="{{ asset('assets/site/images/cars/' . $car->img) }}"
                                            class="gallery-popup" style="height: 130px; width:100%">
                                            <div class="project-item">
                                                <div class="overlay-container">
                                                    <img src="{{ asset('assets/site/images/cars/' . explode(',', $car->img)[0]) }}"
                                                        alt="img" class="gallery-thumb-img m-0"
                                                        style="height: 130px; width:100%">
                                                    <div class="project-item-overlay text-right">
                                                        <h4>{{$car->company}} {{$car->model}}</h4>
                                                        <p>
                                                            <img src="{{ asset('assets/site/images/cars/' . explode(',', $car->img)[0]) }}"
                                                                alt="user" class="avatar-xs rounded-circle">
                                                            <span class="ml-2">{{ $car->advertiser_name }}</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="mt-2 mb-2">
                                            <h4 class="" style="color:#820120">{{$car->company}} {{$car->model}}</h4>
                                            <p class="card-text">{{ $car->city }} {{ $car->address }} للبيع في
                                            {{$car->company}} {{$car->model}} سيارة</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                </div>
            </div>
            {{ $cars->links('vendor.paginate') }}
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script>
          $(document).ready(function () {
            
              $('#carCompany').change(function () {
                  
                  var carCompany = encodeURIComponent($(this).val());
                  
                  if (carCompany) {
                      $.ajax({
                          type: "GET",
                          url: "/get-car-models/" + carCompany,
                          success: function (data) {
                              $('#carModel').empty();
                              $.each(data, function (id, model) {
                                  $('#carModel').append(new Option(model, id));
                              });
                          }
                      });
                  } else {
                      $('#carModel').empty();
                  }
              });
          });
      </script>


@endsection