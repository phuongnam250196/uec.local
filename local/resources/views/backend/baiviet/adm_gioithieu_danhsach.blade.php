@extends('backend.master')
@section('title', 'Tin tức')
@section('main')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Giới thiệu trung tâm UEC</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
            <li>Bài viết</li>
            <li class="active">Giới thiệu</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <section class="col-lg-9 connectedSortable">          
            <div class="box box-info">
                <div class="box-body table-responsive no-padding dd">
                  <table class="table table-hover">
                    <tr>
                      <th width="5%">ID</th>
                      <th width="25%">Tiêu đề</th>
                      <th width="20%">Ảnh minh họa</th>
                      <th width="30%">Nội dung</th>
                      <th colspan="2" width="20%" class="text-center">Tùy chọn</th>
                    </tr>
                    @foreach($data as $intro)
                    <tr>
                      <td>{{$intro->id}}</td>
                      <td><a href="#" data-toggle="modal" data-target="#myModal">{{$intro->introuec_name}}</a></td>
                      <td><img src="{{asset('local/storage/app/gioithieuUEC/'.$intro->introuec_img)}}" width="100"></td>
                      <td>{{$intro->introuec_content}}</td>
                      <td><a href="#" class="btn btn-warning" data-toggle="modal" data-target="#myModal2"><i class="fa fa-edit"></i> Sửa</a></td>
                      <td><a href="#" class="btn btn-danger"><i class="fa fa-trash-o"></i> Xóa</a></td>
                    </tr>
                    @endforeach
                  </table>
                </div>
            </div>
        </section>
        <section class="col-lg-3">          
            <div class="box box-info">
              <div class="box-header">
                  <h3 class="box-title"><strong>Danh sách mục liên quan</strong></h3>
              </div>
              <div class="box-body">
                  <ul class="list-group">
                    <li class="list-group-item"><a href="{{asset('admin/baiviet/tintuc')}}"><i class="fa fa-angle-double-right"></i> Viết tin tức</a></li>
                    <li class="list-group-item"><a href="{{asset('admin/baiviet/huongdoanhnghiep')}}"><i class="fa fa-angle-double-right"></i> Hướng về doanh nghiệp</a></li>
                    <li class="list-group-item"><a href="{{asset('admin/baiviet/thongtinsinhvien')}}"><i class="fa fa-angle-double-right"></i> Thông tin sinh viên</a></li>
                    <li class="list-group-item"><a href="{{asset('admin/baiviet/dinhhuongnghe')}}"><i class="fa fa-angle-double-right"></i> Định hướng nghề nghiệp</a></li>
                    <li class="list-group-item "><a href="{{asset('admin/baiviet/jobfair')}}"><i class="fa fa-angle-double-right"></i> Job Fair</a></li>
                  </ul>
              </div>
            </div>
        </section>
      </div>
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Thông tin chi tiết sinh viên</h4>
            </div>
            <div class="modal-body">
              <p>Some text in the modal.</p>
               <p>Some text in the modal.</p>
                <p>Some text in the modal.</p>
                 <p>Some text in the modal.</p>
                  <p>Some text in the modal.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="myModal2" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Sửa Giới thiệu UEC</h4>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Tiêu đề</label>
                        <input required type="text" id="tt_title" class="form-control" value="" name="tt_title">
                       
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Ảnh minh họa</label>
                        <input type="file" class="form-control" id="tt_img" value="" name="tt_img">
                       
                    </div>
                </div>
                
                <div class="col-lg-12">
                    <div class="form-group">
                      <label for="comment">Nội dung</label>
                      <textarea id="tt_content" name="tt_content" rows="10" style="width: 100%"></textarea>
                       <script type="text/javascript">
                        $(function () {
                          CKEDITOR.replace('tt_content');
                          $(".textarea").wysihtml5();
                        });
                      </script>
                    </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" id="sbm_success" class="btn btn-success">Cập nhật</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
</div>
@stop