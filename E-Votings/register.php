
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>E-Register</title>
<link rel="stylesheet" type="text/css" href="__styles/main__$tyle.css" />
<link rel="stylesheet" href="__styles/menu/style.css" type="text/css" />
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
	<li class="topfirst"><a href="index.php" style="width:135px;height:21px;line-height:21px;"><img src="__styles/menu/house.png" alt=""/>Home</a></li>
	<li class="topmenu"><a href="voting.php" style="width:136px;height:21px;line-height:21px;"><img src="__styles/menu/tick.png" alt=""/>Apply for Candidate</a></li>
	 <li class="topmenu" ><a href="register.php"   style="width:136px;height:21px;line-height:21px;" id="active"><img src="__styles/menu/door_in.png" alt=""  />Voters Registration</a></li>
	<?php session_start();
  if(isset($_SESSION['username'])) { ?>
   
   
<?php  }else{ ?>
  
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
	<li class="toplast"><a href="#" style="width:135px;height:21px;line-height:21px;"><span><img src="__styles/menu/help.png" alt=""/>Admin</span></a>
	<ul>
		<li><a href="adminLogin.php">Login</a></li>
	</ul></li>
</ul>
</div>
  
  </div>
  <div id="bo__dy">
     <div id="bo__dy_pub">
	 <div id="recents">
	 	 <?php 
	 	 	
     include "connection.php";
    // session_start();
     if (isset($_SESSION['username'])) {
     	# code...
     ?>	<b style="color: black; margin-left: 100px"><strong> Profile </strong></b><br><br>
<?
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
     ?>	<img src="files/index.png" />
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
//session_start();
//if session not set send user to login page
if (!isset($_SESSION['username'])) {
    # code...
}else
{
	?><div id="bo__dy_conts">
   <?
echo"<center><u><h4><font color='#003300'><H3>Your are already registerd user,</h3></font></h4></u></center>";
echo"<center><u><h4><font color='#003300'><H3>Please logout first to register</h3></font></h4></u></center>";

//Your authentication key
}
?>
	 
	 <fieldset><legend><h3>Register here <h6>Voters registration</h6></h3></legend>
<form method="post" enctype="multipart/form-data" action="process.php" >
	<table width="500" height="100" background bgcolor="#FFFFFF"align="center"  bgcolor="#CCCCCC"><b> Verify First with your mobile number</b><br>	
	<tr><td>

	<span class="legend">Mobile No:<span style="color:#FF0000;">* +91</span></span> </td><td>
	<input type="tel" name="phone" class="desing" placeholder="XXXX-XXXXXX" pattern="^\d{10}$" required ></td></tr><tr><td>
	
	<button onclick="return confirm('Are you sure?');"  type="submit" name="btn-save"> Submit </button>
	
</table>
</form>
</div>
	
 </div>
  <div id="FO__OTer" align="center"> 
 <p>&copy; <?php echo date('Y');?>.All rights reserved, e-Apply</p>
        <p>Designed by<a href="#" target="_blank"> <b >Mwikwm and Rupam @SCK</b></a>.</p>
  </div>
</div>
</body>
</html>