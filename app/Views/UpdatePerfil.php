<?php
// Retrieve the POST data
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Encrypt the password

session_start();
$user_id = $_SESSION['user_id'];

// Prepare the SQL query to update the user's data
$sql = "UPDATE users SET nombre = ?, email = ?, password = ? WHERE id = ?";

// Prepare the statement to avoid SQL injection
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssi", $nombre, $email, $password, $user_id);

// Execute the query
if ($stmt->execute()) {
    echo "Profile updated successfully!";
} else {
    echo "Error updating profile: " . $stmt->error;
}

?>