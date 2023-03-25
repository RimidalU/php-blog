<?php

include("./connectToDb.php");

$email = filter_var(trim($_POST['inputEmail']), FILTER_SANITIZE_EMAIL);
$name = filter_var(trim($_POST['inputName']), FILTER_UNSAFE_RAW);
$pass = filter_var(trim($_POST['inputPass']), FILTER_UNSAFE_RAW);

$sql = "INSERT INTO users (name, email, pass) VALUES('$name', '$email', '$pass')";

mysqli_query($mysql, $sql);

mysqli_close($mysql);

header('Location: /');
