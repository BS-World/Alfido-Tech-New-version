<?php
// Send the 404 status code to the browser
http_response_code(404);
?>



<?php
// Set the dynamic title for the page
$pageTitle = '404 - Page Not Found | Alfido Tech';

// Start output buffering to capture content for the master page
ob_start();
?>



<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container px-lg-5 text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                        <h1 class="display-1">404</h1>
                        <h1 class="mb-4">Page Not Found</h1>
                        <p class="mb-4">We’re sorry, the page you have looked for does not exist in our website! Maybe go to our home page or try to use a search?</p>
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="index.php">Go Back To Home</a>
                    </div>
                </div>
            </div>
        </div>



        <?php
// Get the content from the buffer
$content = ob_get_clean();

// Include the master page to render the complete layout
include 'master.php';
?>