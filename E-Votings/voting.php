
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>E-Voting: Apply page</title>
<link rel="stylesheet" type="text/css" href="__styles/main__$tyle.css" />
<link rel="stylesheet" href="__styles/menu/style.css" type="text/css" />
<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" src="__styles/functions.js"></script>
<style type="text/css">
div#bo__dy div#bo__dy_conts {overflow: scroll;}
#recents1 {
  text-align: center;
  font-size: 20px;
  margin-top:0px;
  margin-left: 20px;
}
#tag{
    text-align: center;
}
</style>
</head>

<body>
 <div id="whole">  
  <div id="hEa__d">
     
      <div id="lo__go">
      <img src="__styles/logo.png" style="position: relative; bottom:-43px; left:-1px;" />
   </div>
   <div id="ba__nner">
      <img style=" position:relative; top:0px; left:20px;" src="__styles/banner.png"/>
    
   </div>
  </div>
  <div id="me__nu">
  <div id="menu">
<ul id="css3menu1" class="topmenu">
    <li class="topmenu"><a href="index.php" style="width:135px;height:21px;line-height:21px;"><img src="__styles/menu/house.png" alt=""/>Home</a></li>
    <li class="topfirst"><a href="voting.php" style="width:136px;height:21px;line-height:21px;" id="active"><img src="__styles/menu/tick.png" alt=""/>Apply for Candidate</a></li>
    <?php session_start();
  if(isset($_SESSION['username'])) { ?>
    <li class="topmenu" ><a href="login.php"   style="width:136px;height:21px;line-height:21px;"><img src="__styles/menu/door_in.png" alt=""  />Voting</a></li>
   
<?php  }else{ ?>
  <li class="topmenu" ><a href="register.php"   style="width:136px;height:21px;line-height:21px;"><img src="__styles/menu/door_in.png" alt=""  />Voters Registration</a></li>
 <?php }?>
    <?php 
  if(isset($_SESSION['username'])) { ?>
    <li class="topmenu" onclick="myFunction()"><a href="login.php"   style="width:136px;height:21px;line-height:21px;"><img src="__styles/menu/door_in.png" alt=""  />Login</a></li>
   <script>
      function myFunction() {
      alert("You are already login");}
  </script>
<?php  }else{ ?>
  <li class="topmenu" onclick="myFunction()"><a href="login.php"   style="width:136px;height:21px;line-height:21px;"><img src="__styles/menu/door_in.png" alt=""  />Login</a></li>
 <?php }?>
    <?php 
  if(isset($_SESSION['username'])) { ?>
    <li class="topmenu" ><a href="adminLogout.php"   style="width:136px;height:21px;line-height:21px;"><img src="__styles/menu/door_in.png" alt=""  />Logout</a></li>
  
<?php  }else{ ?>
  <li class="topmenu" ><a href=""   style="width:136px;height:21px;line-height:21px;"><img src="__styles/menu/door_in.png" alt="" />Admin</a>
  <ul>
    <li><a href="adminLogin.php">Login</a></li>
  </ul>
 <?php }?>
</ul>
</div>
  
  </div>
  <div id="bo__dy">
     <div id="bo__dy_pub">
       <div id="recents">
     <?php 
      
     include "connection.php";
     //session_start();
     if (isset($_SESSION['username'])) {
      ?>  <b style="color: black; margin-left: 100px"><strong> Profile </strong></b><br><br>
<?
      # code...
     
    $name= $_SESSION['username'];
    
   // echo "$name";
    // session_start();
     $sql = "SELECT * FROM voter WHERE voterid = '$name'";
     $result = mysqli_query($conn,$sql);
     if ($result !== false) {
         $row = mysqli_fetch_array($result);
        ?> Name: <a  style="color:green; padding:30px; font-size: 16px;"><?php echo $row['name']; ?></a><br>
        PanCard: <a   style="color:green; padding: 9px; font-size: 16px;"><?php echo $row['panCard']; ?></a>
        <br>
        Mobile: <a   style="color:green; padding: 25px; font-size: 16px;"><?php echo $row['mobile']; ?></a><br>
        <a style="cursor: pointer;" href="logout.php">Log Out</a>
  <?
         // . $row['mothername'];
     }} else {
       // an error has occured
     ?>   <img src="files/index.png" />
      <p>Vote for Hagrama Mahilary party BPF <A href="https://economictimes.indiatimes.com/topic/BPF-chief-Hagrama-Mohilary"> News  </A></p>
     
     

       <?php      }
?>
        
     </div>
       <div id="recents">
          <img src="files/bjp1.jpg" />
          <p>Vote for Bharatiya Jhanata Party <A href="http://www.bjp.org/"> Click here for news </A></p>
       </div>
       <div id="recents1">
       <br ><a class="tag" >    Time Remaining </a>
          <p id="demo"></p>

<script>
// Set the date we're counting down to
var countDownDate = new Date("june 17, 2018 09:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        window.location.href = 'end.php';
        //document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);
</script>

       </div>
     </div>
     <div id="bo__dy_conts">
      <?php 
if(isset($_POST['Register']))
{
include "connection.php";
 $inFullname = $_POST["VoterCard"]; // as the method type in the form is "post" we are using $_POST otherwise it would be $_GET[]
 $pan = $_POST["pancard"];
 $sname = $_POST["sname"];
  $cname = $_POST["cname"];
$FatherName = $_POST["Fname"];
$MotherName = $_POST["Mname"];
$pname = $_POST["pname"];
$dob = $_POST["DoB"];
$comments = $_POST["comments"];
$mobile = $_POST["mobile"];
$sex = $_POST["sex"];
$symbol = $_POST["symbol"];
$district = $_POST["District"];  
$centre = $_POST["VotingCenter"];


$one=" INSERT INTO candidate (voterCard,panCard,shortPartyName,candidateName,fullPartyName,fathername,mothername,dob,descr,mobile,sex,symbol,district,centre) VALUES ('$inFullname','$pan','$sname','$cname','$pname','$FatherName','$MotherName','$dob','$comments','$mobile','$sex','$symbol','$district','$centre')";
$result=mysqli_query($conn,$one);
 //session_start();
 //$mobile1=$_SESSION['mobile'];
     

if($result)
{
echo"<center><u><h4><font color='#003300'><H3>Congratulation,</h3></font></h4></u></center>";
echo"<center><u><h4><font color='#003300'><H3>You have Successfully submitted candidate application form !</h3></font></h4></u></center>";?> <a href="index.php">View Status</a><?php
echo "<font color='#003300'><p>Now you have to wait to get confirmation; which will give you a power to elect. View
your Candidate Status on this website.</font></p>";
//Your authentication key
$authKey = "219217ACBqTE72rS5b17f79e";
//Multiple mobiles numbers separated by comma
$mobileNumber = $_POST["mobile"];
//Sender ID,While using route4 sender id should be 6 characters long.
$senderId = "ABCDEF";
//Your message to send, Add URL encoding here.
//$rndno=rand(1000, 9999);
$message = urlencode("You have Successfully submitted candidate application form, Stay with us.");
//Define route
$route = "route=4";
//Prepare you post parameters
$postData = array(
'authkey' => $authKey,
'mobiles' => $mobileNumber,
'message' => $message,
'sender' => $senderId,
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
//Print error if any


}
}
?>
     <fieldset><legend><h3>Register here</h3></legend>
            <strong class="desing">Click Here to know Terms and Conditions </strong> <a href="http://wiki.wikimedia.in/Election_Rules">Check</a> 
<form method="post" enctype="multipart/form-data" id="usrform"><table width="500" height="100" background bgcolor="#FFFFFF"align="center"  bgcolor="#CCCCCC">
<tr><td><span class="legend">VoterCard :<span style="color:#FF0000;">*</span></span></td><td><input type="text" name="VoterCard" class="desing" required /></td></tr><tr>
<td><span class="legend">Pan Card <span style="color:#FF0000;">*</span></span></td><td><input type="text" name="pancard" class="desing" required/></td></tr>
<tr>
<td><span class="legend">Short Form (eg. BJP, BPF) <span style="color:#FF0000;">*</span></span></td>
<td><input type="text" name="sname" class="desing" required/></td></tr>

<tr><td><span class="legend">Candidate Name<span style="color:#FF0000;">*</span></span></td><td><input type="text" name="cname"  class="desing" required /></td></tr>
<tr><td><span class="legend">Father's Name<span style="color:#FF0000;">*</span></span></td><td><input type="text" name="Fname"  class="desing" required /></td></tr>
<tr>
<td><span class="legend">Mother's Name<span style="color:#FF0000;">*</span></span></td><td><input type="text" name="Mname" class="desing" required/></td></tr>
<td><span class="legend">Full Party Name<span style="color:#FF0000;">*</span></span></td><td><input type="text" name="pname" class="desing" required/></td></tr>
<tr>
<td><span class="legend">DoB<span style="color:#FF0000;">*</span></span></td><td><input type="text" name="DoB" class="desing" required/></td></tr><tr>
<td><span class="legend">District<span style="color:#FF0000;">*</span></span></td><td><select name="District" class="desing" required>
                    <option value="Kokrajahr">Kokrajahr</option>
                    <option value="Chirang">Chirang</option>
                    <option value="Baksa">Baksa</option>
                    <option value="Udalguri">Udalguri</option>
                    <option value="Kamrup">Kamrup</option>
                    <option value="Nalbari">Nalbari</option>
                    <option value="Barpeta">Barpeta</option>
                    <option value="Biswanat">Biswanat</option>
                    <option value="Darrang">Darrang</option>
                    <option value="Kachar">Kachar</option>
                    <option value="Bongaigaon">Bongaigaon</option>
                    <option value="Choraideo">Choraideo</option>
                    <option value="Dhemaji">Dhemaji</option>
                    <option value="Dhubri">Dhubri</option>
                    <option value="Dibrugargh">Dibrugargh</option>
                    <option value="Goalpara">Goalpara</option>
                    <option value="Golaghat">Golaghat</option>
                    <option value="Hailakandi">Hailakandi</option>
                    <option value="Hojai">Hojai</option>
                    <option value="Jorhat">Jorhat</option>
                    <option value="Kamrup Metropolitan">Kamrup Metropolitan</option>
                    <option value="Karbi Anglong">Karbi Anglong</option>
                    <option value="Karimganj">Karimganj</option>
                    <option value="Lakhimpur">Lakhimpur</option>
                    <option value="Majuli">Majuli</option>
                    <option value="Morigaon">Morigaon</option>
                    <option value="Nagaon">Nagaon</option>
                    <option value="Sibsagor">Sibsagor</option>
                    <option value="Sonitpur">Sonitpur</option>
                    <option value="South Salmara-Mankachar">South Salmara-Mankachar</option>
                    <option value="Tinsukia">Tinsukia</option>
                    <option value="West Karbi Anglong">West Karbi Anglong</option>
                    <option selected="selected" value=""></option></select></td>
          
<tr>
<td>            
</td></td></tr>
<td><span class="legend">Voting Center <span style="color:#FF0000;">*</span></span></td><td><input type="text" name="VotingCenter"  class="desing" required /></td></tr><br>
<tr><td>
<tr><td><span class="legend">Sex<span style="color:#FF0000;">*</span></span></td><td>
              <select name="sex" class="desing">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
</td></tr>
</b></tr>
        
<tr><td><span class="legend">Mobile No<span style="color:#FF0000;">*</span></span></td><td><input type="text" name="mobile"  class="desing" required /></td></tr>
</b></tr>
<tr><td><span class="legend">Party Symbol<span style="color:#FF0000;">*</span></span></td><td><input type="text" name="symbol"  class="desing" required /></td></tr>
</b></tr>
<tr><td><span class="legend">Party Description<span style="color:#FF0000;">*</span></span></td>
  <td><textarea cols="30" rows="5" name="comments" id="para1">
</textarea><br></td></tr>
</b></tr>

<tr>
<td height="26"><button type="submit" value="" name="Register" >Submit</button></td>
</tr></table></form>

     </div>
    
  </div>
  <div id="FO__OTer" align="center"> 
 <p>&copy; <?php echo date('Y');?>.All rights reserved, e-voting</p>
        <p>Designed by<a href="#" target="_blank"> <b >Venuste and Angelique</b></a>.</p>
  </div>
</div>
</body>
</html>