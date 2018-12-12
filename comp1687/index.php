<?php
	//allow the config
	define('__CONFIG__', true);
	//require the config
 	require_once ('./inc/config.php');  //possibly have to change the location
        require ('./inc/navbar.php');
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

    <center><img src="/~za1180x/comp1687/jobswatch.png" alt="sitelogo"></center>

    <form style="border: 3px solid #ddd; border-radius: 10px; padding: 10px;" class="uk-form-stacked js-register">


        <div class="uk-section uk-container">
            <div class="homepagetext">
                <h3><center><b>Welcome to the Royal Borough of Greenwich's job finding platform that brings the community together</b></center></h3>
                <br>
                <p><h4>JobsWatch is Greenwich's first community-based, time banking job finder. If you'd like to find out more about what and how we do it,
                    then click on the <a href="/~za1180x/comp1687/about.php">about us</a> page!</h4></p>
            </div>

            <p>
            <center><a<?php  if(isset($_SESSION['user_id'])) echo " style='display: none';"; ?> style="width:165px; float:left" class="uk-button uk-button-default" href="/~za1180x/comp1687/register.php">Register Now</a></center>
            <center><a<?php  if(isset($_SESSION['user_id'])) echo " style='display: none';"; ?> style="width:160px; float:right" class="uk-button uk-button-default" href="/~za1180x/comp1687/login.php">Login Now</a></center>
            </p>

        </div>
    </form>
</div>

<?php require_once "inc/footer.php"; ?> <!--//possibly have to change the location -->


</body>
</html>
