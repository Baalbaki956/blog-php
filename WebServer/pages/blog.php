<?php 
require_once '../includes/header.php';
require_once '../classes/Connection.php';
require_once '../helpers/session-expiry.php';

$connection = new Connection();

$query = "SELECT * FROM posts";
$result = $connection->executeQuery($query);
?>

<div class="container" style="margin-top: 8rem; width: 70%;">
    <div class="row">
        <?php while ($row = $connection->fetchRow($result)) { ?>
        <div class="col-sm-3" style="padding-bottom: calc(1.5rem * .5);">
            <div class="card h-100" style="width: 12rem;">
                <img src="../assets/<?php echo $row["image_url"]; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <a class="link-warning link-underline-opacity-0"  href="details.php?id=<?php echo $row['id']; ?>" class="card-title"><?php echo $row["title"]; ?></a>
                    <hr>
                    <p class="card-text"><?php echo $row["sdesc"]; ?></p>
                </div>
                
            </div>
        </div>
        <?php } ?>
    </div>
</div>


<?php  
require_once("../includes/footer.php");
?>