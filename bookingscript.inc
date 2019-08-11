<?php 
include 'config.php';
session_start();
include 'config.php';
	if(!isset($_SESSION['active'])) {
		header("location:login.php");

$id_user 			= $_SESSION['id_user'];
$bookingDate		= $_POST['bookingDate'];
$bookingTime		= $_POST['time'];
$serviceRequired	= $_POST['serviceRequired'];
$vehicleType		= $_POST['vehicleType'];
$vehicleEngine		= $_POST['vehicleEngine'];
$vehicleMake		= $_POST['makeVehicle'];
$liscenceNumber		= $_POST['liscenceNumber'];
$liscenceDate		= $_POST['liscenceDate'];
$comments			= $_POST['comments'];


$sql = "INSERT INTO vehicle(id_vehicle, id_type_vehicle, id_make_vehicle, id_vehicle_engine, licence_number, licence_expired_date,cc)  VALUES";
$sql .= "(null,'$vehicleType','$vehicleMake','$vehicleEngine','$liscenceNumber','$liscenceDate',NOW())";

$sql1 = "INSERT INTO booking(id_user,date_booking, time, comments, id_status_booking,tt) VALUES";
$sql1 .= "('$id_user','$bookingDate','$bookingTime','$comments', '1', NOW())";


if ($con->query($sql) and $con->query($sql1) === TRUE) {
	header('Location: bookings.php');
	echo "Successfuly";
	
	
} else {
	echo "Erro: " . $sql . "<br>" . $con->error;
}
}
$con->close();
?>