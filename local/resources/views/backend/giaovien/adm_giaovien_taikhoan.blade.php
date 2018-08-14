@extends('backend.master')
@section('title', 'Tài khoản giáo viên')
@section('main')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Quản lý Tài khoản Giáo viên</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Giáo viên</li>
            <li class="active">Tài khoản</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <section class="col-lg-7 connectedSortable">          
                <!-- Tạo tài khoản doanh nghiệp -->
                <div class="box box-info">
                    <div class="box-header">
                        <i class="fa fa-plus-circle text-primary"></i>
                        <h3 class="box-title"><strong>Tạo tài khoản giáo viên</strong></h3>
                        <!-- tools box -->
                        <div class="pull-right box-tools">
                            <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                        </div>
                        <!-- /. tools -->
                    </div>
                    <form method="post" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="form-group">
                                      <label>Danh sách giáo viên</label>
                                      <select class="form-control" name="gv_user_info">
                                        <option>Chọn gia</option>}
                                        option
                                        @foreach($teach as $te)
                                            <option rel="{{$te->teacher_name}}" value="{{$te->id}}">{{$te->teacher_name}}</option>
                                        @endforeach
                                      </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Tên tài khoản</label>
                                        <input required type="text" class="form-control" name="gv_user_name">
                                        @if($errors->has('gv_user_name'))
                                          <p class="help text-danger">{{ $errors->first('gv_user_name') }}</p>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Mật khẩu</label>
                                        <input required type="text" class="form-control" name="gv_user_pass">
                                        @if($errors->has('gv_user_pass'))
                                          <p class="help text-danger">{{ $errors->first('gv_user_pass') }}</p>
                                        @endif
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Xác nhận mật khẩu</label>
                                        <input required type="text" class="form-control" name="gv_user_pass_2">
                                        @if($errors->has('gv_user_pass_2'))
                                          <p class="help text-danger">{{ $errors->first('gv_user_pass_2') }}</p>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                      <label>Loại tài khoản</label>
                                      <select class="form-control" disabled name="gv_user_type">
                                        <option value="4">Giáo viên</option>
                                      </select>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    {{-- <div class="form-group">
                                        <label>Tên công ty</label>
                                        <input type="text" class="form-control" disabled name="gv_user_name" value="{{$te->teach_name}}">
                                    </div> --}}
                                    
                                    <div class="form-group">
                                        <label>Ảnh đại diện</label>
                                        <a href="#" title="logo thôi mà"><img name="image-swap" width="50" height="50" class="img-circle" src="#"></a>
                                        <p id="aler"></p>
                                    </div>
                                    <script type="text/javascript">
                                        $(document).ready(function() {
                                           // $.ajax({
                                           //   type: "post",
                                           //   url: "/admin/giaovien/taikhoan/",
                                           //   data: $("select[name='gv_user_info']").val(),
                                           //   headers: {
                                           //      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                           //  },
                                           //  success:function(data) {
                                           //      alert("thanh cong");
                                           //      console.log(data.$teach->teach_name)
                                           //  }

                                           // }); 

                                           $("select[name='gv_user_info']").change(function(){
                                             $("img[name='image-swap']").attr("src","{{asset('admin/giaovien/taikhoan')}}/" + $("select[name='gv_user_info']").val());

                                           });
                                        });

                                        // $("select[name='gv_user_info']").change(function () {
                                        //     var str = "";
                                        //     $( "select option:selected" ).each(function() {
                                        //       str += $( this ).text() + " ";
                                        //     });
                                        //     $( "#aler" ).text( str );
                                        //   })
                                        //   .change();
                                    </script>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer clearfix">
                            <a href="{{asset('admin/home')}}" class="pull-right btn btn-default" id="sendEmail">Back <i class="fa fa-arrow-circle-left"></i></a>
                            <button class="pull-left btn btn-primary">Xác nhận </button>
                        </div>
                        {{csrf_field()}}
                    </form>
                </div>
            </section>
            <!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-5 connectedSortable">
                <!-- Calendar -->
                <div class="box box-solid">
                    <div class="box-header">
                        <i class="fa fa-calendar"></i>
                        <h3 class="box-title">Danh sách tài khoản</h3>
                        <!-- tools box -->
                        <div class="pull-right box-tools">
                            <!-- button with a dropdown -->
                            <button class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                        <!-- /. tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                        <!--The calendar -->
                       <div class="table-responsive">          
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Mã tài khoản</th>
                                <th>Tên tài khoản</th>
                                <th>Tên công ty</th>
                                <th>Tỉnh/Thành phố</th>
                                <th>Sửa</th>
                                <th>Xóa</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach($list_user as $u)
                              <tr>
                                <td>{{$u->id}}</td>
                                <td> <a href="{{asset('admin/doanhnghiep/taikhoan/chitiet/'.$u->id)}}">{{$u->user_name}}</a></td>
                                <td>{{$u->teach_name}}</td>
                                <td>{{$u->area_name}}</td>
                                <td><a href="#"><i class="fa fa-edit"></i></a></td>
                                <td><a href="#"><i class="fa fa-trash-o"></i></a></td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                          </div>
                          <div class="box-footer clearfix text-right">
                            {{ $list_user->links() }}
                        </div>
                    </div>
                </div>
                <!-- /.box -->
            </section>
            <!-- right col -->
        </div>
        <!-- /.row (main row) -->
    </section>
    <!-- /.content -->
</div>
@stop