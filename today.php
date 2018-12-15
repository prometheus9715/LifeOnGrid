<?php 
			session_start();

			require 'config.php';
			

			$date=$_POST['date'];
			$email=$_SESSION['emailid'];


			$result = $mysqli->query("SELECT * FROM block where email= '".$email."' AND dateval= '".$date."'") or die($mysqli->error);



if($result->num_rows==0)
{	
	$hi = "hi";
	echo $hi;
}

else
{
	$user= $result->fetch_assoc();
	$obj= $user['array'];
	echo $obj;
	
	/*echo '<script type="text/javascript">';
	echo 'dataarr = JSON.parse('.$obj.');';
	echo '</script>';*/
}

		?>
