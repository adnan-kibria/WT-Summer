<?php
include "../db/db-conn.php";

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = trim($_POST['name'] ?? '');
    $username = trim($_POST['username'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $createpass = trim($_POST['createpass'] ?? '');
    $confirmpass = trim($_POST['confirmpass'] ?? '');

    if(empty($name) || empty($username) || empty($email)) {
        die("Required fields cannot be empty");
    }
    
    $passwordUpdate = '';
    if (!empty($createpass) && $createpass === $confirmpass) {
        $hashedPassword = password_hash($createpass, PASSWORD_DEFAULT);
        $passwordUpdate = ", password = '$hashedPassword'";
    } elseif (!empty($createpass) && $createpass !== $confirmpass) {
        die("Passwords do not match");
    }

    $sql = "UPDATE info SET name='$name', email='$email' $passwordUpdate WHERE username='$username'";
    
    if($conn->query($sql) === TRUE){
        echo "Data updated successfully!";
    } else {
        echo "Error: ".$sql."<br>".$conn->error;
    }
}
?>