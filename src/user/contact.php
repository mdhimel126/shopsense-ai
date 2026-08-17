<?php  session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link rel="stylesheet" href="../../css/navbar.css">
        <link rel="stylesheet" href="../../css/footer.css">

        <style>
            body{
                min-height:100vh;
                display:flex;
                flex-direction:column;
                background-color:#d1d9d9;
                gap:30px;
            }

            .contact-form{
                display:flex;
                flex-direction:column;
                align-items:center;
                margin-top:30px;
                gap:20px;
                width:25%;
                margin:auto;
                flex:1;
                background-color:#e5ebea;
                padding:15px;
                border-radius:15px;
                
            }
            .contact-form div{
                width:100%;
            }
            input,textarea{
                width:100%;
            }

        
            label{
                font-size:20px;
            }
        </style>

    <title>Document</title>
</head>
<body>
    <?php  include("../../includes/navbar.php")  ?>

    <form action="" method="" class="contact-form">

      
        <div>
            <label for="">Email</label>
            <br>
            <input type="text" placeholder="Enter your email" name="email">
        </div>

        <div>
            <label for="">Message Box</label>
            <br>
           <textarea name="" id="" rows="4"></textarea>
        </div>

        <div>
            <button type="submit" name="contact">Login</button>
        </div>
     
    </form>

    <?php include("../../includes/footer.php") ?>
</body>
</html>