<?php
//allow the config
define('__CONFIG__', true);
//require the config
require_once "inc/config.php";  //possibly have to change the location
require ('./inc/navbar.php');
?>

<!DOCTYPE html>
<html>
<head>
    <!-- UIKit CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.24/css/uikit.min.css" />

    <title>About Us</title>
    <base href="/"/>
    

</head>
<body>

<div class="uk-section uk-container">
    <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid></div>

    <h2><b><center>About Us</center></b></h2>

    <form style="border: 3px solid #ddd; border-radius: 10px; padding: 10px;" class="uk-form-stacked js-about">


    </form>
</div>

<?php require_once "inc/footer.php"; ?> <!-- possibly have to change the location  -->


</body>
</html>