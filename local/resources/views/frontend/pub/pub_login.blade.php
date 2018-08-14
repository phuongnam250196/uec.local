@extends('frontend.master')
@section('title', 'Login')
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
<section id="dieuhuong-doc">
    <div class="container">
        <div class="row">
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
            </div>
            <div class="col-md-8 baiviet">
                <!-- Thay đổi tại đây -->
                <div class="thongtinsinhvien">
                    <section class="breadcrumb-link">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                            <li class="breadcrumb-item">Login</li>
                        </ul>
                    </section>
                    <div class="thongtinsinhvien-main">
                        <div class="login-content offset-2 col-md-8">
                            <div class="login-title text-center">
                                <h1 class="login-title-exp">đăng nhập</h1>
                                <br>
                                <p>Trang đăng nhập vào tài khoản của bạn trên <br> tài khoản được cấp</p>
                                <hr>
                                <br>
                            </div>
                            <form method="post">
                                <div class="form-group">
                                    <label>Tài khoản</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                          <span class="fa fa-user fa-2x"></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Nhập tài khoản">
                                      </div>
                                </div>
                                <div class="form-group">
                                    <label>Mật khẩu</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                          <span class="fas fa-lock fa-2x"></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Nhập mật khẩu">
                                      </div>
                                </div>
                                <br>
                                <div class="form-group form-check">
                                    <div class="d-flex">
                                        <div class="text-left">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox"> Ghi nhớ
                                            </label>
                                        </div>
                                        <div class="ml-auto">
                                            <a href="#" class="text-right">Quên mật khẩu</a>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="text-center login-btn">
                                    <button type="submit" class="btn btn-outline-primary">Đăng nhập</button>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <p>© 2016 Classy Login Form. All rights reserved | Design by W3layouts</p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End thay đổi -->
            </div>
        </div>
    </div>
</section>
<br>
@stop