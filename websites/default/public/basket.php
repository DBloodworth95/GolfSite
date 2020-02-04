<?php 

session_start();

	
if (isset($_POST["addToBasket"])) {
	$basketResults = [

		"name" => $_POST['name'],
		"brand" => $_POST['brand'],
		"price" => $_POST['price'],
		"image" => $_POST['image'],
		"slice" => "/"
	];

	$_SESSION["basket"] = [$basketResults];
}

if(isset($_POST['remove'])) {
    unset($_SESSION["basket"]);
}


require '../templates/connect.php';

require '../templates/find-products-by-basket.php';

ob_start();

require '../templates/list-products-by-basket.html.php';
$content = ob_get_clean();

require '../templates/find-categories.php';

// $login ='Log in';

ob_start();
require '../templates/topnav.html.php';
$topnav = ob_get_clean();


ob_start();
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
