<?php
session_start();

$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "liveforum";

$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
if(isset($_POST['submit'])){

	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

	//error handlers
	//check if inputs are empty

	if(empty($uid) || empty($pwd)){
		header("location: login.php?login=empty");
		exit();

	}else{
		$sql="SELECT * FROM login WHERE user_uid='$uid' OR user_email='$uid'";
		$result= mysqli_query($conn, $sql);
		$resultcheck = mysqli_num_rows($result);
		if($resultcheck < 1){
			header("location: login.php?login=error");
			exit();
		}else{
			if ($row = mysqli_fetch_assoc($result)) {
			$hashedpwdcheck = password_verify($pwd, $row['user_pwd']);
			if($hashedpwdcheck == false){
				header("location: login.php?login=error");
				exit();

			}elseif ($hashedpwdcheck == true) {
				$_SESSION['u_id'] = $row['user_id'];
				$_SESSION['u_first'] = $row['user_first'];
				$_SESSION['u_last'] = $row['user_last'];
				$_SESSION['u_email'] = $row['user_email'];
				$_SESSION['u_uid'] = $row['user_uid'];
				header("location: index.php");
				exit();

				}
			}
		}
	}
}else{
	header("location: login.php?login=error");
}
?>
