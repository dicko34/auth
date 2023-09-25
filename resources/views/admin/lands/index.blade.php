@extends("layouts.admin")
@section("pageTitle", "Ejada")
@section("style")
    <link href="{{asset("assets/admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset("assets/admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset("assets/admin/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css")}}" rel="stylesheet" type="text/css"/>
    <style>
        .star-fill{
            color:gold
        }
    </style>
@endsection
@section("content")

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif
                    @if ($message = Session::get('error'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif
                            <h4 class="">كل اعلانات الاراضي </h4>

                        <hr>

                    <table id="datatable" class="table table-bordered dt-responsive nowrap text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                        <thead>
                        <tr>
                            <th>الاعلان</th> 
                            <th>المستخدم</th> 
                            <th>رقم صاحب الاعلان</th> 
                            <th>التحكم</th>
                        </tr>
                        </thead>
                        <?php $counter =1; ?>
                        <tbody>
                            {{-- @foreach($admins as $admin) --}}
                                <tr> 
                                    <td>
                                        ارض للبيع
                                    </td>
                                    <td>
                                        محمد
                                    </td>
                                    <td>
                                        9999999
                                    </td>
                                    <td>
                                        <center>
                                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">

                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupDrop1" type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        التحكم
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                        <a class="btn btn-dark col-sm-12"  href="{{route('admin.lands.show',['land'=>1])}}">عرض</a><br>
                                                        <a class="btn btn-dark col-sm-12"  href="{{route('admin.lands.edit',['land'=>1])}}">تعديل</a><br>
                                                        <a class="btn btn-dark col-sm-12"  href="">قبول</a><br>
                                                        <a class="btn btn-dark col-sm-12"  href="">رفض</a><br>
                                                    </div>
                                                </div>
                                            </div>
                                        </center>
                                    </td>
                                </tr>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div>
    <div id="modelImagee">

    </div>
@endsection

@section("script")
<script src="{{asset("assets/admin/libs/datatables.net/js/jquery.dataTables.min.js")}}"></script>
<script src="{{asset("assets/admin/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js")}}"></script>
<script src="{{asset("assets/admin/libs/datatables.net-buttons/js/dataTables.buttons.min.js")}}"></script>
<script src="{{asset("assets/admin/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js")}}"></script>
<script src="{{asset("assets/admin/libs/jszip/jszip.min.js")}}"></script>
<script src="{{asset("assets/admin/libs/pdfmake/build/pdfmake.min.js")}}"></script>
<script src="{{asset("assets/admin/libs/pdfmake/build/vfs_fonts.js")}}"></script>
<script src="{{asset("assets/admin/libs/datatables.net-buttons/js/buttons.html5.min.js")}}"></script>
<script src="{{asset("assets/admin/libs/datatables.net-buttons/js/buttons.print.min.js")}}"></script>
<script src="{{asset("assets/admin/libs/datatables.net-buttons/js/buttons.colVis.min.j")}}"></script>
<script src="{{asset("assets/admin/libs/datatables.net-responsive/js/dataTables.responsive.min.js")}}"></script>
<script src="{{asset("assets/admin/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js")}}"></script>
<script src="{{asset("assets/admin/js/pages/datatables.init.js")}}"></script>
@endsection
