@extends('frontend.master')
@section('title', 'Doanh nghiệp')
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
                                <a class="collapsed card-link" href="pr_doanhnghiep_info.html">Thông tin doanh nghiệp</a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link" href="pr_doanhnghiep_tintuyendung.html">Quản lý tin tuyển dụng</a> <a class="float-right" data-toggle="collapse" href="#collapseOne"><i class="ml-auto mt-2 fas fa-angle-down"></i></a>
                            </div>
                            <div id="collapseOne" class="collapse show">
                                <ul>
                                    <li><a href="pr_doanhnghiep_add_ttd.html">Tạo tin tuyển dụng</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link" href="pr_doanhnghiep_khoadaotao.html">Quản lý khóa đào tạo</a> <a class="float-right" data-toggle="collapse" href="#collapse4"><i class="ml-auto mt-2 fas fa-angle-down"></i></a>
                            </div>
                            <div id="collapse4" class="collapse">
                                <ul>
                                    <li><a href="pr_doanhnghiep_add_kdt.html">Thêm khóa đào tạo</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" href="pr_doanhnghiep_hosoungtuyen.html">Hồ sơ đã ứng tuyển</a> <a class="float-right" data-toggle="collapse" href="#collapseTwo"><i class="ml-auto mt-2 fas fa-angle-down"></i></a>
                            </div>
                            <div id="collapseTwo" class="collapse">
                                <ul>
                                    <li><a href="#">phuongnam251096@gmail.com</a> <span class="badge  badge-danger">New</span></li>
                                    <li><a href="#">ntv2403@gmail.com</a> <span class="badge  badge-danger">New</span></li>
                                    <li><a href="#">bachlaoto@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" href="pr_doanhnghiep_thongke.html">Báo cáo - Thống kê</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <nav class="nav-child">
                    <div class="nav-child-title text-center">
                        <h3>Việc được nộp nhiều nhất</h3>
                    </div>
                    <ul>
                        <li>
                            <p><a href="#">PHP Developer (Junior )</a> <span class="badge badge-primary">42</span></p>
                            <p class="text-secondary"><i class="fas fa-dollar-sign"></i> Mức lương: 4 - 5 triệu</p>
                            <p class="text-secondary"><i class="fas fa-map-marker-alt"></i> Khu vực: Hà Nội</p>
                            <p class="text-right"><i class="far fa-clock"></i> Hạn nộp: <small>13 / 05 / 2018</small></p>
                        </li>
                        <li>
                            <p><a href="#">Lập trình .NET up to 1000$</a> <span class="badge badge-primary">38</span></p>
                            <p class="text-secondary"><i class="fas fa-dollar-sign"></i> Mức lương: 4 - 5 triệu</p>
                            <p class="text-secondary"><i class="fas fa-map-marker-alt"></i> Khu vực: Hà Nội</p>
                            <p class="text-right"><i class="far fa-clock"></i> Hạn nộp: <small>13 / 05 / 2018</small></p>
                        </li>
                        <li>
                            <p><a href="#">Bảo mật hệ thống kinh doanh</a> <span class="badge badge-primary">29</span></p>
                            <p class="text-secondary"><i class="fas fa-dollar-sign"></i> Mức lương: 4 - 5 triệu</p>
                            <p class="text-secondary"><i class="fas fa-map-marker-alt"></i> Khu vực: Hà Nội</p>
                            <p class="text-right"><i class="far fa-clock"></i> Hạn nộp: <small>13 / 05 / 2018</small></p>
                        </li>
                        <li>
                            <p><a href="#">Lập trình viên Ruby <span class="badge badge-primary">22</span></a></p>
                            <p class="text-secondary"><i class="fas fa-dollar-sign"></i> Mức lương: 4 - 5 triệu</p>
                            <p class="text-secondary"><i class="fas fa-map-marker-alt"></i> Khu vực: Hà Nội</p>
                            <p class="text-right"><i class="far fa-clock"></i> Hạn nộp: <small>13 / 05 / 2018</small></p>
                        </li>
                        <li>
                            <p><a href="#">Nhân Viên Sales Admin Thời Vụ</a> <span class="badge badge-primary">19</span></p>
                            <p class="text-secondary"><i class="fas fa-dollar-sign"></i> Mức lương: 4 - 5 triệu</p>
                            <p class="text-secondary"><i class="fas fa-map-marker-alt"></i> Khu vực: Hà Nội</p>
                            <p class="text-right"><i class="far fa-clock"></i> Hạn nộp: <small>13 / 05 / 2018</small></p>
                        </li>
                    </ul>
                </nav>
                <nav class="nav-child">
                    <div class="nav-child-title text-center">
                        <h3>Tin doanh nghiệp liên quan</h3>
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
                            <p>Tổng số hồ sơ <span class="text-success">980</span> bộ</p>
                        </div>
                        <div class="col-6 text-right">
                            <p><a href="#">Mới nhất</a> | <a href="#">Hạn nộp hồ sơ</a></p>
                        </div>
                    </div>
                </div>
                <div class="baiviet-post">
                    <div class="student">
                        <div class="row student-content">
                            <div class="col-md-5 student-content-col enterprise-content-col">
                                <div class="card">
                                    <img src="images/advanced-dot-net-course-in-mumbai-thane-navi-new-mumbai.jpg" style="width:100%" alt="">
                                    <div class="card-body">
                                        <h4 class="card-title text-center"><a href="#">Lập trình .NET up to 1000$</a></h4>
                                        <p class="card-text">Thân gửi trai xinh gái đẹp Developer đang tìm kiếm một cơ hội mới. Dự án của BraveBits đang phát triển không ngừng và công ty cần tìm kiếm thêm các cộng sự để cùng BB chiến đấu mang sản phẩm đi càng xa trong thị trường châu Âu, Mỹ.</p>
                                    </div>
                                    <div class="text-center card-chitiet"><a href="#">Xem chi tiết <i class="fas fa-angle-double-right"></i></a></div>
                                </div>
                            </div>
                            <div class="col-md-7 student-content-col enterprise-content-col">
                                <div class="enterprise-content-col-title">
                                    <div class="d-flex">
                                      <div class="">
                                        <h5>Ứng viên</h5>
                                      </div>
                                      <div class="flex-grow-1">
                                        <hr>
                                      </div>
                                      <div class="enterprise-col-title-sx">
                                        <div class="dropdown">
                                          <button type="button" class="dropdown-toggle" data-toggle="dropdown">
                                           Sắp xếp
                                          </button>
                                          <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Tin mới nhất</a>
                                            <a class="dropdown-item" href="#">Tin nộp trước</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <div class="enterprise-content-col-send">
                                    <div class="media">
                                        <img src="images/viet.jpg" class="rounded-circle" style="width:60px; height: 60px;">
                                        <div class="media-body">
                                            <h4>Hồ sơ thực tập </h4>
                                            <p><small><i>Người gửi: </i></small> phuongnam251096@gmail.com</p>
                                             <p>Ngày nhận: 23/01/2018</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <i class="fas fa-user-circle fa-4x" style="width:60px;"></i>
                                        <div class="media-body">
                                            <h4>Hồ sơ thực tập </h4>
                                            <p><small><i>Người gửi: </i></small> phuongnam251096@gmail.com</p>
                                            <p>Ngày nhận: 23/01/2018</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <img src="images/pubim.jpg" class="rounded-circle" style="width:60px; height: 60px;">
                                        <div class="media-body">
                                            <h4>Hồ sơ thực tập </h4>
                                            <p><small><i>Người gửi: </i></small> phuongnam251096@gmail.com</p>
                                             <p>Ngày nhận: 23/01/2018</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <img src="images/toi.jpg" class="rounded-circle" style="width:60px; height: 60px;">
                                        <div class="media-body">
                                            <h4>Hồ sơ thực tập </h4>
                                            <p><small><i>Người gửi: </i></small> phuongnam251096@gmail.com</p>
                                             <p>Ngày nhận: 23/01/2018</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <img src="images/hung.jpg" class="rounded-circle" style="width:60px; height: 60px;">
                                        <div class="media-body">
                                            <h4>Hồ sơ thực tập </h4>
                                            <p><small><i>Người gửi: </i></small> phuongnam251096@gmail.com</p>
                                             <p>Ngày nhận: 23/01/2018</p>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="media-paginate d-flex justify-content-end">
                                    <ul class="pagination">         
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                   <div class="student">
                        <div class="row student-content">
                            <div class="col-md-5 student-content-col enterprise-content-col">
                                <div class="card">
                                    <img src="images/vnnplus-tuyen-dung-nhan-su-lap-trinh-php.jpg" style="width:100%" alt="">
                                    <div class="card-body">
                                        <h4 class="card-title text-center"><a href="#">PHP Developer (Junior )</a></h4>
                                        <p class="card-text">Thân gửi trai xinh gái đẹp Developer đang tìm kiếm một cơ hội mới. Dự án của BraveBits đang phát triển không ngừng và công ty cần tìm kiếm thêm các cộng sự để cùng BB chiến đấu mang sản phẩm đi càng xa trong thị trường châu Âu, Mỹ.</p>
                                    </div>
                                    <div class="text-center card-chitiet"><a href="#">Xem chi tiết <i class="fas fa-angle-double-right"></i></a></div>
                                </div>
                            </div>
                            <div class="col-md-7 student-content-col enterprise-content-col">
                                <div class="enterprise-content-col-title">
                                    <div class="d-flex">
                                      <div class="">
                                        <h5>Ứng viên</h5>
                                      </div>
                                      <div class="flex-grow-1">
                                        <hr>
                                      </div>
                                      <div class="enterprise-col-title-sx">
                                        <div class="dropdown">
                                          <button type="button" class="dropdown-toggle" data-toggle="dropdown">
                                           Sắp xếp
                                          </button>
                                          <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Tin mới nhất</a>
                                            <a class="dropdown-item" href="#">Tin nộp trước</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <div class="enterprise-content-col-send">
                                    <div class="media">
                                        <img src="images/viet.jpg" class="rounded-circle" style="width:60px; height: 60px;">
                                        <div class="media-body">
                                            <h4>Hồ sơ thực tập </h4>
                                            <p><small><i>Người gửi: </i></small> phuongnam251096@gmail.com</p>
                                             <p>Ngày nhận: 23/01/2018</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <i class="fas fa-user-circle fa-4x" style="width:60px;"></i>
                                        <div class="media-body">
                                            <h4>Hồ sơ thực tập </h4>
                                            <p><small><i>Người gửi: </i></small> phuongnam251096@gmail.com</p>
                                             <p>Ngày nhận: 23/01/2018</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <img src="images/pubim.jpg" class="rounded-circle" style="width:60px; height: 60px;">
                                        <div class="media-body">
                                            <h4>Hồ sơ thực tập </h4>
                                            <p><small><i>Người gửi: </i></small> phuongnam251096@gmail.com</p>
                                             <p>Ngày nhận: 23/01/2018</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <img src="images/toi.jpg" class="rounded-circle" style="width:60px; height: 60px;">
                                        <div class="media-body">
                                            <h4>Hồ sơ thực tập </h4>
                                            <p><small><i>Người gửi: </i></small> phuongnam251096@gmail.com</p>
                                             <p>Ngày nhận: 23/01/2018</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <img src="images/hung.jpg" class="rounded-circle" style="width:60px; height: 60px;">
                                        <div class="media-body">
                                            <h4>Hồ sơ thực tập </h4>
                                            <p><small><i>Người gửi: </i></small> phuongnam251096@gmail.com</p>
                                             <p>Ngày nhận: 23/01/2018</p>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="media-paginate d-flex justify-content-end">
                                    <ul class="pagination">         
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="student">
                        <div class="row student-content">
                            <div class="col-md-5 student-content-col enterprise-content-col">
                                <div class="card">
                                    <img src="images/Untitled-1-3.jpg" style="width:100%" alt="">
                                    <div class="card-body">
                                        <h4 class="card-title text-center"><a href="#">Bảo mật hệ thống kinh doanh</a></h4>
                                        <p class="card-text">Thân gửi trai xinh gái đẹp Developer đang tìm kiếm một cơ hội mới. Dự án của BraveBits đang phát triển không ngừng và công ty cần tìm kiếm thêm các cộng sự để cùng BB chiến đấu mang sản phẩm đi càng xa trong thị trường châu Âu, Mỹ.</p>
                                    </div>
                                    <div class="text-center card-chitiet"><a href="#">Xem chi tiết <i class="fas fa-angle-double-right"></i></a></div>
                                </div>
                            </div>
                            <div class="col-md-7 student-content-col enterprise-content-col">
                                <div class="enterprise-content-col-title">
                                    <div class="d-flex">
                                      <div class="">
                                        <h5>Ứng viên</h5>
                                      </div>
                                      <div class="flex-grow-1">
                                        <hr>
                                      </div>
                                      <div class="enterprise-col-title-sx">
                                        <div class="dropdown">
                                          <button type="button" class="dropdown-toggle" data-toggle="dropdown">
                                           Sắp xếp
                                          </button>
                                          <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Tin mới nhất</a>
                                            <a class="dropdown-item" href="#">Tin nộp trước</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <div class="enterprise-content-col-send">
                                    <div class="media">
                                        <img src="images/viet.jpg" class="rounded-circle" style="width:60px; height: 60px;">
                                        <div class="media-body">
                                            <h4>Hồ sơ thực tập </h4>
                                            <p><small><i>Người gửi: </i></small> phuongnam251096@gmail.com</p>
                                             <p>Ngày nhận: 23/01/2018</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <i class="fas fa-user-circle fa-4x" style="width:60px;"></i>
                                        <div class="media-body">
                                            <h4>Hồ sơ thực tập </h4>
                                            <p><small><i>Người gửi: </i></small> phuongnam251096@gmail.com</p>
                                             <p>Ngày nhận: 23/01/2018</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <img src="images/pubim.jpg" class="rounded-circle" style="width:60px; height: 60px;">
                                        <div class="media-body">
                                            <h4>Hồ sơ thực tập </h4>
                                            <p><small><i>Người gửi: </i></small> phuongnam251096@gmail.com</p>
                                             <p>Ngày nhận: 23/01/2018</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <img src="images/toi.jpg" class="rounded-circle" style="width:60px; height: 60px;">
                                        <div class="media-body">
                                            <h4>Hồ sơ thực tập </h4>
                                            <p><small><i>Người gửi: </i></small> phuongnam251096@gmail.com</p>
                                             <p>Ngày nhận: 23/01/2018</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <img src="images/hung.jpg" class="rounded-circle" style="width:60px; height: 60px;">
                                        <div class="media-body">
                                            <h4>Hồ sơ thực tập </h4>
                                            <p><small><i>Người gửi: </i></small> phuongnam251096@gmail.com</p>
                                             <p>Ngày nhận: 23/01/2018</p>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="media-paginate d-flex justify-content-end">
                                    <ul class="pagination">         
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                                </div>
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
        </div>
    </div>
</section>
<br>

@stop