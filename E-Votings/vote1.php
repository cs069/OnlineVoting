<html>
<title>Status</title>
<body >
  <style type="text/css">
    .voted{
    width: 50%;
    background-color: 
#e3eff7
;
    border: 2px solid;
    padding: 100px;
      margin: 200px;
    color: black;
    font-size: 20px;
    }
    #inner
    {
      color: red;
    }
  </style>
<div class="voted">
<?php
	session_start();

	
  $mysqli1= new mysqli('localhost','root','','DEMO');
  //if (isset($_SESSION['username']) && isset($_SESSION['phone']) && isset($_SESSION['name'])) {
    # code...
   $name= $_SESSION['username'];
    //$phone =$_SESSION['phone'];
      $query1 = "select mobile from voter where voterid='$name'";
      //$phone=$mysqli1->query($query1);
      //echo "$phone";
      $phone =mysqli_query($mysqli1,$query1);
     // echo "$phone";
   $show = "insert into votedUsers  (username) values ('$name')";

    $count=$mysqli1->query($show,MYSQLI_STORE_RESULT);

     $que="select count from voter where voterid='$name'";
    $count=$mysqli1->query($que,MYSQLI_STORE_RESULT);
    $check=0;
    $row = mysqli_fetch_assoc($count);
    $value = $row['count'];
  //if count value is not zero than execute vote else not
    if($value ==$check)
{
	$val = $_POST['vote'];
	$q="update voter set count=1 where voterid='$name'";
	$mysqli1->query($q,MYSQLI_STORE_RESULT);
	$mysqli = new mysqli('localhost','root','','DEMO');
	$query = "update candidate set poll=poll+1 where voterCard='$val' ";
	$result = $mysqli->query($query,MYSQLI_STORE_RESULT);
	echo "You have voted $val . Congratulation msg will be send" ;
   

//$name=$_SESSION['username'];
//$email=$_SESSION['email'];
//$phone=$_SESSION['phone'];
// Create connection
//$sql = "INSERT INTO quote (name, email, phone)
//VALUES ('$name', '$email', '$phone')";
//if (mysqli_query($conn, $sql)) {
$authKey = "219217ACBqTE72rS5b17f79e";
$mobileNumber =$_SESSION['phone'];
//Sender ID,While using route4 sender id should be 6 characters long.
$senderId = "ABCDEF";
//Your message to send, Add URL encoding here.
$message = urlencode("Dear $name, You have voted $val. Keep it secret");
//Define route
$route = "route=4";
//Prepare you post parameters
$postData = array(
'authkey' => $authKey,
'mobiles' => $mobileNumber,
'message' => $message
,'sender' => $senderId,
'route' => $route
);
//API URL
$url="https://control.msg91.com/api/sendhttp.php";
// init the resource
$ch = curl_init();
curl_setopt_array($ch, array(
CURLOPT_URL => $url,
CURLOPT_RETURNTRANSFER => true,
CURLOPT_POST => true,
CURLOPT_POSTFIELDS => $postData
//,CURLOPT_FOLLOWLOCATION => true
));
//Ignore SSL certificate verification
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
//get response
$output = curl_exec($ch);


   //header("Location:textocal.php");

  //header("refresh:1;url=http://localhost/final/textocal.php");

  //include_once "textocal.php";
  //execute();
   //$Textlocal = new Textlocal(false, false, 'Qt/NCcNIofA-UPCMK1ntM5ex9hsExup43GHtCkmVOt');
    //$numbers = array(917002131838);
    //$sender = 'TXTLCL';
    //$message = "Congratulation, Dear $name you have voted $val is accepted ";
    //$response = $Textlocal->sendSms($numbers, $message, $sender);
      
    // echo "$message";
     //  header("refresh:20;url=http://localhost/finalvote1.php");

//	$q1="update voters set vname='$val' where voterid='$name'";
	//$mysqli1->query($q1,MYSQLI_STORE_RESULT);

 //header("refresh:;url=http://localhost/final/textocal.php");
}
else
{   $val = $_POST['vote'];
$name = $_SESSION['username'];
	$q2="select vname from voter where voterid='$name'";
    $vot=$mysqli1->query($q2,MYSQLI_STORE_RESULT);
    $v=mysqli_fetch_assoc($vot);
    $na=$v["vname"];
    echo "<div id=\"inner\"><center>";
    echo "<p>";
	echo "You have selected, ",$val;
  echo ".</p><p>";
  echo "Sorry, you cannot vote more than once.";
  echo "</p>";
  echo "</center></div>";
  header("refresh:5;url=http://localhost/kashi/E-Votings/vote.php");

	//header("refresh:3;url=http://localhost/final/vote1.php");
}
?>
</div>
</body>
</html>
