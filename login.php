<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>login page</title>
  </head>
  <body>
    <!---||||||||||||||||||||| NAV BAR|||||||||||||||||||||-->
      <?php
      require 'partials/_navbar.php';  
      ?>
    <!---||||||||||||||||||||| NAV BAR|||||||||||||||||||||-->

     <!---||||||||||||||||||||| Login Form|||||||||||||||||||||-->    
    <div class="container ">
     <h1 class = "text-center " style="color:#0d6efd;
     margin-top : 30px;
     "> Login Page </h1>

     <form action="login-valid.php"  method="POST" style="display: flex;
    flex-direction: column;
    align-items: center;
    margin-top:75px">
 
   <div class="mb-3 col-md-6" >
    <label for="logusrname" class="form-label">Username</label>
    <input type="email" class="form-control" id="logusrname" name="logusrname">
  
  </div>


  <div class="mb-3 col-md-6">
    <label for="logpassword" class="form-label">Password</label>
    <input type="password" class="form-control" id="logpassword" name = "logpassword">
  </div>

  <button type="submit" class="btn btn-primary col-md-6" name = "loglogin">Login
     </button>

     
<div class="newuser" style = "padding : 10px;">

<pre><a href = "signup.php" class = "link-secondary text-opacity-0" style="text-decoration: none;" onMouseOver="this.style.color='#0d6efd'"
        onMouseOut="this.style.color='grey'"> New join? Signup </pre>
</div>

</form>


  <!---||||||||||||||||||||| Login Form|||||||||||||||||||||-->    




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