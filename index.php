<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Oleo+Script+Swash+Caps&display=swap" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

	<style type="text/css">
		*{
			font-family: 'Oleo Script Swash Caps', cursive;
		}
		.main{
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			width: 600px;
			height: auto;
			border-radius: 12px;
			border: 2px solid red;
			font-size: 25px;
		}
		.textbox{
			width: 80%;
			height: 35px;
			border-radius: 12px;
			border: 1px solid blue;
			outline: none;
			font-size: 19px;
			padding-left: 5px;
		}
		#frm{
			width: 100%;
		}
		.btn{
			width: 60%;
			height: 30px;
			border: 0;
			border-radius: 10px;
			outline: none;
			cursor: pointer;
			margin-top: 20px;
			margin-bottom: 20px;
			background: pink;
			color: blue;
			font-size: 20px;
		}
		.btn:active{
			background: red;
		}
	</style>
</head>
<body>
	<center>
		<div class="main">
			<form method="POST" id="frm" onsubmit="return submitFun()">
				<h2>Sign Up</h2>
				<div style="margin-bottom: 20px;">
					<input type="text" name="fname" class="textbox" autocomplete="off" required placeholder="Enter your full name">
					<span style="color: red;">*</span>
				</div>
				<div style="margin-bottom: 20px;">
					<input type="email" name="email" class="textbox" autocomplete="off" required placeholder="Enter your email">
					<span style="color: red;">*</span>
				</div>
				<div style="margin-bottom: 20px;">
					<input type="password" name="password" class="textbox" autocomplete="off" required placeholder="Enter your password">
					<span style="color: red;">*</span>
				</div>
				<div style="margin-bottom: 20px;">
					<input type="text" name="contact" class="textbox" autocomplete="off" required placeholder="Enter your phone number">
					<span style="color: red;">*</span>
				</div>
				<input type="submit" name="submit" class="btn" value="Signup">
			</form>
		</div>
	</center>

	<script type="text/javascript">
		function submitFun(){
			$.ajax({
				type: 'POST',
				url: 'insert.php',
				data: $('#frm').serialize(),
				success: function(data){
					alert(data);
					location.reload();
				}
			});
			return false;
		}
	</script>

</body>
</html>