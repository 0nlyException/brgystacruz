<?php
	require 'admin.php';
    include 'header.php';


?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../program/style.css">

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
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('bg_program.jpg');
    background-size: cover;
    background-position: center;
    filter: blur(5px); /* Adjust the blur value as needed */
    z-index: -1;
}

body {
    min-height: 100vh;
    margin: 0;
    transition: background-color 0.3s ease;
    color: white;

    .transparent-navbar {
    padding: 20px 7%;
}
}
		
		.programs-section {
            position: relative;
            padding-top: 200px; /* Adjust the padding-top value for positioning */
            text-align: center;
            color: white;
        }

        .programs-section h2 {
            font-size: 48px; /* Adjust the font size */
            margin-bottom: 20px; /* Adjust the margin as needed */
        }

        .programs-section p {
            font-size: 18px; /* Adjust the font size */
            margin-bottom: 30px; /* Adjust the margin as needed */
        }

        .programs-section .btn {
            font-size: 20px; /* Adjust the font size */
        }
		
		.programs-section .btn {
            font-size: 20px;
            margin-top: 200px; /* Adjust the margin-top value to move the button */
        }
		
		header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background-color: navy; /* Change the background color to navy */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px 7%;
            
            display: flex;
            align-items: center;
            justify-content: space-between;
            z-index: 1000;
            transition: background-color 0.3s ease;
        }

        header.scrolled {
            background-color: rgba(0, 0, 0, 0.7); /* Adjust the scrolled background color if needed */
        }
		
		 .footer-area {
            background-color: navy;
            color: white;
            margin-top: 280px;
            padding-top: 5px;
        }

        .footer-area .container {
            padding-bottom: 30px;
        }

        .copy-right-area-02 {
            text-align: center;
        }

        .copy-right-area-02 span {
            color: #ffd;
            font-size: 14px;
        }

        .footer-area a {
            color: #fff;
        }

        .footer-area a:hover {
            color: #ccc;
        }
		
		.programs-section h2 {
    font-size: 60px; /* Increase the font size */
    margin-bottom: 20px; /* Adjust the margin as needed */
    font-style: italic; /* Make the font italic */
    text-align: left; /* Align the text to the left */
} 

.programs-section {
    background: url('background-image.jpg') center/cover; /* Replace with your background image */
    color: #fff; /* Text color */
    padding: 100px 0; /* Adjust the padding as needed */
}

.programs-section h2 {
    font-size: 36px;
    font-weight: bold;
    margin-bottom: 20px;
}

.programs-section p {
    font-size: 18px;
    margin-bottom: 30px;
}

.programs-section .btn {
    font-size: 20px;
    background-color: #3498db; /* Button color */
    border: none;
}

.programs-section .btn:hover {
    background-color: #2980b9; /* Button color on hover */
}
.bigger-text {
        font-size: 24px; /* You can adjust the size as needed */
    }
	.image-gallery {
        display: flex;
        justify-content: space-around;
        margin-top: 20px;
    }

    .image-container {
        position: relative;
        overflow: hidden;
        border: 2px solid #333;
        border-radius: 10px;
        margin: 10px;
        width: 500px; /* Adjust the width for larger image containers */
        height: 300px; /* Adjust the height for larger image containers */
    }

    .image-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease-in-out;
    }

    .image-container:hover img {
        transform: scale(1.1);
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


    </style>
</head>

<body>


    <section class="programs-section">
    <div class="container text-center mt-5">
        <h2 style="font-family: 'Josefin Sans';font-size: 50px; font-style: italic">Programs and Initiatives</h2>
        <p style="font-family: 'Josefin Sans';font-size: 20px; font-style: italic">At Barangay Sta. Cruz, we are committed to fostering a vibrant, safe, and progressive community through various programs designed to uplift our residents.</p>

        <!-- Image Gallery -->
        <div class="image-gallery">
            <div class="image-container">
                <img src="1.jpg" alt="Image 1">
            </div>
            <div class="image-container">
                <img src="2.jpg" alt="Image 2">
            </div>
            <div class="image-container">
                <img src="3.jpg" alt="Image 3">
            </div>
        </div>

        <a href="programs.php" class="btn btn-primary btn-lg" style="font-family: 'Josefin Sans';font-size: 1.2em; margin-top: 100px; background-color:black;">Join Programs</a>
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
