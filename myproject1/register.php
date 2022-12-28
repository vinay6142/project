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
        $facultyid =  $_REQUEST['facultyid'];
        $pass = $_REQUEST['pass'];
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO facultylogin VALUES ('$facultyid','$pass')";
         
        if(mysqli_query($conn, $sql))
        {
            echo "data stored in a database successfully.";
 
            echo nl2br("\n$facultyid\n $pass\n ");
        } else
        {
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
        ?><li><a href="index.php">Home</a></li>
    </center>
</body>
 
</html>