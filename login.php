<?php
session_start();

$email = $mysqli->real_escape_string($_POST['emailid']);
$password = $mysqli->real_escape_string($_POST['password']);

$result = $mysqli->query("SELECT * FROM user where email= '".$email."'");


if($result->num_rows == 0)
{
	$_SESSION['message']="User with that email ID does not exist!";
	header("location: error.php");
}

else
{
	$user= $result->fetch_assoc();

	if($password==$user['pass'])
	{
		$_SESSION['emailid'] = $user['email'];
		$_SESSION['name'] = $user['name'];
		$_SESSION['logged_in'] = true;

		header("location: profile.php");
	}

	else
	{
		$_SESSION['message']="Invalid Credentials!! Please try again.";
		header("location: error.php");
	}
}

?>