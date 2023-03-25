<?php

session_start();

include("./connectToDb.php");

$name = filter_var(trim($_POST['inputName']), FILTER_UNSAFE_RAW);
$pass = filter_var(trim($_POST['inputPass']), FILTER_UNSAFE_RAW);

$hashed_password = password_hash($pass, PASSWORD_DEFAULT);

$sql = "SELECT name, pass FROM users WHERE name = '$name'";

$result = mysqli_query($mysql, $sql);

mysqli_close($mysql);

if ($result) {

    while ($row = mysqli_fetch_assoc($result)) {

        if (password_verify($pass, $row['pass'])) {

            $_SESSION['currentUser'] = [
                'name' =>  $row['name'],
                'id' =>  $row['id'],
            ];

            header('Location: /');
            exit();
        }
    };
};

$_SESSION['checkAuthMessage'] = 'Wrong password or username!';
$_SESSION['alertClass'] = 'alert-danger';

header('Location: ../login.php');
