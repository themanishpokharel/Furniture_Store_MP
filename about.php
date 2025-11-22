<?php

@include 'config.php';

session_start();


if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/new.css">

</head>
<body>
   
<?php @include 'header.php'; ?>



<div class="Offer">
    <div class="small-container">
        <div class="row">
            <div class="col-2">
                <img src="photo/modular furniture.jpg" class="offer-img">
            </div>
             <div class="col-2">
                 <p>Exclusively Available On Online Furniture Store</p>
                 <h1>The Modular Office</h1>
                 <small>Show-off your new modern and modular office to your visitors!<br>
                    <br>
        The modular workstation from GeeKen combines maximal comfort, high quality and excellent ergonomics and functional properties.This stylish and modern workstation is a real good office partner in any office environment.<br>
</small>

             </div>
        </div>
    </div>
</div>
  <div class="line">
      <hr>
  </div>
  <div class="Offer">
    <div class="small-container">
        <div class="row">
            <div class="col-2">
                <img src="photo/modular furniture.jpg" class="offer-img">
            </div>
             <div class="col-2">
                 <p>Exclusively Available On Online Furniture Store</p>
                 <h1>The Modular Office</h1>
                 <small>Show-off your new modern and modular office to your visitors!<br>
                    <br>
        The modular workstation from GeeKen combines maximal comfort, high quality and excellent ergonomics and functional properties.This stylish and modern workstation is a real good office partner in any office environment.<br>
</small>

             </div>
        </div>
    </div>
</div>
  <div class="line">
      <hr>
  </div>



<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>