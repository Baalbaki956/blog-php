<?php
define("_DIR_", "/WebServer/");

session_start();

$loggedIn = isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
$isAdmin = isset($_SESSION['is_admin']) && $_SESSION['is_admin'] === true;
?>

<!-- Nav Start -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#"><span class="text-warning">Life</span>Scape</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo _DIR_ . 'index.php'; ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo _DIR_ . 'pages/blog.php'; ?>">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Forum</a>
                </li>
            </ul>
            <!-- Button trigger modal -->        
            <?php if (!$loggedIn && !$isAdmin) { ?>
            <a type="button" class="btn btn-outline-warning" href="<?php echo _DIR_ . 'pages/login.php'; ?>">Account</a>
            <?php } else {?>
            <div class="btn-group">
                <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Profile
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?php echo _DIR_ . 'pages/create-blog.php'; ?>">Add Blog</a></li>
                    <li><a class="dropdown-item" href="<?php echo _DIR_ . 'pages/logout.php'; ?>">Logout</a></li>
                </ul>
            </div>
            <?php } ?>
        </div>
    </div>
</nav>
<!-- Nav End -->