<?php
session_start();
unset($_SESSION['Ausername']);
session_destroy();
	# code...

header("location:index.php");

?>