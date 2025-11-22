<?php

@include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login.php');
};
 include 'admin_header.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

      <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/admin_style.css">

</head>
<body>
    
    <div class="container">
     <div class="row justify-content-center">
     <div class="col-md-12">
      <div class="card mt-5">
     <div class="card-header">
              
     </div>
   <div class="card-body">
                    
    <form action="" method="GET">
    <div class="row ">
       <div class="col-md-4">
     <div class="form-group">
     <label>From Date</label>
    <input type="date" name="from_date" value="<?php if(isset($_GET['from_date'])){ echo $_GET['from_date']; } ?>" class="form-control">
</div>
</div>
<div class="col-md-4">
 <div class="form-group">
 <label>To Date</label>
<input type="date" name="to_date" value="<?php if(isset($_GET['to_date'])){ echo $_GET['to_date']; } ?>" class="form-control">
        </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
     <label>Click to Filter</label> <br>
    <button type="submit" class="btn btn-primary">Filter</button>
    </div>
    </div>
    </div>
     </form>
     </div>
     </div>

 <div class="card mt-4">
  <div class="card-body">
 <table class="table table-borderd">
 <thead>
      <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        </tr>
      </thead>
    <tbody>
                            
 <?php 
                            

if(isset($_GET['from_date']) && isset($_GET['to_date']))
 {
   $from_date = $_GET['from_date'];
     $to_date = $_GET['to_date'];
                            
    $select_orders = mysqli_query($conn, "SELECT * FROM `orders` WHERE placed_on BETWEEN '$from_date' AND '$to_date' ") or die('query failed');
    if(mysqli_num_rows($select_orders) > 0){
    while($fetch_orders = mysqli_fetch_assoc($select_orders)){
 ?>

   // $query = "SELECT * FROM orders WHERE placed_on BETWEEN '$from_date' AND '$to_date' ";
   // $query_run = mysqli_query($con, $query);

                                   
    <tr>
     <tr class="active">
     <td> <?php echo $fetch_orders['user_id']; ?></td>  
     <td> <?php echo $fetch_orders['placed_on']; ?></td>
    <td> <?php echo $fetch_orders['name']; ?></td>
    <td><?php echo $fetch_orders['number']; ?></td>
                                             
  <td><?php echo $fetch_orders['address']; ?></td>
 <td><?php echo $fetch_orders['total_products']; ?><br>
        <?php echo $fetch_orders['total_price']; ?>/-</td>
      <td>    
  </tr>
<?php
         }
}else{
    echo '<p class="empty">no orders placed yet!</p>';
  }
   }
     ?>
    </tbody>
      </table>
        </div>
        </div>

        </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>