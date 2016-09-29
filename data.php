<?php

	//ühendan sessiooniga
	require("functions.php");
	
	//kui ei ole sisseloginud, suunan login lehele
	if (isset($_SESSION["userID"])) {
		header("Location: login.php");
	}
	
	// kas aadressireal on logout
	if (isset($_GET["logout"])) {
		session_destroy();
		header("Location: login.php");
	}

?>
<h1>Data</h1>


<p>
	Tere tulemast <?=$_SESSION["userEmail"];?>!
	<a href="?logout=1">logi välja</a>


</p>