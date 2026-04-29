<?php
error_reporting(0);
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['username'])) {
    header("location: index.php");
    exit;
}

require_once "config.php";

$username = $password = "";
$err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (empty(trim($_POST['username'])) || empty(trim($_POST['password']))) {
        $err = "Please enter username + password";
    } else {
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }

    if (empty($err)) {
        $sql = "SELECT username, password FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $param_username);
        $param_username = $username;

        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_store_result($stmt);

            if (mysqli_stmt_num_rows($stmt) == 1) {
                mysqli_stmt_bind_result($stmt, $username, $hashed_password);
                if (mysqli_stmt_fetch($stmt)) {
                    if (password_verify($password, $hashed_password)) {
                        // NO second session_start() here — already started above
                        $_SESSION["username"] = $username;
                        $_SESSION["loggedin"] = true;
                        header("location: index.php");
                        exit;
                    } else {
                        $err = "Invalid username or password";
                    }
                }
            } else {
                $err = "Invalid username or password";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="fontawesome-free-5.15.3-web/fontawesome-free-5.15.3-web/css/all.css">
  <title>Login</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a href="index.php" id="logo" class="navbar-brand" style="font-family: 'Lobster', cursive; font-size:30px;">Wondrous RenTrip</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="booking.php">Bookings</a></li>
        <li class="nav-item"><a class="nav-link" href="faq.php">FAQ</a></li>
        <li class="nav-item"><a class="nav-link" href="rentrip.php">Why Wondrous RenTrip?</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
      </ul>
      <a href="login.php" class="btn btn-outline-light">Login/Sign Up</a>
    </div>
  </div>
</nav>

<div class="container-fluid bg">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <br><br><br>
      <?php if (!empty($err)): ?>
        <div class="alert alert-danger"><?php echo $err; ?></div>
      <?php endif; ?>
      <form class="form-container" action="" method="post">
        <div class="mb-3">
          <label><h5>Username</h5></label>
          <input type="text" name="username" class="form-control" placeholder="Enter Username">
        </div>
        <div class="mb-3">
          <label><h5>Password</h5></label>
          <input type="password" name="password" class="form-control" placeholder="Enter Password">
        </div>
        <button type="submit" class="btn submit">Submit</button><br><br>
        <div class="pswrd">
          <p>Don't have an account? <a href="signup.php">Create an account</a></p>
        </div>
      </form>
    </div>
  </div>
</div>

<?php include "./footer.php"; ?>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
