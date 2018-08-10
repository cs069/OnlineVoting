
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
      <li class="topfirst"><a href="AdminHome.php" style="width:100px;height:21px;line-height:21px;"><img src="__styles/menu/house.png" alt=""/>Home</a></li>
      <li class="topmenu"><a href="delete.php" style="width:100px;height:21px;line-height:21px;"><img src="__styles/menu/tick.png" alt=""/>Delete</a></li>
      <li class="topmenu"><a href="update.php" style="width:130px;height:21px;line-height:21px;"><img src="__styles/menu/disk.png" alt=""/>Candidate Request</a></li>
      <li class="topmenu"><a href="result.php" style="width:100px;height:21px;line-height:21px;"><img src="__styles/menu/door_in.png" alt=""/>Result</a></li>
      <li class="topmenu"><a href="total.php" style="width:100px;height:21px;line-height:21px;" id="active"><img src="__styles/menu/tick.png" alt=""/>Records</a></li>
      <li class="toplast"><a href="adminLogout.php" style="width:130px;height:21px;line-height:21px;"><span><img src="__styles/menu/help.png" alt=""/>Logout</span></a>
      </li>
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
     <br ><a class="tag" >    Time Remaining </a>
     <p id="demo"></p>


    
</div>
</div>
<div id="bo__dy_conts">
	

  <fieldset>
    <form id="vote" action="view.php" method="post">
      Total number of Voters applied: 
      <?php
      $mysqli1= new mysqli('localhost','root','','DEMO');
      foreach($mysqli1->query('SELECT COUNT(*) FROM voter') as $row) {
        echo "<tr>";
        echo "<td>" . $row['COUNT(*)'] . "</td>";
        echo "</tr>";
      }

      ?> <button style="cursor: pointer;margin-left: 45px" type="submit" name="view" value="voter">View</button><br><br>
      Total number of Candidates applied: <?php
      $mysqli1= new mysqli('localhost','root','','DEMO');
      foreach($mysqli1->query('SELECT COUNT(*) FROM candidate') as $row) {
        echo "<tr>";
        echo "<td>" . $row['COUNT(*)'] . "</td>";
        echo "</tr>";
      }

      ?> <button style="cursor: pointer;margin-left: 10px" type="submit" name="view" value="candidate">View</button>
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