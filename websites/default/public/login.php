<?php 


session_start();
require '../templates/connect.php';

ob_start();
require '../templates/topnav.html.php';
$topnav = ob_get_clean();


ob_start();
require '../templates/catnav.html.php';
$catnav = ob_get_clean();

ob_start();
require '../templates/login-content.html.php';
$catnav = ob_get_clean();

ob_start();
require '../templates/footer.html.php';
$footer = ob_get_clean();


require '../templates/layoutnocarouselnomain.html.php';
?>


