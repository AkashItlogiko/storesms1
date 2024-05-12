<?php include('connection.php');?>

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
  <title>Add Category</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
     />
</head>
<body>

<div class="container bg-light">
<div class="container-foulid border-bottom border-success"><!--topbar-->

<?php include('topbar.php'); ?>

  </div>

</div>
</div><!--end of topbar-->
<div class="container-foulid">
<div class="row">
<div class="col-sm-3 bg-light p-4 m-0"><!--Start of left bar--> 
<?php include('leftbar.php')  ?>

</div><!--end of Left--> 
<div class="col-sm-9 border-start border-success"><!--Start of Right bar--> 
 
<div class="container p-4 m-4">

<?php
if(isset($_GET['category_name'])){
 $category_name = $_GET['category_name'];
 $category_entrydate = $_GET['category_entrydate'];

 $sql="INSERT INTO category(category_name,category_entrydate) VALUES(' $category_name ','$category_entrydate')";

 if($conn->query($sql)==TRUE){
    echo "Data Inserted!";
 }else{
    echo "Data Not Inserted!";
 }
}

?>

  <form action="add_category.php" method="GET">
    Category :<br>
   <input type="text" name="category_name"><br><br>

   Category Entry Date :<br>
   <input type="date" name="category_entrydate"><br><br>
   <input type="submit" value="submit" class="btn btn-success">

  </form>

</div><!--end of container--> 

</div><!--end of Right--> 
</div><!--end of Row--> 
</div>
<div class="container-foulid border-top border-success">
<?php include ('bottombar.php'); ?>
</div>
</div><!--end of container--> 



</body>
</html>

<?php  
}else{
  header('location:login.php');

}

?>