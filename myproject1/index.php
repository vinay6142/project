<!--<html>
<head>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Student Result Management System</title>
</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
            <ul class="main-nav" animate slideInDown>
                <li><a href="index.php">Home</a></li>
                <li><a href="aboutus.php">About</a></li>
                <li><a href="contactus.php">Contact</a></li>
                <li><a href="login.php">Faculty LOGIN</a></li>
                <li><a href="alogin.php">Admin LOGIN</a></li>
          </ul>
        </div>
      </nav>
      <div class="main-content-header">
        <form method="post" action="results.php" autocomplete="off">
          
            <br>
            <h2 class="search">GET YOUR RESULT HERE!</h2>
            <br><br>
           
            <label for="rollno">Roll no:</label><br>
            <input type="text" name="rollno" required class="box1"/>
            <br>
            
            <input type="submit" name="submit" value="SUBMIT" class="submit"/>
          
         
       </form>
      </div>
    </header>
    
</body>
</html>
-->


<html>
    <head>
        <title>Result Portal</title>
        <link rel="stylesheet" href="css/style1.css" type="text/css">
    <body>
        <div class="full-page">
            <div class="navbar">
                <div class="nv1">
                   <h1> <a  href='index.html'>GEETHANJALI COLLEGE OF ENGINEERING AND TECHNOLOGY</a></h1>
                </div>
                <header>
                <nav>
                        <div class=nav-links><a href='index.php'>Home</a></div>
                        <div class=nav-links><a href='aboutus.php'>About Us</a></div>
                        <div class=nav-links><a href='contact.php'>Contact</a></div>
                        <div class=nav-links><a href='login.php'>Faculty Login</a></div>
                        <div class=nav-links><a href='alogin.php'>Admin Login</a></div>
                </nav>
                </header>
            </div>
            <div id='student-login-form'class='login-page'>
                <div class="main-content-header">
                    <form method="post" action=results.php autocomplete="off" class="form">
                      
                    <div class="bo">
                        <br>
                        <h2 class="search">GET YOUR RESULT HERE!</h2>
                        <br><br>
                       
                        <label for="rollno">Roll no:</label>
                        
                        <input type="text" name="rollno" required class="box1"/>
                        <br>
                        
                        <input type="submit" name="submit" value="SUBMIT" class="submit"/>
                    </div>
                   </form>
                </div>
            </div>
        </div>

    </body>
    </head>
</html>

