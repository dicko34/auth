@extends("layouts.vendor")
@section('pageTitle', 'Koala Web Libraries')
@section('styleChart')
<link href="{{ asset('assets/admin/libs/c3/c3.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
@endsection
@section('content')
{{--
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
        <div class="col-lg-9 col-12">
            <div class="row">
                <div class="card w-100">
                    <div class="body-card m-1">
                        <div class="row m-2">
                            <h3 class="m-2 m-auto"><i class="mdi mdi-car-side mr-2"></i> إعلان سيارة جديد </h3>
                        </div>
                        <form>
                            <div class="row m-0 ">
                                <table class="table table-striped table-bordered mb-0 text-center h5">
                                    
                                    <tbody class="text-left">
                                        <tr>
                                            <td class="">الشركة</td>
                                            <td class="">
                                                <select class="w-100 mt-1">
                                                    <option>جميع الشركات</option>
                                                    <option>الكل</option>
                                                    <option>Large select</option>
                                                    <option>Small select</option>
                                                </select>
                                                <select class="mb-1 w-100">
                                                    <option>موديل</option>
                                                    <option>الكل</option>
                                                    <option>Large select</option>
                                                    <option>Small select</option>
                                                </select>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">باقي الموديل</td>
                                            <td class="">
                                                <input value="" type="text" class="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">موديل سنة</td>
                                            <td class="">
                                                <select class="">
                                                    <option>2020</option>
                                                    <option>Large select</option>
                                                    <option>Small select</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">لون السياره</td>
                                            <td class="">
                                                <select class="">
                                                    <option>اسود</option>
                                                    <option>Large select</option>
                                                    <option>Small select</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">قوة الماتور</td>
                                            <td class="">
                                                <input value="" type="text" class="" placeholder="1600 سي سي">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">عدد الركاب</td>
                                            <td class="">
                                                <select class="">
                                                    <option>2</option>
                                                    <option>Large select</option>
                                                    <option>Small select</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">الدفع</td>
                                            <td class="">
                                                <select class="">
                                                    <option>دفع أمامي</option>
                                                    <option>Large select</option>
                                                    <option>Small select</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">عداد السيارة</td>
                                            <td class="">
                                                <input value="" type="text" class=""
                                                    placeholder="75000 كيلومتر">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">أصل السيارة</td>
                                            <td class="">
                                                <select class="">
                                                    <option>خصوصي</option>
                                                    <option>Large select</option>
                                                    <option>Small select</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">السعر</td>
                                            <td class="">
                                                <input value="" type="text" class="" placeholder="75000">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">مدة الاعلان باليوم</td>
                                            <td class="">
                                                <select class="">
                                                    <option>30</option>
                                                    <option>Large select</option>
                                                    <option>Small select</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">رخصة السيارة</td>
                                            <td class="">
                                                <input type="radio" id="switch7" name="aa" />
                                                <label for="switch7">فلسطينية</label>

                                                <input type="radio" id="switch8" name="aa" />
                                                <label for="switch8">نمرة صفراء</label>


                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">نوع الوقود</td>
                                            <td class="">
                                                <input type="radio" id="switch1" name="bb" />
                                                <label for="switch1">ديزل</label>

                                                <input type="radio" id="switch2" name="bb" />
                                                <label for="switch2">بنزين</label>

                                                <input type="radio" id="switch3" name="bb" />
                                                <label for="switch3">هايبرد</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">نوع الجير</td>
                                            <td class="">
                                                <input type="radio" id="switch11" name="cc" />
                                                <label for="switch11">عادي</label>

                                                <input type="radio" id="switch12" name="cc" />
                                                <label for="switch12">اوتوماتيك</label>

                                                <input type="radio" id="switch13" name="cc" />
                                                <label for="switch13">نصف اوتوماتيك</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">الزجاج</td>
                                            <td class="">
                                                <input type="radio" id="switch14" name="dd" />
                                                <label for="switch14">يدوي</label>

                                                <input type="radio" id="switch15" name="dd" />
                                                <label for="switch15">الكتروني</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">معروضة</td>
                                            <td class="">
                                                <input type="radio" id="switch16" name="ee" />
                                                <label for="switch16">للبيع فقط</label>

                                                <input type="radio" id="switch17" name="ee" />
                                                <label for="switch17">للتبديل فقط</label>

                                                <input type="radio" id="switch18" name="ee" />
                                                <label for="switch18">للبيع أو التبديل</label>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">وسيلة الدفع</td>
                                            <td class="">
                                                <input type="radio" id="switch19" name="ff" />
                                                <label for="switch19">نقدا فقط</label>

                                                <input type="radio" id="switch20" name="ff" />
                                                <label for="switch20">إمكانية التقسيط</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">إضافات</td>
                                            <td class="">
                                                <input type="checkbox" id="switch21" name="gg" />
                                                <label for="switch21">جهاز إنذار</label>

                                                <input type="checkbox" id="switch22" name="gg" />
                                                <label for="switch22">مُكيّف</label>

                                                <input type="checkbox" id="switch23" name="gg" />
                                                <label for="switch23">مسجل CD</label>

                                                <input type="checkbox" id="switch24" name="gg" />
                                                <label for="switch24">فتحة سقف</label>

                                                <input type="checkbox" id="switch25" name="gg" />
                                                <label for="switch25">فرش جلد</label>

                                                <input type="checkbox" id="switch26" name="gg" />
                                                <label for="switch26">إغلاق مركزي</label>

                                                <input type="checkbox" id="switch27" name="gg" />
                                                <label for="switch27">جنطات مغنيسيوم</label>

                                                <input type="checkbox" id="switch28" name="gg" />
                                                <label for="switch28">وسادة حماية هوائية</label>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">معلومات إضافية</td>
                                            <td class="">
                                                <textarea rows="4" type="text" class=""
                                                    placeholder="المزيد من المواصفات كل معلومة بسطر"></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">الصور</td>
                                            <td class="">
                                                <input value="" type="file" class="form-control" multiple>
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
                                                <input value="" type="text" class=""
                                                    placeholder="الاسم الحقيقي">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">رقم الهاتف</td>
                                            <td class="">
                                                <input value="" type="text" class=""
                                                    placeholder="رقم الهاتف مع المقدمة">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">موبايل</td>
                                            <td class="">
                                                <input value="" type="text" class=""
                                                    placeholder="رقم الموبايل  ">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">البريد الالكتروني</td>
                                            <td class="">
                                                <input value="" type="text" class=""
                                                    placeholder="البريد الالكتروني">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class=""> المدينة</td>
                                            <td class="">
                                                <select class="">
                                                    <option>اريحا</option>
                                                    <option>Large select</option>
                                                    <option>Small select</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">العنوان</td>
                                            <td class="">
                                                <input value="" type="text" class=""
                                                    placeholder="اسم الشارع او المنطقة">
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

            <div class="row">
                <div class="card w-100">
                    <div class="body-card m-3">
                        <div class="row">
                            <h3 class="mb-4 col-6 btn btn-primary w-md waves-effect waves-light"><i
                                    class="mdi mdi-car-side mr-2"></i>800 سيارة</h3>
                            <div class="col-6 text-right">
                                <a class="btn btn-primary w-md waves-effect waves-light w-100"
                                    href="{{ route('car.add') }}">أضافة أعلان هنا</a>
</div>
</div>
<div class="row mt-2 mb-2">

    @for ($i = 0; $i < 12; $i++) <div class="col-6 col-xl-4  p-0 bordertoty">
        <div class="cardtoty m-sm-1 m-0 p-1">
            <a href="{{ asset('assets/admin/images/car.jpeg') }}" class="gallery-popup"
                style="height: 130px; width:100%">
                <div class="project-item">
                    <div class="overlay-container">
                        <img src="{{ asset('assets/admin/images/car.jpeg') }}" alt="img" class="gallery-thumb-img m-0"
                            style="height: 130px; width:100%">
                        <div class="project-item-overlay text-right">
                            <h4>عقارات</h4>
                            <p>
                                <img src="{{ asset('assets/admin/images/car.jpeg') }}" alt="user"
                                    class="avatar-xs rounded-circle">
                                <span class="ml-2">مارتينا جرجس</span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <div class="mt-2 mb-2">
                <h4 class="" style="color:#820120">شقق</h4>
                <p class="card-text">شقة عظم للبيع في الخليل ١٣٦ م
                    وسط الخليل على بعد 570 متري</p>
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
</div>
<div class="col-00 col-lg-3">
    <div class="row m-1">
        <div class="card w-100">
            <div class="body-card m-3">
                <div class="row">
                    <h3 class="mb-4 col-6 ">اعلانات</h3>
                </div>
                <div class="row m-2 mb-2">

                    @for ($i = 0; $i < 4; $i++) <div class="col-12 p-0 bordertoty">
                        <div class="cardtoty m-sm-1 m-0 p-1">
                            <a href="{{ asset('assets/admin/images/car.jpeg') }}" class="gallery-popup"
                                style="height: 130px; width:100%">
                                <div class="project-item">
                                    <div class="overlay-container">
                                        <img src="{{ asset('assets/admin/images/car.jpeg') }}" alt="img"
                                            class="gallery-thumb-img m-0" style="height: 130px; width:100%">
                                        <div class="project-item-overlay text-right">
                                            <h4>عقارات</h4>
                                            <p>
                                                <img src="{{ asset('assets/admin/images/car.jpeg') }}" alt="user"
                                                    class="avatar-xs rounded-circle">
                                                <span class="ml-2">مارتينا جرجس</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="mt-2 mb-2">
                                <h4 class="" style="color:#820120">شقق</h4>
                                <p class="card-text">شقة عظم للبيع في الخليل ١٣٦ م
                                    وسط الخليل على بعد 570 متري</p>
                            </div>
                        </div>
                </div>
                @endfor

            </div>
        </div>
    </div>
</div>
</div>
</div>
<style>
* {
    font-family: 'Tajawal' !important;
}
</style> --}}


<div class="panel panel-default single-my-account">
    <div id="my-account-1" class="panel-collapse collapse show">
        <div style="position: absolute;width: 100%;height: 100%;background: #fff9;z-index: 9;" id="Loading"
            class="d-none">
            <div
                style="position: absolute; z-index: 999; top: 0;bottom: 0; right: 0;left: 0; margin: auto;width: 287px; height: 0; font-size: 32px;">
                جاري اضافه الاعلان ...</div>
        </div>
        <div class="panel panel-default single-my-account">
            <div class="panel-heading my-account-title">
                <h6 class="panel-title sub-title">إعلان سيارة جديد</h6>
            </div>
        </div>
        <div class="panel-body">
            <div class="">
                <table class="table table-bordered table-striped mb-0">
                    <tbody>
                        <tr>
                            <td>موديل السيارة <span class="text-danger" style="">*</span></td>
                            <td>
                                <div class="input-group input-group-sm">
                                    <select name="carCompany" class="form-select form-select-sm model-type-car"
                                        id="carCompany" required="">
                                        <option value="">جميع الشركات</option>
                                        <option value="1">بي ام دبليو | BMW </option>
                                        <option value="18">رينو | RENAULT </option>
                                        <option value="27">سوبارو | SUBARU </option>
                                        <option value="28">روفر | ROVER </option>
                                        <option value="29">سانغ يونغ | SSANGYONG </option>
                                        <option value="35">داتشا | DACIA </option>
                                        <option value="39">فولفو | VOLVO </option>
                                        <option value="2">الفا روميو | ALFA ROMEO </option>
                                        <option value="5">سكودا | SKODA </option>
                                        <option value="6">هونداي | HYUNDAI </option>
                                        <option value="7">فورد | FORD </option>
                                        <option value="8">سيات | SEAT </option>
                                        <option value="24">فولكسفاجن | VOLKSWAGEN </option>
                                        <option value="25">شفرليت | CHEVROLET </option>
                                        <option value="26">ستروين | CITROEN </option>
                                        <option value="30">دايو | DAEWOO </option>
                                        <option value="46">جاكوار </option>
                                        <option value="47">سوزوكي </option>
                                        <option value="48">جاجوار </option>
                                        <option value="49">SCANIA </option>
                                        <option value="3">اودي | AUDI </option>
                                        <option value="34">ميتسوبيشي | MITSUBISHI </option>
                                        <option value="4">اوبل | OPEL </option>
                                        <option value="36">شحن داف | DAF </option>
                                        <option value="40">دراجة هيوسونغ | HYOSUNG </option>
                                        <option value="10">كيا | KIA </option>
                                        <option value="38">شحن مان | MAN </option>
                                        <option value="43">جي ام سي | GMC </option>
                                        <option value="12">جيب | JEEP </option>
                                        <option value="13">دودج | DODGE </option>
                                        <option value="45">دراجة </option>
                                        <option value="14">شحن ايفيكو | IVECO </option>
                                        <option value="15">ايسوزو | ISUZU </option>
                                        <option value="23">مرسيدس | MERCEDES </option>
                                        <option value="16">بيجو | PEUGEOT </option>
                                        <option value="17">مازدا | MAZDA </option>
                                        <option value="19">تويوتا | TOYOTA </option>
                                        <option value="21">نيسان | NISSAN </option>
                                        <option value="22">لاندروفر | LAND ROVER </option>
                                        <option value="42">فيات | FIAT </option>
                                        <option value="44">هوندا | HONDA </option>
                                    </select>
                                    <select name="carModels" disabled="" id="carModels"
                                        class="form-select form-select-sm disabled model">
                                        <option value="">موديل السياره</option>
                                    </select>
                                    <span class="input-group-text d-flex d-lg-none text-center" data-bs-toggle="tooltip"
                                        data-bs-placement="left" title=""
                                        style="width:50px !important;flex-wrap: nowrap; justify-content: center;"
                                        id="basic-addon2"
                                        data-original-title="في حال عدم توفر موديل السيارة، الرجاء تعبئة خانة &quot;باقي الموديل&quot;"><i
                                            class="fas fa-info-circle"></i></span>
                                    <span class="input-group-text d-none d-lg-block w-100" id="basic-addon2">في حال عدم
                                        توفر موديل السيارة، الرجاء تعبئة خانة "باقي الموديل"</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>باقي الموديل </td>
                            <td>
                                <div class="input-group input-group-sm">
                                    <input type="text" name="title" class="form-control form-control-sm"
                                        aria-label="باقي الموديل " aria-describedby="basic-addon2">
                                    <span class="input-group-text d-flex d-lg-none text-center" data-bs-toggle="tooltip"
                                        data-bs-placement="left" title=""
                                        style="width:50px !important;flex-wrap: nowrap; justify-content: center;"
                                        id="basic-addon2" data-original-title="مثال: فولكسفايجن باسات،اوبل استرا"><i
                                            class="fas fa-info-circle"></i></span>
                                    <span class="input-group-text d-none d-lg-block w-100" id="basic-addon2">مثال:
                                        فولكسفايجن باسات،اوبل استرا</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>موديل سنة <span class="text-danger" style="">*</span></td>
                            <td>
                                <div class="input-group input-group-sm">
                                    <select name="year" id="year" required="" class="form-select">
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
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>لون السيارة <span class="text-danger" style="">*</span></td>
                            <td>
                                <div class="input-group input-group-sm">
                                    <select required="required" name="color" id="car_color" class="form-select">
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
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>قوة الماتور <span class="text-danger" style="">*</span></td>
                            <td>
                                <div class="input-group input-group-sm">
                                    <input required="" type="number" name="power" dir="rtl"
                                        class="form-control form-control-sm text-end" aria-label="قوه الماتور "
                                        aria-describedby="basic-addon2">
                                    <span class="input-group-text  text-center" data-bs-toggle="tooltip"
                                        data-bs-placement="left" title=""
                                        style="width:50px !important;flex-wrap: nowrap; justify-content: center;"
                                        id="basic-addon2" data-original-title="مثال: 1600 سي سي">CC</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>عدد الركاب </td>
                            <td>
                                <div class="input-group input-group-sm">
                                    <select name="passengers" class="form-select" id="car_passengers">
                                        <option value="">حدد عدد الركاب</option>
                                        <option value="1">1</option>
                                        <option value="1+1">1+1</option>
                                        <option value="2+1">2+1</option>
                                        <option value="3+1">3+1</option>
                                        <option value="4+1">4+1</option>
                                        <option value="5+1">5+1</option>
                                        <option value="6+1">6+1</option>
                                        <option value="7+1">7+1</option>
                                        <option value="8+1">8+1</option>
                                        <option value="9+1">9+1</option>
                                        <option value="اكثر من 10">اكثر من 10</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                        </tr>
                        <tr>
                            <td>عداد السيارة</td>
                            <td>
                                <div class="input-group input-group-sm">
                                    <input type="number" name="meter" dir="rtl"
                                        class="form-control form-control-sm text-start" aria-label="باقي الموديل "
                                        aria-describedby="basic-addon2">
                                    <span class="input-group-text d-flex d-lg-none text-center" data-bs-toggle="tooltip"
                                        data-bs-placement="left" title=""
                                        style="width:50px !important;flex-wrap: nowrap; justify-content: center;"
                                        id="basic-addon2" data-original-title="مثال: 75000 كيلومتر"><i
                                            class="fas fa-info-circle"></i></span>
                                    <span class="input-group-text d-none d-lg-block" id="basic-addon2">مثال: 75000
                                        كيلومتر</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>أصحاب سابقون </td>
                            <td>
                                <div class="input-group input-group-sm">
                                    <input type="text" name="car_usage" class="form-control form-control-sm "
                                        placeholder="يد اولى , يد ثانيه ..." aria-label="يد اولى , يد ثانيه ..."
                                        aria-describedby="basic-addon2">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>أصل المركبه <span class="text-danger">*</span></td>
                            <td>
                                <div class="input-group input-group-sm">
                                    <select name="origin" id="origin" class="form-select" require="">
                                        <option value="خصوصي">خصوصي</option>
                                        <option value="عمومي">عمومي</option>
                                        <option value="تأجير">تأجير</option>
                                        <option value="تدريب سياقة">تدريب سياقة</option>
                                        <option value="تجاري">تجاري</option>
                                        <option value="حكومي">حكومي</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>نوع المركبه <span class="text-danger">*</span></td>
                            <td>
                                <div class="input-group input-group-sm">
                                    <select name="type" id="type" class="form-select" aria-invalid="false">
                                        <option value="2">مركبات خاصه </option>
                                        <option value="3">مركبات ايجار </option>
                                        <option value="4">دراجات ناريه </option>
                                        <option value="5">سكوتر </option>
                                        <option value="6">الشاحنات </option>
                                        <option value="7">المعدات الثقيله </option>
                                        <option value="8">تجاريه خفيفه </option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>رخصة المركبه <span class="text-danger">*</span></td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input required="" class="form-check-input" type="radio" name="license"
                                        id="license_1" value="فلسطينية">
                                    <label class="form-check-label" for="license_1">فلسطينية</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="license" id="license_2"
                                        value="نمرة صفراء">
                                    <label class="form-check-label" for="license_2">نمرة صفراء</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>نوع الوقود <span class="text-danger">*</span></td>
                            <td>
                                <div class="form-check form-check-inline" style=" min-width: 53px; ">
                                    <input required="" class="form-check-input" type="radio" name="fuel" id="fuel_1"
                                        value="بنزين">
                                    <label class="form-check-label" for="fuel_1">بنزين</label>
                                </div>
                                <div class="form-check form-check-inline" style=" min-width: 53px; ">
                                    <input class="form-check-input" type="radio" name="fuel" id="fuel_2" value="سولار">
                                    <label class="form-check-label" for="fuel_2">سولار</label>
                                </div>
                                <div class="form-check form-check-inline " style=" min-width: 53px; ">
                                    <input class="form-check-input" type="radio" name="fuel" id="fuel_3" value="هايبرد">
                                    <label class="form-check-label" for="fuel_3">هايبرد</label>
                                </div>
                                <div class="form-check form-check-inline" style=" min-width: 53px; ">
                                    <input class="form-check-input" type="radio" name="fuel" id="fuel_4" value="كهرباء">
                                    <label class="form-check-label" for="fuel_4">كهرباء</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>نوع الجير <span class="text-danger">*</span></td>
                            <td>
                                <div class="form-check form-check-inline" style=" min-width: 53px; ">
                                    <input required="" class="form-check-input" type="radio" name="gear" id="gear_1"
                                        value="عادي">
                                    <label class="form-check-label" for="gear_1">عادي </label>
                                </div>
                                <div class="form-check form-check-inline" style=" min-width: 53px; ">
                                    <input class="form-check-input" type="radio" name="gear" id="gear_2"
                                        value="اوتوماتيك">
                                    <label class="form-check-label" for="gear_2">اوتوماتيك </label>
                                </div>
                                <div class="form-check form-check-inline " style=" min-width: 53px; ">
                                    <input class="form-check-input" type="radio" name="gear" id="gear_3"
                                        value="نصف اوتوماتيك">
                                    <label class="form-check-label" for="gear_3"> نصف اوتوماتيك</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>الزجاج<span class="text-danger">*</span></td>
                            <td>
                                <div class="form-check form-check-inline" style=" min-width: 53px; ">
                                    <input required="" class="form-check-input" type="radio" name="electrical_glass"
                                        id="electrical_glass_1" value="يدوي">
                                    <label class="form-check-label" for="electrical_glass_1">يدوي </label>
                                </div>
                                <div class="form-check form-check-inline" style=" min-width: 53px; ">
                                    <input class="form-check-input" type="radio" name="electrical_glass"
                                        id="electrical_glass_2" value="كهربائي">
                                    <label class="form-check-label" for="electrical_glass_2">الكتروني </label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>السعر</td>
                            <td>
                                <div class="input-group input-group-sm">
                                    <input type="number" name="price" placeholder="30000"
                                        class="form-control form-control-sm text-start" aria-label="30000"
                                        aria-describedby="basic-addon2">
                                    <select name="currency" readonly="" class="form-select readonly"
                                        style="max-width:120px;">
                                        <option value="شيكل"> شيكل </option>
                                    </select>
                                    <span class="input-group-text d-flex d-lg-none text-center" data-bs-toggle="tooltip"
                                        data-bs-placement="left" title=""
                                        style="width:50px !important;flex-wrap: nowrap; justify-content: center;"
                                        id="basic-addon2" data-original-title="يجب وضع سعر حقيقي"><i
                                            class="fas fa-info-circle"></i></span>
                                    <span class="input-group-text d-none d-lg-block w-100" id="basic-addon2">يجب وضع سعر
                                        حقيقي</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>معروضة <span class="text-danger">*</span></td>
                            <td>
                                <div class="form-check form-check-inline" style=" min-width: 53px; ">
                                    <input required="" class="form-check-input" type="radio" name="offer_type"
                                        id="offer_type_1" value="للبيع">
                                    <label class="form-check-label" for="offer_type_1">للبيع</label>
                                </div>
                                <div class="form-check form-check-inline" style=" min-width: 53px; ">
                                    <input class="form-check-input" type="radio" name="offer_type" id="offer_type_2"
                                        value="للايجار">
                                    <label class="form-check-label" for="offer_type_2">للايجار</label>
                                </div>
                                <div class="form-check form-check-inline " style=" min-width: 53px; ">
                                    <input class="form-check-input" type="radio" name="offer_type" id="offer_type_3"
                                        value="للبدل">
                                    <label class="form-check-label" for="offer_type_3">للبدل</label>
                                </div>
                                <div class="form-check form-check-inline" style=" min-width: 53px; ">
                                    <input class="form-check-input" type="radio" name="offer_type" id="offer_type_4"
                                        value="للبيع و البدل">
                                    <label class="form-check-label" for="offer_type_4">للبيع و البدل</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>وسيلة الدفع <span class="text-danger">*</span></td>
                            <td>
                                <div class="form-check form-check-inline" style=" min-width: 53px; ">
                                    <input required="" class="form-check-input" type="radio" name="payment_type"
                                        id="payment_type_1" value="نقدا فقط">
                                    <label class="form-check-label" for="payment_type_1">نقدا فقط</label>
                                </div>
                                <div class="form-check form-check-inline" style=" min-width: 53px; ">
                                    <input class="form-check-input" type="radio" name="payment_type" id="payment_type_2"
                                        value="إمكانيه التقسيط">
                                    <label class="form-check-label" for="payment_type_2">إمكانيه التقسيط</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>إضافات </td>
                            <td>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" id="property[1]" type="checkbox"
                                            name="property[1]">
                                        <label class="form-check-label" for="property[1]"> جهاز إنذار</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" id="property[2]" type="checkbox"
                                            name="property[2]">
                                        <label class="form-check-label" for="property[2]"> مُكيّف</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" id="property[3]" type="checkbox"
                                            name="property[3]">
                                        <label class="form-check-label" for="property[3]"> مسجل CD</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" id="property[4]" type="checkbox"
                                            name="property[4]">
                                        <label class="form-check-label" for="property[4]"> فتحة سقف</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" id="property[5]" type="checkbox"
                                            name="property[5]">
                                        <label class="form-check-label" for="property[5]"> فرش جلد </label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" id="property[6]" type="checkbox"
                                            name="property[6]">
                                        <label class="form-check-label" for="property[6]"> إغلاق مركزي</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" id="property[7]" type="checkbox"
                                            name="property[7]">
                                        <label class="form-check-label" for="property[7]"> جنطات مغنيسيوم</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" id="property[8]" type="checkbox"
                                            name="property[8]">
                                        <label class="form-check-label" for="property[8]"> وسادة حماية هوائية</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" id="property[9]" type="checkbox"
                                            name="property[9]">
                                        <label class="form-check-label" for="property[9]"> كميرا ريفرس</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" id="property[10]" type="checkbox"
                                            name="property[10]">
                                        <label class="form-check-label" for="property[10]"> حساسات</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" id="property[11]" type="checkbox"
                                            name="property[11]">
                                        <label class="form-check-label" for="property[11]"> انارة لد داخلية</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" id="property[12]" type="checkbox"
                                            name="property[12]">
                                        <label class="form-check-label" for="property[12]"> اضواء زينون وليدات</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" id="property[14]" type="checkbox"
                                            name="property[14]">
                                        <label class="form-check-label" for="property[14]"> كاميرا 360 درجة</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" id="property[15]" type="checkbox"
                                            name="property[15]">
                                        <label class="form-check-label" for="property[15]"> زجاج معتم</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" id="property[16]" type="checkbox"
                                            name="property[16]">
                                        <label class="form-check-label" for="property[16]"> نظام ردار</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" id="property[17]" type="checkbox"
                                            name="property[17]">
                                        <label class="form-check-label" for="property[17]"> شاشة</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" id="property[18]" type="checkbox"
                                            name="property[18]">
                                        <label class="form-check-label" for="property[18]"> مثبت سرعة</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" id="property[19]" type="checkbox"
                                            name="property[19]">
                                        <label class="form-check-label" for="property[19]"> هاند بريك كهرباء</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" id="property[20]" type="checkbox"
                                            name="property[20]">
                                        <label class="form-check-label" for="property[20]"> فتحة سقف بانوراما</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" id="property[21]" type="checkbox"
                                            name="property[21]">
                                        <label class="form-check-label" for="property[21]"> شاحن لاسلكي</label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>التفاصيل </td>
                            <td>
                                <div class="form-group">
                                    <textarea name="description" class="form-control form-control-sm" id="description"
                                        placeholder="المزيد من المعلومات، كل معلومة بسطر." cols="30"
                                        rows="5"></textarea>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>الصور </td>
                            <td>
                                <div class="form-group input-group-sm mb-2">
                                    <div class="custom-file">
                                        <input type="file" name="images[]" class="custom-file-input"
                                            id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="inputGroupFile01">اختر صورة</label>
                                    </div>
                                </div>
                                <div class="form-group input-group-sm mb-2">
                                    <div class="custom-file">
                                        <input type="file" name="images[]" class="custom-file-input"
                                            id="inputGroupFile02" aria-describedby="inputGroupFileAddon02">
                                        <label class="custom-file-label" for="inputGroupFile02">اختر صورة</label>
                                    </div>
                                </div>
                                <div class="form-group input-group-sm mb-2">
                                    <div class="custom-file">
                                        <input type="file" name="images[]" class="custom-file-input"
                                            id="inputGroupFile03" aria-describedby="inputGroupFileAddon03">
                                        <label class="custom-file-label" for="inputGroupFile03">اختر صورة</label>
                                    </div>
                                </div>
                                <div class="form-group input-group-sm mb-2">
                                    <div class="custom-file">
                                        <input type="file" name="images[]" class="custom-file-input"
                                            id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                                        <label class="custom-file-label" for="inputGroupFile04">اختر صورة</label>
                                    </div>
                                </div>
                                <div class="form-group input-group-sm">
                                    <div class="custom-file">
                                        <input type="file" name="images[]" class="custom-file-input"
                                            id="inputGroupFile05" aria-describedby="inputGroupFileAddon05">
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
        </div>
    </div>
</div>


@endsection