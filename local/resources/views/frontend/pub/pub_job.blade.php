@extends('frontend.master')
@section('title', 'Job Fair')
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
          <li class="breadcrumb-item">Job Fair 2018</li>
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
                            <h1 class="thongtinsinhvien-title-exp">Job Fair 2018</h1>
                        </div>
                        <div class="row thongtinsinhvien-row">
                            <div class="col-md-8 thongtinsinhvien-content">
                                <p>Chương trình Job Fair 2018, dự kiến sẽ được tổ chức vào ngày 11 tháng 04/2018, đã bị hoãn lại cho đến tháng 06 hoặc tháng 07/2018. Lý do là Trường Đại Học Thăng Long đang tập trung cho việc kiểm định chất lượng đại học và do chỉ có ít sinh viên đã quan tâm đến sự kiện đó vào ngày 11/04/2018.</p>
                                <p><i>Trung tâm UEC-TLU thành thật xin lỗi về sự giãn đoạn này ngoài ý muốn của chúng tôi !</i></p>
                                <p>Các doanh nghiệp quan tâm đến việc đồng tổ chức các hoạt dộng và sự kiện dành cho sinh viên nhằm phát huy kỹ năng tìm kiếm việc làm cho họ có thể liên hệ với chúng tôi.</p>
                                <p>Trung tâm UEC-TLU đã thay chương trình Job Fair 2018 (11 tháng 04/2018) bằng một buổi hội thảo về <a href="#">định hướng nghề nghiệp</a> sẽ được tổ chức ngày thứ bảy 21 tháng 04/2018. Ai quan tâm đến có thể truy cập thông tin <a href="#">tại đây</a>.</p>
                                <div class="dinhhuong-content-lienquan">
                                    <h5>Nội dung của các chương trình Job Fair sẽ được tổ chức tại Trường Đại Học Thăng Long:</h5>
                                    <ul>
                                        <li>Hoạt động tư vấn nghề nghiệp của các doanh nghiệp dành cho sinh viên.</li>
                                        <li>Phỏng vấn và tuyển dụng trực tiếp của các doanh nghiệp.</li>
                                        <li>Chia sẻ kinh nghiệm về định hướng nghề nghiệp.</li>
                                        <li>cô Đinh Thúy Quỳnh, thư ký của Trung tâm UEC-TLU, tại địa chỉ <br>thuky-uec@thanglong.edu.vn ; ĐT: 0906263326</li>
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
                <div class="xem-demuc">
                    <form action="/action_page.php">
                        <div class="form-group">
                            <label for="pwd">ARCHIVES</label>
                            <select name="" class="form-control">
                                <option value="">Chọn tháng</option>
                                <option>Tháng 5 (2017)</option>
                                <option>Tháng 6 (2017)</option>
                                <option>Tháng 7 (2017)</option>
                                <option>Tháng 8 (2017)</option>
                                <option>Tháng 9 (2017)</option>
                                <option>Tháng 10 (2017)</option>
                                <option>Tháng 11 (2017)</option>
                                <option>Tháng 12 (2017)</option>
                                <option>Tháng 5 (2018)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pwd">CATEGORIES</label>
                            <select name="" class="form-control">
                                <option value="">Chọn danh mục</option>
                                <option>Tháng 5 (2017)</option>
                                <option>Tháng 6 (2017)</option>
                                <option>Tháng 7 (2017)</option>
                                <option>Tháng 8 (2017)</option>
                                <option>Tháng 9 (2017)</option>
                                <option>Tháng 10 (2017)</option>
                                <option>Tháng 11 (2017)</option>
                                <option>Tháng 12 (2017)</option>
                                <option>Tháng 5 (2018)</option>
                            </select>
                        </div>
                    </form>
                </div>
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