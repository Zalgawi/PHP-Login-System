<?php
	//allow the config
    	define('__CONFIG__', true);
	//require the config
 	require_once ("/home/za1180x/public_html/comp1687/inc/config.php");
        require ('./inc/navbar.php');


 	Page::ForceDashboard();
 ?>



<!DOCTYPE html>
<html>
<head>

    
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
				            <input class="uk-input" style="border-radius: 10px;" name="password" type="Password" required='required' placeholder="Insert Password">
				        </div>
				    </div>
				    <div class="uk-margin">
				        <label class="uk-form-label" for="form-stacked-text"><b>Confirm Password:</b></label>
				        <div class="uk-form-controls">
				            <input class="uk-input" style="border-radius: 10px;" name="confirmpassword" type="Password" required='required' placeholder="Confirm Password">
				        </div>
				    </div>
				    <div class="uk-margin">
				        <div class="uk-form-controls">
				        	<div class="captcha">

                                <div align="center" class="g-recaptcha" data-sitekey="6LfYJH4UAAAAANsDd_E3BaceSduqp_eMvyykXeh-" data-callback="recaptcha_callback"></div>
                            </div>
				        	<br>
				        </div>
				    </div>

					<div class="uk-margin uk-alert-danger js-error" style='display: none;'></div>

				    <div class="uk-margin">
                        <label><center>Already have an account? <a href='/~za1180x/comp1687/login.php'>login now!</a></center></label>
                        <br>
				        <center><button id="registerbtn" name="registerbtn" class="uk-button uk-button-default" disabled type="submit"><b>REGISTER</b></button></center>
				    </div>

			  	</form>
</div>

<?php require_once "inc/footer.php"; ?>

</body>
</html>