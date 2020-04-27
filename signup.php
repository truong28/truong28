
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Official Signup Form Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- fonts -->

<!-- /fonts -->
<!-- css -->

<link rel="stylesheet" type="text/css" href="css/sigup.css"/>
<!-- /css -->
<link href="//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
</head>

<body>

<div class="content-w3ls" style="background-image: url(images/login1.jpg)">
	
	
	<div class="content-agile2" style="padding-bottom: 10px">
		<h2 class="agileits1" > <a href="index.php">Tourguide website</a> </h2>
		<form action="#" method="post">
			<div class="form-control w3layouts" > 
				<input type="text" name="txtuser" id="firstname" placeholder="Name" title="không được để trống" required="" w>
			</div>

			<div class="form-control w3layouts" >	
				<input type="email" id="email" name="txtemail" placeholder="mail@example.com" title="mail không hợp lệ" required="">
			</div>

			<div class="form-control agileinfo" >	
				<input type="password" class="lock" name="txtpass" id="password1" placeholder="Password" required="">
			</div>	

			<div class="form-control agileinfo" s>	
				<input type="tel"  name="number phone" placeholder="numberphone" id="phone" required="">
			</div>		
				
			

			<input type="submit" name="nut" id="nut" class="register" value="Đăng kí" style="margin-bottom: 40px ">
		</form>
       
        
		<script type="text/javascript">
			window.onload = function () {
				document.getElementById("password1").onchange = validatePassword;
				document.getElementById("password2").onchange = validatePassword;
			}
			function validatePassword(){
				var pass2=document.getElementById("password2").value;
				var pass1=document.getElementById("password1").value;
				if(pass1!=pass2)
					document.getElementById("password2").setCustomValidity("Passwords Don't Match");
				else
					document.getElementById("password2").setCustomValidity('');	 
					//empty string means no validation error
			}
		</script>
		
	</div>
	<div class="clear"></div>
</div>

</body>
</html>