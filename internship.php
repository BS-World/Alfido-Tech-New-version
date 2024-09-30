<?php
// Set the dynamic title for the page
$pageTitle = 'Internship Registration | Alfido Tech';

// Start output buffering to capture content for the master page
ob_start();
?>

<!-- Contact Start -->
<div class="container-xxl py-2">
            <div class="container py-2 px-lg-2">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title text-secondary text-center">
                        <!-- <span></span>Contact Us<span></span> -->
                    </p>
                    <h1 class="text-center mb-5">Internship Program Details</h1>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="wow fadeInUp" data-wow-delay="0.3s">
                            <p class="text-center mb-4">
                                <ul>
                                    <li><strong style="color: black;">Duration:</strong> 1 Month</li>
                                    <li><strong style="color: black;">Starting Date:</strong> <span style="color: red;">15 October 2024</span></li>
                                    <li><strong style="color: black;">Submission Window:</strong> 30 October 2024 to 15 October 2024</li>
                                    <li><strong style="color: black;">Mode:</strong> Online & Task-Based</li>
                                    <li><strong style="color: black;">Perks:</strong> Offer Letter & Completion Certificate</li>
                                    <li><strong style="color: black;">Domains:</strong> 5+</li>
                                </ul>
                                <hr>
                                <p style="color: red;">📌 Apply now and receive your offer letter within 24 hours!</p>
                                <h5>📌 Join Alfido Tech Communities</h5>
                                <ul>
                                    <li style="color: black;">
                                        LinkedIn: <a href="https://www.linkedin.com/company/alfido-tech/" target="_blank" class="btn btn-primary btn-rounded">Click Here</a>
                                    </li> <hr>
                                    <li style="color: black;">
                                        WhatsApp Community: <a href="https://chat.whatsapp.com/I7oG7w7bLkhDo2EEGzaHAz" target="_blank" class="btn btn-primary btn-rounded">Click Here</a>
                                    </li> <hr>
                                    <li style="color: black;">
                                        Alfido Tech Channel: <a href="https://www.whatsapp.com/channel/0029Va9oTsF1CYoKbCt5TJ41" target="_blank" class="btn btn-primary btn-rounded">Click Here</a>
                                    </li><hr>
                                    <li style="color: black;">
                                        Telegram: <a href="https://t.me/+s9WykS4sL7hlN2I1" target="_blank" class="btn btn-primary btn-rounded">Click Here</a>
                                    </li>
                                </ul>
                                <hr>
                                <h5 class="font-weight-bold">📌 Please ensure you fill out all required details for the internship offer letter and certificate.</h5>
                                <h5>If you wish to receive a 4-month internship certificate, specific conditions apply.</h5>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
<!-- Contact End -->

<!-- Registration Form Start -->
<div class="container">
    <h2>Registration Form</h2>
    <form name="submit-to-google-sheet" id="registrationForm" method="POST" action="database.php">
        <label for="fullName">Full Name</label>
        <input type="text" class="form-control" id="fullName" name="fullName" required><br>

        <label for="email">Email id</label>
        <input type="email" class="form-control" id="email" name="email" required><br>

        <label>Gender:</label>
        <input type="radio" id="male" name="gender" value="male" required>
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female" required>
        <label for="female">Female</label><br><br>

        <label for="whatsapp">WhatsApp Number</label>
        <input type="tel" class="form-control" id="whatsapp" name="whatsapp" required><br>

        <label for="internshipDomain">Select Internship Domain</label>
        <select name="internshipDomain" id="internshipDomain" class="form-control" required>
            <option value="">Select Your Domain...</option>
            <option value="Web Development">Web Development</option>
            <option value="UX/UI Design">UX/UI Design</option>
            <option value="React.JS">React.JS</option>
            <option value="Python Development">Python Development</option>
            <option value="Java Development">Java Development</option>
            <option value="Data Science">Data Science</option>
            <option value="Data Analytics">Data Analytics</option>
            <option value="Android Development">Android Development</option>
        </select><br>

        <label for="collegeName">College Name</label>
        <input type="text" class="form-control" id="collegeName" name="collegeName" required><br>

        <label for="qualification">Qualification</label>
        <input type="text" class="form-control" id="qualification" name="qualification" required><br>

        <label for="passingYear">Passing Year</label>
        <input type="text" class="form-control" id="passingYear" name="passingYear" required><br>

        <div>
            <input type="submit" class="btn btn-primary w-40 py-3" value="Submit">
            <input type="reset" class="btn btn-primary w-40 py-3" value="Reset">
        </div><br>
    </form>
</div>
<!-- Registration Form End -->

<!-- Popup Modal -->
<div id="popupOverlay" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);">
    <div id="popup" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: white; padding: 20px; border-radius: 10px; text-align: center;">
        <h2>Registration Completed</h2>
        <p>Your registration is successfully completed!</p>
        <button onclick="closePopup()" class="btn btn-primary">Close</button>
    </div>
</div>

<script>
// Show the popup after form submission
function showPopup() {
    document.getElementById('popupOverlay').style.display = 'block';
    document.getElementById('popup').style.display = 'block';
}

// Close the popup and reset the form
function closePopup() {
    document.getElementById('popupOverlay').style.display = 'none';
    document.getElementById('popup').style.display = 'none';
    
    // Reset the form
    document.getElementById('registrationForm').reset();
}

document.getElementById('registrationForm').addEventListener('submit', function(event) {
    event.preventDefault();  // Prevent the form from submitting the traditional way

    // Create form data
    var formData = new FormData(this);

    // Submit the form via AJAX call
    fetch('database.php', {
        method: 'POST',
        body: formData
    }).then(response => response.text())
      .then(data => {
        // If form submission is successful, show the popup
        showPopup();
      })
      .catch(error => console.error('Error:', error));
});
</script>

<?php
// Get the content from the buffer
$content = ob_get_clean();

// Include the master page to render the complete layout
include 'master.php';
?>
