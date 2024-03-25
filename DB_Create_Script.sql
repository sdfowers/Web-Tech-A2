CREATE DATABASE IF NOT EXISTS DB_tableflip;

USE DB_tableflip;

DROP TABLE IF EXISTS CUSTOMERS;
DROP TABLE IF EXISTS PRODUCTS;
DROP TABLE IF EXISTS EVENTS;

CREATE TABLE CUSTOMERS
(
CUSTID INTEGER PRIMARY KEY,
FIRSTNAME varchar(64),
LASTNAME varchar(64),
ADDRESS varchar(255),
PHONE varchar(16)
);

INSERT INTO CUSTOMERS (FIRSTNAME, LASTNAME, ADDRESS, PHONE) 
VALUES ('John', 'Smith', '5 Fictitious Street, Springfield', '(07) 1122 3344'),
('Fred', 'Jones', '12 Some Place, Gotham', '(02) 9988 7766'),
('Bob', 'Bee', '50 Fifty Court, Brisbane', '(07) 1111 2222');

CREATE TABLE PRODUCTS
(
PRODID INTEGER PRIMARY KEY,
PRODUCTNAME varchar(64),
CATEGORY varchar(64),
DESCRIPTION varchar(255),
PRICE float,
IMAGEURL varchar(64)
);

--Changed PRODUCTS table columns and details

INSERT INTO PRODUCTS (PRODUCTNAME, CATEGORY, DESCRIPTION, PRICE, IMAGEURL) 
VALUES ('Gold Metal Dice', 'Dice', 'Striped Gold Metal 7 Dice Set with Red Glitter', '64.00', './images/gold_metal_dice.webp'),
('Wooden Dice', 'Dice', 'Large Wooden Dragon d20 - Ebony with White', '25.00', './images/wooden_dice.webp'),
('DnD Players Handbook', 'RPG', 'The Dungeons & Dragons Players Handbook is the essential reference for every Dungeons & Dragons roleplayer.', '59.00', './images/players_handbook.webp'),
('DnD Dungeon Masters Guide', 'RPG', 'The Dungeon & Dragons Dungeon Masters Guide gives you everything you need to weave legendary stories of your very own', '59.00', './images/dungeon_master.webp'),
('Balagos Ancient Red Dragon', 'Figures', 'Standing over 18 inches tall to the top of his wings with a near 24 inch wingspan tip to tip. Balagos, Ancient Red Dragon is an impressive piece to add to any collection or terrifying foe for your gaming table.', '718.00', './images/red_dragon.jpg'),
('Dwarf Barbarian', 'Figures', 'These Dwarf Barbarian Female miniatures are supplied un-assembled and un-primed, and provide multiple options for building the figure.', '24.00', './images/dwarf_barbarian.jpg'),
('Dungeon Mayhem Monster Madness', 'Boardgames', 'In Dungeon Mayhem: Monster Madness, you play as one of six epic D&D monsters, each with their own way to charm, crush, disintegrate, and devour their foes.', '28.00', './images/dungeon_madness.webp'),
('Critical Role - UkOtoa', 'Boardgames', 'All sailors fear the tales of Uk’otoa, the all-seeing Great Leviathan beneath the sea.', '59.00', './images/ukotoa.jpg');


CREATE TABLE EVENTS
(
EVENTID INTEGER PRIMARY KEY,
EVENTNAME varchar(64),
LOCATION varchar(64),
DESCRIPTION varchar(255),
DATE varchar(10)
);

INSERT INTO EVENTS (EVENTNAME, LOCATION, DESCRIPTION, DATE)
VALUES ('Park Run', 'Stones Corner', 'Saturday morning fun run.', '25/06/2016'),
('Meet & Greet BBQ', 'Brisbane CBD', 'Meet and Greet in Queen Street Mall', '26/06/2016'),
('Clearance Sale', 'Griffith Store', 'Clearance Sale for all items', '11/07/2016');