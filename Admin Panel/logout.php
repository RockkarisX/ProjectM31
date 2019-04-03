<?php
 session_start();

 if(isset($_SESSION['username'])){

 	unset($_SESSION['username']);

 	echo 'logged out Successfully' ;

    header('refresh: 2; URL = stafflogin.php');
 }

 else {
 	header("Location: LoginPage.php");
 }

?>