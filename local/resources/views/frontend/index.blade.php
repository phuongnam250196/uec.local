@extends('frontend.master')
@section('title', 'Trang chủ')
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
            <a class="nav-link" href="{{asset('baiviet')}}"><i class="fas fa-newspaper"></i> Tin tức</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{asset('doanhnghiep')}}"><i class="fas fa-building"></i> Doanh nghiệp</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{asset('timviec')}}"><i class="fas fa-search-plus"></i> Tìm việc làm</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="{{asset('khoadaotao')}}"><i class="fas fa-book"></i> Khóa đào tạo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{asset('lienhe')}}"><i class="fas fa-mobile-alt"></i> Liên hệ</a>
          </li> 
        </ul>
      </div> 
    </nav>
  </div>
</nav>
<br>
<section id="dieuhuong-doc">
    <div class="container">
        <div class="row">
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

            <div class="col-md-8 baiviet">
                <div class="baiviet-post">
                    <p class="post">Bài viết</p>
                    <div class="">
                        @foreach($news as $new)
                        <div class="post-child">
                            <h3><a href="#">{{$new->introuec_name}}</a></h3>
                            <p class="time-up"><a href="#">{{$new->created_at}}</a></p>
                            <div class="x">
                                {{-- <img src="images/hoithao.PNG" alt=""> --}}
                                {{-- <p class="noidung-post-x">Chương trình tạo nguồn MARITIME FUTURE BANKERS – MFB được Đại học Thăng Long hợp tác với Viện nhân lực ngân hàng tài chính (BTCI) và Ngân hàng Maritime Bank (MSB) tổ chức nhằm hướng đến mục tiêu hỗ trợ và trao cơ hội việc làm đến sinh viên năm cuối, sinh viên mới tốt nghiệp.Chương trình tạo nguồn MARITIME FUTURE BANKERS – MFB được Đại học Thăng Long hợp tác với Viện nhân lực ngân hàng tài chính (BTCI) và Ngân hàng Maritime Bank (MSB) tổ chức nhằm hướng đến mục tiêu hỗ trợ và trao cơ hội việc làm đến sinh viên năm cuối, sinh viên mới tốt nghiệp.</p> --}}
                                {{-- <div class="noidung-post-x"> --}}
                                    {{eval($new->introuec_content)}}
                                {{-- </div> --}}
                            </div>
                            
                            <p class="doctiep"><a href="#">( Đọc tiếp )</a></p>
                        </div>
                        @endforeach
                         <div class="post-child">
                            <h3><a href="#">Hỗ trợ cơ hội việc làm tại Ngân hàng Maritime Bank dành cho sinh viên ngành Tài chính - Ngân hàng</a></h3>
                            <p class="time-up"><a href="#">13/05/2018</a></p>
                            <div class="x">
                                <img src="images/Luyện-thi-ngân-hàng-Maritime-Bank.jpg"  alt="">
                                <p class="noidung-post-x">Chương trình tạo nguồn MARITIME FUTURE BANKERS – MFB được Đại học Thăng Long hợp tác với Viện nhân lực ngân hàng tài chính (BTCI) và Ngân hàng Maritime Bank (MSB) tổ chức nhằm hướng đến mục tiêu hỗ trợ và trao cơ hội việc làm đến sinh viên năm cuối, sinh viên mới tốt nghiệp.</p>
                            </div>
                            <p class="doctiep"><a href="#">( Đọc tiếp )</a></p>
                        </div>
                    
                        <div class="post-child">
                            <h3><a href="#">Cơ hội tuyển dụng và thực tập tại Công ty NashTech</a></h3>
                            <p class="time-up"><a href="#">13/05/2018</a></p>
                            <div class="x">
                                <img src="images/nashtech.jpg" alt="">
                                <p class="noidung-post-x">– Công ty đa quốc gia, thuộc tập đoàn Harvey Nash, Anh Quốc <br>– Công ty công nghệ lớn thứ 2 tại Việt Nam theo đánh giá của Hiệp hội Phần mềm và Dịch vụ Công nghệ Thông tin Việt Nam (Vinasa). <br>– Lọt Top “Những nơi làm việc tốt nhất Việt Nam” do Anphabe và Nielsen xếp hạng.</p>
                            </div>
                            
                            <p class="doctiep"><a href="#">( Đọc tiếp )</a></p>
                        </div>
                  
                        <div class="post-child">
                            <h3><a href="#">Hỗ trợ cơ hội việc làm tại Ngân hàng Maritime Bank dành cho sinh viên ngành Tài chính - Ngân hàng</a></h3>
                            <p class="time-up"><a href="#">13/05/2018</a></p>
                            <div class="x">
                                <img src="images/Luyện-thi-ngân-hàng-Maritime-Bank.jpg"  alt="">
                                <p class="noidung-post-x">Chương trình tạo nguồn MARITIME FUTURE BANKERS – MFB được Đại học Thăng Long hợp tác với Viện nhân lực ngân hàng tài chính (BTCI) và Ngân hàng Maritime Bank (MSB) tổ chức nhằm hướng đến mục tiêu hỗ trợ và trao cơ hội việc làm đến sinh viên năm cuối, sinh viên mới tốt nghiệp.</p>
                            </div>
                            
                            <p class="doctiep"><a href="#">( Đọc tiếp )</a></p>
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