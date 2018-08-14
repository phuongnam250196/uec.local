@extends('frontend.master')
@section('title', 'Bài viết chi tiết')
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
            <li class="breadcrumb-item">Bài viết</li>
        </ul>
    </div>
</section>
<section id="dieuhuong-doc">
    <div class="container">
        <div class="row">
            <div class="col-md-8 baiviet">
                <!-- Thay doi tai day -->
                <div class="baiviet-2">
                    <div class="row baiviet-row">
                        <div class="col-md-6 baiviet-col">
                            <div class="baiviet-col-img">
                                <a href="#"><img src="images/hoithao.PNG" style="width: 100%"></a>
                                <div class="baiviet-col-img-title">
                                    <h3><a href="#">Tin mới nhất Tin mới nhất Tin mới nhất Tin mới nhất</a></h3>
                                </div>
                                <div class="baiviet-col-img-nen"></div>
                            </div>
                        </div>
                        <div class="col-md-6 baiviet-col">
                            <div class="baiviet-col-bor">
                                <div class="baiviet-col-title">
                                    <h3>Bài viêt mới</h3>
                                </div>
                                <div class="row baiviet-col-row">
                                    <div class="col-md-4 baiviet-col-row-col">
                                        <a href="#"><img src="images/hoithao.PNG" style="width: 100%"></a>
                                    </div>
                                    <div class="col-md-8 baiviet-col-row-col">
                                        <h4><a href="#"><strong>KLAND phân phối độc quyền khu nhà ở TÂY PHỐ YẾT KIÊU</strong></a></h4>
                                        <p class="text-secondary"><small>12-12-2012</small></p>
                                    </div>
                                </div>
                                <div class="baiviet-col-content">
                                    <ul>
                                        <li><a href="#">công ty Kland chính thức phân phối độc quyền dự án Khu nhà ở Tây phối</a></li>
                                        <li><a href="#">công ty Kland chính thức phân phối độc quyền dự án Khu nhà ở Tây phố</a></li>
                                        <li><a href="#">công ty Kland chính thức phân phối độc quyền dự án Khu nhà ở Tây phố</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row baiviet-row">
                        <div class="col-md-6 baiviet-col">
                            <div class="baiviet-col-br">
                                <div class="baiviet-col-child-title">
                                    <h4><a href="#">Tin nóng</a></h4>
                                </div>
                                <div class="">
                                    <div class="baiviet-col-child-name">
                                        <h5><a href="#">Thực hư liên tiếp nhảy cầu tự tử sau trận mở màn của Đức, Brazil</a></h5>
                                    </div>
                                    <div class="row baiviet-col-row baiviet-col-child-content">
                                        <div class="col-md-5 baiviet-col-row-col">
                                            <a href="#"><img src="images/hoithao.PNG" style="width: 100%"></a>
                                        </div>
                                        <div class="col-md-7 baiviet-col-row-col">
                                            <p class="">Ngày 16/05/2018 đánh dấu sự kiện công ty Kland chính thức phân phối độc quyền dự án Khu nhà ở Tây phố.</p>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                                <div class="">
                                    <div class="baiviet-col-child-name">
                                        <h5><a href="#">Thực hư liên tiếp nhảy cầu tự tử sau trận mở màn của Đức, Brazil</a></h5>
                                    </div>
                                    <div class="row baiviet-col-row baiviet-col-child-content">
                                        <div class="col-md-5 baiviet-col-row-col">
                                            <a href="#"><img src="images/hoithao.PNG" style="width: 100%"></a>
                                        </div>
                                        <div class="col-md-7 baiviet-col-row-col">
                                            <p class="">Ngày 16/05/2018 đánh dấu sự kiện công ty Kland chính thức phân phối độc quyền dự án Khu nhà ở Tây phố.</p>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                                <div class="">
                                    <div class="baiviet-col-child-name">
                                        <h5><a href="#">Thực hư liên tiếp nhảy cầu tự tử sau trận mở màn của Đức, Brazil</a></h5>
                                    </div>
                                    <div class="row baiviet-col-row baiviet-col-child-content">
                                        <div class="col-md-5 baiviet-col-row-col">
                                            <a href="#"><img src="images/hoithao.PNG" style="width: 100%"></a>
                                        </div>
                                        <div class="col-md-7 baiviet-col-row-col">
                                            <p class="">Ngày 16/05/2018 đánh dấu sự kiện công ty Kland chính thức phân phối độc quyền dự án Khu nhà ở Tây phố.</p>
                                        </div>
                                    </div>
                                    <hr>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6 baiviet-col">
                            <div class="baiviet-col-br">
                                <div class="baiviet-col-child-title">
                                    <h4><a href="#">Tin nóng</a></h4>
                                </div>
                                <div class="baiviet-col-child-name">
                                    <h5><a href="#">Thực hư liên tiếp nhảy cầu tự tử sau trận mở màn của Đức, Brazil</a></h5>
                                </div>
                                <div class="row baiviet-col-row baiviet-col-child-content">
                                    <div class="col-md-5 baiviet-col-row-col">
                                        <a href="#"><img src="images/hoithao.PNG" style="width: 100%"></a>
                                    </div>
                                    <div class="col-md-7 baiviet-col-row-col">
                                        <p class="">Ngày 16/05/2018 đánh dấu sự kiện công ty Kland chính thức phân phối độc quyền dự án Khu nhà ở Tây phố.</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="baiviet-col-child-next">
                                    <p><i class="fas fa-hand-point-right"></i> <a href="#">ức phân phối  sự kiện công ty Kland chính thức phân phối độc quyền dự án Khu nhà ở Tây phố.</a></p>
                                    <p><i class="fas fa-hand-point-right"></i> <a href="#">đánh dấu sự kiện công ty Kland chính thức phân phối độc quyền dự án Khu nhà ở Tây phố.</a></p>
                                    <p><i class="fas fa-hand-point-right"></i> <a href="#">độc quyền đánh dấu sự kiện công ty Kland chính thức phân phối độc quyền dự án Khu nhà ở Tây phố.</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End thay đổi -->
            </div>
            <div class="col-md-4 nav-doc">
                <nav class="nav-child">
                    <div class="nav-child-title text-center">
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