<!DOCTYPE html>
<html>
<link rel="stylesheet" href="ssty.css" type="text/css">
<head>
    
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
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $RollNo =  $_REQUEST['RollNo'];
        $Name = $_REQUEST['Name'];
        $English =  $_REQUEST['English'];
        $Maths = $_REQUEST['Maths'];
        $pps = $_REQUEST['pps'];
        $Backlogs = $_REQUEST['Backlogs'];
        $sgpa = $_REQUEST['sgpa'];
         
        // Performing insert query execution
        // here our table name is college
        
        $query="select * from sem1 where roll_No='$RollNo'";
            $records=mysqli_query($conn,$query);
            if(mysqli_num_rows($records)>=1)
            {
                echo "Please delete the data first then try to insert data.";
            }
            else
            {
        
                $sql = "INSERT INTO sem1  VALUES ('$RollNo',
            '$Name','$English','$Maths','$pps','$Backlogs','$sgpa')";
         
                if(mysqli_query($conn, $sql))
                {
                    echo "data stored in a database successfully.";
        
                    echo nl2br("\n$RollNo\n \n $Name\n \n "
                        . "$English\n \n $Maths\n \n $pps\n \n $Backlogs\n \n $sgpa");
                } else
                {
                    echo "ERROR: Hush! Sorry $sql. "
                        . mysqli_error($conn);
                }
            }

        
        ?>
    </center>
</body>
</html>