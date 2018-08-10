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
    font-size:60px;
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
#content{
  align-items: center;
  font-size: 15px;
  padding: 0px;
}
#table{
  height: 250px;
  border: "0";
  width: 600px;
  border-spacing: none;
}
#td{
  font-size: 15px;
  text-align:left;
  width: 50px;
}
#td1{
  font-size: 15px;
  text-align:left;
  width: 50px;
}
#td1{
  color:green;
  text-align: left;
  width: 100px;
}
.btn {
  border: 2px solid black;
  background-color:  #2ecc71   ;
  color: white;
  padding: 2px 8px;
  font-size: 16px;
  cursor: pointer;
}





/* Gray */
.default {
  border-color: #e7e7e7;
  color:  red ;
}

.default:hover {
  background: white;
}
#all-scroll {cursor: all-scroll;}

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
       <li class="topfirst"><a href="AdminHome.php" style="width:130px;height:21px;line-height:21px;"><img src="__styles/menu/house.png" alt=""/>Home</a></li>
       <li class="topmenu"><a href="delete.php" style="width:100px;height:21px;line-height:21px;"><img src="__styles/menu/tick.png" alt=""/>Delete</a></li>

       <li class="topmenu"><a href="register.php" style="width:130px;height:21px;line-height:21px;"><img src="__styles/menu/disk.png" alt=""/>Candidate Request</a></li>
       <li class="topmenu"><a href="result.php" style="width:100px;height:21px;line-height:21px;"><img src="__styles/menu/door_in.png" alt=""/>Result</a></li>
       <li class="topmenu"><a href="total.php" style="width:100px;height:21px;line-height:21px;"><img src="__styles/menu/tick.png" alt=""/>Records</a></li>
       <li class="toplast"><a href="adminLogout.php" style="width:130px;height:21px;line-height:21px;"><span><img src="__styles/menu/help.png" alt=""/>Logout</span></a>
  </li>
      </ul>
    </div>

  </div>
  <div id="bo__dy">
   <div id="bo__dy_pub">

    <div id="recents">
      <strong style=" margin-left: 30px"> Profile: Admin</strong><br>
        <?php 
        session_start();
if (isset($_SESSION['Ausername']))
         {
          $mysqli1= new mysqli('localhost','root','','DEMO');
    $Auser= $_SESSION['Ausername'];?><br>
     Name: <a  style="color:green; padding:3px; font-size: 16px;"><?php echo $Auser; ?></a><br>
    <a style="padding: 3px; cursor: pointer;"  href="adminLogout.php">Log Out</a>
        <?php
        } ?>
    </div>
   <div id="recents1">
    <br ><a class="tag" >	Time Remaining <strong style="color: red">Hurry Up!</strong> </a>
    <p id="demo"></p>

    <script>
// Set the date`   we're counting down to
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
 <div id="HEa__DER"><h2>Current Candidates</h2>
 </div>
 <div id="content" style=""><br>

  <?php 
   $mysqli1= new mysqli('localhost','root','','DEMO');
 // include "connection.php";
  if($_POST['vote']) {
    # code...
    $val=$_POST['vote'];
    $sql = "SELECT * FROM candidate where shortPartyName='$val'";
    $result = mysqli_query($mysqli1,$sql);
    if ($result !== false) {   

      $row = mysqli_fetch_array($result);

      ?>   <form action="up.php" id="view" method="post">

      <table id="table">
       <tr> 
        <td id="td">
        Voter Id:<td id="td1"><?php echo $row['voterCard']; ?></td></td>
        <td id="td">Date of Birth:<td id="td1"><?php echo $row['dob']; ?></td></td>
        </tr>
        <tr>
        <td id="td">Pan Card: <td id="td1"><?php echo $row['panCard']; ?></td></td>
        <td id="td">Full Party Name:<td id="td1"><?php echo $row['fullPartyName']; ?></td></td></tr>
       
        <tr>
         <td id="td">Short Party Name:<td id="td1"> <?php echo $row['shortPartyName']; ?></td></td><td id="td">District:<td id="td1"><?php echo $row['district']; ?></td></td>
       </tr>  
       <tr><td id="td">Name:<td id="td1"> <?php echo $row['candidateName']; ?></td></td><td id="td">Mother Name:<td id="td1"> <?php echo $row['mothername']; ?>
       </td></td>
     </tr>  
     <tr><td id="td">Father Name:<td id="td1"><?php echo $row['fathername']; ?></td></td><td id="td">      
      Voting Centre: <td id="td1"><?php echo $row['centre']; ?></td></td>
      </tr>  

      <tr><td id="td">Sex:<td id="td1"><?php echo $row['sex']; ?></td></td>
      <td id="td">Symbol:<td id="td1"> <?php echo $row['symbol']; ?></td></td></tr>
      <tr><td id="td">Mobile:<td id="td1"> <?php echo $row['mobile']; ?></td></td><td id="td">Description :<td id="td1"><?php echo $row['descr']; ?></td></td></tr>
         
    </table><br>

    <div align="center" >
    <button  onclick="return confirm('Are you sure?');"  style="cursor: pointer; width: 100px "  value="<?php echo $row[1];?>"  name="update" type="submit" >Approved</button>
    <button  onclick="return confirm('Are you sure?');"  style="cursor: pointer;  width: 100px; margin-left:15px" alt="Approved" value="<?php echo $row[1];?>"  name="reject" type="submit">Reject</button> 
</div>
  </form>

    <?
         // . $row['mothername'];
  }}   else {
      echo "Nothing";
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
