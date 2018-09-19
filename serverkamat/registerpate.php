<?
// ota käyttäjä ja password indexistä
$UserReg = $_POST["user"];
//echo $UserLogin, PHP_EOL;
$PasswordReg = $_POST["pass"];
//echo $PasswordLogin, PHP_EOL;



$database = "kona";
$connect = mysql_connect("localhost","root","");//$sqlUser,$sqlPassWord);
@mysql_select_db($database) or die(mysql_error());

$query = "SELECT * FROM `users` WHERE `user` = '$UserLogin'";
$querypass = "SELECT * FROM `users` WHERE `password` = '$PasswordLogin'";
?>
