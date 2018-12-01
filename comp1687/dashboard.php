<?php 

	// Allow the config
	define('__CONFIG__', true);
	// Require the config
	require_once "inc/config.php";  //possibly have to change the location

	Page::ForceLogin();

  $User = new User($_SESSION['user_id']);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.24/css/uikit.min.css" />

    <title>Page Title</title>
    <base href="/" />
    
  </head>

  <body>

  	<div class="uk-section uk-container">
  		<h2>Dashboard</h2>
      <p>Hello <?php echo $User->username; ?>,
          <br>
         Your skills are <?php echo $User->skills; ?>.
          <br>
         Your time-banking credit is: <?php echo $User->credit; ?> credits.</p>
      <p><a href="/comp1687/logout.php">Logout</a></p> <!--possibly have to change the location -->
        <p>Ideas for extending this system:</p>
      <ul>
        <li>NEW FEEDS</li>
        <li>FRIEND FEED</li>
        <li>CHANGE EMAIL</li>
        <li>CHANGE PASSWORD</li>
        <li>RESET PASSWORD</li>
        <li>INVITE MODULE </li>
        <li>ADD FIRST NAME</li>
        <li>ADD LASTNAME</li>
        <li>ADD EMAIL CONFIRMATION</li>
        <li>ADD SMS CONFIRMATION (VIA TWILIO)</li>
      </ul>
      <p>Pick one of these and build it yourself. It'll be fun! Don't forget to ask questions in our group: <a href="https://www.facebook.com/groups/1088943884540928/">https://www.facebook.com/groups/1088943884540928/</a></p>
  	</div>

  	<?php require_once "inc/footer.php"; ?>
  </body>
</html>
