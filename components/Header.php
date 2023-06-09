<?php
session_start();
?>

<div class="container-fluid bg-light">
    <header class="blog-header container py-3 ">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
                <?php
                echo "<a class=\"text-muted\" href=\"$link\">$linkName</a>"
                ?>
            </div>
            <div class="col-4 text-center">
                <a class="blog-header-logo text-dark" href="#">My blog</a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
                <a class="text-muted" href="#" aria-label="Search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24" focusable="false">
                        <title>Search</title>
                        <circle cx="10.5" cy="10.5" r="7.5" />
                        <path d="M21 21l-5.2-5.2" />
                    </svg>
                </a>
                <?php if ($_SESSION['currentUser']) : ?>
                    <a class="nav-link" href="../user.php">
                        <?php echo $_SESSION['currentUser']['name'] ?>
                    </a>
                    <a class="btn btn-sm btn-outline-danger" href="../utils/logout.php">LogOut</a>
                <?php else : ?>
                    <a class="nav-link" href="../login.php">LogIn</a>
                    <a class="btn btn-sx btn-outline-secondary" href="../auth.php">Sign up</a>
                <?php endif;  ?>

            </div>
        </div>
    </header>
</div>