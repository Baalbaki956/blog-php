<?php
require_once '../includes/header.php';
require_once '../classes/Connection.php';

$connection = new Connection();

$query = "SELECT * FROM users";
$result = $connection->executeQuery($query);

if ($connection->getNumRows($result) > 0) {
    echo '<div class="container"><div class="row" style="margin-top: 12rem;">';
    echo '<table class="table"><thead><tr><th scope="col">ID</th><th scope="col">First Name</th><th scope="col">Last Name</th><th scope="col">Email</th><th scope="col">Action</th></tr></thead><tbody>';
    
    $r = $connection->getNumRows($result);
    
    for ($i = 0; $i < $r; $i++) {
        $row = $connection->fetchRow($result);
        echo '<tr>';
        echo '<td>' . $row["id"] . '</td>';
        echo '<td>' . $row["first_name"] . '</td>';
        echo '<td>' . $row["last_name"] . '</td>';
        echo '<td>' . $row["email"] . '</td>';
        echo '<td><a href="edit.php?id=' .$row["id"]. '"class="btn btn-primary">Edit</a> | <a href="delete.php?id=' .$row["id"]. '"class="btn btn-danger">Delete</a></td>';
        echo '</tr>';
    }
    
    echo '</tbody></table>
    <p><a href="export.php">Export to Excel</a></p>
    <p><a href="../vendors/line-graphe.php">Line Graph from Database</a></p>
    <p><a href="../vendors/line-gr.php">Line Graph from Direct Data</a></p>
    <p><a href="../vendors/bar_chart.php">Bar Graph</a></p>
    </div></div>';
}

require_once '../includes/footer.php';
?>
