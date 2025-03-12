<?php
	require 'admin.php';
    include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap');
        body {
            min-height: 100vh;
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
			 background-color: navy;
        }

        .transparent-navbar.scrolled {
            background-color: rgba(0, 0, 0, 0.7); /* Add a background color when scrolled */
			 background-color: navy;
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
		
		title {
			display: flex;
			flex-direction: row; /* Default direction is row */
		}

		description {
			flex: 1; /* Grow to fill available space */
			padding-right: 20px; /* Adjust as needed */
		}

		image {
			flex: 1; /* Grow to fill available space */
			text-align: right;
		}
		
		/* Styling for the pop-up */
		.popup {
			position: fixed;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			background-color: #ffffff;
			border-radius: 30px;
			box-shadow: 0 0 20px rgba(0, 0, 0, 0.1), 0 0 0 1px grey;
			padding: 40px 40px;
			width: 400px;
			height: 400px;
			box-sizing: border-box;
			color:#1A5276;
			z-index: 9999;
			display: none;
		}

		/* Styling for the close button */
		.close {
			position: absolute;
			top: 10px;
			right: 10px;
			color: grey;
			cursor: pointer;
		}
		.footer-area {
  background-color: navy;
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
.container-center {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh; /* Adjust the height based on your layout */
}

.container-box {
    width: 200px !important; /* Fixed width for the containers */
    padding: 20px;
    text-align: center;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin: 10px;
    display: inline-block;
}

.logo {
    max-width: 20%;
    height: auto;
}

.phone-number {
    margin-top: 10px;
    font-weight: bold;
}
h4 {
    font-size: 11px; /* Adjust the font size as needed */
}
.container-center {
    position: relative;
    top: -350px; /* Adjust the value to move it up or down */
}
.new-container-center {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 30px; /* Adjust margin as needed */
}

.new-container-box {
    width: 200px; /* Adjust width as needed */
    padding: 20px;
    text-align: center;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin: 10px;
    display: inline-block;
}

.new-container-box .logo {
    max-width: 20%;
    height: auto;
}

.new-container-box .phone-number {
    margin-top: 10px;
    font-weight: bold;
}

h4 {
    font-size: 14px; /* Adjust the font size as needed */
}
.container-box {
        background-color: #f5f5f5; /* Slight gray background color */
        padding: 20px; /* Optional: Add padding for better aesthetics */
    }

    .new-container-box {
        background-color: #f5f5f5; /* Slight gray background color */
        padding: 20px; /* Optional: Add padding for better aesthetics */
    }
	.tab-content img {
        width: 500px; /* Adjust the width as per your design */
        height: 500px; /* Adjust the height as per your design */
        display: block; /* Remove any extra spacing around the image */
        margin: 0 auto; /* Center the image within its container */
    }

    /* Move content to the right */
    .tab-content td.move-right {
        margin-left: 600px;
    }
	
    .overlay-text {
        position: absolute; /* Absolutely position the text */
        top: 50%; /* Position in the vertical center */
        left: 25%; /* Position in the horizontal center */
        transform: translate(-50%, -50%); /* Center the text precisely */
        color: white; /* Set text color to white for visibility */
        text-align: left; /* Center the text horizontally */
        font-size: 40px; /* Adjust the font size */
        font-weight: 500; /* Make the text bold */
        z-index: 1; /* Ensure the text is above the image */
    }
	
	
	




    </style>
	<script>
		// Function to toggle the visibility of the pop-up
		function togglePopup() {
			var popup = document.getElementById("popup");
			if (popup.style.display === "none") {
				popup.style.display = "block";
			} else {
				popup.style.display = "none";
			}
		}
	</script>
</head>
<body style="font-family:'Josefin Sans';">


<section class="adjustable-picture">
<img src="background.png" alt="bg" id="bg" style="max-width: 100%; height:  900px;">
<div class="overlay-text">
        <h1 style = "font-weight: 700;">BARANGAY STA. CRUZ</h1>
        <div style="display: flex; align-items: left;">
        <i class="fa fa-map" style = "margin-right: 10px; font-size:25px; padding-top: 10px;" > </i>
        <p style = "font-size: 30px ;font-weight: 500; font-style: italic">Zapote Street, cor. Davila Street</p>
        </div>
        <div style="display: flex; align-items: left;">
        <i class="fa fa-phone" style = "margin-right: 10px; font-size:30px; padding-top: 5px;" > </i>
        <p style="font-size: 25px; font-weight: 500; font-style: italic; margin: 0;">(02)8804-1343/(02)8896-8775</p>
    </div>
    </div>


    <div class="d-block p-1 text-white" style="background-color:rgb(0, 0, 0);">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h1 class="mb-0" id="population" style = "padding-top: 10PX;">7,207</h1>
                    <p class="text-center" id="population-text"> Barangay Population</p>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="team-portfolio pt-40 pb-40 text-left">
    <div class="container">
    
        <div class="container">
        <h1 class="left_line pl-55" style="font-style:normal;font-size: 40px; font-weight:700 ;padding-top: 25px;">Punong Barangay</h1>
        <div class="row align-items-center">
           
            <div class="col-xl-5 col-lg-5 col-md-5">
                <div class="mayor__img mb-30">
                    <img class="img-fluid"  src="kit.jpg" alt="kit" style="width: 75%;padding-top: 5%;">
                </div>
            </div>
            
            <div class="col-xl-6 col-lg-7 col-md-7">
            
                <div class="portfolis__wrapper">
                    <div class="portfolis pos-rel pl-40">
                    
                        <div class="section-title mb-35">
                            
                            <h2>Hon. Kit H. Taguiang</h2>
                            <span>Hon. Kit H. Taguiang serves as the Chairman (Punong Barangay) of Barangay Sta. Cruz in Makati City.</span>
                        </div>
                        <ul class="portfolis__contact">
                            <li><a href="#"><i class="fa fa-envelope"></i> kit.taguiang1974@gmail.com</a></li>
                            <li><a href="#"><i class="fa fa-phone"></i> (02)8896-8775</a></li>
                            <li><a href="#"><i class="fa fa-map-pin"></i> Sta. Cruz, Makati City</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>


<section class="homepage-content" style="background-color: #f0f0f0; padding: 20px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="container" style="background-color: white; border: 1px solid #ccc; padding: 15px; border-radius: 5px;">
                <h2 class="text-center" style="text-align: center;  margin-top: 20px;margin-bottom: 20px; color: #333; font-weight:700" >UPDATES</h2>

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist" style="list-style-type: none; padding: 0; margin: 0; display: flex; justify-content: flex-start;">
                        <li class="nav-item" style="margin-right: 5px;">
                            <a class="nav-link active" data-toggle="tab" href="#announcement" style="text-decoration: none; padding: 8px 12px; background-color: #e9ecef; color: #495057; border: 1px solid #ced4da; border-radius: 3px;">Announcement</a>
                        </li>
                        <li class="nav-item" style="margin-right: 5px;">
                            <a class="nav-link" data-toggle="tab" href="#events" style="text-decoration: none; padding: 8px 12px; background-color: #e9ecef; color: #495057; border: 1px solid #ced4da; border-radius: 3px;">Events</a>
                        </li>
                        <li class="nav-item" style="margin-right: 5px;">
                            <a class="nav-link" data-toggle="tab" href="#programs" style="text-decoration: none; padding: 8px 12px; background-color: #e9ecef; color: #495057; border: 1px solid #ced4da; border-radius: 3px;">Programs</a>
                        </li>
                        <li class="nav-item" style="margin-right: 5px;">
                            <a class="nav-link" data-toggle="tab" href="#feedback" style="text-decoration: none; padding: 8px 12px; background-color: #e9ecef; color: #495057; border: 1px solid #ced4da; border-radius: 3px;">Feedback</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content" style="padding: 15px; border: 1px solid #ccc; border-radius: 5px; margin-top: 10px;">
                        <!-- Announcement Tab -->
                        <div id="announcement" class="container tab-pane active" style="padding: 10px;">
    <?php
    $query = "SELECT * FROM announcement ORDER BY id DESC";
    $query_run = mysqli_query($con, $query);

    if(mysqli_num_rows($query_run) > 0) {
        foreach ($query_run as $announcement) {
            ?>
            <table style="width: 100%; margin-bottom: 15px;">
                <tr>
                    <td class="move-right" style="padding: 8px; border-bottom: 1px solid #eee;"><?= $announcement['title']; ?></td>
                </tr>
                <tr>
                    <td class="move-right" style="padding: 8px; border-bottom: 1px solid #eee;"><?= $announcement['description']; ?></td>
                </tr>
                <tr>
                    <td class="move-right" style="padding: 8px; border-bottom: 1px solid #eee;">
                        <?php
                        // Check if the image exists and is valid
                        if (!empty($announcement['image'])) {
                            echo '<img src="data:image/jpeg;base64,' . base64_encode($announcement['image']) . '" alt="' . $announcement['title'] . '" style="max-width: 25%; height: auto;">';
                        } else {
                            // Display placeholder image if no image is available
                            echo '<img src="placeholder.png" alt="Placeholder Image" style="max-width: 25%; height: auto;">';
                        }
                        ?>
                    </td>
                </tr>
            </table>
            <?php
        }
    } else {
        echo "<p style='text-align: center; color: #777;'>No Record Found</p>";
    }
    ?>
</div>

                        <!-- Events Tab -->
                        <div id="events" class="container tab-pane fade" style="padding: 10px;">
                            <?php
                            $query = "SELECT * FROM event ORDER BY id DESC";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0) {
                                foreach ($query_run as $event) {
                                    ?>
                                    <table style="width: 100%; margin-bottom: 15px;">
                                        <tr>
                                            <td class="move-right" style="padding: 8px; border-bottom: 1px solid #eee;"><?= $event['title']; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="move-right" style="padding: 8px; border-bottom: 1px solid #eee;"><?= $event['description']; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="move-right" style="padding: 8px; border-bottom: 1px solid #eee;"><img src="data:image/jpeg;base64,<?= base64_encode($event['image']); ?>"
                                                                                         alt="<?= $event['title']; ?>" style="max-width: 25%; height: auto;"></td>
                                        </tr>
                                    </table>
                                    <?php
                                }
                            } else {
                                echo "<p style='text-align: center; color: #777;'>No Record Found</p>";
                            }
                            ?>
                        </div>

                        <!-- Programs Tab -->
                        <div id="programs" class="container tab-pane fade" style="padding: 10px;">
                            <?php
                            $query = "SELECT * FROM program ORDER BY id DESC";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0) {
                                foreach ($query_run as $program) {
                                    ?>
                                    <table style="width: 100%; margin-bottom: 15px;">
                                        <tr>
                                            <td class="move-right" style="padding: 8px; border-bottom: 1px solid #eee;"><?= $program['title']; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="move-right" style="padding: 8px; border-bottom: 1px solid #eee;"><?= $program['description']; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="move-right" style="padding: 8px; border-bottom: 1px solid #eee;"><img src="data:image/jpeg;base64,<?= base64_encode($program['image']); ?>"
                                                                                         alt="<?= $program['title']; ?>" style="max-width: 25%; height: auto;"></td>
                                        </tr>
                                    </table>
                                    <?php
                                }
                            } else {
                                echo "<p style='text-align: center; color: #777;'>No Record Found</p>";
                            }
                            ?>
                        </div>

                        <!-- Feedback Tab -->
                        <div id="feedback" class="container tab-pane fade" style="padding: 10px;">
                            <?php
                            $query = "SELECT * FROM feedback ORDER BY id DESC";
                            $query_run = mysqli_query($con, $query);


                            if(mysqli_num_rows($query_run) > 0) {
                                foreach ($query_run as $admin) {
                                    ?>
                                    <table style="width: 100%; margin-bottom: 15px;">
                                        <tr>
                                            <td class="move-right" style="padding: 8px; border-bottom: 1px solid #eee;"><?= $admin['title']; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="move-right" style="padding: 8px; border-bottom: 1px solid #eee;"><?= $admin['description']; ?></td>
                                        </tr>
                                    </table>
                                    <?php
                                }
                            } else {
                                echo "<p style='text-align: center; color: #777;'>No Record Found</p>";
                            }
                            ?>

                            <!-- Button to trigger the pop-up -->
                            <br><br>

                            <?php
                            if (isset($_SESSION['user_type'])) {
                                // User is logged in, show the button to create feedback
                                echo '<button onclick="togglePopup()" style="background-color:rgb(0, 0, 0); color: white; padding: 8px 12px; border: none; border-radius: 4px; cursor: pointer;">Create Feedback</button>';
                            } else {
                                // User is not logged in, show a message to prompt login/register
                                echo '<p style="margin-top: 10px;">Please <a href="Login Page.php" style="color:rgb(96, 62, 183); text-decoration: none;">login</a> or <a href="Register Form.php" style="color:rgb(96, 62, 183); text-decoration: none;">register</a> to post feedback.</p>';
                            }
                            ?>

                            <!-- Pop-up content -->
                            <div id="popup" class="popup" style="display: none; position: fixed; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 1000;border-radius: 0px;">
                                <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: white; padding: 20px; border-radius: 0px; width: 80%; max-width: 600px;">
                                    <span class="close" onclick="togglePopup()" style="position: absolute; top: 10px; right: 10px; font-size: 20px; cursor: pointer;">&times;</span>

                                    <div class="container">
                                        <?php include('error.php');?>
                                        <table style="width: 100%;">
                                            <tr>
                                                <td>
                                                    <h4 style="text-align: center; margin-bottom: 20px;">Create Post</h4>
                                                </td>
                                            </tr>
                                        </table>
                                        <div>
                                            <form action="admin.php" method="POST">
                                                <table style="width: 100%;">
                                                    <tr>
                                                        <td>
                                                            <label style="display: block; margin-bottom: 5px;">Title</label>
                                                            <input type="text" name="title" class="form-control" style="width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label style="display: block; margin-top: 10px; margin-bottom: 5px;">Description</label>
                                                            <textarea name="description" class="form-control" style="width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box; height: 100px;"></textarea>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding-top: 15px;">
                                                            <button type="submit" name="registerfeedback" class="btn btn-primary" style="background-color:rgb(0, 0, 0); color: white; padding: 10px 15px; border: none; border-radius: 5px; cursor: pointer; width: 100%;">Post</button>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


 <section style="background-color: white; margin-top: 75px;margin-bottom: 75px;">

<div class="container-xs p-3" style="font-style: italic;">
    <div class="section aos-init" data-aos="fade-right" data-aos-delay="400">
        <div class="container text-center">
            <h1 style="color:black; font-weight: 900;margin-bottom: 75px;">Introduction</h1>
            <h2 style="font-style:normal; color: gray;font-size: 20px;text-align: justify;">
                Barangay Sta. Cruz was predominantly classified as a residential area until the year 2000 when small and medium sized 
                businesses began to be located in the barangay. In 2005, construction boom started for medium rise condominiums and apartelles.
                 Barangay Sta. Cruz is within the jurisdiction of the First District of Makati and inclusive in the Cluster 3 or the Northwest 
                 Cluster.  The Barangay is a 10-minute drive from the Makati Central Business District, prominent landmarks such as Makati 
                 Medical Center, Makati Central Fire Station and the Makati Central Police Station are also accessible by foot. Strategically 
                 located businesses, more particularly at the corner of Pasong Tamo and Vito Cruz Streets, are supermarkets, food chains and 
                 alike.  Found in the community are various religious and educational institutions, notably the soon to rise home of Mapua 
                 Institute of Technology, one of the leading universities in the country.Barangay Sta. Cruz has no wet market however its 
                 proximity to close Tejeros and Olympia where wet markets are also accessible by foot and public conveniences such as jeepneys 
                 or tricycles. Barangay Sta. Cruz has a total land area of 0.473 sq. kms (47.3 has) divided into three (3) zones. 
                 Based on the 2015 Census of Population, Barangay Sta. Cruz has a total population of 7,207 or equivalent to 152 persons per 
                 hectare.  Projected population by 2020 is estimated to grow in numbers by 7,899, increasing the ratio to 167 persons per 
                 hectare.
            </h2>
        </div>

    </div>


</div>

</section>








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