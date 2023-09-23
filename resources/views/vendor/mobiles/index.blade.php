@extends("layouts.vendor")
@section('pageTitle', 'Koala Web Libraries')
@section('styleChart')
    <link href="{{ asset('assets/admin/libs/c3/c3.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="row">
        <div class="card w-100">
            <div class="body-card m-5">
                <div class="row">
                    <h3 class="mb-4 m-auto"><i class="mbri-mobile2 mr-2"></i> اعلانات الأجهزة الذكية - موبايل </h3>
                </div>
                <form method="POST" action="{{ route("mobiles.search") }}">
                        @csrf
                        @if ($errors->any())
                        @foreach ($errors->all() as $error)
                        <div>{{$error}}</div>
                        @endforeach
                        @endif
                        <div class="row m-1">
                            <div class="col-4">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">جميع الشركات</label>
                                    <div class="col-12 m-0 p-0">
                                    <select name="model" class="form-control  model-type-car" id="carCompany"
                                    required="">
                                    <option value="Alcatel">Alcatel</option>
                                    <option value="Apple">Apple</option>
                                    <option value="Asus">Asus</option>
                                    <option value="BlackView">BlackView</option>
                                    <option value="Bluboo">Bluboo</option>
                                    <option value="Doogee">Doogee</option>
                                    <option value="Elephone">Elephone</option>
                                    <option value="Homtom">Homtom</option>
                                    <option value="HTC">HTC</option>
                                    <option value="Leagoo">Leagoo</option>
                                    <option value="LG">LG</option>
                                    <option value="Micromax">Micromax</option>
                                    <option value="OnePlus">OnePlus</option>
                                    <option value="Oppo">Oppo</option>
                                    <option value="Posh">Posh</option>
                                    <option value="Telego">Telego</option>
                                    <option value="UMi">UMi</option>
                                    <option value="Vernee">Vernee</option>
                                    <option value="XGody">XGody</option>
                                    <option value="بلاك بيري">بلاك بيري</option>
                                    <option value="توشيبا">توشيبا</option>
                                    <option value="جوجل">جوجل</option>
                                    <option value="سامسونج">سامسونج</option>
                                    <option value="سوني">سوني</option>
                                    <option value="شومي Xiaomi">شومي Xiaomi</option>
                                    <option value="لينوفو">لينوفو</option>
                                    <option value="موتورولا">موتورولا</option>
                                    <option value="نوكيا">نوكيا</option>
                                    <option value="هواوي">هواوي</option>
                                </select>
                            </div>
                        </div>
                    </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">الحالة</label>
                                    <div class="col-12 m-0 p-0">
                                        <select name="device_status" class="form-control">
                                            <option selected="" disabeled="">الحالة</option>
                                            <option value="جديد">جديد</option>
                                            <option value="مستعمل"> مستعمل</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">المحافظة</label>
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

                            <div class="col-4">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">السعر من</label>
                                    <div class="col-12 m-0 p-0">
                                        <input class="form-control input-form-group" type="text" placeholder="اقل سعر">
                                    </div>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">السعر الي</label>
                                    <div class="col-12 m-0 p-0">
                                        <input class="form-control input-form-group" type="text" placeholder="اعلى سعر">
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
            <div class="body-card m-5">
                <div class="row">
                    <h3 class="mb-4 col-6"><i class="fas fa-star mr-2"></i> الاعلانات المميزة </h3>
                    <div class="col-6 text-right">
                        <a href="{{ route('choseAdd') }}"  class="btn btn-primary w-md waves-effect waves-light" >أضافة أعلان هنا</a>
                    </div>
                </div>
                <div class="row">

                    @for ($i = 0; $i < 4; $i++)
                        <div class="col-md-6 col-lg-6 col-xl-3">
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
    </div>

    <div class="row">
        <div class="card w-100">
            <div class="body-card m-5">
                <div class="row">
                    <h3 class="mb-4 col-6"><i class="mdi mdi-car-side mr-2"></i> أعلانات السيارات </h3>
                    <div class="col-6 text-right">
                        <a class="btn btn-primary w-md waves-effect waves-light" href="{{ route("mobile.add") }}">أضافة أعلان هنا</a>
                    </div>
                </div>
                <div class="row">

                @foreach($mobiles as $mobile)
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="card">
                                <a href="{{ asset('assets/site/images/mobiles/'.explode(',',$mobile->img)[0]) }}" class="gallery-popup"
                                    style="height: 230px; width:100%">
                                    <div class="project-item">
                                        <div class="overlay-container">
                                            <img src="{{ asset('assets/site/images/mobiles/'.explode(',',$mobile->img)[0]) }}" alt="img"
                                                class="gallery-thumb-img m-0" style="height: 230px; width:100%">
                                            <div class="project-item-overlay text-right">
                                                <h4>هاتف {{$mobile->model}} 
                                                    @if(!empty($mobile->reset_model))
                                                        {{$mobile->reset_model}}
                                                    @endif
                                                </h4>
                                                <p>
                                                    <img src="{{ asset('assets/site/images/mobiles/'.explode(',',$mobile->img)[0]) }}" alt="user"
                                                        class="avatar-xs rounded-circle">
                                                    <span class="ml-2">{{$mobile->advertiser_name}}</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="{{ ('mobile/product/'.$mobile->id) }}">
                                        موبايل
                                        </a>
                                    </h4>
                                    <p class="card-text">
                                        {{$mobile->company}}  - {{$mobile->device_status}} - {{$mobile->reset_model}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <nav aria-label="..." class="w-25 m-auto">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active">
                            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

@endsection
