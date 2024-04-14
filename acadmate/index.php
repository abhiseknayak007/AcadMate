<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AcadMate</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./styles.css">
</head>
<body>
  <!-- Header -->
  <header>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="#">
          AcadMate
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="./index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./forum.html">Forum</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Notes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Search</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profile.php">Profile</a>
            </li>
          </ul>
          <ul class="navbar-nav">
            <?php
            // Check if user is logged in
            if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
              echo '<li class="nav-item"><span class="nav-link">Welcome back, ' . $_SESSION['username'] . '!</span></li>';
              echo '<li class="nav-item"><a class="nav-link" href="profile.php">Profile</a></li>';
              echo '<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>';
            } else {
              echo '<li class="nav-item"><a class="nav-link btn btn-primary mr-2" href="login.html">Login</a></li>';
              echo '<li class="nav-item"><a class="nav-link btn btn-primary mr-2" href="register.html">Register</a></li>';
            }
            ?>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- Main Content -->
  <main>
    <!-- Your content goes here -->
    <div id="banner">
        <h1>AcadMate!</h1>
        <?php
        // Display welcome message if user is logged in
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
          echo '<p>Welcome back, ' . $_SESSION['username'] . '!</p>';
        }
        ?>
    </div>
  </main>

  <!-- Footer -->
  <footer class="bg-light py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <p>&copy; 2023 AcadMate. All rights reserved.</p>
        </div>
        <div class="col-md-6 text-md-right">
          <a href="#" class="mr-3">About Us</a>
          <a href="#" class="mr-3">Contact</a>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>