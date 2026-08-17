<?php  session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../css/login.css">
    <title>Document</title>
</head>
<body>

<h1>Login</h1>
    
    <form action="" method="POST" class="login-form">

    <div>
        <label for="">Email</label>
        <input type="text" placeholder="Enter your email" name="email">
    </div>

    <div>
        <label for="">Password</label>
        <input type="text" placeholder="Enter your password" name="password">
         <a href="" id="forget-pass">Forget password</a>
    </div>

    <div>
        <button type="submit" name="login">Login</button>
    </div>
    </form>


    <?php

        include("../../config/db.php");

        if(isset($_POST['login'])){
            $email=$_POST['email'];
            $password=$_POST['password'];

            $query=("select * from users where email ='$email' && password ='$password'");

            $data=mysqli_query($conn,$query);

            $total=mysqli_num_rows($data);

            if($total==1){

                $user=mysqli_fetch_assoc($data);
                $_SESSION['user_id']=$user['id'];
                header("Location:../user/home.php");
                exit();
            }else{
                echo "Invalid password given";
            }
        }

?>
</body>
</html>