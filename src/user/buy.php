<?php session_start(); 
  include("../../config/db.php");

  if(!isset($_SESSION['user_id'])){
    header("Location:../auth/login.php");
    exit();
  }

  $user_id=$_SESSION['user_id'];
  $product_id=$_POST['product_id'];
  $quantity=$_POST['quantity'];

  $query="select * from products where id='$product_id'";
  $data=mysqli_query($conn,$query);

  $product=mysqli_fetch_assoc($data);

  $total_price=$product['price']* $quantity;

  $query="insert into orders (user_id,product_id,quantity,total_price) values ('$user_id','$product_id','$quantity','$total_price')";

  $result=mysqli_query($conn,$query);

  if($result){
    echo "Successfull";
  }else{
    echo "sorry";
  }

?>

