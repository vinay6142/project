<html>
    <head>
    <link rel="stylesheet" href="css/lstyle1.css" type="text/css">
    </head>
    <body>

    <div class="nav-bar">
    <nav>
                        <div class=nav-links><a href='index.php'>Home</a></div>
                        <div class=nav-links><a href='aboutus.php'>About Us</a></div>
                        <div class=nav-links><a href='contact.php'>Contact</a></div>
                        <div class=nav-links><a href='login.php'>Faculty Login</a></div>
                        <div class=nav-links><a href='alogin.php'>Admin Login</a></div>
                </nav>
</div>


    <div class="centered1">
        <form method="post" action="alogindash.php" autocomplete="off">
            <label for="adminid">Admin ID:</label><br>
            <input type="text" name="adminid" required class="box1"/>
            <br>
            <label for="password">PASSWORD:</label><br>
            <input type="password" name="password" required class="box2"/>
            <br>
            <input type="submit" name="submit" value="SUBMIT" class="submit"/>
        </form> 
    </div>
    </body>
</html>