<?php
// Set the dynamic title
$pageTitle = 'Admin Page | certificate verification';

// Database connection
$servername = "localhost"; // Adjust server details
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "internship";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize variables
$candidate_id_search = '';
$search_result = [];
$current_edit_id = '';
$current_edit_fullName = '';
$current_edit_domain = '';
$current_edit_duration = '';
$current_edit_certificate = '';

// Handle form submission for adding/updating entries
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['search'])) {
        $candidate_id_search = $_POST['candidate_id_search'];
        $sql = "SELECT * FROM certificate WHERE candidate_id='$candidate_id_search'";
        $search_result = $conn->query($sql);
    } else {
        $candidate_id = $_POST['candidate_id'];
        $fullName = $_POST['fullName'];
        $domain = $_POST['domain'];
        $duration = $_POST['duration'];

        // Handle file upload
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["certificate"]["name"]);
        move_uploaded_file($_FILES["certificate"]["tmp_name"], $target_file);

        // Insert or update record
        if (isset($_POST['add'])) {
            $sql = "INSERT INTO certificate (candidate_id, fullName, domain, duration, certificate) VALUES ('$candidate_id', '$fullName', '$domain', '$duration', '$target_file')";
            $conn->query($sql);
        } elseif (isset($_POST['update'])) {
            $sql = "UPDATE certificate SET fullName='$fullName', domain='$domain', duration='$duration', certificate='$target_file' WHERE candidate_id='$candidate_id'";
            $conn->query($sql);
        }
    }
}

// Handle delete action
if (isset($_GET['delete'])) {
    $candidate_id = $_GET['delete'];
    $sql = "DELETE FROM certificate WHERE candidate_id='$candidate_id'";
    $conn->query($sql);
}

// Handle edit action
if (isset($_GET['edit'])) {
    $current_edit_id = $_GET['edit'];
    $sql = "SELECT * FROM certificate WHERE candidate_id='$current_edit_id'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $current_edit_fullName = $row['fullName'];
        $current_edit_domain = $row['domain'];
        $current_edit_duration = $row['duration'];
        $current_edit_certificate = $row['certificate'];
    }
}

// Fetch all records if no search
if (empty($candidate_id_search)) {
    $sql = "SELECT * FROM certificate";
    $result = $conn->query($sql);
} else {
    $result = $search_result; // Use search result if searching
}

// Start capturing content for the master page
ob_start();
?>
<div class="container shadow-lg p-3 mb-5 bg-body rounded">
<h1>Internship Applications</h1>

<!-- Search Form -->
<form method="post">
    <label>Search by Candidate ID:</label><br>
    <input type="text" class="form-control h3 shadow-lg p-3 mb-5 bg-body rounded" name="candidate_id_search" value="<?php echo htmlspecialchars($candidate_id_search); ?>">
    <input type="submit" class="btn btn-primary w-40 py-3" name="search" value="Search">
</form>

<!-- Form for adding/updating data -->
<form method="post" enctype="multipart/form-data">
    <input type="hidden" name="candidate_id" value="<?php echo htmlspecialchars($current_edit_id); ?>">
    <label>Candidate ID:</label><br>
    <input type="text" class="form-control" name="candidate_id" required value="<?php echo htmlspecialchars($current_edit_id); ?>" <?php echo $current_edit_id ? 'readonly' : ''; ?>><br>
    <label>Name:</label><br>
    <input type="text" class="form-control" name="fullName" required value="<?php echo htmlspecialchars($current_edit_fullName); ?>"><br>
    <label>Domain:</label><br>
    <input type="text" class="form-control" name="domain" required value="<?php echo htmlspecialchars($current_edit_domain); ?>"><br>
    <label>Duration:</label><br>
    <input type="text" class="form-control" name="duration" required value="<?php echo htmlspecialchars($current_edit_duration); ?>"><br>
    <label>Certificate:</label><br>
    <input type="file" class="btn btn-primary w-40 py-3" name="certificate"><br><br>
    <small>Leave blank to keep existing file: <a href="<?php echo $current_edit_certificate; ?>">Download</a></small><br>
    <input type="submit" class="btn btn-primary w-40 py-3" name="add" value="Add Application">
    <input type="submit" class="btn btn-primary w-40 py-3" name="update" value="Update Application">
</form>

<h2>Candidate List</h2>
<table border="1">
    <tr>
        <th>Candidate ID</th>
        <th>Name</th>
        <th>Domain</th>
        <th>Duration</th>
        <th>Certificate</th>
        <th>Actions</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()) : ?>
    <tr>
        <td><?php echo $row['candidate_id']; ?></td>
        <td><?php echo $row['fullName']; ?></td>
        <td><?php echo $row['domain']; ?></td>
        <td><?php echo $row['duration']; ?></td>
        <td><a href="<?php echo $row['certificate']; ?>">Download</a></td>
        <td>
            <a href="?edit=<?php echo $row['candidate_id']; ?>">Edit</a>
            <a href="?delete=<?php echo $row['candidate_id']; ?>" onclick="return confirm('Are you sure?');">Delete</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>
</div>

<?php
// Capture content into the $content variable
$content = ob_get_clean();

// Include the master page to render the complete layout
include 'master.php';

$conn->close();
?>
