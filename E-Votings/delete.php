
<?php
session_start();
//if session not set send user to login page
if (!isset($_SESSION['Ausername'])) {
  header("location: adminLogin.php");
    # code...
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>::e-apply::</title>
  <link rel="stylesheet" type="text/css" href="__styles/main__$tyle.css" />
  <link rel="stylesheet" href="__styles/menu/style.css" type="text/css" />
  <link rel="stylesheet" type="text/css" href="style3.css">
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
#data{
  color:green;
  font-family:Courier New; 
  text-align: center; 
  font-size: 18px;
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
  <li class="topfirst"><a href="AdminHome.php" style="width:100px;height:21px;line-height:21px;" id="active"><img src="__styles/menu/house.png" alt=""/>Home</a></li>
  <li class="topmenu"><a href="delete.php" style="width:100px;height:21px;line-height:21px;" id="active"><img src="__styles/menu/tick.png" alt=""/>Delete</a></li>
  <li class="topmenu"><a href="update.php" style="width:130px;height:21px;line-height:21px;"><img src="__styles/menu/disk.png" alt=""/>Candidate Request</a></li>
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
   <strong style="margin-left: 30px"> Profile: Admin</strong><br>
   <?php if (isset($_SESSION['Ausername']))
         {
          $mysqli1= new mysqli('localhost','root','','DEMO');
    $Auser= $_SESSION['Ausername'];?><br>
     Name: <a  style="color:green; padding:3px; font-size: 16px;"><?php echo $Auser; ?></a><br>
    <a style="padding: 3px; cursor: pointer;"  href="adminLogout.php">Log Out</a>
        <?php
        } ?>
</div>
<div id="recents1">
  <br ><a class="tag" >	Time Remaining </a>

  <p id="demo"></p>

 
</div>
</div>
<div id="bo__dy_conts">
 <div id="HEa__DER"><h2>Current Candidates</h2></div>
  <br> 
  <form id="vote" action="del.php"  method="post">
  <?php
   $conn=mysqli_connect("localhost","root","","DEMO");
   $show="SELECT * from candidate";
   $result=mysqli_query($conn,$show);
   $count=mysqli_num_rows($result);
   if($count>0)
   { 
    ?>
    <table width="100%">
      <tr id="head">
        <td><b> SYMBOL </b></td>
        <td><b> SHORT FORM </b></td>
        <td><b> CANDIDATE NAME </b></td>
        <td><b> SELECT </b></td>
      </tr>
      <?php
      while($row=mysqli_fetch_row($result))
      {    
        ?>
        <tr>        

          <td id="data"><?php echo $row[12]; ?></td>
          <td id="data" style="text-transform: uppercase;"><strong><?php echo $row[3]; ?></strong></td>
          <td id="data"> <?php echo $row[4]; ?></td> 
          <td id="data"> 
            <button  onclick="return confirm('Are you sure?');"  style="cursor: pointer; "   alt="Delete" value="<?php echo $row[1];?>"  name="delete" type="submit">Delete</button></td>
          </td> 


        </tr> 

        <?php

      }?>
      </table><?php
    }

    ?>
    <script>

  </form>
</div>
</div>
<div id="FO__OTer" align="center"> 
 <p>&copy; <?php echo date('Y');?>.All rights reserved, e-apply</p>
 <p>Designed by<a href="#" target="_blank"> <b>Mwikwm and Rupam @SCK</b></a>.</p>

</div>
</div>

</body>
</html>
