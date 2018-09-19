<?
// ota käyttäjä ja password indexistä
$UserReg = $_POST["reguser"];
//echo $UserLogin, PHP_EOL;
$PasswordReg = $_POST["regpass"];
//echo $PasswordLogin, PHP_EOL;


$database = "kona";
$connect = mysql_connect("localhost","root","");
@mysql_select_db($database) or die(mysql_error());

$query = "SELECT * FROM `users` WHERE `user` = '$UserReg'";

$result = mysql_query($query);
if (!$result) { // add this check.
    die('Invalid query: ' . mysql_error());
}

$row = mysql_fetch_array($result);
//password and user fetch
$serveruserPrev = $row["user"];

echo $serveruserPrev, PHP_EOL;

if($serveruserPrev == $UserReg)
{
    //userin nimi on jo varattu
    //header("Location: Fail.html");
    header("Location: UsernameTaken.html");
    echo "POIKA ON JO KOTONAA" ,PHP_EOL; 
	mysql_close();
}
else 
{
    if($UserReg == "")
    {
        echo "<span class='popuptext' id='myPopup'>Popup text...</span>";
        die("Username cannot be empty");
        header("Location: Fail.html");                        
    }    
    if($PasswordReg == "")
    {
        echo "<span class='popuptext' id='myPopup'>Popup text...</span>";
        die("Password cannot be empty");
        // UUS filu
	    header("Location: Fail.html");
        echo "<br><center> Database output </center></br>";
    }
    else
    {
        //chekkaa pitääks user ja pass olla stringeja
        $sql = "INSERT INTO users (user, password)
                VALUES ('$UserReg','$PasswordReg')";
        $retval = mysql_query( $sql, $connect );
        if ( ! $retval ) 
        {
            echo "ERROR!" , PHP_EOL;
            die('Could not enter data: ' . mysql_error());
        }
        else 
        {
            echo "New record created successfully";
            echo "Error: " . $sql . "<br>" .mysql_error() ;
            header("Location: home.html");
            
        }
    }
	mysql_close();
}
?>