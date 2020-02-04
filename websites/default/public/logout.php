<?php
session_start(); 
unset($_SESSION['loggedin']); 
$_SESSION['cart_counter']=0;
echo 'You are now logged out, <a href="index.php">return to home page.</a>';
?>