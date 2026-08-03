<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/register.css">
    
    <title>Document</title>
</head>
<body>

     <h1>Register</h1>

   <form action="" method="POST" class="register-form">

   <div>
    <label for="">Full Name</label>
    <input type="text" name="full_name">
   </div>

   <div>
    <label for="">Email</label>
    <input type="email" name="email">
   </div>

   <div>
    <label for="">Password</label>
    <input type="password" name="password">
   </div>
   
   <div class="register-btn">
     <button type="submit" name="register">Submit</button>
   </div>
    
   </form>

   <?php
        
        include("../../config/db.php");

        if(isset($_POST['register'])){
            $full_name=$_POST['full_name'];
            $email=$_POST['email'];
            $password=$_POST['password'];

            $check="select * from users where email='$email'";
            $result=mysqli_query($conn,$check);

            if (mysqli_num_rows($result)>0){
                echo "Email Already Exixts";
            }else{

            $sql=("insert into users(full_name,email,password) values ('$full_name','$email','$password')");

            if(mysqli_query($conn,$sql)){

             echo "Form submitted Successfully";
        }else{
            echo "Register failed";
        }
      }
    }
   ?>
    
</body>
</html>