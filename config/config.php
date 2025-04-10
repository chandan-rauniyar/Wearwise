<?php 

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "wearwise";

$conn = null;

try {
    $conn = new mysqli($host, $user, $pass, $dbname);
    
    if ($conn->connect_error) {
        throw new Exception("Database connection failed: " . $conn->connect_error);
    }
} catch (Exception $e) {
    error_log($e->getMessage()); // Log the error instead of displaying it
    $conn = null; // Ensure the project continues to run
}

function getUserName($userId) {
    global $conn;
    if ($conn instanceof mysqli) {
        $stmt = $conn->prepare("SELECT name FROM users WHERE id = ?");
        if ($stmt) {
            $stmt->bind_param("i", $userId);
            $stmt->execute();
            $result = $stmt->get_result();
            $user = $result->fetch_assoc();
            $stmt->close();
            return $user ? $user['name'] : null;
        }
    }
    return null; // Return null if DB is not connected or user not found
}



?>


