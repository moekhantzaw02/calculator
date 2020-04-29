<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<title></title>
	<style type="text/css">
		*{
			margin:0;
			padding:0;
		}
		body{
			background-image: url(images/upain.jpg);
			background-size: cover;
		
			font-family: arial;
		}
		.form{
			width:500px;
			background:rgba(0,0,0,0.6);
			margin:12% auto;
			padding:50px 0;
			color:#fff;
			box-shadow: 0 0 20px 2px rgba(0,0,0,0.5) ;
		}
		h1{
			text-align: center;
			margin-botton:40px;
		}
		.input-box{
			margin:31px auto;
			width:80%;
			border-bottom:1px solid #fff;
			padding-top:10px;
			padding-bottom:5px;
		}
		.input-box input{
			width:90%;
			border:none;
			outline:none;
			background: transparent;;
			color:white;
		}
	.fa{
		margin-right:10px;
	}
	.eye{
		position: absolute;
	}
	#hide{
		display:none;
	}
	.login{
		margin:40px auto 20px;
		width:80%;
		display:block;
		outline: none;
		padding:10px 0;
		border:1px solid #fff;
		cursor:pointer;
		background:transparent;
		font-size:16px;
		color:white;
	}
	</style>
</head>
<body>
	<div class="form">
		<h1>Login</h1>
		<div class="input-box">
			<i class="fa fa-user-circle-o"></i>

			<input type="text" placeholder="Username" name="">
		</div>
		<div class="input-box">
			<i class="fa fa-unlock-alt" aria-hidden="true"></i>

			<input type="password" placeholder="Password" id="password" name="">
			<span class="eye" onclick="myfunction()">
			<i class="fa fa-eye" id="show" aria-hidden="true"></i><i class="fa fa-eye-slash" id="hide" aria-hidden="true"></i>
</span>

		</div>
		<button type="button" class="login">Login</button>
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