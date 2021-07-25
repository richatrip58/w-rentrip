<?php error_reporting(0);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" >
       <!--custom css-->
       <link rel="stylesheet" href="css/style.css">
    <!--fontawsome css-->
   <link rel="stylesheet" href="fontawesome-free-5.15.3-web\fontawesome-free-5.15.3-web\css\all.css">
    <title>Profile</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a href="index.php" id="logo" class="navbar-brand" style = "font-family: 'Lobster', cursive; font-size:30px;font-style:bold;" >Wondrous RenTrip</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
</button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" >
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
          <form action="logout.php" method="post">
          <button type="submit" class="btn btn-outline-light">Logout</button>
          </form>
        </div>
      </div>
    </nav>

<div class="abc"><br>
    <div class="row">
        <div class="container col-ms-12 xyz">
            <div class="leftbox">
                <nav>
                </nav>
            </div>
            <div class="rightbox">
                <div class="profile tabShow">
                  
                    <h1>Personal Info</h1>
                    <?php 
                    require_once "config.php";
                    session_start();
                    
                    $username=$_SESSION['username'];
                    $sql= "SELECT * FROM users WHERE username = '$username' ";
                    $result=mysqli_query($conn, $sql);
                    $result_check=mysqli_num_rows($result);
                    if($result_check > 0) {
                      while($row = mysqli_fetch_assoc($result)){
                   ?><form action="" method="POST">
                    <h2>Full Name</h2>
                    <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>">
                    <h2>Email</h2>
                    <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>">
                    <h2>Username</h2>
                    <input type="text" id="username" name="username" value="<?php echo $row['username']; ?>">
                    <h2>Contact No</h2>
                    <input type="tel" id="contact_no" name="contact_no" value="<?php echo $row['contact_no']; ?>">
                    <h2>Address</h2>
                    <input type="text" id="address" name="address" value="<?php echo $row['address']; ?>">
                    <h2>City</h2>
                    <input type="text" id="city" name="city" value="<?php echo $row['city']; ?>">
                    <h2>State</h2>
                    <input type="text" id="state" name="state" value="<?php echo $row['state'];  ?>">
                    <br> <br>
                    <input class="btnn" type="submit" name="submit" value="Update">
                      </form>
              <?php } }
              if ($_SERVER['REQUEST_METHOD'] == "POST"){
                include 'config.php';
                $name = $_POST["name"];
                $email = $_POST["email"];
                $contact_no = $_POST["contact_no"];
                $state = $_POST["state"];
                $city=$_POST["city"];
                $address=$_POST["address"];
                $query="UPDATE users SET name ='$name', email ='$email', contact_no = '$contact_no', address = '$address', city = '$city', state = '$state' WHERE username = '$username' ";
                $result=mysqli_query($conn, $query);
                if($result){
                  header("location:index.php");
                }              
                }  ?>
                </div>
            </div>
        </div>
    </div>
</div>    
<?php include "./footer.php"; ?>

   <!-- Option 1: Bootstrap Bundle with Popper -->
   <script src="bootstrap/js/bootstrap.bundle.min.js" ></script>
</body>
</html>
