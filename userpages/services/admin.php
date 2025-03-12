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


if(isset($_POST['updateannouncements']))
{
	$admin_id = mysqli_real_escape_string($con, $_POST['admin_id']);
	
	$title = mysqli_real_escape_string($con, $_POST['title']);
	$description = mysqli_real_escape_string($con, $_POST['description']);
	$image = mysqli_real_escape_string($con, $_POST['image']);
	
	if(empty($title) || empty($description)) {
        $_SESSION['message'] = "Please fill in the title and description.";
        header("Location: editannouncements.php");
        exit(0);
    }
	$query = "UPDATE announcement SET title ='$title', description='$description', image='$image' WHERE id='$admin_id'";

	$query_run = mysqli_query($con,$query);
	if($query_run)
	{
		$_SESSION['message'] = "Post Updated Succesfully";
		header("Location: announcements.php");
		exit(0);
		
	}
	else
	{
		$_SESSION['message'] = "Post Not Updated";
		header("Location: announcements.php");
		exit(0);
	}
	
	
	
}


if(isset($_POST['registerannouncements']))
{
	$title = mysqli_real_escape_string($con, $_POST['title']);
	$description = mysqli_real_escape_string($con, $_POST['description']);
	$image = mysqli_real_escape_string($con, $_POST['image']);
	
	if(empty($title) || empty($description)) {
        $_SESSION['message'] = "Please fill in the title and description.";
        header("Location: addannouncements.php");
        exit(0);
    }
	
	$query = "INSERT INTO announcement (title,description,image) VALUES ('$title','$description','$image')";
		
	$query_run = mysqli_query($con,$query);
	if($query_run)
	{
		$_SESSION['message'] = "Post Created Succesfully";
		header("Location: addannouncements.php");
		exit(0);
		
	}
	else
	{
		$_SESSION['message'] = "Post Not Created";
		header("Location: addannouncements.php");
		exit(0);
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

if(isset($_POST['updateevents']))
{
	$admin_id = mysqli_real_escape_string($con, $_POST['admin_id']);
	
	$title = mysqli_real_escape_string($con, $_POST['title']);
	$description = mysqli_real_escape_string($con, $_POST['description']);
	$image = mysqli_real_escape_string($con, $_POST['image']);
	
	if(empty($title) || empty($description)) {
        $_SESSION['message'] = "Please fill in the title and description.";
        header("Location: editevents.php");
        exit(0);
    }
	$query = "UPDATE event SET title ='$title', description='$description', image='$image' WHERE id='$admin_id'";

	$query_run = mysqli_query($con,$query);
	if($query_run)
	{
		$_SESSION['message'] = "Post Updated Succesfully";
		header("Location: events.php");
		exit(0);
		
	}
	else
	{
		$_SESSION['message'] = "Post Not Updated";
		header("Location: events.php");
		exit(0);
	}
	
	
	
}


if(isset($_POST['registerevents']))
{
	$title = mysqli_real_escape_string($con, $_POST['title']);
	$description = mysqli_real_escape_string($con, $_POST['description']);
	$image = mysqli_real_escape_string($con, $_POST['image']);
	
	if(empty($title) || empty($description)) {
        $_SESSION['message'] = "Please fill in the title and description.";
        header("Location: addevents.php");
        exit(0);
    }
	
	$query = "INSERT INTO event (title,description,image) VALUES ('$title','$description','$image')";
		
	$query_run = mysqli_query($con,$query);
	if($query_run)
	{
		$_SESSION['message'] = "Post Created Succesfully";
		header("Location: addevents.php");
		exit(0);
		
	}
	else
	{
		$_SESSION['message'] = "Post Not Created";
		header("Location: addevents.php");
		exit(0);
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


if(isset($_POST['updateprograms']))
{
	$admin_id = mysqli_real_escape_string($con, $_POST['admin_id']);
	
	$title = mysqli_real_escape_string($con, $_POST['title']);
	$description = mysqli_real_escape_string($con, $_POST['description']);
	$image = mysqli_real_escape_string($con, $_POST['image']);
	
	if(empty($title) || empty($description)) {
        $_SESSION['message'] = "Please fill in the title and description.";
        header("Location: editprograms.php");
        exit(0);
    }
	$query = "UPDATE program SET title ='$title', description='$description', image='$image' WHERE id='$admin_id'";

	$query_run = mysqli_query($con,$query);
	if($query_run)
	{
		$_SESSION['message'] = "Post Updated Succesfully";
		header("Location: programs.php");
		exit(0);
		
	}
	else
	{
		$_SESSION['message'] = "Post Not Updated";
		header("Location: programs.php");
		exit(0);
	}
	
	
	
}


if(isset($_POST['registerprograms']))
{
	$title = mysqli_real_escape_string($con, $_POST['title']);
	$description = mysqli_real_escape_string($con, $_POST['description']);
	$image = mysqli_real_escape_string($con, $_POST['image']);
	
	if(empty($title) || empty($description)) {
        $_SESSION['message'] = "Please fill in the title and description.";
        header("Location: addprograms.php");
        exit(0);
    }
	
	$query = "INSERT INTO program (title,description,image) VALUES ('$title','$description','$image')";
		
	$query_run = mysqli_query($con,$query);
	if($query_run)
	{
		$_SESSION['message'] = "Post Created Succesfully";
		header("Location: addprograms.php");
		exit(0);
		
	}
	else
	{
		$_SESSION['message'] = "Post Not Created";
		header("Location: addprograms.php");
		exit(0);
	}
	
	
	
}


?>