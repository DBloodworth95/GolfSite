<?php
$stmt = $pdo->prepare('SELECT * FROM products WHERE product_id = 1');
$stmt->execute();

 $product = $stmt->fetch();
//ORDER BY pub_date DESC
?>