@extends('frontend.master')
@section('title', 'DN | Thêm tin tuyển dụng')
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
                        <h1>Thêm mới tin tuyển dụng</h1>
                    </div>
                    <br>
                    <form class="pr_dn_ttd_form" method="post">
                        <div class="row pr_dn_add_ttd_row">
                            <div class="col-lg-6 pr_dn_add_col">
                                <div class="form-group">
                                    <label>Tên tin tuyển dụng:</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6 pr_dn_add_col">
                                <div class="form-group">
                                    <label>Ảnh minh họa</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Chọn ảnh</label>
                                      </div>
                                </div>
                            </div>
                            <div class="col-lg-6 pr_dn_add_col">
                                <div class="form-group">
                                    <label>Mức lương</label>
                                    <input type="number" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6 pr_dn_add_col">
                                <div class="form-group">
                                    <label>Địa điểm làm việc</label>
                                    <select name="cars" class="custom-select">
                                      <option selected>Chọn khu vực tìm việc</option>
                                      <option value="volvo">Hà Nội</option>
                                      <option value="fiat">Hồ Chí Minh</option>
                                      <option value="audi">Hải Phòng</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 pr_dn_add_col">
                                <div class="form-group">
                                    <label>Kinh nghiệm làm việc</label>
                                    <select name="cars" class="custom-select">
                                      <option selected>Chọn kinh nghiệm làm việc</option>
                                      <option value="volvo">Hơn 2 năm</option>
                                      <option value="fiat">1-2 năm</option>
                                      <option value="audi">Không yêu cầu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 pr_dn_add_col">
                                <div class="form-group">
                                    <label>Chức vụ</label>
                                    <select name="cars" class="custom-select">
                                      <option selected>Chọn chức vụ</option>
                                      <option value="volvo">Chuyên viên - Nhân viên</option>
                                      <option value="fiat">Trường nhóm</option>
                                      <option value="audi">Giám đốc</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 pr_dn_add_col">
                                <div class="form-group">
                                    <label>Yêu cầu bằng cấp</label>
                                    <select name="cars" class="custom-select">
                                      <option selected>Chọn loại bằng cấp</option>
                                      <option value="volvo">Đại học</option>
                                      <option value="fiat">Cao đẳng</option>
                                      <option value="audi">Trung cấp</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 pr_dn_add_col">
                                <div class="form-group">
                                    <label>Hình thức làm việc</label>
                                    <select name="cars" class="custom-select">
                                      <option selected>Chọn hình thức làm việc</option>
                                      <option value="volvo">Toàn thời gian cố định</option>
                                      <option value="fiat">Hợp đồng</option>
                                      <option value="audi">Không thuê</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 pr_dn_add_col">
                                <div class="form-group">
                                    <label>Số lượng tuyển</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6 pr_dn_add_col">
                                <div class="form-group">
                                    <label>Yêu cầu giới tính</label>
                                    <div class="clearfix"></div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" id="customRadio" name="example" value="customEx">
                                        <label class="custom-control-label" for="customRadio">Nam</label>
                                      </div>
                                      <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" id="customRadio2" name="example" value="customEx">
                                        <label class="custom-control-label" for="customRadio2">Nữ</label>
                                      </div> 
                                </div>
                            </div>
                            <div class="col-lg-6 pr_dn_add_col">
                                <div class="form-group">
                                    <label>Nghề nghiệp</label>
                                    <select name="cars" class="custom-select">
                                      <option selected>Chọn nghề nghiệp</option>
                                      <option value="volvo">Thợ hồ</option>
                                      <option value="fiat">Thợ xây</option>
                                      <option value="audi">Thợ mộc</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 pr_dn_add_col">
                                <div class="form-group">
                                    <label>Độ tuổi</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6 pr_dn_add_col">
                                <div class="form-group">
                                    <label>Hạn nộp hồ sơ</label>
                                    <input type="date" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6 pr_dn_add_col">
                                <div class="form-group">
                                    <label>Trạng thái tin</label>
                                    <select name="cars" class="custom-select">
                                      <option selected>Đang tuyển</option>
                                      <option value="volvo">Hết hạn</option>
                                      <option value="fiat">Để sau</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 pr_dn_add_col">
                                <div class="form-group">
                                    <label>Mô tả công việc</label>
                                    <textarea class="form-control" rows="4" cols="0.5"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 pr_dn_add_col">
                                <div class="form-group">
                                    <label>Quyền lợi được hưởng</label>
                                    <textarea class="form-control" rows="4"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 pr_dn_add_col">
                                <div class="form-group">
                                    <label>Yêu cầu khác</label>
                                    <textarea class="form-control" rows="4"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 pr_dn_add_col">
                                <button type="submit" class="btn btn-primary">Thêm mới</button>
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