<?php

include('includes/db.php');

$login = $_POST['login'];
$password = $_POST['password'];

$count = mysqli_query($connection, "SELECT * FROM `users` WHERE `login` = '$login' AND `password`= '$password'");

if (mysqli_num_rows($count) == 0 )
{
	header("Location: ".$address_site."/user_mode.php", 3000);
} else 
{	
    header("Location: ".$address_site."/user.php", 3000);
}
?>



