<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


echo "reererererererer",PHP_EOL;
echo ("<h1>toimiiks taa php taaskaan</h1>");

session_start();
if(isset($_POST['submit']))
{
    include_once 'includes/dbh.inc.php';


    // include_once 'includes/dbh.inc.php';
    // $uid = mysqli_real_escape_string($conn,$_POST['uid']);

    $pic_link = $_POST['link'];

    $uid = $_SESSION['u_uid'];

// https://i.ytimg.com/vi/PFnwhPlQOW0/maxresdefault.jpg

    if (!is_null($pic_link)) {

	    $sql = "UPDATE users SET user_profile_picture = '$pic_link' WHERE user_uid='$uid' OR user_email='$uid'";
	    //$sql = "SELECT * FROM users WHERE user_uid=\"thickmick\" ";
	    $result = mysqli_query($conn, $sql);

	    // $resultCheck = mysqli_num_rows($result);
	    // if ($resultCheck == 0) {
		// echo "kuinka olet nolla";
	    // }

	    echo("$uid <br> $pic_link <br> $sql <br> $result");

	    echo "$resultCheck";
    } 

    header("Location: profile_page.php");
    exit();
}
?>
