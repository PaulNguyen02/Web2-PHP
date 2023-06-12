
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sửa sách</title>
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
                <h3 class="card-title text-center text-muted info">Sửa sản phẩm</h3>
                <h6 class="card-subtitle text-muted text-center">Nhập thông tin cần sửa bên dưới</h6>
              </div>
              <div class="card-body">
              <form class="form" method="post" enctype="multipart/form-data">
                  <div class="form-body">
                    <div class="form-group">
                      <label for="donationinput1" class="sr-only">Tên sản phẩm</label>
                      <input type="text" name="name" id="donationinput1" class="form-control" placeholder="Tên sản phẩm" >
                    </div>                    
                    <div class="form-group">
                      <label for="donationinput3" class="sr-only">Giá</label>
                      <input type="text" name="price" id="donationinput3" class="form-control" placeholder="Đơn giá" >
                    </div>
                    <div class="form-group">
                      <label for="basicSelect" class="sr-only">Loại sản phẩm</label>
                      <select class="form-control" id="basicSelect" name="type">
                        <option>Chọn danh mục</option>
                        <?php foreach($data['categories'] AS $key => $value):?>
                          <option value="<?php echo $value['LOAISP']?>"><?php echo $value['LOAISP']?></option>
                        <?php endforeach;?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="basicSelect" class="sr-only">Thương hiệu</label>
                      <select class="form-control" id="basicSelect" name="brand">
                        <option>Nhãn hiệu</option>
                        <?php foreach($data['brands'] AS $key => $value):?>
                          <option value="<?php echo $value['Thuonghieu']?>"><?php echo $value['Thuonghieu']?></option>
                        <?php endforeach;?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="basicSelect" class="sr-only">Xuất xứ</label>
                      <select class="form-control" id="basicSelect" name="nation">
                        <option>Quốc gia</option>
                        <?php foreach($data['nations'] AS $key => $value):?>
                          <option value="<?php echo $value['Xuatxu']?>"><?php echo $value['Xuatxu']?></option>
                        <?php endforeach;?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="donationinput4" class="sr-only">Chọn ảnh</label>
                      <input type="text" id="donationinput4" class="form-control" placeholder="Thêm ảnh" name="pic">
                    </div>
                  </div>
                  <div class="form-actions center">
                    <button type="submit" name=submit class="btn btn-info">Lưu thay đổi</button>
                    <a href="index.php?controller=product&action=index&page=1">
                    <button type="button" class="btn btn-danger">Hủy</button>
                    </a>
                  </div>
                  <p class="text-center muted-text danger"><?php if(isset($data['error'])) echo $data['error'];?></p>
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