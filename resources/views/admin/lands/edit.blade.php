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
                            <h3 class="m-2 m-auto"><i class="mdi mdi-view-dashboard mr-2"></i> إعلان ارض جديدة </h3>
                        </div>
                        <form method="post" action="{{ route('admin.lands.update', ['land' => $land->id]) }}"
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
                                            <td class="">نبذة</td>
                                            <td class="">
                                                <input name="brief" value="{{ $land->brief }}" type="text"
                                                    placeholder="نبذة عن الارض">
                                                @error('brief')
                                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">المساحة</td>
                                            <td class="">
                                                <input name="area" value="{{ $land->area }}" type="text"
                                                    placeholder="مساحة المنزل او الشقة">
                                                @error('area')
                                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">السعر</td>
                                            <td class="">
                                                <input name="price" value="{{ $land->price }}" type="text"
                                                    placeholder="سعر البيع او الايجار">
                                                @error('price')
                                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">تقع على</td>
                                            <td class="">
                                                <input type="radio" value="شارع رئيسي" id="switch21" name="located_on" />
                                                <label for="switch21">شارع رئيسي</label>

                                                <input type="radio" value="شارع فرعي" id="switch22" name="located_on" />
                                                <label for="switch22">شارع فرعي</label>

                                                <input type="radio" value="شارع رئيسي وفرعي" id="switch23"
                                                    name="located_on" />
                                                <label for="switch23">شارع رئيسي وفرعي</label>

                                                <input type="radio" value="غير ذلك" id="switch23" name="located_on" />
                                                <label for="switch23">غير ذلك</label>
                                                @error('located_on')
                                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">محاطة ب</td>
                                            <td class="">
                                                <input type="radio" value="غير محاطة" id="switch24"
                                                    name="surrounded_by" />
                                                <label for="switch24">غير محاطة</label>

                                                <input type="radio" value="سور حجر " id="switch25"
                                                    name="surrounded_by" />
                                                <label for="switch25">سور حجر </label>

                                                <input type="radio" value="سور إسمنت" id="switch26"
                                                    name="surrounded_by" />
                                                <label for="switch26">سور إسمنت</label>

                                                <input type="radio" value="سياج" id="switch27" name="surrounded_by" />
                                                <label for="switch27">سياج</label>

                                                <input type="radio" value="غير ذلك" id="switch28" name="surrounded_by" />
                                                <label for="switch23">غير ذلك</label>
                                                @error('surrounded_by')
                                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">مميزات</td>
                                            <td class="">
                                                <input type="checkbox" value="تصلها الكهرباء" id="switch210"
                                                    name="features[]" />
                                                <label for="switch210">تصلها الكهرباء</label>

                                                <input type="checkbox" value="تصلها المياه" id="switch220"
                                                    name="features[]" />
                                                <label for="switch220">تصلها المياه</label>

                                                <input type="checkbox" value="صالحة للزراعة" id="switch230"
                                                    name="features[]" />
                                                <label for="switch230">صالحة للزراعة</label>

                                                <input type="checkbox" value="صالحة للبناء التجاري" id="switch240"
                                                    name="features[]" />
                                                <label for="switch240">صالحة للبناء التجاري</label>

                                                <input type="checkbox" value="صالحة لبناء سكن" id="switch250"
                                                    name="features[]" />
                                                <label for="switch250">صالحة لبناء سكن</label>
                                                @error('features')
                                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">معلومات إضافية</td>
                                            <td class="">
                                                <textarea name="description" rows="4" type="text" class=""
                                                    placeholder="المزيد من المواصفات كل معلومة بسطر"> {{ $land->description }}</textarea>
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
                                                <input name="img[]" type="file" class="form-control" multiple>
                                                @error('img')
                                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>المدينة</td>
                                            <td>
                                                <select name="city" required="">
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
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class=""> العنوان</td>
                                            <td>
                                                <input name="address" value="{{ $land->address }}" type="text"
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
                                                @error('ad_duration_per_day')
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
                                                <input value="{{ $land->advertiser_name }}" name="advertiser_name"
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
                                                <input value="{{ $land->phone_number }}" name="phone_number"
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
                                                <input value="{{ $land->mobile }}" name="mobile" type="text"
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
                                                <input value="{{ $land->email }}" type="text" name="email"
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
        var vars = {{ Illuminate\Support\Js::from($land) }}
        console.log(vars);
        let selectTarget = (id) => {
            let com = document.querySelectorAll(`select[name="${id}"] option`);
            for (const el of com) {
                (el.value == vars[id]) ? el.selected = true: '';
            }
        }
        async function checkTarget(id) {
            let com = document.getElementsByName(`${id}`);
            // console.log(com);
            let j = [];
            for (const el of com) {
                j = vars[id].split(',').filter((e) => el.value == e)
                await (el.value == j) ? el.checked = true: '';
            }
        }
        let checkedEl = [];
        let setExetras = () => {
            document.getElementById('extras_h').value = checkedEl;
        }
        let checkedIf = (e) => {
            if (checkedEl.includes(e.target.value)) {
                checkedEl.splice(checkedEl.indexOf(e.target.value), 1)
            } else {
                checkedEl.push(e.target.value)
            }

        }
        checkTarget('features')
        checkTarget('located_on')
        checkTarget('surrounded_by')
        selectTarget('city')
        selectTarget('ad_duration_per_day')
            </script>
@endsection
