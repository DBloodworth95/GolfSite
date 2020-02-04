<?php
session_start();

$_SESSION['cart_counter']++;
unset ($_POST['add']);
$_SESSION['basket'][$_GET['product_id']] =  $_POST;

header("location: basket.php");
// var_dump($_GET);
// var_dump ($_POST);
// var_dump($_SESSION['cart_counter']);
// var_dump(key($_POST));
// $_SESSION['cart_counter'] []
// unset ($_POST['add']);
// $string_cart_counter = strval($_SESSION['cart_counter']);
// var_dump ($string_cart_counter);
// var_dump($_SESSION);
foreach($_POST as $key => $val)
{

    $_SESSION['basket'][$_GET['product_id']][$key] =$val;

}

var_dump($_SESSION['basket']);

?>