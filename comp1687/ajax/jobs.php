<?php

//allow the config
define('__CONFIG__', true);
session_start();

//require the config
require_once '/home/za1180x/public_html/comp1687/inc/config.php'; //possibly have to change the location

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Always return JSON format
    //header('Content-Type: application/json');

    $return = [];

    $jobTitle = Filter::String($_POST['jobTitle']);
    $jobSkills = Filter::String($_POST['jobSkills']);
    $jobDescription = Filter::String($_POST['jobDescription']);
    $jobImage = Filter::String($_POST['jobImage']);
    $jobLocation = Filter::String($_POST['jobLocation']);
    $jobReward = Filter::Int($_POST['jobReward']);
    $jobStatus = Filter::String($_POST['jobStatus']);    
    $user_id = $_SESSION['user_id'];


    // make sure the user adds a job.
    $addJob = $con->prepare("INSERT INTO jobs(jobTitle, jobSkills, jobDescription, jobImage, jobLocation, jobReward, jobStatus, jobCreatorId) VALUES(:jobTitle, :jobSkills, :jobDescription, :jobImage, :jobLocation, :jobReward, :jobStatus, :jobCreator)");
//    $addJob = $con->prepare("INSERT INTO jobs(jobTitle, jobSkills, jobDescription, jobLocation, jobReward, jobStatus, jobImage) VALUES(:jobTitle, :jobSkills, :jobDescription, :jobLocation, :jobReward, :jobStatus, :jobImage");
    $addJob->bindParam(':jobTitle', $jobTitle, PDO::PARAM_STR);
    $addJob->bindParam(':jobSkills', $jobSkills, PDO::PARAM_STR);
    $addJob->bindParam(':jobDescription', $jobDescription, PDO::PARAM_STR);
    $addJob->bindParam(':jobImage', $jobImage, PDO::PARAM_LOB);
    $addJob->bindParam(':jobLocation', $jobLocation, PDO::PARAM_STR);
    $addJob->bindParam(':jobReward', $jobReward, PDO::PARAM_STR);
    $addJob->bindParam(':jobStatus', $jobStatus, PDO::PARAM_STR);
    $addJob->bindParam(':jobCreator', $user_id, PDO::PARAM_STR);
    $addJob->execute();
    header("Location:/~za1180x/comp1687/jobs.php");




    // return the proper information back to Javascript to redirect us.

    echo json_encode($return, JSON_PRETTY_PRINT);
} else if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    $query = $con->prepare("SELECT * FROM jobs ORDER BY job_id DESC");
                    $query->execute();
                    
                    $user_id = $_SESSION['user_id'];
                    $rows = [];

                    while($row = $query->fetch(PDO::FETCH_ASSOC)){
                        
                        
                        
                        $push = [];
                        //$push //= [$row["job_id"], $row["jobTitle"], $row["jobSkills"],$row["jobDescription"], $row["jobLocation"], $row["jobReward"] ]
                        $push['job_id'] = $row["job_id"];
                        $push['jobTitle'] = $row["jobTitle"];
                        $push['jobSkills'] = $row["jobSkills"];
                        $push['jobDescription'] = $row["jobDescription"];
                        $push['jobImage'] = $row['jobImage'];
                        $push['jobLocation'] = $row["jobLocation"];
                        $push['jobReward'] = $row["jobReward"];
                        $push['jobStatus'] = $row["jobStatus"];
                        $push['jobCreator'] = $user_id;
                        
                        
                        array_push($rows, $push);
                       
                        
                    }
                    
                    echo json_encode($rows, JSON_PRETTY_PRINT);
}



?>