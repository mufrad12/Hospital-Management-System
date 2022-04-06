<?php

    include '../Controller/LoginCheck.php';
    
?>

<html>
<head>
	<title>Login</title>
    
</head>
<body>
    <div class="topnav">
        <a href="../Home.html">Home</a>
        <a href="login.php">Login</a>
        <link rel="stylesheet" type="text/css" href="../CSS/loginStyle.css">
        
    </div>
        
  <br><br><br><br><br><br><br><br>
	<br><br>

    <form method="post">
    <div class="form">
        
        <legend>
        
            <img align="left" src= "../Pictures/sign.png" height="70px" width="70px" style="display: inline-block; "> </a> 
             Hospital &nbsp &nbsp &nbsp &nbsp 
             Management
        </legend>
        <br>
        <br><br>
        
        <label>Email</label>
        <input type="text" name="email" 
            value="<?php 
                        if(isset($_COOKIE['email']))
                        {
                            echo $_COOKIE['email'];
                        }
                        else {  echo $email;  } ?>">

        <p style="color:red"><?php echo $emailErr; ?> </p>
        <br>

        <label>Password</label>
        <input type="password" name="password"
            value = "<?php

                        if(isset($_COOKIE['password']))
                                {
                                    echo $_COOKIE['password'];
                                }

                        else { echo $password;  }?>">
        <p style="color:red"><b><?php echo $passwordErr; ?></b></p>
        <br>
        
        <input type="checkbox" name="Remember" style="width:5%; display: inline-block;"> Remember Me 
        <br>
        <br>
        
        <input type="submit" id="submit" name="Login" value="Login" style="width: 250px; height: 40px;">
        <p style="color:red"><?php echo $msg; ?></p>
        <br>

       <br>
       

    </div>
    </form> 

    <br><br><br><br><br><br><br>
        
        

   
    
    <div class="footer">
        <footer>
            <center>
                <p style="color: white;">Copyright@2022</p>
            </center>
        </footer>
    </div>            
            

</body>
</html>
