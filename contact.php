<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href='./css/style.css' rel='stylesheet' type="text/css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        <title>Contact Us</title>
    </head>
    <body>        
        <nav>
            <ul id='navbar'>
                <li><a href='index.php'>Home</a></li>
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
            <div class="contact-container" itemscope itemtype="https://schema.org/LocalBusiness">
                <span itemprop="name">TableFlip</span>
                <div itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                    <span itemprop="streetAddress">1234 Real St</span>
                    <span itemprop="addressLocality">Capalaba</span>,
                    <span itemprop="addressRegion">QLD</span> <span itemprop="postalCode">4222</span>
                </div>
                <span itemprop="telephone">07 3208 1111</span>
                <a itemprop="url" href="index.php">www.tableflip.com</a>
                Hours:
                <meta itemprop="openingHours" content="Mo-Fr 9:00-18:00">Mon-Fri 9am - 6:00pm
                <meta itemprop="openingHours" content="Fr-Sa 17:00-22:00">Sat-Sun 9am - 10:00pm
                Categories:
                <span itemprop="products">
                    Boardgames
                </span>
                <span itemprop="products">
                    D&D
                </span>
                <span itemprop="products">
                    Dice
                </span>
                <span itemprop="products">
                    Figures
                </span>
            </div>
        </div>
        <footer>
            <div>
                &copy 2022 Sean Fowers
            </div>
            <div>
                <a id='current-page' class="contact-link" href='contact.php'>Contact Us</a>
            </div>
        </footer>
    </body>
</html>