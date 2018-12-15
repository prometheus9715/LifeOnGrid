<?php
	require 'config.php';
	session_start();
?>


<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<link rel="stylesheet" href="signup2-4styles.css">
	
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

	<?php
		if(isset($_POST['sign-up']) )
		{
			if ($_POST['password']==$_POST['re-password'])
				require 'register.php';

			else
			{
				$_SESSION['message'] = "Entered Passwords don't match. Please retry!";
				header("location: error.php");
			}
		}

	?>
	
	
	

	<title>LifeOnGrid</title>

</head>

<body>

	<div class="flex-container" style="padding: 0px; margin: 0px;">
		
			<form action="" method="POST">
				<div class="box1 box">
					<h1 class="big-font">Lets prepare for<br>Launch!</h1>
					
					<br>
					
					<div class="form-group">
					  <label class="smallest-font" for="name">NAME</label>
					  <input type="text" class="form-control small-font" id="name" placeholder="Enter your name" name="name">
					
					<br>
					
						<label class="smallest-font" for="email">EMAIL ADDRESS</label>
						<input type="text" class="form-control small-font" id="email" placeholder="example@example.com" name="emailid">
						<br>
					
					  	<label class="smallest-font" for="pwd">PASSWORD</label>
					  	<input type="password" class="form-control small-font" id="pwd" placeholder="Enter your password" name="password">
						<br>
						
					  	<label class="smallest-font" for="re-pwd">RETYPE PASSWORD</label>
					  	<input type="password" class="form-control small-font" id="re-pwd" placeholder="Enter your password" name="re-password">
					</div>


					<br><br>

					<button type="submit" class="btn btn-default button" id="sign-up" name="sign-up">Sign Up</button>
				</div>
			</form>	
		
		<div class="box2 box">
			<h1 class="big-font " align="center"><br>Easy as 1-2-3</h1>
			<br><br>
			<p class="small-font" align="center">DesignShare is the simplest<br> way to share your designs<br> around the world.</p>
			<br><br><br><br><br><br><br><br>
			<p class="small-font" align="center"> Already have an account? &emsp;<a href="index.php"><font color="#FFF3F3"><u>Signin</u></font></a></p> 
			

		</div>
	
	</div>


</body>
</html>
