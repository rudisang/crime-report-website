<?php

$servername = "localhost";
$dbUser = "root";
$dbPass = "";
$db = "crime_db";

//INITIALIZE MYSQLI DATABASE CONNECTION
$con = mysqli_connect($servername, $dbUser, $dbPass, $db);

//CHECK IF CONNECTION IS UNSUCCESSFUL AND THE SEND ERROR MESSAGE
if(!$con){
    die("Connection Failed: ".mysqli_connect_error());
}