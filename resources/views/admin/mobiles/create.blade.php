@extends("layouts.admin")
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
        <div class="col-lg-12 col-12">
            <div class="row">
                <div class="card w-100">
                    <div class="body-card m-1">
                        <div class="row m-5">
                            <h3 class="m-5 m-auto"><i class="mdi mdi-car-side mr-2"></i>  أضافة إعلان جهاز ذكي جديد </h3>
                        </div>
                        <form>
                            <div class="row m-3">
                                <div class="col-sm-4">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">حالة الجهاز</label>
                                        <div class="col-sm-8">
                                            <select class="form-control">
                                                <option>جديد</option>
                                                <option>الكل</option>
                                                <option>Large select</option>
                                                <option>Small select</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="col-sm-4">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">الشركة </label>
                                        <div class="col-sm-8">
                                            <select class="form-control">
                                                <option>جديد</option>
                                                <option>الكل</option>
                                                <option>Large select</option>
                                                <option>Small select</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="col-sm-4">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">موديل</label>
                                        <div class="col-sm-8">
                                            <select class="form-control">
                                                <option>موديل</option>
                                                <option>الكل</option>
                                                <option>Large select</option>
                                                <option>Small select</option>
                                            </select>
                                        </div>
                                        <p style="color: red" class="ml-4 mt-2">
                                            *في حالة عدم وجود الموديل قم بإدخاله في باقي الموديل
                                        </p>
                                    </div>
                                </div>
        
                                <div class="col-sm-4">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">باقي الموديل</label>
                                        <div class="col-sm-8">
                                            <input value="" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
        
                                <div class="col-sm-4">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">موديل سنة</label>
                                        <div class="col-sm-8">
                                            <select class="form-control">
                                                <option>2020</option>
                                                <option>Large select</option>
                                                <option>Small select</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="col-sm-4">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">عدد الشرائح</label>
                                        <div class="col-sm-8">
                                            <select class="form-control">
                                                <option>اسود</option>
                                                <option>Large select</option>
                                                <option>Small select</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="col-sm-4">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">حجم الشاشة</label>
                                        <div class="col-sm-8">
                                            <input value="" type="text" class="form-control" placeholder="مثال 5 بوصة">
                                        </div>
                                    </div>
                                </div>
        
                                <div class="col-sm-4">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label"> الكاميرات</label>
                                        <div class="col-sm-8">
                                            <input value="" type="text" class="form-control" placeholder="مثال 18 ميجا خلفية">
                                        </div>
                                    </div>
                                </div>
        
                                <div class="col-sm-4">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label"> الذاكرة</label>
                                        <div class="col-sm-8">
                                            <input value="" type="text" class="form-control" placeholder="مثال 8">
                                        </div>
                                    </div>
                                </div>
        
                                <div class="col-sm-4">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label"> سعة التخزين</label>
                                        <div class="col-sm-8">
                                            <input value="" type="text" class="form-control" placeholder="مثال 16">
                                        </div>
                                    </div>
                                </div>  
        
                                <div class="col-sm-4">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">السعر</label>
                                        <div class="col-sm-8">
                                            <input value="" type="text" class="form-control" placeholder="75000">
                                        </div>
                                    </div>
                                </div>
        
                                <div class="col-sm-4">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">مدة الاعلان باليوم</label>
                                        <div class="col-sm-8">
                                            <select class="form-control">
                                                <option>30</option>
                                                <option>Large select</option>
                                                <option>Small select</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="col-sm-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">معلومات إضافية</label>
                                        <div class="col-sm-10">
                                            <textarea rows="8" type="text" class="form-control" placeholder="المزيد من المواصفات كل معلومة بسطر"></textarea>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="col-sm-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">الصور</label>
                                        <div class="col-sm-10">
                                            <input value="" type="file" class="form-control" multiple>
                                        </div>
                                    </div>
                                </div>
        
                                <hr>
        
                                <h3 class="m-5">بيانات المُعلن</h3>
        
                                <div class="col-sm-12">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">الاسم</label>
                                        <div class="col-sm-8">
                                            <input value="" type="text" class="form-control" placeholder="الاسم الحقيقي">
                                        </div>
                                    </div>
                                </div>
        
                                <div class="col-sm-12">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">رقم الهاتف</label>
                                        <div class="col-sm-8">
                                            <input value="" type="text" class="form-control" placeholder="رقم الهاتف مع المقدمة">
                                        </div>
                                    </div>
                                </div>
        
                                <div class="col-sm-12">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">المدينة</label>
                                        <div class="col-sm-8">
                                            <select class="form-control">
                                                <option>خصوصي</option>
                                                <option>Large select</option>
                                                <option>Small select</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="col-sm-12">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">العنوان</label>
                                        <div class="col-sm-8">
                                            <input value="" type="text" class="form-control" placeholder="اسم الشارع او المنطقة">
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

        </div>
        
    </div>
@endsection
