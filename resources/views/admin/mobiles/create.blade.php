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
                            <h3 class="m-5 m-auto"><i class="mdi mdi-car-side mr-2"></i> أضافة إعلان جهاز ذكي جديد </h3>
                        </div>
                        <form method="POST" action="{{ route('admin.mobiles.store') }}" enctype="multipart/form-data">
                            @csrf
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div>{{ $error }}</div>
                                @endforeach
                            @endif
                            <div class="row m-3">
                                <div class="col-sm-4">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">حالة الجهاز</label>
                                        <div class="col-sm-8">
                                            <select name="device_status" class="form-control">
                                                <option>جديد</option>
                                                <option>قديم</option>
                                            </select>
                                            @error('device_status')
                                                <span class="invalid-feedback" style="display: block;" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">الشركة </label>
                                        <div class="col-sm-8">
                                            <select name="model" class="form-control">
                                                <option value="Alcatel">Alcatel</option>
                                                <option value="Apple">Apple</option>
                                                <option value="Asus">Asus</option>
                                                <option value="BlackView">BlackView</option>
                                                <option value="Bluboo">Bluboo</option>
                                                <option value="Doogee">Doogee</option>
                                                <option value="Elephone">Elephone</option>
                                                <option value="Homtom">Homtom</option>
                                                <option value="HTC">HTC</option>
                                                <option value="Leagoo">Leagoo</option>
                                                <option value="LG">LG</option>
                                                <option value="Micromax">Micromax</option>
                                                <option value="OnePlus">OnePlus</option>
                                                <option value="Oppo">Oppo</option>
                                                <option value="Posh">Posh</option>
                                                <option value="Telego">Telego</option>
                                                <option value="UMi">UMi</option>
                                                <option value="Vernee">Vernee</option>
                                                <option value="XGody">XGody</option>
                                                <option value="بلاك بيري">بلاك بيري</option>
                                                <option value="توشيبا">توشيبا</option>
                                                <option value="جوجل">جوجل</option>
                                                <option value="سامسونج">سامسونج</option>
                                                <option value="سوني">سوني</option>
                                                <option value="شومي Xiaomi">شومي Xiaomi</option>
                                                <option value="لينوفو">لينوفو</option>
                                                <option value="موتورولا">موتورولا</option>
                                                <option value="نوكيا">نوكيا</option>
                                                <option value="هواوي">هواوي</option>
                                            </select>
                                            @error('model')
                                                <span class="invalid-feedback" style="display: block;" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">باقي الموديل</label>
                                        <div class="col-sm-8">
                                            <input name="reset_model" type="text" class="form-control">
                                            @error('reset_model')
                                                <span class="invalid-feedback" style="display: block;" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">عدد الشرائح</label>
                                        <div class="col-sm-8">
                                            <select name="slides_number" class="form-control">
                                                <option value="">حدد عدد الشرائح</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                            </select>
                                            @error('slides_number')
                                                <span class="invalid-feedback" style="display: block;" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">حجم الشاشة</label>
                                        <div class="col-sm-8">
                                            <input name="screen_size" type="text" class="form-control"
                                                placeholder="مثال 5 بوصة">
                                            @error('screen_size')
                                                <span class="invalid-feedback" style="display: block;" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label"> الكاميرات</label>
                                        <div class="col-sm-8">
                                            <input name="cameras" type="text" class="form-control"
                                                placeholder="مثال 18 ميجا خلفية">
                                            @error('cameras')
                                                <span class="invalid-feedback" style="display: block;" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label"> الذاكرة</label>
                                        <div class="col-sm-8">
                                            <input name="memory" value="" type="text" class="form-control"
                                                placeholder="مثال 8">
                                            @error('memory')
                                                <span class="invalid-feedback" style="display: block;" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label"> سعة التخزين</label>
                                        <div class="col-sm-8">
                                            <input name="storage" value="" type="text" class="form-control"
                                                placeholder="مثال 16">
                                            @error('storage')
                                                <span class="invalid-feedback" style="display: block;" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">السعر</label>
                                        <div class="col-sm-8">
                                            <input name="price" value="" type="text" class="form-control"
                                                placeholder="75000">
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
                                            <select name="ad_duration_per_day" class="form-control">
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
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">العنوان</label>
                                        <div class="col-sm-8">
                                            <input name="address" value="" type="text" class="form-control"
                                            placeholder="أسم المنطقة او الشارع">
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
                                            <textarea rows="8" name="description" type="text" class="form-control"
                                                placeholder="المزيد من المواصفات كل معلومة بسطر"></textarea>
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
                                                placeholder="الاسم الحقيقي">
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
                                                placeholder="رقم الهاتف مع المقدمة">
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
                                        <label class="col-sm-4 col-form-label">البريد الالكتروني</label>
                                        <div class="col-sm-8">
                                            <input name="email" type="text" class="form-control"
                                                placeholder="البريد الالكتروني">
                                            @error('email')
                                                <span class="invalid-feedback" style="display: block;" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
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
@endsection
