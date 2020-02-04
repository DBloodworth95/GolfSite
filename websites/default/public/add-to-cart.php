<?php
session_start();
$_SESSION['cart_counter']++;

var_dump($_GET);
var_dump ($_POST);
var_dump($_SESSION['cart_counter']);
var_dump(key($_POST));
// $_SESSION['cart_counter'] []

?>