<!DOCTYPE html>
<html lang="en">
   <head>
   <link rel="stylesheet" href="nsty.css" type="text/css">
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
         <h1>INSERT DATA INTO SEMESTER 5</h1>
         <p class="cc" style="color:'red';"><u>Note:</u>Please delete the existing data of student then insert the updated data.</p>
         <form action="semi1s.php" method="post">

         <div class="wrapper">
            <div class="input-group">
             
            <p>
               <label for="RollNo">Roll Number:</label>
               <input type="text" name="RollNo" id="RollNo">
            </p>
            </div>
 
            <div class="input-group">
            <p>
               <label for="Name">Full Name:</label>
               <input type="text" name="Name" id="Name">
            </p>
</div>
 
             <div class="input-group">
<p>
               <label for="M1">M1:</label>
               <input type="text" name="M1" id="M1">
            </p>
</div>
 
            <div class="input-group">
<p>
               <label for="DS">DS:</label>
               <input type="text" name="DS" id="DS">
            </p>
</div>
 
            <div class="input-group">
<p>
               <label for="BEE">BEE:</label>
               <input type="text" name="BEE" id="BEE">
            </p>
</div>

            <div class="input-group">
            <p>
               <label for="Backlogs">Backlogs:</label>
               <input type="text" name="Backlogs" id="Backlogs">
            </p>
</div>

            <div class="input-group">
            <p>
               <label for="sgpa">SGPA:</label>
               <input type="text" name="sgpa" id="sgpa">
            </p>
</div>

            <input type="submit" value="Submit">
         </form>
</div>
      </center>
   </body>
</html>