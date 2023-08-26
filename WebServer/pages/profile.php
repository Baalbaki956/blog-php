<?php
require_once '../includes/header.php';
require_once '../classes/Connection.php';
require_once '../helpers/session-expiry.php';

if (!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] === false) {
    redirectTo("../index.php");
}

?>

<div class="container" style="margin-top: 6rem; max-width: 50%;">
    <div class="row">
        <h1>Welcome back <span class="text-warning text-decoration-underline"><?php echo $_SESSION['user'] ?></span>!</h1>
    </div>
</div>

<?php require_once '../includes/footer.php'; ?>