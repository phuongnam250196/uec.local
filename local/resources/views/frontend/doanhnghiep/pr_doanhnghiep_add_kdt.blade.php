@extends('frontend.master')
@section('title', 'DN | Thêm khóa đào tạo')
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
                <div class="baiviet-post">
                    <div class="text-center pr_dn_ttd-title">
                        <h1>Tạo khóa đào tạo</h1>
                    </div>
                    <br>
                    <form class="pr_dn_ttd_form" method="post">
                        <div class="row pr_dn_add_ttd_row">
                             <div class="col-lg-4 pr_dn_add_col">
                                <div class="form-group">
                                    <label>Ảnh minh họa</label>
                                    <br>
                                    <img src="images/hoithao.PNG" style="width: 100%">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Chọn ảnh</label>
                                      </div>
                                </div>
                            </div>
                            <div class="col-lg-8 pr_dn_add_col">
                                <div class="form-group">
                                    <label>Tên khóa đào tạo</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Trình độ</label>
                                    <select name="cars" class="custom-select">
                                      <option selected>Chọn trình độ</option>
                                      <option value="volvo">Cho người bắt đầu</option>
                                      <option value="fiat">Đã có kiến thức nền tảng</option>
                                      <option value="audi">Hải Phòng</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Vị trí đào tạo</label>
                                    <input type="text" class="form-control" placeholder="Senior">
                                </div>
                                <div class="form-group">
                                    <label>Số lượng học viên</label>
                                    <input type="text" class="form-control" placeholder="50">
                                </div>
                                <div class="form-group">
                                    <label>Thời gian khóa học</label>
                                    <input type="text" class="form-control" placeholder="VD: 3 (tháng)">
                                </div>
                                <div class="form-group">
                                    <label>Hạn nộp</label>
                                    <input type="date" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Địa điểm</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Tỉnh/Thành phố</label>
                                    <select name="cars" class="custom-select">
                                      <option selected>Chọn tỉnh/thành phố</option>
                                      <option value="volvo">Hà Nội</option>
                                      <option value="fiat">Hồ Chí Minh</option>
                                      <option value="audi">Hải Phòng</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Mô tả khóa học</label>
                                    <textarea class="form-control" rows="4" cols="0.5"></textarea>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Tạo khóa học</button>
                                </div>
                            </div>
                        </div>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
@stop