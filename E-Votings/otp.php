 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>::e-voting::</title>
<link rel="stylesheet" type="text/css" href="__styles/main__$tyle.css" />
<link rel="stylesheet" href="__styles/menu/style.css" type="text/css" />
<style type="text/css">
div#bo__dy div#bo__dy_conts {overflow: scroll;}
</style>
</head>

<body>
 <div id="whole">  
  <div id="hEa__d">
     <div id="lo__go">
	    <img src="__styles/logo.png" style="position: relative; bottom:-43px; left:-1px;" />
	 </div>
	 <div id="ba__nner">
	    <img style=" position:relative; top:20px; left:20px;" src="__styles/banner.png" />
	 </div>
  </div>
  <div id="me__nu">
  <div id="menu">
<ul id="css3menu1" class="topmenu">
	<li class="topfirst"><a href="index.php" style="width:135px;height:21px;line-height:21px;"><img src="__styles/menu/house.png" alt=""/>Home</a></li>
	<li class="topmenu"><a href="voting.php" style="width:136px;height:21px;line-height:21px;"><img src="__styles/menu/tick.png" alt=""/>Voting</a></li>
	<li class="topmenu"><a href="register.php" style="width:135px;height:21px;line-height:21px;" id="active"><img src="__styles/menu/disk.png" alt=""/>Register</a></li>
	<li class="topmenu"><a href="login.php" style="width:136px;height:21px;line-height:21px;"><img src="__styles/menu/door_in.png" alt=""/>Login</a></li>
	<li class="toplast"><a href="#" style="width:135px;height:21px;line-height:21px;"><span><img src="__styles/menu/help.png" alt=""/>Electrol council</span></a>
	<ul>
		<li class="subfirst"><a href="electHelp.php">Help</a></li>
		<li><a href="electGalery.php">Gallery</a></li>
		<li><a href="electContact.php">Contact</a></li>
	</ul></li>
</ul>
</div>
  
  </div>
  <div id="bo__dy">
     <div id="bo__dy_pub">
	  <div id="recents">
	      <img src="files/NEC.jpg" />
		  <p>Abayobozi bakuru bari kuganira ku gikorwa cy'Amatora inkuru irambuye twayibaza<A href="venuste.php"> Venuste</A>Umunyamakuru wa NEC</p>
	   </div>
	   <div id="recents">
	      <img src="files/NEC.jpg" />
		  <p>This is registration page<A href="venuste.php"> Google</A> SCIENCE COLLEGE KOKRAJHAR</p>
	   </div>
	   <
	 </div>
	 <div id="bo__dy_conts">
	 	
	  <?php
session_start();

$result=$_SESSION['phone'];

?> 
	 
	 <fieldset><legend><h3>Register here <h6>Voters registration</h6></h3></legend>
	 	<?php echo"<center><u><font color='#003300'>OTP has been sent to this $result number</font></u></center>";?>
<form method="post" enctype="multipart/form-data" action="otpproccess.php">
	<table width="500" height="100" background bgcolor="#FFFFFF"align="center"  bgcolor="#CCCCCC"><b> Put Otp value from ur mobile</b><br>	
	<tr><td>

	<span class="legend">OTP:<span style="color:#FF0000;">*</span></span></td><td>
	<input type="text" name="otpvalue" class="desing" required /></td></tr><tr><td>
	
	<button type="submit" name="btn-save"> Submit </button>
</table>
</form>
</div>
	
 </div>
  <div id="FO__OTer" align="center"> 
 <p>&copy; <?php echo date('Y');?>.All rights reserved, e-voting</p>
        <p>Designed by<a href="#" target="_blank"> <b >Mwikwm and Rupam @SCK</b></a>.</p>
  </div>
</div>
</body>
</html>