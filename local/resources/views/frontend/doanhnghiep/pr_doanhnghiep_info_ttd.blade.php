@extends('frontend.master')
@section('title', 'DN | Thông tin tuyển dụng')
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
                    <div class="pr_dn_ttd-title">
                        <h1>Thực tập lập trình PHP</h1>
                        <p><a href="#">Công ty ABC Việt Nam</a></p>
                    </div>
                    <div class="row pr_dn_ttd_luu_nop">
                        <div class="col-lg-8 pr_dn_ttd_luu">
                            <button class="btn btn-default"><i class="far fa-star"></i> Lưu việc làm</button>
                            <span><i class="fas fa-clock"></i> Hạn nộp hồ sơ: 12/12/2012</span>
                        </div>
                        <div class="col-lg-4 text-right pr_dn_ttd_nop">
                            <button class="btn btn-primary">Nộp hồ sơ</button>
                        </div>
                    </div>
                    <div class="row pr_dn_ttd_content">
                        <div class="col-lg-6">
                            <p><i class="fas fa-donate"></i> <strong>Mức lương:</strong> 7-10 triệu</p>
                            <p><i class="fas fa-briefcase"></i> <strong>Kinh nghiệm:</strong> Chưa có kinh nghiệm</p>
                            <p><i class="fas fa-bookmark"></i> <strong>Yêu cầu bằng cấp:</strong> Không yêu cầu bằng cấp</p>
                            <p><i class="fas fa-user-check"></i> <strong>Số lượng cần tuyển:</strong> 7</p>
                            <p><i class="fas fa-list"></i> <strong>Nghề nghiệp:</strong> IT phần mềm</p>
                        </div>
                        <div class="col-lg-6">
                            <p><i class="fas fa-map-marker-alt"></i> <strong>Địa điểm làm việc:</strong> Hà Nội</p>
                            <p><i class="fas fa-user-tie"></i> <strong>Chức vụ:</strong> Nhân viên</p>
                            <p><i class="fas fa-id-card-alt"></i> <strong>Hình thức làm việc:</strong> Bán thời gian tạm thời</p>
                            <p><i class="fas fa-transgender-alt"></i> <strong>Yêu cầu giới tính:</strong> Nữ</p>
                            <p><i class="fas fa-birthday-cake"></i> <strong>Yêu cầu độ tuổi:</strong> 22-24 tuổi</p>
                        </div>
                    </div>
                </div>
                <br>
                <div class="baiviet-post">
                    <h3>Thông tin tuyển dụng Nhân Viên Bán Hàng (Khu Vực Hà Nội)</h3>
                    <div class="row pr_dn_ttd_content_2">
                        <div class="col-lg-4">
                            <h4>Mô tả công việc</h4>
                        </div>
                        <div class="col-lg-8">
                            <p>Sắp xếp, trưng bày sản phẩm cho hãng bia tươi Tiệp Gammer <br>- Làm việc tại các Nhà hàng, mời khách sử dụng bia Gammer <br>- Tham gia các chương trình truyền thông, thu hút khách hàng đến dùng thử và mua hàng <br>- Công việc chi tiết sẽ trao đổi trong quá trình phỏng vấn</p>
                        </div>
                    </div>
                    <div class="row pr_dn_ttd_content_2">
                        <div class="col-lg-4">
                            <h4>Quyền lợi được hưởng</h4>
                        </div>
                        <div class="col-lg-8">
                            <p>Sắp xếp, trưng bày sản phẩm cho hãng bia tươi Tiệp Gammer <br>- Làm việc tại các Nhà hàng, mời khách sử dụng bia Gammer <br>- Tham gia các chương trình truyền thông, thu hút khách hàng đến dùng thử và mua hàng <br>- Công việc chi tiết sẽ trao đổi trong quá trình phỏng vấn</p>
                        </div>
                    </div>
                    <div class="row pr_dn_ttd_content_2">
                        <div class="col-lg-4">
                            <h4>Yêu cầu khác</h4>
                        </div>
                        <div class="col-lg-8">
                            <p>Sắp xếp, trưng bày sản phẩm cho hãng bia tươi Tiệp Gammer <br>- Làm việc tại các Nhà hàng, mời khách sử dụng bia Gammer <br>- Tham gia các chương trình truyền thông, thu hút khách hàng đến dùng thử và mua hàng <br>- Công việc chi tiết sẽ trao đổi trong quá trình phỏng vấn</p>
                        </div>
                    </div>
                </div>
                <br>
                <div class="baiviet-post">
                    <h3>Thông tin liên hệ</h3>
                    <div class="row pr_dn_ttd_content_2">
                        <div class="col-lg-4">
                            <h4>Người liên hệ</h4>
                        </div>
                        <div class="col-lg-8">
                            <p>Nguyễn Thị Nhung</p>
                        </div>
                    </div>
                    <div class="row pr_dn_ttd_content_2">
                        <div class="col-lg-4">
                            <h4>Số điện thoại</h4>
                        </div>
                        <div class="col-lg-8">
                            <p>583453045803458</p>
                        </div>
                    </div>
                    <div class="row pr_dn_ttd_content_2">
                        <div class="col-lg-4">
                            <h4>Email</h4>
                        </div>
                        <div class="col-lg-8">
                            <p>ntn2313@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
@stop