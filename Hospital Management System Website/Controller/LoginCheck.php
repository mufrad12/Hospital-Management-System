<?php
    session_start();
    require_once('../Model/usersModel.php');
    $emailErr= $passwordErr="";
   
    $email="";
    $password="";
    $flag=0;
    $msg="";


	if(isset($_POST['Login']))
    {
        
        if(empty($_POST['email'])) 
        {
          $emailErr = "Please fill up your email properly";
        }
        else 
        {
          $email = $_POST['email'];
        }

        if(empty($_POST['password'])) 
        {
          $passwordErr = "Please fill up password properly";
        }
        else 
        {
          $password = $_POST['password'];
        }
        
        if($email != "" && $password != "")
        {
           $user=validate($email, $password);

            if ($user)
            {
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                

                if(isset($_POST["Remember"])) 
                    {
                        setcookie ("email",$_POST["email"],time()+ 3600,"/");
                        setcookie ("password",$_POST["password"],time()+ 3600,"/");
                    }
                setcookie("flag", "true", time()+1800, "/");
                
                header('location: ../Views/dashboard.php');
                
            } else {
                $msg = "Invalid Username/Password.";
            }

        }


	}

   

    else{
		echo "";
	}

?>