@extends("layouts.vendor")
@section('pageTitle', 'Koala Web Libraries')
@section('styleChart')
    <link href="{{ asset('assets/admin/libs/c3/c3.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
@endsection
@section('content')

{{--
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
                                                <input type="radio" id="switch21" name="gg" />
                                                <label for="switch21">للبيع</label>

                                                <input type="radio" id="switch22" name="gg" />
                                                <label for="switch22">للإيجار</label>

                                                <input type="radio" id="switch23" name="gg" />
                                                <label for="switch23">ضمان أو خلو</label>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="">المعروض</td>
                                            <td class="">
                                                <input type="radio" id="switch24" name="gg1" />
                                                <label for="switch24">محا</label>

                                                <input type="radio" id="switch25" name="gg1" />
                                                <label for="switch25">مخزن</label>

                                                <input type="radio" id="switch26" name="gg1" />
                                                <label for="switch26">مكتب</label>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="">نبذة</td>
                                            <td class="">
                                                <input value="" type="text"  placeholder="نبذة عن المكتب او المحل او المخزن">
                                            </td>
                                        </tr> 
                                        <tr>
                                            <td class="">المساحة</td>
                                            <td class="">
                                                <input value="" type="text"  placeholder="مساحة المحل او المكتب او المخزن">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">السعر</td>
                                            <td class="">
                                                <input value="" type="text" placeholder="سعر البيع او الايجار">
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

            <div class="row">
                <div class="card w-100">
                    <div class="body-card m-3">
                        <div class="row">
                            <h3 class="mb-4 col-6 btn btn-primary w-md waves-effect waves-light"><i class="mdi mdi-view-dashboard mr-2"></i>800 ارض</h3>
                            <div class="col-6 text-right">
                                <a class="btn btn-primary w-md waves-effect waves-light w-100"
                                    href="{{ route('shops.add') }}">أضافة أعلان هنا</a>
                            </div>
                        </div>
                        <div class="row mt-2 mb-2">

                            @for ($i = 0; $i < 12; $i++)
                                <div class="col-6 col-xl-4  p-0 bordertoty">
                                    <div class="cardtoty m-sm-1 m-0 p-1">
                                        <a href="{{ asset('assets/admin/images/shop.jpg') }}" class="gallery-popup"
                                            style="height: 130px; width:100%">
                                            <div class="project-item">
                                                <div class="overlay-container">
                                                    <img src="{{ asset('assets/admin/images/shop.jpg') }}" alt="img"
                                                        class="gallery-thumb-img m-0" style="height: 130px; width:100%">
                                                    <div class="project-item-overlay text-right">
                                                        <h4>عقارات</h4>
                                                        <p>
                                                            <img src="{{ asset('assets/admin/images/shop.jpg') }}"
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
--}}
    <div class="add-section w-75 mx-auto bg-white">
    <div class="add-section-title btn w-100 bg-primary p-1 px-3 mb-3">
        <h4 class="text-white ml-2 font-weight-bold text-left">محل أو مخزن أو جديد</h4>
    </div>

    <table class="table table-bordered table-striped mb-0">
        <tbody>
            <tr>
                <td>
                    العرض <span class="text-danger" style="font-weight: 700;">*</span>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" required="" type="radio" name="offer_type" id="offer_type_sell"
                            value="للبيع">
                        <label class="form-check-label" for="offer_type_sell">للبيع</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="offer_type" id="offer_type_rent"
                            value="للايجار">
                        <label class="form-check-label" for="offer_type_rent">للايجار</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>المعروض<span class="text-danger" style="font-weight: 700;">*</span> </td>
                <td>
                    <div class="form-check form-check-inline">
                            <input class="form-check-input" required="" type="radio" name="offer_type" id="offer_type_sell"
                                value="محل">
                            <label class="form-check-label" for="offer_type_sell">محل</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="offer_type" id="offer_type_rent"
                                value="مكتب">
                            <label class="form-check-label" for="offer_type_rent">مكتب</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="offer_type" id="offer_type_rent"
                                value="مخزن">
                            <label class="form-check-label" for="offer_type_rent">مخزن</label>
                        </div>
                    </td>
            </tr>
            <tr>
                <td>نبذة عن المحل <span class="text-danger" style="font-weight: 700;">*</span> </td>
                <td>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control " name="description" placeholder="نبذة">
                    </div>
                </td>
            </tr>
            <tr>
                <td>المساحة</td>
                <td>
                    <div class="input-group input-group-sm">
                        <input type="number" class="form-control " name="space"
                            placeholder="ما هي مساحة الشقة أو البيت؟" aria-label="ما هي مساحة الشقة أو البيت؟"
                            aria-describedby="basic-addon2">
                        <span class="input-group-text" id="basic-addon2">متر مربع</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>السعر </td>
                <td>
                    <div class="input-group input-group-sm">
                        <input type="number" class="form-control " name="price" placeholder="سعر المنزل او الشقة"
                            aria-label="سعر المنزل او الشقة" aria-describedby="basic-addon2">
                        <select name="currency" class="form-select" style="max-width:110px;">
                            <option value="دولار">دولار</option>
                            <option value="شيكل"> شيكل </option>
                            <option value="دينار">دينار</option>
                        </select>
                    </div>
                </td>
            </tr>
            <tr>
                <td>التفاصيل </td>
                <td>
                    <div class="form-group">
                        <textarea name="description" class="form-control form-control-sm" id="description"
                            placeholder="المزيد من المعلومات، كل معلومة بسطر." cols="30" rows="5"></textarea>
                    </div>
                </td>
            </tr>
            <tr>
                <td>الصور </td>
                <td>
                    <div class="form-group input-group-sm mb-2">
                        <div class="custom-file">
                            <input type="file" name="images[]" class="custom-file-input" id="inputGroupFile04"
                                aria-describedby="inputGroupFileAddon04">
                            <label class="custom-file-label" for="inputGroupFile04">اختر صورة</label>
                        </div>
                    </div>
                    <div class="form-group input-group-sm mb-2">
                        <div class="custom-file">
                            <input type="file" name="images[]" class="custom-file-input" id="inputGroupFile04"
                                aria-describedby="inputGroupFileAddon04">
                            <label class="custom-file-label" for="inputGroupFile04">اختر صورة</label>
                        </div>
                    </div>
                    <div class="form-group input-group-sm mb-2">
                        <div class="custom-file">
                            <input type="file" name="images[]" class="custom-file-input" id="inputGroupFile04"
                                aria-describedby="inputGroupFileAddon04">
                            <label class="custom-file-label" for="inputGroupFile04">اختر صورة</label>
                        </div>
                    </div>
                    <div class="form-group input-group-sm mb-2">
                        <div class="custom-file">
                            <input type="file" name="images[]" class="custom-file-input" id="inputGroupFile04"
                                aria-describedby="inputGroupFileAddon04">
                            <label class="custom-file-label" for="inputGroupFile04">اختر صورة</label>
                        </div>
                    </div>
                    <div class="form-group input-group-sm">
                        <div class="custom-file">
                            <input type="file" name="images[]" class="custom-file-input" id="inputGroupFile04"
                                aria-describedby="inputGroupFileAddon04">
                            <label class="custom-file-label" for="inputGroupFile04">اختر صورة</label>
                        </div>
                    </div>
                </td>
            </tr>
            
           
            <tr>
                <td>المدينه <span class="text-danger" style="font-weight: 700;">*</span> </td>
                <td>
                    <div class="form-group input-group-sm">
                        <select name="city" class="form-select" required="">
                            <option value="1">رام الله والبيرة </option>
                            <option value="2">القدس </option>
                            <option value="14">قطاع غزة </option>
                            <option value="4">الخليل </option>
                            <option value="5">بيت لحم </option>
                            <option value="6">أريحا </option>
                            <option value="7">سلفيت وبديا </option>
                            <option value="13">روابي </option>
                            <option value="12">طوباس </option>
                            <option value="11">قلقيلية </option>
                            <option value="10">طولكرم </option>
                            <option value="9">جنين </option>
                            <option value="8">نابلس </option>
                            <option value="15">جميع الاماكن </option>
                            <option value="16">مناطق الداخل </option>
                        </select>
                    </div>
                </td>
            </tr>
            <tr>
                <td>العنوان <span class="text-danger" style="font-weight: 700;">*</span> </td>
                <td>
                    <div class="input-group">
                        <input type="text" class="form-control form-control-sm" required="" name="address"
                            placeholder="أسم المنطقة او الشارع" aria-label="أسم المنطقة او الشارع"
                            aria-describedby="basic-addon2">
                        <span class="input-group-text d-flex d-lg-none " data-bs-toggle="tooltip"
                            data-bs-placement="left" title="" style="width:50px !important;" id="basic-addon2"
                            data-original-title="ملاحظة: لن يتم قبول الإعلان بدون العنوان الكامل"><i
                                class="fas fa-info-circle"></i></span>
                        <span class="input-group-text d-none d-lg-block w-100" id="basic-addon2">ملاحظة: لن يتم قبول
                            الإعلان بدون العنوان الكامل</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>مُدة الإعلان</td>
                <td>
                    <div class="input-group input-group-sm">
                        <select required="" name="view_date" class="form-select">
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                            <option value="32">32</option>
                            <option value="33">33</option>
                            <option value="34">34</option>
                            <option value="35">35</option>
                            <option value="36">36</option>
                            <option value="37">37</option>
                            <option value="38">38</option>
                            <option value="39">39</option>
                            <option value="40">40</option>
                            <option value="41">41</option>
                            <option value="42">42</option>
                            <option value="43">43</option>
                            <option value="44">44</option>
                            <option value="45">45</option>
                            <option value="46">46</option>
                            <option value="47">47</option>
                            <option value="48">48</option>
                            <option value="49">49</option>
                            <option value="50">50</option>
                            <option value="51">51</option>
                            <option value="52">52</option>
                            <option value="53">53</option>
                            <option value="54">54</option>
                            <option value="55">55</option>
                            <option value="56">56</option>
                            <option value="57">57</option>
                            <option value="58">58</option>
                            <option value="59">59</option>
                            <option value="60">60</option>
                        </select>
                        <span class="input-group-text" id="basic-addon2">يوم</span>
                    </div>
                </td>
            </tr>
            <tr>
            </tr>
        </tbody>
    </table>
</div>

<div class="add-section w-75 mx-auto bg-white">
    <div class="add-section-title btn w-100 bg-primary p-1 px-3 mb-3">
        <h5 class="text-white ml-2 font-weight-bold text-left">معلومات المُعلن</h5>
    </div>
    <table class="table table-bordered table-striped mb-0">
        <tbody>
            <tr>
                <td>
                    اسم المُعلن <span class="text-danger" style="font-weight: 700;">*</span>
                </td>
                <td>
                    <div class="input-group">
                        <input type="text" class="form-control form-control-sm" required="" name="client_name"
                            placeholder="الاسم الحقيقي">
                        <span class="input-group-text d-flex d-lg-none " style="width:50px !important;"><i
                                class="fas fa-info-circle"></i></span>
                        <span class="input-group-text d-none d-lg-block w-100">ملاحظة: لن يتم قبول الإعلان من غير اسم
                            حقيقي</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    رقم الهاتف
                </td>
                <td>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-sm" name="telephone"
                            placeholder="رقم الهاتف مع المقدمة" aria-label="رقم الهاتف مع المقدمة">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    موبايل <span class="text-danger" style="font-weight: 700;">*</span>
                </td>
                <td>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-sm" required="" name="phone"
                            placeholder="رقم الموبايل" aria-label="رقم الهاتف مع المقدمة">
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="100%" class="text-center">
                    <button type="submit" class="btn btn-secondary" id="submit-all">اضف الأعلان</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>


<style>
* {
    font-family: 'Tajawal' !important;
}

.table-striped tbody tr:nth-of-type(odd) {
    background-color: #fff !important;
    /* Color for even rows */
}

.table-striped tbody tr:nth-of-type(even) {
    background-color: #E8DFDE !important;
    /* Color for even rows */
}


@media all and (max-width:950px) {
    .add-section {
        width: 99% !important;
        margin-left: auto;
        margin-right: auto;
    }
}
</style>
@endsection
