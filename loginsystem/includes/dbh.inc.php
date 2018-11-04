<?php


$dbServername = "localhost";//"mikak.dclabra.fi"; //"localhost";
$dbUsername = "root";
$dbPassword = "nettis";
$dbName = "loginsystem";

echo "selecting database reee", PHP_EOL;

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
if(!$conn)
{
	die('Could not connect: ' . mysqli_error());
}

//@mysql_select_db($dbName) or die('Could not find database: ' . mysql_error());

echo "database selected", PHP_EOL;
