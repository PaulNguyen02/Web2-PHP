<?php include "header.php"; ?>
<link rel="stylesheet" href="css/slideshow.css">
    <section class="w3l-about py-5" id="about">
        <div class="container py-md-5 py-2">
            <div class="row w3l-row">
                <div class="col-lg-5 my-image pe-lg-5 mb-lg-0 mb-md-5 mb-4">

                <div class="carousel">
                    <input id="indicator-1" class="carousel-indicator" type="radio" name="indicator">
                    <img class="carousel-image" src="img/team-1.jpg" height="250" width="400">
                    <label for="indicator-1" class="carousel-button"></label>

                    <input id="indicator-2" class="carousel-indicator" type="radio" name="indicator" checked>
                    <img class="carousel-image" src="img/team-2.jpg" height="250" width="400">
                    <label for="indicator-2" class="carousel-button"></label>

                    <input id="indicator-3" class="carousel-indicator" type="radio" name="indicator">
                    <img class="carousel-image" src="img/team-3.jpg" height="250" width="400">
                    <label for="indicator-3" class="carousel-button"></label>

                    <input id="indicator-4" class="carousel-indicator" type="radio" name="indicator">
                    <img class="carousel-image" src="img/team-4.jpg" height="250" width="400">
                    <label for="indicator-4" class="carousel-button"></label>
                </div>
                <script>
                    $(document).ready(function(){
                        initSlideShow();
                    })
                </script>

                </div>                   
                <div class="col-lg-7 w3l-about-info px-lg-4 align-center">
                    <h6 class="w3l-title-small mb-1">Tiểu sử của workshop</h6>
                    <h3 class="w3l-title-main mb-2">Quá trình xây dựng và hình thành workshop</h3>
                    <p class="my-4 pe-lg-5">Vào năm 2008 do nhu cầu sử dụng xe máy ngày càng tăng, các loại xe mới thường phức tạp trong kết cấu khiến cho người dùng
                    khó sửa chữa và nhu cầu sửa chữa tăng vọt, chúng tôi quyết định mở một workshop để sửa chữa xe máy, số lượng sửa chữa ngày càng lớn khi vào mùa mưa.
                    Vào mùa mưa, chúng tôi thường tạo các điểm sửa xe lưu động có mặt trên các tuyến đường ở thành phố để hỗ trợ mọi người, với kinh nghiệm hơn 15 năm
                    trải qua nhiều năm kinh nghiệm với tâm huyết, chúng tôi đã nâng cấp, cải tạo hệ thống sửa chữa với cơ sở vật chất hiện đại phục vụ cho việc sửa xe.
                    </p>
                    <div class="my-info mt-4">
                        <div class="single-info"><span>Năm thành lập:</span>
                            <p>2008</p>
                        </div>
                        <div class="single-info"><span>Nơi thành lập:</span>
                            <p>Quận 5, TPHCM</p>
                        </div>                        
                    </div>                    
                </div>
            </div>
        </div>
    </section>
    <!-- //About Section-->


    <!-- Services Section -->
    <section class="about-section py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="title-heading-w3 mx-auto text-center mb-sm-5 mb-4">
                <h3 class="w3l-title-main">Chúng tôi có thể làm được gì ?</h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="about-single">
                        <div class="about-icon mb-4">
                            <i class="fas fa-wrench"></i>
                        </div>
                        <div class="about-content">
                            <h5 class="mb-3"><a href="#url">Sửa chữa</a></h5>
                            <p>Sửa chữa các lỗi mà xe hay gặp phải.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-md-0 mt-3">
                    <div class="about-single">
                        <div class="about-icon mb-4">
                             <i class="fas fa-cog"></i>
                        </div>
                        <div class="about-content">
                            <h5 class="mb-3"><a href="#url">Thay thế linh kiện</a></h5>
                            <p>Thay thế các linh kiện chất lượng cao</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-3">
                    <div class="about-single">
                        <div class="about-icon mb-4">
                            <i class="fas fa-drafting-compass"></i>
                        </div>
                        <div class="about-content">
                            <h5 class="mb-3"><a href="#url">Bảo trì xe định kỳ</a></h5>
                            <p>Bảo trì xe để xe có độ an toàn cao</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-3">
                    <div class="about-single">
                        <div class="about-icon mb-4">
                            <i class="fas fa-check-square"></i>
                        </div>
                        <div class="about-content">
                            <h5 class="mb-3"><a href="#url">Kiểm tra xe</a></h5>
                            <p>Kiểm tra để đoán tình trạng của xe</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-3">
                    <div class="about-single">
                        <div class="about-icon mb-4">
                            <i class="fas fa-toolbox"></i>
                        </div>
                        <div class="about-content">
                            <h5 class="mb-3"><a href="#url">Cung cấp phụ tùng chính hãng</a></h5>
                            <p>Các phụ tùng được cung cấp chính hãng, rõ nguồn gốc</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-3">
                    <div class="about-single">
                        <div class="about-icon mb-4">
                            <i class="fas fa-location-arrow"></i>
                        </div>
                        <div class="about-content">
                            <h5 class="mb-3"><a href="#url">Có mặt hỗ trợ mọi lúc mọi nơi</a></h5>
                            <p>Hỗ trợ các điểm sửa xe lưu động, linh hoạt khắp mọi nơi trong thành phố</p>
                        </div>
                    </div>
                </div>
            </div>           
        </div>
    </section>
    <!-- //Services Section -->





    <section class="w3l-skills py-5" id="skills">
        <div class="container py-lg-5 py-md-4 py-3">
            <div class="row">
                <div class="col-lg-6 pe-lg-5">
                <iframe width="500" height="300" src="https://www.youtube.com/embed/DL8ECyLNaZM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-5 w3l-content-6 px-lg-4 align-self-center">
                    <h6 class="w3l-title-small mb-2">Kỹ năng của team</h6>
                    <h3 class="w3l-title-main">Kỹ năng của team</h3>
                    <p class="mt-4">Team trong workshop luôn có các kỹ năng sau: Xoay chuyển tình huống, Giao tiếp, Teamwork tốt </p>                    
                </div>
            </div>
        </div>
    </section>
    
    <!-- Stats Section-->
    <section class="w3l-stats-section py-5" id="stats">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="w3l-stats-inner-inf py-lg-4">
                <div class="row stats-con text-center">
                    <div class="col-lg-3 col-6 stats_info counter_grid">
                        <p class="counter"> 3550+ </p>
                        <h3>Lần sửa chưa lớn</h3>
                        <div class="progress-info">
                        <h6 class="progress-tittle">Sáng tạo &amp; Hợp tác
                        </h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-3 col-6 stats_info counter_grid">
                        <p class="counter"> 2500000+ </p>
                        <h3>Giờ làm việc</h3>
                        <div class="progress-info">
                        <h6 class="progress-tittle">Chăm chỉ &amp; Cần cù
                        </h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-3 col-6 stats_info counter_grid mt-lg-0 mt-sm-5 mt-5">
                        <p class="counter"> 155+ </p>
                        <h3>Thành viên</h3>
                        <div class="progress-info">
                        <h6 class="progress-tittle">Được đào tạo tốt &amp; chuyên nghiệp
                        </h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-3 col-6 stats_info counter_grid mt-lg-0 mt-sm-5 mt-5">
                        <p class="counter"> 2000+ </p>
                        <h3>Khách hàng</h3>
                        <div class="progress-info">
                        <h6 class="progress-tittle">Hài lòng &amp; Thân thiết
                        </h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- //Stats Section-->


    <!-- portfolio -->
    <section class="w3-gallery py-5" id="portfolio">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="title-heading-w3 mx-auto text-center mb-sm-5 mb-4">
                <h3 class="w3l-title-main mb-2">Thành tựu trong năm vừa qua</h3>
            </div>
            <div class="row portfolio-area clearfix p-0 m-0">
                <div class="col-lg-4 col-md-6 portfolio-item2 content" data-id="id-1" data-type="cat-item-1">
                    <span class="image-block">
                        <a class="image-zoom" href="assets/images/blog1.jpg" data-gal="prettyPhoto[gallery]">
                            <div class="content-overlay"></div>
                            <img src="img/investment.jpg" class="img-fluid w3layouts agileits" alt="portfolio-img">
                            <div class="content-details fadeIn-bottom">
                                <h3 class="content-title">Nghiên cứu</h3>
                                <p class="content-text">Hợp tác cùng nhau nghiên cứu</p>
                            </div>
                        </a>
                    </span>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item2 content mt-md-0 mt-4" data-id="id-2" data-type="cat-item-2">
                    <span class="image-block">
                        <a class="image-zoom" href="assets/images/blog2.jpg" data-gal="prettyPhoto[gallery]">
                            <div class="content-overlay"></div>
                            <img src="img/coop.jpg" class="img-fluid w3layouts agileits" alt="portfolio-img">
                            <div class="content-details fadeIn-bottom">
                                <h3 class="content-title">Hợp tác</h3>
                                <p class="content-text">Năm 2015 tập đoàn Workshop hợp tác với BikerWS để phát triển mô hình xưởng bảo trì xe trên cả nước</p>
                            </div>
                        </a>
                    </span>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item2 content mt-lg-0 mt-4" data-id="id-3" data-type="cat-item-3">
                    <span class="image-block">
                        <a class="image-zoom" href="assets/images/blog3.jpg" data-gal="prettyPhoto[gallery]">
                            <div class="content-overlay"></div>
                            <img src="assets/images/blog3.jpg" class="img-fluid w3layouts agileits" alt="portfolio-img">
                            <div class="content-details fadeIn-bottom">
                                <h3 class="content-title">Khách hàng</h3>
                                <p class="content-text">This is a short description</p>
                            </div>
                        </a>
                    </span>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item2 content mt-4" data-id="id-4" data-type="cat-item-4">
                    <span class="image-block">
                        <a class="image-zoom" href="assets/images/blog4.jpg" data-gal="prettyPhoto[gallery]">
                            <div class="content-overlay"></div>
                            <img src="assets/images/blog4.jpg" class="img-fluid w3layouts agileits" alt="portfolio-img">
                            <div class="content-details fadeIn-bottom">
                                <h3 class="content-title">Quan hệ</h3>
                                <p class="content-text">This is a short description</p>
                            </div>
                        </a>
                    </span>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item2 content mt-4" data-id="id-5" data-type="cat-item-5">
                    <span class="image-block">
                        <a class="image-zoom" href="assets/images/blog5.jpg" data-gal="prettyPhoto[gallery]">
                            <div class="content-overlay"></div>
                            <img src="assets/images/blog5.jpg" class="img-fluid w3layouts agileits" alt="portfolio-img">
                            <div class="content-details fadeIn-bottom">
                                <h3 class="content-title">Tổ chức</h3>
                                <p class="content-text">This is a short description</p>
                            </div>
                        </a>
                    </span>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item2 content mt-4" data-id="id-7" data-type="cat-item-6">
                    <span class="image-block">
                        <a class="image-zoom" href="assets/images/blog6.jpg" data-gal="prettyPhoto[gallery]">
                            <div class="content-overlay"></div>
                            <img src="assets/images/blog6.jpg" class="img-fluid w3layouts agileits" alt="portfolio-img">
                            <div class="content-details fadeIn-bottom">
                                <h3 class="content-title">Hoạt động</h3>
                                <p class="content-text">This is a short description</p>
                            </div>
                        </a>
                    </span>
                </div>
            </div>
            <!--end portfolio-area -->
        </div>
        <!-- //gallery container -->
    </section>
    <!-- //portfolio -->


    <!--/brands-->
    <section class="w3l-brands py-md-5 py-4">
        <div class="container py-lg-2">
            <div class="align-items-center">
                <div id="owl-demo" class="owl-carousel owl-theme">
                    <div class="item">
                        <img src="assets/images/logo1.png" class="img-fluid" alt="Brand">
                    </div>
                    <div class="item">
                        <img src="assets/images/logo2.png" class="img-fluid" alt="Brand">
                    </div>

                    <div class="item">
                        <img src="assets/images/logo3.png" class="img-fluid" alt="Brand">
                    </div>

                    <div class="item">
                        <img src="assets/images/logo4.png" class="img-fluid" alt="Brand">
                    </div>

                    <div class="item">
                        <img src="assets/images/logo5.png" class="img-fluid" alt="Brand">
                    </div>

                    <div class="item">
                        <img src="assets/images/logo1.png" class="img-fluid" alt="Brand">
                    </div>
                    <div class="item">
                        <img src="assets/images/logo2.png" class="img-fluid" alt="Brand">
                    </div>

                    <div class="item">
                        <img src="assets/images/logo3.png" class="img-fluid" alt="Brand">
                    </div>

                    <div class="item">
                        <img src="assets/images/logo4.png" class="img-fluid" alt="Brand">
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include "footer.php"; ?>
