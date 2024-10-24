<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Hardcoded credentials for simplicity
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'admin' && $password == 'admin123') {
        $_SESSION['admin_logged_in'] = true;
        header('Location: admin_dashboard.php');
        exit;
    } else {
        $error = "Invalid credentials!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Login</title>
</head>
<body>

<h1>Admin Login</h1>
<?php if (isset($error)) echo "<p>$error</p>"; ?>
<form method="POST" action="admin_login.php">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
</form>

</body>
</html>
