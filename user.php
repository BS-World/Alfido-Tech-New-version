<?php
// Database connection details
$host = 'localhost'; // Change as per your DB settings
$user = 'root';      // Database username
$password = '';      // Database password
$dbname = 'internship'; // Database name

// Create a connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create users table if it doesn't exist
$createTableSQL = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
)";

if ($conn->query($createTableSQL) === TRUE) {
    echo "Table users created successfully or already exists.<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

// Hash the password using password_hash()
$hashedPassword = password_hash('Bhanu@19', PASSWORD_DEFAULT);

// Insert a new user into the users table
$sql = "INSERT INTO users (username, password) VALUES ('Bhanu', '$hashedPassword')";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "New user created successfully<br>";
} else {
    // Check if the error is due to a duplicate entry
    if ($conn->errno === 1062) {
        echo "User 'Bhanu' already exists.<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
