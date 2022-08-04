<?php
    ob_start();

global $conn;
 $name = "";
 $username = "";
 $password = "";
 $cpassword = "";

 $role  = 0;

      //connection.....//  
   require 'conn.php';


 if(isset($_POST["signup"]))
 {
         $name = $_POST["nam"];
         $username = $_POST["usrname"];
         $password = $_POST["password"];
         $cpassword = $_POST["cpassword"];



     if(isset($_POST["btnemp"]) && preg_match("/^[a-zA-Z'. -]+$/", $name))
     {
         $role = 1;

         if($password == $cpassword)
         {
             $sql = "INSERT INTO `user` (`id`, `name`, `email`, `password`,`role`) VALUES (NULL, '$name', '$username', '$password','$role')";
             $result = mysqli_query($conn,$sql);

            sleep(3);
            require '../login.php';
            header("Location: ../login.php");
            exit();
            ob_flush();
        }
            else{
                echo "Enter Same Password";
                echo "<br>";
            }
            
    }
        
        // Admin //
        
        else if(isset($_POST["btnadm"]) && preg_match("/^[a-zA-Z'. -]+$/", $name))
        {
            $role = 0;

            if($password == $cpassword)
            {
                $sql = "INSERT INTO `user` (`id`, `name`, `email`, `password`,`role`) VALUES (NULL, '$name', '$username', '$password','$role')";
                $result = mysqli_query($conn,$sql);
            
            sleep(3);
            require '../login.php';
            header("Location: ../login.php");
            exit();
            ob_flush();
            }
            else{
                 echo "Enter Same Password";
                 echo "<br>";
                }

        }
        else{
            // echo " Select Your Role :( ";
            // echo "<br>";
        echo '<div class="alert alert-danger
       alert-dismissible fade show" role="alert" id="success-alert">
      <strong> Enter </strong> Letters only in name field :(
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
        }




     
 
}

?>