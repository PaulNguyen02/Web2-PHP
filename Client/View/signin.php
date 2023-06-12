<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="img/logo.jpg" rel="icon" type="image/x-icon">
	<link rel="stylesheet" href="css/signin.css">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src='https://www.google.com/recaptcha/api.js?hl=vi'></script> <!-- Google captcha API -->
	<title>Document</title>
	<style>
		#signup
		{
			text-decoration: none;
			color: #3B3B3B;
		}
	</style>
</head>
<body>
	<div class="parent clearfix">
		<div class="bg-illustration">	
		  <div class="burger-btn">
			<span></span>
			<span></span>
			<span></span>
		  </div>
	
		</div>
		
		<div class="login">
		  <div class="container">
			<h1>Đăng nhập</h1>
		
			<div class="login-form">
			  <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"])."?controller=signin&action=login";?> method="post">
					UserName:<input id="username" type="text" placeholder="Nguyenthanhha" name="username">
					Password:<input id="password" type="password" placeholder="12345" name="pass">											
					<div class="g-recaptcha" data-sitekey="6Lc7qQsmAAAAAD4KHU04xef_E6OYf0cUQPpSlgwz"></div>						
					<button id="loginbtn" type="submit">Đăng nhập</button>
					<a href="index.php?controller=signup&action=show" id="signup">Bạn chưa có tài khoản ? Hãy đăng ký</a>
			  </form>
			</div>		
		</div>
	</div>
</div>
</body>
<script>
	$("#loginbtn").on("click", function(){
		const form = document.querySelector('form');
    const username = document.getElementById('username');
    const password = document.getElementById('password');

    form.addEventListener('submit', function(event) {
        event.preventDefault(); // ngăn chặn form được gửi đi mặc định
  
        if (username.value.trim() === '') {
            alert('Vui lòng nhập tên đăng nhập!');
        return;
        }
  
        if (password.value.trim() === '') {
            alert('Vui lòng nhập mật khẩu!');
        return;
        }
		// nếu các trường không bị để trống, gửi form đi
		this.submit();
});

		}
	)
    
</script>
</html>