<?php
	require 'admin.php';
    include 'header.php';
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap');
       body::before {
  content: "";
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
    url("background.png");
  background-size: cover;
  background-position: center;
  filter: blur(2px); /* Adjust the blur value as needed */
  z-index: -1;
}

body {
  min-height: 100vh;
  margin: 0;
  transition: background-color 0.3s ease;
  color: white;
}

		footer {
			margin-top: auto;
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
			 background-color:black;
        }

        .transparent-navbar.scrolled {
            background-color: rgba(0, 0, 0, 0.7); /* Add a background color when scrolled */
			 background-color: black;
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
            border-color: black;
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
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
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
		
		.page-title-container {
			display: flex;
			justify-content: center; /* Horizontally center */
			align-items: center; /* Vertically center */
		}
		
		.page-title {
			margin: 0; /* Reset margin */
		}
		
		
		.no-record {
			display: flex;
			justify-content: center; /* Horizontally center */
			align-items: center; /* Vertically center */
			height: 100vh; /* Set height to 100% of viewport height */
			
		}
		.footer-area {
  background-color: black;
  color: white;
  padding-top: 20px; /* Reduced top padding */
  padding-bottom: 30px; /* Reduced bottom padding */
}

.footer__widget {
  text-align: center;
}

.logo-area {
  margin-bottom: 5px;
  text-align: center; /* Center align the content inside logo-area */
}

.footer-logo img {
  display: inline-block; /* Make the image an inline-block element */
  margin-left: auto;
  margin-right: auto;
}

.smaller-font {
  font-size: 14px;
  margin: 0 auto; /* Center the paragraph horizontally */
  max-width: 600px; /* Optional: Set a maximum width to control the width of the paragraph */
}

.footer-area a {
  color: #fff;
}

.footer-area a:hover {
  color: #ccc;
}
.announcement-container img {
    max-width: 500px; /* Set your desired width */
    max-height: 500px; /* Set your desired height */
    margin-top: 0px; /* Add margin if needed */
}


		
    </style>
</head>

<body style = "font-family: 'Josefin Sans';">


    
	
	<?php include('error.php');?>
	<div class="content-container" style="margin-bottom:15%;border-radius:10px">
		<h1 id="about" style="text-align:center;color: black;font-weight: 700;padding-top:25px;">ANNOUNCEMENT</h1>
		
		<div class="buttons-container">
			<button class="back-button" "><a href="../../hpuser.php" class="btn btn-primary btn-sm float-end"style="background-color: black;">GO BACK TO THE MAIN PAGE</a></button>
		</div>
		<div id="announcement-section" style="text-align:center;color:gray;">
			<?php
			$query = "SELECT * FROM announcement ORDER BY id DESC";
			$query_run = mysqli_query($con, $query);

			if(mysqli_num_rows($query_run) > 0) {
				foreach ($query_run as $announcement) {
					?>
					<div class="announcement-container" style="align-items: center;">
						<div>
							<h2 style="color: black;font-weight: 700"><?= $announcement['title']; ?></h2>
							<p style="color: black;font-weight: 600"><?= $announcement['description']; ?></p>
						</div>
						<?php
						// Check if the image data exists and is not empty
						if (!empty($announcement['image'])) {
							?>
							<!-- Display the image using base64 encoding -->
							<img src="data:image/jpeg;base64,<?= base64_encode($announcement['image']); ?>" alt="<?= $announcement['title']; ?>">
							<?php
						} else {
							?>
							<!-- Display a placeholder image -->
							<img src="placeholder.png" alt="Image Placeholder">
							<?php
						}
						?>
					</div>
					<?php
				}
			} else {
				echo "<p>No Record Found</p>";
			}
			?>
		</div>
	</div>




    


<?php

include 'footer.php';

?>


    <script>
        let prevScrollPos = window.pageYOffset;
        window.addEventListener("scroll", function () {
            const currentScrollPos = window.pageYOffset;
            const header = document.querySelector("header");

            if (prevScrollPos > currentScrollPos) {
                header.style.top = "0";
            } else {
                header.style.top = `-${header.offsetHeight}px`;
            }

            prevScrollPos = currentScrollPos;
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>
