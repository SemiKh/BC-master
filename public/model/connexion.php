<?php 
setcookie('auth_token', $authToken, time() + 3600, '/', '', true, true);
setcookie('auth_token', '', time() - 3600, '/', '', true, true);

if (!isset($_COOKIE['auth_token'])) {
    header('location:index.php');
}

