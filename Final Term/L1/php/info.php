<?php
    include "../db/db-conn.php";

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $name = trim($_POST['name'] ?? '');
        $username = trim($_POST['username'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $createpass = trim($_POST['createpass'] ?? '');
        $confirmpass = trim($_POST['confirmpass'] ?? '');

        if(empty($name) || empty($username) || empty($email) || empty($createpass) || empty($confirmpass)){
            die("Form can't be empty");
        }
        else{
            $sql = "INSERT INTO info (name, username, email, password) VALUES('$name', '$username', '$email', '$createpass')";
            if($conn->query($sql) === TRUE){
                echo "Data stored successfully!";
            }
            else{
                echo "Error: ".$sql."<br>".$conn->error;
            }
        }
    }
?>