<?php
session_start();
//allow the config
define('__CONFIG__', true);
//require the config
require_once "./inc/config.php";  //possibly have to change the location
require ('./inc/navbar.php');
require ('./upload.php');

Page::ForceLogin();
Page::ForceActivation();





?>

<!DOCTYPE html>
<html>
<head>
    <!-- UIKit CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.24/css/uikit.min.css" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
    <title>Jobs Page</title>
    <base href="/"/>
    

</head>
<body>

<div class="uk-section uk-container">
    <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid></div>

    <h2><b><center>Jobs</center></b></h2>

    <div style="border: 3px solid #ddd; border-radius: 10px; padding: 10px;">
    <h4><center>Welcome to the job browsing section. You are able to browse the available jobs below, and if desired, you may post your own job!</center></h4>
    <div class="jobspost" style="border: 3px solid #ddd; border-radius: 10px; padding: 10px;">
        <h4><center><b>Post a job</b></center></h4>
        <form class="uk-form-stacked js-jobs" id="jobForm" enctype="multipart/form-data">
            <fieldset class="uk-fieldset">

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-text"><b>Job title:</b></label>
                    <input id="jobTitle" class="uk-input" type="text" required placeholder="Insert the name of the job">
                </div>
                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-text"><b>Skills required:</b></label>
                    <input id="jobSkills" class="uk-input" type="text" required placeholder="Insert the skills needed for the job">
                </div>
                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-text"><b>Job description:</b></label>
                    <input id="jobDescription" type="text" class="uk-textarea" required placeholder="Insert a description of the job">
                </div>
                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-text"><b>Images (If necessary):</b></label>
                    <input id="jobImage" class="uk-button uk-button-default" type="file" name="jobImage" >
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-text"><b>Job location:</b></label>
                    <select id="jobLocation" required class="uk-select">
                        <option>-Select a region of london for the jobs location-</option>
                        <option>-------The Royal Borough of Greenwich-------</option>
                        <option value="Abbey Wood">Abbey Wood</option>
                        <option value="Avery Hill">Avery Hill</option>
                        <option value="Blackheath">Blackheath</option>
                        <option value="Charlton">Charlton</option>
                        <option value="Coldharbour">Coldharbour</option>
                        <option value="Deptford">Deptford</option>
                        <option value="Eltham">Eltham</option>
                        <option value="Horn Park">Horn Park</option>
                        <option value="Greenwich">Greenwich</option>
                        <option value="Greenwich Peninsula">Greenwich Peninsula</option>
                        <option value="Kidbrooke">Kidbrooke</option>
                        <option value="Lee">Lee</option>
                        <option value="Mottingham">Mottingham</option>
                        <option value="New Charlton">New Charlton</option>
                        <option value="New Eltham">New Eltham</option>
                        <option value="Plumstead">Plumstead</option>
                        <option value="Shooters Hill">Shooters Hill</option>
                        <option value="Thamesmead">Thamesmead</option>
                        <option value="Well Hall">Well Hall</option>
                        <option value="Westcombe Park">Westcombe Park</option>
                        <option value="Woolwich">Woolwich</option>
                    </select>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-text"><b>Job reward:</b></label>
                    <input id="jobReward" class="uk-input" required type="text" placeholder="Insert the amount of credits this job is worth">
                </div>


                <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                    <label class="uk-form-label" for="form-stacked-text"><b>Job status:</b></label>
                    <label><input id="jobStatus" class="uk-radio" type="radio" name="radio1" value="Available" checked> Available</label>
                    <label><input id="jobStatus" class="uk-radio" type="radio" name="radio2" value="Completed"> Completed</label>
                </div>

                <center><button id="jobbtn" name="jobbtn" class="uk-button uk-button-default" type="submit"><b>SUBMIT JOB</b></button></center>
                <br>

            </fieldset>
        </form>

    </div>
      <br>
    <div class="jobsbrowse" style="border: 3px solid #ddd; border-radius: 10px; padding: 10px;">
    <h4><center><b>Browse the jobs</b></center></h4>
    <br>
    <div class="table-responsive">
        <table id="job_data" class="table table-striped table-bordered">
            <thead>
                    <tr>
                        
                        <td>Job Title</td>
                        <td>Job Skills</td>
                        <td>Job Description</td>
                        <td>Job Image</td> 
                        <td>Job Location</td>
                        <td>Job Reward</td>
                        <td>Job Status</td>
                        <td>Edit</td>
                                          
                    </tr> 
                    <?php
//                     
//                    
//                    $query = $con->prepare("SELECT * FROM jobs ORDER BY job_id DESC");
//                    $query->execute();
//
//                    while($row = $query->fetch(PDO::FETCH_ASSOC)){
//                       echo '
//                        <tr>
//                            <td>'.$row["job_id"].'</td>
//                            <td>'.$row["jobTitle"].'</td>
//                            <td>'.$row["jobSkills"].'</td>
//                            <td>'.$row["jobDescription"].'</td>
//                            <td>'.$row["jobLocation"].'</td>
//                            <td>'.$row["jobReward"].'</td>
//                            <td>'.$row["jobStatus"].'</td>
//                            
//                        </tr>
//                            ';                        
//                    }
//                           //<td>'.$row[""].'</td>                    
//                    ?>
                </thead>    
        </table>
    </div>
    
     </div>
         </div>
</div>

<?php require_once "inc/footer.php"; ?> <!-- possibly have to change the location  -->


</body>
</html>
<script>
    
    $(document).ready()
    
</script>    