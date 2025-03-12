<?php
    session_start();
    require 'dbcon.php';
    include 'header.php';

    // Check if the user is logged in as admin
    if (!isset($_SESSION['user_type']) || $_SESSION['user_type'] !== 'admin') {
        // Redirect to the login page or handle unauthorized access
        header("Location: ../../Login Page.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap');
        body {
            min-height: 100vh;
            background-image: url('background.png'); 
            background-size: cover;
            background-position: center;
            margin: 0;
            transition: background-color 0.3s ease;
        }

        .transparent-navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background-color: rgba(0, 0, 0, 0); /* Set alpha value to 0 for full transparency */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px 7%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            z-index: 1000;
            transition: background-color 0.3s ease;
        }

        .transparent-navbar.scrolled {
            background-color: rgba(0, 0, 0, 0.7); /* Add a background color when scrolled */
        }

        .transparent-navbar .navbar {
            height: 40px;
        }

        .transparent-navbar .navbar ul {
            list-style: none;
            display: flex;
        }

        .transparent-navbar .navbar ul li {
            margin-right: 20px;
        }

        .transparent-navbar .navbar ul li a {
            font-size: 20px;
            color: white; /* Set text color to white */
            text-decoration: none;
            border-bottom: 1px solid transparent;
            padding-bottom: 10px;
            transition: border-color 0.3s ease, color 0.3s ease;
        }

        .transparent-navbar .navbar ul li a:hover {
            color: #ccc; /* Adjust the hover color */
            border-color: blue;
        }

        .content-container {
            height: 1600px;
            width: 800px;
            margin: 20px auto;
            background-color: #f0f0f0;
            position: relative;
            top: 160px;
        }

        .announcement-container {
            max-width: 760px;
            margin: 0 auto;
            padding: 15px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 10px;
            text-align: center;
        }

        .announcement-container img {
            max-width: 80%;
            height: auto;
            margin-top: 20px;
        }

        .buttons-container {
            text-align: center;
            margin-top: 20px;
            display: flex;
            justify-content: center;
        }

        .add-button,
        .delete-button {
            margin: 5px;
            cursor: pointer;
        }
		.table-container {
			margin: 210px auto; /* Adjust the top margin as needed */
			width: 80%; /* Adjust the width as needed */
		}

		table {
			width: 100%;
			border-collapse: collapse;
		}

		th, td {
			border: 1px solid #dddddd;
			text-align: left;
			padding: 8px;
		}

		th {
			background-color: #f2f2f2;
		}
		
		tr:nth-child(odd) {
			background-color: rgba(242, 242, 242, 0.5); /* Adjust the alpha (transparency) value as needed */
		}		
		
		tr:nth-child(even) {
			background-color: #f2f2f2;
		}
	</style>
</head>

<body>

<body style = "font-family: 'Josefin Sans';">
    <div class="table-container" style = "color:white;">
        <h1>Program Participants</h1>
        <table>
            <thead>
                <tr>
                    <th>User Name</th>
                    <th>Program Title</th>
                    <th>Phone Number</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // Fetch participant information from the database
                    $query = "SELECT users.full_name, program.title, volunteer.phone_number
                              FROM volunteer
                              INNER JOIN users ON volunteer.user_id = users.id
                              INNER JOIN program ON volunteer.program_id = program.id";
                    $result = mysqli_query($con, $query);

                    if ($result && mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $row['full_name'] . "</td>";
                            echo "<td>" . $row['title'] . "</td>";
                            echo "<td>" . $row['phone_number'] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='3'>No participants found.</td></tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
