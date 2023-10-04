@extends('layouts.admin')
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
                            <h3 class="m-2 m-auto"><i class="fas fa-address-book mr-2"></i> تعديل إعلان وظيفة </h3>
                        </div>
                        <form method="post" action="{{ route('admin.jobs.update', ['job' => $job->id]) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div>{{ $error }}</div>
                                @endforeach
                            @endif
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
                                            <td class="">التخصص</td>
                                            <td class="">
                                                <select name="specialization">
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
                                                    <option value="علاقات عامة والاتصال والتواصل">علاقات عامة والاتصال
                                                        والتواصل</option>
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
                                                    <option value="فني ميكانيك وكهربائي سيارات">فني ميكانيك وكهربائي سيارات
                                                    </option>
                                                </select>
                                                @error('specialization')
                                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">مكان العمل</td>
                                            <td class="">
                                                <input name="workplace" type="text" class="form-control"
                                                    placeholder=" معلومات عن العمل بالليل او المناوبة" value="{{ $job->workplace }}">
                                                @error('workplace')
                                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">عمل ليلي</td>
                                            <td class="">
                                                <input name="night_work" value="{{ $job->night_work }}" type="text"
                                                    class="form-control" placeholder=" معلومات عن العمل بالليل او المناوبة">
                                                @error('night_work')
                                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">الدوام</td>
                                            <td class="">
                                                <input type="radio" id="switch1" name="permanence" value="دوام كامل" />
                                                <label for="switch1">دوام كامل</label>

                                                <input type="radio" id="switch2" name="permanence" value="دوام جزئي" />
                                                <label for="switch2">دوام جزئي</label>

                                                @error('permanence')
                                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">معلومات إضافية</td>
                                            <td class="">
                                                <textarea rows="4" type="text" name="description" placeholder="المزيد من المواصفات كل معلومة بسطر">
                                                {{ $job->description }}
                                                </textarea>
                                                @error('description')
                                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">الصور</td>
                                            <td class="">
                                                <input name="img[]" type="file" class="form-control" multiple>.
                                                @error('img')
                                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">مدة الاعلان باليوم</td>
                                            <td class="">
                                                <select name="ad_duration_per_day">
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
                                                @error('ad_duration_per_day')
                                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">العنوان</td>
                                            <td class="">
                                                <input name="address" value="{{ $job->address }}" type="text" class="form-control"
                                                    placeholder="أسم المنطقة او الشارع">
                                                @error('address')
                                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>المدينه </td>
                                            <td>
                                                <select name="city"required="">
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
                                                @error('city')
                                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
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
                                                <input value="{{ $job->advertiser_name }}" name="advertiser_name"
                                                    type="text" class="" placeholder="الاسم الحقيقي">
                                                @error('advertisr_name')
                                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">رقم الهاتف</td>
                                            <td class="">
                                                <input value="{{ $job->phone_number }}" name="phone_number"
                                                    type="text" class="" placeholder="رقم الهاتف مع المقدمة">
                                                @error('phone_number')
                                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">موبايل</td>
                                            <td class="">
                                                <input value="{{ $job->mobile }}" name="mobile" type="text"
                                                    class="" placeholder="رقم الموبايل  ">
                                                @error('mobile')
                                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">البريد الالكتروني</td>
                                            <td class="">
                                                <input value="{{ $job->email }}" type="text" name="email"
                                                    class="" placeholder="البريد الالكتروني">
                                                @error('email')
                                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
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
    <script>
        var vars = {{ Illuminate\Support\Js::from($job) }};
        console.log(vars);
        let selectTarget = (id) => {
            let com = document.querySelectorAll(`select[name="${id}"] option`);

            for (const el of com) {
                (el.innerHTML == vars[id]) ? el.selected = true: '';
            }
        }
        async function checkTarget(id) {
            let com = document.getElementsByName(`${id}`);
            console.log(com);
            let j = [];
            for (const el of com) {
                j = vars[id].split(',').filter((e) => el.value == e)
                console.log(j);
                await (el.value == j) ? el.checked = true: '';
            }
        }
        selectTarget('specialzation')
        checkTarget('permanence')
        selectTarget('city')
        selectTarget('ad_duration_per_day')
    </script>
@endsection
