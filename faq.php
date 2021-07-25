<?php 
require_once "config.php";
if ($_SERVER['REQUEST_METHOD'] == "POST"){
$question= $_POST['question'];
$sql="INSERT INTO ques (question) VALUE ('$question')";
if(mysqli_query($conn,$sql)){
    header("location: index.php");
}
else{
    header("location: login.php");
}
}
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
  
    <title>Accordion</title>
</head>
<body>
<?php include "./navbar.php"; ?>
<div class="faq">
    <div class="container">
        <div class="row gap">
        <div class="col-md-4"></div>
          <div class="col-md-4 ac">
              <form method="post">
             <div class="cb">  <h1>Frequently Asked <br> Questions</h1> </div>
             <input type="text" class="form-control" name="question" id="inputEmail4" placeholder="What's Your Question ?">
             <br><button type="submit" class="btn btn-primary">Submit</button>
           </div></form>
           <div class="col-md-12">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item mb-3">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What are the benefits of using Wondrous RenTrip ?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                One of the major benefits of using Wondrous RenTrip is freedom from commitments. You can easily explore bicycles, and choose the duration of relationship with every bike and once you have found "The One" you can choose our ownership model for a serious commitment.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-3">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                What is the Payment Scheme for Wondrous RenTrip ?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Payment Scheme of Wondrous RenTrip is based on trust. For renting a bicycle you have to deposite the amount almost same as the cost of the bicycle. And after returning the bicycle we will return the amount by cutting the renting price of the bicycle.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-3">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                How do I register with Wondrous RenTrip ?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              You can register on our website. All you need to provide is your basic details like name, address, contact number and email address to register with us.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-3">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                How do I reach my Pickup Station ?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                               You can reach the pickup station by clicking on the link next to the pickup station address to open maps, which will provide you directions and assist in reaching the pickup station. <br> Our station timings are 9am to 9pm, open all days, hence we would request you to not to be late to reach the station. <br>  For any emergencies regarding pickup, or the station head absent, contact our customer care.
                            </div>
                        </div>
                    </div><div class="accordion-item mb-3">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Can i drop off my bicycle at a different station ?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            Due to the station and usage policies, you should drop off the bike at the station where you picked it up, and cannot drop it off at different station.<br>You can always contact our customer care in case of any emergencies and we would like to assist.
                            </div>
                        </div>
                    </div>
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