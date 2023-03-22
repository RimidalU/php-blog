<?php 

$fieldName = 'currentUser';
$userName = $_POST['inputName'];;
$expiresOn = time() + 3600; // Lifetime 1 hour
$path = '/';
$domain = 'exemple.com';

setcookie($fieldName, $userName, $expiresOn, $path);

header('Location: /');