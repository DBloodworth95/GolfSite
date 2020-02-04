<?php 


session_start();

// unset existing session
unset($_SESSION['loggedin']);

header("location: index.php");
?>