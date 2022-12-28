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
        $Name = $_REQUEST['Name'];
        $English =  $_REQUEST['English'];
        $Maths = $_REQUEST['Maths'];
        $pps = $_REQUEST['pps'];
        $Backlogs = $_REQUEST['Backlogs'];
        $sgpa = $_REQUEST['sgpa'];
         
        // Performing insert query execution
        // here our table name is college
        $query="select * from sem8 where roll_No='$RollNo'";
            $records=mysqli_query($conn,$query);
            if(mysqli_num_rows($records)>=1)
            {
                echo "Please delete the data first then try to insert data.";
            }
            else
            {
        
                $sql = "INSERT INTO sem8  VALUES ('$RollNo',
            '$Name','$English','$Maths','$pps','$Backlogs','$sgpa')";
         
                if(mysqli_query($conn, $sql))
                {
                    echo "data stored in a database successfully.";
        
                    echo nl2br("\n$RollNo\n $Name\n "
                        . "$English\n $Maths\n $pps\n $Backlogs\n $sgpa");
                } else
                {
                    echo "ERROR: Hush! Sorry $sql. "
                        . mysqli_error($conn);
                }
            }
        ?>
        <li><a href="delete.php">Delete</a></li>
        <li><a href="insert.php">Insert</a></li>
        <li><a href="index.php">Home</a></li>
    </center>
</body>
 
</html>