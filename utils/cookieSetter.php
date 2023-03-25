<?php 

$fieldName = 'currentUser';
$expiresOn = time() + 3600; // Lifetime 1 hour
$path = '/';
$domain = 'exemple.com';

setcookie($fieldName, $userName, $expiresOn, $path);

header('Location: /');