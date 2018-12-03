<?php
session_start();

	// Allow the config
    	define('__CONFIG__', true);
	// Require the config
	require_once "inc/config.php";  //possibly have to change the location
    include_once "inc/classes/DB.php"; //possibly have to change location

	Page::ForceLogin();
//
//$email = filter_input(INPUT_POST['email'] );
//$username = Filter::String($_POST['username']);
//$skills = Filter::String($_POST['skills']);
//$email = filter_input(INPUT_POST['email'] );
//$username = filter_input(INPUT_POST['username'] );


  $User = new User($_SESSION['user_id']);

$activation = filter_input(INPUT_POST, 'activationtb' );
//$activation = filter_input(INPUT_POST['activatebtn'] );
  if(isset($_POST['activatebtn'])) {

      if(!empty($_POST['activationtb'])) {

          $query = "SELECT * FROM users WHERE username='$username'";
          $result = mysqli_query($con, $query);
          if(mysqli_num_rows($result) > 0){

              while($row = mysqli_fetch_array($result)){

                  if($_POST['activationtb'] == $row["activationCode"]){

                      $sql = $conn->query ("UPDATE users SET active=1 AND credit=100 WHERE username = '$username'");

                      echo 'Your account is now activated! You have earned 100 Time-banking credits.';

                      header("Refresh:0");
                  }
                  else{
                      echo 'Code incorrect, please try again';
                  }
              }
          }

      }
  }



?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.24/css/uikit.min.css" />

    <title>Profile Page</title>
    <base href="/" />
      <nav class="uk-navbar-container uk-margin"  uk-navbar>
          <div class="uk-navbar-left">

              <a class="uk-navbar-item uk-logo"  href="comp1687/index.php"><img src="/comp1687/jobswatchsmall.png" alt="sitelogo"></a>

              <ul class="uk-navbar-nav">
                  <li>
                      <a href="comp1687/index.php">
                          <span class="uk-icon uk-margin-small-right" ></span>
                          <b>Home Page</b>
                      </a>
                  </li>
                  <li>
                      <a href="comp1687/jobs.php">
                          <span class="uk-icon uk-margin-small-right" ></span>
                          <b>Jobs</b>
                      </a>
                  </li>
                  <li>
                      <a href="comp1687/about.php">
                          <span class="uk-icon uk-margin-small-right" ></span>
                          <b>About Us</b>
                      </a>
                  </li>
                  <li>
                      <a href="comp1687/dashboard.php">
                          <span class="uk-icon uk-margin-small-right" ></span>
                          <b>Profile Page</b>
                      </a>
                  </li>

          </div>

          <div class="uk-navbar-item">
              <form action="javascript:void(0)">
                  <input class="uk-input uk-form-width-small" type="text" placeholder="Input">
                  <button class="uk-button uk-button-default">Button</button>
              </form>
          </div>

          </div>
      </nav>
    
  </head>

  <body>

  	<div class="uk-section uk-container">
        <center><h2><b>Profile Page</b></h2></center>
        <form style="border: 3px solid #ddd; border-radius: 10px; padding: 10px;" class="uk-form-stacked js-login">

            <center><div class="userpageinfo">
                    <p><h3>Hello <?php echo $User->username; ?>,</h3>
         <b>Your time-banking credit is: <?php echo $User->credit; ?> credits.</b></p>
            </div></center>
            <div class="activationprofile">
            <div>
            <center><p>Please insert the 5 character activation code that was sent to your e-mail address</p></center>
            </div>

            <div class="uk-margin">
                <center><div class="uk-form-controls">
                        <input class="uk-input" style="width:165px"  name="activationtb" type="text" required='required' placeholder="Insert activation code">
                    </div></center>
            </div>

            <div><center><button id="activatebtn"  name="activatebtn" class="uk-button uk-button-default" type="submit"><b>Activate Account</b></button></center></div>

<!--            <center><div class="uk-margin uk-alert-danger js-error" style='display: none;'></div></center>-->
            </div>
            <p><b><h3>User Skills</h3></b></p>
            <h4>Your skills are <?php echo $User->skills; ?>.</h4>


            <center><p><a class="uk-button uk-button-default" href="/comp1687/logout.php">Logout Now</a></p></center> <!--possibly have to change the location -->
        </form>

  	</div>

  	<?php require_once "inc/footer.php"; ?>
  </body>
</html>
