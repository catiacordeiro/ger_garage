<?php

$login = $_POST['username'];
$enter = $_POST['enter'];
$password = $_POST['password'];
$sql = "SELECT * FROM users WHERE username = '$login' AND password = '$password'";
$id_user =$_SESSION["id_user"];

try {
  require_once 'pdo_connect.php';
} catch (Exception $e) {
  $error = $e->getMessage();
}
if (isset($error)) {
  echo "<p>$error</p>";
}   

?>


<?php
    if (isset($enter)) 
    
    {    
      $verify = $db->query($sql);
      
        if ($verify->fetchColumn()==0)
        {
            header('Location: login_error.php');
            
        }else{
            $username = $db->query("SELECT username FROM users WHERE username = '$login'");
            $id = $db->query("SELECT id_user FROM users");
            session_start();
            $_SESSION["loggedIn"]=1;
            $_SESSION["username"]=$login;
            $_SESSION["id_user"]= $id_user;
            header('Location: bookings.php');
            }
        }
        
      ?>

