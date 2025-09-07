<?php
include "../db/db-conn.php";

$username = $_GET['username'] ?? '';

if(empty($username)) {
    die("Username cannot be empty");
}

$sql = "DELETE FROM info WHERE username = '$username'";

if($conn->query($sql) === TRUE){
    echo "User deleted successfully!";
} else {
    echo "Error: ".$sql."<br>".$conn->error;
}

$conn->close();
?>