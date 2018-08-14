@extends('frontend.master')
@section('title', 'Khảo sát sinh viên')
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
            <li class="breadcrumb-item">Khảo sát</li>
        </ul>
    </div>
</section>
<section id="dieuhuong-doc">
    <div class="container">
        <div class="row">
            <div class="col-md-8 baiviet">
                <!-- Thay đổi tại đây -->
                <div class="thongtinsinhvien">
                    <div class=" col-md-8 offset-2 thongtinsinhvien-main khaosat">
                        <div class="thongtinsinhvien-title">
                            <h1 class="thongtinsinhvien-title-exp">Làm khảo sát sinh viên</h1>
                            <p>Thông tin bạn điền sẽ là nguồn dữ liệu phân tích của UEC sau này. Đề nghị điền chính xác, đúng sự thật.
                                <br>Thông tin (<b class="text-danger">*</b>) là thông tin bắt buộc phải điền.</p>
                        </div>
                        <hr>
                        <div class="khaosat-detail">
                            <form>
                                <div class="form-group">
                                    <label>1. Địa chỉ Email (<span class="text-danger"><strong>*</strong></span>)</label>
                                    <input type="email" class="form-control" placeholder="VD: abc@gmail.com">
                                </div>
                                <div class="form-group">
                                    <label>2. Họ và tên <span class="text-danger"><strong>*</strong></span></label>
                                    <input type="text" class="form-control" placeholder="VD: Trần Văn A">
                                </div>
                                <div class="form-group">
                                    <label>3. Giới tính <span class="text-danger"><strong>*</strong></span></label>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="optradio">Nam
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="optradio">Nữ
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>4. Mã Sinh Viên <span class="text-danger"><strong>*</strong></span></label>
                                    <input type="text" class="form-control" placeholder="VD: A25288">
                                </div>
                                <div class="form-group">
                                    <label>5. Khóa tuyển vào <span class="text-danger"><strong>*</strong></span></label>
                                    <input type="text" class="form-control" placeholder="VD: K27">
                                </div>
                                <div class="form-group">
                                    <label>6. Ngành đào tạo/Tốt nghiệp <span class="text-danger"><strong>*</strong></span></label>
                                    <input type="text" class="form-control" placeholder="VD: Khoa học máy tính">
                                </div>
                                <div class="form-group">
                                    <label>7. Điện thoại liên hệ </label>
                                    <input type="text" class="form-control" placeholder="VD: 01654 524 503">
                                </div>
                                <div class="form-group">
                                    <label>8. Nếu bạn đồng ý cho Trung tâm UEC cung cấp địa chỉ email của bạn cho các đối tác doanh nghiệp đang tuyển dụng các vị trí làm việc và thực tập, vui lòng đánh dấu ô thích hợp. <span class="text-danger"><strong>*</strong></span></label>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="optradio">Đồng ý
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="optradio">Không đồng
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>9. Nếu bạn muốn nhận tờ thông tin điện tử của Trung tâm UEC-TLU, cung cấp các thông tin định hướng nghề nghiệp và tuyển dụng việc làm của các đối tác, vui lòng đánh dấu ô thích hợp <span class="text-danger"><strong>*</strong></span></label>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="optradio">Đồng ý
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="optradio">Không đồng
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>10. Bạn có muốn tham gia mạng lưới cựu sinh viên của Trường Đại Học Thăng Long sau khi đã tốt nghiệp không ? <span class="text-danger"><strong>*</strong></span></label>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="optradio">Đồng ý
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="optradio">Không đồng
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="optradio">Tôi chưa xác định được bây giờ
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>11. Địa chỉ email (chỉ dùng cho Trường liên hệ sau này và cho Trung tâm UEC gửi thông tin)</label>
                                    <input type="text" class="form-control" placeholder="VD: abc@gmail.com">
                                </div>
                                <button type="submit" class="btn btn-outline-primary khaosat-send">Gửi phiếu</button>
                            </form>
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