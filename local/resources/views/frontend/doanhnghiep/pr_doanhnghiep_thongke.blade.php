@extends('frontend.master')
@section('title', 'DN | Thống kê')
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
                        <h1>Danh sách tin tuyển dụng đã tạo</h1>
                    </div>
                    <br>
                        <div class="tt-thongked">
                            <h4 style="text-transform: uppercase; color: #1177D1; margin-left:10px; ">Tiêu chí thống kê</h4>
                            <div class="table-responsive">
                                <table class="table table-hover" style="width: 2000px;">
                                    <thead>
                                        <tr>
                                            <th width="20">ID</th>
                                            <th>Mã sinh viên</th>
                                            <th>Họ tên</th>
                                            <th>Ngày sinh</th>
                                            <th>Khoa</th>
                                            <th>Chuyên ngành</th>
                                            <th>Khóa</th>
                                            <th>Lớp</th>
                                            <th>Số điện thoại</th>
                                            <th>Email</th>
                                            <th>Giáo viên</th>
                                            <th>Địa chỉ</th>
                                            <th>Tỉnh/thành phố</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>A25288</td>
                                            <td>Trần Phương Nam</td>
                                            <td>25/01/1996</td>
                                            <td>Toán tin</td>
                                            <td>Khoa học máy tính</td>
                                            <td>K27</td>
                                            <td>TI27g1</td>
                                            <td>01654524503</td>
                                            <td>phuongnam250196@gmail.com</td>
                                            <td>Mai Thúy Nga</td>
                                            <td>168 Kim giang</td>
                                            <td>Hà Nội</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>A24244</td>
                                            <td>Trương Lông Phú</td>
                                            <td>22/11/1996</td>
                                            <td>Toán tin</td>
                                            <td>Khoa học máy tính</td>
                                            <td>K27</td>
                                            <td>TI27e1</td>
                                            <td>0938282783</td>
                                            <td>bachlaoto@gmail.com</td>
                                            <td>Mai Thúy Nga</td>
                                            <td>168 Kim giang</td>
                                            <td>Hà Nội</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>A25345</td>
                                            <td>Nguyễn Thọ Việt</td>
                                            <td>09/10/1996</td>
                                            <td>Toán tin</td>
                                            <td>Khoa học máy tính</td>
                                            <td>K27</td>
                                            <td>TI27g1</td>
                                            <td>0978654832</td>
                                            <td>viet240395@gmail.com</td>
                                            <td>Mai Thúy Nga</td>
                                            <td>11 Hà đông</td>
                                            <td>Hà Nội</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>A25300</td>
                                            <td>Nguyễn Mạnh Huy</td>
                                            <td>18/02/1996</td>
                                            <td>Ngoại ngữ</td>
                                            <td>Ngôn ngữ Trung</td>
                                            <td>K27</td>
                                            <td>TI27g1</td>
                                            <td>01656098214</td>
                                            <td>manhhuy@gmail.com</td>
                                            <td>Nguyễn Thị Minh</td>
                                            <td>16 Đền Lừ</td>
                                            <td>Hà Nội</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="page-h" style="margin-left: 10px;">
                                <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
                            </ul>
                            </div>
                            <div class="cach" style="margin: 10px 0px;">
                                <span style="font-weight: bold;">Sắp xếp </span>
                                <select>
                                    <option value="0"></option>
                                    <option value="1">Tăng</option>}
                                    <option value="2">Giảm</option>}
                                </select>
                                <span>Số lượng </span>
                                <input style="width: 30px; padding-left:5px;" type="text" name="">
                                <span>Khoa </span>
                                <input style="width: 50px; padding-left:5px;" type="text" name="">
                                <span>Chuyên ngành </span>
                                <input style="width: 120px; padding-left:5px;" type="text" name="">
                                <span>Khóa </span>
                                <input style="width: 60px; padding-left:5px;" type="text" name="">
                                <span>Giáo viên </span>
                                <input style="width: 60px; padding-left:5px;" type="text" name="">
                                <input type="submit" value="Tìm" name="">
                                <input type="submit" value="Excel" name="">
                            </div>
                        </div>
                    <br>
                </div>
            </div>
        </div>
</section>
<br>
@stop