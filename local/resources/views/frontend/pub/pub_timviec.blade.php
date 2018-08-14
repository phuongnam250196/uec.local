@extends('frontend.master')
@section('title', 'Tìm việc')
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
            <li class="breadcrumb-item">Tìm việc</li>
        </ul>
    </div>
</section>
<section id="dieuhuong-doc">
    <div class="container">
        <div class="row">
            <div class="col-md-8 baiviet">
                <!-- Thay doi tai day -->
                <div class="timviec">
                    <div class="row timviec-row">
                        <div class="col-md-4 timviec-col">
                            <div class="card">
                                <a href="#"><img class="card-img-top" src="images/ipos-tuyendung.jpg"></a>
                                <div class="card-body text-center">
                                    <h4 class="card-title">Thực tập PHP (> 3 năm)</h4>
                                    <p class="card-text">Dự án của BraveBits đang phát triển không ngừng và công ty cần tìm kiếm thêm các cộng sự</p>
                                    <a href="#" class="btn btn-success card-sbm">Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 timviec-col">
                            <div class="card">
                                <a href="#"><img class="card-img-top" src="images/ipos-tuyendung-2.jpg"></a>
                                <div class="card-body text-center">
                                    <h4 class="card-title">Thực tập PHP (> 3 năm)</h4>
                                    <p class="card-text">Dự án của BraveBits đang phát triển không ngừng và công ty cần tìm kiếm thêm các cộng sự</p>
                                    <a href="#" class="btn btn-outline-danger card-sbm">Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 timviec-col">
                            <div class="card">
                                <a href="#"><img class="card-img-top" src="images/keysky-tuyendung.jpg"></a>
                                <div class="card-body text-center">
                                    <h4 class="card-title">Thực tập PHP (> 3 năm)</h4>
                                    <p class="card-text">Hỗ trợ cơ hội việc làm tại Ngân hàng Maritime Bank dành cho sinh viên ngành Tài chính - Ngân hàng</p>
                                    <a href="#" class="btn btn-outline-info card-sbm">Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 timviec-col">
                            <div class="card">
                                <a href="#"><img class="card-img-top" src="images/ominext-tuyendung.png"></a>
                                <div class="card-body text-center">
                                    <h4 class="card-title">Thực tập PHP (> 3 năm)</h4>
                                    <p class="card-text">Dự án của BraveBits đang phát triển không ngừng và công ty cần tìm kiếm thêm các cộng sự</p>
                                    <a href="#" class="btn btn-outline-secondary card-sbm">Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 timviec-col">
                            <div class="card">
                                <a href="#"><img class="card-img-top" src="images/septeni-tuyendung-2.jpg"></a>
                                <div class="card-body text-center">
                                    <h4 class="card-title">Thực tập PHP (> 3 năm)</h4>
                                    <p class="card-text">Dự án của BraveBits đang phát triển không ngừng và công ty cần tìm kiếm thêm các cộng sự</p>
                                    <a href="#" class="btn btn-outline-primary card-sbm">Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 timviec-col">
                            <div class="card">
                                <a href="#"><img class="card-img-top" src="images/tuyendung.png"></a>
                                <div class="card-body text-center">
                                    <h4 class="card-title">Thực tập PHP (> 3 năm)</h4>
                                    <p class="card-text">Dự án của BraveBits đang phát triển không ngừng và công ty cần tìm kiếm thêm các cộng sự</p>
                                    <a href="#" class="btn btn-outline-success card-sbm">Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 timviec-col">
                            <div class="card">
                                <a href="#"><img class="card-img-top" src="images/hoithao.PNG"></a>
                                <div class="card-body text-center">
                                    <h4 class="card-title">Thực tập PHP (> 3 năm)</h4>
                                    <p class="card-text">Dự án của BraveBits đang phát triển không ngừng và công ty cần tìm kiếm thêm các cộng sự</p>
                                    <a href="#" class="btn btn-warning card-sbm">Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 timviec-col">
                            <div class="card">
                                <a href="#"><img class="card-img-top" src="images/vnnplus-tuyen-dung-nhan-su-lap-trinh-php.jpg"></a>
                                <div class="card-body text-center">
                                    <h4 class="card-title">Thực tập PHP (> 3 năm)</h4>
                                    <p class="card-text">Dự án của BraveBits đang phát triển không ngừng và công ty cần tìm kiếm thêm các cộng sự</p>
                                    <a href="#" class="btn btn-danger card-sbm">Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 timviec-col">
                            <div class="card">
                                <a href="#"><img class="card-img-top" src="images/Fpt-Telecom.jpg"></a>
                                <div class="card-body text-center">
                                    <h4 class="card-title">Thực tập PHP (> 3 năm)</h4>
                                    <p class="card-text">Dự án của BraveBits đang phát triển không ngừng và công ty cần tìm kiếm thêm các cộng sự</p>
                                    <a href="#" class="btn btn-link card-sbm">Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 timviec-col">
                            <div class="card">
                                <a href="#"><img class="card-img-top" src="images/giao-hang-tiet-kiem.png"></a>
                                <div class="card-body text-center">
                                    <h4 class="card-title">Thực tập PHP (> 3 năm)</h4>
                                    <p class="card-text">Dự án của BraveBits đang phát triển không ngừng và công ty cần tìm kiếm thêm các cộng sự</p>
                                    <a href="#" class="btn btn-primary card-sbm">Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 timviec-col">
                            <div class="card">
                                <a href="#"><img class="card-img-top" src="images/Luyện-thi-ngân-hàng-Maritime-Bank.jpg"></a>
                                <div class="card-body text-center">
                                    <h4 class="card-title">Thực tập PHP (> 3 năm)</h4>
                                    <p class="card-text">Dự án của BraveBits đang phát triển không ngừng và công ty cần tìm kiếm thêm các cộng sự</p>
                                    <a href="#" class="btn btn-secondary card-sbm">Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 timviec-col">
                            <div class="card">
                                <a href="#"><img class="card-img-top" src="images/ominext-tuyendung.png"></a>
                                <div class="card-body text-center">
                                    <h4 class="card-title">Thực tập PHP (> 3 năm)</h4>
                                    <p class="card-text">Dự án của BraveBits đang phát triển không ngừng và công ty cần tìm kiếm thêm các cộng sự</p>
                                    <a href="#" class="btn btn-info card-sbm">Xem chi tiết</a>
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