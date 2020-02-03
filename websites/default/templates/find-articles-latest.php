<?php
$articles = $pdo->prepare('SELECT * FROM products ORDER BY pub_date DESC');
$articles->execute();
?>