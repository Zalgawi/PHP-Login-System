<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

	//allow the config
 	define('__CONFIG__', true);

	//require the config
 	require_once '/home/za1180x/public_html/comp1687/inc/config.php'; //possibly have to change the location

if($_SERVER['REQUEST_METHOD'] == 'POST') {
 	//Always return JSON format
	//header('Content-Type: application/json');

	$return = [];

	$email = Filter::String( $_POST['email'] );
    $username = Filter::String($_POST['username']);
    $skills = Filter::String($_POST['skills']);
    //$captcha = Filter::String($_POST['captcha']);

    $user_found = User::Find($email, $username);
	$activationCode = DB::generateCode();
	$credit = 0;
    mysqli_report(MYSQLI_REPORT_ALL);


	//if($_SESSION['captcha'] === $captcha){
        // make sure the user does not exist.
        if($user_found) {
            // User exists
            // We can also check to see if they are able to log in.
            $return['error'] = "You already have an account";
            $return['is_logged_in'] = false;
        } else  {
            // User does not exist, add them now.
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            // make sure the user CAN be added AND is added.
            $addUser = $con->prepare("INSERT INTO users(username, email, skills, password, credit, activationCode) VALUES(:username, LOWER(:email), :skills, :password, :credit, :activationCode)");
            $addUser->bindParam(':username', $username, PDO::PARAM_STR);
            $addUser->bindParam(':credit', $credit, PDO::PARAM_STR);
            $addUser->bindParam(':activationCode', $activationCode, PDO::PARAM_STR);

            $addUser->bindParam(':email', $email, PDO::PARAM_STR);
            $addUser->bindParam(':skills', $skills, PDO::PARAM_STR);
            $addUser->bindParam(':password', $password, PDO::PARAM_STR);
            $addUser->execute();

            $user_id = $con->lastInsertId();

            $_SESSION['user_id'] = (int) $user_id;

            sendMail ($email, $name='', $username, $activationCode);




            $return['is_logged_in'] = true;
           
            $return['redirect'] = 'https://stuweb.cms.gre.ac.uk/~za1180x/comp1687/dashboard.php?message=welcome';

        }

        // return the proper information back to Javascript to redirect us.

        echo json_encode($return, JSON_PRETTY_PRINT);
    } else {
        //Kill the script. Redirect the user.
        exit('Invalid URL');
        }


 ?>