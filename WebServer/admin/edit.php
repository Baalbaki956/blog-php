<?php
require_once '../classes/Connection.php';
include_once '../includes/header.php';

$id = $_GET['id'];

$connection = new Connection();
$query = "Select * from users where id = $id";
$result = $connection->executeQuery($query);

if ($result) {
    $row = $connection->fetchRow($result);
?>

<div class="container" style="margin-top: 6rem; max-width: 50%;">
    <div class="row">
        <form method="get" action="save.php">
            <div class="mb-2">
                <label class="form-label">ID</label> 
                <input type="text" class="form-control" name="id" value="<?php echo $row['id']; ?>">
            </div>
            <div class="mb-2">
                <label for="first_name" class="form-label">First Name</label> 
                <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo $row['first_name']; ?>">
            </div>
            <div class="mb-2">
                <label for="last_name" class="form-label">Last Name</label>
                <input type="text" name="last_name" class="form-control" id="last_name" value="<?php echo $row['last_name']; ?>">
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
                <input type="email" name="email" class="form-control" id="email" value="<?php echo $row['email']; ?>">
            </div>
            <input style="float: right;" type="submit" class="btn btn-outline-warning" value="Save">
        </form>
    </div>
</div>
<?php
}
include_once '../includes/footer.php';