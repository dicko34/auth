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
                            <h3 class="m-2 m-auto"><i class="mdi mdi-car-side mr-2"></i> إعلان منزل او شقة جديدة</h3>
                        </div>
                        <form method="POST" action="{{ route('admin.homes.store') }}" enctype="multipart/form-data">
                            @csrf
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
                                            <td class="">العرض</td>
                                            <td class="">
                                                <input type="radio" value="للبيع" id="switch1" name="show" />
                                                <label for="switch1">للبيع</label>

                                                <input type="radio" value="للإيجار" id="switch2" name="show" />
                                                <label for="switch2">للإيجار</label>
                                                @error('show')
                                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">نوع المنزل</td>
                                            <td class="">
                                                <select name="home_type" required>
                                                    <option value="">حدد نوع العقار</option>
                                                    <option value="شقه">شقه</option>
                                                    <option value="منزل منفصل">منزل منفصل</option>
                                                    <option value="رووف">رووف</option>
                                                    <option value="فيلا">فيلا</option>
                                                </select>
                                                @error('home_type')
                                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">الحالة</td>
                                            <td class="">
                                                <select name="status" required="" type="text">
                                                    <option value="">حدد حاله العقار</option>
                                                    <option value="مفروشه">مفروشة</option>
                                                    <option value="غير مفروشه">غير مفروشة</option>
                                                    <option value="عظم">عظم</option>
                                                    <option value="مشطب">مشطب</option>
                                                    <option value="مشتركة">مشتركة</option>
                                                </select>
                                                @error('status')
                                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">عدد الغرف</td>
                                            <td class="">
                                                <select name="rooms_number" required="" type="text">
                                                    <option value="">حدد عدد الغرف</option>
                                                    <option value="1">غرفة واحدة - ستوديو</option>
                                                    <option value="2">غرفتين</option>
                                                    <option value="3">ثلاث غرف</option>
                                                    <option value="4">اربع غرف</option>
                                                    <option value="5">خمس غرف</option>
                                                    <option value="6">أكثر من خمس غرف</option>
                                                </select>
                                                @error('rooms_number')
                                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">عدد الحمامات</td>
                                            <td class="">
                                                <input value="" name="bathrooms_number" type="text" class=""
                                                    placeholder="عدد الحمامات">
                                                @error('bathrooms_number')
                                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">عدد المطابخ</td>
                                            <td class="">
                                                <input value="" name="kitchen_number" type="text" class=""
                                                    placeholder="عدد المطابخ">
                                                @error('kitchen_number')
                                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">الصالة</td>
                                            <td class="">
                                                <input value="" name="loung" type="text" class=""
                                                    placeholder="الصالة كبيره">
                                                @error('loung')
                                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">المساحة</td>
                                            <td class="">
                                                <input value="" name="area" type="text" class=""
                                                    placeholder="1200">
                                                @error('area')
                                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">مساحة الارض</td>
                                            <td class="">
                                                <input value="" name="land_area" type="text" class=""
                                                    placeholder="مساحة الارض المقام عليها">
                                                @error('land_area')
                                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="">عدد البرندات</td>
                                            <td class="">
                                                <input value="" name="balcony" type="text" class=""
                                                    placeholder="عدد البرندات">
                                                @error('balcony')
                                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">السعر</td>
                                            <td class="">
                                                <div class="input-group input-group-sm">
                                                    <input type="number" class="form-control " name="price"
                                                        placeholder="سعر المنزل او الشقة" aria-label="سعر المنزل او الشقة"
                                                        aria-describedby="basic-addon2">
                                                    <select name="currency" class="form-select" style="max-width:110px;">
                                                        <option value="دولار">دولار</option>
                                                        <option value="شيكل"> شيكل </option>
                                                        <option value="دينار">دينار</option>
                                                    </select>
                                                    @error('price')
                                                        <span class="invalid-feedback" style="display: block;"
                                                            role="alert">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class=""> المدن</td>
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

                                        <tr>
                                            <td class=""> العنوان</td>
                                            <td>
                                                <input value="" name="address" type="text"
                                                    placeholder="اسم المنطقة أو الشارع">
                                                @error('address')
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
                                            <td class="">إضافات</td>
                                            <td class="">
                                                <input type="checkbox" id="switch21" value="يوجد مصعد"
                                                     name="extras[]" />
                                                <label for="switch21">يوجد مصعد </label>

                                                <input type="checkbox" id="switch22" value="يوجد موقف سيارات"
                                                     name="extras[]" />
                                                <label for="switch22">يوجد موقف سيارات </label>

                                                <input type="checkbox" id="switch23" value="يوجد تدفئة"
                                                     name="extras[]" />
                                                <label for="switch23">يوجد تدفئة</label>
                                                @error('extras')
                                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">معلومات إضافية</td>
                                            <td class="">
                                                <textarea rows="4" type="text" name="description" class=""
                                                    placeholder="المزيد من المواصفات كل معلومة بسطر"></textarea>
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
                                                <input value="" name="img[]" type="file" class="form-control"
                                                    multiple>
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
                                                <input value="" name="advertiser_name" type="text"
                                                    class="" placeholder="الاسم الحقيقي">
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
                                                <input value="" name="phone_number" type="text" class=""
                                                    placeholder="رقم الهاتف مع المقدمة">
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
                                                <input value="" name="mobile" type="text" class=""
                                                    placeholder="رقم الموبايل  ">
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
                                                <input value="" type="text" name="email" class=""
                                                    placeholder="البريد الالكتروني">
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
                                    <button class="btn btn-primary w-md waves-effect waves-light" 
                                        type="submit">أضف
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
