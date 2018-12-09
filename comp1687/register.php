<?php
	//allow the config
    	define('__CONFIG__', true);
	//require the config
 	require_once "inc/config.php";


 	Page::ForceDashboard();
 ?>



<!DOCTYPE html>
<html>
<head>

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

	<!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.24/css/uikit.min.css" />
<link rel="stylesheet" href="style.css">


	<title>Registration Page</title>
	<base href="/"/>
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
							
<div class="uk-section uk-container">
	<div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid></div>
				
					<h2><b><center>Register</center></b></h2>

			<form style="border: 3px solid #ddd; border-radius: 10px; padding: 10px;" class="uk-form-stacked js-register">

					<div class="uk-margin">
				        <label class="uk-form-label" for="form-stacked-text"><b>Username:</b></label>
				        <div class="uk-form-controls">
				            <input id="username" style="border-radius: 10px;" class="uk-input" name="form-stacked-text" type="text" required='required' placeholder="Insert Username">
				        </div>
				    </div>
				    <div class="uk-margin">
				        <label class="uk-form-label" for="form-stacked-text"><b>Email:</b></label>
				        <div class="uk-form-controls">
				            <input class="uk-input" style="border-radius: 10px;" name="form-stacked-text" type="email" required='required' placeholder="Insert Email">
				        </div>
				    </div>
				    <div class="uk-margin">
				        <label class="uk-form-label" for="form-stacked-text"><b>Skills:</b></label>
				        <div class="uk-form-controls">
				            <input id="skills" style="border-radius: 10px;" class="uk-input" name="form-stacked-text" type="text" required='required' placeholder="Skills e.g., plumbing, programming, teaching, etc.">
				        </div>
				    </div>
				    <div class="uk-margin">
				        <label class="uk-form-label" for="form-stacked-text"><b>Password:</b></label>
				        <div class="uk-form-controls">
				            <input class="uk-input" style="border-radius: 10px;" name="form-stacked-text" type="Password" required='required' placeholder="Insert Password">
				        </div>
				    </div>
				    <div class="uk-margin">
				        <label class="uk-form-label" for="form-stacked-text"><b>Confirm Password:</b></label>
				        <div class="uk-form-controls">
				            <input class="uk-input" style="border-radius: 10px;" name="form-stacked-text" type="Password" required='required' placeholder="Confirm Password">
				        </div>
				    </div>
				    <div class="uk-margin">
				        <div class="uk-form-controls">
				        	<div class="captcha">

                                <div align="center" class="g-recaptcha" data-sitekey="6LfYJH4UAAAAANsDd_E3BaceSduqp_eMvyykXeh-" data-callback="recaptcha_callback"></div>
                                <!-- <div class="captchaimage"><img src="comp1687/captcha.php" alt="CAPTCHA image"/></div> -->
                            </div>
				        	<br>
				        </div>
				    </div>

					<div class="uk-margin uk-alert-danger js-error" style='display: none;'></div>

				    <div class="uk-margin">
                        <label><center>Already have an account? <a href='comp1687/login.php'>login now!</a></center></label>
                        <br>
				        <center><button id="registerbtn" name="registerbtn" class="uk-button uk-button-default" disabled type="submit"><b>REGISTER</b></button></center>
				    </div>

			  	</form>
</div>

<?php require_once "inc/footer.php"; ?>

</body>
</html>