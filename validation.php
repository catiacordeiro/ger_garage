<!DOCTYPE html>
<html>
<head>
	<title>Checking</title>
	    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>
<body>
<?php 

$username     	= $_POST['username'];
$email      	= $_POST['email'];
$password       = $_POST['password'];
$rpassword      = $_POST['rpassword'];
$erro 			 = 0;

//Verifica se o campo nome não está em branco
if (empty($username)) {
	echo "Please insert you Username.<br>";
	$erro = 1;
}

//Verifica se o campo email está preenchido corretamente
if (strlen($email)< 8 || strstr($email, '@')==false) {
	echo "Please insert a email valid.<br>";
	$erro = 1;
}

    
//Verifica se o campo cidade está em branco
if (empty($password)) {
	echo "Please insert your Password.<br>";
	$erro = 1;
}

//Verifica se o campo cidade está em branco
if (empty($rpassword)) {
	echo "Please insert confirmation Password.<br>";
	$erro = 1;
}

if ($password != $rpassword){
	echo "Password not equal<br>";
	$erro = 1;

}

//Verifica se não houve erro - neste caso chama a include para inserir os dados
if ($erro == 0) {
	echo "Your comment is ready.<br>";
	include 'singup.inc';
}

 ?>
</body>
</html>