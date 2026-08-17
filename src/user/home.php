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
        background-color:#d1d9d9;
    }
    .main{
        display:grid;
        grid-template-columns:7fr 3fr;
        /* gap:20px; */
    }
    .main2{
        display:grid;
        grid-template-columns:1fr 1fr 1fr;
    }
    .card{
        background-color:#e5ebea;
        border-radius:10px;
        margin:10px 10px 10px 10px;
    }
     
    .left{
        display:flex;
        padding:15px;
        gap:20px;
    }
    .left > div:first-child{
        margin-top:10px;
        display:flex;
        flex-direction:column;
        gap:20px;
    }
    .img-sky-blue{
        height:200px;
        width:250px;
    }

    .airburds-image{
        height:100px;
        width:120px;
    }
    .aside{
        display:flex;
        flex-direction:column;
        gap:5px;
    }
    .view-all{
        background-color:blue;
        padding:2px;
        border-radius:5px;
        color:white;
    }
    </style>
</head>
<body>

    <?php include('../../includes/navbar.php') ?>

     <div  class="main">
        <div class="left card">
            <div>
                <h2>Sequaia Inspiring <br> Musico</h2>
                <p>Lorem ipsum uasi nihil  impedit ut adipisci, velit voluptate </p>
                <button class="view-all">View All Products</button>
            </div>

            <div class="div-image">
                <img src="../../images/sky-blue-hero-zoom.webp" alt="This is image" class="img-sky-blue">
            </div>
        </div>


        <div class="aside">
            <div class="right card">
                <h3>Aitpods</h3>
                <img src="../../images/airpods-3-768x768.webp" alt="" class="airburds-image">
            </div>
            <div class="right card">
                <h3>Aitpods</h3>
                <img src="../../images/smart_watch.webp" alt="" class="airburds-image">
            </div>
        </div>
      </div>    











     <div class="main2">

         <div class="left card">
            <div class="div-image">
                <img src="../../images/powerbank.png" alt="" class="airburds-image">
            </div>
         </div>

         <div class="left card">
            <div class="div-image">
                <img src="../../images/mouse.webp" alt="" class="airburds-image">
            </div>
         </div>

         <div class="left card">
            <div class="div-image">
                <img src="../../images/keyboard.webp" alt="" class="airburds-image">
            </div>
         </div>



          <div class="left card">
            <div class="div-image">
                <img src="../../images/wireless_charger.webp" alt="" class="airburds-image">
            </div>
         </div>

         <div class="left card">
            <div class="div-image">
                <img src="../../images/grip_holder.webp" alt="" class="airburds-image">
            </div>
         </div>

         <div class="left card">
            <div class="div-image">
                <img src="../../images/gaming_controler.webp" alt="" class="airburds-image">
            </div>
         </div>


      </div>
   

     <?php  include("../../includes/footer.php") ?>
</body>
</html>