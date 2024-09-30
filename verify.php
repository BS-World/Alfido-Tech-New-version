<?php
// Set the dynamic title for the page
$pageTitle = 'Internship Certificate Verify | Alfido Tech';

// Start output buffering to capture content for the master page
ob_start();
?>

<?php
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

$candidate_id = '';
$fullName = '';
$domain = '';
$duration = '';
$certificate_path = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $candidate_id = $_POST['candidate_id'];

    // Fetch certificate details from the database
    $sql = "SELECT fullName, domain, duration, certificate FROM certificate WHERE candidate_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $candidate_id);
    $stmt->execute();
    $stmt->bind_result($fullName, $domain, $duration, $certificate_path);
    $stmt->fetch();
    $stmt->close();
}
?>
<br><br>
<div class="container text-center">
    <form method="post" action="verify.php">
        <label for="candidate_id" class="h4">Search Candidate (by ID):</label>
        <input type="text" id="candidate_id" name="candidate_id" class="form-control h3 shadow-lg p-3 mb-3 bg-body rounded w-50 mx-auto" placeholder="Enter Your CID Number" required>
        <div class="d-flex justify-content-center gap-3">
            <button type="submit" class="btn btn-primary w-25 py-2">Verify</button>
            <button type="button" class="btn btn-secondary w-25 py-2" onclick="resetFields()">Reset</button>
        </div>
    </form>
</div>
<br><br>

<?php if ($fullName): ?>
    <div class="container text-center mt-5">
        <h2>Certificate Details</h2>
        <p><strong>Name:</strong> <?php echo htmlspecialchars($fullName); ?></p>
        <p><strong>Domain:</strong> <?php echo htmlspecialchars($domain); ?></p>
        <p><strong>Duration:</strong> <?php echo htmlspecialchars($duration); ?></p>

        <h3>Certificate:</h3>
        <div class="certificate-display mt-3">
            <?php if (preg_match('/\.(jpg|jpeg|png)$/', $certificate_path)): ?>
                <!-- Display certificate as an image -->
                <img src="<?php echo htmlspecialchars($certificate_path); ?>" alt="Certificate Image" class="img-fluid" style="max-width: 80%; height: auto;">
            <?php elseif (preg_match('/\.(pdf)$/', $certificate_path)): ?>
                <!-- Embed certificate as a PDF -->
                <iframe src="<?php echo htmlspecialchars($certificate_path); ?>" width="80%" height="800" style="border: 1px solid #ddd;"></iframe>
            <?php else: ?>
                <p>Certificate format not supported.</p>
            <?php endif; ?>
        </div>

        <!-- Download Button -->
        <div class="mt-3">
            <?php if ($certificate_path): ?>
                <a href="<?php echo htmlspecialchars($certificate_path); ?>" class="btn btn-success" download>Download Certificate</a>
            <?php endif; ?>
        </div>
    </div>
<?php elseif ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
    <div class="container text-center mt-5">
        <p class="h3 text-danger">No certificate found for the entered Candidate ID.</p>
    </div>
<?php endif; ?>

<script>
function resetFields() {
    // Clear all input fields and displayed certificate information
    document.getElementById('candidate_id').value = ''; // Clear the input field
    const certificateDisplay = document.querySelector('.certificate-display');
    if (certificateDisplay) {
        certificateDisplay.innerHTML = ''; // Clear displayed certificate information
    }
    
    // Clear other fields (name, domain, duration)
    document.querySelector('.container.text-center.mt-5').innerHTML = ''; // Clear all displayed details
}
</script>

<?php
// Get the content from the buffer and clear it
$content = ob_get_clean();

// Include the master page to render the complete layout
include 'master.php';

// Close the database connection
$conn->close();
?>
