<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
       <link rel="stylesheet" href="../../css/navbar.css">
        <link rel="stylesheet" href="../../css/footer.css">

    <style>
        body{
            background-color:#d1d9d9;

        }
        .main{
            width:30%;
            margin:10px auto;
            background-color:#e5ebea;
            border-radius:15px;
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
            padding:30px;
            margin-top:30px;

        }
        .main h2{
            margin-top:20px;
            margin-bottom:25px;

        }
        .main div{
            display:flex;
            flex-direction:column;
            gap:15px;
        }
    </style>
</head>
<body>
<?php
    include("../../config/db.php");
    $a=$_SESSION['user_id'];
    $query="select * from users where id='$a'";
    $data=mysqli_query($conn,$query);
    $user=mysqli_fetch_assoc($data);

    ?>
<?php
    include('../../includes/navbar.php')
    ?>

<div class="main">
    <h2>My Profile</h2>
    <div>
        <p>Id:<?php echo $a ?></p>
        <p>Name: <?php echo $user['full_name'] ?></p>
        <p>Email: <?php echo $user['email'] ?> </p>
        <p>Role: <?php echo $user['role'] ?> </p>
        <p>Total Orders:</p>
    </div>
</div>


    
</body>
</html>