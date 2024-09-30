<?php
// Set the dynamic title for the page
$pageTitle = 'Admin Dashboard | Alfido Tech';

// Start output buffering to capture content for the master page
ob_start();

// Connect to the database
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

// Fetch Internship applications data
$internship_query = "SELECT * FROM internship_applications";
$internship_result = $conn->query($internship_query);

// Fetch Submission data
$submission_query = "SELECT * FROM applications";
$submission_result = $conn->query($submission_query);

// Fetch Certificate data
$certificate_query = "SELECT * FROM certificate";
$certificate_result = $conn->query($certificate_query);
?>

<div class="container text-center">
    <h1 class="mt-5">Admin Dashboard</h1>

    <!-- Navigation Tabs -->
    <ul class="nav nav-tabs justify-content-center mt-4" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="internship-tab" data-bs-toggle="tab" href="#internship" role="tab" aria-controls="internship" aria-selected="true">Internship Applications</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="submission-tab" data-bs-toggle="tab" href="#submission" role="tab" aria-controls="submission" aria-selected="false">Submission Data</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="certificate-tab" data-bs-toggle="tab" href="#certificate" role="tab" aria-controls="certificate" aria-selected="false">Certificate Data</a>
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
                                <td><?php echo htmlspecialchars($row['id']); ?></td>
                                <td><?php echo htmlspecialchars($row['candidate_name']); ?></td>
                                <td><?php echo htmlspecialchars($row['candidate_email']); ?></td>
                                <td><?php echo htmlspecialchars($row['whatsapp_number']); ?></td>
                                <td><?php echo htmlspecialchars($row['internship_domain']); ?></td>
                                <td><?php echo htmlspecialchars($row['candidate_id']); ?></td>
                                <td><?php echo htmlspecialchars($row['linkedin_profile']); ?></td>
                                <td><?php echo htmlspecialchars($row['task1_github']); ?></td>
                                <td><?php echo htmlspecialchars($row['task1_linkedin']); ?></td>
                                <td><?php echo htmlspecialchars($row['task2_github']); ?></td>
                                <td><?php echo htmlspecialchars($row['task2_linkedin']); ?></td>
                                <td><?php echo htmlspecialchars($row['task3_github']); ?></td>
                                <td><?php echo htmlspecialchars($row['task3_linkedin']); ?></td>
                                <td><?php echo htmlspecialchars($row['payment_status']); ?></td>
                                <td>
                                    <?php if (!empty($row['payment_screenshot'])): ?>
                                        <a href="<?php echo htmlspecialchars($row['payment_screenshot']); ?>" target="_blank">View Screenshot</a>
                                    <?php else: ?>
                                        No Screenshot
                                    <?php endif; ?>
                                </td>
                                <td><?php echo htmlspecialchars($row['submission_date']); ?></td>
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
        <div class="tab-pane fade" id="certificate" role="tabpanel" aria-labelledby="certificate-tab">
            <h2 class="mt-4">Certificate Data</h2>
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>Candidate ID</th>
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
                                <td><?php echo htmlspecialchars($row['candidate_id']); ?></td>
                                <td><?php echo htmlspecialchars($row['name']); ?></td>
                                <td><?php echo htmlspecialchars($row['domain']); ?></td>
                                <td><?php echo htmlspecialchars($row['duration']); ?></td>
                                <td>
                                    <?php if (preg_match('/\.(jpg|jpeg|png)$/', $row['certificate'])): ?>
                                        <img src="<?php echo htmlspecialchars($row['certificate']); ?>" alt="Certificate Image" width="100">
                                    <?php else: ?>
                                        <a href="<?php echo htmlspecialchars($row['certificate']); ?>" target="_blank">View PDF</a>
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

<?php
// Get the content from the buffer and clear it
$content = ob_get_clean();

// Include the master page to render the complete layout
include 'master.php';

// Close the database connection
$conn->close();
?>
