    <?php
          ob_start();

       
     require_once 'process.php';
     $sql = "SELECT * FROM `leave` WHERE `id` > 0";
     $result = mysqli_query($conn,$sql);
   

     if(isset($_GET['reject']))
     {
         $id = $_GET['reject'];
         $sql_del = "DELETE FROM `leave` where id=$id";
         mysqli_query($conn,$sql_del);

        echo '<div class="alert alert-danger
        alert-dismissible fade show" role="alert" id="danger-alert">
        <strong>Leave Declined</strong> Need Your valuable time :(
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
     }
     
    
     else if(isset($_GET['accept']))
     { 
        //  error_reporting(E_ALL|E_STRICT);
        //  ini_set('display_errors', 1);
        //  echo 'I am : ' . `whoami`;
         
        //  $to_email = "vaidyaabhi3@gmail.com";
        //  $subject = "Simple Email Test via PHP";
        //  $body = "Hi, This is test email send by PHP Script";
        //  $headers = "From: hellocoder123@gmail.com";
        
        //  //the message //
        // $msg = "Congratulation '$row['name']'\n Your leave is approved from $row['from'] to $row['to']\n see you soon :)";
        
           
            // if (mail($to_email, $subject, $body, $headers)) {
            //     echo "Email successfully sent to $to_email...";
            // } else {
            //     echo "Email sending failed...";
            // }

        //Drop from table after 
         $id = $_GET['accept'];
         $sql_del = "DELETE FROM `leave` where id=$id";
         mysqli_query($conn,$sql_del);
        

     echo '<div class="alert alert-success
      alert-dismissible fade show" role="alert" id="success-alert">
     <strong>Leave Accepted </strong> enjoy your holiday :)
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>';
     }
     

    ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Admin Page</title>
  </head>
  <body>
      <div class="container">

          <h1 style="color:blue;">Admin Page</h1>

    <!-- --------------------------TABLE ------------------------>
    <div class="row justify-content-center">
        <table class="table">
            <thead>
                <tr> 
                    <th>NAME</th>
                    <th>From Date</th>
                    <th>To Date</th>
                    <th>Reason</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            
            <?php
          
          while($row = $result->fetch_assoc()): ?>
          <tr>
              <td> <?php echo $row['name']; ?></td>
              <td> <?php echo $row['from']; ?></td>
              <td> <?php echo $row['to']; ?></td>
              <td> <?php echo $row['reson']; ?></td>
              <td>
                  <a href="admin.php?accept=<?php echo $row['id']; ?>"
                     class="btn btn-outline-success" style="padding: right 10px;">Accept</a>

                  <a href="admin.php?reject=<?php echo $row['id']; ?>"
                     class="btn btn-outline-danger">Decline</a>
              </td>
            </tr>
            <?php endwhile;?>
        </table>
    </div>
    <!-- --------------------------TABLE ------------------------>
    
    
    
    
    
    <div class="row justify-content-center">
        <form action="admin.php" method="post">
            <div class="form-group">
                <button type="submit" name="logout" class="btn btn-primary"> Logout </button>
            </div>
        </form>

        <?php
        if(isset($_POST['logout']))
         {
            
            header("Location: ../lms/login.php");
                exit();      
         }

        ob_flush();
        ?>
    </div>
</div>
    
    <!-- Optional JavaScript; choose one of the two! -->
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>