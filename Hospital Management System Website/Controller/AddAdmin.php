<?php
    
    require_once('../Model/usersModel.php');
    $idErr= $nameErr = $emailErr = $mobErr = $hiredateErr = $passwordErr =   "" ;

      $id= ""; 
      $name = ""; 
      $email= ""; 
      $mob = "";
      $hiredate= "";
      $password= "";
      
    
    if(isset($_POST["submit"]))
    {
        if(empty($_POST['id'])) 
        {
          $idErr = "Please fill up  id properly";
        }
        else {
          $id = $_POST['id'];
        }

        if(empty($_POST['name'])) 
        {
          $nameErr = "Please fill up  name properly";
        }
        else {
          $name = $_POST['name'];
        }

        if(empty($_POST['email'])) 
        {
          $emailErr = "Please fill up  email properly";
        }
        else {
          $email = $_POST['email'];
        }

        if (empty($_POST['mob'])) {
            $mobErr = "Please Fill up  mobile number properly!"; 
        } 

        else { 
        $mob = $_POST['mob']; 
        }

        if (empty($_POST['hiredate'])) {
            $hiredateErr = "Please Fill up  hiredate properly!"; 
        } 

        else { 
        $hiredate = $_POST['hiredate']; 
        }

        if (empty($_POST['password'])) {
            $passwordErr = "Please Fill up  password properly!"; 
        } 

        else { 
        $password = $_POST['password']; 
        }

    
          
      }
          
        if($id != "" && $name != "" && $email != "" && $mob != "" && $hiredate != "" && $password != "" )
        {
         
          $ins=insertAdmin($id, $name,$email, $mob, $hiredate , $password);
          
          echo '<script language="javascript">  if ( confirm("Successfully Added") ){

            window.location= "http://localhost/Hospital/Views/dashboard.php";

           }</script>';

        }

        
    
    else 
    {
        echo "";
    }
?>