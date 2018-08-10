

<?php
session_start();
//if session not set send user to login page
if (!isset($_SESSION['Ausername'])) {
    header("location: adminLogin.php");
    # code...
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>::e-Delete::</title>
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
	<li class="topfirst"><a href="AdminHome.php" style="width:100px;height:21px;line-height:21px;" id="active"><img src="__styles/menu/house.png" alt=""/>Home</a></li>
	<li class="topmenu"><a href="delete.php" style="width:100px;height:21px;line-height:21px;"><img src="__styles/menu/tick.png" alt=""/>Delete</a></li>
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
	      <strong style=" margin-left: 30px"> Profile: Admin</strong><br>
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
	    <div id="HEa__DER"><h2>Update Candidate</h2>
	    </div>
		<div id="PiC__cont"><br>

		   <?php
$conn=mysqli_connect("localhost","root","","DEMO");


 $show="SELECT * from candidate";
 $result=mysqli_query($conn,$show);
$count=mysqli_num_rows($result);
if($count>0)
{ 
?>
<br>
<table float="left" font-family:Comic Sans MS" width="100%">
<tr id="head">
<td><b> SYMBOL </b></td>
<td><b> SHORT FORM </b></td>
<td ><b> PARTY NAME</b></td>
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
            <td  style="color: green;font-family: Courier New;  text-align: center; font-size: 18px;    text-transform: uppercase;"><strong><?php echo $row[3]; ?></strong></td>
            <td style="color: green;font-family:  Courier New; text-align: center; font-size: 18px;"> <?php echo $row[7]; ?></td> 
            <td style="color: green;font-family:  Courier New; font-size: 18px;  text-align: center;  text-transform: lowercase;"> <?php if ($row[16]==0){
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
 </table>
 <?php
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
