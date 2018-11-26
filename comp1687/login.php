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

	<title>Login Page</title>
	<base href="/"/>

</head>
<body>
							
<div class="uk-section uk-container">
	<div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid></div>
				
					<h2><b><center>Login</center></b></h2>

				<form style="border: 3px solid #ddd; border-radius: 10px; padding: 10px;" class="uk-form-stacked js-login">

				    <div class="uk-margin">
				        <label class="uk-form-label" for="form-stacked-text"><b>Email:</b></label>
				        <div class="uk-form-controls">
				            <input class="uk-input" id="form-stacked-text" type="email" required='required' placeholder="Insert Email">
				        </div>
				    </div>
				    <div class="uk-margin">
				        <label class="uk-form-label" for="form-stacked-text"><b>Password:</b></label>
				        <div class="uk-form-controls">
				            <input class="uk-input" id="form-stacked-text" type="Password" required='required' placeholder="Insert Password">
				        </div>
				    </div>
				    <div class="uk-margin">
				        <button class="uk-button uk-button-default" type="submit"><b>LOGIN</b></button>
				    </div>
			  	
			  	</form>
</div>

<?php require_once "inc/footer.php"; ?>


</body>
</html>