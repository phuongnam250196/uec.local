@extends('frontend.master')
@section('title', 'Giáo viên')
@section('main')
<br>
<section id="dieuhuong-doc">
    <div class="container">
        <div class="row">
            <div class="col-md-4 nav-doc">
                <div class="dn-tab">
                    <div class="dn-tab-title text-center">
                        <h4>doashboard</h4>
                    </div>
                    <div id="accordion">
                    <div class="card">
                        <div class="card-header">
                          <a class="collapsed card-link" href="#">Thông tin giáo viên</a>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header d-flex">
                          <a class="card-link" data-toggle="collapse" href="#collapseOne">Quản lý thông tin sinh viên</a><i class="ml-auto mt-2 fas fa-angle-down"></i>
                        </div>
                        <div id="collapseOne" class="collapse show">
                          <ul>
                            <li><a href="#">Nhập việc làm sinh viên</a></li>
                            <li><a href="#">Xác nhận thông tin việc làm sinh viên</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header">
                          <a class="collapsed card-link" href="#">Báo cáo - Thống kê</a>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header">
                          <a class="collapsed card-link" href="#">Tin tức gần đây</a>
                        </div>
                      </div>
                    </div>
                </div>
                <br>
                <nav class="nav-child">
                    <div class="nav-child-title text-center">
                        <h3>Tin tuyển dụng xem nhất</h3>
                    </div>
                    <ul>
                        <li>
                            <div class="media">
                              <img src="images/Fpt-Telecom.jpg">
                              <div class="media-body">
                                <h4><a href="#">Thực tập lập trình php</a></h4>
                                <div class="media-body-nhatruong">
                                    <p><a href="#" class="text-secondary">Công ty Fsoft - Hà Nội</a></p>
                                    <p><small><i>Posted on February 19, 2016</i></small></p>
                                </div>
                              </div>
                            </div>
                        </li>
                        <li>
                            <div class="media">
                              <img src="images/hoithao.PNG">
                              <div class="media-body">
                                <h4><a href="#">Lập trình viên Ruby</a></h4>
                                <div class="media-body-nhatruong">
                                    <p><a href="#" class="text-secondary">Framgia Inc - Hà Nội</a></p>
                                    <p><small><i>Posted on February 19, 2016</i></small></p>
                                </div>
                              </div>
                            </div>
                        </li>
                        <li>
                            <div class="media">
                              <img src="images/social_square.jpg">
                              <div class="media-body">
                                <h4><a href="#">Trợ lý Giám đốc Marketing</a></h4>
                                <div class="media-body-nhatruong">
                                    <p><a href="#" class="text-secondary">Framgia Inc - Hà Nội</a></p>
                                    <p><small><i>Posted on February 19, 2016</i></small></p>
                                </div>
                              </div>
                            </div>
                        </li>
                        <li>
                            <div class="media">
                              <img src="images/viettel.png">
                              <div class="media-body">
                                <h4><a href="#">Kỹ Sư Lập Trình Nhúng</a></h4>
                                <div class="media-body-nhatruong">
                                    <p><a href="#" class="text-secondary">CP dịch vụ truyền thông đa phương tiện - Hà Nội</a></p>
                                    <p><small><i>Posted on February 19, 2016</i></small></p>
                                </div>
                              </div>
                            </div>
                        </li>
                        <li>
                            <div class="media">
                              <img src="images/ipos-tuyendung-2.jpg">
                              <div class="media-body">
                                <h4><a href="#">Kỹ Sư Lập Trình Nhúng</a></h4>
                                <div class="media-body-nhatruong">
                                    <p><a href="#" class="text-secondary">CP dịch vụ truyền thông đa phương tiện - Hà Nội</a></p>
                                    <p><small><i>Posted on February 19, 2016</i></small></p>
                                </div>
                              </div>
                            </div>
                        </li>
                    </ul>
                </nav>
              
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
            <div class="col-md-8 baiviet">
                <div class="dieuhuong-doc-search">
                    <div class="row dieuhuong-doc-search-2">
                        <div class="col-md-4 dieuhuong-doc-search-2-col dieuhuong-doc-search-2-text">
                            <i class="fas fa-search"></i>
                          <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nhập từ khóa tìm kiếm">
                          </div>
                        </div>
                        <div class="col-md-3 dieuhuong-doc-search-2-col">
                            <div class="form-group">
                              <select class="form-control">
                                <option>Chọn ngành nghề</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                              </select>
                            </div>
                        </div>
                        <div class="col-md-3 dieuhuong-doc-search-2-col">
                            <div class="form-group">
                              <select class="form-control" id="sel1">
                                <option>Tỉnh/Thành phố</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                              </select>
                            </div>
                        </div>
                        <div class="col-md-2 dieuhuong-doc-search-2-col">
                          <div class="form-group">
                            <input type="submit" class="form-control" value="Tìm kiếm">
                          </div>
                        </div>
                    </div>
                    <div class="row dieuhuong-doc-search-info">
                        <div class="col-6 text-left">
                            <p>Tổng số việc hiện có <span class="text-success">240</span> vị trí</p>
                        </div>
                        <div class="col-6 text-right">
                            <p><a href="#">Mới nhất</a> | <a href="#">Hạn nộp hồ sơ</a></p>
                        </div>
                    </div>
                </div>
                <div class="row nhatruong-row">
                    <div class="col-md-8 nhatruong-col-1">
                        <div class="baiviet-post">
                            <div class="student">
                                <div class="student-title">
                                    <div class="row">
                                        <div class="col-md-9 student-title-h3">
                                            <h3><a href="#">PHP Developer (Junior )</a></h3>
                                            <p>Bravebits - Hà Nội</p>
                                        </div>
                                        <div class="col-md-3 student-time text-right">
                                            <p class="time-up"><a href="#">13/05/2018</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row student-content">
                                    <div class="col-md-4 student-content-col">
                                        <img src="images/brave.jpg" style="width:100%" alt="">
                                    </div>
                                    <div class="col-md-8 student-content-col">
                                        <p class="noidung-post-x">Thân gửi trai xinh gái đẹp Developer đang tìm kiếm một cơ hội mới. Dự án của BraveBits đang phát triển không ngừng và công ty cần tìm kiếm thêm các cộng sự để cùng BB chiến đấu mang sản phẩm đi càng xa trong thị trường châu Âu, Mỹ.</p>
                                        <a href="#">Xem chi tiết.</a>
                                    </div>
                                </div>
                            </div>
                            <div class="student">
                                <div class="student-title">
                                    <div class="row">
                                        <div class="col-md-9 student-title-h3">
                                            <h3><a href="#">Hỗ trợ cơ hội việc làm tại Ngân hàng Maritime Bank dành cho sinh viên ngành Tài chính - Ngân hàng</a></h3>
                                            <p>Ngân hàng Maritime Bank - Hà Nội</p>
                                        </div>
                                        <div class="col-md-3 student-time text-right">
                                            <p class="time-up"><a href="#">13/05/2018</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row student-content">
                                    <div class="col-md-4 student-content-col">
                                        <img src="images/Luyện-thi-ngân-hàng-Maritime-Bank.jpg" style="width:100%" alt="">
                                    </div>
                                    <div class="col-md-8 student-content-col">
                                        <p class="noidung-post-x">Thân gửi trai xinh gái đẹp Developer đang tìm kiếm một cơ hội mới. Dự án của BraveBits đang phát triển không ngừng và công ty cần tìm kiếm thêm các cộng sự để cùng BB chiến đấu mang sản phẩm đi càng xa trong thị trường châu Âu, Mỹ.</p>
                                        <a href="#">Xem chi tiết.</a>
                                    </div>
                                </div>
                            </div>
                            <div class="student">
                                <div class="student-title">
                                    <div class="row">
                                        <div class="col-md-9 student-title-h3">
                                            <h3><a href="#">Kỹ Sư Lập Trình Nhúng</a></h3>
                                            <p>CP dịch vụ truyền thông đa phương tiện - Hà Nội</p>
                                        </div>
                                        <div class="col-md-3 student-time text-right">
                                            <p class="time-up"><a href="#">13/05/2018</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row student-content">
                                    <div class="col-md-4 student-content-col">
                                        <img src="images/viettel.png" style="width:100%" alt="">
                                    </div>
                                    <div class="col-md-8 student-content-col">
                                        <p class="noidung-post-x">Thân gửi trai xinh gái đẹp Developer đang tìm kiếm một cơ hội mới. Dự án của BraveBits đang phát triển không ngừng và công ty cần tìm kiếm thêm các cộng sự để cùng BB chiến đấu mang sản phẩm đi càng xa trong thị trường châu Âu, Mỹ.</p>
                                        <a href="#">Xem chi tiết.</a>
                                    </div>
                                </div>
                            </div>
                            <div class="student">
                                <div class="student-title">
                                    <div class="row">
                                        <div class="col-md-9 student-title-h3">
                                            <h3><a href="#">Cơ hội tuyển dụng và thực tập tại Công ty NashTech</a></h3>
                                            <p>Bravebits - Hà Nội</p>
                                        </div>
                                        <div class="col-md-3 student-time text-right">
                                            <p class="time-up"><a href="#">13/05/2018</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row student-content">
                                    <div class="col-md-4 student-content-col">
                                        <img src="images/nashtech.jpg" style="width:100%" alt="">
                                    </div>
                                    <div class="col-md-8 student-content-col">
                                        <p class="noidung-post-x">Thân gửi trai xinh gái đẹp Developer đang tìm kiếm một cơ hội mới. Dự án của BraveBits đang phát triển không ngừng và công ty cần tìm kiếm thêm các cộng sự để cùng BB chiến đấu mang sản phẩm đi càng xa trong thị trường châu Âu, Mỹ.</p>
                                        <a href="#">Xem chi tiết.</a>
                                    </div>
                                </div>
                            </div>
                            <div class="student">
                                <div class="student-title">
                                    <div class="row">
                                        <div class="col-md-9 student-title-h3">
                                            <h3><a href="#">PHP Developer (Junior )</a></h3>
                                            <p>Bravebits - Hà Nội</p>
                                        </div>
                                        <div class="col-md-3 student-time text-right">
                                            <p class="time-up"><a href="#">13/05/2018</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row student-content">
                                    <div class="col-md-4 student-content-col">
                                        <img src="images/hoithao.PNG" style="width:100%" alt="">
                                    </div>
                                    <div class="col-md-8 student-content-col">
                                        <p class="noidung-post-x">Chương trình tạo nguồn MARITIME FUTURE BANKERS – MFB được Đại học Thăng Long hợp tác với Viện nhân lực ngân hàng tài chính (BTCI) và Ngân hàng Maritime Bank (MSB) tổ chức nhằm hướng đến mục tiêu hỗ trợ và trao cơ hội việc làm đến sinh viên năm cuối, sinh viên mới tốt nghiệp.</p>
                                        <a href="#">Xem chi tiết.</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 student-pgn">
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
                            <br>
                        </div>
                    </div>
                    <div class="col-md-4 nhatruong-col-2">
                        <div class="nhatruong-col-2-info">
                            <div class="nhatruong-r-title text-center">
                                <h4>danh sách tài khoản</h4>
                            </div>
                            <div class="nhatruong-r-content">
                                <ul>
                                    <li><a href="#">Ngôn ngữ Anh</a> (<span class="badge">11</span>)</li>
                                    <li><a href="#">Toán - Tin ứng dụng</a> (<span class="badge">11</span>)</li>
                                    <li><a href="#">Khoa học máy tính</a> (<span class="badge">11</span>)</li>
                                    <li><a href="#">Mạng máy tính và viễn thông</a> (<span class="badge">11</span>)</li>
                                    <li><a href="#">Hệ thống thông tin quản lý</a> (<span class="badge">11</span>)</li>
                                    <li><a href="#">Kế toán</a> (<span class="badge">11</span>)</li>
                                    <li><a href="#">Tài chính - Ngân hàng</a> (<span class="badge">11</span>)</li>
                                    <li><a href="#">Quản trị Kinh doanh</a> (<span class="badge">11</span>)</li>
                                    <li><a href="#">Ngôn ngữ Trung Quốc</a> (<span class="badge">11</span>)</li>
                                    <li><a href="#">Ngôn ngữ Pháp</a> (<span class="badge">11</span>)</li>
                                    <li><a href="#">Ngôn ngữ Nhật</a> (<span class="badge">11</span>)</li>
                                    <li><a href="#">Việt Nam học</a> (<span class="badge">11</span>)</li>
                                    <li><a href="#">Công tác Xã hội</a> (<span class="badge">11</span>)</li>
                                    <li><a href="#">Điều dưỡng</a> (<span class="badge">11</span>)</li>
                                    <li><a href="#">Y tế Công cộng</a> (<span class="badge">11</span>)</li>
                                    <li><a href="#">Quản lý bệnh viện</a> (<span class="badge">11</span>)</li>
                                    <li><a href="#">Quản lý Kinh doanh - Cao học</a></li>
                                    <li><a href="#">Tài chính Ngân hàng - Cao học</a></li>
                                    <li><a href="#">Toán - Cao học</a></li>
                                    <li><a href="#">Công tác Xã hội - Cao học</a></li>
                                    <li><a href="#">Y tế Công cộng - Cao học</a></li>
                                    <li><a href="#">Quản trị dịch vụ du lịch - Lữ hành</a></li>
                                    <li><a href="#">Ngành ngôn ngữ Hàn</a> (<span class="badge">11</span>)</li>
                                    <li><a href="#">Thanh nhạc</a> (<span class="badge">11</span>)</li>
                                    <li><a href="#">Dinh dưỡng</a> (<span class="badge">11</span>)</li>
                                    <li><a href="#">Chưa xác định</a> (<span class="badge">11</span>)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<br>
@stop