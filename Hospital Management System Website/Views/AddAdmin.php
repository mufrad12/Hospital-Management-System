<?php

    include '../Controller/AddAdmin.php';
    
?>

<html>
<head>
	<title>Add Admin</title>
    

</head>


<body>
    <div class="topnav">
        <a href= "./dashboard.php">Dashboard </a>
        <link rel="stylesheet" type="text/css" href="../CSS/regStyle.css">
        <div class="reg-container">
            
            <a href="#">Add Admin</a>
  

        </div>
        
    </div>

        <div class="form">
                <form method="POST" name="jsForm" >
                    
                        <legend><b><center>Add Admin</center></b></legend>
                        <br>


                        <label for="id"><b>Id</label> 
                        <input type="text" id="id" name="id" >
                        
                        
                        <br>

                        <label for="name"><b>Name</label> 
                        <input type="text" id="name" name="name" >
                        
                       
                        <br>


                        <label for="email"><b>Email</label> 
                        <input type="email" id="email" name="email" >
                        
                        
                        <br>

                        <label for="mob"><b>Mobile No</label>
                        
                        <input type="text" id="mob" name="mob" >
                        
                        <br>

                        <label for="hiredate"><b>Hire Date</label>
                        
                        <input type="date" id="hiredate" name="hiredate" >
                        
                        <br>
                        
                        
                        <label for="password"><b>Password</label>
                        <input type="password" id="password" name="password" >
                        
                        <br>

            
                        <center>
                        <input type="submit" id="submit" name="submit" value="Submit"  style="width: 260px; display: inline-block; height: 45px">
                       
                        </center> 

                </form>
        <p id="errorMsg"></p>
        </div>
</body>
</html>
