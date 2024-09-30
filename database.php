<?php
    // Database connection details
    $url = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'internship'; // Missing semicolon fixed

    // Create connection
    $conn = mysqli_connect($url, $username, $password, $database);

    // Check connection
    if (!$conn) {
        die('Could not Connect to MySQL: ' . mysqli_error($conn)); // Corrected mysql_error() to mysqli_error()
    }

    // Function to generate custom CID
    function generateCID() {
        $randomNumber = rand(10000, 99999);  // Generate a random 5-digit number
        return 'REG/BS/' . $randomNumber;
    }

    // Generate a unique CID
    $cid = generateCID();

    // Collect form data
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $whatsapp = $_POST['whatsapp'];
    $internshipDomain = $_POST['internshipDomain'];
    $collegeName = $_POST['collegeName'];
    $qualification = $_POST['qualification'];
    $passingYear = $_POST['passingYear'];

    // MySQL Insert query
    $query = "INSERT INTO internship_applications (CID, fullName, email, gender, whatsapp, internshipDomain, collegeName, qualification, passingYear) 
              VALUES ('$cid', '$fullName', '$email', '$gender', '$whatsapp', '$internshipDomain', '$collegeName', '$qualification', '$passingYear')";

    // Execute the query and check for success
    if (mysqli_query($conn, $query)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn); // Show error if query fails
    }

    // Close the database connection
    mysqli_close($conn);


// Process the form data here (insert into a database, etc.)

// After processing, redirect to the confirmation page
header("Location: confirmation.php");
exit();





?>
