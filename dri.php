<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drinks</title>
    <link rel="stylesheet" href="Item_final.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

        <div class="img item">
            <img src="image/Chaas(ButterMilk).jpg" alt="ButterMilk"> <br>
            <div class="middle"> ButterMilk <small>RS.20 </small>
            <form action="punjabi.php" method="post">
                    <input type="number" name="item_qunt" class="quanOfItem" placeholder="Enter Quantity"></input>
                    <input type="hidden" name="item_id" class="itemId" value="40"></input>
                    <input type="hidden" name="item_cat" value="3"></input>
                    <br> <input type="submit" value="Add to Cart" class="btn">
                </form>
                </form>
            </div>
        </div>


        <div class=" item">
            <img src="image/Coca Cola.jpg" alt="Coca Cola"> <br>
            <div class="middle">Coca Cola <small>RS.60 </small>&nbsp;
                <form action="punjabi.php" method="post">
                    <input type="number" name="item_qunt" class="quanOfItem" placeholder="Enter Quantity"></input>
                    <input type="hidden" name="item_id" class="itemId" value="41"></input>
                    <input type="hidden" name="item_cat" value="3"></input>
                    <br> <input type="submit" value="Add to Cart" class="btn">
                </form>
            </div>
        </div>

        <div class=" item">
            <img src="image/Maaza.jpg" alt="Maaza"> <br>
            <div class="middle">Maaza  <small>RS.40 </small><br>
                <form action="punjabi.php" method="post">
                    <input type="number" name="item_qunt" class="quanOfItem" placeholder="Enter Quantity"></input>
                    <input type="hidden" name="item_id" class="itemId" value="42"></input>
                    <input type="hidden" name="item_cat" value="3"></input>
                    <br> <input type="submit" value="Add to Cart" class="btn">
                </form>
            </div>
        </div>
        <div class=" item">
            <img src="image/Minute maid.jpg" alt="Minute maid"> <br>
            <div class="middle"> Minute maid <small>RS.70 </small>
                <form action="punjabi.php" method="post">
                    <input type="number" name="item_qunt" class="quanOfItem" placeholder="Enter Quantity"></input>
                    <input type="hidden" name="item_id" class="itemId" value="43"></input>
                    <input type="hidden" name="item_cat" value="3"></input>
                    <br> <input type="submit" value="Add to Cart" class="btn">
                </form>
            </div>
        </div>
        <div class=" item">
            <img src="image/Pepsi Blank.jpg" alt="Pepsi Blank"> <br>
            <div class="middle"> Pepsi Black <small>RS.80 </small>
                <form action="punjabi.php" method="post">
                    <input type="number" name="item_qunt" class="quanOfItem" placeholder="Enter Quantity"></input>
                    <input type="hidden" name="item_id" class="itemId" value="44"></input>
                    <input type="hidden" name="item_cat" value="3"></input>
                    <br> <input type="submit" value="Add to Cart" class="btn">
                </form>
            </div>
        </div>
        <div class=" item">
            <img src="image/Red Bull Energy Drink.jpg" alt="Red Bull Energy Drink"> <br>
            <div class="middle">Energy Drink <small>RS.150 </small>
                <form action="punjabi.php" method="post">
                    <input type="number" name="item_qunt" class="quanOfItem" placeholder="Enter Quantity"></input>
                    <input type="hidden" name="item_id" class="itemId" value="45"></input>
                    <input type="hidden" name="item_cat" value="3"></input>
                    <br> <input type="submit" value="Add to Cart" class="btn">
                </form>
            </div>
        </div>
        <div class=" item">
            <img src="image/Sprite.jpg" alt="Sprite"> <br>
            <div class="middle"> Sprite <small>RS.60 </small><br>
                <form action="punjabi.php" method="post">
                    <input type="number" name="item_qunt" class="quanOfItem" placeholder="Enter Quantity"></input>
                    <input type="hidden" name="item_id" class="itemId" value="46"></input>
                    <input type="hidden" name="item_cat" value="3"></input>
                    <br> <input type="submit" value="Add to Cart" class="btn">
                </form>
            </div>
        </div>
        <div class=" item">
            <img src="image/Sweet Lassi.jpg" alt="Sweet Lassi"> <br>
            <div class="middle">Sweet Lassi <small>RS.120 </small>
                <form action="punjabi.php" method="post">
                    <input type="number" name="item_qunt" class="quanOfItem" placeholder="Enter Quantity"></input>
                    <input type="hidden" name="item_id" class="itemId" value="47"></input>
                    <input type="hidden" name="item_cat" value="3"></input>
                    <br> <input type="submit" value="Add to Cart" class="btn">
                </form>
            </div>
        </div>
        <div class=" item">
            <img src="image/Trpoicana Orange Juice.jpg" alt="Trpoicana Orange Juice"> <br>
            <div class="middle"> Trpoicana Orange Juice<small>RS.90 </small>
                <form action="punjabi.php" method="post">
                    <input type="number" name="item_qunt" class="quanOfItem" placeholder="Enter Quantity"></input>
                    <input type="hidden" name="item_id" class="itemId" value="48"></input>
                    <input type="hidden" name="item_cat" value="3"></input>
                    <br> <input type="submit" value="Add to Cart" class="btn">
                </form>
            </div>
        </div>
        <div class=" item">
            <img src="image/Cold Coco.jpg" alt="Cold Coco"> <br>
            <div class="middle"> Cold Coco <small>RS.100 </small>
                <form action="punjabi.php" method="post">
                    <input type="number" name="item_qunt" class="quanOfItem" placeholder="Enter Quantity"></input>
                    <input type="hidden" name="item_id" class="itemId" value="49"></input>
                    <input type="hidden" name="item_cat" value="3"></input>
                    <br> <input type="submit" value="Add to Cart" class="btn">
                </form>
            </div>
        </div>
        <div class=" item">
            <img src="image/Cold Coffee.jpg" alt="Cold Coffee"> <br>
            <div class="middle">Cold Coffee <small>RS.120 </small>
                <form action="punjabi.php" method="post">
                    <input type="number" name="item_qunt" class="quanOfItem" placeholder="Enter Quantity"></input>
                    <input type="hidden" name="item_id" class="itemId" value="50"></input>
                    <input type="hidden" name="item_cat" value="3"></input>
                    <br> <input type="submit" value="Add to Cart" class="btn">
                </form>
            </div>
        </div>
        <div class=" item">
            <img src="image/herbal Tea.jpg" alt="herbal Tea"> <br>
            <div class="middle"> herbal Tea <small>RS.50 </small>
                <form action="punjabi.php" method="post">
                    <input type="number" name="item_qunt" class="quanOfItem" placeholder="Enter Quantity"></input>
                    <input type="hidden" name="item_id" class="itemId" value="51"></input>
                    <input type="hidden" name="item_cat" value="3"></input>
                    <br> <input type="submit" value="Add to Cart" class="btn">
                </form>
            </div>
        </div>
        <div class=" item">
            <img src="image/Hot Chocolate.jpg" alt="Hot Chocolate"> <br>
            <div class="middle">Hot Chocolate <small>RS.150 </small>
                <form action="punjabi.php" method="post">
                    <input type="number" name="item_qunt" class="quanOfItem" placeholder="Enter Quantity"></input>
                    <input type="hidden" name="item_id" class="itemId" value="52"></input>
                    <input type="hidden" name="item_cat" value="3"></input>
                    <br> <input type="submit" value="Add to Cart" class="btn">
                </form>
            </div>
        </div>
        <div class=" item">
            <img src="image/Lemon Soda.jpg" alt="Lemon Soda"> <br>
            <div class="middle">Lemon Soda <small>RS.25 </small>
                <form action="punjabi.php" method="post">
                    <input type="number" name="item_qunt" class="quanOfItem" placeholder="Enter Quantity"></input>
                    <input type="hidden" name="item_id" class="itemId" value="53"></input>
                    <input type="hidden" name="item_cat" value="3"></input>
                    <br> <input type="submit" value="Add to Cart" class="btn">
                </form>
            </div>
        </div>
        <div class=" item">
            <img src="image/Tea.jpg" alt="Tea"> <br>
            <div class="middle">Tea <small>RS.20 </small>
                <form action="punjabi.php" method="post">
                    <form action="punjabi.php" method="post">
                    <input type="number" name="item_qunt" class="quanOfItem" placeholder="Enter Quantity"></input>
                    <input type="hidden" name="item_id" class="itemId" value="54"></input>
                    <input type="hidden" name="item_cat" value="3"></input>
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