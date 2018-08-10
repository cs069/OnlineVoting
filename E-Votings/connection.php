<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>::..election::..</title>
</head>

<body>
<?php
$dbServername = "localhost";
$dbPassword = "";
$dbUsername = "root";
$dbName = "DEMO";
//for connecting to database
$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
if ($conn->connect_error) {
	echo "Failed to connect";
	# code...
}
else
?>
</body>
</html>
