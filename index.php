<HTML>
<HEAD>
<TITLE>Indian Railways</TITLE>
<style type="text/css">
@import url(style.css);
#logo	{ 
	border-radius: 25px; 
    width: 75px;
    height: 75px; 
}
*	{
	color: white ;
}
html { 
  background: url(img/background13.jpg) no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
#main	{
		width:600px;
		height: 300px;
		margin: 0 auto;
		margin-top: 30px;
		color:red;
		border-radius: 30px;
  		padding-top: 20px;
    	padding-right: 20px;
    	padding-bottom: 20px;
    	padding-left: 20px;
    	background-color: rgba(0,0,0,0.4);
	}
	h1,h3
		{
			font-family: "fantasy";
		}
</style>
</HEAD>
<BODY>
<?php 
session_start();
include("header.php"); ?>
<div id="logo">

<A HREF="index.php">
<IMG SRC="img/logo2.png" alt="Home" id="logo" width="100" height="100" align="right"></IMG>
</A></div><div id="main">
	<h1 align="center">INDIAN RAILWAYS PASSENGER RESERVATION ENQUIRY</h1><br/><br/><br/>
<h3 align="center"><b><i>Serving the Nation from 1853!</i></b> </h3>
<br/><br/><br/>
<?php
if(isset($_SESSION['user_info']))
  echo '<h3 align="center"><a href="booktkt.php">Book here</a></h3>';
else
  echo '<h3 align="center"><a href="register.php">Please register/login before booking</a></h3>';
?>
</div>
<h4 align="center" style="margin-top: 175px;">Copyright © 2021, Centre For Railway Information Systems, Designed and Hosted.</h4>
</BODY>
</HTML>