<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Table-Flip online store - Tabletop gaming">
        <meta name="author" content="Sean Fowers">
        <meta name="keywords" content="boardgames, dice, rpg, figures, games"> 
        <link href='./css/style.css' rel='stylesheet' type="text/css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        <title>Home</title>
    </head>
    <body>        
        <nav>
            <ul id='navbar'>
                <li><a href='index.php' id='current-page'>Home</a></li>
                <li class="dropdown">Categories
                    <div class="dropdown-content">
                        <a href='boardgames.php'>Boardgames</a>
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
            <div class="events-ad">
                <a href="events.php">
                    <img src="./images/events_stock_image.jpg"></img>
                    <h2 class="events-ad-text">Events on soon!</h2>
                </a>
            </div>
            <div class="category-links">
                <ul>
                    <li>
                        <a href=boardgames.php>
                            <img class="category-images" src="./images/ukotoa.jpg"></img>
                            <h2 class="category-images-text">BOARDGAMES</h2>
                        </a>
                    </li>
                    <li>
                        <a href=dice.php>
                            <img class="category-images" src="./images/gold_metal_dice.webp"></img>
                            <h2 class="category-images-text">DICE</h2>
                        </a>
                    </li>
                    <li>
                        <a href=rpgs.php>
                            <img class="category-images" src="./images/players_handbook.webp"></img>
                            <h2 class="category-images-text">RPG's</h2>
                        </a>
                    </li>
                    <li>
                        <a href=figures.php>
                            <img class="category-images" src="./images/red_dragon.jpg"></img>
                            <h2 class="category-images-text">FIGURES</h2>
                        </a>
                    </li>
                </ul>
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