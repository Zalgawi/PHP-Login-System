<?php

//If there is no constant defined called __CONFIG__. do not load this file
	if(!defined('__CONFIG__')) {
		exit('You do not have a config file');
}

class DB {

	protected static $con;

	private function __construct(){
		try {

			self::$con = new PDO( 'mysql:charset=latin1;host=localhost;port=3306;dbname=mdb_za1180x', 'root', '');
			self::$con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
			self::$con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
			self::$con->setAttribute( PDO::ATTR_PERSISTENT, false );
			self::$con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

		} catch (PDOException $e) {
			echo "Could not connect todatabase."; exit;
		}
	}


	public static function getConnection() {
		//If this instance has not been started, start it.
		if (!self::$con) {
			new DB();
		}
		//Return the writeable db connection
		return self::$con;
	}

    public static function generateCode(){
        $charArray = array('a','b','c','d','e','f','g','h','j','k','m','n','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','J','K','L','M','N','P','Q','R','T','U','V','W','X','Y','Z','2','3','4','6','7','8','9');
        shuffle($charArray);
//$activationCodeString is the variable name
        $activationCode = $charArray[0];
        for ($i=1; $i<5; $i++) $activationCode .= ' ' . $charArray[$i];
        $activationCode = str_replace(' ','',$activationCode );
        $_SESSION['activationCode'] = $activationCode;
        return $activationCode;}

}
 ?>