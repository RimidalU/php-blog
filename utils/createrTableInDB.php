<?php

include("./connectToDb.php");

$sql = "CREATE TABLE users (
    id INT(8) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(70) NOT NULL,
    pass VARCHAR(128) NOT NULL,
    about TEXT NULL,    
    avatar_link VARCHAR(128) NULL,
    color_theme VARCHAR(7) DEFAULT '#f8f9fa')
";

if (mysqli_query($mysql, $sql)) {
    echo "Table created successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysql);
}

mysqli_close($mysql);
