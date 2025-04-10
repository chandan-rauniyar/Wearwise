<?php
include '../config/config.php';
 

if (isset($_POST["username"])) {
    $username = trim($_POST["username"]);

    if (empty($username)) {
        echo "empty";  // No input provided
        exit();
    }

    $stmt = $conn->prepare("SELECT id FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo "taken";  // Username already exists
    } else {
        echo "available";  // Username is available
    }

    $stmt->close();
    $conn->close();
}
?>
