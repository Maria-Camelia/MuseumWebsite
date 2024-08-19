<?php
session_start();

// User must be loggedin in order to access current page
if(isset($_SESSION["isLoggedin"]) === false || $_SESSION["isLoggedin"] !== true){
    echo "<script>
alert('Trebuie sa te autentifici pentru a putea vedea aceasta pagina!');window.location.href='login.php';
</script>";
    // header("Location: home.php");
}
?>