<?php 
    require_once '../includes/header.php';
    require_once '../helpers/functions.php';
    require_once '../classes/Connection.php';
    
    $firstName = $lastName = $gender = $email = $password = $cpassword = "";
    $firstNameError = $lastNameError = $genderError = $emailError = $passwordError = $cPasswordError = "";
    
    if (isPostRequested()) {
        if (!isset($_POST["first_name"]) || empty($_POST["first_name"])) {
            $firstNameError = "* Error! First Name field is empty.";
        } else {
            $firstName = sanitizeString($_POST["first_name"]);
        }
        if (!isset($_POST["last_name"]) || empty($_POST["last_name"])) {
            $lastNameError = "* Error! Last Name field is empty.";
        } else {
            $lastName = sanitizeString($_POST["last_name"]);
        }
        
        $gender = sanitizeString($_POST["gender"]);
        
        if (!isset($_POST["email"]) || empty($_POST["email"])) {
            $emailError = "* Error! Email Address field is empty.";
        } else {
            $email = sanitizeString($_POST["email"]);
        }
        if (!isset($_POST["password"]) || empty($_POST["password"])) {
            $passwordError = "* Error! Password field is empty.";
        } else {
            $password = md5(sanitizeString($_POST["password"]));
        }
        if (!isset($_POST["cpassword"]) || empty($_POST["cpassword"])) {
            $cPasswordError = "* Error! Confirm Passowrd field is empty.";
        } else {
            $cpassword = sanitizeString($_POST["cpassword"]);
        }
        
        if (empty($firstNameError) && empty($lastNameError) && empty($emailError) && empty($passwordError) && empty($cPasswordError)) {
            $connection = new Connection();
            $query = "INSERT INTO users (first_name, last_name, gender, email, password) VALUES ('$firstName', '$lastName', '$gender', '$email', '$password')";
            $result = $connection->executeQuery($query);
            
            redirectTo("../pages/login.php");
        }
    }
?>

<div class="container" style="margin-top: 6rem; max-width: 50%;">
    <div class="row">
        <form method="post" action="">
            <div class="mb-2">
                <label for="first_name" class="form-label">First Name</label> 
                <input type="text" class="form-control" id="first_name" placeholder="John" name="first_name">
                <?php
                if ($firstNameError != "") {
                    ?>
                    <p>
                        <span class="alert alert-danger d-block"><?php echo $firstNameError; ?></span>
                    </p>
                    <?php
                }
                ?>
            </div>
            <div class="mb-2">
                <label for="last_name" class="form-label">Last Name</label>
                <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Smith">
                <?php
                if ($lastNameError != "") {
                    ?>
                    <p>
                        <span class="alert alert-danger d-block"><?php echo $lastNameError; ?></span>
                    </p>
                    <?php
                }
                ?>
            </div>
            <div class="mb-3">
                <label for="gender" class="form-label">Gender</label>
                <select class="form-select" id="gender" aria-label="Default select example" name="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
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
                echo $password;
                if ($passwordError != "") {
                    ?>
                    <p>
                        <span class="alert alert-danger d-block"><?php echo $passwordError; ?></span>
                    </p>
                    <?php
                }
                ?>
            </div>
            <div class="mb-2">
                <label for="cpassword" class="form-label">Confirm Password</label>
                <input type="password" name="cpassword" class="form-control" id="cpassword" placeholder="123456">
                <?php if ($cPasswordError != "") {
                    ?>
                    <p>
                        <span class="alert alert-danger d-block"><?php echo $cPasswordError; ?></span>
                    </p>
                    <?php
                } ?>
            </div>
            
            <div class="mb-3 text-center">
                <p>back to login <a href="<?php echo _DIR_ . 'pages/login.php'; ?>">login</a></p>
            </div>
            
            <input name="submit" style="float: right;" type="submit" class="btn btn-outline-warning" value="Submit">
        </form>
    </div>
</div>

<?php 
    require_once '../includes/footer.php';
?>