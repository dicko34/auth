@extends("layouts.vendor")
@section('pageTitle', 'Koala Web Libraries')
@section('styleChart')
    <link href="{{ asset('assets/admin/libs/c3/c3.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
@endsection
@section('content') 

    <form method="POST" action="{{ route('vendor.jobs.store') }}" enctype="multipart/form-data">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        @endif
        @csrf
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
                                <select name="specialization" class="form-control">
                                    <option value="" selected="" class="d-none">التخصص</option>
                                    <option value="تصميم الأزياء و الخياطة">تصميم الأزياء و الخياطة</option>
                                    <option value="مدرس\ة">مدرس\ة</option>
                                    <option value="تكنولوجيا المعلومات">تكنولوجيا المعلومات</option>
                                    <option value="ادارة مشاريع">ادارة مشاريع</option>
                                    <option value="اتمتة صناعية">اتمتة صناعية</option>
                                    <option value="احياء">احياء</option>
                                    <option value="اخصائي/ة سمع و نطق">اخصائي/ة سمع و نطق</option>
                                    <option value="اخصائي/ة تغذية">اخصائي/ة تغذية</option>
                                    <option value="امين مستودع">امين مستودع</option>
                                    <option value="علوم انسانية و اجتماعية">علوم انسانية و اجتماعية</option>
                                    <option value="تسويق ومبيعات">تسويق ومبيعات</option>
                                    <option value="علاقات عامة والاتصال والتواصل">علاقات عامة والاتصال والتواصل</option>
                                    <option value="صحافة واعلام">صحافة واعلام</option>
                                    <option value="تخصصات أخرى">تخصصات أخرى</option>
                                    <option value="عمليات الدعم اللوجستي">عمليات الدعم اللوجستي</option>
                                    <option value="قانون ومحاماة">قانون ومحاماة</option>
                                    <option value="فندقة وسياحة وسفر">فندقة وسياحة وسفر</option>
                                    <option value="طب وتمريض وصيدلة">طب وتمريض وصيدلة</option>
                                    <option value="تصميم داخلي">تصميم داخلي</option>
                                    <option value="لغات وترجمة">لغات وترجمة</option>
                                    <option value="محاسبة وعلوم مالية">محاسبة وعلوم مالية</option>
                                    <option value="هندسة">هندسة</option>
                                    <option value="تعليم وتدريب">تعليم وتدريب</option>
                                    <option value="ثقافة وفنون">ثقافة وفنون</option>
                                    <option value="ادارة أعمال">ادارة أعمال</option>
                                    <option value="بائع/ة">بائع/ة</option>
                                    <option value="بصريات">بصريات</option>
                                    <option value="تحليل مخبري">تحليل مخبري</option>
                                    <option value="تخدير">تخدير</option>
                                    <option value="تدريب سياقة">تدريب سياقة</option>
                                    <option value="تربية اطفال">تربية اطفال</option>
                                    <option value="تصنيع غذائي">تصنيع غذائي</option>
                                    <option value="حراسة">حراسة</option>
                                    <option value="حدادة">حدادة</option>
                                    <option value="حلاقة">حلاقة</option>
                                    <option value="خباز و صانع حلويات">خباز و صانع حلويات</option>
                                    <option value="دهان">دهان</option>
                                    <option value="سائق">سائق</option>
                                    <option value="سكرتير/ة">سكرتير/ة</option>
                                    <option value="صياغة مجوهرات">صياغة مجوهرات</option>
                                    <option value="طب بيطري">طب بيطري</option>
                                    <option value="عامل بناء">عامل بناء</option>
                                    <option value="تجميل">تجميل</option>
                                    <option value="فني ميكانيك وكهربائي سيارات">فني ميكانيك وكهربائي سيارات</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>مكان العمل</td>
                        <td>
                            <div class="input-group input-group-sm">
                                <input type="text" name="workplace" class="form-control form-control-sm">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>عمل ليلي <span class="text-danger" style="">*</span></td>
                        <td>
                            <div class="input-group input-group-sm">
                                <input type="text" name="night_work" class="form-control form-control-sm"
                                    placeholder="معلومات عن العمل الليلي">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>نوع الدوام <span class="text-danger" style="">*</span></td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input required="" class="form-check-input" type="radio" name="permanence"
                                    id="license_1" value="دوام كلي">
                                <label class="form-check-label" for="license_1">دوام كلي</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input required="" class="form-check-input" type="radio" name="permanence"
                                    id="license_1" value="دوام كلي">
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

                            <div class="form-group input-group-sm">
                                <div class="custom-file">
                                    <input type="file" name="img[]" class="custom-file-input" id="inputGroupFile05"
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
                    <tr>
                        <td>العنوان <span class="text-danger" style="font-weight: 700;">*</span> </td>
                        <td>
                            <div class="input-group input-group-sm">
                                <input required="" type="text" class="form-control form-control-sm" name="address"
                                    placeholder="أسم المنطقة او الشارع" aria-label="أسم المنطقة او الشارع"
                                    aria-describedby="basic-addon2">
                                <span class="input-group-text d-flex d-lg-none " data-bs-toggle="tooltip"
                                    data-bs-placement="left" title="" style="width:50px !important;"
                                    id="basic-addon2"
                                    data-original-title="ملاحظة: لن يتم قبول الإعلان بدون العنوان الكامل"><i
                                        class="fas fa-info-circle"></i></span>
                                <span class="input-group-text d-none d-lg-block w-100" id="basic-addon2">ملاحظة: لن
                                    يتم قبول الإعلان بدون العنوان الكامل</span>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="add-section w-75 mx-auto bg-white">
            @if (!auth()->user())
            <div class="add-section-title btn w-100 bg-primary p-1 px-3 mb-3">
                <h5 class="text-white ml-2 font-weight-bold text-left">معلومات الشركة </h5>
            </div>
            <table class="table table-bordered table-striped mb-0 bg-white">
                <tbody>
                    <tr>
                        <td>
                            اسم الشركة <span class="text-danger" style="font-weight: 700;">*</span>
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
                            موبايل <span class="text-danger" style="font-weight: 700;"></span>
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-sm" name="mobile"
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
            @else 

            <table class="table table-bordered table-striped mb-0 bg-white">
                <tbody>
                    <tr>
                        <td colspan="100%" class="text-center">
                            <button type="submit" class="btn btn-secondary" id="submit-all">اضف الأعلان</button>
                        </td>
                    </tr>
                </tbody>
            </table>

            @endif
        </div>
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