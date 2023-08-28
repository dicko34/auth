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
                            <h3 class="m-2 m-auto"><i class="mbri-mobile2 mr-2"></i> إعلان جهاز ذكي جديد</h3>
                        </div>
                        <form>
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
                                            <td class="">حالة الجهاز</td>
                                            <td class="">
                                                <select class="">
                                                    <option>جديد</option>
                                                    <option>Large select</option>
                                                    <option>Small select</option>
                                                </select>
                                            </td>
                                        </tr> 
                                        <tr>
                                            <td class="">الشركة</td>
                                            <td class="">
                                                <select class="">
                                                    <option>اسود</option>
                                                    <option>Large select</option>
                                                    <option>Small select</option>
                                                </select>
                                                <select class="">
                                                    <option>الموديل</option>
                                                    <option>Large select</option>
                                                    <option>Small select</option>
                                                </select>
                                                <p style="color: red" class="ml-4 mt-2">
                                                    *في حالة عدم وجود الموديل قم بإدخاله في باقي الموديل
                                                </p>
                                            </td>
                                        </tr> 
                                        <tr>
                                            <td class="">موديل سنة</td>
                                            <td class="">
                                                <select class="">
                                                    <option>2020</option>
                                                    <option>Large select</option>
                                                    <option>Small select</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">عدد الشرائح</td>
                                            <td class="">
                                                <select class="">
                                                    <option>2020</option>
                                                    <option>Large select</option>
                                                    <option>Small select</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">حجم الشاشة</td>
                                            <td class="">
                                                <input value="" type="text" class=""
                                                    placeholder="مثال 5 بوصة">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">الكاميرات</td>
                                            <td class="">
                                                <input value="" type="text" class=""
                                                    placeholder="مثال 18 ميجا خلفية">
                                            </td>
                                        </tr> 
                                        <tr>
                                            <td class="">الذاكرة</td>
                                            <td class="">
                                                <input value="" type="text" class="" placeholder="مثال 8">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">سعة التخزين</td>
                                            <td class="">
                                                <input value="" type="text" class=""
                                                    placeholder="مثال 16">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">السعر</td>
                                            <td class="">
                                                <input value="" type="text" class=""
                                                    placeholder="75000">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">مدة الاعلان باليوم</td>
                                            <td class="">
                                                <select class="">
                                                    <option>30</option>
                                                    <option>Large select</option>
                                                    <option>Small select</option>
                                                </select>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td class="">معلومات إضافية</td>
                                            <td class="">
                                                <textarea rows="4" type="text" class=""
                                                    placeholder="المزيد من المواصفات كل معلومة بسطر"></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">الصور</td>
                                            <td class="">
                                                <input value="" type="file" class="form-control" multiple>
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
                                                <input value="" type="text" class=""
                                                    placeholder="الاسم الحقيقي">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">رقم الهاتف</td>
                                            <td class="">
                                                <input value="" type="text" class=""
                                                    placeholder="رقم الهاتف مع المقدمة">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">موبايل</td>
                                            <td class="">
                                                <input value="" type="text" class=""
                                                    placeholder="رقم الموبايل  ">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">البريد الالكتروني</td>
                                            <td class="">
                                                <input value="" type="text" class=""
                                                    placeholder="البريد الالكتروني">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class=""> المدينة</td>
                                            <td class="">
                                                <select class="">
                                                    <option>اريحا</option>
                                                    <option>Large select</option>
                                                    <option>Small select</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">العنوان</td>
                                            <td class="">
                                                <input value="" type="text" class=""
                                                    placeholder="اسم الشارع او المنطقة">
                                            </td>
                                        </tr>
                                    </tbody>
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
