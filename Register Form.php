<?php
include 'dbcon.php'; // Include the database connection file

$error_message = ""; // Initialize error message variable

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validate password length
    if (strlen($password) < 8) {
        $error_message = "Password must be at least 8 characters long";
    }

    // Validate password and confirm password match
    if ($password !== $confirm_password) {
        $error_message = "Passwords do not match the confirmation";
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_message = "The entered email is an invalid email format";
    }

    // If no errors, proceed with database insertion
    if (empty($error_message)) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $con->prepare("INSERT INTO users (full_name, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $hashed_password);

        if ($stmt->execute()) {
            header("Location: Login Page.php");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registration</title>
  <link rel="stylesheet" href="Register_Design.css" />
</head>
<body style = "font-family: 'Josefin Sans';">
  <div class="wrapper">
    <h2>Registration</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <div class="input-box">
        <input type="text" name="name" placeholder="Enter your name" required />
      </div>
      <div class="input-box">
        <input type="text" name="email" placeholder="Enter your email" required />
      </div>
      <div class="input-box">
        <input type="password" name="password" placeholder="Create password" required />
      </div>
      <div class="input-box">
        <input type="password" name="confirm_password" placeholder="Confirm password" required />
      </div>
      <div class="input-box button">
        <input type="submit" value="Register Now" />
      </div>
      <?php if (!empty($error_message)): ?>
      <div class="error" style="color: red;"><?php echo $error_message; ?></div>
      <?php endif; ?>
      <div class="text">
        <h3>
          Already have an account? <a href="Login Page.php">Login now</a>
        </h3>
      </div>
    </form>
  </div>
</body>
</html>