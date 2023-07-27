@extends("layouts.vendor")
@section('pageTitle', 'Koala Web Libraries')
@section('styleChart')
    <link href="{{ asset('assets/admin/libs/c3/c3.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="row">
        <div class="card w-100">
            <div class="body-card m-3">
                <div class="row m-5">
                    <h3 class="m-5 m-auto"><i class="fab fa-telegram-plane mr-2"></i> إعلان عام </h3>
                </div>
                <form method="POST" action="{{route('vendor.generals.store')}}" enctype="multipart/form-data">
                        @csrf
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <div>{{$error}}</div>
                            @endforeach
                        @endif
                        <div class="row m-3">
                            <div class="col-sm-4">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">العنوان</label>
                                    <div class="col-sm-8">
                                        <input class="form-control" name="address" type="text" placeholder="تلفاز ملون 20 بوصة">
                                        @error('address')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">الصنف</label>
                                    <div class="col-sm-8">
                                        <select name="category" class="form-control">
                                            <option>اختر الصنف</option>
                                            <option>الكل</option>
                                            <option>Large select</option>
                                            <option>Small select</option>
                                        </select>
                                        @error('category')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">السعر</label>
                                    <div class="col-sm-8">
                                        <input name="price" type="text" class="form-control" placeholder="75000">
                                        @error('price')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">مدة الاعلان باليوم</label>
                                    <div class="col-sm-8">
                                        <select name="ad_durtion_per_day" class="form-control">
                                            <option>30</option>
                                            <option>Large select</option>
                                            <option>Small select</option>
                                        </select>
                                        @error('ad_durtion_per_day')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">معلومات إضافية</label>
                                    <div class="col-sm-10">
                                        <textarea name="description" rows="8" type="text" class="form-control" placeholder="المزيد من المواصفات كل معلومة بسطر"></textarea>
                                        @error('description')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">الصور</label>
                                    <div class="col-sm-10">
                                        <input name="img[]" type="file" class="form-control" multiple>
                                        @error('img')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <h3 class="m-5">بيانات المُعلن</h3>

                            <div class="col-sm-12">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">الاسم</label>
                                    <div class="col-sm-8">
                                        <input name="advertiser_name" type="text" class="form-control" placeholder="الاسم الحقيقي">
                                        @error('advertiser_name')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">رقم الهاتف</label>
                                    <div class="col-sm-8">
                                        <input name="phone_number" type="text" class="form-control" placeholder="رقم الهاتف مع المقدمة">
                                        @error('phone_number')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">رقم الموبايل</label>
                                    <div class="col-sm-8">
                                        <input name="mobile" type="text" class="form-control" placeholder="رقم الموبايل  ">
                                        @error('mobile')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">العنوان</label>
                                    <div class="col-sm-8">
                                        <input name="email" type="text" class="form-control" placeholder="البريد الالكتروني">
                                        @error('email')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">المدينة</label>
                                    <div class="col-sm-8">
                                        <select name="advertiser_city" class="form-control">
                                            <option>خصوصي</option>
                                            <option>Large select</option>
                                            <option>Small select</option>
                                        </select>
                                        @error('advertiser_city')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">العنوان</label>
                                    <div class="col-sm-8">
                                        <input name="advertiser_address" type="text" class="form-control" placeholder="اسم الشارع او المنطقة">
                                        @error('advertiser_address')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-center">
                                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">أضف الأعلان</button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>

    {{-- <div class="row">
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
    </div> --}}

    <div class="row">
        <div class="card w-100">
            <div class="body-card m-3">

                <div class="row">
                    <h3 class="mb-4 col-6"><i class="fas fa-address-book mr-2"></i>{{count($generals)}} اعلانات عامة </h3>
                    <div class="col-6 text-right">
                        <a class="btn btn-primary w-md waves-effect waves-light" href="{{ route("general.add") }}">أضافة أعلان هنا</a>
                    </div> 
                </div>
                <div class="row">

                @foreach($generals as $general)
                        <div class="col-12 p-0 bordertoty">
                            <div class="cardtoty m-sm-1 m-0 p-1">
                                <a href="{{asset('assets/site/images/cars/'.explode(',',$general->img)[0])}}" class="gallery-popup"
                                    style="height: 130px; width:100%">
                                    <div class="project-item">
                                        <div class="overlay-container">
                                            <img src="{{asset('assets/site/images/cars/'.explode(',',$general->img)[0])}}" alt="img"
                                                class="gallery-thumb-img m-0" style="height: 130px; width:100%">
                                            <div class="project-item-overlay text-right">
                                                <h4>السيارات</h4>
                                                <p>
                                                    <img src="{{asset('assets/site/images/cars/'.explode(',',$general->img)[0])}}" alt="user"
                                                        class="avatar-xs rounded-circle">
                                                    <span class="ml-2">{{$general->advertiser_name}}</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="mt-2 mb-2">
                                    <h4 class="" style="color:#820120">سيارة</h4>
                                    <p class="card-text">{{$general->city}} {{$general->address}} للبيع في  {{$general->model}} سيارة</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                
                </div>
                <nav aria-label="..." class="">
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
