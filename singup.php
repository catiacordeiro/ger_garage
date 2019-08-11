<?php 

include 'config.php';

$name			= $_POST['name'];
$username     	= $_POST['username'];
$email      	= $_POST['email'];
$password       = $_POST['password'];
$rpassword      = $_POST['rpassword'];
$address      	= $_POST['address'];
$city         	= $_POST['city'];
$postCode       = $_POST['postCode'];
$phoneNumber 	= $_POST['phoneNumber'];


$encriptpassword = md5($password);

$sql = "INSERT INTO users(name, email, username, password, date_sing_up, id_profile, address, city, postcode, phone_number) VALUES";
$sql .= "('$name','$email','$username','$password', NOW(),'2','$address', '$city', '$postCode', '$phoneNumber')";





if ($con->query($sql) === TRUE) {
	header('Location: login.php');
	echo"<script language='javascript' type='text/javascript'>alert('Sing up successfuly!')";
	echo "<script type='javascript'>alert('Sing up successfuly');";
echo "javascript:window.location='login.php';</script>";
	
	
} else {
	echo "Erro: " . $sql . "<br>" . $con->error;
}

$con->close();






