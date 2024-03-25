<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href='./css/style.css' rel='stylesheet' type="text/css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        <title>Room Booking</title>
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
                <li><a href='roombooking.php' id='current-page'>Room Booking</a></li>
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
                <img src="./images/gaming_room.jpg"></img>
                <h2>Room Booking</h2>
            </div>
            <div class="room-booking-container">
                <table class="room-booking-table">
                    <thead>
                        <tr>
                            <th>Room</th>
                            <th>Description</th>
                            <th>Availabile Times</th>
                            <th>Price per Hour</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Dungeoneering Room</td>
                            <td>Groups of up to 10 can book the Dungeoneering room. Made specifically for playing
                                tabletop RPG's, you'll find many painted figures, boards and maps around the room
                                along with surround sound speakers.
                                Nearby resturants are available for food and drink.</td>
                            <td>11:00AM until 10:00PM</td>
                            <td>$49.95</td>
                        </tr>
                        <tr>
                            <td>Colour Room</td>
                            <td>The Colour room is a room built for painting. You can buy all your paints in store, put on 
                                some music with our surround sound speakers, grab some food from nearby resturants and enjoy
                                a relaxing day painting with your friends. The best part is you don't have to worry about any spills!</td>
                            <td>9:00AM until 5:00PM</td>
                            <td>$19.95</td>
                        </tr>
                    </tbody>
                </table>
                <form class="room-booking-form">
                    <h2>ROOM BOOKING FORM</h2>
                    <fieldset>
                        <label for="memberNum">Membership Number: </label>
                        <input id="memberNum" name="memberNum" type="text" placeholder="m123456"></input>
                    </fieldset>
                    <fieldset>
                        <div>
                            <label for="room1">Dungeoneering Room</label>
                            <input type="radio" name="roomNum" id="room1" value="Room 1">
                        </div>
                        <div>
                            <label for="room2">Colour Room</label>
                            <input type="radio" name="roomNum" id="room2" value="Room 2">
                        </div>
                    </fieldset>
                    <fieldset>
                        <label for="hours">Hours: </label>
                        <input id="hours" name="hours" type="number"></input>
                    </fieldset>
                    <fieldset>
                        <input id="submitting" type="button" value="Submit">
                    </fieldset>
                </form>
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