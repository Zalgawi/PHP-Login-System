<?php
//allow the config
define('__CONFIG__', true);
//require the config
require_once "inc/config.php";  //possibly have to change the location
?>

<!DOCTYPE html>
<html>
<head>
    <!-- UIKit CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.24/css/uikit.min.css" />

    <title>Search Users</title>
    <base href="/"/>
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
                    <a href="comp1687/about.php">
                        <span class="uk-icon uk-margin-small-right" ></span>
                        <b>About Us</b>
                    </a>
                </li>
                <li>
                    <a href="comp1687/jobs.php">
                        <span class="uk-icon uk-margin-small-right" ></span>
                        <b>Jobs</b>
                    </a>
                </li>
        </div>

        <div class="uk-navbar-center">
            <div class="uk-navbar-item">
                <form action="javascript:void(0)">
                    <input class="uk-input uk-form-width-small" style="width:350px; border-radius: 10px; " type="text" placeholder="Input">
                    <button class="uk-button uk-button-default" style="border-radius: 10px;">Button</button>
                </form>
            </div>
        </div>

        <div class="uk-navbar-right">
            <ul class="uk-navbar-nav">
                <li <?php  if(!isset($_SESSION['user_id'])) echo " style='display: none';"; ?>>
                    <a href="comp1687/search.php">
                        <span class="uk-icon uk-margin-small-right" ></span>
                        <b>Search Users</b>
                    </a>
                </li>
                <li <?php  if(!isset($_SESSION['user_id'])) echo " style='display: none';"; ?>>
                    <a href="comp1687/dashboard.php">
                        <span class="uk-icon uk-margin-small-right" ></span>
                        <b>Profile Page</b>
                    </a>
                </li>
        </div>

    </nav>


</head>
<body>

<div class="uk-section uk-container">
    <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid></div>

    <h2><b><center>Search Users</center></b></h2>

    <form style="border: 3px solid #ddd; border-radius: 10px; padding: 10px;" class="uk-form-stacked js-search">


    </form>
</div>

<?php require_once "inc/footer.php"; ?> <!-- possibly have to change the location  -->


</body>
</html>