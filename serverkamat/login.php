<?
// ota käyttäjä ja password indexistä
$UserLogin = $_POST["user"];
//echo $UserLogin, PHP_EOL;
$PasswordLogin = $_POST["pass"];
//echo $PasswordLogin, PHP_EOL;

// turhia periaatteessa
$sqlPassWord="";
$sqlUser="Pate";

// yhistä databaseen tai failaa
$database = "kona";
$connect = mysql_connect("localhost","root","");//$sqlUser,$sqlPassWord);
@mysql_select_db($database) or die(mysql_error());

$query = "SELECT * FROM `users` WHERE `user` = '$UserLogin'";
$querypass = "SELECT * FROM `users` WHERE `password` = '$PasswordLogin'";

$result = mysql_query($query);
if (!$result) { // add this check.
    die('Invalid query: ' . mysql_error());
}
$resultpass = mysql_query($querypass);
if (!$result) { // add this check.
    die('Invalid query: ' . mysql_error());
}

$row = mysql_fetch_array($result);
$rowpass = mysql_fetch_array($resultpass);

//password and user fetch
$serveruser = $row["user"];
$serverpassword = $row["password"];

echo $serveruser, PHP_EOL;
echo $serverpassword, PHP_EOL;


if($serveruser != "" && $serverpassword != "")
{
	echo "Sisalla ollaan", PHP_EOL;
	if(!$result)
	{
		die("Username or password is invalid");
	}
	echo "<br><center> Database output </center></br>";
	mysql_close();

	if($PasswordLogin == $serverpassword)
	{
		
		echo "Sisalla ollaan pass", PHP_EOL;
		header("Location: home.html");
	}
	else
	{
		echo "Sisalla ollaan fail", PHP_EOL;
		header("Location: Fail.html");
	}
}
else
{
	header("Location: Fail.html");
}
?>
