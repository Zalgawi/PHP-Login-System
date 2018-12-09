<?php

//allow the config
define('__CONFIG__', true);

//require the config
require_once "../inc/config.php"; //possibly have to change the location

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Always return JSON format
    //header('Content-Type: application/json');

    $return = [];

    $jobTitle = Filter::String($_POST['jobTitle']);
    $jobSkills = Filter::String($_POST['jobSkills']);
    $jobDescription = Filter::String($_POST['jobDescription']);
    $jobLocation = Filter::String($_POST['jobLocation']);
    $jobReward = Filter::String($_POST['jobReward']);
    $jobStatus = Filter::String($_POST['jobStatus']);
//    $jobImage = $_POST['jobImage'];


    // make sure the user adds a job.
    $addJob = $con->prepare("INSERT INTO jobs(jobTitle, jobSkills, jobDescription, jobLocation, jobReward, jobStatus) VALUES(:jobTitle, :jobSkills, :jobDescription, :jobLocation, :jobReward, :jobStatus");
//    $addJob = $con->prepare("INSERT INTO jobs(jobTitle, jobSkills, jobDescription, jobLocation, jobReward, jobStatus, jobImage) VALUES(:jobTitle, :jobSkills, :jobDescription, :jobLocation, :jobReward, :jobStatus, :jobImage");
    $addJob->bindParam(':jobTitle', $jobTitle, PDO::PARAM_STR);
    $addJob->bindParam(':jobSkills', $jobSkills, PDO::PARAM_STR);
    $addJob->bindParam(':jobDescription', $jobDescription, PDO::PARAM_STR);
    $addJob->bindParam(':jobLocation', $jobLocation, PDO::PARAM_STR);
    $addJob->bindParam(':jobReward', $jobReward, PDO::PARAM_STR);
    $addJob->bindParam(':jobStatus', $jobStatus, PDO::PARAM_STR);
//    $addJob->bindParam(':jobImage', $jobImage, PDO::PARAM_LOB);
    $addJob->execute();




    // return the proper information back to Javascript to redirect us.

    echo json_encode($return, JSON_PRETTY_PRINT);
} else {
    //Kill the script. Redirect the user.
    exit('Invalid URL');
}


?>