<?php 

$host="localhost";
$dbUser="root";
$dbPassword="";
$dbName="muzeu";

$connection = mysqli_connect($host, $dbUser, $dbPassword, $dbName);

    if(!$connection){
        echo"Please check your database connection";
    }

?>