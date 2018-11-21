<?php

session_start();
if(isset($_POST['submit']))
{
    include "includes/dbh.inc.php"


    include_once 'includes/dbh.inc.php';
    // $uid = mysqli_real_escape_string($conn,$_POST['uid']);

    $pic_link = $_POST['link']

    $uid = $_SESSION['u_uid'];

    $sql = "UPDATE users SET user_profile_picture = 'https://i.ytimg.com/vi/PFnwhPlQOW0/maxresdefault.jpg' WHERE user_uid='$uid' OR user_email='$uid'";
    //$sql = "SELECT * FROM users WHERE user_uid=\"thickmick\" ";
    $result = mysqli_query($conn, $sql);

    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck == 0) {
        echo "kuinka olet nolla";
    }

    echo "$resultCheck";
}