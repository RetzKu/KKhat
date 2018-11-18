<?php
include_once 'header.php';
?>
<!-- <section class="main-container">
	<div class="main-wrapper">
		<h2>Home</h2> 

</section> -->

<?php

if(isset($_SESSION['u_id']))
{
	echo "<form class=\"signup-form\" action=\"profile_page.php\"> <button type=\"profiili\" name=\"profiili\">profioli</button></form>";


}

?>
<html>
<head>
	<style>
		.wrapper {
			position:relative;
			top: 60px;
			left: 0px;
			margin:auto;
			max-width:1000px;
			height:100%;
		}
		.chat_input {
			position: fixed;
			margin-left:25%;
			margin-right:25%;
			margin-top: 0px;
			width:50%;
			height:10%; 
		}
		.chat_output {
			position: absolute;
			top:60px;
			left: 0;
			padding:20px;
			width: 100%;
			height:calc(100% - 300px);
		}
	</style>
</head>

<body>
	<div class="wrapper">
		<div class=chat_output></div>
			<textarea class="chat_input" placeholder="Deine Nachricht..."></textarea>
	</div>
</body>
</html>
<!-- </div> -->

<!--  ^^estaa kirjautumisen/syo inputit-->



<?php
include_once 'footer.php';
?>
