<!DOCTYPE html>
<html>
 
<head>
<link rel="stylesheet" href="dssty.css" type="text/css">
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
    <center>
        <?php
        $conn=mysqli_connect("localhost","root","","res");
         
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        
        $RollNo =  $_REQUEST['RollNo'];
                $sql = "delete from sem1 where roll_No='$RollNo'";
                
                if(mysqli_query($conn, $sql))
                {
                    echo "The student data has been deleted successfully.";

                } else
                {
                    echo "The student data couldn't be deleted as data is not present in the database.";
                }
            
        ?>
    </center>
</body>
 
</html>