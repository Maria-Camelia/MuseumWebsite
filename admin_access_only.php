<?php
session_start();

// User must be loggedin and must be admin in order to access current page
if(isset($_SESSION["isLoggedin"]) === false || $_SESSION["isLoggedin"] !== true || isset($_SESSION["isAdmin"]) === false || $_SESSION["isAdmin"] !== true){
    header("Location: home.php");
}
?>