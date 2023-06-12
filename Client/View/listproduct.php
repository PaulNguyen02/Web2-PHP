<?php include "header.php"; ?>
<link href="./css/style2.css" rel="stylesheet">
<script src="./js/main.js"></script>
<div class="wrapper">
        <div class="d-md-flex align-items-md-center">
            <div class="h3">Phụ tùng xe máy</div>
        </div>
        <div class="d-lg-flex align-items-lg-center pt-2">
            <form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF'])."?controller=product&action=search";?> method="post">
                <div class="form-inline d-flex align-items-center my-2 mr-lg-2 radio bg-light border"> 
                    <input type="text" name="searchbox" class="form-control"> 
                    <input type="submit" name="search" class="btn btn-default" value="Tìm kiếm"> 
                </div>
            </form>            
            <div class="form-inline d-flex align-items-center my-2 checkbox bg-light border mx-lg-2">             
                <select name="country" id="country" class="bg-light">
                    <option value="#" hidden>Quốc gia</option>
                    <?php foreach($data['country'] AS $key => $value):?>
                        <option value="<?php echo $value['Xuatxu']?>"><?php echo $value['Xuatxu']?></option>
                    <?php endforeach;?>
                </select> 
                <script>
                    $(document).ready(function(){
                        var country=null;
                        $("#country").change(function() {
                            country = this.value;
                            $.ajax({
								url:"index.php?controller=product&action=showbycountry",
								method:"GET",
								data:{country:country},	// là các parameter được binding
								    success:function(data){ window.location.href = "index.php?controller=product&action=showbycountry&country="+country; }
							})
                        })
                    })
                </script>
            </div>
            <div class="form-inline d-flex align-items-center my-2 checkbox bg-light border mx-lg-2">             
                <select name="sort" id="country" class="bg-light">
                    <option value="#" hidden>Sắp xếp</option>
                    <option value="asc">Giá tăng dần</option>
                    <option value="desc">Giá giảm dần</option>
                </select> 
                <script>
                    $(document).ready(function(){                                          
                        $('select[name="sort"]').change(function() {
                            val = this.value;
                            $.ajax({
								url:"index.php?controller=product&action=sort",
								method:"GET",
								data:{val:val},	// là các parameter được binding
								    success:function(data){ window.location.href ="index.php?controller=product&action=sort&val="+val; }
							})
                        })
                    })
                </script>
            </div>
        </div>        
        <div class="filters"> <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#mobile-filter" aria-expanded="true" aria-controls="mobile-filter">Bộ lọc<span class="px-1 fas fa-filter"></span></button> </div>
        <div id="mobile-filter">
            <div class="py-3">
                <h5 class="font-weight-bold">Danh mục</h5>
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"><a href="index.php?controller=product&action=showbycategory&type=suspension">Phuộc</a></li>
                        <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"><a href="index.php?controller=product&action=showbycategory&type=brake">Phanh</a></li>
                        <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"><a href="index.php?controller=product&action=showbycategory&type=exhaust">Ống xả</a></li>
                        <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"><a href="index.php?controller=product&action=showbycategory&type=tire">Lốp</a></li>
                        <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"><a href="index.php?controller=product&action=showbycategory&type=bugi">Bugi</a></li>
                        <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"><a href="index.php?controller=product&action=showbycategory&type=oil">Nhớt</a></li>
                        <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"><a href="index.php?controller=product&action=showbycategory&type=light">Đèn xe</a></li>
                        <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"><a href="index.php?controller=product&action=showbycategory&type=battery">Ắc quy</a></li>
                        <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"><a href="index.php?controller=product&action=showbycategory&type=givi">Thùng sau</a></li>
                        <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"><a href="index.php?controller=product&action=showbycategory&type=helmet">Mũ bảo hiểm</a></li>
                        <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"><a href="index.php?controller=product&action=showbycategory&type=armor">Áo giáp</a></li>
                        <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"><a href="index.php?controller=product&action=showbycategory&type=camera">Cam hành trình</a></li>
                    </ul>
            </div>
            <div class="py-3">
                <h5 class="font-weight-bold">Thương hiệu</h5>                
                    <?php foreach($data['brand'] AS $key => $value):?>
                        <div class="form-inline d-flex align-items-center py-1"> <label class="tick"><?php echo $value['Thuonghieu']?><input class="brand" type="checkbox" name="brand[]" value="<?php echo $value['Thuonghieu']?>"> <span class="check"></span> </label> </div>
                    <?php endforeach;?>   
                    <script>                    
                        $(document).ready(function(){
                            $('.brand').on('change', function(e){
                                e.preventDefault();
                                var brand = [];
                                $('input[type="checkbox"]:checked').each(function(){
                                    var br = $(this).val();
                                    brand.push("'"+br+"'");
                                    $.ajax({
                                        url:"index.php?controller=product&action=showbybrand",
                                        method:"GET",
                                        data:{brand:brand},		// là các parameter được binding 
                                        success:function(data){
                                            window.location.href = "index.php?controller="+controller+"&action="+action+"&brand="+brand;
                                        }
                                    })
                                });
                            });
                        }); 
                    </script>      
            </div>
        </div>
        <div class="content py-md-0 py-3">
            <section id="sidebar">
                <div class="py-3">
                    <h5 class="font-weight-bold">Danh mục</h5>                    
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"><a href="index.php?controller=product&action=showbycategory&type=suspension">Phuộc</a></li>
                            <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"><a href="index.php?controller=product&action=showbycategory&type=brake">Phanh</a></li>
                            <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"><a href="index.php?controller=product&action=showbycategory&type=exhaust">Ống xả</a></li>
                            <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"><a href="index.php?controller=product&action=showbycategory&type=tire">Lốp</a></li>
                            <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"><a href="index.php?controller=product&action=showbycategory&type=bugi">Bugi</a></li>
                            <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"><a href="index.php?controller=product&action=showbycategory&type=oil">Nhớt</a></li>
                            <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"><a href="index.php?controller=product&action=showbycategory&type=light">Đèn xe</a></li>
                            <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"><a href="index.php?controller=product&action=showbycategory&type=battery">Ắc quy</a></li>
                            <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"><a href="index.php?controller=product&action=showbycategory&type=givi">Thùng sau</a></li>
                            <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"><a href="index.php?controller=product&action=showbycategory&type=helmet">Mũ bảo hiểm</a></li>
                            <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"><a href="index.php?controller=product&action=showbycategory&type=armor">Áo giáp</a></li>
                            <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"><a href="index.php?controller=product&action=showbycategory&type=camera">Cam hành trình</a></li>
                        </ul>
                </div>
                <div class="py-3">
                    <h5 class="font-weight-bold">Thương hiệu</h5>
                        <?php foreach($data['brand'] AS $key => $value):?>
                            <div class="form-inline d-flex align-items-center py-1"> <label class="tick"><?php echo $value['Thuonghieu']?><input class="brand" type="checkbox" name="brand[]" value="<?php echo $value['Thuonghieu']?>"> <span class="check"></span> </label> </div>
                        <?php endforeach;?>                       
                    <script>                    
                        $(document).ready(function(){
                            var controller = "product";
							var action = "showbybrand";
                            $('.brand').on('change', function(){
                                var brand = [];
                                $('input[type="checkbox"]:checked').each(function(){
                                    var br = $(this).val();
                                    brand.push("'"+br+"'");
                                    $.ajax({
                                        url:"index.php",
                                        method:"GET",
                                        data:{controller:controller,action:action,brand:brand},		// là các parameter được binding 
                                        success:function(data){
                                            window.location.href = "index.php?controller="+controller+"&action="+action+"&brand="+brand;
                                        }
                                    })
                                });
                            });
                        }); 
                    </script>
                </div>
            </section> <!-- Products Section -->
            <section id="products">
                <div class="container py-3">
                    <div class="row">
            <?php            
                foreach($products as $prd)
                {
                        echo '
                        <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1 pt-lg-4 pt-4">
                        <div class="card"> <img id="img" class="card-img-top" src="'.$prd['Hinh'].'">
                            <div class="card-body">
                                <a href="index.php?controller=product&action=detail&id='.$prd['MASP'].'">
                                    <div id="id" class="text-muted description">LI-12'.$prd['MASP'].'SKU</div>
                                    <h6 id="name" class="font-weight-bold pt-1">'.$prd['TenSP'].'</h6>
                                    <div id="brand" class="text-muted description">'.$prd['Thuonghieu'].'</div>
                                    <div class="d-flex align-items-center product"> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="far fa-star"></span> </div>
                                </a>
                                <div class="d-flex align-items-center justify-content-between pt-3">
                                    <div class="d-flex flex-column">
                                        <div id="price" class="h6 font-weight-bold">'.$prd['GIA'].' VND</div>
                                        <div id="number" class="text-muted rebate">SL: '.$prd['SOLUONG'].'</div>
                                    </div>
                                    <a id="add" class="btn btn-primary1" href="index.php?controller=cart&action=addtocart&id='.$prd['MASP'].'&name='.$prd['TenSP'].'&num=1&price='.$prd['GIA'].'&pic='.$prd['Hinh'].'">Thêm vào giỏ</a>                                                                                                                          
                                </div>
                            </div>
                        </div>
                    </div>';
                }              
            ?>
                </div>
                </div>
                <div class="demo">
                    <nav class="pagination-outer" aria-label="Page navigation">
                        <a href="#" class="button" id="load_more">LOAD MORE</a>
                    </nav>
                </div>
            </section>
        </div>        
    </div>

</body>

</html>