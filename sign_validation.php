<?php

$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "liveforum";

$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

if (isset($_POST['submit'])) {
	
	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

	//error handlers 
	//check for empty fields
	if (empty($first) || empty($last) || empty($email)|| empty($uid)|| empty($pwd)) {
		header("location: signup.php?signup=empty");
		exit();
	}
	else
	{
		//check if input are valid
		if(!preg_match("/^[a-z,A-Z]*$/", $first) || !preg_match("/^[a-z,A-Z]*$/", $last))  {
			header("location: signup.php?signup=invalid");
			exit();
		}
		else{
			//CHECK EMAIL IS VALID OR NOT
			if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
			header("location: signup.php?signup=email");
			exit();
			}
			else{
				$sql = "SELECT * FROM login WHERE user_uid='$uid'";
				$result = mysqli_query($conn,$sql);
				$resultcheck = mysqli_num_rows($result);

				if($resultcheck > 0){
					header("location: signup.php?signup=usertaken");
					exit();
				} else{
					//hashing the password
					$hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
					//insert the user into database
					$sql= "INSERT INTO login (user_first, user_last, user_email, user_uid, user_pwd)
					 VALUES ('$first','$last','$email','$uid','$hashedpwd');";
					mysqli_query($conn,$sql);
					header("location signup.php?signup=sucess");
					exit();
				}
			}

		}
	}

}else
{

	header("location:signup.php");
	exit;
}
