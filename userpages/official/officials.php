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

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap');
	@import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap');
	
        body {
    min-height: 100vh;
    background-size: cover;
    background-position: center;
    margin: 0;
    transition: background-color 0.3s ease;
    background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('picture.jpg');
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

<body style = "font-family: 'Josefin Sans';">



<section class="officials-section"> <center>
<div class="container"> 
<h2 class="section-title"> GOVERNMENT OFFICIALS OF BARANGAY SANTA CRUZ </h2>

<div class="official-card">
	<div class="image-container">
		<img src="kit.jpg" alt="Official 3" width="325px" height="325px">
	</div>
	<h3> KIT H. TAGUIANG </h3>
	<p> PUNONG BARANGAY</p>
	<p> kit.taguiang1974@gmail.com </p>
</div>

<br>

<div class="official-card">
    <div class="image-container">
        <img src="anon.jpg" alt="Official 4"width="325" height="325">
    </div>
    <h3> ENRICO S. EVANGELISTA </h3>
    <p> SANGGUNIANG BARANGAY MEMBER </p>
	<p> signex101@yahoo.com </p>
</div>

<div class="official-card">
    <div class="image-container">
		<img src="anon.jpg" alt="Official 4"width="325" height="325">
    </div>
    <h3> JOHN M. DE OCAMPO </h3>
    <p> SANGGUNIANG BARANGAY MEMBER </p>
	<p> jydeocampo@gmail.com </p>
</div>

<div class="official-card">
   <div class="image-container">
		<img src="anon.jpg" alt="Official 4"width="325" height="325">
   </div>
   <h3> MARIA P. ALICANDO </h3>
   <p> SANGGUNIANG BARANGAY MEMBER </p>
   <p> kagawadkatrina@gmail.com </p>
</div>

<div class="official-card">
    <div class="image-container">
   <img src="anon.jpg" alt="Official 4"width="325" height="325">
    </div>
    <h3> ELIJAH SALENGA </h3>
    <p> SANGGUNIANG BARANGAY MEMBER </p>
	<p>  imnoelelijahsalenga@gmail.com </p>
</div>

<div class="official-card">
    <div class="image-container">
        <img src="anon.jpg" alt="Official 4"width="325" height="325">
    </div>
    <h3> FLODELIZA R. AMBROSIO </h3>
    <p> SANGGUNIANG BARANGAY MEMBER </p>
	<p> kapkit.barangaystacruz@gmail.com </p>
</div>

<div class="official-card">
    <div class="image-container">
       <img src="anon.jpg" alt="Official 4"width="325" height="325">
    </div>
    <h3> LIZA FLOR G. CASTOR </h3>
    <p> SANGGUNIANG BARANGAY MEMBER </p>
	<p> lizaflorcastor@gmail.com </p>
</div>

<div class="official-card">
    <div class="image-container">
        <img src="anon.jpg" alt="Official 4"width="325" height="325">
    </div>
    <h3> NILO D. BASADA </h3>
    <p> SANGGUNIANG BARANGAY MEMBER </p>
	<p> nilojannkutot.basada@gmail.com </p>
</div>

<div class="official-card">
    <div class="image-container">
      <img src="anon.jpg" alt="Official 4"width="325" height="325">
    </div>
    <h3> JEROME G. PANGILINAN </h3>
    <p> SK CHAIRPERSON </p>
	<p> jerometristanpangilinan@gmail.com </p>
</div>

<div class="official-card">
    <div class="image-container">
        <img src="anon.jpg" alt="Official 4"width="325" height="325">
    </div>
    <h3> BAYANI G. OLEGARIO </h3>
	<p> BARANGAY TREASURER </p>
	<p> kapkit.barangaystacruz@gmail.com </p>
</div>

</section class="officials-section">

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
