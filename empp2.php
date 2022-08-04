<?php
require 'Db/conn.php';
global $conn;
 $name="";
 $depart="";
 $from="";
 $to="";
 $reason="";
 $email="";
 
   if (isset($_POST['log']))
   {
   echo "inserted";
  $name = $_POST["nam"];
  $depart= $_POST["depart"];
  $from = $_POST["frmdate"];
  $to = $_POST["todate"];
  $reason=$_POST["rsn"];
  $email=$_POST["email"];

   $sql = "INSERT INTO `leave` (`id`, `name`, `from`, `to`,`reson`) VALUES (NULL, '$name', '$from', '$to','$reason')";
   $result = mysqli_query($conn,$sql);

   header("Location: ../lms/login.php");

  }


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style2.css" />
    <script src="script2.js" defer></script>
    <title>Registraion Form</title>
  </head>
  <body>
    <form action="empp2.php" class="form" method="post">
      <h1 class="text-center">Few step away...</h1>
      <!-- Progress bar -->
      <div class="progressbar">
        <div class="progress" id="progress"></div>
        
        <div
          class="progress-step progress-step-active"
          data-title="Date"
        ></div>
        <div class="progress-step" data-title="Reason"></div>
        <div class="progress-step" data-title="Contact"></div>
        <div class="progress-step" data-title="submit"></div>
      </div>


      <!-- Steps -->
      <div class="form-step form-step-active">
 
        <div class="input-group">
        <label for="depart">Which Department ?</label>
        <input type="text" name="depart" id="depart" />
        </div>

        <div class="input-group">
         <label for="frmdate">From Date</label>
          <input type="date" name="frmdate" id="frmdate" />
        </div>
         <div class="input-group">

          <label for="todate">To Date</label>
          <input type="date" name="todate" id="todate" />
        </div>

        <div class="">
          <a href="#" class="btn btn-next width-50 ml-auto">Next</a>
        </div>
      </div>
      <div class="form-step">
        <div class="input-group">
           <label for="lvetyp">Leave Type</label>
          <input type="text" name="lvetyp" id="lvetyp" />
        </div>
        <div class="input-group">
          <label for="rsn">Reason</label>
          <textarea rows="4" cols="34" name="rsn" id="rsn" ></textarea>
        </div>
        <div class="btns-group">
          <a href="#" class="btn btn-prev">Previous</a>
          <a href="#" class="btn btn-next">Next</a>
        </div>
      </div>
      <div class="form-step">
        <div class="input-group">
          <label for="email">Name</label>
          <input type="text" name="nam" id="nam" />
        </div>
        <div class="input-group">
          <label for="email">Email Id</label>
          <input type="email" name="email" id="email" />
        </div>
        
        <div class="input-group">
          <label for="nmbr">Phone Number</label>
          <input type="tel" name="nmbr" id="nmbr" />
        </div>

        <div class="btns-group">
          <a href="#" class="btn btn-prev">Previous</a>
          <a href="#" class="btn btn-next">Next</a>
        </div>
      </div>
      <div class="form-step">
        <div class="input-group">

         <h2>Congratulations!</h2>
                <p>Leave Request Sent successfully to Admin
                    Hope u will get your leave as soon as possible :) 
                </p>

        </div>
        <div class="btns-group">
   
          <input type="submit" value="Logout" class="btn" name="log"/>
        </div>
      </div>
    </form>
  </body>
</html>