<?php 
$cookie_name = 'username';
unset($_COOKIE[$cookie_name]);
// empty value and expiration one hour before
$res = setcookie($cookie_name, '', time() - 3600);
header('Location: ../index.php');
?>