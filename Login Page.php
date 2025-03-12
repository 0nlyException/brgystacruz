<?php
session_start();
include 'dbcon.php'; // Include the database connection file

$error_message = ""; // Initialize error message variable

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if the email and password match in the users table
    $stmt_users = $con->prepare("SELECT * FROM users WHERE email = ?");
    $stmt_users->bind_param("s", $email);
    $stmt_users->execute();
    $result_users = $stmt_users->get_result();

    if ($result_users->num_rows > 0) {
        // User found in the users table
        $user = $result_users->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id']; // Store user ID in session for further use
            $_SESSION['user_type'] = 'residents';
            header("Location: hpuser.php");
            exit();
        }
    }

    // Check if the email and password match in the admins table
    $stmt_admins = $con->prepare("SELECT * FROM admins WHERE email = ?");
    $stmt_admins->bind_param("s", $email);
    $stmt_admins->execute();
    $result_admins = $stmt_admins->get_result();

    if ($result_admins->num_rows > 0) {
        // Admin found in the admins table
        $admin = $result_admins->fetch_assoc();
        // Check if the password matches (assuming the admin password is not hashed)
        if ($password === $admin['password']) {
            $_SESSION['user_id'] = $admin['id']; // Store admin ID in session for further use
            $_SESSION['user_type'] = 'admin';
            header("Location: hpadmin.php");
            exit();
        }
    }

    // If email not found in both users and admins tables or password doesn't match
    $error_message = "Invalid email or password";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>LOGIN PAGE</title>
    <link rel="stylesheet" type="text/css" href="Login_design.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet" />
</head>
<body style = "font-family: 'Josefin Sans';">
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form method="post" action="">
        <h3>Login</h3>

        <label for="username">Email</label>
        <input type="text" placeholder="Email" id="username" name="email" />

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password" name="password" />

        <button type="submit">Log In</button>
        <?php if (!empty($error_message)) : ?>
            <div class="error" style="color: red";><?php echo $error_message; ?></div>
        <?php endif; ?>

        <div class="social">
            <p style="margin-left: 5px;margin-right: 5px;"> Don't have an account?  </p>
            <a href="Register Form.php" class="register" >Register</a>
        </div>
    </form>
</body>
</html>
