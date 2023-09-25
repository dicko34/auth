@extends('layouts.vendor')
@section('pageTitle', 'Koala Web Libraries')
@section('styleChart')
    <link href="{{ asset('assets/admin/libs/c3/c3.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
@endsection
@section('content')

    <form method="POST" action="{{ route('vendor.generals.store') }}" enctype="multipart/form-data">
        @csrf
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        @endif


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
                                <input type="text" name="address" class="form-control form-control-sm">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>التصنيف <span class="text-danger" style="font-weight: 700;">*</span></td>
                        <td>
                            <div class="input-group input-group-sm">
                                <select name="category" class="form-select ">
                                    <option selected disabeled>الأصناف</option>
                                    <option value="اثاث منزلي و مكتبي">اثاث منزلي و مكتبي</option>
                                    <option value="اجهزة الكترونية">اجهزة الكترونية</option>
                                    <option value="اجهزة انذار ومراقبة">اجهزة انذار ومراقبة</option>
                                    <option value="اجهزة طبية">اجهزة طبية</option>
                                    <option value="اجهزة كهربائية">اجهزة كهربائية</option>
                                    <option value="احذية">احذية</option>
                                    <option value="ادوات رياضية">ادوات رياضية</option>
                                    <option value="ادوات صحية">ادوات صحية</option>
                                    <option value="ادوات منزلية">ادوات منزلية</option>
                                    <option value="ازهار واشتال ونباتات">ازهار واشتال ونباتات</option>
                                    <option value="الات ومعدات">الات ومعدات</option>
                                    <option value="العاب">العاب</option>
                                    <option value="برامج كمبيوتر">برامج كمبيوتر</option>
                                    <option value="تجهيزات مكتبية">تجهيزات مكتبية</option>
                                    <option value="تحف وهدايا">تحف وهدايا</option>
                                    <option value="تكييف وتبريد">تكييف وتبريد</option>
                                    <option value="خلويات ولوازمها">خلويات ولوازمها</option>
                                    <option value="ديكور">ديكور</option>
                                    <option value="سجاد وموكيت">سجاد وموكيت</option>
                                    <option value="شحن وتخليص جمركي">شحن وتخليص جمركي</option>
                                    <option value="شروات وصفقات تجارية">شروات وصفقات تجارية</option>
                                    <option value="عطور">عطور</option>
                                    <option value="قرطاسية">قرطاسية</option>
                                    <option value="كمبيوتر ومستلزماته">كمبيوتر ومستلزماته</option>
                                    <option value="قطع سيارات">قطع سيارات</option>
                                    <option value="مجوهرات">مجوهرات</option>
                                    <option value="معدات ثقيلة">معدات ثقيلة</option>
                                    <option value="مفروشات">مفروشات</option>
                                    <option value="ملابس">ملابس</option>
                                    <option value="مواد تجميل">مواد تجميل</option>
                                    <option value="مواد غذائية">مواد غذائية</option>
                                    <option value="نظارات">نظارات</option>
                                    <option value="آلات موسيقية">آلات موسيقية</option>
                                    <option value="اتصالات">اتصالات</option>
                                    <option value="اكسسوارات ونثريات">اكسسوارات ونثريات</option>
                                    <option value="دورات تعليمية">دورات تعليمية</option>
                                    <option value="سيارات وتوابعها">سيارات وتوابعها</option>
                                    <option value="حيوانات">حيوانات</option>
                                    <option value="خدمات عامة">خدمات عامة</option>

                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>السعر</td>
                        <td>
                            <div class="input-group input-group-sm">
                                <input type="text" name="price" class="form-control form-control-sm">
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
                            <div class="form-group input-group-sm">
                                <div class="custom-file">
                                    <input type="file" name="img[]" class="custom-file-input" id="inputGroupFile05"
                                        aria-describedby="inputGroupFileAddon05" multiples>
                                    <label class="custom-file-label" for="inputGroupFile05">اختر صورة</label>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>مُدة الإعلان</td>
                        <td>
                            <div class="input-group input-group-sm">
                                <select required="" name="ad_duration_per_day" class="form-select">
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
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        @if (!auth()->user())
        <div class="add-section w-75 mx-auto bg-white">
            <div class="add-section-title btn w-100 bg-primary p-1 px-3 mb-3">
                <h5 class="text-white ml-2 font-weight-bold text-left">معلومات المُعلن</h5>
            </div>
            <table class="table table-bordered table-striped mb-0 bg-white">
                <tbody>
                    <tr>
                        <td>
                            اسم المُعلن <span class="text-danger" style="font-weight: 700;">*</span>
                        </td>
                        <td>
                            <div class="input-group">
                                <input type="text" class="form-control form-control-sm" required=""
                                    name="advertiser_name" placeholder="الاسم الحقيقي">
                                <span class="input-group-text d-flex d-lg-none " style="width:50px !important;"><i
                                        class="fas fa-info-circle"></i></span>
                                <span class="input-group-text d-none d-lg-block w-100">ملاحظة: لن يتم قبول الإعلان من غير
                                    اسم
                                    حقيقي</span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            البريد الالكتروني
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-sm" name="email"
                                    placeholder="البريد الالكتروني" aria-label="البريد الالكتروني">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            رقم الهاتف
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-sm" name="phone_number"
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
                                <input type="text" class="form-control form-control-sm" required="" name="mobile"
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
        @endif
    </form>
    <style>
        .add-section * {
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
