@extends('frontend.master')
@section('title', 'Giới thiệu')
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
          <li class="breadcrumb-item">Giới thiệu</li>
        </ul>
    </div>
</section>
<section id="dieuhuong-doc">
    <div class="container">
        <div class="row">
            <div class="col-md-8 baiviet">
                <!-- Thay doi tai day -->
                <div class="gioithieu">
                    <div class="gioithieu-main">
                        <div class="row">
                            <div class="col-md-5">
                                <img src="images/giothieu.png" width="100%">
                            </div>
                            <div class="col-md-7">
                                <div class="gioithieu-title">
                                    <h1 class="gioithieu-title-exp">Giới thiệu trung tâm uec</h1>
                                </div>
                                <div class="gioithieu-content">
                                    <p>Để giới thiệu Trung tâm Kết nối Đại học-Doanh nghiệp của Trường Đại Học Thăng Long, anh chị có thể tải các vật liệu sau đây:</p>
                                </div>
                            </div>
                        </div>
                        <div class="gioithieu-letter">
                            <p>Kiến tạo một môi trường giáo dục lành mạnh trong đó luôn đề cao tính trung thực, tình yêu thương con người và tinh thần hợp tác lao động như phương châm hàng đầu.</p>
                            <p>Đào tạo sinh viên có tri thức và kỹ năng làm việc ở bậc đại học và sau đại học với chất lượng tốt, đáp ứng yêu cầu cấp bách về nguồn nhân lực có trình độ cao của xã hội; bằng cách tạo ra những điều kiện học tập tốt, thực hành ứng dụng tối ưu trong bối cảnh toàn cầu hóa giáo dục, trong một thế giới hội nhập phẳng và nhanh. Chúng tôi đã và đang nỗ lực góp phần đưa sinh viên của mình tới các địa chỉ giáo dục tiên tiến trong khu vực và trên thế giới nhằm duy trì tính liên tục trong học tập, thực tập và nghiên cứu.</p>
                            <p>Tích cực triển khai công tác nghiên cứu khoa học nhằm phục vụ công việc dạy ở bậc đại học, sau đại học ở chất lượng cao. Đây cũng là nhiệm vụ quan trọng của một trường Đại học hướng tới đào tạo cho trường và xã hội một đội ngũ những nhà khoa học có năng lực nghiên cứu, đưa tri thức ứng dụng thực tiễn đời sống.</p>
                            <p>Nỗ lực xây dựng trường trở thành một Trung tâm Văn hóa, Giáo dục, Khoa học và Công nghệ tiến tiến – hiện đại.</p>
                            <p><i>Như vậy lẽ đương nhiên để thực hiện sứ mạng trên sự gắn kết giữa trường Đại học và Doanh nghiệp là một sự gắn kết bắt buộc mà thiếu nó xã hội sẽ không nhận được những lợi ích tối thiết như nó phải được nhận.</i></p>
                            <p><i>Trong sự kết nối ba thành phần nói trên thì cả ba bên đều mang lại lợi ích cho nhau. Song, với ba thành phần kết nối, sinh viên là viên gạch nóng nhất trong lò đào tạo nhân lực do vậy ngoài sự chủ động thay đổi chương trình đào tạo theo hướng bám sát thực tế của doanh nghiệp thì việc sớm định hướng xây dựng cho sinh viên đức tính tự tin, thể hiện bản lĩnh, trải nghiệm tự nghiên cứu, tự nâng cao tri thức và hoàn thiện cách làm việc nhóm cũng là một mục tiêu then chốt. Bằng vào những tố chất trên sinh viên không những chủ động tìm kiếm môi trường học tập, mà còn sẽ mang lại cho chính những Doanh nghiệp tuyển dụng họ các sáng tạo táo bạo được khơi lên từ góc nhìn thực tiễn trong đơn đặt hàng đào tạo của chính Doanh nghiệp đối với Nhà trường.</i></p>
                            <p><i>Đó là lý do tại sao chúng tôi đã tham gia một dự án hợp tác quốc tế nhằm giúp tăng cường mọi tương tác giữa Nhà Trường và các Doanh nghiệp, dẫn đến sự thành lập của Trung tâm Kết nối Đại học – Doanh Nghiệp (University-Enterprise Center, UEC) của Trường Đại học Thăng Long.</i></p>
                            <p><i>Tóm lại, chúng tôi hết sức hy vọng mô hình kết hợp Đại học – Doanh nghiệp sẽ được tăng cường, đẩy mạnh, nhân rộng đấy là nền tảng để Nhà trường nâng cao hơn nữa chất lượng đào tạo đáp ứng nhu cầu xã hội, tạo niềm tin ở xã hội và tâm lý chủ động mà an tâm đối với các Doanh nghiệp.</i></p>
                            <p class="text-right"><i>Hà Nội, ngày 5 tháng 12/2017 <br>Vũ Đỗ Quỳnh <br>Phó Hiệu trưởng, kiêm Giám đốc Trung tâm UEC-TLU <br>uec-tlu@thanglong.edu.vn</i></p>
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