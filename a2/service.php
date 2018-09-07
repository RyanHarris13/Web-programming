<!DOCTYPE html>
<html lang='en'>
    <style>
input[type=number]::-webkit-outer-spin-button,
input[type=number]::-webkit-inner-spin-button {
        -webkit-appearance: none !important;
    }
</style>
  <head>
    <meta charset="utf-8">
    <title>Exit Cleaning</title>
    
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
    <script src='../wireframe.js'></script>
      <script src="https://code.jquery.com/jquery-2.2.4.js" charset="utf-8"></script>
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

    <ExitMain>
        <h2>Exit Cleaning:</h2>
        
        
      <article id='Front page things'>

        <img src='../../media/ExitClean.jpg' alt='empty house picture' />

          <div class='sidetext'>
          <p>With our dedicated and experienced cleaners, your home will be in tip top shape for when you leave it. This package is best for people who want to leave on good terms with whoever is in your house after, or landlords with some particularily messy tenants.</p>
              
          
          </div>
          <form action= "https://titan.csit.rmit.edu.au/~e54061/wp/processing.php" method="post">
              <input type="hidden" name="id" value="SRVC001">
              <p>Option: Cleaning type </p>
              <p>Time, level of cleaning detail and price go up the further down the list</p>
            <select name="option">
                <option value="Fast">Fast and light</option>
                <option value="thorough" selected>Thorough</option>
                <option value="meticulous">Meticulous</option>
                <option value="moderate">Moderate</option>
            </select>
         <div class="item">
    <p>Quantity picker Form for rooms</p>
    <div class="image">
      <img src="" alt="" />
    </div>
 
    <div class="description">
      
    </div>
 
   <p class='quantity'>Quantity</p>
                  <button class='subtract' type='button' name='button' onclick="mySubtract();myZero();">-</button>
                  <input class='number' id='qty' type='text' name='qty' value='0'>
                  <button class='plus' onchange='myZero()' type='button' name='button' onclick="myAdd();myZero();">+</button>
                  <br>
</div>
<input id='submit' type="submit" value="Submit" disabled>

      
      
    

          </form>
          
      </article>
    </ExitMain>
<script>
      function myAdd() {
          var num = document.getElementById("qty");
          var int = num.value;
          int++;
        num.value = int;
        if (document.getElementById('qty').value == "0") {
            document.getElementById('submit').isValue = false;
          } else {
            document.getElementById('submit').isValue = true;
          }
      }
      function mySubtract() {
          var num = document.getElementById("qty");
          var int = num.value;
          if (int > 0) {
          int--;
        num.value = int;
          } else {
          num.value = 0;
          }
      }
      function myZero() {
          if (document.getElementById('qty').value == 0) {
            document.getElementById('submit').disabled = true;
          } else {
            document.getElementById('submit').disabled = false;
          }
      }
      </script>
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
