<?php
    include '_nav.php';
    ?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
    <style>
    .img2 {
        float: right;
    }
    .services_home
    {
        width:100%;
        height:250px;
        border:1px solid green;
        background:#9b9898;
        display:flex;
        align-items:center;
        justify-content:center;
    }
    .item
    {
        margin:5px;
        padding:2px;
        width:200px;
        height:100px;
        border:2px solid Black;
        border-radius:25px;
        text-align:center;
        background:green;
        color:white;
    }
    .midle
    {
        text-align:center;
        font-size:50px;
        color:red;
    }
    .details
    {
        background:#9b9898;
        height:350px;
    }
    .image img
    {
        width:300px;
        float:left; 
        height:300px;
        margin:25px;
    }
    </style>

    <title>Home page</title>
</head>

<body>
    <?php
        if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="true")
        {
          echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
          <strong>Success!</strong> You can now login.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        }
        if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="false")
        {
          echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
          <strong>Success!</strong> '.$_GET['error'].'
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        }
        // if($login)
        // {
        //     echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        //     <strong>Success!</strong>your are logged in
        //     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        //     </div>';
        // }
    // if($showError)
    //     {
    //         echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    //         <strong>Error!</strong> '.$showError.'
    //         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    //         </div>';
    //     }
    ?>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                aria-label="Slide 4"></button>

        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image/img12.avif" class="d-block w-100" alt="..." width="100" height="700">
            </div>
            <div class="carousel-item">
                <img src="image/img03.jpg" class="d-block w-100" alt="..." width="100" height="700">
            </div>
            <div class="carousel-item">
                <img src="image/img08.jpg" class="d-block w-100" alt="..." width="100" height="700">
            </div>
            <div class="carousel-item">
                <img src="image/img11.avif" class="d-block w-100" alt="..." width="100" height="700">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
   
    </div>

    <h1 class="midle">Our Services</h1>
    <div class="services_home">
        <div class="item">
            <p>Online Food Ordering</p>
        </div>

        <div class=" item">
            <p>Book a restaurant</p>
        </div>
        <div class="item">
            <p>Meeting and Party halls</p>

        </div>

        <div class="item">
            <p>Marriage Hall</p>
        </div>
    </div>
    <h1 class="midle">Our Chefs</h1>

    <div class="details">
        <!-- <p style="color:white;">&nbsp; &nbsp;  We are Providing Good Quality of Taste to the Society Since 2001.People are Satisfied With taste and Quality By us.We ensure that you like Our  Mouth-watering taste.History knows us very Well.Our chefs are very Famous across World.</p> -->
        <div class="image">
            <img src="image/chef01.webp" alt="Chef">
        </div>
        <div class="image">
            <img src="image/chef02.jpg" alt="Chef">
        </div>
        <div class="image">
            <img src="image/chef03.jpg" alt="Chef">
        </div>
        <div class="image">
            <img src="image/chef04.jpg" alt="Chef">
        </div>
    </div>

    </div>

    <?php include "Footer.php"; ?>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>