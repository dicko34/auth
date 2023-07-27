@extends("layouts.vendor")
@section('pageTitle', 'Koala Web Libraries')
@section('styleChart')
    <link href="{{ asset('assets/admin/libs/c3/c3.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <style>
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, .05);
        }

        .table-bordered td,
        .table-bordered th {
            border: 1px solid #bf465c;
            font-size: smaller;
        }

        .table td,
        .table th {
            padding: .2rem;
            vertical-align: middle;
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            margin: 0;
            font-family: auto;
            font-size: inherit;
            line-height: inherit;
        }
 
    </style>
    <div class="row">
        <div class="col-lg-9 col-12">
            <div class="row">
                <div class="card w-100">
                    <div class="body-card m-1">
                        <div class="row m-2">
                            <h3 class="m-2 m-auto"><i class="mdi mdi-view-dashboard mr-2"></i> إعلان ارض جديدة </h3>
                        </div>
                        <form method="POST" action="{{route('vendor.lands.store')}}" enctype="multipart/form-data">
                            
                            @csrf
                                <div class="row m-0 ">
                                    <table class="table table-striped table-bordered mb-0 text-center h5">
                                        <thead>
                                            <tr>
                                                <th class="btn-primary" style="width: 30%">الصفة</th>
                                                <th class="btn-primary"> الوصف</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-left">
                                            <tr>
                                                <td class="">نبذة</td>
                                                <td class="">
                                                    <input name="brief" type="text"  placeholder="نبذة عن الارض">
                                                    @error('brief')
                                                <span class="invalid-feedback" style="display: block;" role="alert">
                                                {{$message}}
                                                </span>
                                                @enderror
                                                </td>
                                            </tr> 
                                            <tr>
                                                <td class="">المساحة</td>
                                                <td class="">
                                                    <input name="area" type="text"  placeholder="مساحة المنزل او الشقة">
                                                    @error('area')
                                                <span class="invalid-feedback" style="display: block;" role="alert">
                                                {{$message}}
                                                </span>
                                                @enderror
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="">السعر</td>
                                                <td class="">
                                                    <input name="price" type="text" placeholder="سعر البيع او الايجار">
                                                    @error('price')
                                                <span class="invalid-feedback" style="display: block;" role="alert">
                                                {{$message}}
                                                </span>
                                                @enderror
                                                </td>
                                            </tr> 
                                            <tr>
                                                <td class="">تقع على</td>
                                                <td class="">
                                                    <input type="radio" value="شارع رئيسي" id="switch21" name="located_on" />
                                                    <label for="switch21">شارع رئيسي</label>
    
                                                    <input type="radio" value="شارع فرعي" id="switch22" name="located_on" />
                                                    <label for="switch22">شارع فرعي</label>
    
                                                    <input type="radio" value="شارع رئيسي وفرعي" id="switch23" name="located_on" />
                                                    <label for="switch23">شارع رئيسي وفرعي</label>
                                                    @error('located_on')
                                                <span class="invalid-feedback" style="display: block;" role="alert">
                                                {{$message}}
                                                </span>
                                                @enderror
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="">محاطة ب</td>
                                                <td class="">
                                                    <input type="radio" value="غير محاطة" id="switch24" name="surrounded_by" />
                                                    <label for="switch24">غير محاطة</label>
    
                                                    <input type="radio" value="سور حجر " id="switch25" name="surrounded_by" />
                                                    <label for="switch25">سور حجر </label>
    
                                                    <input type="radio" value="سور إسمنت" id="switch26" name="surrounded_by" />
                                                    <label for="switch26">سور إسمنت</label>
    
                                                    <input type="radio" value="سياج" id="switch27" name="surrounded_by" />
                                                    <label for="switch27">سياج</label>
                                                    @error('surrounded_by')
                                                <span class="invalid-feedback" style="display: block;" role="alert">
                                                {{$message}}
                                                </span>
                                                @enderror
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="">مميزات</td>
                                                <td class="">
                                                    <input type="checkbox" value="تصلها الكهرباء" id="switch210" name="features" />
                                                    <label for="switch210">تصلها الكهرباء</label>
    
                                                    <input type="checkbox" value="تصلها المياه" id="switch220" name="features" />
                                                    <label for="switch220">تصلها المياه</label>
    
                                                    <input type="checkbox" value="صالحة للزراعة" id="switch230" name="features" />
                                                    <label for="switch230">صالحة للزراعة</label>
    
                                                    <input type="checkbox" value="صالحة للبناء التجاري" id="switch240" name="features" />
                                                    <label for="switch240">صالحة للبناء التجاري</label>
    
                                                    <input type="checkbox" value="صالحة لبناء سكن" id="switch250" name="features" />
                                                    <label for="switch250">صالحة لبناء سكن</label>
                                                    @error('features')
                                                <span class="invalid-feedback" style="display: block;" role="alert">
                                                {{$message}}
                                                </span>
                                                @enderror
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="">معلومات إضافية</td>
                                                <td class="">
                                                    <textarea name="description" rows="4" type="text" class=""
                                                        placeholder="المزيد من المواصفات كل معلومة بسطر"></textarea>
                                                        @error('description')
                                                <span class="invalid-feedback" style="display: block;" role="alert">
                                                {{$message}}
                                                </span>
                                                @enderror
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="">الصور</td>
                                                <td class="">
                                                    <input name="img[]" type="file" class="form-control" multiple>
                                                    @error('img')
                                                <span class="invalid-feedback" style="display: block;" role="alert">
                                                {{$message}}
                                                </span>
                                                @enderror
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=""> المحافظة</td>
                                                    <td>
                                                        <select name="gov">
                                                            <option>اريحا</option>
                                                            <option>Large select</option>
                                                            <option>Small select</option>
                                                        </select>
                                                        @error('gov')
                                                <span class="invalid-feedback" style="display: block;" role="alert">
                                                {{$message}}
                                                </span>
                                                @enderror
                                                        <select name="city">
                                                            <option> المدينة</option>
                                                            <option>Large select</option>
                                                            <option>Small select</option>
                                                        </select>
                                                        @error('city')
                                                <span class="invalid-feedback" style="display: block;" role="alert">
                                                {{$message}}
                                                </span>
                                                @enderror
                                                        <select name="street">
                                                            <option> الشارع</option>
                                                            <option>Large select</option>
                                                            <option>Small select</option>
                                                        </select>
                                                        @error('street')
                                                <span class="invalid-feedback" style="display: block;" role="alert">
                                                {{$message}}
                                                </span>
                                                @enderror
                                                    </td>
                                            </tr> 
                                            <tr>
                                                <td class=""> العنوان</td>
                                                    <td>
                                                        <input name="address" type="text"  placeholder="اسم المنطقة أو الشارع">
                                                        @error('address')
                                                <span class="invalid-feedback" style="display: block;" role="alert">
                                                {{$message}}
                                                </span>
                                                @enderror
                                                    </td>
                                            </tr>
                            
                                            <tr>
                                                <td class="">مدة الاعلان باليوم</td>
                                                <td class="">
                                                    <select name="ad_durtion_per_day">
                                                        <option>30</option>
                                                        <option>Large select</option>
                                                        <option>Small select</option>
                                                    </select>
                                                    @error('ad_durtion_per_day')
                                                <span class="invalid-feedback" style="display: block;" role="alert">
                                                {{$message}}
                                                </span>
                                                @enderror
                                                </td>
                                            </tr> 
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row m-0 ">
                                    <table class="table table-striped  table-bordered mb-0 text-center h5">
                                        <thead>
                                            <tr>
                                                <th class="btn-primary" colspan="2">معلومات المعلن</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-left">
                                            <tr>
                                                <td class="">إسم المعلن</td>
                                                <td class="">
                                                    <input  name="advertiser_name" type="text" class=""
                                                        placeholder="الاسم الحقيقي">
                                                        @error('advertiser_name')
                                                <span class="invalid-feedback" style="display: block;" role="alert">
                                                {{$message}}
                                                </span>
                                                @enderror
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="">رقم الهاتف</td>
                                                <td class="">
                                                    <input name="phone_number" type="text" class=""
                                                        placeholder="رقم الهاتف مع المقدمة">
                                                        @error('phone_number')
                                                <span class="invalid-feedback" style="display: block;" role="alert">
                                                {{$message}}
                                                </span>
                                                @enderror
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="">موبايل</td>
                                                <td class="">
                                                    <input name="mobile" type="text" class=""
                                                        placeholder="رقم الموبايل  ">
                                                        @error('mobile')
                                                <span class="invalid-feedback" style="display: block;" role="alert">
                                                {{$message}}
                                                </span>
                                                @enderror
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="">البريد الالكتروني</td>
                                                <td class="">
                                                    <input type="text" name="email" class=""
                                                        placeholder="البريد الالكتروني">
                                                        @error('email')
                                                <span class="invalid-feedback" style="display: block;" role="alert">
                                                {{$message}}
                                                </span>
                                                @enderror
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=""> المدينة</td>
                                                <td class="">
                                                    <select name="advertiser_city">
                                                        <option>اريحا</option>
                                                        <option>Large select</option>
                                                        <option>Small select</option>
                                                        @error('advertiser_city')
                                                <span class="invalid-feedback" style="display: block;" role="alert">
                                                {{$message}}
                                                </span>
                                                @enderror
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="">العنوان</td>
                                                <td class="">
                                                    <input name="advertiser_address" type="text" class=""
                                                        placeholder="اسم الشارع او المنطقة">
                                                        @error('advertiser_address')
                                                <span class="invalid-feedback" style="display: block;" role="alert">
                                                {{$message}}
                                                </span>
                                                @enderror
                                                </td>
                                            </tr>
                                        </tbody>>
                                    </table>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 text-center">
                                        <button class="btn btn-primary w-md waves-effect waves-light" type="submit">أضف
                                            الأعلان</button>
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
                            <h3 class="mb-4 col-6 btn btn-primary w-md waves-effect waves-light"><i class="mdi mdi-view-dashboard mr-2"></i>800 ارض</h3>
                            <div class="col-6 text-right">
                                <a class="btn btn-primary w-md waves-effect waves-light w-100"
                                    href="{{ route('lands.add') }}">أضافة أعلان هنا</a>
                            </div>
                        </div>
                        <div class="row mt-2 mb-2">

                            @for ($i = 0; $i < 12; $i++)
                                <div class="col-6 col-xl-4  p-0 bordertoty">
                                    <div class="cardtoty m-sm-1 m-0 p-1">
                                        <a href="{{ asset('assets/admin/images/land.jpg') }}" class="gallery-popup"
                                            style="height: 130px; width:100%">
                                            <div class="project-item">
                                                <div class="overlay-container">
                                                    <img src="{{ asset('assets/admin/images/land.jpg') }}" alt="img"
                                                        class="gallery-thumb-img m-0" style="height: 130px; width:100%">
                                                    <div class="project-item-overlay text-right">
                                                        <h4>عقارات</h4>
                                                        <p>
                                                            <img src="{{ asset('assets/admin/images/land.jpg') }}"
                                                                alt="user" class="avatar-xs rounded-circle">
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
        </div>
        <div class="col-00 col-lg-3">
            <div class="row m-1">
                <div class="card w-100">
                    <div class="body-card m-3">
                        <div class="row">
                            <h3 class="mb-4 col-6 ">اعلانات</h3>
                        </div>
                        <div class="row m-2 mb-2">

                            @for ($i = 0; $i < 4; $i++)
                                <div class="col-12 p-0 bordertoty">
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
                                                            <img src="{{ asset('assets/admin/images/car.jpeg') }}"
                                                                alt="user" class="avatar-xs rounded-circle">
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
@endsection
