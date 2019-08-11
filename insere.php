////// Insert data in contactus\\\\\

<?php 

include 'config.php';

$first_name     = $_POST['first_name'];
$last_name      = $_POST['last_name'];
$county         = $_POST['county'];
$comments       = $_POST['comments'];


$sql = "INSERT INTO contact() VALUES";
$sql .= "(NOW(),'$first_name', '$last_name','$county','$comments')";

if ($con->query($sql) === TRUE) {
	echo '<script> alert("Message sent successfuly");</script>';
	header('Location: contactus.html');
} else {
	echo "Erro: " . $sql . "<br>" . $con->error;
}
echo '<script>alert("Message sent successfuly");</script>';
$con->close();
?>




