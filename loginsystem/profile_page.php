<?php
include_once 'header.php';
?>

<head>
<style>
	body {
background-image: url('../image/b.png');
background-attachment: fixed;
background-size: 100% 100%;
}


#header {
background-color:#73cfff;
width:100%;
margin-top:-8px;
}

.head-view {
margin:auto;
width:1300px;
line-height:50px;
}

.head-view label {
color:#ffffff;
font-size:25px;
font-weight:bold;
text-shadow:3px 3px 3px #000000;
}

.head-view ul {
width: 1200px;
margin: auto;
}

.head-view  li {
display: inline;
color: #fff;
margin: 0px 30px 0px 5px;
}

.head-view  li a {
text-decoration:none;
}

.head-view label:hover {
padding: 5px 0px 5px 0px;
border-bottom: 4px solid #fff;
}

.active {
padding: 5px 0px 5px 0px;
border-top: 4px solid #fff;
}

.head-view b {
color:#ffffff;
text-shadow:3px 3px 3px #000000;
font-size:50px;
}

.btn-sign-in {
color:#000000;
font-size:19px;
width:100px;
line-height:30px;
background-color:#ffffff;
border:2px solid #0bacff;
border-radius:100px;
-webkit-border-radius:100px;
-moz-border-radius:100px;
-o-border-radius:100px;
}

.btn-sign-in:hover {
color:#ffffff;
background-color:#0bacff;
border:2px solid #0bacff;
}

.btn-sign-up {
color:#ffffff;
font-size:19px;
width:100px;
line-height:30px;
background-color:#0bacff;
border:2px solid #0bacff;
border-radius:100px;
-webkit-border-radius:100px;
-moz-border-radius:100px;
-o-border-radius:100px;
}

.btn-sign-up:hover {
color:#ffffff;
background-color:#0488cd;
border:2px solid #0488cd;
}

#container {
width:1200px;
margin:auto;
}

#left-nav {
width:  348px;
height: 280;
float:left;
border: 1px solid #dfe0e4;
background-color: #73cfff;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
border-radius: 4px;
margin-top:10px;
resize: none;
}

#left-nav1 {
width: 90%;
margin:auto;
background-color: #ffffff;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
border-radius: 4px;
margin-top:20px;
margin-bottom:50px;
}

#left-nav1 button {
float:right;
color:#ffffff;
font-size:19px;
width:150px;
background-color:#0bacff;
border:2px solid #0bacff;
border-radius:100px;
-webkit-border-radius:100px;
-moz-border-radius:100px;
-o-border-radius:100px;
}

#left-nav1 button:hover {
color:#ffffff;
background-color:#0488cd;
border:2px solid #0488cd;
}

#left-nav1 h2 {
color:#000000;
}

fieldset {
border:3px solid #CCCCCC;
border-radius:4px;
}

table td {
color:#000000;
font-size:20px;
}

table a {
text-decoration:none;
color:#0000ff;
}

table a:hover {
color:#ff0000;
}

#left-nav1 table {
width:90%;
margin:auto;
}

#left-nav1 img {
width:60px;
height:60px;
margin:auto;
border:2px solid #CCCCCC;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
border-radius: 4px;
}

#left-nav1 b {
color:#000000;
font-size:18px;
}

#left-nav1 b:hover {
color:#ffffff;
text-shadow:2px 2px 2px #000000;
}

#left-nav1 label {
color:#000000;
font-size:23px;
font-weight:bold;
}

.clip1{
margin-top: 10px;
margin-left: 15px;
position: relative;
width: 95px;
height: 100px;
border: solid 2px #fff;
-webkit-border-radius: 5px;
-moz-border-radius: 5px;
border-radius: 5px;
}
.clip1 img {
width: 95px;
height: 100px;
margin: auto;	
left: -15px;
}

.user-details {
width:240px;
margin: -40px 0 0 125px;
font-size: 16px;
line-height: 25px;
text-align: center;
}

.user-details h3, h2 {
color:#ffffff;
text-shadow:2px 2px 2px #000000;
}

#right-nav {
float:right;
width:800px;
background-color:#ffffff;
-webkit-border-radius: 5px;
-moz-border-radius: 5px;
border-radius: 5px;
border:3px solid #CCCCCC;
margin-top:10px;
/* text-shadow:1px 1px 1px #000000; */
}

.info-user {
width:400px;
margin:auto;
color:#f0f0f0;
}

.edit-info {
float:right;
margin-right:10px;
}

#right-nav  button {
float:right;
color:#ffffff;
font-size:19px;
width:150px;
background-color:#0bacff;
border:2px solid #0bacff;
border-radius:100px;
-webkit-border-radius:100px;
-moz-border-radius:100px;
-o-border-radius:100px;
}

#right-nav  button:hover {
color:#ffffff;
background-color:#0488cd;
border:2px solid #0488cd;
}

#right-nav hr {
width:80%;
margin:auto;
}

#left-nav  button {
color:#ffffff;
font-size:13px;
width:103px;
background-color:#0bacff;
border:2px solid #0bacff;
border-radius:100px;
-webkit-border-radius:100px;
-moz-border-radius:100px;
-o-border-radius:100px;
}

#left-nav  button:hover {
color:#ffffff;
background-color:#0488cd;
border:2px solid #0488cd;
}

#right-nav label {
color:#000000;
font-size:25px;
/* font-weight:bold;  bold or not ree*/
margin-left:30px;
}

#right-nav b {
color:#000000;
font-size:20px;
margin-left:30px;
}

#right-nav h1 {
text-indent:10px;
}

.post-text {
width:99%;
height:150px;
border:3px solid #73cfff;
-webkit-border-radius: 5px;
-moz-border-radius: 5px;
border-radius: 5px;
font-size:19px;
text-indent:5px;
}

.btn-add-photo {
color:#ffffff;
font-size:19px;
width:200px;
line-height:30px;
background-color:#0bacff;
border:2px solid #0bacff;
border-radius:100px;
-webkit-border-radius:100px;
-moz-border-radius:100px;
-o-border-radius:100px;
}

.btn-add-photo:hover {
color:#ffffff;
background-color:#0488cd;
border:2px solid #0488cd;
}

.btn-submit-photo {
color:#ffffff;
font-size:19px;
width:150px;
background-color:#0bacff;
border:2px solid #0bacff;
border-radius:100px;
-webkit-border-radius:100px;
-moz-border-radius:100px;
-o-border-radius:100px;
}

.btn-submit-photo:hover {
color:#ffffff;
background-color:#0488cd;
border:2px solid #0488cd;
}

#right-nav1 {
margin-top: 10px;
width: 65.5%;
background-color:#ffffff;
-webkit-border-radius: 5px;
-moz-border-radius: 5px;
border-radius: 5px;
border:3px solid #CCCCCC;
height: auto;
float: right;
padding: 7px;

}

.profile-pics {
position:relative;
}

.profile-pics img {
width:70px;
height:70px;
border:2px solid #CCCCCC;
-webkit-border-radius: 5px;
-moz-border-radius: 5px;
border-radius: 5px;
}

.profile-pics b {
color:#000000;
text-shadow:1px 1px 1px #73cfff;
margin-left:16px;
font-size:23px;
}

.profile-pics strong {
color:#000000;
margin-left:10px;
font-size:20px;
}

.post-content {
width:100%;
border:2px solid #CCCCCC;
}

.post-content p {
text-indent:10px;
font-size:23px;
}

.post-content img {
border:3px solid #CCCCCC;
width:50%;
height:50%;
}

.delete-post {
float:right;
margin-right:5px;
margin-top:5px;
}

.btn-delete {
color:#ffffff;
font-size:10px;
float:right;
width:30px;
background-color:#0bacff;
border:1px solid #0bacff;
border-radius:5px;
-webkit-border-radius:5px;
-moz-border-radius:5px;
-o-border-radius:5px;
}


.btn-delete:hover {
color:#000000;
font-size:10px;
width:30px;
font-weight:bold;
background-color:#ffffff;
border:1px solid #0bacff;
border-radius:5px;
-webkit-border-radius:5px;
-moz-border-radius:5px;
-o-border-radius:5px;
}

/*upload*/

.ed{
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
margin-bottom: 4px;
}

#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
background-color:#00CCFF;
height: 34px;
}

#imagelist{
border: thin solid silver;
float:left;
margin:8px 0px 0px 8px;
padding:8px;
}

p{
margin:0;
padding:0;
text-align: center;
font-style: italic;
font-size: smaller;
text-indent: 0;
}

#caption{
margin-top: 5px;
color:#ffffff;
font-size:23px;
}

img{
height: 150px;
width: 180px;
}

.photo-select {
border: thin solid silver;
float:left;
margin-left:5px;
margin-right:5px;
margin-bottom:10px;
padding:4px;
width:180px;
}

.photo-select img {
width:150px;
height:150px;
border:3px solid #cccccc;
}

.btn-delete-photos {
color:#ffffff;
font-size:10px;
float:right;
width:50px;
background-color:#0bacff;
border:1px solid #0bacff;
border-radius:5px;
-webkit-border-radius:5px;
-moz-border-radius:5px;
-o-border-radius:5px;
text-decoration:none;

}

.btn-delete-photos a {
text-decoration:none;
}

.btn-delete-photos:hover {
color:#000000;
font-size:10px;
width:50px;
font-weight:bold;
background-color:#ffffff;
border:1px solid #0bacff;
border-radius:5px;
-webkit-border-radius:5px;
-moz-border-radius:5px;
-o-border-radius:5px;
text-decoration:none;
}


</style>
</head>

<link rel="stylesheet" type="text/css" href="style.css">

<section class="main-container">
	<div class="main-wrapper">
		<h2>Profile page</h2>

<!--
        <?php
            echo "hello";
            $muuttuja="eetu";
            if ($muuttuja == "eetu") {
                echo "Logged in as " . $muuttuja;

                echo "<h1>Profile picture</h1>";
                echo "<img src=\"https://i.redd.it/y2bfgm52vhwx.jpg\" alt=\"Kkona\">";
                echo "<button type=\"button\">Paina mua</button>";

            } else {
                echo "please login";
            }
		?>
		-->
	</div>
</section>


<!-- TODO update profile picture button -->
<!--
			<a href="updatephoto.php" title="Change Profile Picture"><img src="<?php echo $row['profile_picture'] ?>"><button>Update Picture</button></a>
-->

<!--
<div id="container">
	<div id="left-nav">
			<div class="clip1">
				

				<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

            		include_once 'includes/dbh.inc.php';
            		$uid = $_SESSION['u_uid'];
	        		$sql = "SELECT * FROM users WHERE user_uid='$uid' OR user_email='$uid'";
	        		$result = mysqli_query($conn, $sql);
            		$resultCheck = mysqli_num_rows($result);
            		if ($resultCheck == 0 ) {
                		echo "kuinka olet nolla";
						echo "<img src=\"https://i.redd.it/y2bfgm52vhwx.jpg\" alt=\"Kkona\">"
					} else  {

	// $row = mysqli_fetch_assoc($result);
	// $hashedCheck = password_verify($pwd,$row['user_pwd']);

						$row  = mysqli_fetch_assoc($result));
						$kuva = $row['user_profile_picture'];
						echo "$kuva";

						if (is_null($kuva)) { 
							// default kuva
							echo "<img src=\"https://i.redd.it/y2bfgm52vhwx.jpg\" alt=\"Kkona\">"
						} else {
							echo "<img src=\"$kuva\" alt=\"Kkona\">"
						}
					}

            		echo "$resultCheck";
				?>
				

			</div>

			<div class="user-details">
				<h3><?php echo "php" ?>&nbsp;<?php echo "Gentleman" ?></h3>
				<h2><?php echo "AE2" ?></h2>
				<br>
				<br>
			</div>
			<div class="user-details">
			<button type="button" onclick="vaihdaKuva()"> Vaihda </button>
			<textarea id="rikos" rows="1"></textarea>
			</div>


		<form action="change_pic.php.php" method="POST">
		<input type="text" name="link" placeholder="ProfilePicLink">
			<button type="submit" name="submit">Change</button>
        </form>
	
	</div>
-->

<div>
	<div id="right-nav">
		<h1>Personal Info</h1>
		<hr />
		<br />
        <?php

        
        if(isset($_SESSION['u_id'])) {


            include_once 'includes/dbh.inc.php';

            // $uid = mysqli_real_escape_string($conn,$_POST['uid']);

            $uid = $_SESSION['u_uid'];

	        $sql = "SELECT * FROM users WHERE user_uid='$uid' OR user_email='$uid'";
	        //$sql = "SELECT * FROM users WHERE user_uid=\"thickmick\" ";
	        $result = mysqli_query($conn, $sql);

            $resultCheck = mysqli_num_rows($result);
            if ($resultCheck == 0) {
                echo "kuinka olet nolla";
			} 



            echo "$resultCheck";

            // TODO: jatka
            // https://www.sourcecodester.com/tutorials/php/10381/profile-information-page-phpmysql.html

            while ($test = mysqli_fetch_assoc($result)) {
				$id = $test['user_id'];	
				echo " <div class='info-user'>";
				echo " <div>";
				echo " <label>Firstname</label>&nbsp;&nbsp;&nbsp;<b>".$test['user_first']."</b>";
				echo "</div> ";
				echo "<hr /> ";		
				echo "<br /> ";		
				echo " <div>";
				echo " <label>Lastname</label>&nbsp;&nbsp;&nbsp;&nbsp;<b>".$test['user_last']."</b>";
				echo "</div> ";
				echo "<hr /> ";	
				echo "<br /> ";		
				echo " <div>";
				echo " <label>Username</label>&nbsp;&nbsp;&nbsp;<b>".$test['user_uid']."</b>";
				echo "</div> ";
				echo "<hr /> ";	
				echo "<br /> ";		
				echo " <div>";
				echo " <label>email</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>".$test['user_email']."</b>";
				echo "</div> ";
				echo "</div> ";
				echo "<br /> ";		
				echo " <div class='edit-info'>";
				echo " <a href ='edit_profile.php?user_id=$id'><button>Edit Profile</button></a>";
				echo "</div> ";
				echo "<br /> ";	
				echo "<br /> ";	
            }
        } else {
            echo "motha fucking ass";
        }
		?>
	</div>
</div>


<?php
	include_once 'footer.php';
?>