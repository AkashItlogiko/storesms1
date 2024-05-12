<?php
session_start();
  
$user_first_name=$_SESSION['user_first_name'];
$user_last_name=$_SESSION['user_last_name'];

if(!empty($user_first_name) && !empty($user_last_name)){



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Store Management System | SMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
     />
</head>

<body>
<div class="container bg-light">
<div class="container-foulid border-bottom border-success"><!--topbar-->

<?php include ('topbar.php');?>

</div><!--end of topbar-->
<div class="container-foulid">
<div class="row">
<div class="col-sm-3 bg-light p-0 m-0"><!--Start of left bar--> 

<?php include ('leftbar.php');?>

</div><!--end of Left--> 
<div class="col-sm-9 border-start border-success"><!--Start of Right bar--> 

 <div class="row p-4">
  <div class="col-sm-3">
    <a href="add_category.php"><i class="fa-solid fa-folder-plus fa-5x text-success"></i></a>
    <p>Add Category</p>
  </div>
  <div class="col-sm-3">
   <a href="list_of_category.php"><i class="fa-solid fa-folder-open fa-5x text-success"></i></a>
       <p>Category List</p>
  </div>
  <div class="col-sm-3">
<a href="add_product.php"><i class="fa-solid fa-box-open fa-5x text-success"></i></a>
       <p>Add Product</p>
  </div>
  <div class="col-sm-3">
 <a href="list_of_product.php"><i class="fa-solid fa-stream  fa-5x text-success"></i></a>
       <p>Product List</p>
  </div>
 </div>
<hr/>

 <div class="row p-4">
  <div class="col-sm-3">
    <a href="add_store_product.php"><i class="fa-solid fa-trash-restore fa-5x text-success"></i></a>
    <p>Store Product</p>
  </div>
  <div class="col-sm-3">
   <a href="list_of_entry_product.php"><i class="fa-solid fa-box fa-5x text-success"></i></a>
       <p>Store Product List</p>
  </div>
  <div class="col-sm-3">
<a href="add_spend_product.php"><i class="fa-solid fa-plus-circle fa-5x text-success"></i></a>
       <p>Spend Product</p>
  </div>
  <div class="col-sm-3">
 <a href="list_of_spend_product.php"><i class="fa-solid fa-window-restore  fa-5x text-success"></i></a>
       <p>Spend Product List</p>
  </div>
 </div>
<hr/>

 <div class="row p-4">
  <div class="col-sm-3">
    <a href="report.php"><i class="fa-solid fa-chart-bar fa-5x text-success"></i></a>
    <p>Report</p>
  </div>
  <div class="col-sm-3">
 
  </div>
  <div class="col-sm-3">
 
  </div>
  <div class="col-sm-3">

  </div>
 </div>
<hr/>

 <div class="row p-4">
  <div class="col-sm-3">
    <a href="add_user.php"><i class="fa-solid fa-user-plus fa-5x text-success"></i></a>
    <p>Add User</p>
  </div>
  <div class="col-sm-3">
   <a href="list_of_users.php"><i class="fa-solid fa-users fa-5x text-success"></i></a>
    <p>User List</p>
  </div>
  <div class="col-sm-3">
 
  </div>
  <div class="col-sm-3">

  </div>
 </div>

</div><!--end of Right--> 
</div><!--end of Row--> 
</div>
<div class="container-foulid border-top border-success">
<?php include ('bottombar.php');?>
</div>
</div><!--end of container--> 

</body>
</html>

<?php  
}else{
  header('location:login.php');

}

?>