<?php
session_start();

$_SESSION['cart_counter']++;
unset ($_POST['add']);
require '../templates/connect.php';


header("location: basket.php");

foreach($_POST as $key => $val)
{

    $_SESSION['basket'][$_GET['product_id']][$key] =$val;

}

var_dump($_SESSION['basket']);

?>