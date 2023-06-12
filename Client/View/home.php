<?php include "header.php"; ?>
<!-- Cookie Consent Start -->
<div class="cookie-consent">
            <span>Trang web này có sử dụng cookie để nâng cao tính trải nghiệm của bạn</span>
            <div class="mt-2 d-flex align-items-center justify-content-center g-2">
            <button id="accept" class="allow-button mr-1">Cho phép</button>
            <script>
                $("#accept").click(function (){                
                    document.cookie = 'domain=motoserv';
                    $(".cookie-consent").hide();
                })
            </script>     
            <button id="close" class="allow-button">Từ chối</button>
            <script>
                $("#close").click(function (){
                    $(".cookie-consent").hide();
                })
            </script>   
            </div>          
</div>
<script>
    function getCookie(name) {
        var dc = document.cookie;
        var prefix = name + "=";
        var begin = dc.indexOf("; " + prefix);
        if (begin == -1) {
            begin = dc.indexOf(prefix);
            if (begin != 0) return null;
        }
        else
        {
            begin += 2;
            var end = document.cookie.indexOf(";", begin);
            if (end == -1) {
            end = dc.length;
            }
        }
        return decodeURI(dc.substring(begin + prefix.length, end));
    } 
    $(document).ready(function(){           // kiểm tra cookie đã được cài chưa 
        var myCookie = getCookie("domain");
        if (myCookie == null) {
            $('.cookie-consent').show();
        }
        else
        {
            $('.cookie-consent').hide();
        }
    })
</script>
    <!-- Cookie Consent End-->   
<div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="./img/carousel-bg-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">// Dịch vụ sửa chữa xe máy //</h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Trung tâm sửa xe máy đầy kinh nghiệm</h1>
                                    <a href="index.php?controller=home&action=learnmore" class="btn btn-primary py-3 px-5 animated slideInDown"> Tìm hiểu thêm<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid" src="./img/carousel-1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="./img/carousel-bg-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">// Dịch vụ bảo trì xe máy //</h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Giúp bạn bảo trì từng chi tiết máy</h1>
                                    <a href="index.php?controller=home&action=learnmore" class="btn btn-primary py-3 px-5 animated slideInDown"> Tìm hiểu thêm<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid" src="./img/carousel-2.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="./img/carousel-bg-3.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">// Nhân viên được đào tạo tốt //</h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Với dàn nhân viên đầy kỹ năng</h1>
                                    <a href="index.php?controller=home&action=team" class="btn btn-primary py-3 px-5 animated slideInDown"> Tìm hiểu thêm<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid" src="./img/carousel-3.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="./img/carousel-bg-4.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">// Một workshop với nhiều trang bị hiện đại //</h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Có khả năng sửa chữa các chi tiết hỏng nặng nhờ trang bị hiện đại</h1>
                                    <a href="index.php?controller=home&action=learnmore" class="btn btn-primary py-3 px-5 animated slideInDown"> Tìm hiểu thêm<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid" src="./img/carousel-4.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex py-5 px-4">
                        <i class="fa fa-certificate fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Một dịch vụ đầy chất lượng</h5>
                            <p>Được nhiều khách hàng đánh giá tốt, chúng tôi tự hào với dịch vụ của mình</p>
                            <a class="text-secondary border-bottom" href="index.php?controller=home&action=error">Đọc thêm</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="d-flex bg-light py-5 px-4">
                        <i class="fa fa-users-cog fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Nhân viên nhiệt huyết, chuyên nghiệp</h5>
                            <p>Đội ngũ nhân viên được đào tạo từ các trường cao đẳng, học viện có tay nghề cao, có tâm với nghề và nhiệt huyết luôn hết lòng vì bạn</p>
                            <a class="text-secondary border-bottom" href="index.php?controller=home&action=error">Đọc thêm</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="d-flex py-5 px-4">
                        <i class="fa fa-tools fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Trang bị hiện đại</h5>
                            <p>Áp dụng các hệ thống điện tử đo lường hiện đại giúp gia tăng độ chính xác và giúp bạn giảm thời gian chờ đợi</p>
                            <a class="text-secondary border-bottom" href="index.php?controller=home&action=error">Đọc thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 pt-4" style="min-height: 400px;">
                    <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                        <img class="position-absolute img-fluid w-100 h-100" src="./img/about.jpg" style="object-fit: cover;" alt="">
                        <div class="position-absolute top-0 end-0 mt-n4 me-n4 py-4 px-5" style="background: rgba(0, 0, 0, .08);">
                            <h1 class="display-4 text-white mb-0">15 <span class="fs-4">Năm</span></h1>
                            <h4 class="text-white">Kinh nghiệm</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h6 class="text-primary text-uppercase">// Về chúng tôi //</h6>
                    <h1 class="mb-4"><span class="text-primary">MotoServ</span> luôn là một nơi mà bạn tin tưởng để sửa xe</h1>
                    <p class="mb-4">Là một cửa hàng đi đầu về sửa chữa xe máy và có tuổi đời khá lâu chúng tôi đã đúc kết rất nhiều kinh nghiệm đặc biệt chú trọng vào nguồn nhân lực 
                    đã được đào tạo bài bản và song song đó kết hợp các thiết bị, đồ nghề hiện đại để rút ngắn thời gian chờ đợi và có độ chính xác giúp khách hàng luôn an tâm với xế yêu
                    của mình trên mọi nẻo đường.     
                    </p>
                    <div class="row g-4 mb-3 pb-3">
                        <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">01</span>
                                </div>
                                <div class="ps-3">
                                    <h6>Chuyên nghiệp và kinh nghiệm</h6>
                                    <span>Dàn đội ngũ kỹ thuật được đào tạo từ các học viện, cao đẳng và một số du học sinh đã học ở nước ngoài</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">02</span>
                                </div>
                                <div class="ps-3">
                                    <h6>Trung tâm phục vụ chất lượng</h6>
                                    <span>Luôn tạo cho quý khách một niềm tin và kết quả vượt xa sự mong đợi của qúy khách</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">03</span>
                                </div>
                                <div class="ps-3">
                                    <h6>Nhân viên từng đoạt giải</h6>
                                    <span>Một số nhân viên từng đoạt giải mang về cho đội một số giải thưởng như giải workshop được yêu thích,...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="" class="btn btn-primary py-3 px-5">Đọc thêm<i class="fa fa-arrow-right ms-3"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Fact Start -->
    <div class="container-fluid fact bg-dark my-5 py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-check fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">15</h2>
                    <p class="text-white mb-0">Năm kinh nghiệm</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-users-cog fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">155</h2>
                    <p class="text-white mb-0">Thành viên</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <i class="fas fa-user-graduate" style="color:white; font-size: 30px; margin-bottom: 15px;"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">15</h2>
                    <p class="text-white mb-0">Kỹ sư trưởng</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-users fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">2000</h2>
                    <p class="text-white mb-0">Khách hàng hài lòng</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <i class="fas fa-motorcycle" style="color:white; font-size: 30px; margin-bottom: 15px;"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">3550</h2>
                    <p class="text-white mb-0">Lần sửa chữa lớn</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <i class="fas fa-award" style="color:white; font-size: 30px; margin-bottom: 15px;"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">5</h2>
                    <p class="text-white mb-0">Đứng hạng 5 trong các workshop uy tín nhất</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact End -->


    <!-- Service Start -->
    <div class="container-xxl service py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// Những dịch vụ của chúng tôi //</h6>
                <h1 class="mb-5">Khám phá các dịch vụ của chúng tôi</h1>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-4">
                    <div class="nav w-100 nav-pills me-4">
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active" data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                            <i class="fas fa-motorcycle" style="font-size: 30px; margin-right:15px"></i>
                            <h4 class="m-0">Bảo trì</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                            <i class="fas fa-tools" style="font-size: 30px; margin-right:15px"></i>
                            <h4 class="m-0">Sửa chữa</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                            <i class="fa fa-cog fa-2x me-3"></i>
                            <h4 class="m-0">Phụ tùng</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-0" data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                            <i class="fas fa-tachometer-alt" style="font-size: 30px; margin-right:15px"></i>
                            <h4 class="m-0">Kiểm tra tổng quát</h4>
                        </button>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="./img/service-1.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">15 năm kinh nghiệm trong lĩnh vực bảo trì xe máy</h3>
                                    <p class="mb-4">Với 15 năm kinh nghiệm, chúng tôi luôn đảm bảo rằng xe của khách hàng luôn được kiểm tra kỹ càng, mọi chi tiết luôn được làm mới và quý khách không tốn quá nhiều thời gian để chờ đợi</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Dịch vụ chất lượng</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Nhân viên kinh nghiệm</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Trang bị hiện đại</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Giá cả phải chăng</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Đọc thêm<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="../img/service-2.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">15 năm kinh nghiệm trong lĩnh vực bảo trì xe máy</h3>
                                    <p class="mb-4">Với 15 năm kinh nghiệm, chúng tôi luôn đảm bảo rằng xe của khách hàng luôn được kiểm tra kỹ càng, mọi chi tiết luôn được làm mới và quý khách không tốn quá nhiều thời gian để chờ đợi</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Dịch vụ chất lượng</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Nhân viên kinh nghiệm</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Trang bị hiện đại</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Giá cả phải chăng</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Đọc thêm<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="../img/service-3.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">15 năm kinh nghiệm trong lĩnh vực bảo trì xe máy</h3>
                                    <p class="mb-4">Với 15 năm kinh nghiệm, chúng tôi luôn đảm bảo rằng xe của khách hàng luôn được kiểm tra kỹ càng, mọi chi tiết luôn được làm mới và quý khách không tốn quá nhiều thời gian để chờ đợi</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Dịch vụ chất lượng</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Nhân viên kinh nghiệm</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Trang bị hiện đại</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Giá cả phải chăng</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Đọc thêm<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-4">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="../img/service-4.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">15 năm kinh nghiệm trong lĩnh vực bảo trì xe máy</h3>
                                    <p class="mb-4">Với 15 năm kinh nghiệm, chúng tôi luôn đảm bảo rằng xe của khách hàng luôn được kiểm tra kỹ càng, mọi chi tiết luôn được làm mới và quý khách không tốn quá nhiều thời gian để chờ đợi</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Dịch vụ chất lượng</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Nhân viên kinh nghiệm</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Trang bị hiện đại</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Giá cả phải chăng</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Đọc thêm<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Booking Start -->
    <div class="container-fluid bg-secondary booking my-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 py-5">
                    <div class="py-5">
                        <h1 class="text-white mb-4">Được chứng nhận và đạt danh hiệu là một workshop uy tín nhất</h1>
                        <p class="text-white mb-0">Trên chặng đường chuyển mình thành workshop uy tín, chúng tôi luôn cố gắng hết mình trong mọi hoàn cảnh để khách hàng luôn hài lòng về dịch vụ của chúng tôi</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-primary h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s">
                        <h1 class="text-white mb-4">Đặt lịch</h1>
                        <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"])."?controller=booking&action=book";?> method="post">
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input name="name" type="text" class="form-control border-0" placeholder="Họ và tên" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input name="email" type="email" class="form-control border-0" placeholder="Email của bạn" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input name="address" type="text" class="form-control border-0" placeholder="Địa chỉ" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input name="phonenumber" type="text" class="form-control border-0" placeholder="Số điện thoại" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select name="service" class="form-select border-0" style="height: 55px;">
                                        <option selected>Chọn dịch vụ</option>
                                        <?php foreach($data['service'] AS $key => $value):?>
                                            <option value="<?php echo $value['TenDV']?>"><?php echo $value['TenDV']?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="date" name="date"
                                            class="form-control border-0 datetimepicker-input"
                                            placeholder="Chọn ngày" data-target="#date1" data-toggle="datetimepicker" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <textarea name="require" class="form-control border-0" placeholder="Yêu cầu đặt biệt"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-secondary w-100 py-3" type="submit">Đặt ngay</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// Kỹ thuật viên của chúng tôi //</h6>
                <h1 class="mb-5">Kỹ thuật viên kinh nghiệm</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="./img/team-1.jpg" alt="">
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <a class="btn btn-square mx-1" href="https://www.facebook.com/PAULITisme"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">Phúc Nguyễn</h5>
                            <small>Kỹ sư động cơ</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="./img/team-2.jpg" alt="">
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <a class="btn btn-square mx-1" href="https://www.facebook.com/dcbaosgu"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">Bảo Đặng</h5>
                            <small>Nhà thiết kế </small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="./img/team-3.jpg" alt="">
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <a class="btn btn-square mx-1" href="https://www.facebook.com/ducanhdeptraivip"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">Anh Nguyễn</h5>
                            <small>Kiểm thử</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="./img/team-4.jpg" alt="">
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <a class="btn btn-square mx-1" href="https://www.facebook.com/nam160902"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">Nam Trần</h5>
                            <small>Kỹ sư điện xe máy</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="text-primary text-uppercase">// Sự hài lòng //</h6>
                <h1 class="mb-5">Khánh hàng đã phản hồi!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="./img/testimonial-1.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Bảo Giang</h5>
                    <p>Sinh viên</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Nhờ có tay nghề của các anh thợ làm thời gian sửa xe rút ngắn lại không là em bị đuổi học rồi</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="./img/testimonial-2.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Hải Lê</h5>
                    <p>Diễn viên hài</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Nhờ có workshop thay đổi bề ngoài cho chiếc xe nên em cua được vài con ghệ. Cảm ơn thiết kế viên Bảo Đặng</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="./img/testimonial-3.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Tài Trương</h5>
                    <p>Nhân viên văn phòng</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Cảm ơn các bạn đã giúp chiếc xe của tôi mạnh như lúc mới mua</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="./img/testimonial-4.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Quân Đỗ</h5>
                    <p>Shipper</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">May mà có các bạn sửa chữa kịp thời chứ không là khách hàng nó bom hàng mình rồi</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
    <?php include "footer.php"; ?>