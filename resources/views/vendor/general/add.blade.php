@extends("layouts.vendor")
@section('pageTitle', 'Koala Web Libraries')
@section('styleChart')
    <link href="{{ asset('assets/admin/libs/c3/c3.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
@endsection
@section('content')

    {{--
    <div class="row">
        <div class="card w-100">
            <div class="body-card m-3">
                <div class="row m-5">
                    <h3 class="m-5 m-auto"><i class="fab fa-telegram-plane mr-2"></i> إعلان عام </h3>
                </div>
                <form>
                    <div class="row m-3">
                        <div class="col-sm-4">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">العنوان</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" placeholder="تلفاز ملون 20 بوصة">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">الصنف</label>
                                <div class="col-sm-8">
                                    <select class="form-control">
                                        <option>اختر الصنف</option>
                                        <option>الكل</option>
                                        <option>Large select</option>
                                        <option>Small select</option>
                                    </select>
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
                                <label class="col-sm-4 col-form-label">رقم الموبايل</label>
                                <div class="col-sm-8">
                                    <input value="" type="text" class="form-control" placeholder="رقم الموبايل  ">
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
            <div class="body-card m-3">

                <div class="row">
                    <h3 class="mb-4 col-6"><i class="fas fa-address-book mr-2"></i> اعلانات عامة </h3>
                    <div class="col-6 text-right">
                        <a class="btn btn-primary w-md waves-effect waves-light" href="{{ route("general.add") }}">أضافة أعلان هنا</a>
                    </div> 
                </div>
                <div class="row">

                    @for ($i=0; $i < 8; $i++)
                    <div class="col-6 col-xl-2 p-1">
                        <div class="card">
                            <a href="{{ asset('assets/admin/images/general.jpg') }}" class="gallery-popup" style="height: 160px; width:100%">
                                <div class="project-item">
                                    <div class="overlay-container">
                                        <img src="{{ asset('assets/admin/images/general.jpg') }}" alt="img" class="gallery-thumb-img m-0" style="height: 160px; width:100%">
                                        <div class="project-item-overlay text-right">
                                            <h4>الإعلانات العامة</h4>
                                            <p>
                                                <img src="{{ asset('assets/admin/images/general.jpg') }}" alt="user" class="avatar-xs rounded-circle">
                                                <span class="ml-2">مارتينا جرجس</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="card-body">
                                <h4 class="card-title">الإعلانات العامة</h4>
                                <p class="card-text">شقة عظم للبيع في الخليل ١٣٦ م - فيصل بريك 0562700836
                                    وسط الخليل على بعد 570 متر من مستشفى الأهلي</p>
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
    --}}

    <div class="add-section w-75 mx-auto bg-white">
    <div class="add-section-title btn w-100 bg-primary p-1 px-3 mb-3">
        <h4 class="text-white ml-2 font-weight-bold text-left">إعلان عام جديد</h4>
    </div>
    <table class="table table-bordered table-striped mb-0">
        <tbody>
            <tr>
                <td>العنوان<span class="text-danger" style="">*</span></td>
                <td>
                    <div class="input-group input-group-sm">
                        <input type="text" name="title" class="form-control form-control-sm" >
                    </div>
                </td>
            </tr>
            <tr>
                <td>السعر</td>
                <td>
                    <div class="input-group input-group-sm">
                        <input type="text" name="title" class="form-control form-control-sm">
                    </div>
                </td>
            </tr> 
    
            <tr>
                <td>معلومات اضافية</td>
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
                            <input type="file" name="images[]" class="custom-file-input" id="inputGroupFile01"
                                aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="inputGroupFile01">اختر صورة</label>
                        </div>
                    </div>
                    <div class="form-group input-group-sm mb-2">
                        <div class="custom-file">
                            <input type="file" name="images[]" class="custom-file-input" id="inputGroupFile02"
                                aria-describedby="inputGroupFileAddon02">
                            <label class="custom-file-label" for="inputGroupFile02">اختر صورة</label>
                        </div>
                    </div>
                    <div class="form-group input-group-sm mb-2">
                        <div class="custom-file">
                            <input type="file" name="images[]" class="custom-file-input" id="inputGroupFile03"
                                aria-describedby="inputGroupFileAddon03">
                            <label class="custom-file-label" for="inputGroupFile03">اختر صورة</label>
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
                            <input type="file" name="images[]" class="custom-file-input" id="inputGroupFile05"
                                aria-describedby="inputGroupFileAddon05">
                            <label class="custom-file-label" for="inputGroupFile05">اختر صورة</label>
                        </div>
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
                <td>المدينه <span class="text-danger" style="font-weight: 700;">*</span> </td>
                <td>
                    <div class="form-group input-group-sm">
                        <select required="" name="city" class="form-select">
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
        </tbody>
    </table>
</div>

<div class="add-section w-75 mx-auto bg-white">
    <div class="add-section-title btn w-100 bg-primary p-1 px-3 mb-3">
        <h5 class="text-white ml-2 font-weight-bold text-left">معلومات المُعلن</h5>
    </div>
    <table class="table table-bordered table-striped mb-0 bg-white">
    <tbody><tr>
    <td>
    اسم المُعلن <span class="text-danger" style="font-weight: 700;">*</span>
    </td>
    <td>
    <div class="input-group">
    <input type="text" class="form-control form-control-sm" required="" name="client_name" placeholder="الاسم الحقيقي" >
    <span class="input-group-text d-flex d-lg-none " style="width:50px !important;"  ><i class="fas fa-info-circle"></i></span>
    <span class="input-group-text d-none d-lg-block w-100" >ملاحظة: لن يتم قبول الإعلان من غير اسم حقيقي</span>
    </div>
    </td>
    </tr>
    <tr>
    <td>
    رقم الهاتف
    </td>
    <td>
    <div class="form-group">
    <input type="text" class="form-control form-control-sm" name="telephone" placeholder="رقم الهاتف مع المقدمة" aria-label="رقم الهاتف مع المقدمة">
    </div>
    </td>
    </tr>
    <tr>
    <td>
    موبايل <span class="text-danger" style="font-weight: 700;">*</span>
    </td>
    <td>
    <div class="form-group">
    <input type="text" class="form-control form-control-sm" required="" name="phone" placeholder="رقم الموبايل" aria-label="رقم الهاتف مع المقدمة">
    </div>
    </td>
    </tr>
    <tr>
    <td colspan="100%" class="text-center">
    <button type="submit" class="btn btn-secondary" id="submit-all">اضف الأعلان</button>
    </td>
    </tr>
    </tbody></table>
</div>

<style>
* {
    font-family: 'Tajawal' !important;
}

.table-striped tbody tr:nth-of-type(odd) {
    background-color: #fff !important; /* Color for even rows */
  }
.table-striped tbody tr:nth-of-type(even) {
    background-color: #E8DFDE !important; /* Color for even rows */
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
