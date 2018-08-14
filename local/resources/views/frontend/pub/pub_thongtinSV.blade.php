@extends('frontend.master')
@section('title', 'Thông tin sinh viên')
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
          <li class="breadcrumb-item">Thông tin sinh viên</li>
        </ul>
    </div>
</section>
<section id="dieuhuong-doc">
    <div class="container">
        <div class="row">
            <div class="col-md-8 baiviet">
                <!-- Thay đổi tại đây -->
                <div class="thongtinsinhvien">
                    <div class="thongtinsinhvien-main">
                        <div class="thongtinsinhvien-title">
                            <h1 class="thongtinsinhvien-title-exp">Thông tin sinh viên</h1>
                        </div>
                        <div class="row thongtinsinhvien-row">
                            <div class="col-md-8 thongtinsinhvien-content">
                                <p>Trung tâm Kết nối Đại học-Doanh nghiệp của Trường Đại Học Thăng Long (UEC-TLU) là một đơn vị được Trường Đại Học hăng Long thành lập theo quyết định 05/QĐHĐQT-ĐHTL, ngày 01 tháng 03 năm 2017, do GS Hoàng Xuân Sính, chủ tịch Hội đồng Quản trị, đã ký.</p>
                                <p>Trung tâm có nhiệm vụ tăng cường mỗi quan hệ hợp tác giữa Trường Đại Học Thăng Long với doanh nghiệp Việt Nam và nước ngoài, nhằm phát triển những kỹ năng làm việc và kỹ năng tìm việc làm của sinh viên Trường Đại Học Thăng Long, góp phần cho sự phát triển thông minh và bền vững của xã hội Việt Nam.</p>
                                <p>Chúng tôi mong muốn được kết nối với các doanh nghiệp, đặc biệt là cựu sinh viên của Trường ĐH Thăng Long, nhằm tạo điều kiện cho sinh viên của Trường tìm được một nơi thực tập, sát với thực tế làm việc trong ngành, và nhận được sự đóng góp của các doanh nghiệp trong việc cải tiến nội dung đào tạo trở nên thiết thực hơn.</p>
                                <div class="thongtinsinhvien-content-lienquan">
                                    <p><strong>Để tìm hiểu thêm:</strong></p>
                                    <ul>
                                        <li><a href="#">Đọc thư ngỏ hướng về các doanh nhân</a></li>
                                        <li><a href="#">Tải flyer giới thiệu Trung tâm UEC-TLU</a></li>
                                        <li><a href="#">Tải tài liệu giới thiệu các ngành đào tạo của Trường Đại Học Thăng Long</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 thongtinsinhvien-img">
                                <img src="images/hoithao.PNG">
                                <img src="images/hoithao.PNG">
                                <img src="images/hoithao.PNG">
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