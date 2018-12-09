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
    <nav class="uk-navbar-container uk-margin"  uk-navbar>
        <div class="uk-navbar-left">

            <a class="uk-navbar-item uk-logo"  href="comp1687/index.php"><img src="/comp1687/jobswatchsmall.png" alt="sitelogo"></a>

            <ul class="uk-navbar-nav">
                <li>
                    <a href="comp1687/index.php">
                        <span class="uk-icon uk-margin-small-right" ></span>
                        <b>Home Page</b>
                    </a>
                </li>
                <li>
                    <a href="comp1687/about.php">
                        <span class="uk-icon uk-margin-small-right" ></span>
                        <b>About Us</b>
                    </a>
                </li>
                <li>
                    <a href="comp1687/jobs.php">
                        <span class="uk-icon uk-margin-small-right" ></span>
                        <b>Jobs</b>
                    </a>
                </li>
        </div>

        <div class="uk-navbar-center">
            <div class="uk-navbar-item">
                <form action="javascript:void(0)">
                    <input class="uk-input uk-form-width-small" style="width:350px; border-radius: 10px; " type="text" placeholder="Input">
                    <button class="uk-button uk-button-default" style="border-radius: 10px;">Button</button>
                </form>
            </div>
        </div>

        <div class="uk-navbar-right">
            <ul class="uk-navbar-nav">

                <li <?php  if(!isset($_SESSION['user_id'])) echo " style='display: none';"; ?>>
                    <a href="comp1687/search.php">
                        <span class="uk-icon uk-margin-small-right" ></span>
                        <b>Search Users</b>
                    </a>
                </li>
                <li <?php  if(!isset($_SESSION['user_id'])) echo " style='display: none';"; ?>>
                    <a href="comp1687/dashboard.php">
                        <span class="uk-icon uk-margin-small-right" ></span>
                        <b>Profile Page</b>
                    </a>
                </li>
        </div>

    </nav>
</head>
<body>
							


<div class="uk-section uk-container">
    <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid></div>

    <center><img src="/comp1687/jobswatch.png" alt="sitelogo"></center>

    <form style="border: 3px solid #ddd; border-radius: 10px; padding: 10px;" class="uk-form-stacked js-register">


        <div class="uk-section uk-container">
            <div class="homepagetext">
                <h3><center><b>Welcome to the Royal Borough of Greenwich's job finding platform that brings the community together</b></center></h3>
                <br>
                <p><h4>JobsWatch is Greenwich's first community-based, time banking job finder. If you'd like to find out more about what and how we do it,
                    then click on the <a href="comp1687/about.php">about us</a> page!</h4></p>
            </div>

            <p>
            <center><a style="width:165px; float:left" class="uk-button uk-button-default" href="comp1687/Register.php"p">Register Now</a></center>
            <center><a style="width:160px; float:right" class="uk-button uk-button-default" href="comp1687/login.php">Login Now</a></center>
            </p>

        </div>
    </form>
</div>

<?php require_once "inc/footer.php"; ?> <!--//possibly have to change the location -->


</body>
</html>