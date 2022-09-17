<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>કાઠિયાવાડી </title>
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
        <div class=" item">
            <img src="image/ભરેલા ભીંડા  નું  શાક.jpg" alt="ભરેલા ભીંડા  નું  શાક"> <br>
            <div class="middle"> ભરેલા ભીંડા નું શાક <small>RS.50 </small>
            <form action="punjabi.php" method="post">
                    <input type="number" name="item_qunt" class="quanOfItem" placeholder="Enter Quantity"></input>
                    <input type="hidden" name="item_id" class="itemId" value="20"></input>
                    <input type="hidden" name="item_cat" value="2"></input>
                    <br> <input type="submit" value="Add to Cart" class="btn">
                </form>
            </div>
        </div>
        

        <div class="img item">
            <img src="image/સુરતી પાપડી નું શાક.jpg" alt="સુરતી પાપડી નું શાક"> <br>
            <div class="middle"> સુરતી પાપડી નું શાક <small>RS.100 </small>
            <form action="punjabi.php" method="post">
                    <input type="number" name="item_qunt" class="quanOfItem" placeholder="Enter Quantity"></input>
                    <input type="hidden" name="item_id" class="itemId" value="21"></input>
                    <input type="hidden" name="item_cat" value="2"></input>
                    <br> <input type="submit" value="Add to Cart" class="btn">
                </form>
            </div>
        </div>

        <div class="img item">
            <img src="image/સાબુદાણા ખિચડી.jpg" alt="સાબુદાણા ખિચડી"> <br>
            <div class="middle"> સાબુદાણા ખિચડી <small>RS.120 </small>
            <form action="punjabi.php" method="post">
                    <input type="number" name="item_qunt" class="quanOfItem" placeholder="Enter Quantity"></input>
                    <input type="hidden" name="item_id" class="itemId" value="22"></input>
                    <input type="hidden" name="item_cat" value="2"></input>
                    <br> <input type="submit" value="Add to Cart" class="btn">
                </form>
            </div>
        </div>

        <div class="img item">
            <img src="image/મેથી પાપડ નું શાક.jpg" alt="મેથી પાપડ નું શાક"> <br>
            <div class="middle"> મેથી પાપડ નું શાક <small>RS.150 </small>
            <form action="punjabi.php" method="post">
                    <input type="number" name="item_qunt" class="quanOfItem" placeholder="Enter Quantity"></input>
                    <input type="hidden" name="item_id" class="itemId" value="23"></input>
                    <input type="hidden" name="item_cat" value="2"></input>
                    <br> <input type="submit" value="Add to Cart" class="btn">
                </form>
            </div>
        </div>

        <div class="img item">
            <img src="image/મકાઇ નું શાક.jpg" alt="મકાઇ નું શાક"> <br>
            <div class="middle"> મકાઇ નું શાક <small>RS.130 </small>
            <form action="punjabi.php" method="post">
                    <input type="number" name="item_qunt" class="quanOfItem" placeholder="Enter Quantity"></input>
                    <input type="hidden" name="item_id" class="itemId" value="24"></input>
                    <input type="hidden" name="item_cat" value="2"></input>
                    <br> <input type="submit" value="Add to Cart" class="btn">
                </form>
            </div>
        </div>



        <div class="img item">
            <img src="image/ગુજરાતી દાળ.jpg" alt="ગુજરાતી દાળ"> <br>
            <div class="middle"> ગુજરાતી દાળ <small>RS.70 </small>
            <form action="punjabi.php" method="post">
                    <input type="number" name="item_qunt" class="quanOfItem" placeholder="Enter Quantity"></input>
                    <input type="hidden" name="item_id" class="itemId" value="25"></input>
                    <input type="hidden" name="item_cat" value="2"></input>
                    <br> <input type="submit" value="Add to Cart" class="btn">
                </form>
            </div>
        </div>

        <div class="img item">
            <img src="image/ગુજરાતી કઢી.jpg" alt="ગુજરાતી કઢી"> <br>
            <div class="middle"> ગુજરાતી કઢી <small>RS.90 </small>
            <form action="punjabi.php" method="post">
                    <input type="number" name="item_qunt" class="quanOfItem" placeholder="Enter Quantity"></input>
                    <input type="hidden" name="item_id" class="itemId" value="26"></input>
                    <input type="hidden" name="item_cat" value="2"></input>
                    <br> <input type="submit" value="Add to Cart" class="btn">
                </form>
            </div>
        </div>

        <div class="img item">
            <img src="image/કાઠિયાવાડી ઢોકળી.jpg" alt="કાઠિયાવાડી ઢોકળી"> <br>
            <div class="middle"> કાઠિયાવાડી ઢોકળી<small>RS.125 </small>
            <form action="punjabi.php" method="post">
                    <input type="number" name="item_qunt" class="quanOfItem" placeholder="Enter Quantity"></input>
                    <input type="hidden" name="item_id" class="itemId" value="27"></input>
                    <input type="hidden" name="item_cat" value="2"></input>
                    <br> <input type="submit" value="Add to Cart" class="btn">
                </form>
            </div>
        </div>

        <div class="img item">
            <img src="image/કાજુ ગાંઠિયા  નું શાક.jpg" alt="કાજુ ગાંઠિયા  નું શાક"> <br>
            <div class="middle"> કાજુ ગાંઠિયા નું શાક <small>RS.100 </small>
            <form action="punjabi.php" method="post">
                    <input type="number" name="item_qunt" class="quanOfItem" placeholder="Enter Quantity"></input>
                    <input type="hidden" name="item_id" class="itemId" value="28"></input>
                    <input type="hidden" name="item_cat" value="2"></input>
                    <br> <input type="submit" value="Add to Cart" class="btn">
                </form>
            </div>
        </div>

        <div class="img item">
            <img src="image/બટાકા નું શાક.jpg" alt="બટાકા નું શાક"> <br>
            <div class="middle"> બટાકા નું શાક<small>RS.80 </small>
            <form action="punjabi.php" method="post">
                    <input type="number" name="item_qunt" class="quanOfItem" placeholder="Enter Quantity"></input>
                    <input type="hidden" name="item_id" class="itemId" value="29"></input>
                    <input type="hidden" name="item_cat" value="2"></input>
                    <br> <input type="submit" value="Add to Cart" class="btn">
                </form>
            </div>
        </div>

        <div class="img item">
            <img src="image/વટાણા બટાકા નું શાક.JPG" alt="વટાણા બટાકા નું શાક"> <br>
            <div class="middle"> વટાણા બટાકા નું શાક <small>RS.120 </small>
            <form action="punjabi.php" method="post">
                    <input type="number" name="item_qunt" class="quanOfItem" placeholder="Enter Quantity"></input>
                    <input type="hidden" name="item_id" class="itemId" value="30"></input>
                    <input type="hidden" name="item_cat" value="2"></input>
                    <br> <input type="submit" value="Add to Cart" class="btn">
                </form>
            </div>
        </div>

        <div class="img item">
            <img src="image/મકાઇ ની ખિચડી.jpg" alt="મકાઇ ની ખિચડી"> <br>
            <div class="middle"> મકાઇ ની ખિચડી <small>RS.200 </small>
            <form action="punjabi.php" method="post">
                    <input type="number" name="item_qunt" class="quanOfItem" placeholder="Enter Quantity"></input>
                    <input type="hidden" name="item_id" class="itemId" value="31"></input>
                    <input type="hidden" name="item_cat" value="2"></input>
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