
<?php
	//echo $_POST['vote1'];
	//require_once 'vote1.php';
	//echo $_POST['vote1'];
	$val = $_POST['delete'];
	$mysqli = new mysqli('localhost','root','','DEMO');
	$query = "delete from candidate where voterCard='$val'";
	$result = $mysqli->query($query,MYSQLI_STORE_RESULT);
//	echo "you have voted $val";
	header("refresh:url;http://localhost/kashi/E-Votings/delete.php");
?>

