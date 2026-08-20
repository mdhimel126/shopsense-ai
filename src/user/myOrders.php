<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/navbar.css">
        <link rel="stylesheet" href="../../css/footer.css">

    <title>Document</title>
    <style>
        body{
            background-color:#d1d9d9
        }
        .main{
            width:30%;
            margin:10px auto;
            text-align:center;
            background-color:#e5ebea;
            border-radius:15px;
            padding:30px;
            margin-top:30px;
            display:flex;
            flex-direction:column;
            justify-content:center;
            gap:30px;
        }

    </style>
</head>
<body>
    
<?php include("../../includes/navbar.php"); 
  include("../../config/db.php");

?>

<?php $myId=$_SESSION['user_id'] ;
      $query="select orders.*,products.name as product_name,products.price as product_price from orders join products on orders.product_id=products.id where user_id='$myId'";
      $data=mysqli_query($conn,$query);

?>
    
<div class="main">
    <h2>My Orders</h2>
    <div>
        <?php $i=1; ?>
       <?php  if ($data && mysqli_num_rows($data) >0 ):   ?>    
        <?php while($result=mysqli_fetch_assoc($data)):  ?>
            <h3>Order <?php echo $i++; ?></h3>
        <p>Product id: <?php echo $result['product_id'] ?></p>
        <p>Name: <?php echo $result['product_name']." (".$result['quantity'].")" ?> </p>
        <p>Price: <?php echo $result['total_price'] ?> </p>

        <br>
        <br>

        <?php endwhile; ?>

        <?php  endif; ?>
        
    </div>
</div>

</body>
</html>