<?php 

	// Allow the config
	define('__CONFIG__', true);

	// Require the config
	require_once "../inc/config.php";  //possibly have to change the location

	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		// Always return JSON format
		// header('Content-Type: application/json');

		$return = [];

		$email = Filter::String( $_POST['email'] );
		$password = $_POST['password'];

		$user_found = User::Find($email, true);

		if($user_found) {
			// User exists, try and sign them in
			$user_id = (int) $user_found['user_id'];
			$hash = (string) $user_found['password'];

			if(password_verify($password, $hash)) {
				// User is signed in
                $return['redirect'] = '/~za1180x/comp1687/dashboard.php?message=welcome'; //possibly have to change the location

				$_SESSION['user_id'] = (int) $user_id;
			} else {
				// Invalid user email/password combo
				$return['error'] = "Invalid user email/password combo";
			}

		} else {
			// They need to create a new account
			$return['error'] = "You do not have an account. <a href='/~za1180x/comp1687/register.php'>Create one now?</a>"; //possibly have to change the location
        }

        echo json_encode($return, JSON_PRETTY_PRINT);
	} else {
		///Kill the script. Redirect the user.
		exit('Invalid URL');
	}
?>
