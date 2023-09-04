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
	echo "Our blood bank ensures that patients have a safe, reliable blood supply when in need.\r\nYou can help meet supply demands by scheduling your donation today.\r\nYour donation may even help save more than one life.";


		##################################################
	include_once('footer.php');
}
?>
