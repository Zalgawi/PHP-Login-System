<?php
	//allow the config
	define('__CONFIG__', true);
	//require the config
 	require_once "inc/config.php";  //possibly have to change the location
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

    <center><img src="/comp1687/jobswatch.png" alt="sitelogo"></center>

    <form style="border: 3px solid #ddd; border-radius: 10px; padding: 10px;" class="uk-form-stacked js-register">


        <div class="uk-section uk-container ">
            <div class="homepagetext">
                <h3><center><b>Welcome to the job finding platform that brings that community together</b></center></h3>
                <br>

                <?php echo "Hello world. Today is:";
                echo date(" Y-m-d"); ?>
            </div>


            <p>
                <center><p><a class="uk-button uk-button-default" href="comp1687/login.php">Login Now</a></p></center>
                <center><p><a class="uk-button uk-button-default" href="comp1687/Register.php"p">Register Now</a></p></center>
                <a href="comp1687/login.php">Login</a> <!--possibly have to change the location -->
                <a href="comp1687/Register.php">Register</a> <!--possibly have to change the location -->
            </p>
        </div>



    </form>
</div>

<?php require_once "inc/footer.php"; ?> <!--//possibly have to change the location -->


</body>
</html>