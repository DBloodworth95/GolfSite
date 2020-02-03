<?php
$stmt = $pdo->prepare('SELECT * FROM users WHERE user_id = 1');
$stmt->execute();

 $user = $stmt->fetch();
//ORDER BY pub_date DESC
?>