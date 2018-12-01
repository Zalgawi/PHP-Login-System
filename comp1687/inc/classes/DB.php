<?php

//If there is no constant defined called __CONFIG__. do not load this file
	if(!defined('__CONFIG__')) {
		exit('You do not have a config file');
}
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'C:\wamp64\www\comp1687\PHPMailer\Exception.php';
require 'C:\wamp64\www\comp1687\PHPMailer\PHPMailer.php';
require  'C:\wamp64\www\comp1687\PHPMailer\SMTP.php';

class DB {

	protected static $con;

	private function __construct(){
		try {

			self::$con = new PDO( 'mysql:charset=latin1;host=localhost;port=3306;dbname=mdb_za1180x', 'root', ''); //change connection string
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

 function sendMail($email, $name, $username, $activationCode)
{
//This will email the user their activation code which should be applied in activate.php
     //This is importing a mailing code that is downloaded from a public library.

    include_once "C:\wamp64\www\comp1687\PHPMailer\PHPMailer.php";
     //Create a new PHPMailer instance
     $mail = new PHPMailer;
//Tell PHPMailer to use SMTP
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages

     $mail->SMTPDebug = 2;
     $mail->isSMTP();


     $mail->Host = 'smtp.gmail.com';
     $mail->SMTPAuth = true;
     $mail->Username = 'mail';
     $mail->Password = 'pass';
     $mail->SMTPOptions = array(
         'ssl' => array(
             'verify_peer' => false,
             'verify_peer_name' => false,
             'allow_self_signed' => true
         )
     );
// SMTP username
//Set the hostname of the mail server
     $mail->SMTPSecure = 'tls';
//Set the SMTP port number - likely to be 25, 465 or 587
     $mail->Port = 587;
//We don't need to set this as it's the default value
//$mail->SMTPAuth = false;
//Set who the message is to be sent from
     $mail->setFrom('redstonebrotherss@gmail.com');
//Set an alternative reply-to address

//Set who the message is to be sent to
     $mail->addAddress($email);

//Ensure HTML is enabled
     $mail->isHTML(true);
//Set the subject line
     $mail->Subject = 'Activation code';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body

//Replace the plain text body with one created manually
     $mail->Body = "  Hello $username,
                 <br>
                 Your activation code is:
                 <br>
                 <b>'$activationCode'</b>
                 <br>
                 Please insert the 5 character activation code to become a full member.
                 <br>
                 Thank you for registering with us! :)";
//Attach an image file

//send the message, check for errors
     if (!$mail->send()) {
         echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
         echo "Message sent!";
     }



}
 ?>