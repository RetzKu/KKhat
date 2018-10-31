
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

<?php
	include_once 'footer.php';
?>
