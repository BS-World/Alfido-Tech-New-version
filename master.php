<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Basic Meta Tags -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Mobile Meta Tags -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Dynamic Title -->
  <title><?php echo isset($pageTitle) ? $pageTitle : 'Alfido Tech | IT Internship Opportunities'; ?></title>

  <!-- Meta Information -->
  <meta name="keywords"
    content="IT Internship, Information Technology Intern, Internship Opportunities, IT Intern, Internship Program, Technology Intern, IT Training, Entry-level IT, Intern Positions, Internship Experience, Alfido Tech, Internship, Alfido Tech Internship">
  <meta name="author" content="Bhanu Pratap Biswas">
  <meta name="description"
    content="Explore exciting IT internship opportunities. Gain hands-on experience in information technology and kickstart your career.">

  <!-- Favicon and Manifest -->
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
  <meta name="msapplication-TileColor" content="#da532c" />
  <meta name="theme-color" content="#ffffff" />

  <!-- Open Graph Tags for Social Media Sharing -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://www.alfidotech.com/">
  <meta property="og:title" content="Alfido Tech Internship">
  <meta property="og:description"
    content="Join Alfido Tech's Internship Program and gain hands-on experience in cutting-edge technology fields. Apply now to start your tech career!">
  <meta property="og:image" content="https://www.alfidotech.com/logo.png">

  <!-- CSS Links -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap"
    rel="stylesheet" />

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- Libraries Stylesheet -->
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">



  <style>
    .back {
      background: url(bgi.webp) no-repeat center center fixed;
      background-size: cover;
      height: 100vh;
      width: 100vw;
    }

    .back1 {
      background-image: url(bgi.webp);
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
    }

    /* Add custom styles for the WhatsApp button */
    #whatsapp-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
        }

        /* Adjust the width and height of the image */
        #whatsapp-btn img {
            max-width: 100%;
            /* Make the image responsive */
            height: auto;
            /* Maintain aspect ratio */
            width: 80px;
            /* You can adjust the width as needed */
            height: 90px;
            /* You can adjust the height as needed */
        }
  </style>
</head>

<body class="sub_page">
  <!-- Header Section -->
  <div class="hero_area">
    <header class="header_section back1">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.php">
            <img src="https://www.alfidotech.com/logo02.png" width="270" height="100" alt="Alfido Tech Logo"
              class="responsive">
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="internship.php">Internship</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="task.php">Task</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="submission.php">Submission</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="verify.php">Verify Certificate</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="blog.php">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
  </div>

  <!-- Main Content Section -->
  <main>
    <?php
    // Display dynamic content
    echo $content;
    ?>
  </main>

  <!-- Footer Section -->
  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_contact">
            <h4>
              Address
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Hyderabad, Telangana
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +91 9977465250
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  query@alfidotech.com
                </span>
              </a>
            </div>
          </div>
          <div class="info_social">
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="https://www.linkedin.com/company/alfido-tech/">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_link_box">
            <h4>
              Links
            </h4>
            <div class="info_links">
              <a class="active" href="index.php">
                <img src="images/nav-bullet.png" alt="">
                Home
              </a>
              <a class="" href="contact.php">
                <img src="images/nav-bullet.png" alt="">
                About
              </a>
              <a class="" href="service.php">
                <img src="images/nav-bullet.png" alt="">
                Services
              </a>
              <a class="" href="Privacypolicy.php">
                <img src="images/nav-bullet.png" alt="">
                Privacy policy
              </a>
              <a class="" href="contact.php">
                <img src="images/nav-bullet.png" alt="">
                Contact Us
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_detail">
            <h4>
              Info
            </h4>
            <p>
              Alfido Tech has started internship Registration. Alfido Tech wishes you a bright future
            </p>
          </div>
        </div>
        <div class="col-md-3 mb-0">
          <h4>
            Subscribe
          </h4>
          <form action="#">
            <input type="text" placeholder="Enter email" />
            <button type="submit">
              Subscribe
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->

  <div id="whatsapp-btn">
            <a href="https://api.whatsapp.com/send?phone=919977465250" target="_blank">
                <img src="Welcome.gif" alt="WhatsApp GIF" class="img-fluid bi bi-whatsapp">
            </a>
        </div>
    </div>


  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://www.linkedin.com/company/alfido-tech/">Alfido Tech</a>
      </p>
    </div>
  </footer>


  <!-- JavaScript to Display Current Year Dynamically -->
  <script>
    document.getElementById("displayYear").textContent = new Date().getFullYear();
  </script>

  <!-- jQuery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="js/bootstrap.js"></script>
  <!-- Custom JS -->
  <script src="js/custom.js"></script>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>