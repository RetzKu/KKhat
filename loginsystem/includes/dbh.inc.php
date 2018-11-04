<?php


$dbServername = "mikak.dclabra.fi"; //"localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "loginsystem";

echo "selecting database", PHP_EOL;

$conn = mysql_connect($dbServername,$dbUsername,$dbPassword);
if(!$conn)
{
	die('Could not connect: ' . mysql_error());
}
@mysql_select_db($dbName) or die('Could not find database: ' . mysql_error());

echo "selecting database", PHP_EOL;
