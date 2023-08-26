<?php 
    $connection = new Connection();
    $con = $connection->connect();
    $query = "SELECT * FROM users";
    $res = $connection->execute_query($con, $query);
    $row = $connection->fetch_row($res);

    foreach ($row as $key => $value) {
            echo $key . ": " . $value . "<br>";
    }

    $connection->close($con);
?>