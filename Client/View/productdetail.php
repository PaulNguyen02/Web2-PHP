<?php include "header.php" ?>
<link href="./css/style3.css" rel="stylesheet">
<!-- Template Javascript -->
<script src="./js/main.js"></script>
  
    
            <div class="container d-flex justify-content-center">
            <figure class="card card-product-grid card-lg"> 
                <a href="#" class="img-wrap" data-abc="true"> <img src=<?php echo $products['Hinh']?>> </a>
                <figcaption class="info-wrap">
                    <div class="row">
                        <span class="rated">SKU-111</span> 
                        <div class="col-md-9 col-xs-9"> <a href="#" class="title" data-abc="true"><?php echo $products['TenSP']?></a> 
                            <span class="rated">Loại sản phẩm: <?php echo $products['LOAISP']?></span> 
                            <span class="rated">Thương hiệu: <?php echo $products['Thuonghieu']?></span>
                        </div>
                            
                        <div class="col-md-3 col-xs-3">
                            <div class="rating text-right"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="rated">Rated 4.0/5</span> </div>
                        </div>
                    </div>
                </figcaption>
                <div class="bottom-wrap-payment">
                    <figcaption class="info-wrap">
                        <div class="row">
                            <div class="col-md-9 col-xs-9"> <a href="#" class="title" data-abc="true"><?php echo $products['GIA']?> VND</a> <span class="rated">VISA Platinum</span> </div>
                            <div class="col-md-3 col-xs-3">
                                <div class="rating text-right"> #### 8787 </div>
                            </div>
                        </div>
                    </figcaption>
                </div>
                <div class="bottom-wrap"> <a href="#" class="btn btn-primary float-right" data-abc="true"> Mua ngay </a>
                    <div class="price-wrap"> <a href="#" class="btn btn-warning float-left" data-abc="true"> Hủy </a> </div>
                </div>
            </figure>
        </div>




    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Địa chỉ</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>273 An Dương Vương, Q5, TP.HCM</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>motoserv@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Giờ mở của</h4>
                    <h6 class="text-light">T2 - T6:</h6>
                    <p class="mb-4">09.00 AM - 09.00 PM</p>
                    <h6 class="text-light">T7 - CN:</h6>
                    <p class="mb-0">09.00 AM - 12.00 PM</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Dịch vụ</h4>
                    <a class="btn btn-link" href="">Bảo trì</a>
                    <a class="btn btn-link" href="">Sửa chữa</a>
                    <a class="btn btn-link" href="">Phụ tùng</a>
                    <a class="btn btn-link" href="">Kiểm tra tổng quát</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Khách hàng thân quen</h4>
                    <p>Hãy trở thành khách hàng thân quen để có nhiều ưu đãi đến từ MotoServ</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <!--<input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">-->
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2" onclick="pageRedirect()">Đăng nhập</button>
                        <script>
                            function pageRedirect() {
                                window.location.href = "signin.html";
                            }                          
                        </script>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">MotoServ</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">Team5</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="index.html">Home</a>
                            <a href="FAQ.html">FAQs</a>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
