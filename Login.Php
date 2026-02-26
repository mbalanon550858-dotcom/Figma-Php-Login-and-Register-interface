<?php
$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Basic Validation: Fields cannot be empty
    if (!empty($username) && !empty($password)) {
        $message = "<div style='color: #4CAF50; margin-bottom: 10px;'>Login Successful!</div>";
    } else {
        $message = "<div style='color: #ff4d4d; margin-bottom: 10px;'>Error: All fields are required.</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CCE Login</title>
    <style>
        body { background-color: #321F84; color: white; font-family: sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .card { text-align: center; width: 350px; }
        input { width: 100%; padding: 12px; margin: 10px 0; border-radius: 25px; border: 1px solid #ffffff55; background: #ffffff22; color: white; box-sizing: border-box; }
        .btn { width: 100%; padding: 12px; border-radius: 25px; border: none; background: white; color: #321F84; font-weight: bold; cursor: pointer; transition: 0.3s; }
        .btn:hover { background: #f0f0f0; }
        a { color: #8aafff; text-decoration: none; font-size: 0.9em; }
    </style>
</head>
<body>
    <div class="card">
        <h2>CCE LOGIN</h2>
        <?php echo $message; ?>
        <form method="POST" action="login.php">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <button type="submit" class="btn">LOGIN</button>
        </form>
        <p><a href="register.php">Don't have an account? Register</a></p>
    </div>
</body>
</html>
