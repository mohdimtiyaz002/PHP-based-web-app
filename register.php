<!DOCTYPE html>
<html>
<head>
    <title>Register - PHP Web App</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <h1>Register</h1>
    </header>
    <main>
        <form action="register_process.php" method="post">
            <label for="username">Username:</label>
            <input type="text" name="username" required>
            <br>
            <label for="password">Password:</label>
            <input type="password" name="password" required>
            <br>
            <input type="submit" value="Register">
        </form>
        <p>Already have an account? <a href="login.php">Login here</a>.</p>
    </main>
    <footer>
        <p>&copy; 2023 My PHP Web App</p>
    </footer>
</body>
</html>
