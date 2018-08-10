<?php
session_start();
unset($_SESSION['username']);
session_destroy();
	# code...

header("location:index.php");

?>