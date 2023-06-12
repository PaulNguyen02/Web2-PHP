<?php include "header.php"; ?>
<link href="css/style1.css" rel="stylesheet">
<div class="modal fade" id="newModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body text-center">
        <div class="icon text-danger">
          <i class="fas fa-motorcycle"></i>
        </div>
        <div class="notice">
          <h4>Hàng mới</h4>
          <p>Có những hàng mới được bổ sung vào danh mục sản phẩm</p>          
        </div>
        <button id="close_btn" type="button" class="btn btn-danger" data-dismiss="modal">Ok</button>
		<script>
			$('#close_btn').click(function() {  
				$('#newModal').modal('hide');
			});
		</script>
      </div>
    </div>
  </div>
</div>
<script>
	$(document).ready(function() {  
  $('#newModal').modal('show');
});
</script>

<section class="section-products">
		<div class="container">					
				<div class="row justify-content-center text-center">
						<div class="col-md-8 col-lg-6">
								<div class="header">
									<h3>Danh mục phụ tùng</h3>									
									<h2>Các loại phụ tùng phổ biến</h2>
									<h3 id="all">Xem tất cả sản phẩm</h3>
									<script>
											$(document).ready(function(){	/*ajax */
												var controller = "product";
												var action = "show";
												$('#all').click(function(){
													$.ajax({
														url:"index.php",
														method:"GET",
														data:{controller:controller,action:action},	// là các parameter được binding
														success:function(data){
															window.location.href = "index.php?controller="+controller+"&action="+action;
														}
													})
												})
												
											})
									</script>
								</div>
						</div>
				</div>
				<div class="row">
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">	
								<div id="product-1" class="single-product">
										<div class="part-1"></div>
										<div class="part-2">
											<h3 class="product-title">Hệ thống treo</h3>;																																							
										</div>
										<script>
											$(document).ready(function(){	/*ajax */
												var controller = "product";
												var action = "showbycategory";
												$('#product-1').click(function(){
													const category = "suspension";
													$.ajax({
														url:"index.php",
														method:"GET",
														data:{controller:controller,action:action, type:category},	// là các parameter được binding
														success:function(data){
															window.location.href = "index.php?controller="+controller+"&action="+action+"&type="+category;
														}
													})
												})
												
											})
										</script>
								</div>
						</div>
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">								
								<div id="product-2" class="single-product">
										<div class="part-1">
												<span class="discount">giảm 15%</span>												
										</div>
										<div class="part-2">
											<h3 class="product-title">Hệ thống khí thải</h3>
										</div>
										<script>
											$(document).ready(function(){	/*ajax */
												var controller = "product";
												var action = "showbycategory";
												$('#product-2').click(function(){
													const category = "exhaust";
													$.ajax({
														url:"index.php",
														method:"GET",
														data:{controller:controller,action:action,type:category},		// là các parameter được binding 
														success:function(data){
															window.location.href = "index.php?controller="+controller+"&action="+action+"&type="+category;
														}
													})
												})
												
											})
										</script>
								</div>
						</div>
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-3" class="single-product">
										<div class="part-1"></div>
										<div class="part-2">
											<h3 class="product-title">Hệ thống phanh</h3>																													
										</div>
										<script>
											$(document).ready(function(){	/*ajax */
												var controller = "product";
												var action = "showbycategory";
												$('#product-3').click(function(){
													const category = "brake";
													$.ajax({
														url:"index.php",
														method:"GET",
														data:{controller:controller,action:action,type:category},		// là các parameter được binding 
														success:function(data){
															window.location.href = "index.php?controller="+controller+"&action="+action+"&type="+category;
														}
													})
												})
												
											})
										</script>
								</div>
						</div>
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-4" class="single-product">
										<div class="part-1"></div>
										<div class="part-2">
											<h3 class="product-title">Lốp xe</h3>																																								
										</div>
										<script>
											$(document).ready(function(){	/*ajax */
												var controller = "product";
												var action = "showbycategory";
												$('#product-4').click(function(){
													const category = "tire";
													$.ajax({
														url:"index.php",
														method:"GET",
														data:{controller:controller,action:action,type:category},		// là các parameter được binding 
														success:function(data){
															window.location.href = "index.php?controller="+controller+"&action="+action+"&type="+category;
														}
													})
												})
												
											})
										</script>
								</div>
						</div>
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">								
								<div id="product-5" class="single-product">
										<div class="part-1"></div>
										<div class="part-2">
											<h3 class="product-title">Nhớt</h3>		
										</div>
										<script>
											$(document).ready(function(){	/*ajax */
												var controller = "product";
												var action = "showbycategory";
												$('#product-5').click(function(){
													const category = "oil";
													$.ajax({
														url:"index.php",
														method:"GET",
														data:{controller:controller,action:action,type:category},		// là các parameter được binding 
														success:function(data){
															window.location.href = "index.php?controller="+controller+"&action="+action+"&type="+category;
														}
													})
												})
												
											})
										</script>
								</div>
						</div>
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">								
								<div id="product-6" class="single-product">
										<div class="part-1">
												<span class="discount">15% off</span></div>
										<div class="part-2">
										<h3 class="product-title">Bugi</h3>													
										</div>
										<script>
											$(document).ready(function(){	/*ajax */
												var controller = "product";
												var action = "showbycategory";
												$('#product-6').click(function(){
													const category = "bugi";
													$.ajax({
														url:"index.php",
														method:"GET",
														data:{controller:controller,action:action,type:category},		// là các parameter được binding 
														success:function(data){
															window.location.href = "index.php?controller="+controller+"&action="+action+"&type="+category;
														}
													})
												})
												
											})
										</script>
								</div>
						</div>
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">								
								<div id="product-7" class="single-product">
										<div class="part-1"></div>
										<div class="part-2">
											<h3 class="product-title">Pin ắc quy</h3>	
										</div>
										<script>
											$(document).ready(function(){	/*ajax */
												var controller = "product";
												var action = "showbycategory";
												$('#product-7').click(function(){
													const category = "battery";
													$.ajax({
														url:"index.php",
														method:"GET",
														data:{controller:controller,action:action,type:category},		// là các parameter được binding 
														success:function(data){
															window.location.href = "index.php?controller="+controller+"&action="+action+"&type="+category;
														}
													})
												})
												
											})
										</script>
								</div>
						</div>
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								
								<div id="product-8" class="single-product">
										<div class="part-1">
												<span class="new">Mới</span>				
										</div>
										<div class="part-2">
											<h3 class="product-title">Givi</h3>
										</div>
										<script>
											$(document).ready(function(){	/*ajax */
												var controller = "product";
												var action = "showbycategory";
												$('#product-8').click(function(){
													const category = "givi";
													$.ajax({
														url:"index.php",
														method:"GET",
														data:{controller:controller,action:action,type:category},		// là các parameter được binding 
														success:function(data){
															window.location.href = "index.php?controller="+controller+"&action="+action+"&type="+category;
														}
													})
												})
												
											})
										</script>
								</div>
						</div>
                        <div class="col-md-6 col-lg-4 col-xl-3">					
                            <div id="product-9" class="single-product">
                                    <div class="part-1">
                                            <span class="new">Mới</span>				
                                    </div>
                                    <div class="part-2">
										<h3 class="product-title">Đèn</h3>	
                                    </div>
									<script>
											$(document).ready(function(){	/*ajax */
												var controller = "product";
												var action = "showbycategory";
												$('#product-9').click(function(){
													const category = "light";
													$.ajax({
														url:"index.php",
														method:"GET",
														data:{controller:controller,action:action,type:category},		// là các parameter được binding 
														success:function(data){
															window.location.href = "index.php?controller="+controller+"&action="+action+"&type="+category;
														}
													})
												})
												
											})
										</script>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3">							
                            <div id="product-10" class="single-product" >
                                    <div class="part-1">
                                        <span class="new">Mới</span>				
                                    </div>
                                    <div class="part-2">
										<h3 class="product-title">Nón bảo hiểm</h3>	
                                    </div>
									<script>
											$(document).ready(function(){	/*ajax */
												var controller = "product";
												var action = "showbycategory";
												$('#product-10').click(function(){
													const category = "helmet";
													$.ajax({
														url:"index.php",
														method:"GET",
														data:{controller:controller,action:action,type:category},		// là các parameter được binding 
														success:function(data){
															window.location.href = "index.php?controller="+controller+"&action="+action+"&type="+category;
														}
													})
												})
												
											})
									</script>
                            </div>
                        </div>
						<div class="col-md-6 col-lg-4 col-xl-3">
							
                            <div id="product-11" class="single-product" >
                                    <div class="part-1">
                                        <span class="new">Mới</span>				
                                    </div>
                                    <div class="part-2">
										<h3 class="product-title">Cam hành trình</h3>
                                    </div>
									<script>
											$(document).ready(function(){	/*ajax */
												var controller = "product";
												var action = "showbycategory";
												$('#product-11').click(function(){
													const category = "camera";
													$.ajax({
														url:"index.php",
														method:"GET",
														data:{controller:controller,action:action,type:category},		// là các parameter được binding 
														success:function(data){
															window.location.href = "index.php?controller="+controller+"&action="+action+"&type="+category;
														}
													})
												})
												
											})
									</script>
                            </div>
                        </div>
						<div class="col-md-6 col-lg-4 col-xl-3">
							
                            <div id="product-12" class="single-product" >
                                    <div class="part-1">
                                        <span class="new">Mới</span>				
                                    </div>
                                    <div class="part-2">
										<h3 class="product-title">Áo giáp</h3>
                                    </div>
									<script>
											$(document).ready(function(){	/*ajax */
												var controller = "product";
												var action = "showbycategory";
												$('#product-12').click(function(){
													const category = "armor";
													$.ajax({
														url:"index.php",
														method:"GET",
														data:{controller:controller,action:action,type:category},		// là các parameter được binding 
														success:function(data){
															window.location.href = "index.php?controller="+controller+"&action="+action+"&type="+category;
														}
													})
												})
												
											})
									</script>
                            </div>
                        </div>
				</div>
		</div>
</section>
<?php include "footer.php"; ?>