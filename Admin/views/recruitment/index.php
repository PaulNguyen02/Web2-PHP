<?php
    $urlIndex = "index.php?controller=recruitment&action=index&page=";
    $urlDelete = "index.php?controller=recruitment&action=delete&id=";
    $urlUpdate = "index.php?controller=recruitment&action=update&id=";
    $srcImg = "./public/image/";

    $prevPage = $urlIndex . $data['prePage'];
    $nextPage = $urlIndex . $data['nextPage'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="./public/logo/favicon.ico">
  </head>
<body>
  <?php include "./views/masterLayout/MasterLayout.php"?>
  <div class="app-content content content-wrap">
    <div class="content-body">
      <div class="main-menu-content">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title h3 light text-center">Danh sách ứng cử viên</h3>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                  <ul class="list-inline mb-0">
                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    <li><a data-action="close" href="index.php?controller=dashboard&action=index"><i class="ft-x"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="card-content collapse show">
                <div class="card-body">
                  <p>
                  <?php if(isset($_SESSION['success'])){
                          echo $_SESSION['success'];
                          unset($_SESSION['success']);
                  }
                  if(isset($_SESSION['error'])){
                      echo $_SESSION['error'];
                      unset($_SESSION['error']);
                  }?>
                  </p>
                </div>
                <a href="index.php?controller=recruitment&action=create" class="pl-1 float-left">
                </a>
                <div class="card-body float-right px-1 py-0">
                  <?php if($data['pages'] > 0):?>
                    <ul class="pagination">
                      <li class="page-item ">
                        <a class="page-link" href="<?php echo $prevPage; ?>">&laquo;</a>
                      </li>
                      <?php for($i = 1; $i <= $data['pages']; $i++):?>
                        <?php if($i == $data['currentPage']) :?>
                          <li class="page-item active">
                            <a class="page-link" href=<?php echo $urlIndex.$i?>><?php echo $i?></a>
                          </li>
                        <?php else:?>
                          <li class="page-item">
                            <a class="page-link" href=<?php echo $urlIndex.$i?>><?php echo $i?></a>
                          </li>
                        <?php endif;?>
                      <?php endfor;?>
                      <li class="page-item ">
                        <a class="page-link" href="<?php echo $nextPage;?>">&raquo;</a>
                      </li>
                    </ul>
                  <?php endif?>
                </div>
                <div class="table-responsive px-1">
                  <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">STT</th>
                        <th scope="col">UID</th>
                        <th scope="col">Họ tên</th>
                        <th scope="col">Email</th>
                        <th scope="col">Chức vụ</th>
                        <th scope="col">Địa chỉ</th>
                        <th scope="col">Ngày sinh</th>
                        <th scope="col">SDT</th>
                        <th scope="col">Ngày nộp CV</th>
                        <th scope="col">Thao tác</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php if(empty($data['recruitments'])):?>
                      <tr>
                        <td colspan="6" class="danger text-center">Không có ứng cử viên nào</td>
                      </tr>
                      <?php else :?>
                      <?php foreach($data['recruitments'] AS $key => $value):?>
                        <tr>
                          <th scope="row"><?php echo $value['STT'];?></th>
                          <td><?php echo $value['UID'];?></td>
                          <td><?php echo $value['Hoten'].' cái';?></td>
                          <td><?php echo $value['Email'].' vnđ';?></td>
                          <td><?php echo $value['Chucvu'];?></td>
                          <td><?php echo $value['Diachi'];?></td>
                          <td><?php echo $value['Ngaysinh'];?></td>
                          <td><?php echo $value['SDT'];?></td>    
                          <td><?php echo $value['NgaynopCV'];?></td>                              
                          <td>
                            <a href="<?php echo $urlDelete.$value['STT'];?>" data-toggle="tooltip" data-placement="top" title="Xóa ứng viên" onclick="return confirm('Bạn có chắc muốn xóa ứng viên này?')">
                                  <i class="la la-trash danger font-large-2" ></i>
                            </a>
                          </td>
                        </tr>
                      <?php endforeach;?>
                    <?php endif;?>
                    </tbody>
                  </table>
                </div>
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
