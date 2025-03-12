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


<hr>
<hr>
<hr>
<hr>
<hr>
<hr>
<hr>

<br>

<div class="container">
    <div class="row align-items-center">
        <ul>
            <h1> History of Barangay Olympia Makati </h1>
            <hr>
            <ul>
            <p style="text-align: justify;"> Barangay Sta. Cruz was formerly a part of Brgy. Olympia and was known as Sitio Paltok (a higher place). This place was once a vast rice field that most of its early inhabitants were farmers. Although Paltok was a sitio of Olympia, it has its own “Tinyente del Barrio” in the person of Mr. Bayani Robles. </p>
			<p style="text-align: justify;"> On June 20, 1959, Republic Act 2370 otherwise known as the Barrio Charter Act was passed by Congress. The following year, Barangay Olympia held its first barrio election and Mr. Bayani Robles was elected Barrio Lieutenant and Mr. Marcelo Angeles as Vice Barrio Lieutenant. </p>
			<p style="text-align: justify;"> On June 22, 1963, Republic Act 3590 or the Revised Barrio Charter was approved. Section 7 of RA 3590 organized a barrio council composed of one (1) Barrio Captain and six (6) Barrio Councilmen.  Article II Section 8 also provided that the election of the barrio council shall be on the second Sunday of January immediately following the regular elections for municipal and provincial officials. </p>
			<p style="text-align: justify;"> Banking on Article II Section 3 of the Revised Barrio Charter, then incumbent Vice Barrio Lieutenant Marcelo Angeles, together with some leaders of Sitio Sta. Cruz, appealed to then Mayor Maximo Estrella to make Sitio Sta. Cruz an independent barrio. The appeal was recognized and approved in 1964 by the Municipal Council and finally, by the Provincial Board of Rizal.  </p>
			<p style="text-align: justify;"> Mr. Marcelo Angeles became the first elected Barrio Captain from 1964 to 1972. He was succeeded by Morita Estrella from 1972 to 1976.  Amado Aluquin followed him until his son, Arthur, took over in 1982.  Mr. Severino O. Victorino took over the reign as Barangay Captain in 1986 until 2002 which made him the longest serving Barangay Captain of Sta. Cruz. </p>
			<p style="text-align: justify;"> Due to health concerns and old age, Barangay Captain Victorino opted not to run in the 2002 Barangay and SK Elections.  It was won by Victor P. Del Prado who served for two (2) terms until 2010. In the following barangay elections, his opponent First Kagawad Virginia V. Salenga won by a slim margin of 68 votes.  An election protest was filed by Mr. Del Prado but Ms. Salenga won in the Municipal Court. However, the decision was reversed by the COMELEC.  Thus, Del Prado was proclaimed winner of the 2010 Barangay and SK Elections and affirmed by the Supreme Court in 2013.  In the election of the same year, Ms. Salenga emerged victorious winning against Enrico Evangelista. She assumed office on December 1, 2013 and replicated her win in the October 2018 Barangay and SK Elections. </p>
			<p style="text-align: justify;"> </p>
            </ul>
        </ul>
    </div>
</div>

<br>

<div class="container">
    <div class="row align-items-center">
        <ul>
            <h1> Location and Physical Features  </h1>
            <hr>
            <ul>
			<p> <b> Geographic Location </b> </p>
			<p> Longitude	: 	121 0' 59"  </p>
			<p> Latitude	: 	14° 34' 4"  </p>
			
			<br>
			
			<p> Land Area 	: 	0.473 sq. kms (47.3 has) </p>
			
			<br>
			
			<p> <b> Barangay Boundaries </b> </p>
			<p> Northeast 	: 	Olympia </p>
			<p> Northwest 	: 	Tejeros, La Paz </p>
			<p> South 	: 	Bel-Air </p>
			<p> SouthEast 	: 	Valenzuela </p>
			<p> SouthWest 	: 	San Antonio </p>
			
			<br>
			
			<p> <b> Street Boundaries </b> </p>
			<p> North	: 	Kalayaan Avenue </p>
			<p> South	: 	Metropolita Avenue </p>
			<p> East	: 	SM Jazz </p>
			<p> West	: 	Chino Roces Avenue </p>
			
			<br>
			
			<p> <b> Cluster Boundaries </b> </p>
			<p> South 	: 	Cluster 1 </p>
			<p> West 	: 	Cluster 2 </p>
			
			<br>
			
			<p> <b> Barangay Cluster </b>  	: 	Cluster 3 </p>
			<p> <b> Number of Zones </b>  	: 	3 Zones </p>
			<p> <b> Existing Land Use </b>  :  	Mix residential and commercial Establishments. </p>
			
			<br>
			
			<p> <b> Topography (Elevation and Slope) </b> </p>
			<p> Elevation  	: 	0-10 meters </p>
			<p> Slope  	: 	0-3 degrees </p>
			
			<br>
			
			<p> <b> Hydrology (Waterways) </b> </p>
			<p> Flood Intensity	: 	Moderate </p>
			<p> Earthquake Risk	: 	Moderate to High </p>
			<p> Fire Risk	: 	High </p>
            </ul>
        </ul>
    </div>
</div>

<br>

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