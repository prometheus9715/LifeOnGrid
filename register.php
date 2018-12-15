<?php
session_start();
//session variables
$_SESSION['name'] = $_POST['name'];
$_SESSION['emailid'] = $_POST['emailid'];

//escape all variables
$name = $mysqli->real_escape_string($_POST['name']);
$email = $mysqli->real_escape_string($_POST['emailid']);
$password = $mysqli->real_escape_string($_POST['password']);


$result = $mysqli->query("SELECT * FROM user WHERE email='".$email."'") or die($mysqli->error);

if($result->num_rows > 0)
{
	$_SESSION['message'] = 'Entered user already exists! Please retry!';
	header("location: error.php");
}

else
{
	$sql = "INSERT INTO user (name, email, pass) values ('".$name."', '".$email."', '".$password."')";
	if( mysqli_query($mysqli, $sql))
	{
		
		$_SESSION['logged_in'] = true;
		header("location: profile.php"); 

	}

	else
	{
		$_SESSION['message'] =" Registration Failed!";
		header("location: error.php");
	}

}

?>