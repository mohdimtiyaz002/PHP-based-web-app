<?php
// This is a simple demonstration. In real applications, use proper security measures.

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"]; // In a real application, hash the password before storing.

    // Check if the username and password are correct (for demo purposes).
    // Replace this with actual database queries in a real application.
    if ($username === "demo" && $password === "password") {
        $_SESSION["username"] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        header("Location: login.php");
        exit();
    }
}
?>
