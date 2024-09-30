<?php
// Connect to MySQL database
$conn = mysqli_connect('localhost', 'root', '', 'internship');

// Check connection
if (!$conn) {
    die('Could not connect to MySQL: ' . mysqli_connect_error());
}

// Initialize filter variables
$filterDomain = isset($_POST['internshipDomain']) ? $_POST['internshipDomain'] : '';
$filterGender = isset($_POST['gender']) ? $_POST['gender'] : '';
$filterDate = isset($_POST['submission_date']) ? $_POST['submission_date'] : '';

// Build the query based on filters
$query = "SELECT * FROM internship_applications WHERE 1=1";
if ($filterDomain) {
    $query .= " AND internshipDomain = '$filterDomain'";
}
if ($filterGender) {
    $query .= " AND gender = '$filterGender'";
}
if ($filterDate) {
    $query .= " AND submission_date = '$filterDate'";
}

$result = mysqli_query($conn, $query);

// Function to export data to CSV
if (isset($_POST['export'])) {
    $filename = "internship_applications_" . date('Ymd') . ".csv";
    header("Content-Type: text/csv");
    header("Content-Disposition: attachment; filename=\"$filename\"");
    $output = fopen("php://output", "w");
    
    // Fetch the table headers
    $fields = mysqli_fetch_fields($result);
    $header = array();
    foreach ($fields as $field) {
        $header[] = $field->name;
    }
    
    // Write headers to the CSV file
    fputcsv($output, $header);
    
    // Write data to the CSV file
    while ($row = mysqli_fetch_assoc($result)) {
        fputcsv($output, $row);
    }
    fclose($output);
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<!-- Include the header -->
<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Alfido Tech | IT Internship Opportunities</title>

  <title>Alfido Tech Internship Program | Registration Page</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="keywords" content="IT Internship, Information Technology Intern, Internship Opportunities, IT Intern, Internship Program, Technology Intern, IT Training, Entry-level IT, Intern Positions, Internship Experience, Alfido Tech, Internship, Alfido Tech Internship, alfido tech, alfidotech,Internship,free Internship, Alfidotech, alfido tech, Alfidotech, Alfido Tech, technology solutions, tech company, innovation, IT services, unpaid internship, free internship, Internship" />
    <meta name="author" content="Bhanu Pratap Biswas" />
    <meta name="description" content="Explore exciting IT internship opportunities. Gain hands-on experience in information technology and kickstart your career." />

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
    <link rel="manifest" href="site.webmanifest" />
    <meta name="msapplication-TileColor" content="#da532c" />
    <meta name="theme-color" content="#ffffff" />

    <!-- Open Graph / Facebook / LinkedIn -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.alfidotech.com/" />
    <meta property="og:title" content="Alfido Tech Internship" />
    <meta property="og:description" content="Join Alfido Tech's Internship Program and gain hands-on experience in cutting-edge technology fields. Apply now to start your tech career!" />
    <meta property="og:image" content="https://www.alfidotech.com/logo.png" />

    <!-- Open Graph Tags for Social Media Sharing -->
    <meta property="og:title" content="Alfido Tech Internship | Start Your Tech Career with Hands-On Experience" />
    <meta property="og:description" content="Join Alfido Tech's Internship Program to gain practical experience in cutting-edge technology fields. Apply now and kickstart your tech career!" />
    <meta property="og:url" content="https://www.alfidotech.com/internship.html" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://www.alfidotech.com/in.png" />


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
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
</style>

</head>

<body>

  <!-- Reuse the header -->
  <div class="hero_area back">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <img src="https://www.alfidotech.com/logo02.png" width="270" height="100" alt="Logo" class="responsive">
            <!-- <span>Alfido Tech Internship</span> -->
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="internship.html"> Internship</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Task.html">Task</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Submission.html">Submission</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Verify.html"> Verify Certificate</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Blog.html"> Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact Us</a>
              </li>
            </ul>
            <!-- <div class="quote_btn-container">
              <form class="form-inline">
                <button class="btn   nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call : +91 9977465250
                </span>
              </a>
            </div> -->
          </div>
        </nav>
      </div>
    </header>
  


  <div class="hero_area mt-4 bg-white">
    <h2>Admin Dashboard</h2>
    <p>List of all registered interns:</p>

    <!-- Filter Form -->
    <form method="POST" class="mb-5 bg-white">
      <div class="row">
        <div class="col-md-4">
          <label for="internshipDomain">Internship Domain</label>
          <select name="internshipDomain" id="internshipDomain" class="form-control">
            <option value="">All Domains</option>
            <option value="Web Development" <?php if($filterDomain == 'Web Development') echo 'selected'; ?>>Web Development</option>
            <option value="UX/UI Design" <?php if($filterDomain == 'UX/UI Design') echo 'selected'; ?>>UX/UI Design</option>
            <option value="React.JS" <?php if($filterDomain == 'React.JS') echo 'selected'; ?>>React.JS</option>
            <option value="Python Development" <?php if($filterDomain == 'Python Development') echo 'selected'; ?>>Python Development</option>
            <option value="Java Development" <?php if($filterDomain == 'Java Development') echo 'selected'; ?>>Java Development</option>
            <option value="Data Science" <?php if($filterDomain == 'Data Science') echo 'selected'; ?>>Data Science</option>
            <option value="Data Analytics" <?php if($filterDomain == 'Data Analytics') echo 'selected'; ?>>Data Analytics</option>
            <option value="Android Development" <?php if($filterDomain == 'Android Development') echo 'selected'; ?>>Android Development</option>
          </select>
        </div>

        <div class="col-md-4">
          <label for="gender">Gender</label>
          <select name="gender" id="gender" class="form-control">
            <option value="">All Genders</option>
            <option value="male" <?php if($filterGender == 'male') echo 'selected'; ?>>Male</option>
            <option value="female" <?php if($filterGender == 'female') echo 'selected'; ?>>Female</option>
          </select>
        </div>

        <div class="col-md-4">
          <label for="submission_date">Submission Date</label>
          <input type="date" name="submission_date" id="submission_date" class="form-control" value="<?php echo $filterDate; ?>">
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Filter</button>
      <a href="admin.php" class="btn btn-secondary">Reset Filters</a>
    </form>

    <!-- Display data from the database -->
    <table class="table table-bordered table bg-white">
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
        <?php
        // Loop through the fetched data and display in table rows
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['CID']}</td>
                    <td>{$row['fullName']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['gender']}</td>
                    <td>{$row['whatsapp']}</td>
                    <td>{$row['internshipDomain']}</td>
                    <td>{$row['collegeName']}</td>
                    <td>{$row['qualification']}</td>
                    <td>{$row['passingYear']}</td>
                    <td>{$row['submission_date']}</td>
                  </tr>";
        }
        ?>
      </tbody>
    </table>
    

    <!-- Export Button -->
    <form method="POST">
      <input type="submit" name="export" class="btn btn-primary" value="Export Data to CSV">
    </form>
  </div>
    </div>
    </div>

  <!-- Reuse the footer -->
  <footer>
    <div class="container-fluid">
      <p>&copy; <span id="displayYear"></span> All Rights Reserved by Alfido Tech</p>
    </div>
  </footer>

  <script>
    document.getElementById("displayYear").innerHTML = new Date().getFullYear();
  </script>

</body>
</html>
