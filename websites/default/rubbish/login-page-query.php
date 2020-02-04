<?php
// session_start();
require '../templates/connect.php';

if (isset($_POST['submit'])) {
    $stmt = $pdo->prepare('SELECT * FROM users WHERE email = :email');
    $details = [
        'email' => $_POST['email'],
    ];
    unset($_POST['submit']);
    $stmt->execute($details);
    if ($stmt->rowCount() > 0) {
        $user = $stmt->fetch();
        if ($_POST['password'] == $user['password']) {
            session_start();
            $_SESSION['loggedin'] = $user['user_id'];
                // header("location: index.php");
                $content = "sfdg";
             
        }
        
        if ($_POST['email'] !== $user['email'] ) {
            $content= 'Sorry, your username and password could not be found Please try <a href="login.php"> again!</a>';
        }
    }
}
else $content = require '../templates/login-content.html.php';
?>