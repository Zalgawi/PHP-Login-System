<?php

// If there is no constant defined called __CONFIG__, do not load this file 
if(!defined('__CONFIG__')) {
	exit('You do not have a config file');
}

class Page {
	
	// Force the user to be logged in, or redirect. 
	static function ForceLogin() {
		if(isset($_SESSION['user_id'])) {
			// The user is allowed here  
		} else {
			// The user is not allowed here. 
			header("Location: /~za1180x/comp1687/login.php"); exit; //possibly have to change the location
		}
	}

    static function ForceActivation() {
        $User = new User($_SESSION['user_id']);
		if ($User->active !== 0){
            // The user is allowed here
		} else {
            // The user is not allowed here.
            header("Location: /~za1180x/comp1687/dashboard.php"); exit; //possibly have to change the location
		}


        }


	static function ForceDashboard() {
		if(isset($_SESSION['user_id'])) {
			// The user is allowed here but redirect anyway 
			header("Location: /~za1180x/comp1687/dashboard.php"); exit; //possibly have to change the location
		} else {
			// The user is not allowed here. 
		}
	}
}


?>
