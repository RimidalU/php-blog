<?php

include("./connectToDb.php");

$email = filter_var(trim($_POST['inputEmail']), FILTER_SANITIZE_EMAIL);
$name = filter_var(trim($_POST['inputName']), FILTER_UNSAFE_RAW);
$pass = filter_var(trim($_POST['inputPass']), FILTER_UNSAFE_RAW);

$hashed_password = password_hash($pass, PASSWORD_DEFAULT);
echo $hashed_password;

$sql = "INSERT INTO users (name, email, pass) VALUES('$name', '$email', '$hashed_password')";

if (mysqli_query($mysql, $sql)) {
    echo "User added successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($mysql);

header('Location: /');
