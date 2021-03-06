<?php

// If there is no constant defined called __CONFIG__, do not load this file 
if(!defined('__CONFIG__')) {
	exit('You do not have a config file');
}


class User {

	private $con;

	public $user_id;
	public $username;
	public $email;
	public $skills;
	public $credit;
	public $activationCode;
	public $active;

	public function __construct(int $user_id) {
		$this->con = DB::getConnection();

		$user_id = Filter::Int( $user_id );

		$user = $this->con->prepare("SELECT user_id, username, email, skills, credit, activationCode, active FROM users WHERE user_id = :user_id LIMIT 1");
		$user->bindParam(':user_id', $user_id, PDO::PARAM_INT);
		$user->execute();

		if($user->rowCount() == 1) {
			$user = $user->fetch(PDO::FETCH_OBJ);
			
			$this->user_id 		= (int) $user->user_id;
			$this->username  = (string) $user->username;
			$this->email 		= (string) $user->email;
			$this->skills  = (string) $user->skills;
			$this->credit = (int) $user->credit;
			$this->activationCode = (string) $user->activationCode;
			$this->active = (int) $user->active;
		} else {
			// No user.
			// Redirect to to logout.
			header("Location: /~za1180x/comp1687/logout.php"); exit; //possibly have to change the location
		}
	}

	public function setEmail($new_email) {

		// $User = new User(1);
		// $User->setEmail("new@email.com");

		// echo $this->email; // The current email address
		// echo $this->user_id; // The existing user id
		
		// $this->con->prepare("...")		
	}




	public static function Find($email, $return_assoc = false) {

		$con = DB::getConnection();

		// Make sure the user does not exist. 
		$email = (string) Filter::String( $email );

		$findUser = $con->prepare("SELECT user_id, password FROM users WHERE email = (:email) LIMIT 1");
		$findUser->bindParam(':email', $email, PDO::PARAM_STR);

        $findUser->execute();


		if($return_assoc) {
			return $findUser->fetch(PDO::FETCH_ASSOC);
		}

		$user_found = (boolean) $findUser->rowCount();
		return $user_found;
	}


}
?>
