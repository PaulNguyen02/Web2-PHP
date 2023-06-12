<?php 
  
?>

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Motoserv-Quản lý</title>
    <link rel="apple-touch-icon" href="./public/theme-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="/public/image/icon.jpg">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="./public/theme-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="./public/theme-assets/vendors/css/charts/chartist.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="./public/theme-assets/css/app-lite.css">
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="./public/theme-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="./public/theme-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="./public/theme-assets/css/pages/dashboard-ecommerce.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- END Custom CSS-->
    <link rel="stylesheet" href="./public/fontawesome-5.13.1/css/all.min.css">
  </head>
  <body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">

    <!-- fixed-top-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
      <div class="navbar-wrapper">
        <div class="navbar-container content">
          <div class="collapse navbar-collapse show" id="navbar-mobile">
            <div class="nav navbar-nav mr-auto float-left"></div>
            <ul class="nav navbar-nav float-right">         
              <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-vn"></i><span class="selected-language"></span></a>
                <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                  <div class="arrow_box"><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-us"></i> English</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn"></i> Chinese</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-ru"></i> Russian</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-es"></i> Spanish</a></div>
                </div>
              </li>
            </ul>
            <ul class="nav navbar-nav float-right">
              <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-mail">             </i></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <div class="arrow_box_right"><a class="dropdown-item" href="#"><i class="ft-book"></i> Xem thư</a><a class="dropdown-item" href="#"><i class="ft-bookmark"></i> Xem sau</a><a class="dropdown-item" href="#"><i class="ft-check-square"></i> Đánh dấu đã đọc     </a></div>
                </div>
              </li>
              <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"> <span class="avatar avatar-online"><img src="./public/image/user.png" alt="avatar"><i></i></span></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <div class="arrow_box_right"><a class="dropdown-item" href="#"><span class="avatar avatar-online"><img src="./public/image/user.png" alt="avatar"></a>
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="ft-user"></i> Chỉnh sửa hồ sơ</a><a class="dropdown-item" href="/Web2/motoserv/index.php"><i class="ft-mail"></i> Hộp thư</a><a class="dropdown-item" href="#"><i class="ft-check-square"></i> Nhiệm vụ</a><a class="dropdown-item" href="#"><i class="ft-message-square"></i> Trò chuyện</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="ft-power"></i> Đăng xuất</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="./public/theme-assets/images/backgrounds/02.jpg">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">       
          <li class="nav-item pl-auto"><a class="navbar-brand" href="index.php?controller=dashboard&action=index"><i class="fas fa-motorcycle"></i>
              <h3 class="brand-text">MotoServ</h3></a></li>
          <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
        </ul>
      </div>
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li <?php if(($_GET['controller'] == 'dashboard')) echo "class='active'";?>><a href="index.php?controller=dashboard&action=index"><i class="ft-home"></i><span class="menu-title" data-i18n="">Trang chính</span></a>
          </li>
          <li <?php if(isset($_GET['controller']) && $_GET['controller'] == 'account') echo "class='active nav-item'"?>>
          <a href="index.php?controller=account&action=index&page=1"><i class="la la-key"></i><span class="menu-title" data-i18n="">Tài khoản</span></a>
          </li>
          <li <?php if(isset($_GET['controller']) && $_GET['controller'] == 'product') echo "class='active nav-item'"?>>
          <a href="index.php?controller=product&action=index&page=1"><i class="ft-box"></i><span class="menu-title" data-i18n="">Sản phẩm</span></a>
          </li>
          <li <?php if(isset($_GET['controller']) && $_GET['controller'] == 'fixservice') echo "class='active nav-item'"?>>
          <a href="index.php?controller=fixservice&action=index&page=1"><i class="fas fa-wrench"></i><span class="menu-title" data-i18n="">Dịch vụ</span></a>
          </li>
          <li <?php if(isset($_GET['controller']) && $_GET['controller'] == 'productbill') echo "class='active nav-item'"?>>
          <a href="index.php?controller=productbill&action=index&page=1"><i class="la la-list-alt"></i><span class="menu-title" data-i18n="">Hóa đơn sản phẩm</span></a>
          </li>
          <li <?php if(isset($_GET['controller']) && $_GET['controller'] == 'servicebill') echo "class='active nav-item'"?>>
          <a href="index.php?controller=servicebill&action=index&page=1"><i class="la la-list-alt"></i><span class="menu-title" data-i18n="">Hóa đơn dịch vụ</span></a>
          </li>
          
          <li <?php if(isset($_GET['controller']) && $_GET['controller'] == 'job') echo "class='active nav-item'"?>>
          <a href="index.php?controller=job&action=index&page=1"><i class="fas fa-briefcase"></i><span class="menu-title" data-i18n="">Việc làm</span></a>
          </li>
          <li <?php if(isset($_GET['controller']) && $_GET['controller'] == 'recruitment') echo "class='active nav-item'"?>>
          <a href="index.php?controller=recruitment&action=index&page=1"><i class="fas fa-user-tie"></i><span class="menu-title" data-i18n="">Ứng tuyển viên</span></a>
          </li>
          <li <?php if(isset($_GET['controller']) && $_GET['controller'] == 'booking') echo "class='active nav-item'"?>>
          <a href="index.php?controller=booking&action=index&page=1"><i class="fas fa-calendar-week"></i><span class="menu-title" data-i18n="">Lịch đặt</span></a>
          </li>
        </ul>
      </div>
      <div class="navigation-background"></div>
    </div>

    
<!--/ eCommerce statistic -->

<!-- Statistics -->

<!--/ Statistics -->
 
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <!-- BEGIN VENDOR JS-->
    <script src="./public/theme-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CHAMELEON  JS-->
    <script src="./public/theme-assets/js/core/app-menu-lite.js" type="text/javascript"></script>
    <script src="./public/theme-assets/js/core/app-lite.js" type="text/javascript"></script>
    <!-- END CHAMELEON  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
  </body>
</html>