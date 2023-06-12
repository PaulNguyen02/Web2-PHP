<?php 
    include "header.php"; ?>
<link href="css/style2.css" rel="stylesheet">
<script src="js/main.js"></script>
<script src="js/localstorage.js"></script>
<div class="wrapper">
        <div class="d-md-flex align-items-md-center">
            <div class="h3">Giỏ hàng của bạn</div>
        </div>
        <div class="content py-md-0 py-3">
            <section id="products">
                <div class="container py-3">
                    <div class="row">
                    <?php                    
                        foreach($prdlist as $item)
                        {                            
                            echo '
                                <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1" onclick="clickon()">
                                <div class="card"> <img class="card-img-top" src='.$item["Hinh"].'>
                                    <div class="card-body">
                                        <h6 class="font-weight-bold pt-1">'.$item["TenSP"].'</h6>
                                        <div class="text-muted description">LI-12'.$item["MASP"].'SKU</div>
                                        <div class="d-flex align-items-center justify-content-between pt-3">
                                            <div class="d-flex flex-column">
                                                <div class="h6 font-weight-bold">'.$item["GIA"].'</div>
                                            </div>
                                            <a href="index.php?controller=product&action=detail&id='.$item["MASP"].'" class="btn btn-primary m-r-1em">Xem</a>                                        
                                            <a href="index.php?controller=cart&action=removefromcart&id='.$item["MASP"].'" class="btn btn-danger">Bỏ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                        }
                ?>
                    </div>
                </div>
            </section>
        </div>        
    </div>