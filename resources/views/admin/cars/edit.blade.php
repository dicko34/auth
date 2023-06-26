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
                        <div class="row m-2">
                            <h3 class="m-2 m-auto"><i class="mdi mdi-car-side mr-2"></i> تعديل أعلان سيارة </h3>
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
                                            <td class="">الشركة</td>
                                            <td class="">
                                                <select class="">
                                                    <option>جميع الشركات</option>
                                                    <option>الكل</option>
                                                    <option>Large select</option>
                                                    <option>Small select</option>
                                                </select>
                                                <select class="">
                                                    <option>موديل</option>
                                                    <option>الكل</option>
                                                    <option>Large select</option>
                                                    <option>Small select</option>
                                                </select>
                                                <p style="color: red" class="mt-2">
                                                    *في حالة عدم وجود الموديل قم بإدخاله في باقي الموديل
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">باقي الموديل</td>
                                            <td class="">
                                                <input value="" type="text" class="">
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
                                            <td class="">لون السياره</td>
                                            <td class="">
                                                <select class="">
                                                    <option>اسود</option>
                                                    <option>Large select</option>
                                                    <option>Small select</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">قوة الماتور</td>
                                            <td class="">
                                                <input value="" type="text" class="" placeholder="1600 سي سي">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">عدد الركاب</td>
                                            <td class="">
                                                <select class="">
                                                    <option>2</option>
                                                    <option>Large select</option>
                                                    <option>Small select</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">الدفع</td>
                                            <td class="">
                                                <select class="">
                                                    <option>دفع أمامي</option>
                                                    <option>Large select</option>
                                                    <option>Small select</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">عداد السيارة</td>
                                            <td class="">
                                                <input value="" type="text" class=""
                                                    placeholder="75000 كيلومتر">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">أصل السيارة</td>
                                            <td class="">
                                                <select class="">
                                                    <option>خصوصي</option>
                                                    <option>Large select</option>
                                                    <option>Small select</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">السعر</td>
                                            <td class="">
                                                <input value="" type="text" class="" placeholder="75000">
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
                                            <td class="">رخصة السيارة</td>
                                            <td class="">
                                                <input type="radio" id="switch7" name="aa" />
                                                <label for="switch7">فلسطينية</label>

                                                <input type="radio" id="switch8" name="aa" />
                                                <label for="switch8">نمرة صفراء</label>


                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">نوع الوقود</td>
                                            <td class="">
                                                <input type="radio" id="switch1" name="bb" />
                                                <label for="switch1">ديزل</label>

                                                <input type="radio" id="switch2" name="bb" />
                                                <label for="switch2">بنزين</label>

                                                <input type="radio" id="switch3" name="bb" />
                                                <label for="switch3">هايبرد</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">نوع الجير</td>
                                            <td class="">
                                                <input type="radio" id="switch11" name="cc" />
                                                <label for="switch11">عادي</label>

                                                <input type="radio" id="switch12" name="cc" />
                                                <label for="switch12">اوتوماتيك</label>

                                                <input type="radio" id="switch13" name="cc" />
                                                <label for="switch13">نصف اوتوماتيك</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">الزجاج</td>
                                            <td class="">
                                                <input type="radio" id="switch14" name="dd" />
                                                <label for="switch14">يدوي</label>

                                                <input type="radio" id="switch15" name="dd" />
                                                <label for="switch15">الكتروني</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">معروضة</td>
                                            <td class="">
                                                <input type="radio" id="switch16" name="ee" />
                                                <label for="switch16">للبيع فقط</label>

                                                <input type="radio" id="switch17" name="ee" />
                                                <label for="switch17">للتبديل فقط</label>

                                                <input type="radio" id="switch18" name="ee" />
                                                <label for="switch18">للبيع أو التبديل</label>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">وسيلة الدفع</td>
                                            <td class="">
                                                <input type="radio" id="switch19" name="ff" />
                                                <label for="switch19">نقدا فقط</label>

                                                <input type="radio" id="switch20" name="ff" />
                                                <label for="switch20">إمكانية التقسيط</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">إضافات</td>
                                            <td class="">
                                                <input type="checkbox" id="switch21" name="gg" />
                                                <label for="switch21">جهاز إنذار</label>

                                                <input type="checkbox" id="switch22" name="gg" />
                                                <label for="switch22">مُكيّف</label>

                                                <input type="checkbox" id="switch23" name="gg" />
                                                <label for="switch23">مسجل CD</label>

                                                <input type="checkbox" id="switch24" name="gg" />
                                                <label for="switch24">فتحة سقف</label>

                                                <input type="checkbox" id="switch25" name="gg" />
                                                <label for="switch25">فرش جلد</label>

                                                <input type="checkbox" id="switch26" name="gg" />
                                                <label for="switch26">إغلاق مركزي</label>

                                                <input type="checkbox" id="switch27" name="gg" />
                                                <label for="switch27">جنطات مغنيسيوم</label>

                                                <input type="checkbox" id="switch28" name="gg" />
                                                <label for="switch28">وسادة حماية هوائية</label>

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
        
    </div>
@endsection
