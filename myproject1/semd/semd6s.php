<!DOCTYPE html>
<html>
 
<head>
    <title></title>
</head>
 
<body>
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
                $sql = "delete from sem6 where roll_No='$RollNo'";
                
                if(mysqli_query($conn, $sql))
                {
                    echo "The student data has been deleted successfully.";

                } else
                {
                    echo "The student data couldn't be deleted as data is not present in the database.";
                }
            
        ?>
        <li><a href="delete.php">Delete</a></li>
        <li><a href="insert.php">Insert</a></li>
        <li><a href="index.php">Home</a></li>
    </center>
</body>
 
</html>