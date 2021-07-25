<?php
error_reporting(0); 
session_start();

?>

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
          
           
      <li class="nav-item">
      <a class="nav-link" href="profile.php">
          <?php if (isset($_SESSION['username'])): ?>
          <p>
          Hey!
          <strong>
          <?php require_once "config.php";
                    $username = $_SESSION['username'];
                    $sql= "SELECT name FROM users WHERE username = '$username'; ";
                    $result=mysqli_query($conn, $sql);
                    $result_check=mysqli_num_rows($result);
                    if($result_check > 0) {
                      while($row = mysqli_fetch_assoc($result)){
                         echo $row['name']; 
                        }
                         }?>
          </strong>
          </p>
          <?php endif ?>
          <a>
      </li>
      
          </ul>
         
          <form action="login.php" method="post">
         
          <button type="submit" id="login" class="btn btn-outline-light">Login/Sign Up</button>
          
          </form>
        </div>
      </div>
    </nav>