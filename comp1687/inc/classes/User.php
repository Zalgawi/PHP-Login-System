<?php

// If there is no constant defined called __CONFIG__, do not load this file 
if(!defined('__CONFIG__')) {
	exit('You do not have a config file');
}


class User {

	private $con;

	public $id;
	public $username;
	public $email;
	public $skills;

	public function __construct(int $user_id) {
		$this->con = DB::getConnection();

		$user_id = Filter::Int( $user_id );

		$user = $this->con->prepare("SELECT id, username, email, skills FROM users WHERE id = :id LIMIT 1");
		$user->bindParam(':id', $id, PDO::PARAM_INT);
		$user->execute();

		if($user->rowCount() == 1) {
			$user = $user->fetch(PDO::FETCH_OBJ);
			
			$this->id 		= (int) $user->id;
			$this->username  = (string) $user->username;
			$this->email 		= (string) $user->email;
			$this->skills  = (string) $user->skills;
		} else {
			// No user.
			// Redirect to to logout.
			header("Location: /logout.php"); exit;
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

		$findUser = $con->prepare("SELECT id, password FROM users WHERE email = LOWER(:email) LIMIT 1");
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