<!DOCTYPE html>
<html>
<head>
	<title>Checking</title>
	    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>
<body>
<?php 

$first_name     = $_POST['first_name'];
$last_name      = $_POST['last_name'];
$county         = $_POST['county'];
$comments       = $_POST['comments'];
$erro 			 = 0;

//Verifica se o campo nome não está em branco
if (empty($first_name)) {
	echo "Please insert you First Name.<br>";
	$erro = 1;
}

//Verifica se o campo email está preenchido corretamente
/*if (strlen($email)< 8 || strstr($email, '@')==false) {
	echo "Favor digitar o seu email corretamente.<br>";
	$erro = 1;
}
*/
    
//Verifica se o campo cidade está em branco
if (empty($last_name)) {
	echo "Please insert you First Name.<br>";
	$erro = 1;
}

//Verifica se o campo estado está preenchido com 2 digitos
if (empty($county)) {
	echo "Please type a county.<br>";
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
	include 'insere.inc';
}

 ?>
</body>
</html>