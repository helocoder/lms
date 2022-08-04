<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Sign up</title>
  </head>
  <body>

    <!---||||||||||||||||||||| NAV BAR|||||||||||||||||||||-->
      <?php
      
      require 'partials/_navbar.php';
      include 'Db/insert.php';
      
      ?>
    <!---||||||||||||||||||||| NAV BAR|||||||||||||||||||||-->



    <!---||||||||||||||||||||| Sign Up Form|||||||||||||||||||||-->    
    <div class="container ">
     <h1 class = "text-center " style="color:#0d6efd";>Signup for continue </h1>

     <form action="Db\insert.php"  method="POST" style="display: flex;
    flex-direction: column;
    align-items: center;">
 
 
 <div class="mb-3 col-md-6" >
    <label for="nam" class="form-label">Name</label>
    <input type="name" class="form-control" id="nam" name="nam">

  </div>

   <div class="mb-3 col-md-6" >
    <label for="usrname" class="form-label">Username</label>
    <input type="email" class="form-control" id="usrname" name="usrname">
  
  </div>


  <div class="mb-3 col-md-6">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name = "password">
  </div>

  <div class="mb-3 col-md-6">
    <label for="cpassword" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="cpassword" name = "cpassword">
    <div id="emailHelp" class="form-text">Make sure to type the same password </div>
  </div>


 

<div class="btn-group" role="group" aria-label="Basic radio toggle button group" style="display: flex;     padding: 10px; items-align:center;">

<div class="emp-btn" style = "margin-right:10px">
  <input type="radio" class="btn-check" name="btnemp" id="btnemp" autocomplete="off">
  <label class="btn btn-outline-primary" for="btnemp">Employee</label>
</div>

<div class="adm-btn">
  <input type="radio" class="btn-check" name="btnadm" id="btnadm" autocomplete="off">
  <label class="btn btn-outline-primary" for="btnadm">Admin</label>
  </div>

</div>

  <button type="submit" class="btn btn-primary col-md-6" name = "signup">SignUp</button>
</form>

  <!---||||||||||||||||||||| Sign-Up Form|||||||||||||||||||||-->    

  <!---|||||||||||||||||||||Database connection |||||||||||||||||||||-->    
  
  
  
   <!---||||||||||||||||||||| Database connetion|||||||||||||||||||||-->    
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