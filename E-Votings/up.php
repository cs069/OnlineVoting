
<?php
  //echo $_POST['vote1'];
  //require_once 'vote1.php';
  //echo $_POST['vote1'];
  $val = $_POST['update'];
  $mysqli = new mysqli('localhost','root','','DEMO');
  $query = "update candidate set verified=1 where voterCard='$val'";
  $result = $mysqli->query($query,MYSQLI_STORE_RESULT);
//  echo "you have voted $val";
   $val = $_POST['reject'];
  $mysqli = new mysqli('localhost','root','','DEMO');
  $query = "update candidate set verified=2 where voterCard='$val'";
  $result = $mysqli->query($query,MYSQLI_STORE_RESULT);
//  echo "you have voted $val";
 // header("refresh:url;http://localhost/kashi/E-Votings/AdminHome.php");
  header("location:AdminHome.php");
?>

