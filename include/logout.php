<?php
	session_start();
	session_destroy();
	unset($_SESSION['loggedInId']);
	unset($_SESSION['loggedInType']);
	header("location:../");
?>