<html>

    <head>
        <link rel="stylesheet" href="psty.css" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="print1.css" media="print">
        
    </head>
    <body>
        <?php
            $con=mysqli_connect("localhost","root","","res");
            if(!$con)
            {
                die('Could not connect: '.mysqli_connect_error());
            }
            $query="select * from sem1";
            $records=mysqli_query($con,$query);
            if(mysqli_num_rows($records)>=1)
            {
                ?>
                <table class="c1">
                    <tr>
                        <th>Roll No   </th>
                        <th>Name      </th>
                        <th>English   </th>
                        <th>Maths     </th>
                        <th>PPS       </th>
                        <th>Backlogs  </th>
                        <th>SGPA      </th>
                    </tr>
                <?php
                while($row = mysqli_fetch_assoc($records)) 
                {
                    ?>
                    
                        <tr> 
                        
                            <td> <?php echo $row['roll_No']; ?></td>
                            <td> <?php echo $row['name']; ?></td>
                            <td> <?php echo $row['english']; ?></td>
                            <td> <?php echo $row['maths']; ?></td>
                            <td> <?php echo $row['pps']; ?></td>
                            <td> <?php echo $row['backlogs']; ?></td>
                            <td> <?php echo $row['sgpa']; ?></td>
                        </tr>
                
                        
                <?php
                }
                ?>
                </table>
                <?php

            }
            else{
                echo "records not available in semester1";?><br><?php
            }
            
            ?>
            <div class="text-center">
                <button onclick="window.print();" class="btn btn-primary" id="print-btn">Print</button>
            </div>


        
    </body>
</html>