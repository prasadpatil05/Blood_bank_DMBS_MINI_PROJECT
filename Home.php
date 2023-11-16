<?php
session_start();
$_SESSION["tab"] = "Home";

if($_SESSION["login"] != 1)
	echo '<h2 txtcolor="red">Authentication Error!!!</h2>';
else{
	include_once('header.php');

		###########contents of div goes here###########
	echo "
	<h2>
	Abstract
	</h2>
	<p>
	Hello Myself Prasad Patil from college of engineering pune (2025)

	</p>
	<p>
	Now lets talk about this project  :<br>
	1.Admin/User has to login first.<br>
	2.Any person who is willing to donate/receive blood will have to register by giving all his personal details.<br>
	3. Admin/User has to register the given details . The admin/user will be able to view all the details and records of all earlier donation/receive as well as the stock of blood in the blood bank. <br>
	4.All this is related to the blood bank system. Apart from this, we will be using concepts of database encryption to make sure that the users' information is kept secure and confidential.<br> 
	5.This will help us keep their donation records protected from any threats from individuals with potentially malicious intentions, or unforeseen hazards to the security of the data.<br>
	</p>
	<h2>
	Our Goal
	</h2>
	<p>";


	$sql = "select count(p_id) from Person";
	$result = mysqli_query($con, $sql);  
	$row = mysqli_fetch_array($result);  
	echo "We have got registrations from ".$row[0] ." people";
	$sql = "select count(p_id) from Donation";
	$result = mysqli_query($con, $sql);  
	$row = mysqli_fetch_array($result);  
	echo "<br>We got donations of about ".$row[0] ." from registered persons";
	$sql = "select count(p_id) from Receive";
	$result = mysqli_query($con, $sql);  
	$row = mysqli_fetch_array($result);  
	echo "<br>We gave blood for around ".$row[0] ." times to the registered people from our stock in case of emergency<br>";
	echo "We are glad to say that we have made a successful service to the society</p>";


		##################################################
	include_once('footer.php');
}
?>
