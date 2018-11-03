<?php

if (isset($_POST['submit'])) {
	include_once 'dbh.inc.php';
	$first = mysql_real_escape_string($_POST['first']) ;
	$last = mysql_real_escape_string($_POST['last']) ;
	$email = mysql_real_escape_string($_POST['email']) ;
	$uid = mysql_real_escape_string($_POST['uid']) ;
	$pwd = mysql_real_escape_string($_POST['pwd']) ;

	if (empty($first) || empty($last) || empty($email)|| empty($uid) || empty($pwd))   {
		# code...
		header("Location: ../signup.php?signup=empty");
		exit();
	} 
	else 
	{
		// Check if input characters are valid 
		if (!preg_match("/^[a-zA-Z]*$/",$first)
			|| !preg_match("/^[a-zA-Z]*$/",$last))
		{
			header("Location: ../signup.php?singup=invalid");
			exit();
		}
		else
		{
			//Check if email is valid
			if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
				header("Location: ../signup.php?singup=email");
				exit();
			}
			else
			{
				$sql = "SELECT * FROM users WHERE user_uid='$uid'";
				$result = mysql_query($sql);
				$resultCheck = mysql_num_rows ($result);

				if(resultCheck > 0)
				{
					header("Location: ../signup.php?singup=usertaken");
					exit();
				}
				else
				{
					//hash the password
					$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
					//lets insert user to database
					$sql = "INSERT INTO users (user_first,user_last,user_email,user_uid,user_pwd)
						VALUES ('$first','$last','$email','$uid','$hashedPwd');";
					//push bois in and if problems do error tests
					$result = mysql_query($sql);
					//$resultCheck = mysql_num_rows ($result);
					header("Location: ../signup.php?singup=success");
					exit();
				}
			}
		}		
		header("Location: ../signup.php?singup=empty");
		exit();
	}

} else {
	header("Location: ../signup.php");
	exit();
}
//TODO check if pwd has small and large and if username has admin
