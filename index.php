 <?php
   require 'config.php';
   session_start();
		
		if(isset($_POST['sign-in']))
		{
		   if(!empty($_POST['password']) && !empty($_POST['emailid']))
		   {
		   		require 'login.php';
		   } 
		   
		   else
		   {
		   	$_SESSION['message']="Please fill in the details!";
		   	header("location: error.php");
		   }
		}  
?>


<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<link rel="stylesheet" href="new-styles.css">
	
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	
	
	

	<title>LifeOnGrid</title>

</head>

<body>

	<div class="flex-container" style="padding: 0px; margin: 0px;">
		<div class="box1">

			<h1 class="big-font " align="center">New here?</h1>
			<br><br>
			<p class="small-font" align="center">Sign up and discover great<br> experience!</p>

			
			<div style="padding-top: 47%; padding-bottom: 10%">
			<a href="signup2-4.php"><button type="button" class="btn btn-default button" id="get-started">Get Started</button></a>
			</div>	

		</div>

		<div class="box2">
			
			<h1 class="big-font">Welcome Back!</h1>
			<br>
			<h2 class="small-font grey">Enter your details below</h2>
			<br><br><br>

			<form method="POST" action="">

					<div class="form-group">
					  <label class="smallest-font" for="email">EMAIL ADDRESS</label>
					  <input type="email" class="form-control small-font" id="email" placeholder="example@example.com" name="emailid">
					
					  <br>
					
				  	  <label class="smallest-font pass" for="pwd" style="width: 100%">PASSWORD</label>
								  	 
				  	  <input type="password" class="form-control small-font" id="pwd" placeholder="Enter your password" name="password">

				  	  
					  <div style="padding-top: 20%">
				  	  <button type="submit" class="btn btn-default button" id="sign-in" name="sign-in">Sign In</button>
					  </div>
			  	
				  	</div>  
  	        
  	        </form>


			   <div >
					<p align="center"><a href="sentemail.php"><font color="#000000" class="smallest-font grey"><u>Forgot password?</u></font></a></p>
			   </div>
  	      
	  	      <div style="padding-top: 5%; padding-bottom: 2%;">
		  	  <p class="small-font grey" align="center"> Don't have an account? &nbsp;<a href="signup2-4.php"><font color="#000000"><br>Sign up now</font></a></p> 
			  </div>

			
		</div>

	</div>



</body>
</html>