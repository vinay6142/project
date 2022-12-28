<html>
    <head>
    <link rel="stylesheet" href="css/fst1_1.css" type="text/css">

    </head>
    <body class="c2">
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
            $facultyid=$_POST["facultyid"];
            $pass=$_POST["password"];
            $con=mysqli_connect("localhost","root","","res");
            if(!$con)
            {
                die('Could not connect: '.mysqli_connect_error());
            }
            $query="select * from facultylogin where facultyid='$facultyid' and pass='$pass'";
            $records=mysqli_query($con,$query);
            if(mysqli_num_rows($records)>=1)
            {
                ?>
                
                <div class="c1">
                    <h2> Choose your Operation. </h2>
                    <div class="centered">
                        <a href="insert.php">INSERT</a><br>    
                    </div>
                
                
                    <div class="centered1">
                        <a href="delete.php">DELETE</a><br>    
                    </div>

                    <div class="centered2">
                        <a href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcRwPVjcVSpTzKDflJnVRPNFpPzDsVGLRvjVkwNjKxtDJHmFsnSwbgRqgnBrNRPFsnhvcBvKm" target="_blank">Send Mail</a><br>
                    </div>

                    <div class="centered3">
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