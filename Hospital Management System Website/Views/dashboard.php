<?php
    session_start();

?>
<html>
<head>
    <title> Dashboard </title>
    <link rel="stylesheet" type="text/css" href="../CSS/regStyle.css">
</head>
<body>

    
        
            <div class="topnav" style="">

                <div class="login">
                    <p style="color:White;"> Welcome <a href="#"> <?php echo $_SESSION['email']; ?> <i class="fa fa-user">  </i>  </a> |
                    <a href= "./AddAdmin.php">Add Admin </a> 
                    <a href= "../Controller/Logout.php"><i class="fa fa-sign-out">Logout</i> </a> 
                </p>
                </div>
           
            
            </div>

        <div>
           <h1> Welcome To Hospital Management.<h1>
        </div>


</body>
</html>