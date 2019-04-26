<?php

if(isset($_POST['submit'])){

require 'dbh.inc.php';

$name = $_POST['name'];
$surname = $_POST['surname'];
$username = $_POST['username'];
$email = $_POST['email'];
$number = $_POST['number'];
$password = $_POST['pwd'];
$confirmPass = $_POST['pwdConf'];
$location = $_POST['location'];
$img = $_POST['image'];



if( empty($name) || empty($surname) || empty($username) || empty($email) || empty($number) || empty($password) || empty($confirmPass) || empty($location)){
    header("Location: ../register.php?error=emptyfields&name=".$name."&surname".$surname."&uid".$username."&number".$number."&email".$email);
    //exit();
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)){
    header("Location: ../register.php?error=invalidEmailuid");
    exit();
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    header("Location: ../register.php?error=invalidEmail&uid=".$username);
    exit();
}  else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
    header("Location: ../register.php?error=invalidUsername&uid=".$email);
    exit();
} else if ($password !== $confirmPass){
    header("Location: ../register.php?error=passwordCheck&uid=".$username."&email".$email);
    exit();
}else{
    $sql = "SELECT username FROM members WHERE username=?";
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: ../register.php?error=usersqlerror");
        exit();
    }else{
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resultCheck = mysqli_stmt_num_rows($stmt);
        if($resultCheck > 0){
            header("Location: ../register.php?error=usertaken&mail=".$email);
            exit();
        }else{
            $sql = "INSERT INTO members (name, surname, username, email, number, password, location, image) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = mysqli_stmt_init($con);
            if(!mysqli_stmt_prepare($stmt, $sql)){
                header("Location: ../register.php?error=sqlerror");
                exit();
            }else{
                $enc = password_hash($password, PASSWORD_DEFAULT);
                mysqli_stmt_bind_param($stmt, "ssssisss",$name, $surname, $username, $email, $number, $enc, $location, $img);
                mysqli_stmt_execute($stmt);
                header("Location: ../register.php?signup=success");
                exit();
            }
        }
    }
}
mysqli_stmt_close($stmt);
mysqli_close($con);

}else{
    header("Location: ../register.php");
    exit();
}