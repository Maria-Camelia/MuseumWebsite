<?php
session_start();


if (isset($_POST["Email"]) && isset($_POST["Password"])) {
    require_once("UserClass.php");
    $User = new UserClass($_POST['Email'], $_POST['Password']);
    $loginResult = $User->loginUser();
    if($loginResult){ 
        $_SESSION["isLoggedin"] = true;
        $_SESSION["UserEmail"] = $User->email;
        $_SESSION["isAdmin"] = $User->isAdmin;
        echo "<script>alert('Te-ai autentificat cu succes!');window.location.href='home.php';</script>";
        exit();
    }else{
        echo "<script>alert('Error: Ceva nu a funcționats!');window.location.'href=home.php'</script>";
        exit();
    }
}else{
    header("Location: home.php"); 
    exit();
}