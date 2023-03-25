<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/php-logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Subscribe</title>
</head>

<body class="h-100">
    <?php
    $link = '/';
    $linkName = 'Home';
    require './components/Header.php';
    ?> <div class="container-fluid d-flex flex-column h-100">
        <main role="main" class="">
            <div class="row justify-content-center">
                <div class="col-md-4 bg-light p-4 my-5">
                    <h3 class="pb-4 mb-1 font-italic">
                        Subscribe
                    </h3>
                    <form action="./utils/postman.php" method="post" id="subscribe" class="border p-2">
                        <div class="form-group mb-2">
                            <label for="inputName">Name:</label>
                            <input type="text" class="form-control" id="inputName" name="inputName" aria-describedby="nameHelp" placeholder="
                            <?php
                            $currentUser = $_SESSION['currentUser']['name'];

                            if ($currentUser) {
                                echo $currentUser;
                            } else {
                                echo 'John Doe';
                            };
                            ?>" required autofocus>
                            <small id="namelHelp" class="form-text text-muted">*Enter You name</small>
                        </div>
                        <div class="form-group mb-2">
                            <label for="inputEmail">Email:</label>
                            <input type="email" class="form-control" id="inputEmail" name="inputEmail" aria-describedby="emailHelp" placeholder="example@email.com" required>
                            <small id="emailHelp" class="form-text text-muted">*Enter your email</small>
                        </div>
                        <div class="form-group form-switch mb-4">
                            <input class="form-check-input" type="checkbox" name="isAdditional" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Send me additional content</label>
                        </div>
                        <div class="container text-end">
                            <button type="reset" class="btn btn-secondary mr-2">Reset</button>
                            <button type="submit" form="subscribe" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </main>

        <?php require './components/Footer.php'; ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>