<?php

include('includes/db.php');

$login = $_POST['login'];
$password = $_POST['password'];

$count = mysqli_query($connection, "SELECT * FROM `users` WHERE `login` = '$login' AND `password`= '$password'");

if (mysqli_num_rows($count) == 0 )
{
	header("Location: ".$address_site."/admin_mode.php", 3000);
} else 
{	
    header("Location: ".$address_site."/admin.php", 3000);
}
?>
