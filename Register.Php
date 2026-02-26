<?php
$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['fullname'];
    $email = $_POST['email'];
    $user  = $_POST['username'];
    $pass  = $_POST['password'];

    // Basic Validation: Minimum 4 fields as per instruction
    if (!empty($fname) && !empty($email) && !empty($user) && !empty($pass)) {
        $message = "<div style='color: #4CAF50; margin-bottom: 10px;'>Registration Successful!</div>";
    } else {
        $message = "<div style='color: #ff4d4d; margin-bottom: 10px;'>Error: Please fill in all 4 fields.</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CCE Register</title>
    <style>
        body { background-color: #321F84; color: white; font-family: sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .card { text-align: center; width: 350px; }
        input { width: 100%; padding: 12px; margin: 8px 0; border-radius: 8px; border: 1px solid #ffffff55; background: #ffffff11; color: white; box-sizing: border-box; }
        .btn { width: 100%; padding: 12px; border-radius: 8px; border: none; background: #1877f2; color: white; font-weight: bold; cursor: pointer; margin-top: 10px; }
        a { color: #8aafff; text-decoration: none; font-size: 0.9em; }
    </style>
</head>
<body>
    <div class="card">
        <h2>CREATE CCE ACCOUNT</h2>
        <?php echo $message; ?>
        <form method="POST" action="register.php">
            <input type="text" name="fullname" placeholder="Full Name">
            <input type="email" name="email" placeholder="Email Address">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <button type="submit" class="btn">REGISTER</button>
        </form>
        <p><a href="login.php">Already have an account? Login</a></p>
    </div>
</body>
</html>
