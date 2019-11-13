# THIS CANNOT BE RUN since it is on a university server

My website displays a navigation bar which includes a Home, Stocks,
About and Contact Us buttons for employees to navigate through the
web page easily.

### Home

The home page contains a simple description of what the website has to
offer and why gaming is important to people around the world, also it
contains the contact details through opening Facebook, Twitter, Google
plus, and Instagram.

### Stocks

My Stocks Page contains various options to choose from, firstly the
name of the game, then the genre of the game, following the genre is
the age group appropriate to playing the game and finally the quantity
needed.
Users can add games by those options and delete games. Also users
are able to look into the stock and see what games are available.
When users want to add a game, it will create a new item in the stock
table with all the details of the game name till the quantity needed.
If they choose to view the items that have been added or that were
already in stock they have the option to search for specific games by
name, genre or even age group or they can select the ALL option and
view everything in stock.

When deleting an item, you must select the exact details of the game by
name genre and age group.

## How It was created

I started the coursework by doing the HTML and CSS of the website,
basically how the website looks like and how many pages are needed,
and altered it so that it will look as nice on a smaller screen and the
images are proportionate.

Later on I implemented some PHP on the HTML to connect the website
to the phpdir server.

I created two tables, one called users and one called stocks, the users
table has the details of the username and the hashed password of the
account holder, and the stock table contains details of the games that
are available in stock.

The stocks table has the game name, genre, age group and quantity in
it.

There are php files called addStock, removeStock and getStock which
uses php to add, remove and get the stock from the table.

The addStock gets the table and Inserts the game name, genre, age
group and quantity into the table with validation meaning if the user does
not select an option there will be an error saying 'Please select all
options'.

The getStock gets the information in the table and lays it out in a visible
and simple way for users to be able to see what stock is available
showing the game name, genre, age group and quantity.

The removeStock uses the information in putted to search for that
specific game and delete it from the table.

To secure the page I have files such as auth.php, check.php and
connection.php

The auth.php checks if the username and password match and if they
are in the data base, if they are the user will be directed from the
login.php page to the website page, if not then the user will be
redirected to the login page and remain there until correct details have
been inputted.

The check.php always checks if you are logged in so the user does not
have to keep on logging in every time they navigate to another page on
the website.

The connection.php checks if the user is connected with the correct
username and password regarding the SQL.

The logout.php destroys the session that was started in the login.php
page when clicking the 'Log out' button on the web page.
