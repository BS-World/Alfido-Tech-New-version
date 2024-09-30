<?php
// Set the dynamic title for the page
$pageTitle = 'Internship submission From | Alfido Tech';

// Start output buffering to capture content for the master page
ob_start();
?>

<!-- submission_form.php -->
<div class="container-xxl py-2">
            <div class="container py-2 px-lg-2">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <!-- <p class="section-title text-secondary justify-content-center"><span></span>Details<span></span>
                    </p> -->
                    <!-- <h1 class="text-center mb-5">Internship Program Details</h1> -->
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="wow " data-wow-delay="0.0s">
                            <p class="text-center mb-4">
                                <!-- <ul>
                                <li><strong>Duration: 1 Month</strong></li>
                                <li><strong>Starting Date: 10 October 2023</strong></li>
                                <li><strong>Submission Date: 25 Oct To 10 Nov</strong></li>
                                <li><strong>Mode: Online & Task Based</strong></li>
                                <li><strong>Perks: Offer letter & Completion Certificate</strong></li>
                                <li><strong>Domains: 5+</strong></li>
                            </ul> -->
                                <hr>
                            <p>
                            <h5 style="color: RED;"> 📌Please fill all the required details carefully, information
                                provided will be used for
                                Completion Certificate.</h5>
                            </p>
                            <ul>
                            <li style="color: black;">
                                LinkedIn: <a href="https://www.linkedin.com/company/alfido-tech/" target="_blank" class="btn btn-primary btn-rounded">Click Here</a>
                            </li>
                            <hr>
                            <li style="color: black;">
                                WhatsApp Community: <a href="https://chat.whatsapp.com/I7oG7w7bLkhDo2EEGzaHAz" target="_blank" class="btn btn-primary btn-rounded">Click Here</a>
                            </li>
                            <hr>
                            <li style="color: black;">
                                Alfido Tech Channel: <a href="https://www.whatsapp.com/channel/0029Va9oTsF1CYoKbCt5TJ41" target="_blank" class="btn btn-primary btn-rounded">Click Here</a>
                            </li>
                            <hr>
                            <li style="color: black;">
                                Telegram: <a href="https://t.me/+s9WykS4sL7hlN2I1" target="_blank" class="btn btn-primary btn-rounded">Click Here</a>
                            </li>
                        </ul>
                            <hr>
                            <h5 style="font-weight: bold;"> 📌 After The Task Submission, The Certificate will be sent
                                to your Email in 2 to 3 days.</h5>
                            <h2>sample certificate of completion</h2>
                            <img src="Sample_02.png" class="img-fluid img-thumbnail" alt="Responsive image">


                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<div class="container">
    <h2 style="color: blue;">Submission Form</h2>
    <form id="registrationForm" action="submit.php" method="post" enctype="multipart/form-data">
        <label for="fullName">Full Name</label>
        <input type="text" class="form-control" id="fullName" name="fullName" required><br>

        <label for="email">Email ID</label>
        <input type="email" class="form-control" id="email" name="email" required><br>

        <label for="whatsapp">WhatsApp Number</label>
        <input type="tel" class="form-control" id="whatsapp" name="whatsapp" required><br>

        <label for="internshipDomain">Select the Internship You Have Applied For</label>
        <select name="internshipDomain" id="internshipDomain" class="form-control" required>
            <option value="" disabled selected>Select Your Domain...</option>
            <option value="Web Development">Web Development</option>
            <option value="UX/UI Design">UX/UI Design</option>
            <option value="React.JS">React.JS</option>
            <option value="Python Development">Python Development</option>
            <option value="Java Development">Java Development</option>
            <option value="Data Science">Data Science</option>
            <option value="Data Analytics">Data Analytics</option>
            <option value="Android Development">Android Development</option>
        </select><br>

        <label for="cidno">C.ID Number<br>(C.ID can be found on your offer letter.)</label>
        <input type="text" class="form-control" id="cidno" name="cidno" required><br>

        <label for="linkedIn">LinkedIn Profile Link</label>
        <input type="url" class="form-control" id="linkedIn" name="linkedIn" required><br>

        <label for="gtask1">Task 1: GitHub Repository Link<br>(If you don't have a link, write NA)</label>
        <input type="text" class="form-control" id="gtask1" name="gtask1" required><br>

        <label for="ltask1">Task 1: LinkedIn Post Link<br>(If you don't have a link, write NA)</label>
        <input type="text" class="form-control" id="ltask1" name="ltask1" required><br>

        <label for="gtask2">Task 2: GitHub Repository Link<br>(If you don't have a link, write NA)</label>
        <input type="text" class="form-control" id="gtask2" name="gtask2" required><br>

        <label for="ltask2">Task 2: LinkedIn Post Link<br>(If you don't have a link, write NA)</label>
        <input type="text" class="form-control" id="ltask2" name="ltask2" required><br>

        <label for="gtask3">Task 3: GitHub Repository Link<br>(If you don't have a link, write NA)</label>
        <input type="text" class="form-control" id="gtask3" name="gtask3" required><br>

        <label for="ltask3">Task 3: LinkedIn Post Link<br>(If you don't have a link, write NA)</label>
        <input type="text" class="form-control" id="ltask3" name="ltask3" required><br>

        <div class="col-lg-7">
            <h5 style="color: blue;">
                Following our guidelines, you must pay <strong style="color: red;">₹99</strong> for administrative documentation,
                which is vital for successfully obtaining your internship certificate.
            </h5>
        </div>
        <label style="color: blue;">If you want to receive a <strong style="color: rgb(255, 0, 0);">4-month</strong> Certificate from 
            <strong style="color: rgb(255, 0, 0);">Alfido Tech</strong>, you will have to pay <strong style="color: rgb(255, 0, 0);">Rs 199.</strong>
            <br>If you want to take it, choose <strong style="color: rgb(255, 0, 0);">"Yes"</strong> otherwise <strong style="color: rgb(255, 0, 0);">"No"</strong>.
            
        </label><br><br>
        <img src="alfido pay 7099.png" alt="Responsive image" height="350px"><hr>

        <input type="radio" id="Yes" name="posejasen" value="Yes" required>
        <label for="Yes">Yes</label><br>
        <input type="radio" id="No" name="posejasen" value="No" required>
        <label for="No">No</label><br><br>

        <label><strong style="color: blue;" class="h3">Screenshot of Contribution</strong><br>
            Please ensure the Transaction ID & Date/Time are visible in the Screenshot.
        </label><br>

        <label for="file" class="h3">Payment Screenshot</label>
        <input type="file" class="form-control" id="file" name="file" required><br><br>

        <button type="submit" class="btn btn-primary w-40 py-3">Submit</button>
        <input type="reset" class="btn btn-primary w-40 py-3" value="Reset"><br>
    </form>
</div><br><br>

<!-- Popup Modal -->
<div class="shadow-lg p-3 mb-5 bg-body rounded" id="popupOverlay" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);">
    <div id="popup" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: white; padding: 20px; border-radius: 10px; text-align: center;">
        <h2>Submission Completed</h2>
        <p>Your Submission is successfully completed!</p>
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
    fetch('submit.php', {
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
