<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>::e-Apply::</title>
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
        <li class="topmenu"><a href="register.php" style="width:135px;height:21px;line-height:21px;" id="active"><img src="__styles/menu/disk.png" alt=""/>Voters Registration</a></li>
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
        <p>Vote for Hagrama Mahilary party BPF <A href="https://economictimes.indiatimes.com/topic/BPF-chief-Hagrama-Mohilary"> News  </A></p>
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
var countDownDate = new Date("july 07, 2018 09:00:00").getTime();

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
  <?php 
  session_start();
  if(isset($_POST['Register']) && isset($_SESSION['phone']))
  {
    include "connection.php";
 $inFullname = $_POST["VoterCard"]; // as the method type in the form is "post" we are using $_POST otherwise it would be $_GET[]
 $pan = $_POST["pancard"];
 $name = $_POST["name"];
 $FatherName = $_POST["Fname"];
 $MotherName = $_POST["Mname"];
 $dob = $_POST["DoB"];
 $mobile= $_SESSION['phone'];
//echo "$mobile";

//$desc = $_POST["descr"];
//$sex = $_POST["sex"];
 $district = $_POST["District"];  
 $centre = $_POST["VotingCenter"];
 $password = $_POST["password"];
$epassword = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash


$one=" INSERT INTO voter (voterid,panCard,password,name,fathername,mothername,dob,district,centre,mobile) VALUES ('$inFullname','$pan','$epassword','$name','$FatherName','$MotherName','$dob','$district','$centre','$mobile')";

$result=mysqli_query($conn,$one);


if($result)
{
//  echo"<center><u><h4><font color='#003300'><H3>Congratulation,</h3></font></h4></u></center>";
  //echo"<center><u><h4><font color='#003300'><H3>Your Account Has Been Successfully Created to Vote!,</h3></font></h4></u></center>";
  //echo"<p><font color='#003300'><p>Now you are an Active Member Of E-VOTING SYSTEM; which give you a power to Vote online and view
  //your Candidate Status on this website.</p></font></p>";

//Your authentication key
  $authKey = "219217ACBqTE72rS5b17f79e";
//Multiple mobiles numbers separated by comma
  $mobileNumber = $_SESSION['phone'];
//Sender ID,While using route4 sender id should be 6 characters long.
  $senderId = "ABCDEF";
//Your message to send, Add URL encoding here.
//$rndno=rand(1000, 9999);
  $message = urlencode("You have successfully registered with this mobile number. Your voting PIN is:- $password. keep it secret");
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
   header("Location:success.php");


}}
  ?>
  <div id="bo__dy_conts">

<fieldset><legend><h3>Register here</h3></legend>
  <strong class="desing">Click Here to know Terms and Conditions </strong> <a href="http://wiki.wikimedia.in/Election_Rules">Check</a> 
  <form method="post" enctype="multipart/form-data"><table style="width:400px; height: 300px;" align="center">
    <tr><td><span class="legend">VoterCard :<span style="color:#FF0000;">*</span></span></td><td><input type="text" name="VoterCard" class="desing" required /></td></tr><tr>
      <td><span class="legend">Pan Card <span style="color:#FF0000;">*</span></span></td><td><input type="text" name="pancard" class="desing" required/></td></tr>


      <tr><td><span class="legend">Name<span style="color:#FF0000;">*</span></span></td><td><input type="text" name="name"  class="desing" required /></td></tr>
      <tr><td><span class="legend">FatherName<span style="color:#FF0000;">*</span></span></td><td><input type="text" name="Fname"  class="desing" required /></td></tr>
      <tr>
        <td><span class="legend">MotherNames<span style="color:#FF0000;">*</span></span></td><td><input type="text" name="Mname" class="desing" required/></td></tr>

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
                <tr>
                  <td><span class="legend">VotingCenter <span style="color:#FF0000;">*</span></span></td><td><input type="text" name="VotingCenter"  class="desing" required /></td></tr>
                  <tr><td><span class="legend">Sex<span style="color:#FF0000;">*</span></span></td><td>
                    <select name="sex" class="desing" required>
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                    </select></td></tr>

                    <tr><td><span class="legend">Password<span style="color:#FF0000;">*</span></span></td><td><input type="password" name="password"  class="desing" required /></td></tr>



                  </tr>

                
                    </table> 
                  <button "  style="width: 100px" id="SaveBTN" type="submit" name="Register">Submit</button>
                </form>
            </div>
  

            <div id="FO__OTer" align="center"> 
             <p>&copy; <?php echo date('Y');?>.All rights reserved, e-voting</p>
             <p>Designed by<a href="#" target="_blank"> <b >Venuste and Angelique</b></a>.</p>
           </div>
         </div>
       </body>
       </html>