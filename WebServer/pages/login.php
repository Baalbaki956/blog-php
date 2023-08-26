<?php 
    require_once '../includes/header.php';
    require_once '../helpers/functions.php';
    require_once '../classes/Connection.php';
    require_once '../helpers/session-expiry.php';
    
    $email = $emailError = "";
    $password = $passwordError = "";

    if (isPostRequested()) {
        if (!isset($_POST["email"]) || empty($_POST["email"])) {
            $emailError = "* Error! Email address is empty.";
        } else {
            $email = sanitizeString($_POST["email"]);
        }

        if (!isset($_POST["password"]) && empty($_POST["password"])) {
            $passwordError = "* Error! Password is empty.";
        } else {
            $password = md5(sanitizeString($_POST["password"]));
        }

        if (empty($emailError) && empty($passwordError)) {
            $connection = new Connection();
            $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
            $result = $connection->executeQuery($query);
            
            if ($email === "admin@gmail.com" && $password === md5("admin")) {
                $_SESSION["is_admin"] = true;
                redirectTo("../admin/index.php");
            } else if ($connection->getNumRows($result) == 1) {
                $row = $connection->fetchRow($result);
                $user = $row["first_name"];
                
                if ($email === $row["email"] && $password === $row["password"]) {
                    $_SESSION['user'] = $user;
                    $_SESSION["logged_in"] = true;
                    redirectTo("./profile.php");
                }
            }
        }
    }

?>
<div class="container" style="margin-top: 12rem; max-width: 50%;">
    <div class="row">
        <form method="post" action="">
            <div class="mb-2">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                <?php
                if ($emailError != "") {
                    ?>
                    <p>
                        <span class="alert alert-danger d-block"><?php echo $emailError; ?></span>
                    </p>
                    <?php
                }
                ?>
            </div>
            <div class="mb-2">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="123456">
                <?php
                if ($passwordError != "") {
                    ?>
                    <p>
                        <span class="alert alert-danger d-block"><?php echo $passwordError; ?></span>
                    </p>
                    <?php
                }
                ?>
            </div>
            <div class="mb-3 text-center">
                <p>don't have an account yet? <a href="<?php echo _DIR_ . 'pages/register.php'; ?>">register</a></p>
            </div>
            <input style="float: right;" type="submit" class="btn btn-outline-warning" value="Submit">
        </form>
    </div>
</div>

<?php require_once '../includes/footer.php'; ?>