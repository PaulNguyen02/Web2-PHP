
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sửa Hóa đơn</title>
  <link rel="apple-touch-icon" href="./public/theme-assets/images/ico/apple-icon-120.png">
  <link rel="shortcut icon" type="image/x-icon" href="./public/logo/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="./public/logo/favicon.ico">
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
                                <h3 class="card-title text-center text-muted warning">Sửa hóa đơn</h3>
                                <h6 class="card-subtitle text-muted text-center">Nhập thông tin cần sửa bên dưới</h6>
                                <?php //print_r($data['data'])?>
                            </div>
                            <div class="card-body">
                                <form class="form" method="post" enctype="multipart/form-data">
                                    
                                    <div class="form-group">
                                            <label for="basicSelect" class="sr-only">Khách hàng</label>
                                            <select class="form-control" id="customerselect" name="khachhang">
                                                <?php if(empty($data['customers'])) :?>
                                                    <option>Khách hàng</option>
                                                <?php else:?>
                                                    <option>Chọn khách hàng </option>
                                                    <?php foreach ($data['customers'] as $key => $value): ?>
                                                        <option value="<?php echo $value['TENKH']?>"><?php echo $value['TENKH']?></option>
                                                    <?php endforeach;?>
                                                <?php endif;?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="basicSelect" class="sr-only">Nhân viên</label>
                                            <select class="form-control" id="employeeselect" name="nhanvien">
                                                <?php if(empty($data['employees'])) :?>
                                                    <option>Khách hàng</option>
                                                <?php else:?>
                                                    <option>Chọn nhân viên </option>
                                                    <?php foreach ($data['employees'] as $key => $value): ?>
                                                        <option value="<?php echo $value['Hoten']?>"><?php echo $value['Hoten']?></option>
                                                    <?php endforeach;?>
                                                <?php endif;?>
                                            </select>
                                        </div>
                                    <div class="form-actions center">
                                        <button type="submit" name="update" class="btn btn-info">Xác nhận</button>
                                        <a href="/adminmotoserv/index.php?controller=productbill&action=index&page=1">
                                        <button type="button" class="btn btn-danger">Hủy</button>
                                        </a>
                                    </div>
                                    <p class="text-center danger text-muted"><?php if(isset($data['error'])) echo $data['error']?></p>
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