<?php
session_start();
require 'dbcon.php';

// Function to sanitize input data
function sanitize_input($con, $data) {
    return mysqli_real_escape_string($con, $data);
}

// Handle join program functionality
if(isset($_POST['join_program'])) {
    // Retrieve user details from session
    $user_id = $_SESSION['user_id'];
    
    // Retrieve full name of the user from the users table
    $query = "SELECT `full_name` FROM `users` WHERE `id` = '$user_id'";
    $result = mysqli_query($con, $query);
    if($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $name = $row['full_name'];
    } else {
        // Handle error if user's full name cannot be retrieved
        $_SESSION['message'] = "Error: Failed to retrieve user's full name.";
        header("Location: programs.php");
        exit();
    }

    // Sanitize phone number input
    $phone_number = isset($_POST['phone_number']) ? sanitize_input($con, $_POST['phone_number']) : '';

    // Retrieve program id from the form
    $program_id = sanitize_input($con, $_POST['program_id']);

    // Insert volunteer details into the database
    $query = "INSERT INTO `volunteer` (`program_id`, `user_id`, `name`, `phone_number`) 
              VALUES ('$program_id', '$user_id', '$name', '$phone_number')";

    $query_run = mysqli_query($con, $query);

    if($query_run) {
        $_SESSION['message'] = "You have successfully joined the program!";
        header("Location: programs.php");
        exit();
    } else {
        $_SESSION['message'] = "Failed to join the program. Please try again.";
        header("Location: programs.php");
        exit();
    }
}
?>
