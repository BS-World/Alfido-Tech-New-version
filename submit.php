<?php
// Database connection details
$url = 'localhost';
$username = 'root';
$password = '';
$database = 'internship'; // Database name

// Create connection
$conn = new mysqli($url, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO applications (fullName, email, whatsapp, internshipDomain, cidno, linkedIn, gtask1, ltask1, gtask2, ltask2, gtask3, ltask3, paymentStatus, paymentScreenshot) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssssssss", $fullName, $email, $whatsapp, $internshipDomain, $cidno, $linkedIn, $gtask1, $ltask1, $gtask2, $ltask2, $gtask3, $ltask3, $paymentStatus, $paymentScreenshot);

    // Set parameters from the form input
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $whatsapp = $_POST['whatsapp'];
    $internshipDomain = $_POST['internshipDomain'];
    $cidno = $_POST['cidno'];
    $linkedIn = $_POST['linkedIn'];
    $gtask1 = $_POST['gtask1'];
    $ltask1 = $_POST['ltask1'];
    $gtask2 = $_POST['gtask2'];
    $ltask2 = $_POST['ltask2'];
    $gtask3 = $_POST['gtask3'];
    $ltask3 = $_POST['ltask3'];
    $paymentStatus = $_POST['posejasen'];
    
    // Handle file upload
    if ($_FILES['file']['error'] === UPLOAD_ERR_OK) {
        $paymentScreenshot = $_FILES['file']['name'];
        
        // Move the uploaded file to the uploads directory
        if (move_uploaded_file($_FILES['file']['tmp_name'], "uploads/" . $paymentScreenshot)) {
            echo "File uploaded successfully.<br>";
        } else {
            echo "Failed to move the uploaded file.<br>";
        }
    } else {
        echo "File upload error: " . $_FILES['file']['error'] . "<br>";
        $paymentScreenshot = null; // Set to null if upload fails
    }

    // Execute the statement
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }
   
    // Close the statement and connection
    $stmt->close();
    $conn->close();
}

header("Location: confirmation.html");
exit();
?>
