<?php
// Set the dynamic title for the page
$pageTitle = 'Admin Page | Certificate Verification';

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

// Fetch all records from the applications table
$sql = "SELECT * FROM applications";
$result = $conn->query($sql);

// Start output buffering to capture content for the master page
ob_start();
?>

<h2>Submitted Applications</h2>
<table class="table table-bordered mt-3">
    <thead class="thead-light">
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>WhatsApp Number</th>
            <th>Internship Domain</th>
            <th>C.ID Number</th>
            <th>LinkedIn Profile</th>
            <th>Task 1: GitHub</th>
            <th>Task 1: LinkedIn</th>
            <th>Task 2: GitHub</th>
            <th>Task 2: LinkedIn</th>
            <th>Task 3: GitHub</th>
            <th>Task 3: LinkedIn</th>
            <th>Payment Status</th>
            <th>Payment Screenshot</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row["id"]) . "</td>"; // ID column
                echo "<td>" . htmlspecialchars($row["fullName"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["email"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["whatsapp"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["internshipDomain"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["cidno"]) . "</td>";
                echo "<td><a href='" . htmlspecialchars($row["linkedIn"]) . "' target='_blank'>View</a></td>";
                echo "<td><a href='" . htmlspecialchars($row["gtask1"]) . "' target='_blank'>View</a></td>";
                echo "<td><a href='" . htmlspecialchars($row["ltask1"]) . "' target='_blank'>View</a></td>";
                echo "<td><a href='" . htmlspecialchars($row["gtask2"]) . "' target='_blank'>View</a></td>";
                echo "<td><a href='" . htmlspecialchars($row["ltask2"]) . "' target='_blank'>View</a></td>";
                echo "<td><a href='" . htmlspecialchars($row["gtask3"]) . "' target='_blank'>View</a></td>";
                echo "<td><a href='" . htmlspecialchars($row["ltask3"]) . "' target='_blank'>View</a></td>";
                echo "<td>" . htmlspecialchars($row["paymentStatus"]) . "</td>";
                echo "<td><a href='uploads/" . htmlspecialchars($row["paymentScreenshot"]) . "' target='_blank'>View</a></td>";
                echo "<td>" . htmlspecialchars($row["created_at"]) . "</td>";
                echo "</tr>";
                
            }
        } else {
            echo "<tr><td colspan='15'>No records found</td></tr>";
        }
        ?>
    </tbody>
</table>

<?php
// Get the content from the buffer
$content = ob_get_clean();

// Include the master page to render the complete layout
include 'master.php';

// Close the database connection
$conn->close();
?>
