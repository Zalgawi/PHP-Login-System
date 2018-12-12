<?php 

	// If there is no constant defined called __CONFIG__, do not load this file 
	if(!defined('__CONFIG__')) {
		exit('You do not have a config file');
	}

	// Sessions are always turned on
	if(!isset($_SESSION)) {
		session_start();
	}

	// Our config is below
	// Allow errors
	error_reporting(-1);
	ini_set('display_errors', 'On');
	

	// Include the DB.php file;
	include_once ('classes/DB.php'); //possibly have to change the location
	include_once ('classes/Filter.php'); //possibly have to change the location
	include_once ('classes/Page.php'); //possibly have to change the location
	include_once ('classes/User.php'); //possibly have to change the location
	//include_once "/comp1687/functions.php"; //possibly have to change the location

	$con = DB::getConnection();

?>
