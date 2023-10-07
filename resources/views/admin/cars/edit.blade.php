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
                    <form method="post" action="{{route('admin.cars.update',['car'=>$car->id])}}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        @if ($errors->any())
     @foreach ($errors->all() as $error)
         <div>{{$error}}</div>
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
                                        <td class="">الشركة</td>
                                        <td class="">
                                        @error('model')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                            @error('model')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                            <select name="company" id="carCompany"
                                                    required="">
                                                    <option value="{{$car->company}}"selected > {{$car->company}}</option>
                                                    @foreach ($carCompanies as $carCompany)
                                                        <option value="{{ $carCompany->name }}">{{ $carCompany->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <select name="model" id="carModel">
                                                    <option value="{{$car->model}}"selected >{{$car->model}}</option>
                                                </select>
                                            <p style="color: red" class="mt-2">
                                                *في حالة عدم وجود الموديل قم بإدخاله في باقي الموديل
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">باقي الموديل</td>
                                        <td class="">
                                            <input value="{{$car->reset_model}}" type="text" name="reset_model" id="reset_model">
                                            @error('reset_model')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">موديل سنة</td>
                                        <td class="">
                                                <select name="model_year" id="year" required="" >
                                                    <option value="2023">2023 </option>
                                                    <option value="2022">2022 </option>
                                                    <option value="2021">2021 </option>
                                                    <option value="2020">2020 </option>
                                                    <option value="2019">2019 </option>
                                                    <option value="2018">2018 </option>
                                                    <option value="2017">2017 </option>
                                                    <option value="2016">2016 </option>
                                                    <option value="2015">2015 </option>
                                                    <option value="2014">2014 </option>
                                                    <option value="2013">2013 </option>
                                                    <option value="2012">2012 </option>
                                                    <option value="2011">2011 </option>
                                                    <option value="2010">2010 </option>
                                                    <option value="2009">2009 </option>
                                                    <option value="2008">2008 </option>
                                                    <option value="2007">2007 </option>
                                                    <option value="2006">2006 </option>
                                                    <option value="2005">2005 </option>
                                                    <option value="2004">2004 </option>
                                                    <option value="2003">2003 </option>
                                                    <option value="2002">2002 </option>
                                                    <option value="2001">2001 </option>
                                                    <option value="2000">2000 </option>
                                                    <option value="1999">1999 </option>
                                                    <option value="1998">1998 </option>
                                                    <option value="1997">1997 </option>
                                                    <option value="1996">1996 </option>
                                                    <option value="1995">1995 </option>
                                                    <option value="1994">1994 </option>
                                                    <option value="1993">1993 </option>
                                                    <option value="1992">1992 </option>
                                                    <option value="1991">1991 </option>
                                                    <option value="1990">1990 </option>
                                                    <option value="1989">1989 </option>
                                                    <option value="1988">1988 </option>
                                                    <option value="1987">1987 </option>
                                                    <option value="1986">1986 </option>
                                                    <option value="1985">1985 </option>
                                                    <option value="1984">1984 </option>
                                                    <option value="1983">1983 </option>
                                                    <option value="1982">1982 </option>
                                                    <option value="1981">1981 </option>
                                                    <option value="1980">1980 </option>
                                                    <option value="1979">1979 </option>
                                                    <option value="1978">1978 </option>
                                                    <option value="1977">1977 </option>
                                                    <option value="1976">1976 </option>
                                                    <option value="1975">1975 </option>
                                                    <option value="1974">1974 </option>
                                                    <option value="1973">1973 </option>
                                                    <option value="1972">1972 </option>
                                                    <option value="1971">1971 </option>
                                                    <option value="1970">1970 </option>
                                                    <option value="1969">1969 </option>
                                                    <option value="1968">1968 </option>
                                                    <option value="1967">1967 </option>
                                                    <option value="1966">1966 </option>
                                                    <option value="1965">1965 </option>
                                                    <option value="1964">1964 </option>
                                                    <option value="1963">1963 </option>
                                                    <option value="1962">1962 </option>
                                                    <option value="1961">1961 </option>
                                                    <option value="1960">1960 </option>
                                                </select>
                                            @error('model_year')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">لون السياره</td>
                                        <td class="">
                                            <select required="required" name="car_color" id="car_color"
                                            >
                                            <option value="">اختر لون المركبه</option>
                                            <option value="أبيض">أبيض</option>
                                            <option value="أبيض عاجي">أبيض عاجي</option>
                                            <option value="أحمر">أحمر</option>
                                            <option value="أخضر">أخضر</option>
                                            <option value="أزرق">أزرق</option>
                                            <option value="أزرق سماوي">أزرق سماوي</option>
                                            <option value="أسود">أسود</option>
                                            <option value="أسود ميتالك">أسود ميتالك</option>
                                            <option value="أصفر">أصفر</option>
                                            <option value="برتقالي">برتقالي</option>
                                            <option value="بنفسجي">بنفسجي</option>
                                            <option value="بني">بني</option>
                                            <option value="بترولي">بترولي</option>
                                            <option value="بيج">بيج</option>
                                            <option value="جيشي">جيشي</option>
                                            <option value="خمري">خمري</option>
                                            <option value="ذهبي">ذهبي</option>
                                            <option value="رصاصي">رصاصي</option>
                                            <option value="رمادي">رمادي</option>
                                            <option value="زيتي">زيتي</option>
                                            <option value="سكني">سكني</option>
                                            <option value="فضي">فضي</option>
                                            <option value="فيراني">فيراني</option>
                                            <option value="كحلي">كحلي</option>
                                            <option value="كرميدي">كرميدي</option>
                                            <option value="عدة الوان">عدة الوان</option>
                                        </select>
                                            @error('car_color')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                        </td>
                               
                                    </tr>
                                    <tr>
                                        <td class="">قوة الماتور</td>
                                        <td class="">
                                            <input value="{{$car->power}}" type="text" name="power" id="power" placeholder="1600 سي سي">
                                            @error('power')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">عدد الركاب</td>
                                        <td class="">
                                            <select name="passengers" id="passengers">
                                                    <option selected disabled>حدد عدد الركاب</option>
                                                    <option value="1">1</option>
                                                    <option value="1">1+1</option>
                                                    <option value="2">2+1</option>
                                                    <option value="3">3+1</option>
                                                    <option value="4">4+1</option>
                                                    <option value="5">5+1</option>
                                                    <option value="6">6+1</option>
                                                    <option value="7">7+1</option>
                                                    <option value="8">8+1</option>
                                                    <option value="9">9+1</option>
                                                    <option value="اكثر من 10">اكثر من 10</option>
                                            </select>
                                            @error('passengers')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">الدفع</td>
                                        <td class="">
                                            <select name="drive_type" id="drive_type" 
                                                    aria-invalid="false">
                                                    <option value="مركبات خاصه">مركبات خاصه </option>
                                                    <option value="مركبات ايجار">مركبات ايجار </option>
                                                    <option value="دراجات ناريه">دراجات ناريه </option>
                                                    <option value="سكوتر">سكوتر </option>
                                                    <option value="الشاحنات">الشاحنات </option>
                                                    <option value="المعدات الثقيله">المعدات الثقيله </option>
                                                    <option value="تجاريه خفيفه">تجاريه خفيفه </option>
                                                </select>
                                            @error('drive_type')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">عداد السيارة</td>
                                        <td class="">
                                            <input value="{{$car->speedmotors}}" type="text" id="speedmotors" name="speedmotors" placeholder="75000 كيلومتر">
                                            @error('speedmotors')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">أصل السيارة</td>
                                        <td class="">
                                            <select name="origin" id="origin" 
                                                    require="">
                                                    <option value="خصوصي">خصوصي</option>
                                                    <option value="عمومي">عمومي</option>
                                                    <option value="تأجير">تأجير</option>
                                                    <option value="تدريب سياقة">تدريب سياقة</option>
                                                    <option value="تجاري">تجاري</option>
                                                    <option value="حكومي">حكومي</option>
                                            </select>
                                            @error('origin')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">أصحاب سابقون</td>
                                        <td class="">
                                            <input id="car_usage" value="{{$car->car_usage}}" name="car_usage" type="text" class="" placeholder="75000">
                                            @error('car_usage')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="">السعر</td>
                                        <td class="">
                                            <input id="price" value="{{$car->price}}" name="price" type="text" class="" placeholder="75000">
                                            @error('price')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">مدة الاعلان باليوم</td>
                                        <td class="">
                                            <select required="" name="ad_duration_per_day" id="ad_duration_per_day" >
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
                                            {{$message}}
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">رخصة السيارة</td>
                                        <td class="" id="driving_license">
                                        <input type="radio" id="switch7" value="فلسطينية" name="driving_license" />
                                                <label for="switch7">فلسطينية</label>

                                                <input type="radio" value="نمرة صفراء" id="switch8" name="driving_license" />
                                                <label for="switch8">نمرة صفراء</label>
                                        </td>
                                        @error('driving_license')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                    </tr>
                                    <tr>
                                        <td class="">نوع الوقود</td>
                                        <td class="" id="fuel_type">
                                            <input type="radio" value="كهرباء" id="switch1" name="fuel_type" />
                                            <label for="switch1">كهرباء</label>

                                            <input type="radio" value="بنزين" id="switch2" name="fuel_type" />
                                            <label for="switch2">بنزين</label>

                                            <input type="radio" value="هايبرد" id="switch3" name="fuel_type" />
                                            <label for="switch3">هايبرد</label>
                                            <input type="radio" value="سولار" id="switch1" name="fuel_type" />
                                            <label for="switch1">سولار</label>

                                            @error('fuel_type')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <td class="">نوع الجير</td>
                                        <td class="" id="lime_type">
                                        <input type="radio" value="عادي" id="switch11" name="lime_type" />
                                                <label for="switch11">عادي</label>
                                                <input type="radio" value="اوتوماتيك" id="switch12"
                                                    name="lime_type" />
                                                <label for="switch12">اوتوماتيك</label>

                                                <input type="radio" value="نصف اوتوماتيك" id="switch13"
                                                    name=" lime_type" />
                                                <label for="switch13">نصف اوتوماتيك</label>

                                            @error('lime_type')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">الزجاج</td>
                                        <td class="" id="glass">
                                         <input type="radio" value="يدوي" id="switch14" name="glass" />
                                                <label for="switch14">يدوي</label>

                                                <input type="radio" value="الكتروني" id="switch15" name="glass" />
                                                <label for="switch15">الكتروني</label>
                                            @error('glass')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">معروضة</td>
                                        <td class="" id="shown">
                                            <input type="radio" value="للبيع" id="switch16" name="shown" />
                                            <label for="switch16">للبيع</label>

                                            <input type="radio" value="للبيع و البدل" id="switch16"
                                                name="shown" />
                                            <label for="switch16">للبيع و البدل</label>

                                            <input type="radio" value="للبدل" id="switch17" name="shown" />
                                            <label for="switch17">للبدل</label>

                                            <input type="radio" value="للبيع و البدل" id="switch18"
                                                name="shown" />
                                            <label for="switch18">للبيع و البدل</label>
                                            @error('shown')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">وسيلة الدفع</td>
                                        <td class="" id="pay_method">
                                            <input type="radio" value="نقدا فقط" id="switch19"
                                            name="pay_method" />
                                        <label for="switch19">نقدا فقط</label>

                                        <input type="radio" value="إمكانيه التقسيط" id="switch20"
                                            name="pay_method" />
                                        <label for="switch20">إمكانيه التقسيط</label>
                                            @error('pay_method')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">إضافات</td>
                                        <td class="" id="extras">
                                            <input type="hidden" id="extras_h" name="extras">
                                            <input id="property[6]" name="extras[]" type="checkbox"
                                            value="إغلاق مركزي">
                                        <label for="property[6]"> إغلاق مركزي</label>

                                        <input id="property[7]" name="extras[]" type="checkbox"
                                            value="جنطات مغنيسيوم">
                                        <label for="property[7]"> جنطات مغنيسيوم</label>

                                        <input id="property[8]" name="extras[]" type="checkbox"
                                            value="وسادة حماية هوائية">
                                        <label for="property[8]"> وسادة حماية هوائية</label>

                                        <input id="property[9]" name="extras[]" type="checkbox"
                                            value="كميرا ريفرس">
                                        <label> كميرا ريفرس</label>

                                        <input id="property[10]" name="extras[]" type="checkbox"
                                            value="حساسات">
                                        <label for="property[10]"> حساسات</label>

                                        <input id="property[11]" name="extras[]" type="checkbox"
                                            value="انارة لد داخلية">
                                        <label for="property[11]"> انارة لد داخلية</label>

                                        <input id="property[12]" name="extras[]" type="checkbox"
                                            value="اضواء زينون وليدات">
                                        <label for="property[12]"> اضواء زينون وليدات</label>

                                        <input id="property[14]" name="extras[]" type="checkbox"
                                            value="كاميرا 360 درجة">
                                        <label for="property[14]"> كاميرا 360 درجة</label>

                                        <input id="property[15]" name="extras[]" type="checkbox"
                                            value="زجاج معتم">
                                        <label for="property[15]"> زجاج معتم</label>

                                        <input id="property[16]" name="extras[]" type="checkbox"
                                            value="نظام ردار">
                                        <label for="property[16]"> نظام ردار</label>

                                        <input id="property[17]" name="extras[]" type="checkbox"
                                            value="شاشة">
                                        <label for="property[17]"> شاشة</label>

                                        <input id="property[18]" name="extras[]" type="checkbox"
                                            value="مثبت سرعة">
                                        <label for="property[18]"> مثبت سرعة</label>

                                        <input id="property[19]" name="extras[]" type="checkbox"
                                            value="هاند بريك كهرباء">
                                        <label for="property[19]"> هاند بريك كهرباء</label>

                                        <input id="property[20]" name="extras[]" type="checkbox"
                                            value="فتحة سقف بانوراما">
                                        <label for="property[20]"> فتحة سقف بانوراما</label>

                                        <input id="property[21]" name="extras[]" type="checkbox"
                                            value="شاحن لاسلكي">
                                        <label for="property[21]"> شاحن لاسلكي</label>
                                            @error('extras')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">معلومات إضافية</td>
                                        <td class="">
                                            <textarea name="description"  rows="4" type="text" class="" placeholder="المزيد من المواصفات كل معلومة بسطر">{{$car->description}}</textarea>
                                            @error('description')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">العنوان</td>
                                        <td class="">
                                            <input name="address" value="{{$car->address}}" type="text" class=""
                                                placeholder="اسم الشارع او المنطقة">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">الصور</td>
                                        <td class="">
                                            <input name="img" value="{{$car->img}}" type="file" class="form-control" multiple>
                                            @error('img')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="">المدينة</td>
                                        <td class="">
                                            <select name="city">
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
                                            <input name="advertiser_name" type="text" value="{{$car->advertiser_name}}" placeholder="الاسم الحقيقي">
                                            @error('advertiser_name')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">رقم الهاتف</td>
                                        <td class="">
                                            <input name="phone_number" value="{{$car->phone_number}}" type="text" class="" placeholder="رقم الهاتف مع المقدمة">
                                            @error('phone_number')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">موبايل</td>
                                        <td class="">
                                            <input name="mobile" value="{{$car->mobile}}" type="text" class="" placeholder="رقم الموبايل  ">
                                            @error('mobile')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">البريد الالكتروني</td>
                                        <td class="">
                                            <input name="email" value="{{$car->email}}" type="text" class="" placeholder="البريد الالكتروني">
                                            @error('email')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <button class="btn btn-primary w-md waves-effect waves-light" type="submit"  onclick="setExetras()">أضف
                                    الأعلان</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    var vars = {{Illuminate\Support\Js::from($car)}};
    let selectTarget = (id) => {
        let com = document.querySelectorAll(`#${id} option`);
        for (const el of com) {
            (el.value == vars[id]) ? el.selected = true: '';
        }
    }
    async function  checkTarget (id)  {
        let com =  document.querySelectorAll(`select[name="${id}"] option`);
        let j = [];
        
        for (const el of com) {
            j = vars[id].split(',').filter((e) => el.value == e)
            await  (el.value == j) ? el.checked = true: '';
        }
    }
    selectTarget('company')
    selectTarget('model')
    selectTarget('model_year')
    selectTarget('car_color')
    selectTarget('passengers')
    selectTarget('drive_type')
    selectTarget('origin')
    selectTarget('ad_duration_per_day')
    selectTarget('city')
    checkTarget('driving_license')
    checkTarget('fuel_type')
    checkTarget('lime_type')
    checkTarget('glass')
    checkTarget('shown')
    checkTarget('pay_method')
    checkTarget('extras')
    $(document).ready(function () {
            $('#carCompany').change(function () {
                
                var carCompany = encodeURIComponent($(this).val());
                
                if (carCompany) {
                    $.ajax({
                        type: "GET",
                        url: "/get-car-models/" + carCompany,
                        success: function (data) {
                            console.log(data);
                            $('#carModel').empty();
                            $.each(data, function (id, model) {
                                $('#carModel').append(new Option(model, id));
                            });
                        }
                    });
                } else {
                    $('#carModel').empty();
                }
            });
        });
</script>
@endsection