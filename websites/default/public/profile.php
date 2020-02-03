<?php 

session_start();
require '../templates/connect.php';

require '../templates/find-user-by-id.php';

ob_start();

require '../templates/list-user-profile-by-id.html.php';
$content = ob_get_clean();



// $login ='Log in';


ob_start();
require '../templates/find-categories.php';
require '../templates/topnav.html.php';
$topnav = ob_get_clean();


ob_start();
require '../templates/find-categories.php';
require '../templates/catnav.html.php';
$catnav = ob_get_clean();


ob_start();
require '../templates/carousel.html.php';
$carousel = ob_get_clean();


ob_start();
require '../templates/footer.html.php';
$footer = ob_get_clean();

require '../templates/layout-no-carousel.html.php';
?>
