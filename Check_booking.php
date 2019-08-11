<!DOCTYPE html>
<html>
<head>
	<title>Checking</title>
	    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>
<body>
<?php 

$bookingDate		= $_POST['bookingDate'];
$bookingTime		= $_POST['time'];
$serviceRequired	= $_POST['serviceRequired'];
$vehicleType		= $_POST['vehicleType'];
$vehicleEngine		= $_POST['vehicleEngine'];
$vehicleMake		= $_POST['makeVehicle'];
$liscenceNumber		= $_POST['liscenceNumber'];
$liscenceDate		= $_POST['liscenceDate'];
$comments			= $_POST['comments'];
$erro 			 	= 0;

//Ckeking if are empty fields

if (empty($bookingDate)) {
	echo "Please pick a date.<br>";
	$erro = 1;
}

if (empty($bookingTime)) {
	echo "Please pick a Time.<br>";
	$erro = 1;
}

if (empty($serviceRequired)) {
	echo "Please pick a Service.<br>";
	$erro = 1;
}

if (empty($vehicleType)) {
	echo "Please pick a Vehicle Type.<br>";
	$erro = 1;
}


if (empty($vehicleEngine)) {
	echo "Please pick a Vehicle Engine.<br>";
	$erro = 1;
}

if (empty($vehicleMake)) {
	echo "Please pick a Vehicle Make.<br>";
	$erro = 1;
}


if (empty($liscenceNumber)) {
	echo "Please type a Licence Number.<br>";
	$erro = 1;
}

if (empty($liscenceDate)) {
	echo "Please insert a Liscence date.<br>";
	$erro = 1;
}

//Verifica se o campo comentarios está vazio
if (empty($comments)) {
	echo "Insert your Comments.<br>";
	$erro = 1;
}

//Verifica se não houve erro - neste caso chama a include para inserir os dados
if ($erro == 0) {
	echo "Your comment is ready.<br>";
	include 'bookingscript.inc';
}

 ?>
</body>
</html>