<!DOCTYPE html>
<html>
  <head>
    <title>Booking Successful</title>
	<link rel="stylesheet" type="text/css" href="header.css">
    <style>
      body {
        font-family: Arial, sans-serif;
      }
	  
	  
      .container {
		 
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
      }
      h1 {
        font-size: 2em;
        margin-bottom: 1em;
      }
      p {
        font-size: 1.5em;
        margin-bottom: 1.5em;
      }
      button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        font-size: 1.2em;
        cursor: pointer;
        margin-right: 1em;
      }
      button:hover {
        background-color: #3e8e41;
      }
    </style>
  </head>
  <body>
	<header style="background-color:#4CAF50;height:150px;">
		<img src="travel.png" alt="Corner Image" class="header-image header-image-left">
		<h1 style="font-size:90px;font-family:serif;padding:10px 0 0 0;">TRAVEL CEYLON</h1>
	</header>
    <div class="container">
      <h1>Booking Successful</h1>
      <p>Thank you for booking with us!</p>
      <button onclick="window.location.href='home.html'">Home</button>
      <button onclick="window.location.href='Accommodation.html'">Accommodation</button>
    </div>
  </body>
</html>
