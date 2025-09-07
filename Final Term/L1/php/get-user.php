<?php
include "../db/db-conn.php";

$username = $_GET['username'] ?? '';

$sql = "SELECT name, username, email FROM info WHERE username = '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    echo json_encode($user);
} else {
    echo json_encode(array());
}

$conn->close();
?>