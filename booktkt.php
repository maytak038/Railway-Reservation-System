<?php 
session_start();
	if(empty($_SESSION['user_info'])){
		echo "<script type='text/javascript'>alert('Please login before proceeding further!');</script>";
	}
$conn = mysqli_connect("localhost","root","","railway");
if(!$conn){  
	echo "<script type='text/javascript'>alert('Database failed');</script>";
  	die('Could not connect: '.mysqli_connect_error());  
}
if (isset($_POST['submit']))
{
$trains=$_POST['trains'];
$sql = "SELECT t_no FROM trains WHERE t_name = '$trains'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$email=$_SESSION['user_info'];
$query="UPDATE passengers SET t_no='$row[t_no]' WHERE email='$email';";
$sql = "INSERT INTO tickets (pnr, t_status) VALUES ('', 'Confirmed')";
$result=mysqli_query($conn,$sql);

	if(mysqli_query($conn, $query))
{  
	$message = "Ticket booked successfully";
}
	else {
		$message="Transaction failed";
	}
	echo "<script type='text/javascript'>alert('$message');</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Book a ticket</title>
	<LINK REL="STYLESHEET" HREF="STYLE.CSS">
	<style type="text/css">
		#booktkt	{
			margin:auto;
			margin-top: 50px;
			width: 40%;
			height: 50%;
			padding: auto;
			padding-top: 50px;
			padding-left: 50px;
			background-color: rgba(0,0,0,0.6);
			border-radius: 25px;
		}
		#logintext
			{
		margin-left: -15px;
}
		html { 
		  background: url(img/background2.jpg) no-repeat center center fixed; 
		  -webkit-background-size: cover;
		  -moz-background-size: cover;
		  -o-background-size: cover;
		  background-size: cover;
		}
		#journeytext	{
			color: white;
			font-size: 28px;
			font-family:"Comic Sans MS", cursive, sans-serif;
		}
		#trains	{
			font-size: 15px;
		}
		#submit	{
			margin-left: 150px;
			margin-bottom: 40px;
			margin-top: 30px
		}
		#logo	{ 
	border-radius: 25px; 
    width: 75px;
    height: 75px; 
}
	</style>
	<script type="text/javascript">
		function validate()	{
			var trains=document.getElementById("trains");
			if(trains.selectedIndex==0)
			{
				alert("Please select your train");
				trains.focus();
				return false;		
			}
		}

	</script>
</head>
<body>
	<?php
		include ('header.php');
	?>
	<div id="logo">

<A HREF="index.php">
<IMG SRC="img/logo2.png" alt="Home" id="logo" width="100" height="100" align="right"></IMG>
</A></div>
	<div id="booktkt">
	<h1 align="center" id="journeytext" style="margin-left: -30px;">Choose your journey</h1><br/><br/>
	<form method="post" name="journeyform" onsubmit="return validate()" >
		<select id="trains" name="trains" required >
			<option selected disabled>---------------------------------------Select trains here------------------------------------------</option>
			<option value="rajdhani" >Rajdhani Express - Mumbai Central to Delhi- Rs800 per ticket</option>
			<option value="duronto" >Duronto Express - Mumbai Central to Ernakulum- Rs700 per ticket</option>
			<option value="geetanjali">Geetanjali Express - CST to Kolkata- Rs300 per ticket</option>
			<option value="garibrath" >Garib Rath - Udaipur to Jammu Tawi- Rs150 per ticket</option>
			<option value="mysoreexp" >Mysore Express - Talguppa to Mysore Jn- Rs 500 per ticket</option>
		</select>
		<br/><br/>
		<input style="margin-left: 170px;" type="submit" name="submit" id="submit" class="button" />
	</form>
	<P  id="logintext"><FONT size="5" color="white">
Already booked the tickets ?<BR/></FONT>
	<form action="booktkt2.php">
		<input style="margin-left: 170px;" type="submit" value="Check" id="submit" class="button" />
	</div>
	</form>
			
	</body>
	</html>