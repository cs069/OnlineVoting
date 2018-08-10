

<?php
session_start();
//if session not set send user to login page
if (isset($_SESSION['Ausername'])) {
    header("location: AdminHome.php");
    # code...
}?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>E-Login</title>
<link rel="stylesheet" type="text/css" href="__styles/main__$tyle.css" />
<link rel="stylesheet" href="__styles/menu/style.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="style3.css">
<style type="text/css">
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
	    <img src="__styles/logo.png" style="position: relative; bottom:-43px; left:-1px;"/>
	 </div>
	 <div id="ba__nner">
	    <img style=" position:relative; top:0px; left:20px;" src="__styles/banner.png" />
	 </div>
  </div>
  <div id="me__nu">
  <div id="menu">
<ul id="css3menu1" class="topmenu">
	<li class="topfirst"><a href="index.php" style="width:135px;height:21px;line-height:21px;"><img src="__styles/menu/house.png" alt=""/>Home</a></li>
	<li class="topmenu"><a href="voting.php" style="width:136px;height:21px;line-height:21px;"><img src="__styles/menu/tick.png" alt=""/>Apply for Candidate</a></li>
	<li class="topmenu"><a href="register.php" style="width:135px;height:21px;line-height:21px;"><img src="__styles/menu/disk.png" alt=""/>Voters Registration</a></li>
	<li class="topmenu"><a href="login.php" style="width:136px;height:21px;line-height:21px;" ><img src="__styles/menu/door_in.png" alt=""/>Login</a></li>
	<li class="toplast"><a href="#" style="width:135px;height:21px;line-height:21px;" id="active"><span><img src="__styles/menu/help.png" alt=""/>Admin</span></a>
	</li>
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


</div>
	 </div>
	 <div id="bo__dy_conts">
	 	<?php
// Include config file
include 'config.php';
 
// Define variables and initialize with empty values
$username = $username = $password="";
$username_err = $username_err =$password_err= "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
   
    // Check if username is empty
    if(empty(trim($_POST["Ausername"]))){
        $username_err = 'Please enter username.';
    } else{
        $username = trim($_POST["Ausername"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST['password']))){
        $password_err = 'Please enter your password.';
    } else{
        $password = trim($_POST['password']);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT username, password FROM admin WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            /* Password is correct, so start a new session and
                            save the username to the session */
                                # code...
                            session_start();
                            $_SESSION['Ausername'] = $username;  
                           // $_SESSION['password']=     
                            header("location: AdminHome.php");

                    }else{
                            // Display an error message if password is not valid
                            $password_err = 'The password you entered was not valid.';
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = 'No account found with that username.';
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        //mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
	 <fieldset  style="width:400px; margin:auto;">
	 <legend > <h3 align="center">Welcome to Admin page:</h3></legend>
	   <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

         <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                
    <span class="legend"> VoterId :<?php echo $username_err; ?></span><span style="color:#FF0000;">*<br>
 <input type="username" name="Ausername" class="desing" value="<?php echo $username; ?>"><br><br>
                
  </div>
 <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                
    <span class="legend"> Password :<?php echo $password_err; ?></span><span style="color:#FF0000;">*<br>
 <input type="password" name="password" class="desing" value="<?php echo $password; ?>"><br><br>
                
  </div>


                 <div class="form-group">
                <button type="submit" value="submit">Submit</button>         </div>
               
            </div>
	   </form>
	 </fieldset>
	 
	 
	 </div>
	
  </div>
  <div id="FO__OTer" align="center"> 
 <p>&copy; <?php echo date('Y');?>.All rights reserved, e-voting</p>
        <p>Designed by<a href="#" target="_blank"> <b>Mwikwm and Rupam @SCK</b></a>.</p>
  </div>
 </div>
</body>
</html>
