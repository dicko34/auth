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
                            <h3 class="m-2 m-auto"><i class="mdi mdi-view-dashboard mr-2"></i> إعلان ارض جديدة </h3>
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
                                            <td class="">نبذة</td>
                                            <td class="">
                                                <input value="" type="text"  placeholder="نبذة عن الارض">
                                            </td>
                                        </tr> 
                                        <tr>
                                            <td class="">المساحة</td>
                                            <td class="">
                                                <input value="" type="text"  placeholder="مساحة المنزل او الشقة">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">السعر</td>
                                            <td class="">
                                                <input value="" type="text" placeholder="سعر البيع او الايجار">
                                            </td>
                                        </tr> 
                                        <tr>
                                            <td class="">تقع على</td>
                                            <td class="">
                                                <input type="radio" id="switch21" name="gg" />
                                                <label for="switch21">شارع رئيسي</label>

                                                <input type="radio" id="switch22" name="gg" />
                                                <label for="switch22">شارع فرعي</label>

                                                <input type="radio" id="switch23" name="gg" />
                                                <label for="switch23">شارع رئيسي وفرعي</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">محاطة ب</td>
                                            <td class="">
                                                <input type="radio" id="switch24" name="gg1" />
                                                <label for="switch24">غير محاطة</label>

                                                <input type="radio" id="switch25" name="gg1" />
                                                <label for="switch25">سور حجر </label>

                                                <input type="radio" id="switch26" name="gg1" />
                                                <label for="switch26">سور إسمنت</label>

                                                <input type="radio" id="switch27" name="gg1" />
                                                <label for="switch27">سياج</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">مميزات</td>
                                            <td class="">
                                                <input type="checkbox" id="switch210" name="gg0" />
                                                <label for="switch210">تصلها الكهرباء</label>

                                                <input type="checkbox" id="switch220" name="gg0" />
                                                <label for="switch220">تصلها المياه</label>

                                                <input type="checkbox" id="switch230" name="gg0" />
                                                <label for="switch230">صالحة للزراعة</label>

                                                <input type="checkbox" id="switch240" name="gg0" />
                                                <label for="switch240">صالحة للبناء التجاري</label>

                                                <input type="checkbox" id="switch250" name="gg0" />
                                                <label for="switch250">صالحة لبناء سكن</label>
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
                                        <tr>
                                            <td class=""> المحافظة</td>
                                                <td>
                                                    <select>
                                                        <option>اريحا</option>
                                                        <option>Large select</option>
                                                        <option>Small select</option>
                                                    </select>
                                                    <select>
                                                        <option> المدينة</option>
                                                        <option>Large select</option>
                                                        <option>Small select</option>
                                                    </select>
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
