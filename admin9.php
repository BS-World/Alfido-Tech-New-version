<?php

session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // Redirect to login if not authenticated
    exit();
}
// Set the dynamic title for the page
$pageTitle = 'Admin Dashboard | Alfido Tech';

// Start output buffering to capture content for the master page
ob_start();

// Database connection details
$host = 'localhost'; // Change as per your DB settings
$user = 'root';      // Database username
$password = '';      // Database password
$dbname = 'internship';

// Create a connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle search request
$search = '';
if (isset($_POST['search'])) {
    $search = $conn->real_escape_string($_POST['search']);
}

// Fetch Internship applications data with optional search filter
$internship_query = "SELECT * FROM internship_applications";
if (!empty($search)) {
    $internship_query .= " WHERE CID LIKE '%$search%' OR fullName LIKE '%$search%'";
}
$internship_result = $conn->query($internship_query);

// Fetch Submission data with optional search filter
$submission_query = "SELECT * FROM applications";
if (!empty($search)) {
    $submission_query .= " WHERE cidno LIKE '%$search%' OR fullName LIKE '%$search%'";
}
$submission_result = $conn->query($submission_query);

// Fetch Certificate data with optional search filter
$certificate_query = "SELECT * FROM certificate";
if (!empty($search)) {
    $certificate_query .= " WHERE candidate_id LIKE '%$search%' OR fullName LIKE '%$search%'";
}
$certificate_result = $conn->query($certificate_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container text-center">
    <h1 class="mt-5">Admin Dashboard</h1>

    <!-- Logout Link -->
    <div class="mt-3">
        <a href="logout.php" class="btn btn-danger" onclick="return confirm('Are you sure you want to logout?');">Logout</a>
    </div>

    <!-- Search Form -->
    <form method="POST" class="mt-4">
        <div class="input-group mb-3">
            <input type="text" name="search" class="form-control" placeholder="Search by CID or Name" value="<?php echo htmlspecialchars($search); ?>">
            <button class="btn btn-primary" type="submit">Search</button>
        </div>
    </form>

    <!-- Navigation Tabs -->
    <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="internship-tab" data-bs-toggle="tab" href="#internship" role="tab" aria-controls="internship" aria-selected="true">Internship Applications</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="submission-tab" data-bs-toggle="tab" href="#submission" role="tab" aria-controls="submission" aria-selected="false">Submission Data</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="certificate-tab" data-bs-toggle="tab" href="#certificates" role="tab" aria-controls="certificate" aria-selected="false">Certificate Data</a>
        </li>
    </ul>

    <!-- Tab Content -->
    <div class="tab-content" id="myTabContent">

        <!-- Internship Applications Data Tab -->
        <div class="tab-pane fade show active" id="internship" role="tabpanel" aria-labelledby="internship-tab">
            <h2 class="mt-4">Internship Applications Data</h2>
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>CID</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>WhatsApp</th>
                        <th>Internship Domain</th>
                        <th>College Name</th>
                        <th>Qualification</th>
                        <th>Passing Year</th>
                        <th>Submission Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($internship_result->num_rows > 0): ?>
                        <?php while ($row = $internship_result->fetch_assoc()): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($row['CID']); ?></td>
                                <td><?php echo htmlspecialchars($row['fullName']); ?></td>
                                <td><?php echo htmlspecialchars($row['email']); ?></td>
                                <td><?php echo htmlspecialchars($row['gender']); ?></td>
                                <td><?php echo htmlspecialchars($row['whatsapp']); ?></td>
                                <td><?php echo htmlspecialchars($row['internshipDomain']); ?></td>
                                <td><?php echo htmlspecialchars($row['collegeName']); ?></td>
                                <td><?php echo htmlspecialchars($row['qualification']); ?></td>
                                <td><?php echo htmlspecialchars($row['passingYear']); ?></td>
                                <td><?php echo htmlspecialchars($row['submission_date']); ?></td>
                            </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="10">No data found</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <!-- Submission Data Tab -->
        <div class="tab-pane fade" id="submission" role="tabpanel" aria-labelledby="submission-tab">
            <h2 class="mt-4">Submission Data</h2>
            <table class="table table-bordered mt-3">
                <thead>
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
                    <?php if ($submission_result->num_rows > 0): ?>
                        <?php while ($row = $submission_result->fetch_assoc()): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($row["id"]); ?></td>
                                <td><?php echo htmlspecialchars($row["fullName"]); ?></td>
                                <td><?php echo htmlspecialchars($row["email"]); ?></td>
                                <td><?php echo htmlspecialchars($row["whatsapp"]); ?></td>
                                <td><?php echo htmlspecialchars($row["internshipDomain"]); ?></td>
                                <td><?php echo htmlspecialchars($row["cidno"]); ?></td>
                                <td><a href="<?php echo htmlspecialchars($row["linkedIn"]); ?>" target="_blank">View</a></td>
                                <td><a href="<?php echo htmlspecialchars($row["gtask1"]); ?>" target="_blank">View</a></td>
                                <td><a href="<?php echo htmlspecialchars($row["ltask1"]); ?>" target="_blank">View</a></td>
                                <td><a href="<?php echo htmlspecialchars($row["gtask2"]); ?>" target="_blank">View</a></td>
                                <td><a href="<?php echo htmlspecialchars($row["ltask2"]); ?>" target="_blank">View</a></td>
                                <td><a href="<?php echo htmlspecialchars($row["gtask3"]); ?>" target="_blank">View</a></td>
                                <td><a href="<?php echo htmlspecialchars($row["ltask3"]); ?>" target="_blank">View</a></td>
                                <td><?php echo htmlspecialchars($row["paymentStatus"]); ?></td>
                                <td>
                                    <?php if (!empty($row["paymentScreenshot"])): ?>
                                        <a href="uploads/<?php echo htmlspecialchars($row["paymentScreenshot"]); ?>" target="_blank">View</a>
                                    <?php else: ?>
                                        No Screenshot
                                    <?php endif; ?>
                                </td>
                                <td><?php echo htmlspecialchars($row["created_at"]); ?></td>
                            </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="15">No data found</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <!-- Certificate Data Tab -->
        <div class="tab-pane fade" id="certificates" role="tabpanel" aria-labelledby="certificate-tab">
            <h2 class="mt-4">Certificate Data</h2>
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>CID</th>
                        <th>Name</th>
                        <th>Domain</th>
                        <th>Duration</th>
                        <th>Certificate</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($certificate_result->num_rows > 0): ?>
                        <?php while ($row = $certificate_result->fetch_assoc()): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($row["candidate_id"]); ?></td>
                                <td><?php echo htmlspecialchars($row["fullName"]); ?></td>
                                <td><?php echo htmlspecialchars($row["domain"]); ?></td>
                                <td><?php echo htmlspecialchars($row["duration"]); ?></td>
                                <td>
                                    <?php if (!empty($row["certificate"])): ?>
                                        <a href="uploads/<?php echo htmlspecialchars($row["certificate"]); ?>" target="_blank">Download</a>
                                    <?php else: ?>
                                        No Certificate
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="5">No data found</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

    </div>
</div>

<!-- Include Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
// Close the database connection
$conn->close();

// End output buffering and flush the output
ob_end_flush();
?>
