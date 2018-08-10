
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>::e-voting::</title>
	<link rel="stylesheet" type="text/css" href="__styles/main__$tyle.css" />
	<link rel="stylesheet" href="__styles/menu/style.css" type="text/css" />
	<style type="text/css">
		div#bo__dy div#bo__dy_conts {overflow: scroll;}
	div#bo__dy div{height: 300px;}
	</style>
</head>

<body>
	<div id="whole"> 
		<div id="hEa__d">
			<div id="lo__go">
				<img src="__styles/logo.png"  style="position: relative; bottom:-43px; left:-1px;" />
			</div>
			<div id="ba__nner">
				<img style=" position:relative; top:0px; left:20px;" src="__styles/banner.png" />
			</div>
		</div>
		<div id="me__nu">
			<div id="menu">
				<ul id="css3menu1" class="topmenu">
					<li class="topfirst"><a href="AdminHome.php" style="width:100px;height:21px;line-height:21px;"><img src="__styles/menu/house.png" alt=""/>Home</a></li>
					<li class="topmenu"><a href="delete.php" style="width:100px;height:21px;line-height:21px;"><img src="__styles/menu/tick.png" alt=""/>Delete</a></li>

					<li class="topmenu"><a href="update.php" style="width:130px;height:21px;line-height:21px;"><img src="__styles/menu/disk.png" alt=""/>Candidate Request</a></li>
					<li class="topmenu"><a href="result.php" style="width:100px;height:21px;line-height:21px;" id="active"><img src="__styles/menu/door_in.png" alt=""/>Result</a></li>
					 <li class="topmenu"><a href="total.php" style="width:100px;height:21px;line-height:21px;"><img src="__styles/menu/tick.png" alt=""/>Records</a></li>
					<li class="toplast"><a href="adminLogout.php" style="width:130px;height:21px;line-height:21px;">
						<span>
							<img src="__styles/menu/help.png" alt="" />Logout</span></a>

						</li>
					</ul>
				</div>

			</div>
			<div id="bo__dy" style="padding:2px; margin-left:120px;">

				<style type="text/css">
					#chart-container {
						width: 500px;
						height: 300px;
						color: green;
						background-color: #FFFFE0;
						font-size: 16px;
						font-family: Helvetica;

					}
					#chart1{
						padding: 10px;
						background: green;
						top: 50px;
						height: 10px;
						margin-left: 500px;
						font-size: 15px;
					}
				</style>
				<div id="chart-container">
					<canvas id="mycanvas"></canvas>

					<!-- javascript -->
					<script type="text/javascript" src="graph/jquery-3.3.1.min.js"></script>
					<script type="text/javascript" src="graph/Chart.min.js"></script>
					<script type="text/javascript" src="graph/app.js"></script>
				</div>
				<div style="margin-left: 20px;">
					<?php
					$mysqli = new mysqli('localhost','root','','DEMO');
					$query = 'select shortPartyName,poll from candidate';
					$query1 = 'select shortPartyName,max(poll) from candidate';
					$result = $mysqli->query($query,MYSQLI_STORE_RESULT);
					$result1 = $mysqli->query($query1,MYSQLI_STORE_RESULT);
					while(list($name,$poll) = $result->fetch_row())
					{
						printf("%s= %d",$name,$poll);
						echo "<br>";
					}
					$val = $result1->fetch_row();
					echo "<p>";
					echo "Winner is: ",$val[0];
					echo "</p>";
					?>

				</div>

			</div>


</div>

			<div id="FO__OTer" align="center"> 
				<p>&copy; <?php echo date('Y');?>.All rights reserved, e-voting</p>
				<p>Designed by<a href="#" target="_blank"> <b>Mwikwm and Rupam @SCK</b></a>.</p>
			</div>
		</div>
	</body>
	</html>
