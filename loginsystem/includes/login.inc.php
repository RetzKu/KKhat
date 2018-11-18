<?php

session_start();

if(isset($_POST['submit']))
{
	include 'dbh.inc.php';

	$uid = mysqli_real_escape_string($conn,$_POST['uid']);
	$pwd = mysqli_real_escape_string($conn,$_POST['pwd']);
	//error handles
	if (empty($uid) || empty($pwd))
	{
		header("Location: ../signup.php?login=empty");
		exit();
	}

	$sql = "SELECT * FROM users WHERE user_uid='$uid' OR user_email='$uid'";
	$result = mysqli_query($conn, $sql);



	if (!$result) 
	{
		header("Location: ../signup.php?login=dberror");
		exit();
	}

	$resultCheck = mysqli_num_rows($result);
	if($resultCheck == 0)
	{
		header("Location: ../signup.php?login=error");
		exit();
	}
	$row = mysqli_fetch_assoc($result);
	$hashedCheck = password_verify($pwd,$row['user_pwd']);
	if($hashedCheck == false)
	{
		header("Location: ../signup.php?login=error");
		exit();
	}
	//sign the boi in
	$_SESSION['u_id'] = $row['user_id'];
	$_SESSION['u_first'] = $row['user_first'];
	$_SESSION['u_last'] = $row['user_last'];
	$_SESSION['u_email'] = $row['user_email'];
	$_SESSION['u_uid'] = $row['user_uid'];

	header("Location: ../index.php?login.success");
}
else
{
	header("Location: ../signup.php?login=error");
	exit();
}
