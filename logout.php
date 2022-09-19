<?php
	sleep(2);
	session_start();
	session_destroy();
	echo'<script type="text/javascript">
    alert("Sesión finalizada...");
    window.location.href="index.php";
    </script>';
	/* header("Location: index.php");
	echo '<script>alert("Welcome to Geeks for Geeks")</script>'; */
?>