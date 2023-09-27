<?php
// Establish a database connection
$dsn = 'mysql:host=localhost;dbname=travelceylon';
$username = 'root';
$password = '';

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

// Insert data into the database
		$hotelNumber = $_POST["hotel-number"];
		$hotelName = $_POST["hotel-name"];
		$roomType = $_POST["room-type"];
		$airConditioning = $_POST["air-conditioning"];
		$price = $_POST["price"];
		$customerName = $_POST["customer-name"];
		$idNumber = $_POST["id-number"];
		$checkInDate = $_POST["check-in-date"];
		$checkOutDate = $_POST["check-out-date"];
		$paymentMethod = $_POST["payment-method"];
		$amount = $_POST["total-amount"];

	$sql = "INSERT INTO booking_data (PersonName, PersonID, HotelNumber, HotelName, RoomType, AirCondition, Price, CheckIn, CheckOut, Amount, PaymentMethod) 
	VALUES (:person_name, :person_id, :hotel_number, :hotel_name, :room_type, :air_condition, :price, :check_in, :check_out, :amount, :payment_method)";
	$stmt = $pdo->prepare($sql);
	$stmt->bindParam(':person_name', $customerName);
	$stmt->bindParam(':person_id', $idNumber);
	$stmt->bindParam(':hotel_number', $hotelNumber);
	$stmt->bindParam(':hotel_name', $hotelName);
	$stmt->bindParam(':room_type', $roomType);
	$stmt->bindParam(':air_condition', $airConditioning);
	$stmt->bindParam(':price', $price);
	$stmt->bindParam(':check_in', $checkInDate);
	$stmt->bindParam(':check_out', $checkOutDate);
	$stmt->bindParam(':amount', $amount);
	$stmt->bindParam(':payment_method', $paymentMethod);

try {
    $stmt->execute();
    echo "Data inserted successfully!";
	// Redirect to contact.php
    header("Location: bookingSuccess.php");
    exit;
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}	
?>
