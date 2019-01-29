<?php
if (isset($_POST['signup-submit'])) {
	require 'dbh.inc.php';
	$username = $_POST['uid'];
	$email = $_POST['mail'];
	$password = $_POST['pwd'];
	$passwordRepeat = $_POST['pwd-repeat'];

	if (empty($username) || empty($password) || empty($password) || empty($passwordRepeat)) {
		header("location:../login.php?erro=emptyfields&uid=".$username."&mail=".$email);
		exit();
	}
	else if (!filter_var($email,FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
		
				header("location: ../login.php?error=invaildmailuid");
		exit();

	}
	else if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
				header("location:../login.php?erro=invalidmail&uid=".$username);
		exit();

	}
	else if (!preg_match("/^[a-zA-Z0-9]*$/",$username)) {
				header("location:../login.php?erro=invaliduid&mail=".$email);
		exit();

	}
	else if ($password !== $passwordRepeat) {
				header("location:../login.php?erro=passwordcheck&mail=".$email."&uid=".$username);
		exit();	
	}
	else {
$sql = "SELECT uidUsers From users Where uidUsers=?";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$sql)) {
		header("location:../login.php?erro=mysqlerror");
		exit();	
		}
else{
	mysqli_stmt_bind_param($stmt,"s",$username);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_store_result($stmt);
	$resultCheck = mysqli_stmt_num_rows($stmt);
	if ($resultCheck>0) {
				header("location: ../login.php?erro=usertaken&mail=".$email);
		exit();	

	}
	else{
		$sql = "INSERT INTO users (uidUsers,emailUsers,pwdUsers) VALUES (?,?,?)";
		$stmt = mysqli_stmt_init($conn);


if (!mysqli_stmt_prepare($stmt,$sql)) {
		header("location: ../login.php?erro=sqlerror33");
		exit();	
		}
		else{
			$hashedPwd = password_hash($password,PASSWORD_DEFAULT);


mysqli_stmt_bind_param($stmt,"sss",$username,$email,$hashedPwd);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_store_result($stmt);
			
header("location: ../login.php?signup=success");
		exit();	

				}

			}
		}		
	}

	mysqli_stmt_close($stmt);
	mysql_close($conn);
}
else{
	header("location: ../login.php");
		exit();	
}












