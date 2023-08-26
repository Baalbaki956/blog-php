<?php
class Connection {

    private $host = "localhost";
    private $db = "blog";
    private $username = "root";
    private $password = "root";
    
    function connect() {
        $con = mysqli_connect($this->host, $this->username, $this->password, $this->db);

        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        return $con;
    }

    function executeQuery($query) {
        $conn = $this->connect();
        $result = mysqli_query($conn, $query);

        if (!$result) {
            die("Database access failed: " . mysqli_error($conn));
        }
        
        $this->close($conn);
        return $result;
    }

    function fetchRow($result) {
        return mysqli_fetch_assoc($result);
    }

    function getNumRows($result) {
        return mysqli_num_rows($result);
    }

    function close($con) {
        mysqli_close($con);
    }
}