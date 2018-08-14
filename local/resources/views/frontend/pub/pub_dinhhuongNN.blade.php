@extends('frontend.master')
@section('title', 'Định hướng nghề nghiệp')
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
          <li class="breadcrumb-item">Định hướng nghề nghiệp</li>
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
                            <h1 class="thongtinsinhvien-title-exp">định hướng nghề nghiệp</h1>
                        </div>
                        <div class="row thongtinsinhvien-row">
                            <div class="col-md-8 thongtinsinhvien-content">
                                <p>Trung tâm Kết nối Đại học-Doanh nghiệp (UEC-TLU) và Nhà trường đang phát triển các sinh hoạt nhằm giúp sinh viên có thêm kỹ năng tìm kiếm việc làm khi sắp tốt nghiệp hoặc khi đã tốt nghiệp rồi.</p>
                                <p>Hiện nay, với sự hỗ trợ tài chính của <a href="#">Tổ chức Đại học Pháp ngữ</a> (AUF) tại Châu Á-Thái Bình Dương, Trung tâm UEC đang chuẩn bị một lớp tự học trực tuyến, nhằm giúp sinh viên Nhà trường trong việc định hướng nghề nghiệp.</p>
                                <p>Các doanh nghiệp quan tâm đến việc đồng tổ chức các hoạt dộng và sự kiện dành cho sinh viên nhằm phát huy kỹ năng tìm kiếm việc làm cho họ có thể liên hệ với chúng tôi.</p>
                                <p><strong>Thông tin liên lạc:</strong> cô Đinh Thúy Quỳnh (thuky-uec@thanglong.edu.vn ; ĐT: 0906 263 326)</p>
                                <div class="dinhhuong-content-lienquan">
                                    <h5>Các sự kiện đã qua:</h5>
                                    <p><strong>Ngày Định Hướng Nghề nghiệp 21/04/2018:</strong><br>Trong tháng 04/2018, Trung tâm UEC-TLU đã tổ chức một hội thảo về định hướng nghề nghiệp, giúp sinh viên học tập cách soạn lý lịch CV và chuẩn bị cho các cuộc phỏng vấn vào ngày 21 tháng 04/2018. Xem nội dung <a href="#">tại đây</a>.</p>
                                    <p><strong>Ngày Định Hướng Nghề nghiệp 21/04/2018:</strong><br>Trong tháng 04/2018, Trung tâm UEC-TLU đã tổ chức một hội thảo về định hướng nghề nghiệp, giúp sinh viên học tập cách soạn lý lịch CV và chuẩn bị cho các cuộc phỏng vấn vào ngày 21 tháng 04/2018. Xem nội dung <a href="#">tại đây</a>.</p>
                                    <p><strong>Ngày Định Hướng Nghề nghiệp 21/04/2018:</strong><br>Trong tháng 04/2018, Trung tâm UEC-TLU đã tổ chức một hội thảo về định hướng nghề nghiệp, giúp sinh viên học tập cách soạn lý lịch CV và chuẩn bị cho các cuộc phỏng vấn vào ngày 21 tháng 04/2018. Xem nội dung <a href="#">tại đây</a>.</p>
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