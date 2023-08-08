<?php
$host = 'localhost';
$dbname = 'myappdb';        // Your database name
$username = 'myappuser';    // Your database user
$password = 'securepass';   // Your database password

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
