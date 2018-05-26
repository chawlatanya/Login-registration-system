<?php
session_start();
$con=mysqli_connect("localhost","root","") or die("Unable to connect");
mysqli_select_db($con,'innerve');
if(isset($_POST['login']))
{
	$email=$_POST['email'];
	$pwd=$_POST['pwd'];
	$password=md5($pwd);

	$query="SELECT * from registration WHERE Email='$email' AND Password='$password'";
	$query_run=mysqli_query($con,$query);
	if(mysqli_num_rows($query_run)>0)
	{

		$_SESSION['email']=$email;
		header("location:homepage.html");

	}
	else 
	{
		echo "<script>alert ('Invalid User Id or Password. Please try again.');</script>";
			
	}
}
?>