<?php 
	// Tạo biến session
    if(!isset($_SESSION))
    {
        session_start();
    }	
    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MotoServ-Nơi bạn tin tưởng</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="img/logo.jpg" rel="icon" type="image/x-icon">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="./lib/animate/animate.min.css" rel="stylesheet">
    <link href="./lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="./lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="./css/style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->
     
    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>273 An Dương Vương, Q5, TP.HCM</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>T2 - T6 : 09.00 AM - 09.00 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>+012 345 6789</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square bg-white text-primary me-1" href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href="https://twitter.com"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-0" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.php?controller=home&action=main" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fas fa-motorcycle"></i>MotoServ</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php?controller=home&action=main" class="nav-item nav-link active">Trang chủ</a>
                <a href="index.php?controller=home&action=about" class="nav-item nav-link">Giới thiệu</a>
                <a href="index.php?controller=home&action=service" class="nav-item nav-link">Dịch vụ</a>
                <a href="index.php?controller=recruitment&action=show" class="nav-item nav-link">Tuyển dụng</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Trang</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="index.php?controller=home&action=booking" class="dropdown-item">Đặt lịch</a>
                        <?php
                            if(isset($_SESSION["username"]))
                            {
                                echo '<a href="index.php?controller=home&action=product&username='.$username.'" class="dropdown-item">Phụ tùng</a>';
                            }
                            else
                            {
                                echo '<a href="index.php?controller=home&action=product" class="dropdown-item">Phụ tùng</a>';
                            }
                        ?>
                        
                        <a href="index.php?controller=home&action=team" class="dropdown-item">Nhân viên</a>
                        <a href="index.php?controller=home&action=testimonial" class="dropdown-item">Khách hàng </a>
                    </div>
                </div>
                <a href="index.php?controller=home&action=contact" class="nav-item nav-link">Liên hệ</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Tài khoản</a>
                    <div class="dropdown-menu fade-up m-0">
                        <?php 
                            if(isset($_SESSION["username"]))
                            {
                                echo '<div class="dropdown-item">'.$username.'</div>';
                                echo '<a href="index.php?controller=signin&action=logout" class="dropdown-item">Đăng xuất</a>';
                                echo '<a href="index.php?controller=cart&action=show&username='.$username.'" class="dropdown-item">Giỏ hàng</a>';
                            }
                            else
                            {
                                echo '<a href="index.php?controller=home&action=signin" class="dropdown-item">Đăng nhập</a>';
                                echo '<a href="index.php?controller=cart&action=show" class="dropdown-item">Giỏ hàng</a>';
                            }
                        ?>
                    </div>
                </div>
            </div>
            <a href="index.php?controller=home&action=faq" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">FAQs<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->