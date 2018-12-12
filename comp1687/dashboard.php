    <?php
    session_start();

        // Allow the config
            define('__CONFIG__', true);
        // Require the config
        require_once "inc/config.php";  //possibly have to change the location
        include_once "inc/classes/DB.php"; //possibly have to change location
        include_once "inc/classes/Page.php";
        include_once "inc/classes/User.php";
        require ('./inc/navbar.php');

        Page::ForceLogin();

        $return=[];

    $User = new User($_SESSION['user_id']);
    $username = $User->username;

    $activationCode = User::Find(INPUT_GET['activationCode']);

    $con = DB::getConnection();

    if (isset($_GET['activationCode']) && !empty($_GET['activationCode'])) {
        $query = "UPDATE users SET active = 1, credit = 100 WHERE username = :username AND activationCode = :code AND active = 0";
        header("Location:/~za1180x/comp1687/dashboard.php");



        try {
            $stmt = $con->prepare($query);
            $stmt->execute(array(
                ':username' => $username,
                ':code' => $_GET['activationCode']
            ));

        if ($stmt->rowCount() > 0) {
            $return['error'] = 'Your account is now activated! You have earned 100 Time-banking credits.';


        } else {
            $return['error'] = 'Code incorrect or account is already active, please try again';
        }
    } catch (PDOException $error) {
            $return['error'] = (string)$error;
        }

        echo json_encode($return, JSON_PRETTY_PRINT);
    }


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.24/css/uikit.min.css" />

    <title>Profile Page</title>
    <base href="/" />
      

    
  </head>

  <body>

  	<div class="uk-section uk-container">
        <center><h2><b>Profile Page</b></h2></center>
        <form style="border: 3px solid #ddd; border-radius: 10px; padding: 10px;" class="uk-form-stacked js-dashboard">

            <center><div class="userpageinfo">
                    <p><h3>Hello <?php echo $User->username; ?>,</h3>
         <b>Your time-banking credit is: <?php echo $User->credit; ?> credits.</b></p>
            </div></center>
            <div <?php if ($User->active == 1) echo " style='display: none';"; ?> class="activationProfile">
            <div>
            <center><p>Please insert the 5 character activation code that was sent to your e-mail address</p></center>
            </div>

            <div class="uk-margin">
                <center><div class="uk-form-controls">
                        <input class="uk-input" style="width:165px"  name="activationCode" type="text" required='required' placeholder="Insert activation code">
                    </div></center>
            </div>

                <div><center><button id="activatebtn"   name="activatebtn" class="uk-button uk-button-default" type="submit"><b>Activate Account</b></button></center></div>

            <center><div class="uk-margin uk-alert-danger js-error" style='display: none;'></div></center>
            </div>
            <p><b><h3>User Skills</h3></b></p>
            <h4>Your skills are <?php echo $User->skills; ?>.</h4>


            <center><p><a class="uk-button uk-button-default" href="/~za1180x/comp1687/logout.php">Logout Now</a></p></center> <!--possibly have to change the location -->
        </form>

  	</div>

  	<?php require_once "inc/footer.php"; ?>
  </body>
</html>
