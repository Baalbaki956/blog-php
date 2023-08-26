<?php
require_once '../includes/header.php';
require_once '../classes/Connection.php';
require_once 'helpers/session-expiry.php';

$id = $_GET['id'];

$connection = new Connection();
$query = "SELECT * FROM posts where id = $id";

$result = $connection->executeQuery($query);

if ($result) {
    $row = $connection->fetchRow($result);
?>

<div class="container" style="margin-top: 8rem; width: 70%;">
    <div class="row row-cols-1 row-cols-md-4 g-4">
        <div class="col-md-12">
            <p class="fs-1"><?php echo $row['title']; ?></p>
            <span style="" class="fw-lighter">posted on <?php echo date('d/m/Y', strtotime($row["creation_date"])); ?></span>
            <p><?php echo $row['sdesc']; ?></p>
            <hr>
            <img src="../assets/<?php echo $row["image_url"]; ?>" alt="<?php echo $row['image_url']; ?>" class="img-fluid" style="width: 100%;">
            <br><br><hr><br>
            <p class="lead"><?php echo $row['body']; ?></p>
            
        </div>
    </div>
</div>
<?php
}

require_once '../includes/footer.php';
?>