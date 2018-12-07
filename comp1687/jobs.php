<?php
//allow the config
define('__CONFIG__', true);
//require the config
require_once "inc/config.php";  //possibly have to change the location

Page::ForceLogin();
?>

<!DOCTYPE html>
<html>
<head>
    <!-- UIKit CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.24/css/uikit.min.css" />
    <link rel="stylesheet" href="style.css">
    <title>Login Page</title>
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

    </nav>


</head>
<body>

<div class="uk-section uk-container">
    <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid></div>

    <h2><b><center>Jobs</center></b></h2>

    <form style="border: 3px solid #ddd; border-radius: 10px; padding: 10px;" class="uk-form-stacked js-jobs">
    <h4><center>Welcome to the job browsing section. You are able to browse the available jobs below, and if desired, you may post your own job!</center></h4>
    <div class="jobspost" style="border: 3px solid #ddd; border-radius: 10px; padding: 10px;">
        <h4><center><b>Post a job</b></center></h4>
        <form>
            <fieldset class="uk-fieldset">



                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-text"><b>Job title:</b></label>
                    <input class="uk-input" type="text" placeholder="Insert the name of the job">
                </div>
                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-text"><b>Skills required:</b></label>
                    <input class="uk-input" type="text" placeholder="Insert the skills needed for the job">
                </div>
                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-text"><b>Job description:</b></label>
                    <textarea class="uk-textarea" rows="5" placeholder="Insert a description of the job"></textarea>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-text"><b>Job location:</b></label>
                    <select class="uk-select">
                        <option>-Select a region of london for the jobs location-</option>
                        <option>-------CENTRAL-------</option>
                        <option>Camden</option>
                        <option>City of London</option>
                        <option>Kensington and Chelsea</option>
                        <option>Islington</option>
                        <option>Lambeth</option>
                        <option>Southwark</option>
                        <option>Westminister</option>
                        <option>-------EAST-------</option>
                        <option>Barking and Dagenham</option>
                        <option>Bexley</option>
                        <option>Greenwich</option>
                        <option>Hackney</option>
                        <option>Havering</option>
                        <option>Lewisham</option>
                        <option>Newham</option>
                        <option>Redbridge</option>
                        <option>Tower Hamlets</option>
                        <option>Waltham Forest</option>
                        <option>-------NORTH-------</option>
                        <option>Barnet</option>
                        <option>Enfield</option>
                        <option>Haringey</option>
                        <option>-------SOUTH-------</option>
                        <option>Bromley</option>
                        <option>Croyden</option>
                        <option>Kingston upon Thames</option>
                        <option>Merton</option>
                        <option>Sutton</option>
                        <option>Wandsworth</option>
                        <option>-------WEST-------</option>
                        <option>Brent</option>
                        <option>Ealing</option>
                        <option>Hammersmith and Fulham</option>
                        <option>Harrow</option>
                        <option>Richmond upon Thames</option>
                        <option>Hillingdon</option>
                        <option>Hounslow</option>


                    </select>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-text"><b>Job reward:</b></label>
                    <input class="uk-input" type="text" placeholder="Insert the amount of credits this job is worth">
                </div>


                <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                    <label class="uk-form-label" for="form-stacked-text"><b>Job status:</b></label>
                    <label><input class="uk-radio" type="radio" name="radio2" checked> Available</label>
                    <label><input class="uk-radio" type="radio" name="radio2"> Completed</label>
                </div>

            </fieldset>
        </form>

    </div>
      <br>
    <div class="jobsbrowse" style="border: 3px solid #ddd; border-radius: 10px; padding: 10px;">
    <h4><center><b>Browse the jobs</b></center></h4>

     </div>
         </form>
</div>

<?php require_once "inc/footer.php"; ?> <!-- possibly have to change the location  -->


</body>
</html>