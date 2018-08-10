<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>E-Voting</title>
<link rel="stylesheet" type="text/css" href="__styles/main__$tyle.css" />
<link rel="stylesheet" href="__styles/menu/style.css" type="text/css" />
<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" src="__styles/functions.js"></script>
</head>
<style type="text/css">
	 table {
    border-collapse: collapse;
        border-spacing: 15px;
}

table, th, td {
    border: 1px solid black;
    text-align: center;

}
#header{
  text-decoration-style: solid;
    height:120px;
    background-color:#F55555;
    text-align:center;
    font-size:40px;
    color:white;
    font-family: Verdana;
    padding-top:60px;
    margin-botton:10px;
}
.blink{
	color: red;
        color: rgb (0, 137, 226);
        animation: blink 1s infinite;
     }
     @keyframes blink{
        0%{opacity: 1;}
        75%{opacity: 1;}
        76%{ opacity: 0;}
        100%{opacity: 0;}
     }
#head
{
	font-family: sans-serif;
    background-color: #6ebbea;
    color: white;
            margin-left: 2.5em


}
tr:nth-child(even) {background-color: #f2f2f2;}
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
	<li class="topfirst"><a href="index.php" style="width:135px;height:21px;line-height:21px;"  id="active"><img src="__styles/menu/house.png" alt=""/>Home</a></li>
	<li class="topmenu"><a href="voting.php" style="width:136px;height:21px;line-height:21px;"><img src="__styles/menu/tick.png" alt=""/>Apply for Candidate</a></li>

	<?php session_start();
  if(isset($_SESSION['username'])) { ?>
    <li class="topmenu" ><a href="register.php"   style="width:136px;height:21px;line-height:21px;"><img src="__styles/menu/door_in.png" alt=""  />Voting</a></li>
   
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
     if (isset($_SESSION['username'])) {
      ?>  <b style="color: black; margin-left: 100px"><strong> Profile </strong></b><br><br>
<?
     
    $name= $_SESSION['username'];
    
  
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
     }} else {
     ?>   <img src="files/index.png" />
      <p>Vote for Hagrama Mahilary party BPF <b class="blink" href="https://economictimes.indiatimes.com/topic/BPF-chief-Hagrama-Mohilary"> News  </b></p>
     
     

       <?php      }
?>
        
     </div>
	   <div id="recents">
	      <img src="files/bjp1.jpg" />
		  <p>Vote for Bharatiya Jhanata Party <A href="http://www.bjp.org/"><b class="blink"> Click here for news</b> </A></p>
	   </div>
	   <div id="recents1">
	   <br ><a class="tag" >	Time Remaining <strong style="color: red">Hurry Up!</strong> </a>
	      <p id="demo"></p>

<script>
// Set the date we're counting down to
var countDownDate = new Date("june 17, 2018 14:22:00").getTime();

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
	    <div id="HEa__DER"><h2> Current Candidates</h2>
	    </div>
		<div id="PiC__cont"><br>
		<marquee>	Choose your right candidate</marquee>

		   <?php
$conn=mysqli_connect("localhost","root","","DEMO");


 $show="SELECT * from candidate";

 $result=mysqli_query($conn,$show);
$count=mysqli_num_rows($result);
if($count>0)
{ 
?>
<br>
<table align="center" font-family:Comic Sans MS";>
<tr id="head">
<td><b> SYMBOL </b></td>
<td><b> SHORT FORM </b></td>
<td ><b> NAME</b></td>
<td ><b> STATUS </b></td>
</tr>
<?php
while($row=mysqli_fetch_row($result))

{    
    //echo "<img src='images/".$row['image']."'>";
    //<td> <?php echo "<img width='100' height='100' src='images/".$row['image']."' >";
    ?>

            <tr>        
            
            <td  style="color:green;font-family:  Courier New; text-align: center; font-size: 18px;margin: 30px;"><?php echo $row[12]; ?></td>
            <td  style="color: green;font-family: Courier New;  text-align: center; font-size: 18px;    text-transform: uppercase;"><?php echo $row[3]; ?></td>
            <td style="color: green;font-family:  Nickainley; text-align: center; font-size: 18px;"> <?php echo $row[4]; ?></td> 
            <td style="color: green;font-family:  Nickainley; font-size: 18px;  text-align: center;"> <?php if ($row[16]==0){
             ?>
              <u> <a class="blink" >waiting</a></u>  <?php
     
            }if ($row[16]==1) {echo "Verified";} 
            elseif ($row[16]==2) {
               ?>  <a style="color:red"> Reject </a><?
              # code...
            }
            {
                # code...
            }; ?></td> 
    
    
 </tr>   
    <?php

}?>
 </table><?php
}

?>
    </div>
   
		<div id="CO__nt">
		</div>
	 </div>
  </div>
  <div id="FO__OTer" align="center"> 
 <p>&copy; <?php echo date('Y');?>.All rights reserved, e-Apply</p>
        <p>Designed by<a href="#" target="_blank"> <b>Mwikwm and Rupam @SCK</b></a>.</p>
		
  </div>
 </div>

</body>
</html>
