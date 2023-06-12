<?php include "header.php"; ?>
<link href="css/style5.css" rel="stylesheet">
<link href="css/style6.css" rel="stylesheet">
<script src="js/main.js"></script>
<div class="container d-flex justify-content-center mt-50 mb-50">
            <div class="apply_box">
            <script>
                 $(".apply_box").hide();
            </script>
                <button class="close"><i class="fas fa-times" style="width: 100%; height: 100%;"></i></button>
                <script>
                    $(".close").click(function ()
                        {
                            $(".apply_box").hide();
                        }
                    )     
                </script>
                <h1>ĐĂNG KÍ TUYỂN DỤNG</h1>
                <form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF'])."?controller=recruitment&action=register"; ?> method="post" enctype="multipart/form-data">
                  <div class="form_container">
                    <div class="form_control">
                      <label for="last_name"> Tên </label>
                      <input id="last_name" name="name" placeholder="Nhập tên của bạn"/>
                    </div>
                    <div class="form_control">
                      <label for="email"> Email </label>
                      <input type="email" id="email" name="email" placeholder="Nhập email của bạn"/>
                    </div>
                    <div class="form_control">
                      <label for="job_role"> Vai trò </label>
                      <select id="job_role" name="role">
                        <option value="engineer">Kĩ sư cơ khí</option>
                        <option value="technical">Kĩ thuật viên</option>
                        <option value="accountant">Kế toán</option>
                        <option value="marketing">Marketing</option>
                        <option value="technicalintern">Thực tập sinh Kỹ Thuật</option>
                        <option value="marketingintern">Thực tập sinh Marketing</option>
                        <option value="accountantintern">Thực tập sinh Kế toán</option>
                        <option value="worker">Thợ sữa chữa</option>
                        <option value="cleaner">Nhân viên vệ sinh</option>
                      </select>
                    </div>
                    <div class="textarea_control">
                      <label for="address"> Địa chỉ </label>
                      <textarea id="address" name="address" row="4" cols="50" placeholder="Nhập địa chỉ của bạn"></textarea>
                    </div>
                    <div class="form_control">
                      <label for="birth"> Ngày sinh</label>
                      <input value="2023-04-10" type="date" id="birth" name="birth" />
                    </div>
                    <div class="form_control">
                      <label for="phone"> Số điện thoại </label>
                      <input id="phone" name="phone" placeholder="Nhập số điện thoại của bạn" />
                    </div>
                    <div class="form_control">
                      <label for="date"> Ngày nộp CV</label>
                      <input value="2023-04-10" type="date" id="date" name="date" />
                    </div>
                    <div class="form_control">
                      <label for="upload"> Upload CV của bạn </label>
                      <input type="file" id="upload" name="upload" accept=".pdf"/>
                    </div>
                  </div>
                  <div class="button_container">
                    <button name="sent" type="submit">Nộp hồ sơ</button>
                  </div>
                </form>
              </div>           
        <div class="row">
           <div class="col-md-10">                          
                <?php
                        foreach($joblist as $job)
                        {
                            echo '
                            <div class="card card-body">
                                <div class="card card-body mt-3">
                                    <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
                                        <div class="mr-2 mb-3 mb-lg-0">                                    
                                                <img src='.$job["Hinh"].' width="150" height="150" alt="">                                   
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-title font-weight-semibold">'.$job["TenCV"].'</h6>
                                            <p>Mô tả</p>
                                            <p class="mb-3">'.$job["MOTA"].'</p>
                                            <p>Lương</p>
                                        </div>
                                        <div class="mt-3 mt-lg-0 ml-lg-3 text-center">
                                            <h3 class="mb-0 font-weight-semibold">'.$job["LUONG"].'đ</h3>
                                            <button type="button" class="btn btn-warning mt-4 text-white"><i class="icon-cart-add mr-2"></i> Ứng tuyển ngay</button>
                                            <script>
                                                $(".btn").click(function ()
                                                    {
                                                        $(".apply_box").show();
                                                    }
                                                )     
                                            </script>
                                        </div>
                                    </div>
                                </div>  
                            </div> 
                            ';
                        }                        
                    ?>                                                                                                            
            </div>                     
        </div>
    </div>
    <?php 
        /*include_once "../Data/config.php";
        if(isset($_POST["sent"])) {
            if (isset($_FILES['upload'])) {
            switch ($_FILES['upload']["error"]) {
                case UPLOAD_ERR_OK:
                    $target = "C:/xampp/htdocs/motoserv/Files/";
                    $target = $target . basename($_FILES['upload']['name']);

                    if (move_uploaded_file($_FILES['upload']['tmp_name'], $target)) {
                        $status = "The file " . basename($_FILES['upload']['name']) . " has been uploaded";
                        $imageFileType = pathinfo($target, PATHINFO_EXTENSION);
                        $check = getimagesize($target);                   
                        $uploadOk = 1;
                    } else {
                        $status = "Sorry, there was a problem uploading your file.";
                    }
                    break;
                    }
                    echo "Status: {$status}<br/>\n";
            }
            if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['role']) && isset($_POST['address']) && isset($_POST['birth']) && isset($_POST['phone']) && isset($_POST['date']))
            {
                $sql = "INSERT INTO tuyendung (uid, hoten, email, chucvu, diachi, ngaysinh, sdt, ngaynopcv) 
                VALUES ('1','".$_POST['name']."','".$_POST['email']."','".$_POST['role']."','".$_POST['address']."','".$_POST['birth']."','".$_POST['phone']."','".$_POST['date']."')";
                if (mysqli_query($conn, $sql)) {
                    header("Location: http://localhost/motoserv/Pages/home.php?login=false");
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            }
        }*/
    ?>
<?php include "footer.php"; ?>