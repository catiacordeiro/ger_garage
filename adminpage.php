https://medium.com/@guimenegussi/criando-um-calend%C3%A1rio-de-eventos-din%C3%A2micos-com-php-ajax-e-fullcalendar-js-6cc21634b1a4

<!DOCTYPE html>
<?php 
include "config.php";
session_start();
if((!isset ($_SESSION['username']) == true) and (!isset ($_SESSION['password']) == true)and  (!isset ($_SESSION['id_profile']) == 1) )
{
  unset($_SESSION['username']);
  unset($_SESSION['password']);
  header('location:login.php');
  }
 
$logado = $_SESSION['username'];
echo "$_SESSION['username']";
?>

<head></head>>
<body>

</body>

