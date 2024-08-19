<?php
session_start();

$_SESSION = array();

session_destroy();

echo "<script>
alert('Te-ai deconectat cu succes!');window.location.href='home.php';
</script>";

exit();
?>