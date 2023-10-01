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
                        <div class="row m-5">
                            <h3 class="m-5 m-auto"><i class="fab fa-telegram-plane mr-2"></i> أضافة إعلان عام </h3>
                        </div>
                        <form method="post" action="{{ route('admin.generals.update', ['general' => $general->id]) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div>{{ $error }}</div>
                                @endforeach
                            @endif
                            <div class="row m-3">
                                <div class="col-sm-4">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">العنوان</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" value="{{ $general->address }}" name="address"
                                                type="text" placeholder="تلفاز ملون 20 بوصة">
                                            @error('address')
                                                <span class="invalid-feedback" style="display: block;" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">الصنف</label>
                                        <div class="col-sm-8">
                                            <select name="category" class="form-control">
                                                <option value="1">اثاث منزلي و مكتبي</option>
                                                <option value="2">اجهزة الكترونية</option>
                                                <option value="3">اجهزة انذار ومراقبة</option>
                                                <option value="4">اجهزة طبية</option>
                                                <option value="5">اجهزة كهربائية</option>
                                                <option value="6">احذية</option>
                                                <option value="7">ادوات رياضية</option>
                                                <option value="8">ادوات صحية</option>
                                                <option value="9">ادوات منزلية</option>
                                                <option value="10">ازهار واشتال ونباتات</option>
                                                <option value="11">الات ومعدات</option>
                                                <option value="12">العاب</option>
                                                <option value="13">برامج كمبيوتر</option>
                                                <option value="14">تجهيزات مكتبية</option>
                                                <option value="15">تحف وهدايا</option>
                                                <option value="16">تكييف وتبريد</option>
                                                <option value="21">خلويات ولوازمها</option>
                                                <option value="25">ديكور</option>
                                                <option value="26">سجاد وموكيت</option>
                                                <option value="29">شحن وتخليص جمركي</option>
                                                <option value="30">شروات وصفقات تجارية</option>
                                                <option value="31">عطور</option>
                                                <option value="32">قرطاسية</option>
                                                <option value="34">كمبيوتر ومستلزماته</option>
                                                <option value="35">قطع سيارات</option>
                                                <option value="36">مجوهرات</option>
                                                <option value="37">معدات ثقيلة</option>
                                                <option value="38">مفروشات</option>
                                                <option value="39">ملابس</option>
                                                <option value="40">مواد تجميل</option>
                                                <option value="41">مواد غذائية</option>
                                                <option value="42">نظارات</option>
                                                <option value="43">آلات موسيقية</option>
                                                <option value="44">اتصالات</option>
                                                <option value="45">اكسسوارات ونثريات</option>
                                                <option value="46">دورات تعليمية</option>
                                                <option value="47">سيارات وتوابعها</option>
                                                <option value="49">حيوانات</option>
                                                <option value="48">خدمات عامة</option>
                                            </select>
                                            @error('category')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                                {{$message}}
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">السعر</label>
                                        <div class="col-sm-8">
                                            <input name="price" type="text" class="form-control" placeholder="75000"
                                                value="{{ $general->price }}">
                                            @error('price')
                                                <span class="invalid-feedback" style="display: block;" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">مدة الاعلان باليوم</label>
                                        <div class="col-sm-8">
                                            <select required="" name="ad_duration_per_day" class="form-control">
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
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">المدينة</label>
                                    <div class="col-sm-8">
                                        <select required="" name="city" class="form-control">
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
                                        @error('city')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                                <div class="col-sm-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">معلومات إضافية</label>
                                        <div class="col-sm-10">
                                            <textarea name="description" rows="8" type="text" class="form-control"
                                                placeholder="المزيد من المواصفات كل معلومة بسطر">
                                                {{ $general->description }}
                                            </textarea>
                                            @error('description')
                                                <span class="invalid-feedback" style="display: block;" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">الصور</label>
                                        <div class="col-sm-10">
                                            <input name="img[]" type="file" class="form-control" multiple>
                                            @error('img')
                                                <span class="invalid-feedback" style="display: block;" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <hr>

                                <h3 class="m-5">بيانات المُعلن</h3>

                                <div class="col-sm-12">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">الاسم</label>
                                        <div class="col-sm-8">
                                            <input name="advertiser_name" type="text" class="form-control"
                                                placeholder="الاسم الحقيقي" value="{{ $general->advertiser_name }}">
                                            @error('advertiser_name')
                                                <span class="invalid-feedback" style="display: block;" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">رقم الهاتف</label>
                                        <div class="col-sm-8">
                                            <input name="phone_number" type="text" class="form-control"
                                                placeholder="رقم الهاتف مع المقدمة" value="{{ $general->phone_number }}">
                                            @error('phone_number')
                                                <span class="invalid-feedback" style="display: block;" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">رقم الموبايل</label>
                                        <div class="col-sm-8">
                                            <input name="mobile" type="text" class="form-control"
                                                placeholder="رقم الموبايل  " value="{{ $general->mobile }}">
                                            @error('mobile')
                                                <span class="invalid-feedback" style="display: block;" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">الايميل</label>
                                        <div class="col-sm-8">
                                            <input name="email" value="{{ $general->email }}" type="text"
                                                class="form-control" placeholder="البريد الالكتروني">
                                            @error('email')
                                                <span class="invalid-feedback" style="display: block;" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
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
        var vars = {{ Illuminate\Support\Js::from($general) }};
        let selectTarget = (id) => {
            let com = document.querySelectorAll(`select[name="${id}"] option`);
            console.log(vars);
            for (const el of com) {
                console.log(el);
                (el.value == vars[id]) ? el.selected = true: '';
            }
        }
        selectTarget('ad_duration_per_day')
        selectTarget('category')
        selectTarget('city')
    </script>
@endsection
