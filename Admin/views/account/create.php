<?php
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thêm mới tài khoản</title>
  <link rel="apple-touch-icon" href="./public/theme-assets/images/ico/apple-icon-120.png">
  <link rel="shortcut icon" type="image/x-icon" href="./public/logo/favicon.ico">
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
</head>
<body>
  <?php include "./views/masterLayout/MasterLayout.php"?>
  <div class="app-content content content-wrap">
    <div class="content-body">
      <div class="main-menu-content">
        <div class="col-xl-6 col-md-12 mx-auto">
          <div class="card">
            <div class="card-content">
              <div class="card-body">
                <h3 class="card-title text-center text-muted secondary">Thêm mới một tài khoản</h3>
                <h6 class="card-subtitle text-muted text-center">Nhập thông tin hóa đơn bên dưới</h6>
              </div>
              
              <div class="card-body">
                <form class="form" method="post" enctype="multipart/form-data">
                  <div class="form-body">
                    <div class="form-group">
                      <label for="donationinput1" class="sr-only">Họ Tên </label>
                      <input type="text" name="name" id="donationinput1" class="form-control" placeholder="Họ tên" >
                    </div>
                    <div class="form-group">
                      <label for="donationinput1" class="sr-only">Tên tài khoản</label>
                      <input type="text" name="username" id="donationinput2" class="form-control" placeholder="Tên tài khoản" >
                    </div>
                    <div class="form-group">
                      <label for="donationinput1" class="sr-only">Ngày sinh</label>
                      <input type="date" name="dob" id="donationinput3" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="donationinput1" class="sr-only">Email</label>
                      <input type="email" name="email" id="donationinput4" class="form-control" placeholder=".@example.com" >
                    </div>
                    <div class="form-group">
                      <label for="donationinput1" class="sr-only">Số điện thoại</label>
                      <input type="tel" name="phone" id="donationinput5" placeholder="011727" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="gioiTinh">        Giới tính:</label><br>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="gender" value="nam">Nam</label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="gender" value="nu">Nữ</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="gioiTinh">        Quyền:</label><br>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="auth" value="admin">Admin</label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="auth" value="employee">Nhân viên</label>
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="donationinput2" class="sr-only">Mật khẩu</label>
                      <input type="password" name="password" id="donationinput6" class="form-control" placeholder="Mật khẩu" >
                    </div>
                      <div class="form-group">
                      <label for="donationinput3" class="sr-only">Nhập lại khẩu</label>
                      <input type="password" name="confirmpassword" id="donationinput7" class="form-control" placeholder="Xác nhận mật khẩu" >
                    </div>

                  </div>
                  <div class="form-actions center">
                    <button type="submit" name=submit class="btn btn-info">Thêm mới</button>
                    <a href="index.php?controller=account&action=index&page=1">
                    <button type="button" class="btn btn-danger">Hủy</button>
                    </a>
                  </div>
                  <p class="text-muted text-center danger"><?php if(isset($data['error'])) echo $data['error']?></p>
                </form>
              </div>
            </div>
          </div>
        </div>    
      </div>
    </div>
  </div>
  <?php include "./views/masterLayout/footer.php"?>
  
  
</body>
</html>