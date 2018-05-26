<?php
require 'config.php';


	try {	
		if(isset($_POST['submit'])) {
			$stmt=$con->prepare("INSERT into registration(Name,Email,University,Password,Phone_Number)VALUES(:name,:email,:university,:password,:phone)");
			$stmt->bindParam(':name',$name);
			$stmt->bindParam(':email',$email);
			$stmt->bindParam(':university',$pwd);
			$stmt->bindParam(':password',$password);
			$stmt->bindParam(':university',$univ);
			$stmt->bindParam(':phone',$phone);


			$name=$_POST['name'];
			$email=$_POST['email'];
			$pwd=$_POST['pwd'];
			$password=md5($pwd);	
			$univ=$_POST['univ'];
			$phone=$_POST['phone'];
			$stmt->execute();
			header("location:login.html");
			echo "Registered Successfully";
		}
		else {
			echo"submit not working";
		}
	}
	catch(PDOException $e) {
		echo "Error:".$e->getMessage();
	}


?>


