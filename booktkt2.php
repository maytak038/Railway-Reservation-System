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
			height: 230px;
			padding: auto;
			padding-top: 50px;
			padding-left: 50px;
			background-color: rgba(0,0,0,0.65);
			border-radius: 20px;
		}
		html { 
		  background: url(img/background12.jpg) no-repeat center center fixed; 
		  -webkit-background-size: cover;
		  -moz-background-size: cover;
		  -o-background-size: cover;
		  background-size: cover;
		}
      #p1
      {
         color: ghostwhite;
         font-family: "sans-serif";
         font-size: 30px;
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
	<div id='booktkt'>
<?php 
$query='SELECT * FROM tickets ORDER BY PNR DESC LIMIT 1';
$data=mysqli_query($conn,$query);
$result=mysqli_fetch_assoc($data);
 ?>

 <p id='p1'>Your PNR number is <?php 
echo $result['PNR'];
 ?>
    <br><br>
    Have a safe journey!
 </p>

	</div>
	</body>
	</html>