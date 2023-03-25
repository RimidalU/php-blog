<?php

session_start();

include("./connectToDb.php");

$email = filter_var(trim($_POST['inputEmail']), FILTER_SANITIZE_EMAIL);
$name = filter_var(trim($_POST['inputName']), FILTER_UNSAFE_RAW);
$pass = filter_var(trim($_POST['inputPass']), FILTER_UNSAFE_RAW);
$confirmPass = filter_var(trim($_POST['inputConfirmPass']), FILTER_UNSAFE_RAW);

if ($pass != $confirmPass) {
    $_SESSION['checkPassMessage'] = 'Password mismatch. Try again.';
    $_SESSION['alertClass'] = 'alert-danger';
    header('Location: ../auth.php');
};

if ($pass == $confirmPass) {
    $hashed_password = password_hash($pass, PASSWORD_DEFAULT);
    echo $hashed_password;

    $sql = "INSERT INTO users (name, email, pass) VALUES('$name', '$email', '$hashed_password')";

    if (mysqli_query($mysql, $sql)) {
        echo "User added successfully.";
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
    mysqli_close($mysql);

    $_SESSION['checkAuthMessage'] = 'You are registered successfully. Login to account';
    $_SESSION['alertClass'] = 'alert-success';

    header('Location: ../login.php');
}
