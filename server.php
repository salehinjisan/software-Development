<?php
include("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $father_name = $_POST['father_name'] ?? '';
    $mother_name = $_POST['mother_name'] ?? '';
    $address = $_POST['address'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if (!$name || !$father_name || !$mother_name || !$address || !$phone || !$email || !$password) {
        die("All fields are required.");
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (name, father_name, mother_name, address, phone, email, password) VALUES (?, ?, ?, ?, ?, ?, ?)");

    if ($stmt) {
        $stmt->bind_param("sssssss", $name, $father_name, $mother_name, $address, $phone, $email, $hashed_password);

        if ($stmt->execute()) {
            echo "<h2 style='color:green; text-align:center;'>Registration Successful!</h2>";
            echo "<p style='text-align:center;'><a href='login.php'>Click here to login</a></p>";
        } else {
            echo "Execute failed: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Prepare failed: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid request.";
}
?>