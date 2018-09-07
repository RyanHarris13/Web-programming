<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
      <title>Login</title>
    
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
    <script src='../wireframe.js'></script>
      
  </head>

  <body>

    <nav>
      <div>
        <h1> 
          Exit and Bond Cleaning
        </h1>
          <ul>
           <li><a href="login.php" >Members login</a></li>
            <li><a href="services.php" >Services and Pricing</a></li>
            <li><a href="index.php">Home</a></li>

          </ul>
        </div>
      </nav>

    <main>
        <h2>Login Page</h2>
        <div class="Login">
       <form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php" method="post" target="_blank">
  <div class="imgcontainer">
    <img src="../../media/img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
      <p><b>Username:</b></p>
    <label for="uname"></label>
    <input type="email" placeholder="Enter Email" name="email" required>
      <p><b>Password:</b></p>
    <label for="password"></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        <br>
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
        </div>
        
      <article id='Front page things'>

        <img src='../../media/' alt='' />
      </article>
    </main>

    <div class='bot'>
        <footer>
             <br>
          <div>&copy;<script>
            document.write(new Date().getFullYear());
          </script> By: Caleb McCash (s3717184) and Ryan Harris(s3719229). Group name: A2-s3719229-s3717184 10</div>
            
          <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
        </footer>
     </div>

  </body>
</html>
