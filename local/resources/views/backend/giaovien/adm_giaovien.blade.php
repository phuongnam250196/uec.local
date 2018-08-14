@extends('backend.master')
@section('title', 'Nhà trường')
@section('main')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Quản lý Nhà trường</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Thông tin Nhà trường</li>
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
                <!-- quick email widget -->
                <div class="box box-info">
                    <div class="box-header">
                        <i class="fa fa-plus-circle text-primary"></i>
                        <h3 class="box-title"><strong>Thêm mới</strong></h3>
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
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Tên giáo viên</label>
                                        <input required type="text" class="form-control" value="{{old('gv_name')}}" name="gv_name">
                                        @if($errors->has('gv_name'))
                                          <p class="help text-danger">{{ $errors->first('gv_name') }}</p>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Ảnh đại diện</label>
                                        <input required type="file" class="form-control" name="gv_img">
                                        @if($errors->has('gv_img'))
                                          <p class="help text-danger">{{ $errors->first('gv_img') }}</p>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input required type="email" class="form-control" value="{{old('gv_email')}}" name="gv_email">
                                    </div>
                                    <div class="form-group">
                                        <label>Số điện thoại</label>
                                        <input required type="number" class="form-control" value="{{old('gv_phone')}}" name="gv_phone">
                                        @if($errors->has('gv_phone'))
                                          <p class="help text-danger">{{ $errors->first('gv_phone') }}</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Ngày sinh</label>
                                        <input required type="date" class="form-control" value="{{old('gv_birthday')}}" name="gv_birthday">
                                    </div>
                                    <div class="form-group">
                                        <label>Khoa</label>
                                        <input required type="text" class="form-control" value="{{old('gv_science')}}" name="gv_science">
                                    </div>
                                    <div class="form-group">
                                        <label>Tỉnh/Thành phố</label>
                                        <select class="form-control" id="sel1" value="{{old('gv_area')}}" name="gv_area">
                                            @foreach($area as $a)
                                                <option value="{{$a->id}}">{{$a->area_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Địa chỉ giáo viên</label>
                                        <input required type="text" class="form-control" value="{{old('gv_address')}}" name="gv_address">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer clearfix">
                            <a href="{{asset('admin\home')}}" class="pull-right btn btn-default" id="sendEmail">Back <i class="fa fa-arrow-circle-left" ></i></a>
                            <button class="pull-left btn btn-primary">Thêm mới </button>
                        </div>
                        {{csrf_field()}}
                    </form>
                </div>
            </section>
            <!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-5 connectedSortable">
                <div class="box box-solid">
                    <div class="box-header">
                        <i class="fa fa-calendar"></i>
                        <h3 class="box-title">Danh sách thông tin</h3>
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
                                <th>Mã giáo viên</th>
                                <th>Tên giáo viên</th>
                                <th>Ảnh đại diện</th>
                                <th>Chuyên khoa</th>
                                <th>Tỉnh/Thành phố</th>
                                <th colspan="2">Tùy chọn</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach($teach as $t)
                              <tr>
                                <td>{{$t->id}}</td>
                                <td><a href="#">{{$t->teacher_name}}</a></td>
                                <td><a href="#"><img width="50" height="50" class="img-circle" src="{{asset('local/storage/app/giaovien/'.$t->teacher_img)}}"></a></td>
                                <td>{{$t->teacher_science}}</td>
                                <td>{{$t->id}}</td>
                                <td><a href="{{asset('admin/giaovien/thongtin/edit/'.$t->id)}}"><i class="fa fa-edit"></i></a></td>
                                <td><a href="{{asset('admin/giaovien/thongtin/delete/'.$t->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa không ???')"><i class="fa fa-trash-o"></i></a></td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                          </div>
                          <div class="box-footer clearfix text-right">
                            {{ $teach->links() }}
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