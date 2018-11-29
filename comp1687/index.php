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

	<title>Home Page</title>
	<base href="/"/>

</head>
<body>
							


<div class="uk-section uk-container">
    <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid></div>

    <h2><b><center>JobsWatch</center></b></h2>

    <form style="border: 3px solid #ddd; border-radius: 10px; padding: 10px;" class="uk-form-stacked js-register">


        <div class="uk-section uk-container ">
            <?php echo "Hello world. Today is:";
            echo date(" Y-m-d"); ?>
            <p>
                <a href="comp1687/login.php">Login</a>
                <a href="comp1687/Register.php">Register</a>
            </p>
        </div>



    </form>
</div>

<?php require_once "inc/footer.php"; ?>


</body>
</html>