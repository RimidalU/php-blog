<?php

setcookie('currentUser', null, -1, '/'); 

header('Location: /index.php');
