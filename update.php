<?php

require 'config.php';
session_start();

echo "working";

$email = $_SESSION['emailid'];
$data = $_POST['details'];
$date = $_POST['date'];

echo $email.$data.$date;

$result = $mysqli->query("SELECT * FROM block where email= '".$email."' AND dateval= '".$date."'") or die($mysqli->error);



if($result->num_rows==0)
{
	$sql = "INSERT INTO block (email, dateval, array) values ('".$email."', '".$date."', '".$data."')";
	mysqli_query($mysqli, $sql);
}

else
{
	
	$sql = "UPDATE block SET array='".$data."' where email= '".$email."' AND dateval= '".$date."'" ;
	mysqli_query($mysqli, $sql);
}

?>