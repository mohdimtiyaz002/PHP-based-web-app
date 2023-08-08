<?php
// This is a simple demonstration. In real applications, use proper security measures.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"]; // In a real application, hash the password before storing.

    // In a real application, store user information in a database.
    // Here, we are using a simple file-based approach for demonstration purposes.
    $user_info = "$username,$password\n";
    file_put_contents("users.csv", $user_info, FILE_APPEND);

    header("Location: login.php");
    exit();
}
?>
