@extends('layouts.vendor')
@section('pageTitle', 'Koala Web Libraries')
@section('styleChart')
    <link href="{{ asset('assets/admin/libs/c3/c3.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
@endsection
@section('content')

    <div class="row">
        <div class="card w-100">
            <div class="card-body">
                <div class="text-center mt-4">
                    <div class="mb-3">
                                        <a href="index.html"><img src="{{ asset('assets/admin/images/martina.jpeg') }}" height="70" alt="logo"></a>
                    </div>
                </div>
                <div class="p-3">
                    <h4 class="font-size-18 m-1 text-center">تسجيل دخول</h4>
                    @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert" style="display:inline">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                    <form class="form-horizontal w-sm-50 m-auto" method="POST" action="{{ route('login') }}">
                        @csrf
                        @php
                            $k = explode('/', Request::path());
                            $t = in_array('vendor', $k);
                        @endphp
                        <div class="form-group">
                            <label for="username">البريد الالكتروني</label>
                            <input type="text" class="form-control" id="username" name="email"
                                placeholder="البريد الالكتروني">
                            
                        </div>

                        <div class="form-group">
                            <label for="userpassword">كلمة المرور</label>
                            <input type="password" name="password" class="form-control" id="userpassword"
                                placeholder="كلمة المرور">
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert" style="display:inline">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group mb-0 row">
                            <div class="col-12 mt-4">
                                <a href="{{ route('register') }}" class="text-muted"><i class="mdi mdi-account-check"></i>
                                    انشاء حساب جديد </a>
                            </div>
                        </div>

                        <div class="form-group row mt-4">
                            <div class="col-sm-12 text-center">
                                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">دخول</button>
                            </div>
                        </div>

                        <div class="form-group mb-0 row">
                            <div class="col-12 mt-4">
                                <a href="pages-recoverpw.html" class="text-muted"><i class="mdi mdi-lock"></i>هل نسيت كلمو
                                    المرور</a>
                            </div>
                        </div>
                    </form>

                </div>

            </div>
        </div>

    </div>


@endsection
