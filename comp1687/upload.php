<?php

if (isset($_POST['submit'])) {
    $file = $_FILES['jobImage'];
    
    
    $fileName = $_FILES['jobImage']['name'];
    $fileTmpName = $_FILES['jobImage']['tmp_name'];
    $fileSize = $_FILES['jobImage']['size'];
    $fileError = $_FILES['jobImage']['error'];
    $fileType = $_FILES['jobImage']['type'];
    echo("tempName: " + $fileTmpName);
    echo("fileName: " + $fileName);
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    
    $allowed = array('jpg', 'jpeg', 'png', 'pdf');
    
    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0){
            if ($fileSize < 1000000) {
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                echo("fileNameNew: " + $fileNameNew);
                $fileDestination = '/~za1180x/comp1687/img/'.$fileNameNew;
                move_upload_file($fileTmpName, $fileDestination);
                
                header("Location:/~za1180x/comp1687/jobs.php?uploadsuccess");
            } else {
                echo "Your file is too big";
            }
        } else {
            echo "There was an error uploading your file";
        }
    } else {
        echo "You cannot upload files of this type";
    }
    
}