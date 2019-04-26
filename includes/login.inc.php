<?php

if(isset($_POST['login-submit'])){
require 'dbh.inc.php';

$email = $_POST['email'];
$password = $_POST['password'];

if(empty($email) || empty($password)){
    header("Location: ../index.php?error=emptyfield");
    exit();
}else{
    $sql = "SELECT * FROM members WHERE username=? OR email=?;";
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: ../index.php?error=sqlerror");
        exit();
    }else{
        mysqli_stmt_bind_param($stmt, "ss", $email, $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if($row = mysqli_fetch_assoc($result)){
            $passwordCheck = password_verify($password, $row['password']);
            if($passwordCheck == false){
                header("Location: ../index.php?error=wrongpassword");
                exit();
            }else if($passwordCheck == true){
                session_start();
                $_SESSION['ID'] = $row['id'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['surname'] = $row['surname'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['number'] = $row['number'];
                $_SESSION['location'] = $row['location'];
                $_SESSION['dateJoined'] = $row['createdAt'];

                header("Location: ../index.php?login=success");
                exit();
            }else{
                header("Location: ../index.php?error=wrongpassword");
                exit();
            }
        }else{
            header("Location: ../index.php?error=nouser");
            exit();
        }
    }
}

} elseif(isset($_POST['login-redirect'])){
    require 'dbh.inc.php';

    $email = $_POST['email'];
    $password = $_POST['password'];
    
    if(empty($email) || empty($password)){
        header("Location: ../profile.php?error=emptyfield");
        exit();
    }else{
        $sql = "SELECT * FROM members WHERE username=? OR email=?;";
        $stmt = mysqli_stmt_init($con);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../profile.php?error=sqlerror");
            exit();
        }else{
            mysqli_stmt_bind_param($stmt, "ss", $email, $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($result)){
                $passwordCheck = password_verify($password, $row['password']);
                if($passwordCheck == false){
                    header("Location: ../profile.php?error=wrongpassword");
                    exit();
                }else if($passwordCheck == true){
                    session_start();
                    $_SESSION['ID'] = $row['id'];
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['surname'] = $row['surname'];
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['number'] = $row['number'];
                    $_SESSION['location'] = $row['location'];
                    $_SESSION['dateJoined'] = $row['createdAt'];
    
                    header("Location: ../profile.php?login=success");
                    exit();
                }else{
                    header("Location: ../profile.php?error=wrongpassword");
                    exit();
                }
            }else{
                header("Location: ../profile.php?error=nouser");
                exit();
            }
        }
    }
}
else{
    header("Location: ../index.php");
    exit();
}