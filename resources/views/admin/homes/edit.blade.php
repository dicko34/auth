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
                            <h3 class="m-2 m-auto"><i class="mdi mdi-car-side mr-2"></i> تعجيل إعلان منزل او شقة جديدة</h3>
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
                                            <td class="">العرض</td>
                                            <td class="">
                                                <input type="radio" id="switch1" name="bb" />
                                                <label for="switch1">للبيع</label>

                                                <input type="radio" id="switch2" name="bb" />
                                                <label for="switch2">للإيجار</label>
                                            </td>
                                        </tr> 
                                        <tr>
                                            <td class="">نوع المنزل</td>
                                            <td class="">
                                                <select class="">
                                                    <option>شقة</option>
                                                    <option>Large select</option>
                                                    <option>Small select</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">الحالة</td>
                                            <td class="">
                                                <select class="">
                                                    <option>اسود</option>
                                                    <option>Large select</option>
                                                    <option>Small select</option>
                                                </select>
                                            </td>
                                        </tr> 
                                        <tr>
                                            <td class="">عدد الغرف</td>
                                            <td class="">
                                                <select class="">
                                                    <option>2</option>
                                                    <option>Large select</option>
                                                    <option>Small select</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">عدد الحمامات</td>
                                            <td class="">
                                                <input value="" type="text" class=""
                                                    placeholder="2">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">عدد المطابخ</td>
                                            <td class="">
                                                <input value="" type="text" class=""
                                                    placeholder="1">
                                            </td>
                                        </tr> 
                                        <tr>
                                            <td class="">الصالة</td>
                                            <td class="">
                                                <input value="" type="text" class="" placeholder="الصالة كبيره">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">المساحة</td>
                                            <td class="">
                                                <input value="" type="text" class=""
                                                    placeholder="1200">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">مساحة الارض</td>
                                            <td class="">
                                                <input value="" type="text" class=""
                                                    placeholder="مساحة الارض المقام عليها">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">السعر</td>
                                            <td class="">
                                                <input value="" type="text" class=""
                                                    placeholder="سعر البيع او الايجار">
                                            </td>
                                        </tr>   
                                        <tr>
                                            <td class=""> المحافظة</td>
                                                <td>
                                                    <select>
                                                        <option>اريحا</option>
                                                        <option>Large select</option>
                                                        <option>Small select</option>
                                                    </select>
                                                </td>
                                        </tr>
                
                                        <tr>
                                            <td class=""> المدن</td>
                                                <td>
                                                    <select>
                                                        <option> المدينة</option>
                                                        <option>Large select</option>
                                                        <option>Small select</option>
                                                    </select>
                                                </td>
                                        </tr>
                
                                        <tr>
                                            <td class=""> الشارع</td>
                                                <td>
                                                    <select>
                                                        <option> الشارع</option>
                                                        <option>Large select</option>
                                                        <option>Small select</option>
                                                    </select>
                                                </td>
                                        </tr>
                
                                        <tr>
                                            <td class=""> العنوان</td>
                                                <td>
                                                    <input value="" type="text"  placeholder="اسم المنطقة أو الشارع">
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
                                            <td class="">إضافات</td>
                                            <td class="">
                                                <input type="checkbox" id="switch21" name="gg" />
                                                <label for="switch21">يوجد مصعد إلكتروني</label>

                                                <input type="checkbox" id="switch22" name="gg" />
                                                <label for="switch22">يوجد موقف سيارات خاص</label>

                                                <input type="checkbox" id="switch23" name="gg" />
                                                <label for="switch23">يوجد تدفئة مركزية</label>
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
                                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit">تعديل
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
