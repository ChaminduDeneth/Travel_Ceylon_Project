<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link rel="stylesheet" type="text/css" href="header.css">
	<link rel="stylesheet" type="text/css" href="footer.css">
	<link rel="stylesheet" type="text/css" href="contact.css">
	
	<script>
        function validateForm() {
            let name = document.getElementById("name").value;
            let email = document.getElementById("email").value;
            let message = document.getElementById("message").value;
            let nameError = document.getElementById("name-error");
            let emailError = document.getElementById("email-error");
            let messageError = document.getElementById("message-error");
            let isValid = true;

              if (name == "") {
                nameError.innerHTML = "Name is required";
                isValid = false;
            } else {
                nameError.innerHTML = "";
            }

            if (email == "") {
                emailError.innerHTML = "Email is required";
                isValid = false;
            } else if (!isValidEmail(email)) {
                alert( "Invalid email format");
                isValid = false;
            } else {
                emailError.innerHTML = "";
            }

            if (message == "") {
                messageError.innerHTML = "Message is required";
                isValid = false;
            } else {
                messageError.innerHTML = "";
            }

            return isValid;
        }

        function isValidEmail(email) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }
    </script>
</head>

<body>
	<!-- This is Header Section -->
	<!-- Don't change this section -->
	<header style="background-color: rgba(0, 0, 0, 0.8);">
		<img src="travel.png" alt="Corner Image" class="header-image header-image-left">
		<h1 style="font-size:90px;font-family:serif;padding:10px 0;">TRAVEL CEYLON</h1>
	</header>
	

	<!-- This is Navigation Section -->
	<!-- Don't change this section -->
    <div class="section1" style="background-color: rgba(0, 0, 0, 0.8);">
		<a href="Home.html">HOME</a>
		<a href="INTERACTIVEMAP.html">INTERACTIVE MAP</a>
		<a href="destination.html">DESTINATION</a>
		<a href="Accommodation.html">ACCOMMODATION</a>
		<a href="tour.html">TOUR PACKAGES</a>
		<a href="contact.php">CONTACT US</a>
    </div>
	
	
	<!-- This is booking form section -->
	<div class="contactBody">
	<h1>Contact Us</h1>
	
	<form action="contact_register.php" method="POST" onSubmit="return validateForm()">
		<label for="name">Name</label>
		<input type="text" id="name" name="name" placeholder="Your name.." required>
        <span class="error" id="name-error"></span>

		<label for="email">Email</label>
		<input type="text" id="email" name="email" placeholder="Your email.." required>
        <span class="error" id="email-error"></span>

		<label for="message">Message</label>
		<textarea id="message" name="message" placeholder="Write something.." style="height:200px" required></textarea>
        <span class="error" id="message-error"></span>

		<button type="submit">Submit</button>
	</form>
	
	
	</div>
	
		
	<!-- This is Footer Section -->
	<!-- Don't change this section -->
    <div class="section3" style="background-color: rgba(0, 0, 0, 0.8);">
	<table>
	<tr>
		<td>
		<img class="imgCol1" src="travelceylon.png" alt="Your Image">
		<p>Travel Ceylon.....Travel Ceylon.....Travel Ceylon.....Travel Ceylon.....Travel Ceylon.....Travel Ceylon.....Travel Ceylon.....Travel Ceylon.....Travel Ceylon.....</p>
		</td>
		<td>
		<h3>Quick Links</h3><br>
		<div class="centerBox">
        <dl>
			<dd><a href="INTERACTIVEMAP.html">Interactive Map</a></dd>
			<dd><a href="destination.html">Destination</a></dd>
			<dd><a href="Accommodation.html">Accommodation</a></dd>
			<dd><a href="tour.html">Tour Packages</a></dd>
			<dd><a href="contact.php">CONTACT US</a></dd>
        </dl>
		</div>
		</td>
		<td>
		
		<div class="centerBox2">
		<h3 style="margin-left:50px;">Information</h3>
		<table>
			<tr>
				<td style="width:4%;"><div class="icon1"></div></td>
				<td style="text-align:left;font-size:14px;vertical-align:middle;">
				Address of Travel Ceylon</td>
			</tr>
			<tr>
				<td><div class="icon2"></div></td>
				<td style="text-align:left;font-size:14px;vertical-align:middle;">
				Telephone: +94 332220478<br>
				Mail: info@travelceylon.com</td>
			</tr>
			<tr>
				<td><div class="icon3"></div></td>
				<td style="text-align:left;font-size:14px;vertical-align:middle;">
				info@travelceylon.com</td>
			</tr>
		</table>
		</div>
		</td>
    </tr>
	</table>
	</div>
	

	<!-- This is Privacy Section -->
	<!-- Don't change this section -->
    <div class="section4" style="background-color: rgba(0, 0, 0, 0.8);">
		Ⓒ 2023 Travel Ceylon. Designed By Team Group12<br><br>
		Privacy Policy | Terms & Conditions
    </div>
</body>
</html>
