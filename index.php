<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            text-align:center
        }
        .main-div{
            margin-top:80px;
            display:flex;
            flex-direction:column;
            align-items:center;
            justify-content:center;
        }

        .main-div a{
            text-decoration:none;
            font-size:24px;
            margin-top:10px;
            color:black;
        }
    </style>
</head>
<body>
    <h1>Welcome to Our Shop</h1>
    <div class="main-div">
        <a href="./src/auth/login.php">Login</a>
        <a href="./src/auth/register.php">Sign up</a>
        <a href="./src/user/home.php">Guest</a>
    </div>
</body>
</html>