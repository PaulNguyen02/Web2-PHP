<?php include "header.php"; ?>
 <!-- Page Header Start -->
 <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-bg-1.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Đặt lịch</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="#">Trang</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Đặt lịch</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


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
                            <a class="text-secondary border-bottom" href="">Đọc thêm</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="d-flex bg-light py-5 px-4">
                        <i class="fa fa-users-cog fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Nhân viên nhiệt huyết, chuyên nghiệp</h5>
                            <p>Đội ngũ nhân viên được đào tạo từ các trường cao đẳng, học viện có tay nghề cao, có tâm với nghề và nhiệt huyết luôn hết lòng vì bạn</p>
                            <a class="text-secondary border-bottom" href="">Đọc thêm</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="d-flex py-5 px-4">
                        <i class="fa fa-tools fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Trang bị hiện đại</h5>
                            <p>Áp dụng các hệ thống điện tử đo lường hiện đại giúp gia tăng độ chính xác và giúp bạn giảm thời gian chờ đợi</p>
                            <a class="text-secondary border-bottom" href="">Đọc thêm</a>
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
                        <form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF'])."?controller=booking&action=book"; ?> method="post">
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


    <!-- Call To Action Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8 col-md-6">
                    <h6 class="text-primary text-uppercase">// Câu hỏi //</h6>
                    <h1 class="mb-4">Bạn có câu hỏi nào về đặt lịch không ? </h1>
                    <p class="mb-0">Nếu có thì hãy liên hệ theo số điện thoại bên phải hoặc xem qua FAQs để có thông tin chi tiết. Cảm ơn</p>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="bg-primary d-flex flex-column justify-content-center text-center h-100 p-4">
                        <h3 class="text-white mb-4"><i class="fa fa-phone-alt me-3"></i>+012 345 6789</h3>
                        <a href="faq.php" class="btn btn-secondary py-3 px-5">Đọc FAQs<i class="fa fa-arrow-right ms-3"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Call To Action End -->
<?php include "footer.php"; ?>