<?php
// Set the dynamic title for the page
$pageTitle = 'Internship Task | Alfido Tech';

// Start output buffering to capture content for the master page
ob_start();
?>

<div class="container">
            <div class="container py-2 px-lg-2">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title text-secondary justify-content-center"><span></span><span></span>
                    </p>
                    <h1 class="text-center mb-5">Please download a task related to your Domain.</h1>

                    <div class="row row-cols-1 row-cols-md-2 g-3">
                        <div class="col">
                            <a href="Web Development Tasks.html" target="_blank">
                                <button class="btn btn-primary btn-custom w-100 ">Web Development Task</button> </a>
                        </div><br><br><br>
                        <div class="col">
                            <a href="Python Development Tasks.html" target="_blank">
                            <button class="btn btn-primary btn-custom w-100">Python Development Task</button> </a>
                        </div><br><br><br>
                        <div class="col">
                            <a href="Java Development Tasks.html" target="_blank">
                            <button class="btn btn-primary btn-custom w-100">Java Development Task</button></a>
                        </div><br><br><br>
                        <div class="col">
                            <a href="Data Analyst Tasks.html" target="_blank">
                            <button class="btn btn-primary btn-custom w-100">Data Analyst Task</button></a>
                        </div><br><br><br>
                        <div class="col">
                            <a href="Data Science Tasks.html" target="_blank">
                            <button class="btn btn-primary btn-custom w-100">Data Science Task</button></a>
                        </div><br><br><br>
                        <div class="col">
                            <a href="UXUI Design Tasks.html" target="_blank">
                            <button class="btn btn-primary btn-custom w-100">UX/UI Design Task</button></a>
                        </div><br><br><br>
                        <div class="col">
                            <a href="Android Development Tasks.html" target="_blank">
                            <button class="btn btn-primary btn-custom w-100">Android Development Task</button></a>
                        </div><br><br><br>
                        <div class="col">
                            <a href="recat.html" target="_blank">
                            <button class="btn btn-primary btn-custom w-100">React.js Task</button></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <br><br><br>





<?php
// Get the content from the buffer
$content = ob_get_clean();

// Include the master page to render the complete layout
include 'master.php';
?>