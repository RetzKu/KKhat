
<?php
include_once 'header.php';
?>

<link rel="stylesheet" type="text/css" href="style.css">
<section class="main-container">
	<div class="main-wrapper">
		<h2>Profile page</h2>

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
	</div>
</section>


<!-- TODO update profile picture button -->
<div id="container">
	<div id="left-nav">
			<div class="clip1">
			<a href="updatephoto.php" title="Change Profile Picture"><img src="<?php echo $row['profile_picture'] ?>"><button>Update Picture</button></a>
			</div>
			<div class="user-details">
				<h3><?php echo $firstname ?>&nbsp;<?php echo $lastname ?></h3>
				<h2><?php echo $username ?></h2>
			</div>
	</div>

	<div id="right-nav">
		<h1>Personal Info</h1>
		<hr />
		<br />
        <?php

        
        if(isset($_SESSION['u_id'])) {


            include 'dbh.inc.php';

            // $uid = mysqli_real_escape_string($conn,$_POST['uid']);

            $uid = $_SESSION['u_uid'];

	        $sql = "SELECT * FROM users WHERE user_uid='$uid' OR user_email='$uid'";
	        //$sql = "SELECT * FROM users WHERE user_uid=\"thickmick\" ";
	        $result = mysqli_query($conn, $sql);

            echo "[ ";
            echo "$uid";
            echo " ]";
            echo " motha fucking ass ";
            echo "$uid";
            echo " motha fucking ass ";
            echo "$result";
            echo " motha fucking ass ";
            echo " || $sql || ";
            // echo $result;
            echo " motha fucking ass ";

            echo "<h2> cuck </h2>";

            $resultCheck = mysqli_num_rows($result);
            if ($resultCheck == 0) {
                echo "kuinka olet nolla";
            }
            echo "'$resultCheck'";

            $asfd = mysqli_fetch_assoc($result);
            $user_last = $asdf['user_last'];
            echo "'$user_last'";

            // echo "hei ukko";
            // echo "hei ukko2";

            //$sql = "SELECT * FROM users WHERE user_uid='$uid' OR user_email='$uid'";

            // TODO: jatka
            // https://www.sourcecodester.com/tutorials/php/10381/profile-information-page-phpmysql.html

            // echo "websocket moi";

            while ($test = mysqli_fetch_assoc($result)) {
                echo "<div>";
                echo "hahah";
                echo "hah";
                echo " <label>Firstname</label>&nbsp;&nbsp;&nbsp;<b>".$test['user_first']."</b>";
                echo "</div>";
            }
        } else {
            echo "motha fucking ass";
        }
        




/*		while($test = mysqli_fetch_array($result))
		{
			$id = $test['user_id'];	
			echo " <div class='info-user'>";
			echo " <div>";
			echo " <label>Firstname</label>&nbsp;&nbsp;&nbsp;<b>".$test['firstname']."</b>";
			echo "</div> ";
			echo "<hr /> ";		
			echo "<br /> ";		
			echo " <div>";
			echo " <label>Lastname</label>&nbsp;&nbsp;&nbsp;&nbsp;<b>".$test['lastname']."</b>";
			echo "</div> ";
			echo "<hr /> ";	
			echo "<br /> ";		
			echo " <div>";
			echo " <label>Username</label>&nbsp;&nbsp;&nbsp;<b>".$test['username']."</b>";
			echo "</div> ";
			echo "<hr /> ";	
			echo "<br /> ";		
			echo " <div>";
			echo " <label>Birthday</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>".$test['birthday']."</b>";
			echo "</div> ";
			echo "<hr /> ";	
			echo "<br /> ";		
			echo " <div>";
			echo " <label>Gender</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>".$test['gender']."</b>";
			echo "</div> ";
			echo "<hr /> ";	
			echo "<br /> ";		
			echo " <div>";
			echo " <label>Number</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>".$test['number']."</b>";
			echo "</div> ";
			echo "<hr /> ";	
			echo "<br /> ";	
			echo "</div> ";
			echo "<br /> ";		
			echo " <div class='edit-info'>";
			echo " <a href ='edit_profile.php?user_id=$id'><button>Edit Profile</button></a>";
			echo "</div> ";
			echo "<br /> ";	
			echo "<br /> ";	
		} */
		?>
	</div>
</div>


<?php
	include_once 'footer.php';
?>
