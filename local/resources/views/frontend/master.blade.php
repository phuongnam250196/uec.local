<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{{asset('public/Layout/Frontend')}}/">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
    {{-- <script type="text/javascript" src="engine1/jquery.js"></script> --}}
    {{-- <link rel="stylesheet" href="css/font-awesome.min.css"> --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/globals.js"></script>
    
</head>

<body>
    <header id="header-1" class="">
        <div class="container">
            <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                <!-- <a class="navbar-brand" href="#">Navbar</a> -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{asset('gioithieu')}}">Giới thiệu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{asset('huongdoanhnghiep')}}">Hướng về Doanh nghiệp</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{asset('thongtinsinhvien')}}">Thông tin Sinh Viên</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{asset('dinhhuongnghe')}}">Định hướng nghề nghiệp</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{asset('jobfair')}}">Job Fair</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{asset('khaosat/sinhvien')}}"><i class="far fa-edit"></i> Làm khảo sát</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{asset('dangnhap')}}"><i class="fas fa-user"></i> Login</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <aside id="slide-sp">
        <!-- <div class="container"> -->
            <!-- <div class="row"> -->
            <div id="wowslider-container1">
                <div class="ws_images">
                    <ul>
                        <li><a href="https://uec.thanglong.edu.vn"><img src="data1/images/tlu-2.png" title="UNIVERSITY-ENTERPRISE CENTER (UEC-TLU) / <br> TRUNG TÂM KẾT NỐI ĐẠI HỌC DOANH NGHIỆP – <br> ĐẠI HỌC THĂNG LONG" id="wows1_0"/></a></li>
                        <li><a href="https://uec.thanglong.edu.vn"><img src="data1/images/3.jpg" title="UNIVERSITY-ENTERPRISE CENTER (UEC-TLU) / <br> TRUNG TÂM KẾT NỐI ĐẠI HỌC DOANH NGHIỆP – <br> ĐẠI HỌC THĂNG LONG" id="wows1_1"/></a></li>
                        <li><a href="https://uec.thanglong.edu.vn"><img src="data1/images/2.jpg" title="UNIVERSITY-ENTERPRISE CENTER (UEC-TLU) / <br> TRUNG TÂM KẾT NỐI ĐẠI HỌC DOANH NGHIỆP – <br> ĐẠI HỌC THĂNG LONG" id="wows1_2"/></a></li>
                    </ul>
                </div>
                <div class="ws_bullets">
                    <div>
                        <a href="#" title="UNIVERSITY-ENTERPRISE CENTER (UEC-TLU) / <br> TRUNG TÂM KẾT NỐI ĐẠI HỌC DOANH NGHIỆP – <br> ĐẠI HỌC THĂNG LONG"><span><img src="data1/tooltips/1489113560_offlinethulinhsinhvienhanoifpttelecom15.jpg"/>1</span></a>
                        <a href="#" title="UNIVERSITY-ENTERPRISE CENTER (UEC-TLU) / <br> TRUNG TÂM KẾT NỐI ĐẠI HỌC DOANH NGHIỆP – <br> ĐẠI HỌC THĂNG LONG"><span><img src="data1/tooltips/autumn_macro_red_foliage_background_84016_1920x1080.jpg"/>2</span></a>
                        <a href="#" title="UNIVERSITY-ENTERPRISE CENTER (UEC-TLU) / <br> TRUNG TÂM KẾT NỐI ĐẠI HỌC DOANH NGHIỆP – <br> ĐẠI HỌC THĂNG LONG"><span><img src="data1/tooltips/background_texture_music_sign_treble_clef_29912_1280x720.jpg"/>3</span></a>
                    </div>
                </div>
            </div>
            <!-- </div> -->
        <!-- </div> -->
    </aside>
    
   <!-- Thay đổi nội dung content tại đây -->
    @yield('main')
   <!-- End thay đổi nội dung -->

    <aside id="aside-index">
        <div class="container">
            <div class="owl-carousel owl-all">
                @foreach($enterprise as $en)
              <div class="item">
                <a href="{{route('dn_chitiet')}}" title="{{$en->enterprise_name}}"><img src="{{url('local/storage/app/public/'.$en->enterprise_logo)}}" ></a>
              </div>
              @endforeach
             
              <div class="item">
                 <a href="#"><img src="images/nashtech.jpg"></a>
              </div>
              <div class="item">
                 <a href="#"><img src="images/ominext-logo.png"></a>
              </div>
              <div class="item">
                 <a href="#"><img src="images/septeni-logo.jpg"></a>
              </div>
              <div class="item">
                 <a href="#"><img src="images/vibiz-logo.png"></a>
              </div>
              <div class="item">
                 <a href="#"><img src="images/Fpt-Telecom.jpg"></a>
              </div>
            </div>
        </div>
    </aside>
    
    <footer id="ft-1">
        <div class="container">
            <div class="row">
                <div class="col-md-3 ft-1-col">
                    <h4>các quy định</h4>
                    <div class="ft-1-huongdan">
                        <ul>
                            <li><a href="{{asset('baiviet')}}">Bài viết</a></li>
                            <li><a href="#">Chào mừng</a></li>
                            <li><a href="{{asset('dinhhuongnghe')}}">Định hướng nghề nghiệp</a></li>
                            <li><a href="#">Kết nối cựu sinh viên</a></li>
                            <li><a href="{{asset('thongtinsinhvien')}}">Thông tin sinh viên</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 ft-1-col">
                    <h4>liên kết hữu ích</h4>
                    <div class="ft-1-huongdan">
                        <ul>
                            <li><a href="{{asset('gioithieu')}}">Về với chúng tôi</a></li>
                            <li><a href="https://thanglong.edu.vn">thanglong.edu.vn</a></li>
                            <li><a href="https://elearning.thanglong.edu.vn">elearning.thanglong.edu.vn</a></li>
                            <li><a href="https://uec.thanglong.edu.vn">uec.thanglong.edu.vn</a></li>
                            <li><a href="#">fb.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 ft-1-col">
                    <h4>Fanpage</h4>
                    <div class="ft-1-huongdan">
                        <img src="images/tlu-7.PNG" >
                    </div>
                </div>
                <div class="col-md-3 ft-1-col">
                    <h4>Liên hệ</h4>
                    <div class="ft-1-huongdan-lienhe">
                        <ul>
                            <li><a href="#">UEC - TLU</a></li>
                            <li>Cơ sở: CT12B Kim Văn Kim Lũ, Nghiêm Xuân Yêm, Đại Kim, Hoàng Mai, Hà Nội</li>
                            <li>Cơ sở 2: 31 Đường Chiến Thắng - Khu I - Thị Trấn Cẩm Giàng - Hải Dương</li>
                            <li>Số điện thoại: 024 3858 7346</li>
                            <li>Email: tlu@thanglong.edu.vn</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <footer id="ft-2">
        <div class="container">
            <div class="row text-center">
                <p>Copyright © 2018 Bản quyền thuộc UEC-TLU</p>
            </div>
        </div>
    </footer>
    <script type="text/javascript" src="engine1/wowslider.js"></script>
    <script type="text/javascript" src="engine1/script.js"></script>
</body>

</html>