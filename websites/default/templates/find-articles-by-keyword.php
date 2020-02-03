<?php
$articles = $pdo->prepare('SELECT * FROM products WHERE product_name LIKE :keyword OR category LIKE :keyword OR product_description LIKE :keyword OR user_f_name LIKE :keyword ');
$articles->execute(['keyword' => '%'. $_POST['keyword'] . '%']);

?>