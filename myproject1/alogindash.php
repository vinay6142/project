<html>
    <head>
    <link rel="stylesheet" href="css/alogsty.css" type="text/css">

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
        <?php
            $adminid=$_POST["adminid"];
            $pass=$_POST["password"];
            $con=mysqli_connect("localhost","root","","res");
            if(!$con)
            {
                die('Could not connect: '.mysqli_connect_error());
            }
            $query="select * from adminlogin where adminid='$adminid' and pass='$pass'";
            $records=mysqli_query($con,$query);
            if(mysqli_num_rows($records)>=1)
            {
                ?>
                
                <div class="cc">
                    <h2> Choose your Operation.</h2>
                    <div class="centered">
                        <a href="insert.php">INSERT</a><br>    
                    </div>
                
                    <div class="centered1">
                        <a href="delete.php">DELETE</a><br>    
                    </div>

                    <div class="centered2">
                        <a href="https://mail.google.com/mail/u/0/#inbox?compose=new" target="_blank">Send Mail</a>
                    </div>

                    <div class="centered3">
                        <a href="register1.php">Faculty Registration </a><br>
                    </div>

                    <div class="centered4">
                        <a href="printfile/print.php"> Print </a><br>
                    </div>
                </div>
                <?php 
            }
            else
            {
                echo "incorrect login details";
            }
        ?>
    </body>
</html>