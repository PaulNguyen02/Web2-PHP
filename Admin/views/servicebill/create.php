<?php
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thêm mới hóa đơn</title>
  <link rel="apple-touch-icon" href="./public/theme-assets/images/ico/apple-icon-120.png">
  <link rel="shortcut icon" type="image/x-icon" href="./public/logo/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="./public/logo/favicon.ico">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
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
<body onload="time()">
  
<?php  include "./views/masterLayout/MasterLayout.php";?>
    <div class="app-content content content-wrap">
        <div class="content-body">
        <div class="main-menu-content">
            <div class="col-xl-6 col-md-12 mx-auto">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <h3 class="card-title text-center text-muted warning">Thêm mới một hóa đơn</h3>
                                <h6 class="card-subtitle text-muted text-center">Nhập thông tin hóa đơn bên dưới</h6>
                                
                                
                            </div>
                            <div class="card-body">
                                <form class="form" method="post" onsubmit="prevent(event)" enctype="multipart/form-data">
                                    <div class="form-body">
                                        <div class="form-group">
                                        <label for="time" class="sr-only">Ngày xuất</label>
                                            <input type="text" name="receiver" id="time" class="form-control" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="basicSelect" class="sr-only">Khách hàng</label>
                                            <select class="form-control" id="basicSelect" name="khachhang">
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
                                            <select class="form-control" id="basicSelect" name="khachhang">
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
                                        <div class="form-group">
                                            <label>Chọn dịch vụ:</label>
                                            <input list="browsers" type="text" name="browse" id="type"/>
                                            <datalist id="browsers">
                                                <?php foreach ($data['services'] as $key => $value): ?>
                                                    <option value="<?php echo $value['MADV']."-".$value['TenDV']."-".$value['Gia']?>"><?php echo $value['MADV']."-".$value['TenDV']."-".$value['Gia']?></option>
                                                <?php endforeach;?>  
                                            </datalist>                                                                                        
                                        </div>
                                        <div class="form-group">
                                            <label>Chọn số lượng:</label>
                                            <input type="number" id="num">         
                                        </div>
                                        <div class="form-group">
                                            <button name="add" type="button" id="add" class="btn btn-primary">Thêm</button>       
                                        </div>
                                        <script>                                        
                                         $(document).ready(function(){
                                                var total=0;
                                                $("#add").click(function(){
                                                var str = $('#type').val();
                                                var substrings = str.split("-");
                                                var madv = substrings[0];
                                                var tendv = substrings[1];
                                                var gia = substrings[2];
                                                var sl = $('#num').val();
                                                if(parseInt(sl)>=1)
                                                {                   
                                                    var table = document.getElementById("table");
                                                    var row = table.insertRow(1);
                                                    var cell1 = row.insertCell(0).innerHTML = madv;
                                                    var cell2 = row.insertCell(1).innerHTML = tendv;
                                                    var cell3 = row.insertCell(2).innerHTML = sl;
                                                    var cell4 = row.insertCell(3).innerHTML = gia; 
                                                    total+= parseInt(sl)*parseInt(gia);                       
                                                    document.getElementById("total").value = total; 
                                                }
                                                else
                                                {
                                                    alert("Số lượng dịch vụ không bị âm");
                                                }                                      
                                            })                   
                                        })    
                       
                                    </script>
                                        <div class="table-responsive px-1">
                                            <table class="table" id="table">
                                                <tr>
                                                    <th scope="col">Mã dịch vụ</th>
                                                    <th scope="col">Tên dịch vụ</th>
                                                    <th scope="col">Số lượng</th>
                                                    <th scope="col">Đơn giá</th>
                                                    <th scope="col">Hành động</th>  
                                                </tr>
                                            </table>
                                        </div>            
                                    </div>
                                    <div class="form-actions center">
                                        <h3>Tổng tiền</h3>
                                        <input type="text" name="receiver" id="total" class="form-control" readonly>           
                                    </div>
                                    <div class="form-actions center">
                            
                                        <button type="submit" name="submit" class="btn btn-info">In hóa đơn</button>
                                        <script>
                                            $(document).ready(function(){
                                                $("#save").click(function(){
                                                    var time = document.getElementById("time").value;
                                                    var customer = document.getElementById("customerselect").value;
                                                    var employee = document.getElementById("employeeselect").value;
                                                    var total = document.getElementById("total").value;
                                                    var table = document.getElementById("table");
                                                    var rows = table.getElementsByTagName("tr");
                                                    var data = [];
                                                    for (var i = 1; i < rows.length; i++) {
                                                        var cells = rows[i].getElementsByTagName("td");
                                                        var madv = cells[0].innerHTML;
                                                        var tendv = cells[1].innerHTML;
                                                        var sl = cells[2].innerHTML;
                                                        var gia = cells[3].innerHTML;
                                                        data.push({madv: madv, tendv: tendv, sl: sl, gia: gia});
                                                    }
                                                    var dataset = JSON.stringify(data);
                                                    fetch(`http://localhost/adminmotoserv/index.php?controller=servicebill&action=Test&time=${time}&customer=${customer}&employee=${employee}&total=${total}&data=${dataset}`)

                                                })

                                            })

                                        </script>
                                        <a href="index.php?controller=order&action=index&page=1">
                                        <button type="button" class="btn btn-danger">Hủy</button>
                                        </a>
                                    </div>
                                    
                                    <p class="text-center muted-text danger"><?php if(isset($data['error'])) echo $data['error'];?></p>
                                </form>
                                <script>                                    
                                    function time()
                                    {
                                        var date = new Date(); 
                                        var time = date.getDate()+"/"+(date.getMonth() + 1)+"/"+date.getFullYear()+" "+date.getHours()+":"+date.getMinutes();                                    
                                        document.getElementById("time").value = time;
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>    
        </div>
        </div>
    </div> 
<?php  include "./views/masterLayout/footer.php";?>

</body>
</html>