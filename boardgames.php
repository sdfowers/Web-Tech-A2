<?php 
    require_once "queryDb.php";
    $products = getProducts('Boardgames');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href='./css/style.css' rel='stylesheet' type="text/css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        <title>Boardgames</title>
    </head>
    <body>        
        <nav>
            <ul id='navbar'>
                <li><a href='index.php'>Home</a></li>
                <li class="dropdown">Categories
                    <div class="dropdown-content">
                        <a href='boardgames.php' id='current-page'>Boardgames</a>
                        <a href='dice.php'>Dice</a>
                        <a href='rpgs.php'>RPGs</a>
                        <a href='figures.php'>Figures</a>
                    </div>
                </li>
                <li><a href='events.php'>Events</a></li>
                <li><a href='membership.php'>Membership</a></li>
                <li><a href='roombooking.php'>Room Booking</a></li>
                <li>
                    <form method='get' action='search.php'>
                        <input type="text" id='productsearch' name='productsearch' placeholder="Search Here"></input>
                        <input class="nav-search-button" type='submit' value='Search'></input>
                    </form>
                </li>
            </ul>
        </nav>
        <div id="page">
            <div class="categoryBanner">
                <img src="./images/rpg_banner.jpg"></img>
                <h2>BOARDGAMES</h2>
            </div>
            <div class='productContainer'>
                <!-- ALL PRODUCT IMAGES AND DETAILS OBTAINED FROM : https://www.imaginaryadventures.com.au/-->
                <?php 
                    foreach($products as $product) {
                        echo "<div class='productItem' onClick='product.php'>";
                            echo "<div class='productImage'><img  src='".$product['IMAGEURL']."'></img></div>";
                            echo "<h2 class='productPrice'>$".$product['PRICE'].".00</h2>";
                            echo "<div class='productDetails'>";
                                echo "<h3>".$product['PRODUCTNAME']."</h3>";
                                echo "<p>".$product['DESCRIPTION']."</p>";
                            echo "</div>";
                        echo "</div>";
                    }
                ?>
            </div>
        </div>
        <footer>
            <div>
                &copy 2022 Sean Fowers
            </div>
            <div>
                <a class="contact-link" href='contact.php'>Contact Us</a>
            </div>
        </footer>
    </body>
</html>