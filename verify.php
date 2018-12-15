<?php

require 'config.php';
session_start();

if(isset($_GET['emailid']) && !empty($_GET['emailid']) AND isset($_GET['hash']) && !empty($_GET['hash']))
{
	$emailid = $mysqli->escape_string($_GET['emailid']);
	$hash = $mysqli->escape_string($_GET['hash']);


	$result = $mysqli->query("SELECT * FROM user WHERE emailid="$emailid" AND hash = "$hash" AND active="0" ");

	if($result->num_rows == 0)
	{
		$_SESSION['message'] = "Account Already Activated OR the URL is invalid";
		header("location : error.php");
	}

	else
	{
		$_SESSION['message']="Your Account has been activated!!";

		$mysqli->query("UPDATE user SET active = '1' WHERE emailid="$emailid"") or die($mysqli->error);

			$_SESSION['active'] = 1;

			header("location: success.php");
	}
}

else
{
	$_SESSION['message'] = "Invalid parameters provide for account verifification!";
	header("location: error.php");
}


?>