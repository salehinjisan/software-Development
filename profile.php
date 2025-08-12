<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

include("connect.php");

$user_id = $_SESSION['user_id'];
$stmt = $conn->prepare("SELECT name, father_name, mother_name, address, phone, email FROM users WHERE id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->bind_result($name, $father_name, $mother_name, $address, $phone, $email);
$stmt->fetch();
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html>
<head><title>Your Profile</title></head>
<body style="font-family: Arial, sans-serif; max-width: 600px; margin: auto;">
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION['user_name']); ?></h2>
    <p><strong>Name:</strong> <?php echo htmlspecialchars($name); ?></p>
    <p><strong>Father's Name:</strong> <?php echo htmlspecialchars($father_name); ?></p>
    <p><strong>Mother's Name:</strong> <?php echo htmlspecialchars($mother_name); ?></p>
    <p><strong>Address:</strong> <?php echo htmlspecialchars($address); ?></p>
    <p><strong>Phone:</strong> <?php echo htmlspecialchars($phone); ?></p>
    <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>

    <a href="logout.php">Logout</a>
</body>
</html>
