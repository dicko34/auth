@extends("layouts.vendor")
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
<div class="col-lg-9 col-12">
    <div class="row">
        <div class="card w-100">
            <div class="body-card m-5">
                <div class="row">
                    <h3 class="mb-4 m-auto"><i class="mdi mdi-view-dashboard  mr-2"></i> اعلانات توظيف  </h3>
                </div>
                <form method="POST" action="{{ route("jobs.search") }}">
                    @csrf
                    <div class="row ">
                        <div class="col-4">
                            <div class="form-group row">
                                <div class="col-12 m-0 p-0">
                                    <select class="form-control">
                                        <option>المكان</option>
                                        <option>Large select</option>
                                        <option>Small select</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="form-group row">
                                <div class="col-12 m-0 p-0">
                                    <select class="form-control">
                                        <option>التخصص</option>
                                        <option>Large select</option>
                                        <option>Small select</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="form-group row">
                                <div class="col-12 m-0 p-0">
                                    <select class="form-control">
                                        <option>الدوام</option>
                                        <option>Large select</option>
                                        <option>Small select</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-12 text-center">
                            <button class="btn btn-primary w-md waves-effect waves-light" type="submit">بحث الان</button>
                        </div> 
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="card w-100">
            <div class="body-card m-5">
                <div class="row">
                    <h3 class="mb-4 col-6 btn btn-primary w-md waves-effect waves-light"><i class="fas fa-address-book mr-2"></i> اعلانات التوظيف </h3>
                    <div class="col-6 text-right">
                        <a class="btn btn-primary w-md waves-effect waves-light w-100" href="{{ route("jobs.add") }}">أضافة أعلان هنا</a>
                    </div>
                </div>
                <div class="row">

                    <div class="table-responsive m-0">
                        <table class="table table-striped table-bordered mb-0 text-center h5">
                            <thead>
                                <tr>
                                    <th class="btn-primary">الشركة</th>
                                    <th class="btn-primary">الوظيفة</th>
                                    <th class="btn-primary">العنوان</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i = 0; $i < 10; $i++)
                                    <tr>
                                        <td>
                                            <a href="{{ route('jobs.product') }}">
                                                <img src="{{ asset('assets/admin/images/com.jpeg') }}" alt="img"
                                                class="gallery-thumb-img m-0" style="height: 100px; width:100px">
                                            </a>
                                        </td>
                                        <th>
                                            <a href="{{ route('jobs.product') }}">
                                                مطلوب عدة تخصصات سكرتيره و مديره مبيعات و محاسبة
                                            </a>
                                        </th>
                                        <td>
                                            رام الله والبيرة
                                            <br>
                                            2021-11-10
                                        </td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
                <nav aria-label="..." class="w-100 m-auto">
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

                    @for ($i = 0; $i < 4; $i++)
                        <div class="col-12 p-0 bordertoty">
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
    

@endsection
