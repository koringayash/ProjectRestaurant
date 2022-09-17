<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soups</title>
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
            <img src="image/Carrot Soup.jpg" alt="Carrot Soup"> <br>
            <div class="middle">  Carrot Soup  <small>RS.120  </small>
            <form action="punjabi.php" method="post">
                    <input type="number" name="item_qunt" class="quanOfItem" placeholder="Enter Quantity"></input>
                    <input type="hidden" name="item_id" class="itemId" value="60"></input>
                    <input type="hidden" name="item_cat" value="4"></input>
                    <br> <input type="submit" value="Add to Cart" class="btn">
            </form> 
        </div> 
        </div>
       

        <div class=" item">
            <img src="image/Chilled Cucumber Soup.jpg" alt="Chilled Cucumber Soup"> <br>
            <div class="middle"> Cucumber Soup <small>RS.150  </small>
                <form action="punjabi.php" method="post">
                    <input type="number" name="item_qunt" class="quanOfItem" placeholder="Enter Quantity"></input>
                    <input type="hidden" name="item_id" class="itemId" value="61"></input>
                    <input type="hidden" name="item_cat" value="4"></input>
                    <br> <input type="submit" value="Add to Cart" class="btn">
                </form>         
             </div>   
        </div>

        <div class="img item">
            <img src="image/Creamy Broccoli Cheddar Soup.jpg" alt="Broccoli Soup"> <br>
            <div class="middle"> Broccoli  Soup <small>RS.100  </small>
            <form action="punjabi.php" method="post">
                    <input type="number" name="item_qunt" class="quanOfItem" placeholder="Enter Quantity"></input>
                    <input type="hidden" name="item_id" class="itemId" value="62"></input>
                    <input type="hidden" name="item_cat" value="4"></input>
                    <br> <input type="submit" value="Add to Cart" class="btn">
            </form>  
        </div> 
        </div>

        <div class="img item">
            <img src="image/Creamy Potato Soup.jpg" alt="Creamy Potato Soup"> <br>
            <div class="middle"> Creamy Potato Soup<small>RS.80  </small>
            <form action="punjabi.php" method="post">
                    <input type="number" name="item_qunt" class="quanOfItem" placeholder="Enter Quantity"></input>
                    <input type="hidden" name="item_id" class="itemId" value="63"></input>
                    <input type="hidden" name="item_cat" value="4"></input>
                    <br> <input type="submit" value="Add to Cart" class="btn">
            </form>  
        </div> 
        </div>

        <div class="img item">
            <img src="image/Creamy Roasted Cauliflower Soup.jpg" alt="Creamy Roasted Cauliflower Soup"> <br>
            <div class="middle">Cauliflower Soup <small>RS.120</small>
            <form action="punjabi.php" method="post">
                    <input type="number" name="item_qunt" class="quanOfItem" placeholder="Enter Quantity"></input>
                    <input type="hidden" name="item_id" class="itemId" value="64"></input>
                    <input type="hidden" name="item_cat" value="4"></input>
                    <br> <input type="submit" value="Add to Cart" class="btn">
            </form>  
        </div> 
        </div>

        <div class="img item">
            <img src="image/Green Soup.jpg" alt="Green Soup"> <br>
            <div class="middle">Green Soup <small> RS.200  </small>
            <form action="punjabi.php" method="post">
                    <input type="number" name="item_qunt" class="quanOfItem" placeholder="Enter Quantity"></input>
                    <input type="hidden" name="item_id" class="itemId" value="65"></input>
                    <input type="hidden" name="item_cat" value="4"></input>
                    <br> <input type="submit" value="Add to Cart" class="btn">
            </form>  
        </div> 
        </div>

        <div class="img item">
            <img src="image/Moroccan Carrot Soup.jpg" alt="Moroccan Carrot Soup"> <br>
            <div class="middle"> Carrot Soup <small>RS.125  </small>
            <form action="punjabi.php" method="post">
                    <input type="number" name="item_qunt" class="quanOfItem" placeholder="Enter Quantity"></input>
                    <input type="hidden" name="item_id" class="itemId" value="66"></input>
                    <input type="hidden" name="item_cat" value="4"></input>
                    <br> <input type="submit" value="Add to Cart" class="btn">
            </form>  
        </div> 
        </div>

        <div class="img item">
            <img src="image/Mushroom-Soup.jpg" alt="Mushroom-Soup"> <br>
            <div class="middle"> Mushroom-Soup <small>RS.80  </small>
            <form action="punjabi.php" method="post">
                    <input type="number" name="item_qunt" class="quanOfItem" placeholder="Enter Quantity"></input>
                    <input type="hidden" name="item_id" class="itemId" value="67"></input>
                    <input type="hidden" name="item_cat" value="4"></input>
                    <br> <input type="submit" value="Add to Cart" class="btn">
            </form>  
        </div> 
        </div>

        <div class="img item">
            <img src="image/Pumpkin Soup.jpg" alt="Pumpkin Soup"> <br>
            <div class="middle"> Pumpkin Soup <small>RS.120  </small>
            <form action="punjabi.php" method="post">
                    <input type="number" name="item_qunt" class="quanOfItem" placeholder="Enter Quantity"></input>
                    <input type="hidden" name="item_id" class="itemId" value="68"></input>
                    <input type="hidden" name="item_cat" value="4"></input>
                    <br> <input type="submit" value="Add to Cart" class="btn">
            </form>  
        </div> 
        </div>

        <div class="img item">
            <img src="image/Spicy Cabbage Soup.jpg" alt="Spicy Cabbage Soup"> <br>
            <div class="middle"> Spicy Cabbage Soup<small>RS.180  </small>
            <form action="punjabi.php" method="post">
                    <input type="number" name="item_qunt" class="quanOfItem" placeholder="Enter Quantity"></input>
                    <input type="hidden" name="item_id" class="itemId" value="69"></input>
                    <input type="hidden" name="item_cat" value="4"></input>
                    <br> <input type="submit" value="Add to Cart" class="btn">
            </form>  
        </div> 
        </div>

        <div class="img item">
            <img src="image/Sweet Pea and Avocado Soup.jpg" alt="Avocado Soup"> <br>
            <div class="middle">Avocado Soup <small>RS.225  </small>
            <form action="punjabi.php" method="post">
                    <input type="number" name="item_qunt" class="quanOfItem" placeholder="Enter Quantity"></input>
                    <input type="hidden" name="item_id" class="itemId" value="70"></input>
                    <input type="hidden" name="item_cat" value="4"></input>
                    <br> <input type="submit" value="Add to Cart" class="btn">
            </form>  
        </div> 
        </div>

        <div class="img item">
            <img src="image/Tomato Soup.jpg" alt="Tomato Soup"> <br>
            <div class="middle"> Tomato Soup <small>RS.100  </small>
            <form action="punjabi.php" method="post">
                    <input type="number" name="item_qunt" class="quanOfItem" placeholder="Enter Quantity"></input>
                    <input type="hidden" name="item_id" class="itemId" value="71"></input>
                    <input type="hidden" name="item_cat" value="4"></input>
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