<?php
     require_once "./views/masterLayout/MasterLayout.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thêm việc làm</title>
</head>
<body>
  <div class="main-menu-content">
    <div class="col-xl-6 col-md-12 mx-auto">
      <div class="card">
        <div class="card-content">
          <div class="card-body">
            <h3 class="card-title text-center text-muted info">Thêm việc làm mới</h3>
            <h6 class="card-subtitle text-muted text-center">Nhập thông tin công việc bên dưới</h6>
          </div>
          <div class="card-body">
            <form class="form" method="post" enctype="multipart/form-data" action="index.php?controller=job&action=insert">
              <div class="form-body">
                <!-- <div class="form-group">
                  <label for="uid">UID</label>
                  <input type="text" name="uid" id="uid" class="form-control" placeholder="Mã người dùng">
                </div> -->
                <div class="form-group">
                  <label for="tencv">Tên công việc</label>
                  <input type="text" name="tencv" id="tencv" class="form-control" placeholder="Tên công việc">
                </div>
                <div class="form-group">
                  <label for="mota">Mô tả</label>
                  <textarea name="mota" id="mota" class="form-control" placeholder="Mô tả công việc"></textarea>
                </div>
                <div class="form-group">
                  <label for="luong">Lương</label>
                  <input type="text" name="luong" id="luong" class="form-control" placeholder="Lương">
                </div>
                <div class="form-group">
                  <label for="hinh">Hình</label>
                  <input type="text" name="hinh" id="hinh" class="form-control" placeholder="Đường dẫn hình ảnh">
                </div>
              </div>
              <div class="form-actions center">
                <button type="submit" name="submit" class="btn btn-info">Thêm mới</button>
                <a href="/adminmotoserv/index.php?controller=job&action=index&page=1">
                <button type="button" class="btn btn-danger">Hủy</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php  include "./views/masterLayout/footer.php";?>
</body>
</html>