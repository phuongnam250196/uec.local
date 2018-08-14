@extends('backend.master')
@section('title', 'Tài khoản Nhà trường')
@section('main')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Quản lý Nhà trường</h1>
        <ol class="breadcrumb">
            <li><a href="{{asset('admin/home')}}"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
            <li class="active">Tài khoản nhà trường</li>
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
                <!-- Tạo tài khoản nhà trường -->
                <div class="box box-info">
                    <div class="box-header">
                        <i class="fa fa-plus-circle text-primary"></i>
                        <h3 class="box-title"><strong>Tạo tài khoản nhà trường</strong></h3>
                        <!-- tools box -->
                        <div class="pull-right box-tools">
                            <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                        </div>
                        <!-- /. tools -->
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-lg-7">
                                <form action="/action_page.php">
                                    <div class="form-group">
                                      <label>Mã trường</label>
                                      <select class="form-control">
                                        <option>TLU</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Tên tài khoản</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Mật khẩu</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Xác nhận mật khẩu</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                      <label>Loại tài khoản</label>
                                      <select class="form-control" disabled="">
                                        <option>Nhà trường</option>
                                      </select>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-5">
                                <form action="/action_page.php">
                                    <div class="form-group">
                                        <label>Tên trường</label>
                                        <input type="text" class="form-control" disabled="">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Logo trường</label>
                                        <a href="#" title="logo thôi mà"><img src="dist/img/avatar2.png" style="width: 100%"></a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer clearfix">
                        <button class="pull-right btn btn-default" id="sendEmail">Back <i class="fa fa-arrow-circle-left"></i></button>
                        <button class="pull-left btn btn-primary">Xác nhận </button>
                    </div>
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
                                <th>Tên trường</th>
                                <th>Tỉnh/Thành phố</th>
                                <th>Sửa</th>
                                <th>Xóa</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>Anna</td>
                                <td>Pitt</td>
                                <td>New York</td>
                                <td><a href="#"><i class="fa fa-edit"></i></a></td>
                                <td><a href="#"><i class="fa fa-trash-o"></i></a></td>
                              </tr>
                              <tr>
                                <td>1</td>
                                <td>Anna</td>
                                <td>Pitt</td>
                                <td>New York</td>
                                <td><a href="#"><i class="fa fa-edit"></i></a></td>
                                <td><a href="#"><i class="fa fa-trash-o"></i></a></td>
                              </tr>
                              <tr>
                                <td>1</td>
                                <td>Anna</td>
                                <td>Pitt</td>
                                <td>New York</td>
                                <td><a href="#"><i class="fa fa-edit"></i></a></td>
                                <td><a href="#"><i class="fa fa-trash-o"></i></a></td>
                              </tr>
                              <tr>
                                <td>1</td>
                                <td>Anna</td>
                                <td>Pitt</td>
                                <td>New York</td>
                                <td><a href="#"><i class="fa fa-edit"></i></a></td>
                                <td><a href="#"><i class="fa fa-trash-o"></i></a></td>
                              </tr>
                            </tbody>
                          </table>
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