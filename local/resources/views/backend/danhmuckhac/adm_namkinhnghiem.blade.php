@extends('backend.master')
@section('title', 'Số năm kinh nghiệm')
@section('main')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Danh mục khác - Năm kinh nghiệm</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Năm kinh nghiệm</li>
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
            <section class="col-lg-5 connectedSortable">
                <!-- Thêm mới năm kinh nghiệm -->
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
                    <form method="post">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    @if(session('sucess'))
                                        <div class="alert alert-success">{{session('sucess')}}</div>
                                    @endif
                                        <div class="form-group">
                                            <label>Tên năm kinh nghiệm</label>
                                            <input type="text" name="name" value="{{old('name')}}" class="form-control">
                                            @if($errors->has('name'))
                                              <p class="help text-danger">{{ $errors->first('name') }}</p>
                                            @endif
                                        </div>
                                     
                                        <div class="form-group">
                                          <label>Mô tả năm kinh nghiệm</label>
                                          <textarea class="form-control" name="describe" rows="5"></textarea>
                                          @if($errors->has('describe'))
                                              <p class="help text-danger">{{ $errors->first('describe') }}</p>
                                            @endif
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer clearfix">
                            <button class="pull-right btn btn-default" id="sendEmail">Back <i class="fa fa-arrow-circle-left"></i></button>
                            <button type="submit" class="pull-left btn btn-primary">Thêm mới </button>
                        </div>
                        {{csrf_field()}}
                    </form>
                </div>
            </section>
            <!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-7 connectedSortable">
                <!-- Calendar -->
                <div class="box box-solid">
                    <div class="box-header">
                        <i class="fa fa-calendar"></i>
                        <h3 class="box-title">Danh sách năm kinh nghiệm đã tạo</h3>
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
                        @if(session('success'))
                            <div class="alert alert-success text-center">{{session('success')}}</div>
                        @endif
                       <div class="table-responsive">          
                          <table class="table table-hover">
                            <thead>
                              <tr>
                                <th>Mã năm</th>
                                <th>Tên năm kinh nghiệm</th>
                                <th>Mô tả năm kinh nghiệm</th>
                                <th class="text-center" colspan="2">Tùy chọn</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach($nn as $nghenghiep)
                                  <tr>
                                    <td class="text-center">{{$nghenghiep->id}}</td>
                                    <td>{{$nghenghiep->yearofexp_name}}</td>
                                    <td>{{$nghenghiep->yearofexp_describe}}</td>
                                    <td><a class="btn btn-warning" style="margin-right: 5px;" href="{{asset('admin/danhmuckhac/namkinhnghiem/edit/'.$nghenghiep->id)}}"><i class="fa fa-edit"></i> Sửa</a></td>
                                    <td><a class="btn btn-danger" href="{{asset('admin/danhmuckhac/namkinhnghiem/delete/'.$nghenghiep->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')"><i class="fa fa-trash-o"></i> Xóa</a></td>
                                  </tr>
                                  @endforeach
                            </tbody>
                          </table>
                        </div>
                        <div class="box-footer clearfix text-right">
                            {{ $nn->links() }}
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