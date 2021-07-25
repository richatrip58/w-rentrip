<?php error_reporting(0);
require_once "config.php";
if ($_SERVER['REQUEST_METHOD'] == "POST"){
$name= $_POST['uname'];
$email= $_POST['email'];
$msg= $_POST['msg'];
if(empty($name) || empty($email) || empty($msg)){
    header('location:contact.php?error');
}
else{
    $sql="INSERT INTO messages (name, email, messages) VALUES ('$name','$email','$msg')";
    if(mysqli_query($conn,$sql)){
        header('location:contact.php?success');
    }
    else{
        header('location:contact.php?error1');
    }
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
   <link rel="stylesheet" href="fontawesome-free-5.15.3-web\fontawesome-free-5.15.3-web\css\all.css">
  
   
    

   <title>Contact Us</title>
  </head>
  <body>
      <div class="us">
  <?php include "./navbar.php"; ?> <div class="us">
<div class="container "><br>
<div class="row">
    <div class="col-lg-6 m-auto">
        <div class="contact">
            <div class="cont-title">
                <h2 class="text-center py-2">Contact Us</h2><hr>
            </div>
        <?php
              $mesg="";
              if(isset($_GET['error'])){
    $mesg="Please Fill in the Blanks";
    echo '<div class="alert alert-danger">'.$mesg.'</div>';}
    if(isset($_GET['success'])){
        $mesg="Your message has been sent";
        echo '<div class="alert alert-success">'.$mesg.'</div>';}
        if(isset($_GET['error1'])){
            $mesg="Something is wrong";
            echo '<div class="alert alert-danger">'.$mesg.'</div>';}
?>
            <div class="contact-body">
                <form method="POST">
                    <input type="text" name="uname" placeholder="Enter Your Name" class="form-control mb-2">
                    <input type="email" name="email" placeholder="Enter Your Email ID" class="form-control mb-2">
                    <textarea name="msg" class="form-control" placeholder="What's Your Message"></textarea>
                   <br> <button  type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

    
  <?php include "./footer.php"; ?>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="bootstrap/js/bootstrap.bundle.min.js" ></script>
        </div>
</body>
</html>