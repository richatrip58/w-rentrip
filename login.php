<?php error_reporting(0);
//This script will handle login
session_start();
// check if the user is already logged in
if(isset($_SESSION['username']))
{
    header("location: index.php");
    exit;
}
require_once "config.php";

$username = $password = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
  if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
  {
      $err = "Please enter username + password";
  }
  else{
      $username = trim($_POST['username']);
      $password = trim($_POST['password']);
  }


  if(empty($err)){
  $sql = "SELECT username, password FROM users WHERE username = ?";
  $stmt = mysqli_prepare($conn, $sql);
  mysqli_stmt_bind_param($stmt, "s", $param_username);
  $param_username = $username;
  
  
  // Try to execute this statement
  if(mysqli_stmt_execute($stmt)){
    mysqli_stmt_store_result($stmt);
    if(mysqli_stmt_num_rows($stmt) == 1)
    {
      mysqli_stmt_bind_result($stmt, $username, $hashed_password);
      if(mysqli_stmt_fetch($stmt))
      {
        if(password_verify($password, $hashed_password))
        {
          session_start();
         
            // this means the password is corrct. Allow user to login
          
            $_SESSION["username"] = $username;
            $_SESSION["password"] = $password;
           
            $_SESSION["loggedin"] = true;

            //Redirect user to welcome page
            header("location: index.php");
        }
      }
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
     <!-- Bootstrap CSS -->
     <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" >
       <!--custom css-->
       <link rel="stylesheet"  href="css/style.css">
    <!--fontawsome css-->
   <link rel="stylesheet" href="fontawesome-free-5.15.3-web\fontawesome-free-5.15.3-web\css\all.css">
    <title>Login</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a href="index.php" id="logo" class="navbar-brand" style = "font-family: 'Lobster', cursive; font-size:30px;font-style:bold;" >Wondrous RenTrip</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
</button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" name="test" >
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php" >Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="booking.php">Bookings</a>

            </li>
            <li class="nav-item">
              <a class="nav-link" href="faq.php">FAQ </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="rentrip.php">Why Wondrous RenTrip?</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
            </ul>
         
         <form action="login.php" method="post">
        
         <button type="submit" id="login" class="btn btn-outline-light">Login/Sign Up</button>
         
         </form>
       </div>
     </div>
   </nav>
<div class="container-fluid bg">
      <div class="row">
        <div class="col-md-4 col-ms-4 col-ms-12"></div>
        <div class="col-md-4 col-ms-4 col-ms-12">
          <!-- form start-->
          <br>
          <br>
          <br>
          <form class="form-container" action="" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1"><h5>Username</h5></label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1"><h5>Password</h5></label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
  </div>
  <button type="submit" class="btn submit">Submit</button><br><br>
  <div class="pswrd">
  <p>
           Don't have an account?
           <a href="signup.php"> Create an account</a>
           </p> </div>
</form>
</div>
        
        </div>
      </div>
      <?php include "./footer.php"; ?>
  
  
                <!-- Option 1: Bootstrap Bundle with Popper -->
                <script src="bootstrap/js/bootstrap.bundle.min.js" ></script>
  
  </body>
  </html>