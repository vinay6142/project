<html>

    <head>
        <link rel="stylesheet" href="css/styles.css" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="print1.css" media="print">
        
    </head>
    <body>
        <?php
            
            $cgpa=0;
            $count=0;
            $rollNo=$_POST["rollno"];
            $con=mysqli_connect("localhost","root","","res");
            if(!$con)
            {
                die('Could not connect: '.mysqli_connect_error());
            }
            $query="select * from sem1 where roll_No='$rollNo'";
            $records=mysqli_query($con,$query);
            if(mysqli_num_rows($records)>=1)
            {
                while($row = mysqli_fetch_assoc($records)) 
                {
                    ?>
                    <h2 styles="text-align: center"> FIRST YEAR</h2>
                    <div class="row">
                        <div class="column">
                        <table class="tbl"> 
                        
                        <tr><th>Roll No</th><td> <?php echo $row['roll_No']; ?></td></tr>
                        <tr><th>Name</th><td> <?php echo $row['name']; ?></td></tr>
                        <tr><th>english</th><td> <?php echo $row['english']; ?></td></tr>
                        <tr><th>maths</th><td> <?php echo $row['maths']; ?></td></tr>
                        <tr><th>pps</th><td> <?php echo $row['pps']; ?></td></tr>
                        <tr><th>backlogs</th><td> <?php echo $row['backlogs']; ?></td></tr>
                        <tr><th>sgpa</th><td> <?php echo $row['sgpa']; ?></td></tr>
                
                      </table>

                        </div>
                    
                    
                      
                    <?php $cgpa= $cgpa + $row['sgpa'];
                    $count=$count+1;?><br>
                    <?php
                
                }

            }
            else{
                echo "records not available in semester1";?><br><?php
            }
            
            $query="select * from sem2 where roll_No='$rollNo'";
            $records=mysqli_query($con,$query);
            if(mysqli_num_rows($records)>=1)
            {
                while($row = mysqli_fetch_assoc($records)) 
                {
                    ?>
                    <div class="column">
                    <table>
                        
                        <tr><th>Roll No</th><td> <?php echo $row['roll_No']; ?></td></tr>
                        <tr><th>Name</th><td> <?php echo $row['name']; ?></td></tr>
                        <tr><th>maths 1</th><td> <?php echo $row['M1']; ?></td></tr>
                        <tr><th>data structures</th><td> <?php echo $row['DS']; ?></td></tr>
                        <tr><th>bee</th><td> <?php echo $row['BEE']; ?></td></tr>
                        <tr><th>backlogs</th><td> <?php echo $row['backlogs']; ?></td></tr>
                        <tr><th>sgpa</th><td> <?php echo $row['sgpa']; ?></td></tr>
                
                      </table>
                </div>
                </div>
                
                    <?php $cgpa= $cgpa + $row['sgpa'];
                    $count=$count+1;?><br>
                    <?php
                
                }

            }
            else{
                echo "records not available in semester2" ?><br><?php
            }

            $query="select * from sem3 where roll_No='$rollNo'";
            $records=mysqli_query($con,$query);
            if(mysqli_num_rows($records)>=1)
            {
                while($row = mysqli_fetch_assoc($records)) 
                {
                    ?>
                    <h2 styles="text-align: center">SECOND YEAR</h2>
                    <div class="row">
                        <div class="column">
                        <table class="tbl"> 
                        
                        <tr><th>Roll No</th><td> <?php echo $row['roll_No']; ?></td></tr>
                        <tr><th>Name</th><td> <?php echo $row['name']; ?></td></tr>
                        <tr><th>english</th><td> <?php echo $row['ADS']; ?></td></tr>
                        <tr><th>maths</th><td> <?php echo $row['DD']; ?></td></tr>
                        <tr><th>pps</th><td> <?php echo $row['OOPS']; ?></td></tr>
                        <tr><th>backlogs</th><td> <?php echo $row['backlogs']; ?></td></tr>
                        <tr><th>sgpa</th><td> <?php echo $row['sgpa']; ?></td></tr>
                
                      </table>

                        </div>
                    
                    
                      
                    <?php $cgpa= $cgpa + $row['sgpa'];
                    $count=$count+1;?><br>
                    <?php
                
                }

            }
            else{
                echo "records not available in semester1";?><br><?php
            }

            $query="select * from sem4 where roll_No='$rollNo'";
            $records=mysqli_query($con,$query);
            if(mysqli_num_rows($records)>=1)
            {
                while($row = mysqli_fetch_assoc($records)) 
                {
                    ?><div class="column">
                    <table>
                        
                        <tr><th>Roll No</th><td> <?php echo $row['roll_No']; ?></td></tr>
                        <tr><th>Name</th><td> <?php echo $row['name']; ?></td></tr>
                        <tr><th>subject1</th><td> <?php echo $row['sub1']; ?></td></tr>
                        <tr><th>subject2</th><td> <?php echo $row['sub2']; ?></td></tr>
                        <tr><th>subject3</th><td> <?php echo $row['sub3']; ?></td></tr>
                        <tr><th>backlogs</th><td> <?php echo $row['backlogs']; ?></td></tr>
                        <tr><th>sgpa</th><td> <?php echo $row['sgpa']; ?></td></tr>
                
                      </table>
                </div>
                </div>
                
                    <?php $cgpa= $cgpa + $row['sgpa'];
                    $count=$count+1;?><br>
                    <?php
                
                }

            }
            else{
                echo "records not available in semester2" ?><br><?php
            }            

            if($count!=0)
            {
             echo "CGPA = "?> <?php echo $cgpa/$count;
            }
            ?>
            <div class="text-center">
                <button onclick="window.print();" class="btn btn-primary" id="print-btn">Print</button>
            </div>


        
    </body>
</html>