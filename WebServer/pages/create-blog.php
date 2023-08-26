<?php
require_once '../includes/header.php';
require_once '../helpers/functions.php';
require_once '../classes/Connection.php';
require_once '../helpers/session-expiry.php';

$title = $sDescription = $body = $imageURL = "";
$titleError = $sDescriptionError = $bodyError = $imageURLError = "";

if (isPostRequested()) {    

    if (!isset($_POST["imageURL"]) && empty($_POST["imageURL"])) {
        $imageURLError = "* Error! Must select an image.";
    } else {
        $imageURL = $_POST["imageURL"];
    }

    if (!isset($_POST["title"]) && empty($_POST["title"])) {
        $titleError = "* Error! Title field is empty.";
    } else {
        $title = sanitizeString($_POST["title"]);
    }
    
    if (!isset($_POST["sdesc"]) && empty($_POST["sdesc"])) {
        $sDescriptionError = "* Error! Short Description field is empty.";
    } else {
        $sDescription = sanitizeString($_POST["sdesc"]);
    }
    
    if (!isset($_POST["body"]) && empty($_POST["body"])) {
        $bodyError = "* Error! Body field is empty.";
    } else {
        $body = sanitizeString($_POST["body"]);
    }
    
    if (empty($imageURLError) && empty($titleError) && empty($sDescriptionError) && empty($bodyError)) {
        $connection = new Connection();
        $query = "INSERT INTO posts (image_url, title, sdesc, body) VALUES ('$imageURL', '$title', '$sDescription', '$body')";
        $result = $connection->executeQuery($query);
        
        redirectTo("./blog.php");
    }
}
echo $imageURL;
?>

<div class="container" style="margin-top: 6rem; max-width: 50%;">
    <div class="row">
        <p class="fs-1">Add Blog</p>
        <form method="POST" action="">
            <div class="mb-2">
                <input type="file" name="imageURL" class="form-control">
                <?php if ($imageURLError != "") { ?>
                    <p>
                        <span class="alert alert-danger d-block"><?php echo $imageURLError; ?></span>
                    </p>
                <?php } ?>
            </div>
            <div class="mb-2">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="">
                <?php
                if ($titleError != "") {
                    ?>
                    <p>
                        <span class="alert alert-danger d-block"><?php echo $titleError; ?></span>
                    </p>
                    <?php
                }
                ?>
            </div>
            <div class="mb-2">
                <label for="sdesc" class="form-label">Short Description</label>
                <input type="text" name="sdesc" class="form-control" id="sdesc" placeholder="">
                <?php
                if ($sDescriptionError != "") {
                    ?>
                    <p>
                        <span class="alert alert-danger d-block"><?php echo $sDescriptionError; ?></span>
                    </p>
                    <?php
                }
                ?>
            </div>
            <div class="mb-2">
                <label for="body" class="form-label">Body</label>
                <input type="text" name="body" class="form-control" id="body" placeholder="">
                <?php
                if ($bodyError != "") {
                    ?>
                    <p>
                        <span class="alert alert-danger d-block"><?php echo $bodyError; ?></span>
                    </p>
                    <?php
                }
                ?>
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