<?php error_reporting(0);
session_start();
$showAlert=false;
$showError=false;
$exists=false;
if ($_SERVER['REQUEST_METHOD'] == "POST"){
  include 'config.php';
  
  $name = $_POST["name"];
  $_SESSION['name']= $name;
  $email = $_POST["email"];
  $_SESSION["email"]= $email;
  $contact_no = $_POST["contact_no"];
  $_SESSION["contact_no"]= $contact_no;
  $state = $_POST["state"];
  $_SESSION["state"]= $state;
  $city=$_POST["city"];
  $_SESSION["city"]=$city;
  $address=$_POST["address"];
  $_SESSION["address"]=$address;
  $username=$_POST["username"];
  $password=$_POST["password"];
  $confirm_password=$_POST["confirm_password"];
  $sql="SELECT * FROM users WHERE username='$username'";
  $result=mysqli_query($conn,$sql);
  $num=mysqli_num_rows($result);
  if($num==0){
    if(($password == $confirm_password) && $exists==false){
      $hash=password_hash($password, PASSWORD_DEFAULT);
      $code = rand(999999, 111111);
      $sql="INSERT INTO users(name, username, email, contact_no, address, city, state, password, code) VALUES ('$name','$username','$email','$contact_no','$address','$city','$state','$hash', '$code')";
      $result=mysqli_query($conn, $sql);
      if($result){
        $_SESSION['loggedin']= true;
        header("location:login.php");
      }
    }
    else{
      
      header("location:index.php");
    }
  }
  if($num>0){
    $exists="username exist";
  }
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" >
       <!--custom css-->
       <link rel="stylesheet" href="css/style.css">
    <!--fontawsome css-->
   <link rel="stylesheet" href="fontawesome-free-5.15.3-web/fontawesome-free-5.15.3-web/css/all.css">
      <title>Wondrous RenTrip</title>
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
              <a class="nav-link" href="rentrip">Why Wondrous RenTrip?</a>
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
        <div class="col-md-3 col-ms-4 col-ms-12"></div>
       
        <div class="col-md-6 col-ms-4 col-ms-12">
          <!-- form start-->
          <br>
          <form class="row form-container" action="" method="post">
          <div class="col-md-6 col-auto">
    <label for="name" class="form-label"><h6> Name</h6></label>
    <input type="text" name="name" class="form-control" id="name">
  </div>
  <div class="col-md-6 col-auto">
    <label for="email" class="form-label"><h6>E-mail Address</h6></label>
    <input type="email" name="email" class="form-control" id="email">
  </div>
    <div class="col-md-6 col-auto">
      <label for="inputEmail4" class="form-label"><h6>Username</h6></label>
      <input type="text" class="form-control" name="username" id="inputEmail4" placeholder="Username">
    </div>
    <div class="col-md-6 col-auto">
    <label for="contact_no" class="form-label"><h6>Contact No.</h6></label>
    <input type="tel" name="contact_no" class="form-control" id="contact_no">
  </div>
  <div class="col-md-6 col-auto">
      <label for="inputPassword4" class="form-label"><h6>Password</h6></label>
      <input type="password" class="form-control" name ="password" id="inputPassword4" placeholder="Password">
    </div> 
  <div class="col-md-6 col-auto">
      <label for="inputPassword4" class="form-label"><h6>Confirm Password</h6></label>
      <input type="password" class="form-control" name ="confirm_password" id="inputPassword" placeholder="Confirm Password">
    </div>
   <div class="col-12 col-auto">
    <label for="address" class="form-label"><h6>Address</h6></label>
    <input type="text" name="address" class="form-control" id="address" placeholder="1234 Main St">
  </div>
    <div class="col-md-6 col-auto">
    <label for="city" class="form-label"><h6>City</h6></label>
    <input type="text" name="city" class="form-control" id="city">
  </div>
  <div class="col-md-6 col-auto">
    <label for="state" class="form-label"><h6>State</h6></label>
    <select id="state" name="state" class="form-select">
      <option selected>Choose...</option>
      <option>Andhra Pradesh</option>
      <option>Arunachal Pradesh</option>
      <option>Assam</option>
      <option>Bihar</option>
      <option>Karnataka</option>
      <option>Kerala</option>
      <option>Chhattisgarh</option>
      <option>Uttar Pradesh</option>
      <option>Goa</option>
      <option>Gujarat</option>
      <option>Haryana</option>
      <option>Himachal Pradesh</option>
      <option>Jammu and Kashmir</option>
      <option>Jharkhand</option>
      <option>West Bengal</option>
      <option>Madhya Pradesh</option>
      <option>Maharashtra</option>
      <option>Manipur</option>
      <option>Meghalaya</option>
      <option>Mizoram</option>
      <option>Nagaland</option>
      <option>Orissa</option>
      <option>Punjab</option>
      <option>Rajasthan</option>
      <option>Sikkim</option>
      <option>Tamil Nadu</option>
      <option>Telangana</option>
      <option>Tripura</option>
      <option>Uttarakhand</option>
    </select>
  </div>
  <div class="col-md-6 col-auto">
  <br>
    <button type="submit" name="submit" class="btn submit btn-block">Sign in</button>
  </div>
  <div class="col-md-6 col-auto">
  <p><h6>
           Already have an account?
           <a href="login.php"> Login Here</a></h6>
           </p>
           </div>
</form>
</div>
        
        </div>
      </div>
  
     
  
  
      <?php include "./footer.php"; ?>
  
    
                <!-- Option 1: Bootstrap Bundle with Popper -->
                <script src="bootstrap/js/bootstrap.bundle.min.js" ></script>
  
  </body>
  </html>