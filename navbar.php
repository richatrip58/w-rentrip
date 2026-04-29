<?php
error_reporting(0);
if (session_status() === PHP_SESSION_NONE) {
    session_start(); // Only start session if not already started
}
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a href="index.php" id="logo" class="navbar-brand" style="font-family: 'Lobster', cursive; font-size:30px;font-style:bold;">Wondrous RenTrip</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="booking.php">Bookings</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="faq.php">FAQ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="rentrip.php">Why Wondrous RenTrip?</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li>

        <?php if (isset($_SESSION['username'])): ?>
        <li class="nav-item">
          <a class="nav-link" href="profile.php">
            Hey! <strong>
            <?php
              require_once "config.php";
              $username = $_SESSION['username'];
              $sql = "SELECT name FROM users WHERE username = '$username'";
              $result = mysqli_query($conn, $sql);
              if ($result && mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                echo htmlspecialchars($row['name']);
              }
            ?>
            </strong>
          </a>
        </li>
        <?php endif; ?>
      </ul>

      <?php if (isset($_SESSION['username'])): ?>
        <!-- Show logout button when logged in -->
        <a href="logout.php" class="btn btn-outline-danger">Logout</a>
      <?php else: ?>
        <!-- Show login button when not logged in -->
        <a href="login.php" class="btn btn-outline-light">Login/Sign Up</a>
      <?php endif; ?>

    </div>
  </div>
</nav>
