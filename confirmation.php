<?php
// Set the dynamic title for the page
$pageTitle = 'Registration Confirmation | Alfido Tech';

// Start output buffering to capture content for the master page
ob_start();
?>

<div class="mt-5 container-fluid">
    <h2 class="">Your registration is completed</h2>
    <p class="mt-4">Thank you for registering for the Alfido Tech Internship Program. We will get back to you soon with further details.</p>
</div>

<?php
// Get the content from the buffer
$content = ob_get_clean();

// Include the master page to render the complete layout
include 'master.php';
?>
