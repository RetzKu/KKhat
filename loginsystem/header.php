<!-- moi poika, aiokko kommunikoida kanssamme -->
<!-- löysin sut viimein! -->
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<header>
	<nav>
		<div class="main-wrapper">
			<ul>
				<li><a href="index.php">home</a></li>
			</ul>
			<div class="nav-login">
<?php
if(isset($_SESSION['u_id']))
{
	echo '<form action="includes/logout.inc.php" method="POST">
		<button type="submit" name="submit">Logout</button>
		</form>';

}
else
{
	echo '<form action="includes/login.inc.php" method="POST">
		<input type="text" name="uid" placeholder="Username/e-mail">
		<input type="password" name="pwd" placeholder="password">
		<button type="submit" name="submit">Login</button>
		</form>
		<a href="signup.php">Sign up</a>';
}
?>

			</div>
		</div>
	</nav>
</header>

<!-- 
	tällänen table tällä hetkellä
	database nimellä loginsystem
	CREATE TABLE users (
	user_id int(11) not null AUTO_INCREMENT PRIMARY KEY,
	user_first varchar(256) not null,
	user_last varchar(256) not null,
	user_email varchar(256) not null,
	user_uid varchar(256) not null,
	user_pwd varchar(256) not null
);
-->
