@extends('frontend.master')
@section('title', 'Thông tin doanh nghiệp')
@section('main')
<nav id="nav-menu">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand d-lg-none" href="#">Menu</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#colap2">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="colap2">
        <ul class="navbar-nav m-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{asset('/')}}"><i class="fa fa-home"></i> Trang chủ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{asset('baiviet')}}">Tin tức</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{asset('doanhnghiep')}}">Doanh nghiệp</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{asset('timviec')}}">Tìm việc làm</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="{{asset('khoadaotao')}}">Khóa đào tạo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{asset('lienhe')}}">Liên hệ</a>
          </li> 
        </ul>
      </div> 
    </nav>
  </div>
</nav>
<section id="breadcrumb-link">
    <div class="container">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
            <li class="breadcrumb-item">Doanh nghiệp</li>
        </ul>
    </div>
</section>
<section id="dieuhuong-doc">
    <div class="container">
        <div class="row">
            <div class="col-md-8 baiviet">
                <!-- Thay đổi tại đây -->
                <div class="pub_dn">
                    <div class="row pub_dn-row">
                        <div class="col-md-3 pub_dn-col">
                            <div class="pub_dn-col-info">
                                <img src="images/brave.jpg" style="width: 100%">
                            </div>
                            <br>
                            <div class="pub_dn-col-info-content">
                                <ul>
                                    @foreach($area as $are)
                                    <li>
                                        <div class="d-flex">
                                            <div><a href="#">{{$are->area_name}}</a></div>
                                            <div class="ml-auto"><span class="badge badge-primary">11</span></div>
                                        </div>
                                    </li>
                                    @endforeach
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9 pub_dn-col">
                            <div class="pub_dn-col-ab">
                                <div class="pub_dn-col-title">
                                    <h1 class="pub_dn-col-title-h1">Doanh nghiệp liên kết với UEC</h1>
                                </div>
                                <div class="alert alert-primary pub_dn-col-sum">
                                  <p><strong>Danh sách doanh nghiệp tại Hà Nội</strong> <br>Có tổng số <strong>839</strong> doanh nghiệp khu vực Hà Nội.</p> 
                                </div>
                                @foreach($enterprise as $enter)
                                <div class="pub_dn-col-content">
                                    <div class="company-name">
                                        <h3 class="text-uppercase"><a href="{{route('dn_chitiet')}}">{{$enter->enterprise_name}}</a></h3>
                                        <hr>
                                    </div>
                                    <div class="row company-row">
                                        <div class="col-md-6 text-left">
                                            <p>Tỉnh/Thành phố: {{$enter->area_id}}</p>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <p>Ngày thành lập: {{$enter->created_at}}</p>
                                        </div>
                                    </div>
                                    <div class="company-ab">
                                        <p>Địa chỉ: <strong>{{$enter->enterprise_address}}</strong></p>
                                        <p>Cập nhật: Tuần trước ({{$enter->updated_at}})</p>
                                        <p><i>Ngành nghề chính: <strong>{{$enter->enterprise_describe}}</strong></i></p>
                                    </div>
                                </div>
                                @endforeach
                                <div class="pub_dn-col-content">
                                    <div class="company-name">
                                        <h3><a href="#">DOANH NGHIỆP TN KINH DOANH VÀNG VĂN HÓA THÚY</a></h3>
                                        <hr>
                                    </div>
                                    <div class="row company-row">
                                        <div class="col-md-6 text-left">
                                            <p>Tỉnh/Thành phố: Hà Nội</p>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <p>Ngày thành lập: 07-06-2018</p>
                                        </div>
                                    </div>
                                    <div class="company-ab">
                                        <p>Địa chỉ: <strong>Số 17 Trần Quang Khải, Ấp Bình Hòa, Thị Trấn Cái Dầu, Huyện Châu Phú, Tỉnh Hà Nội</strong></p>
                                        <p>Cập nhật: Tuần trước (07/06/2018)</p>
                                        <p><i>Ngành nghề chính: <strong>Bán buôn kim loại và quặng kim loại</strong></i></p>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- End thay đổi -->
            </div>
            <div class="col-md-4 nav-doc">
                <nav class="nav-child">
                    <div class="nav-child-title text-center xa">
                        <h3>Bài viết mới nhất</h3>
                    </div>
                    <ul>
                        <li>
                            <a href="#">Hội thảo định hướng nghề nghiệp</a>
                            <p>13/05/2018</p>
                        </li>
                        <li>
                            <a href="#">Hỗ trợ cơ hội việc làm tại Ngân hàng Maritime Bank dành cho sinh viên ngành Tài chính - Ngân hàng</a>
                            <p>13/05/2018</p>
                        </li>
                        <li>
                            <a href="#">6 quy tắc cần thiết khi chuẩn bị phỏng vấn</a>
                            <p>13/05/2018</p>
                        </li>
                        <li>
                            <a href="#">6 quy tắc cần thiết khi chuẩn bị phỏng vấn</a>
                            <p>13/05/2018</p>
                        </li>
                        <li>
                            <a href="#">6 quy tắc cần thiết khi chuẩn bị phỏng vấn</a>
                            <p>13/05/2018</p>
                        </li>
                    </ul>
                </nav>
                <nav class="nav-child">
                    <div class="nav-child-title text-center">
                        <h3>Bài viết xem nhiều nhất</h3>
                    </div>
                    <ul>
                        <li>
                            <a href="#">Hội thảo định hướng nghề nghiệp</a>
                            <p>13/05/2018</p>
                        </li>
                        <li>
                            <a href="#">Hỗ trợ cơ hội việc làm tại Ngân hàng Maritime Bank dành cho sinh viên ngành Tài chính - Ngân hàng</a>
                            <p>13/05/2018</p>
                        </li>
                        <li>
                            <a href="#">6 quy tắc cần thiết khi chuẩn bị phỏng vấn</a>
                            <p>13/05/2018</p>
                        </li>
                        <li>
                            <a href="#">Hỗ trợ cơ hội việc làm tại Ngân hàng Maritime Bank dành cho sinh viên ngành Tài chính - Ngân hàng</a>
                            <p>13/05/2018</p>
                        </li>
                        <li>
                            <a href="#">Hỗ trợ cơ hội việc làm tại Ngân hàng Maritime Bank dành cho sinh viên ngành Tài chính - Ngân hàng</a>
                            <p>13/05/2018</p>
                        </li>
                    </ul>
                </nav>
                <br>
                <nav class="nav-child">
                    <div class="nav-child-title text-center">
                        <h3>Liên hệ</h3>
                    </div>
                    <ul>
                        <li>
                            <a href="#">Login</a>
                        </li>
                        <li>
                            <a href="#">Entries RSS</a>
                        </li>
                        <li>
                            <a href="#">Comments RSS</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
<br>
@stop