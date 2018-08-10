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

  <li class="topmenu"><a href="register.php" style="width:135px;height:21px;line-height:21px;"><img src="__styles/menu/disk.png" alt=""/>Voters Registration</a></li>
  <li class="topmenu"><a href="login.php" style="width:136px;height:21px;line-height:21px;"><img src="__styles/menu/door_in.png" alt=""/>Login</a></li>
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
        <img src="files/index.png" />
      <p>Vote for Hagrama Mahilary's party BPF <A  href="https://economictimes.indiatimes.com/topic/BPF-chief-Hagrama-Mohilary"><b class="blink"> News </b></A></p>
     </div>
     <div id="recents">
        <img src="files/bjp1.jpg" />
      <p>Vote for Bharatiya Jhanata Party <A href="http://www.bjp.org/"><b class="blink"> Click here for news</b> </A></p>
     </div>
     <div id="recents1">
     <br ><a class="tag" >  Time Remaining <strong style="color: red">Hurry Up!</strong> </a>
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
      
    <div id="PiC__cont"><br>
    <marquee> Choose your right candidate</marquee>

<?php
    echo"<center><u><h4><font color='#003300'><H3>Congratulation,</h3></font></h4></u></center>";
  echo"<center><u><h4><font color='#003300'><H3>Your Account Has Been Successfully Created to Vote!,</h3></font></h4></u></center>";
  echo"<p><font color='#003300'><p>Now you are an Active Member Of E-VOTING SYSTEM; which give you a power to Vote online and view
  your Candidate Status on this website.</p></font></p>";
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
