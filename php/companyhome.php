<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false) {
  header("location: ../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/companyhome.css" />
  <link rel="stylesheet" href="../css/navbar.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
  <title>Home Company</title>
</head>

<body>
  <nav class="navbar">
    <span class="navbar-toggle" id="js-navbar-toggle">
      <i class="fas fa-bars"></i>
    </span>
    <a href="#" class="logo">logo</a>
    <ul class="main-nav" id="js-menu">
      <li>
        <a href="#" class="nav-links select-page"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
      </li>

      <li>
        <a href="companypostajob.php" class="nav-links"><i class="fa fa-bell" aria-hidden="true"></i> Post a Job</a>
      </li>
      <li>
        <a href="logout.php" class="nav-links"><i class="fa fa-power-off" aria-hidden="true"></i> Logout</a>
      </li>
      <li>
        <a href="#" class="nav-links"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $_SESSION['navname']; ?></a>
      </li>
    </ul>
  </nav>

  <div class="image-text-box">
    <div class="bottom-left">Home</div>
  </div>

  <div class="super-container">
    <div class="component">
      <div class="job">
        <h3>Pakshal Ranawat</h3>
        <h4 class="job-type">PartTime</h4>
      </div>

      <div class="company-location">
        <a class="locate"><i class="fa fa-briefcase" aria-hidden="true"></i> Full Stack
          Developer
        </a>
      </div>

      <div class="application">
        <a href="#" class="apply-button resume">RESUME</a>
        <a href="#" class="apply-button toggle-accepted">Accept</a>
        <a href="#" class="apply-button toggle-rejected">Reject</a>
      </div>
    </div>
    <!-- just repeated the component again to check below of spacing and all gg boiz!! -->
    <div class="component">
      <div class="job">
        <h3>Pakshal Ranawat</h3>
        <h4 class="job-type">PartTime</h4>
      </div>

      <div class="company-location">
        <a class="locate"><i class="fa fa-briefcase" aria-hidden="true"></i> Full Stack
          Developer
        </a>
      </div>

      <div class="application">
        <a href="#" class="apply-button resume">RESUME</a>
        <a href="#" class="apply-button toggle-accepted">Accept</a>
        <a href="#" class="apply-button toggle-rejected">Reject</a>
      </div>
    </div>
  </div>

  <script src="../js/employee.js"></script>
</body>

</html>
<!-- <img src="./web_dev_img/082-bell.png" alt="N" /> -->