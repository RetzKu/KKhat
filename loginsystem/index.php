// löydä mut nilkki
<?php
include_once 'header.php';
?>
<section class="main-container">
	<div class="main-wrapper">
		<h2>Home</h2>
<?php

if(isset($_SESSION['u_id']))
{
	echo "Hello "; 
	echo  $_SESSION['u_uid'];
		
	echo "<form class=\"signup-form\" action=\"profile_page.php\"> <button type=\"profiili\" name=\"profiili\">profioli</button></form>";
}

?>
	</div>
</section>

<?php
include_once 'footer.php';
?>
