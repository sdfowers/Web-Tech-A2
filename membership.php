<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href='./css/style.css' rel='stylesheet' type="text/css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        <title>Membership Signup</title>
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
                <li><a href='membership.php' id='current-page'>Membership</a></li>
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
            <div class="membership-container">
                <h1>Signup for membership</h1>
                
                <form class="membership-form">
                    <fieldset class="membership-item">
                        <label for="email">Email: </label>
                        <input id="email" name="email" type="text" placeholder="Enter your email address"></input>
                    </fieldset>
                    <fieldset class="membership-item">
                        <label for="firstname">Firstname: </label>
                        <input id="firstname" name="firstname" type="text" placeholder="Enter your Firstname"></input>
                    </fieldset>
                    <fieldset class="membership-item">
                        <label for="lastname">Lastname: </label>
                        <input id="lastname" name="lastname" type="text" placeholder="Enter your Lastname"></input>
                    </fieldset>
                    <fieldset class="membership-item">
                        <label for="email">Email Address: </label>
                        <input id="email" name="email" type="text" placeholder="Enter your email"></input>
                    </fieldset>
                    <fieldset class="membership-item">
                        <label for="phone">Phone Number: </label>
                        <input id="phone" name="phone" type="tel" placeholder="04 1234 5678"></input>
                    </fieldset>
                    <fieldset class="membership-item">
                        <label for="DOB">Date of Birth: </label>
                        <input id="DOB" name="DOB" type="date"></input>
                    </fieldset>
                    <fieldset class="membership-item">
                        <input id="submitting" type="button" value="Submit">
                    </fieldset>
                </form>
                <h3>Why sign up for membership?</h3>
                <p>
                    Members get discounts on certain items and priority on preorders.
                    Members are also able to book rooms for any of your gaming or painting needs.
                </p>
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