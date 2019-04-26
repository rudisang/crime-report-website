<?php

if(isset($_POST['submit-report'])){

require 'dbh.inc.php';

$username = $_POST['name'];
$title = $_POST['title'];
$description = $_POST['description'];
$location = $_POST['location'];
$address = $_POST['address'];
$number = $_POST['number'];
$member_id = $_POST['owner_id'];

            $sql = "INSERT INTO reports (title, member_id, username, description, location, address, number) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $stmt = mysqli_stmt_init($con);
            if(!mysqli_stmt_prepare($stmt, $sql)){
                header("Location: ../profile.php?error=sqlerror");
                exit();
            }else{
                mysqli_stmt_bind_param($stmt, "sissssi",$title, $member_id, $username, $description, $location, $address, $number);
                if( mysqli_stmt_execute($stmt)){
                    header("Location: ../profile.php?upload=success");
                exit();
                }else{
                    header("Location: ../profile.php?upload=error");
                exit();
                }
               
                
            }
        
    

mysqli_stmt_close($stmt);
mysqli_close($con);

}else{
    header("Location: ../profile.php");
    exit();
}
