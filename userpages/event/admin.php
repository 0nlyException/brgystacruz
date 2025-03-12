<?php
session_start();
require 'dbcon.php';

if(isset($_POST['deletefeedback']))
{
	$admin_id = mysqli_real_escape_string($con,$_POST['deletefeedback']);
	
	$query = "DELETE FROM feedback WHERE id ='$admin_id'";
	
	$query_run = mysqli_query($con,$query);
	if($query_run)
	{
		$_SESSION['message'] = "Post Deleted Succesfully";
		header("Location: feedbacks.php");
		exit(0);
		
	}
	else
	{
		$_SESSION['message'] = "Post Not Deleted";
		header("Location: feedbacks.php");
		exit(0);
	}
	
}


if(isset($_POST['registerfeedback']))
{
	$title = mysqli_real_escape_string($con, $_POST['title']);
	$description = mysqli_real_escape_string($con, $_POST['description']);
	
	if(empty($title) || empty($description)) {
        $_SESSION['message'] = "Please fill in the title and description.";
        header("Location: index.php");
        exit(0);
    }
	
	$query = "INSERT INTO feedback (title,description) VALUES ('$title','$description')";
		
	$query_run = mysqli_query($con,$query);
	if($query_run)
	{
		$_SESSION['message'] = "Post Created Succesfully";
		header("Location: index.php");
		exit(0);
		
	}
	else
	{
		$_SESSION['message'] = "Post Not Created";
		header("Location: index.php");
		exit(0);
	}
	
	
	
}



if(isset($_POST['deleteannouncements']))
{
	$admin_id = mysqli_real_escape_string($con,$_POST['deleteannouncements']);
	
	$query = "DELETE FROM announcement WHERE id ='$admin_id'";
	
	$query_run = mysqli_query($con,$query);
	if($query_run)
	{
		$_SESSION['message'] = "Post Deleted Succesfully";
		header("Location: announcements.php");
		exit(0);
		
	}
	else
	{
		$_SESSION['message'] = "Post Not Deleted";
		header("Location: announcements.php");
		exit(0);
	}
	
}

if(isset($_POST['updateannouncements'])) {
    $admin_id = mysqli_real_escape_string($con, $_POST['admin_id']);
    $title = mysqli_real_escape_string($con, $_POST['title']);
    $description = mysqli_real_escape_string($con, $_POST['description']);
    
    // File upload handling
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    $image_type = $_FILES['image']['type'];
    $image_size = $_FILES['image']['size'];

    // Validate file type
    $allowed_types = array('image/jpeg', 'image/png');
    if (!in_array($image_type, $allowed_types)) {
        $_SESSION['message'] = "Error: Only PNG and JPG files are allowed";
        header("Location: editannouncements.php?id=$admin_id");
        exit;
    } elseif ($image_size > 1048576) { // Check file size (1MB limit)
        $_SESSION['message'] = "Error: File size should not exceed 1MB";
        header("Location: editannouncements.php?id=$admin_id");
        exit;
    } else {
        $image = addslashes(file_get_contents($image_tmp_name)); // Convert file into binary data
        
        $query = "UPDATE announcement SET title ='$title', description='$description', image='$image' WHERE id='$admin_id'";
        $query_run = mysqli_query($con, $query);
        
        if($query_run) {
            $_SESSION['message'] = "Announcement updated successfully";
            header("Location: announcements.php");
            exit;
        } else {
            $_SESSION['message'] = "Failed to update announcement";
            header("Location: editannouncements.php?id=$admin_id");
            exit;
        }
    }
}

if(isset($_POST['registerannouncements'])) {
    $title = mysqli_real_escape_string($con, $_POST['title']);
    $description = mysqli_real_escape_string($con, $_POST['description']);
    
    // File upload handling
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    $image_type = $_FILES['image']['type'];
    $image_size = $_FILES['image']['size'];

    // Validate file type
    $allowed_types = array('image/jpeg', 'image/png');
    if (!in_array($image_type, $allowed_types)) {
        $_SESSION['message'] = "Error: Only PNG and JPG files are allowed";
        header("Location: addannouncements.php");
        exit;
    } elseif ($image_size > 1048576) { // Check file size (1MB limit)
        $_SESSION['message'] = "Error: File size should not exceed 1MB";
        header("Location: addannouncements.php");
        exit;
    } else {
        $image = addslashes(file_get_contents($image_tmp_name)); // Convert file into binary data
        
        $query = "INSERT INTO announcement (title, description, image) VALUES ('$title', '$description', '$image')";
        $query_run = mysqli_query($con, $query);
        
        if($query_run) {
            $_SESSION['message'] = "Announcement created successfully";
            header("Location: announcements.php");
            exit;
        } else {
            $_SESSION['message'] = "Failed to create announcement";
            header("Location: addannouncements.php");
            exit;
        }
    }
}



if(isset($_POST['deleteevents']))
{
	$admin_id = mysqli_real_escape_string($con,$_POST['deleteevents']);
	
	$query = "DELETE FROM event WHERE id ='$admin_id'";
	
	$query_run = mysqli_query($con,$query);
	if($query_run)
	{
		$_SESSION['message'] = "Post Deleted Succesfully";
		header("Location: events.php");
		exit(0);
		
	}
	else
	{
		$_SESSION['message'] = "Post Not Deleted";
		header("Location: events.php");
		exit(0);
	}
	
}

if(isset($_POST['updateevents'])) {
    $admin_id = mysqli_real_escape_string($con, $_POST['admin_id']);
    $title = mysqli_real_escape_string($con, $_POST['title']);
    $description = mysqli_real_escape_string($con, $_POST['description']);
    
    // File upload handling
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_type = $_FILES['image']['type'];
    $image_size = $_FILES['image']['size'];

    // Validate file type
    $allowed_types = array('image/jpeg', 'image/png');
    if (!in_array($image_type, $allowed_types)) {
        $_SESSION['message'] = "Error: Only PNG and JPG files are allowed";
        header("Location: editevents.php?id=$admin_id");
        exit;
    } elseif ($image_size > 1048576) { // Check file size (1MB limit)
        $_SESSION['message'] = "Error: File size should not exceed 1MB";
        header("Location: editevents.php?id=$admin_id");
        exit;
    } else {
        $image = addslashes(file_get_contents($image_tmp_name)); // Convert file into binary data
        
        $query = "UPDATE event SET title ='$title', description='$description', image='$image' WHERE id='$admin_id'";
        $query_run = mysqli_query($con, $query);
        
        if($query_run) {
            $_SESSION['message'] = "Event updated successfully";
            header("Location: events.php");
            exit;
        } else {
            $_SESSION['message'] = "Failed to update event";
            header("Location: editevents.php?id=$admin_id");
            exit;
        }
    }
}

if(isset($_POST['registerevents'])) {
    $title = mysqli_real_escape_string($con, $_POST['title']);
    $description = mysqli_real_escape_string($con, $_POST['description']);

    // File upload handling
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    $image_type = $_FILES['image']['type'];
    $image_size = $_FILES['image']['size']; // File size in bytes

    // Validate file type
    $allowed_types = array('image/jpeg', 'image/png');
    if (!in_array($image_type, $allowed_types)) {
        $_SESSION['message'] = "Error: Only PNG and JPG files are allowed";
        header("Location: addevents.php");
        exit;
    }

    // Validate file size (less than 1MB)
    $maxFileSize = 1048576; // 1MB in bytes
    if ($image_size > $maxFileSize) {
        $_SESSION['message'] = "Error: File size exceeds the maximum limit of 1MB";
        header("Location: addevents.php");
        exit;
    }

    // Read the file content
    $image = addslashes(file_get_contents($image_tmp_name)); // Convert file into binary data

    // Proceed with database insertion
    $query = "INSERT INTO event (title, description, image) VALUES ('$title', '$description', '$image')";
    $query_run = mysqli_query($con, $query);

    if($query_run) {
        $_SESSION['message'] = "Event created successfully";
        header("Location: events.php");
        exit;
    } else {
        $_SESSION['message'] = "Failed to create event";
        header("Location: addannouncements.php");
        exit;
    }
}






if(isset($_POST['deleteprograms']))
{
	$admin_id = mysqli_real_escape_string($con,$_POST['deleteprograms']);
	
	$query = "DELETE FROM program WHERE id ='$admin_id'";
	
	$query_run = mysqli_query($con,$query);
	if($query_run)
	{
		$_SESSION['message'] = "Post Deleted Succesfully";
		header("Location: programs.php");
		exit(0);
		
	}
	else
	{
		$_SESSION['message'] = "Post Not Deleted";
		header("Location: programs.php");
		exit(0);
	}
	
}


if(isset($_POST['updateprograms'])) {
    $admin_id = mysqli_real_escape_string($con, $_POST['admin_id']);
    $title = mysqli_real_escape_string($con, $_POST['title']);
    $description = mysqli_real_escape_string($con, $_POST['description']);
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    $image_type = $_FILES['image']['type'];
    $image_size = $_FILES['image']['size']; // File size in bytes

    // Validate file size (less than 1MB)
    $maxFileSize = 1048576; // 1MB in bytes
    if ($image_size > $maxFileSize) {
        $_SESSION['message'] = "Error: File size exceeds the maximum limit of 1MB";
        header("Location: editprograms.php?id=$admin_id");
        exit;
    }
	
	$allowed_types = array('image/jpeg', 'image/png');
    if (!in_array($image_type, $allowed_types)) {
        $_SESSION['message'] = "Error: Only PNG and JPG files are allowed";
        header("Location: editprograms.php?id=$admin_id");
        exit;
    }

    // Convert the file into binary data
    $image = addslashes(file_get_contents($image_tmp_name));

    // Update the program in the database
    $query = "UPDATE program SET title ='$title', description='$description', image='$image' WHERE id='$admin_id'";
    $query_run = mysqli_query($con, $query);
    
    if($query_run) {
        $_SESSION['message'] = "Program updated successfully";
        header("Location: programs.php");
        exit;
    } else {
        $_SESSION['message'] = "Failed to update program";
        header("Location: editprograms.php?id=$admin_id");
        exit;
    }
}

if(isset($_POST['registerprograms'])) {
    $title = mysqli_real_escape_string($con, $_POST['title']);
    $description = mysqli_real_escape_string($con, $_POST['description']);
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    $image_type = $_FILES['image']['type'];
    $image_size = $_FILES['image']['size']; // File size in bytes

    // Validate file size (less than 1MB)
    $maxFileSize = 1048576; // 1MB in bytes
    if ($image_size > $maxFileSize) {
        $_SESSION['message'] = "Error: File size exceeds the maximum limit of 1MB";
        header("Location: addprograms.php");
        exit;
    }

    $allowed_types = array('image/jpeg', 'image/png');
    if (!in_array($image_type, $allowed_types)) {
        $_SESSION['message'] = "Error: Only PNG and JPG files are allowed";
        header("Location: editprograms.php?id=$admin_id");
        exit;
    }

    // Convert the file into binary data
    $image = addslashes(file_get_contents($image_tmp_name));

    // Insert the new program into the database
    $query = "INSERT INTO program (title, description, image) VALUES ('$title', '$description', '$image')";
    $query_run = mysqli_query($con, $query);
    
    if($query_run) {
        $_SESSION['message'] = "Program created successfully";
        header("Location: programs.php");
        exit;
    } else {
        $_SESSION['message'] = "Failed to create program";
        header("Location: addprograms.php");
        exit;
    }
}
?>