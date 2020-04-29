<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="signupform.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<title></title>
	<style type="text/css">
	
	</style>
</head>
<body>
	<div class="form">
		<h1>Signup</h1>
		<div class="input-box">
			<i class="fa fa-user-circle-o"></i>

			<input type="text" placeholder="Username" name="">
		</div>
		<div class="input-box">
			<i class="fa fa-envelope-o" aria-hidden="true"></i>

			<input type="email" name="" placeholder="Email">
			
		</div>
		<div class="input-box">
			<i class="fa fa-location-arrow" aria-hidden="true"></i>
			<input type="text" placeholder="Your Address" name="">
		</div>
		<div class="input-box">
			<i class="fa fa-unlock-alt" aria-hidden="true"></i>

			<input type="password" placeholder="Password" id="password" name="">
			<span class="eye" onclick="myfunction()">
			<i class="fa fa-eye" id="show" aria-hidden="true"></i><i class="fa fa-eye-slash" id="hide" aria-hidden="true"></i>
</span>

		</div>
		<input type="submit" class="login" value="Signup" name="signup">
		
	</div>
	<script type="text/javascript">
		function myfunction(){
			var x=document.getElementById("password");
			var y=document.getElementById("show");
			var z=document.getElementById("hide");

			if(x.type==='password')
			{
				x.type="text";
				y.style.display="none";
				z.style.display="block";
			}
			else{
				x.type="password";
				y.style.display="block";
				z.style.display="none";
			}
		}
	</script>
</body>
</html>