@extends('backend.master')
@section('title', 'Tài khoản sinh viên')
@section('main')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Quản lý Sinh Viên</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Sinh viên</li>
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
            <section class="col-lg-8 connectedSortable">
                <!-- Tạo 1 tài khoản sinh viên -->
                <div class="box box-info">
                    <div class="box-header">
                        <i class="fa fa-plus-circle text-primary"></i>
                        <h3 class="box-title"><strong>Thêm thông tin cho 1 sinh viên</strong></h3>
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
                                <div class="box-header with-border">
                                  <h3 class="box-title">Thông tin cá nhân</h3>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Mã sinh viên</label>
                                        <input type="text" class="form-control" name="std_code">
                                    </div>
                                    <div class="form-group">
                                        <label>Họ tên</label>
                                        <input type="text" class="form-control" name="std_name">
                                    </div>
                                    <div class="form-group">
                                        <label>Ngày sinh</label>
                                        <input type="date" class="form-control" name="std_birthday">
                                    </div>
                                    <div class="form-group">
                                        <label>Giới tính</label>
                                        <select class="form-control" id="sel1" name="std_gender">
                                            <option value="0">Chọn giới tính</option>
                                            <option value="1">Nam</option>
                                            <option value="2">Nữ</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Số điện thoại</label>
                                        <input type="number" class="form-control" name="std_phone">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" name="std_email">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Ảnh đại diện </label>
                                        <input type="file" class="form-control" name="std_img">
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-5 form-group">
                                            <label>Khoa</label>
                                            <input type="text" class="form-control" name="std_science">
                                        </div>
                                        <div class="col-lg-7 form-group">
                                            <label>Chuyên ngành</label>
                                            <input type="text" class="form-control" name="std_specialize">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-5 form-group">
                                            <label>Khóa học</label>
                                            <input type="text" class="form-control" name="std_course">
                                        </div>
                                        <div class="col-lg-7 form-group">
                                            <label>Lớp</label>
                                            <input type="text" class="form-control" name="std_class">
                                        </div>     
                                    </div>
                                   
                                    <div class="form-group">
                                        <label>Giáo viên chủ nhiệm</label>
                                        <input type="text" class="form-control" name="std_head_teacher">
                                    </div>
                                    <div class="form-group">
                                        <label>Tỉnh/Thành phố</label>
                                        <select class="form-control" id="sel1" name="std_area">
                                            @foreach($area as $a)
                                            <option value="{{$a->id}}">{{$a->area_name}}</option>
                                           @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Địa chỉ</label>
                                        <input type="text" class="form-control" name="std_address">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="box-header with-border">
                                  <h3 class="box-title">Thông tin việc làm</h3>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Tình trạng việc làm</label>
                                        <input type="text" class="form-control" name="std_employ_status">
                                    </div>
                                    <div class="form-group">
                                        <label>Tên việc làm</label>
                                        <input type="text" class="form-control" name="std_employ_name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Tên công ty</label>
                                        <input type="text" class="form-control" name="std_company_name">
                                    </div>
                                    <div class="form-group">
                                        <label>Thời gian làm việc</label>
                                        <input type="text" class="form-control" name="std_timeserving">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer clearfix">
                            <a href="{{asset('admin/home')}}" class="pull-right btn btn-default" id="sendEmail">Back <i class="fa fa-arrow-circle-left"></i></a>
                            <button class="pull-left btn btn-primary">Thêm mới </button>
                        </div>
                        {{csrf_field()}}
                    </form>
                </div>
                
                <!-- End tạo 1 tài khoản -->
            </section>
            <!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            
            <!-- right col -->
        </div>
        <!-- /.row (main row) -->
    </section>
    <!-- /.content -->
</div>
@stop