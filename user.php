<?php
session_start();

session_start();
if (!$_SESSION['currentUser']) {
    header('Location: ./auth.php');
};
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
    <title>User settings</title>
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
                        User settings
                    </h3>
                    <form action="#" method="post" id="userSettings" class="border p-2"> // to updateUser
                        <div class="form-group mb-2">
                            <label for="inputName"> Name:</label>
                            <input type="text" class="form-control" id="inputName" name="inputName" aria-describedby="nameHelp" minlength="3" maxlength="50" placeholder="
                            <?php
                            $currentUser = $_SESSION['currentUser']['name'];

                            if ($currentUser) {
                                echo $currentUser;
                            } else {
                                echo 'John Doe';
                            };
                            ?>                            
                            " required>
                            <small id="namelHelp" class="form-text text-muted">*Change You name</small>
                        </div>
                        <div class="form-group mb-2">
                            <label for="inputEmail">Email:</label>
                            <input type="email" class="form-control" id="inputEmail" name="inputEmail" aria-describedby="emailHelp" placeholder="example@email.com" required disabled>
                            <small id="emailHelp" class="form-text text-muted">*Change your email</small>
                        </div>
                        <div class="form-group mb-2">
                            <label for="inputAboutMe" class="form-label">About me:</label>
                            <textarea class="form-control" id="inputAboutMe" rows="3" placeholder="We all love to be heard. Tell us something about yourself." disabled></textarea>
                            <small id="inputAboutMe" class="form-text text-muted">*Change text</small>
                        </div>
                        <div class="form-group mb-2">
                            <label for="inputAvatar" class="form-label">Change your avatar:</label>
                            <input class="form-control" type="file" id="inputAvatar" disabled>
                            <small id="inputAvatar" class="form-text text-muted">*Upload a picture or photo</small>
                        </div>
                        <div class="form-group mb-2">
                            <label for="inputPas">Password:</label>
                            <input type="password" class="form-control" id="inputPass" name="inputPass" aria-describedby="passHelp" minlength="6" maxlength="32" placeholder="12345" required>
                            <small id="passHelp" class="form-text text-muted">*Enter Password</small>
                        </div>
                        <div class="form-group mb-4">
                            <label for="themeInput" class="form-label">Color theme</label>
                            <input type="color" class="form-control form-control-color" id="themeInput" value="#f8f9fa" title="Choose your color theme" disabled>
                            <small id="themeInput" class="form-text text-muted">*Change your color theme</small>
                        </div>
                        <div class="container text-end">
                            <button type="reset" class="btn btn-secondary mr-2">Reset</button>
                            <button type="submit" disabled form="userSettings" class="btn btn-primary">Submit</button>
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