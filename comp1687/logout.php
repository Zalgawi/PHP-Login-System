<?php
	ob_start();
	session_start();
	session_destroy();
	session_write_close();
	setcookie(session_name(),'',0,'/');
	session_regenerate_id(true);
	header("Location: /~za1180x/comp1687/index.php"); //possibly have to change the location
?>
