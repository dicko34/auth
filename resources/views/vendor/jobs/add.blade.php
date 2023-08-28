@extends("layouts.vendor")
@section('pageTitle', 'Koala Web Libraries')
@section('styleChart')
<link href="{{ asset('assets/admin/libs/c3/c3.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
@endsection
@section('content')


<div class="add-section w-75 mx-auto bg-white">
    <div class="add-section-title btn w-100 bg-primary p-1 px-3 mb-3">
        <h4 class="text-white ml-2 font-weight-bold text-left">إعلان وظيفة جديد</h4>
    </div>
    <table class="table table-bordered table-striped mb-0">
        <tbody>
            <tr>
                <td>التخصص<span class="text-danger" style="">*</span></td>
                <td>
                    <div class="input-group input-group-sm">
                        <select name="speciality" class="form-control" required="">
                            <option value="6">تصميم الأزياء و الخياطة</option>
                            <option value="7">مدرس\ة</option>
                            <option value="8">تكنولوجيا المعلومات</option>
                            <option value="9">ادارة مشاريع</option>
                            <option value="10">اتمتة صناعية</option>
                            <option value="11">احياء</option>
                            <option value="12">اخصائي/ة سمع و نطق</option>
                            <option value="13">اخصائي/ة تغذية</option>
                            <option value="14">امين مستودع</option>
                            <option value="16">علوم انسانية و اجتماعية</option>
                            <option value="17">تسويق ومبيعات</option>
                            <option value="18">علاقات عامة والاتصال والتواصل</option>
                            <option value="19">صحافة واعلام</option>
                            <option value="20">تخصصات أخرى</option>
                            <option value="21">عمليات الدعم اللوجستي</option>
                            <option value="22">قانون ومحاماة</option>
                            <option value="23">فندقة وسياحة وسفر</option>
                            <option value="24">طب وتمريض وصيدلة</option>
                            <option value="25">تصميم داخلي</option>
                            <option value="26">لغات وترجمة</option>
                            <option value="27">محاسبة وعلوم مالية</option>
                            <option value="28">هندسة</option>
                            <option value="29">تعليم وتدريب</option>
                            <option value="30">ثقافة وفنون</option>
                            <option value="31">ادارة أعمال</option>
                            <option value="32">بائع/ة</option>
                            <option value="33">بصريات</option>
                            <option value="34">تحليل مخبري</option>
                            <option value="35">تخدير</option>
                            <option value="36">تدريب سياقة</option>
                            <option value="37">تربية اطفال</option>
                            <option value="38">تصنيع غذائي</option>
                            <option value="39">حراسة</option>
                            <option value="40">حدادة</option>
                            <option value="41">حلاقة</option>
                            <option value="42">خباز و صانع حلويات</option>
                            <option value="43">دهان</option>
                            <option value="44">سائق</option>
                            <option value="45">سكرتير/ة</option>
                            <option value="46">صياغة مجوهرات</option>
                            <option value="47">طب بيطري</option>
                            <option value="48">عامل بناء</option>
                            <option value="49">تجميل</option>
                            <option value="50">فني ميكانيك وكهربائي سيارات</option>
                            <option value="51">كيمياء</option>
                            <option value="52">مدرب/ة رياضة</option>
                            <option value="53">مصور/ة</option>
                            <option value="54">منقذ/ة</option>
                            <option value="55">مزارع/ة</option>
                            <option value="56">فني تكييف</option>
                            <option value="57">عامل/ة نظافة</option>
                            <option value="58">علاج طبيعي</option>
                            <option value="59">فني ألمنيوم</option>
                            <option value="60">فني كهرباء</option>
                            <option value="61">فني مصاعد</option>
                            <option value="62">طباخ/ة</option>
                            <option value="63">عامل/ة</option>
                            <option value="64">نجارة وصناعة الاثاث</option>
                            <option value="65">مسؤول برنامج</option>
                            <option value="66">مشرف\ة</option>
                            <option value="67">مندوب\ة مبيعات</option>
                            <option value="68">جزار</option>
                            <option value="69">تنجيد كنب</option>
                            <option value="70">فني صيانة</option>
                            <option value="71">سفرجي\ة</option>
                            <option value="72">عدة تخصصات</option>
                            <option value="73">موظف\ة استقبال</option>
                            <option value="74">معلم شاورما</option>
                            <option value="75">معلم مشاوي</option>
                            <option value="76">جرافيكس</option>
                            <option value="77">باحث</option>
                            <option value="78">موظف/ة</option>
                            <option value="79">كاشير</option>
                            <option value="81">مدبرة منزل</option>
                            <option value="82">فني الكترونيات</option>
                            <option value="83">مبرمج/ة</option>
                            <option value="84">ادخال بيانات</option>
                            <option value="85">فني كاميرات</option>
                            <option value="86">تجليس و دهان سيارات</option>
                            <option value="87">موظف\ة باريستا</option>
                            <option value="88">مدرب\ة</option>
                            <option value="89">فني اتصالات</option>
                            <option value="90">مساعد\ة ادارية</option>
                            <option value="91">تربية خاصة</option>
                            <option value="92">فني طباعة</option>
                            <option value="93">اخرى</option>
                            <option value="94">أمين صندوق</option>
                            <option value="95">مروج/ة</option>
                        </select>
                    </div>
                </td>
            </tr>
            <tr>
                <td>مكان العمل</td>
                <td>
                    <div class="input-group input-group-sm">
                        <input type="text" name="title" class="form-control form-control-sm">
                    </div>
                </td>
            </tr>
            <tr>
                <td>عمل ليلي <span class="text-danger" style="">*</span></td>
                <td>
                    <div class="input-group input-group-sm">
                        <input type="text" name="title" class="form-control form-control-sm"
                            placeholder="معلومات عن العمل الليلي">
                    </div>
                </td>
            </tr>
            <tr>
                <td>نوع الدوام <span class="text-danger" style="">*</span></td>
                <td>
                    <div class="form-check form-check-inline">
                        <input required="" class="form-check-input" type="radio" name="license" id="license_1"
                            value="دوام كلي">
                        <label class="form-check-label" for="license_1">دوام كلي</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input required="" class="form-check-input" type="radio" name="license" id="license_1"
                            value="دوام كلي">
                        <label class="form-check-label" for="license_1">دوام جزئي</label>
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