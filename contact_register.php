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
$name = $_POST['name'];
$email = $_POST['email'];
$message=$_POST['message'];

$sql = "INSERT INTO users_data (name, email, message) VALUES (:name, :email,:message)";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':message', $message);

try {
    $stmt->execute();
    
    // Set the success message in a session variable
    $_SESSION['success_message'] = "Data inserted successfully!";
    echo "<script>alert(\"Data inserted successfully....!\");</script>";
    // Redirect to contact.php
    header("Location: contact.php");
    exit;
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
