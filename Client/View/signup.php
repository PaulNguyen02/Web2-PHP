<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang đăng ký</title>
    <!-- Customized Bootstrap Stylesheet -->
    <link href="img/logo.jpg" rel="icon" type="image/x-icon">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="css/signup.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js?hl=vi'></script> <!-- Google captcha API -->
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</head>
<style>
  body {
    background-image: url("img/carousel-bg-4.jpg");
  }
  .container {
    background-color: #fff;
    margin-top: 50px;
    border-radius: 5px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    padding: 20px;
  }
  h2 {
    text-align: center;
    margin-bottom: 30px;
  }
  label {
    font-weight: 600;
  }
  button {
    margin-top: 20px;
    width: 100%;
  }
</style>
<body>
  <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
    <div class="container col-md-6">
    <h2>Đăng ký</h2>
    <form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF'])."?controller=signup&action=create";?> method="post" onsubmit="return validateForm()">
        <div class="form-group">
            <label for="hoTen">Họ tên:</label>
            <input type="text" class="form-control" id="hoTen" placeholder="Nhập họ tên" name="hoTen">
        </div>
        <div class="form-group">
            <label for="taiKhoan">Tên tài khoản:</label>
            <input type="text" class="form-control" id="taiKhoan" placeholder="Nhập tài khoản" name="taiKhoan">
        </div>
        <div class="form-group">
          <label for="taiKhoan">Ngày sinh:</label>
          <input type="date" class="form-control" id="ngsinh" placeholder="dd/mm/yyyy" name="dob">
      </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Nhập email" name="email">
        </div>
        <div class="form-group">
            <label for="soDienThoai">Số điện thoại:</label>
            <input type="tel" class="form-control" id="soDienThoai" placeholder="Nhập số điện thoại" name="soDienThoai">
        </div>
        <div class="form-group">
            <label for="matKhau">Mật khẩu:</label>
            <input type="password" class="form-control" id="matKhau" placeholder="Nhập mật khẩu" name="matKhau">
        </div>
        <div class="form-group">
            <label for="nhapLaiMatKhau">Nhập lại mật khẩu:</label>
            <input type="password" class="form-control" id="nhapLaiMatKhau" placeholder="Nhập lại mật khẩu" name="nhapLaiMatKhau">
        </div>
        <div class="form-group">
            <label for="gioiTinh">        Giới tính:</label><br>
            <div class="form-check-inline">
                <label class="form-check-label">
                <input type="radio" class="form-check-input" name="gioiTinh" value="nam">Nam</label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label">
                <input type="radio" class="form-check-input" name="gioiTinh" value="nu">Nữ</label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label">
                <input type="radio" class="form-check-input" name="gioiTinh" value="khac">Khác</label>
            </div>            	
            <div class="g-recaptcha" data-sitekey="6Lc7qQsmAAAAAD4KHU04xef_E6OYf0cUQPpSlgwz"></div>
        </div>
            <button type="submit" class="btn btn-primary">Đăng ký</button>
    </form>
</div>
</body>
<script>
    function validateForm() {
        var hoTen = document.getElementById("hoTen").value;
        var taiKhoan = document.getElementById("taiKhoan").value;
        var email = document.getElementById("email").value;
        var soDienThoai = document.getElementById("soDienThoai").value;
        var matKhau = document.getElementById("matKhau").value;
        var nhapLaiMatKhau = document.getElementById("nhapLaiMatKhau").value;
        var gioiTinh = document.querySelector('input[name="gioiTinh"]:checked');

        if (hoTen == "" || taiKhoan == "" || email == "" || soDienThoai == "" || matKhau == "" || nhapLaiMatKhau == "" || gioiTinh == null) {
            alert("Vui lòng điền đầy đủ thông tin và chọn giới tính.");
            return false;
        }

        var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if (!emailRegex.test(email)) {
            alert("Email không hợp lệ. Vui lòng nhập đúng định dạng email.");
            return false;
        }

        var phoneRegex = /^\d{10}$/;
        if (!phoneRegex.test(soDienThoai)) {
            alert("Số điện thoại không hợp lệ. Vui lòng nhập đúng định dạng số điện thoại (10 chữ số).");
            return false;
        }

        if (matKhau != nhapLaiMatKhau) {
            alert("Mật khẩu không trùng khớp. Vui lòng nhập lại mật khẩu.");
            return false;
        }

        return true;
    }
</script>
</html>