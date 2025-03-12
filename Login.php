<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "login_register";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if the email exists in the users table
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // User found in the users table
        $_SESSION['user_type'] ='residents';
        header("Location: hpuser.php");
        exit();
    }

    // Check if the email exists in the admins table
    $stmt = $conn->prepare("SELECT * FROM admins WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // User found in the admins table
        $_SESSION['user_type'] = 'admin';
        header("Location: hpadmin.php");
        exit();
    }

    // If email not found in both users and admins tables
    $_SESSION['login_error'] = "Invalid email or password"; // Set the error message in session
    header("Location: Login Page.php");
    exit();
}
?>
