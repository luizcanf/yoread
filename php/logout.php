<?php
	session_start();
	$_SESSION['user']['username'] = null;
	$_SESSION['user']['nome'] = null;
	$_SESSION['user']['email'] = null;
	session_destroy();
	header("Location: ../index.html");
?>
