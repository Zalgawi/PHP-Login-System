<?php
	//allow the config
	define('__CONFIG__', true);
	//require the config
 	require_once "inc/config.php"; 
 ?>

<!DOCTYPE html>
<html>
<head>
	<!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.24/css/uikit.min.css" />

	<title>Page Title</title>
	<base href="/"/>

</head>
<body>
							
<div class="uk-section uk-container ">
	<?php echo "Hello world. Today is:";
	echo date(" Y-m-d");

	 ?>
	 <p>
	 	<a href="comp1687/login.php">Login</a>
	 	<a href="comp1687/Register.php">Register</a>
	 </p>
</div>

<?php require_once "inc/footer.php"; ?>


</body>
</html>