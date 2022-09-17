<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punjabi Dishes</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Item_final.css">
</head>

<body>
<!-- for navigation bar -->
    <?php
    include '_nav.php';
    ?>
    <div class="leftmenu">
        <div class="title">Category
            <hr>
        </div>
        <div class="leftside">
            <ul class="menu">
            <li> <a href="punja.php">Punjabi</a> </li>
                <li> <a href="kath.php">Kathiyawadi</a> </li>
                <li> <a href="dri.php">Cold drinks</a> </li>
                <li> <a href="sup.php">Soups</a> </li>
                <li> <a href="swe.php">Sweets</a> </li>
            </ul>
        </div>
    </div>


    <div class="main">

        <div class="item">
            <img src="image/Rajma Chawal.jpeg" alt="Rajma Chawal"> <br>
            <div class="middle"> Rajma Chawal <small>RS.100 </small>
                <form action="punjabi.php" method="post">
                    <input type="number" name="item_qunt" class="quanOfItem" placeholder="Enter Quantity"></input>
                    <input type="hidden" name="item_id" class="itemId" value="1"></input>
                    <input type="hidden" name="item_cat" value="1"></input>
                    <br> <input type="submit" value="Add to Cart" class="btn">
                </form>
            </div>
        </div>

        


        <div class=" item">
            <img src="image/Paneer Tika.jpeg" alt="Paneer Tika"> <br>
            <div class="middle"> Paneer Tika <small>RS.120 </small>
                <form action="punjabi.php" method="post">
                    <input type="number" name="item_qunt" class="quanOfItem" placeholder="Enter Quantity"></input>
                    <input type="hidden" name="item_id" class="itemId" value="2"></input>
                    <input type="hidden" name="item_cat" value="1"></input>
                    <br> <input type="submit" value="Add to Cart" class="btn">
                </form>
            </div>
        </div>

        <div class=" item">
            <img src="image/Chole-Bhature.jpeg" alt="Chole-Bhature"> <br>
            <div class="middle"> Chole-Bhature <small>RS.150 </small>
                <form action="punjabi.php" method="post">
                    <input type="number" name="item_qunt" class="quanOfItem" placeholder="Enter Quantity"></input>
                    <input type="hidden" name="item_id" class="itemId" value="3"></input>
                    <input type="hidden" name="item_cat" value="1"></input>
                    <br> <input type="submit" value="Add to Cart" class="btn">
                </form>
            </div>
        </div>

        <div class=" item">
            <img src="image/Dal Makhani.jpeg" alt="Dal Makhani"> <br>
            <div class="middle"> Dal Makhani <small>RS.170 </small>
                <form action="punjabi.php" method="post">
                    <input type="number" name="item_qunt" class="quanOfItem" placeholder="Enter Quantity"></input>
                    <input type="hidden" name="item_id" class="itemId" value="4"></input>
                    <input type="hidden" name="item_cat" value="1"></input>
                    <br> <input type="submit" value="Add to Cart" class="btn">
                </form>
            </div>
        </div>

        <div class=" item">
            <img src="image/Kaju Curry.jpeg" alt="Kaju Curry"> <br>
            <div class="middle"> Kaju Curry <small>RS.170 </small>
                <form action="punjabi.php" method="post">
                    <input type="number" name="item_qunt" class="quanOfItem" placeholder="Enter Quantity"></input>
                    <input type="hidden" name="item_id" class="itemId" value="5"></input>
                    <input type="hidden" name="item_cat" value="1"></input>
                    <br> <input type="submit" value="Add to Cart" class="btn">
                </form>
            </div>
        </div>

        <div class=" item">
            <img src="image/Malai Kofta.jpeg" alt="Malai Kofta"> <br>
            <div class="middle"> Malai Kofta <small>RS.80 </small>
                <form action="punjabi.php" method="post">
                    <input type="number" name="item_qunt" class="quanOfItem" placeholder="Enter Quantity"></input>
                    <input type="hidden" name="item_id" class="itemId" value="6"></input>
                    <input type="hidden" name="item_cat" value="1"></input>
                    <br> <input type="submit" value="Add to Cart" class="btn">
                </form>
            </div>
        </div>

        <div class=" item">
            <img src="image/Palak Paneer.jpeg" alt="Palak Paneer"> <br>
            <div class="middle"> Palak Paneer <small>RS.210 </small>
                <form action="punjabi.php" method="post">
                    <input type="number" name="item_qunt" class="quanOfItem" placeholder="Enter Quantity"></input>
                    <input type="hidden" name="item_id" class="itemId" value="7"></input>
                    <input type="hidden" name="item_cat" value="1"></input>
                    <br> <input type="submit" value="Add to Cart" class="btn">
                </form>
            </div>
        </div>

        <div class=" item">
            <img src="image/Paneer Butter Masala.jpeg" alt="Paneer Butter Masala" class="change"> <br>
            <div class="middle">Paneer Butter Masala <small>RS.200 </small>
                <form action="punjabi.php" method="post">
                    <input type="number" name="item_qunt" class="quanOfItem" placeholder="Enter Quantity"></input>
                    <input type="hidden" name="item_id" class="itemId" value="8"></input>
                    <input type="hidden" name="item_cat" value="1"></input>
                    <br> <input type="submit" value="Add to Cart" class="btn">
                </form>
            </div>
        </div>

        <div class=" item">
            <img src="image/Paneer Makhani.jpeg" alt="Paneer Makhani"> <br>
            <div class="middle"> Paneer Makhani <small>RS.110 </small>
                <form action="punjabi.php" method="post">
                    <input type="number" name="item_qunt" class="quanOfItem" placeholder="Enter Quantity"></input>
                    <input type="hidden" name="item_id" class="itemId" value="9"></input>
                    <input type="hidden" name="item_cat" value="1"></input>
                    <br> <input type="submit" value="Add to Cart" class="btn">
                </form>
            </div>
        </div>

        <div class=" item">
            <img src="image/Paneer Paratha.jpeg" alt="Paneer Paratha"> <br>
            <div class="middle"> Paneer Paratha <small>RS.120 </small>
                <form action="punjabi.php" method="post">
                    <input type="number" name="item_qunt" class="quanOfItem" placeholder="Enter Quantity"></input>
                    <input type="hidden" name="item_id" class="itemId" value="10"></input>
                    <input type="hidden" name="item_cat" value="1"></input>
                    <br> <input type="submit" value="Add to Cart" class="btn">
                </form>
            </div>
        </div>

        <div class=" item">
            <img src="image/Punjabi Dal Tadka.jpeg" alt="Punjabi Dal Tadka"> <br>
            <div class="middle"> Punjabi Dal Tadka <small>RS.155 </small>
                <form action="punjabi.php" method="post">
                    <input type="number" name="item_qunt" class="quanOfItem" placeholder="Enter Quantity"></input>
                    <input type="hidden" name="item_id" class="itemId" value="11"></input>
                    <input type="hidden" name="item_cat" value="1"></input>
                    <br> <input type="submit" value="Add to Cart" class="btn">
                </form>
            </div>
        </div>

        <div class=" item">
            <img src="image/Chole.jpeg" alt="Chole"> <br>
            <div class="middle"> Chole <small>RS.80 </small>
                <form action="punjabi.php" method="post">
                    <input type="number" name="item_qunt" class="quanOfItem" placeholder="Enter Quantity"></input>
                    <input type="hidden" name="item_id" class="itemId" value="12"></input>
                    <input type="hidden" name="item_cat" value="1"></input>
                    <br> <input type="submit" value="Add to Cart" class="btn">
                </form>
            </div>
        </div>

    </div>


 <!-- for footer -->   
    <?php
        include 'Footer.php';
    ?>

</body>

</html>