<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <title>Exit Cleaning</title>
    
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
    <script src='../wireframe.js'></script>
  </head>

  <body>

    <header>
      <div><img src='../../media/exit-and-bond-cleaning-wantirna-south-3152-logo.gif' alt='ExitBond&Cleaning' />
         
   </div>
      </header>

    <nav>
      <div>
          <ul>

            <li><a href="index.php">Home</a></li>
            <li><a href="services.php" >Services and Pricing</a></li>
              <li><a href="login.php" >Members login</a></li>
          </ul>
        </div>
      </nav>

    <ExitMain>
        <h2>Exit Cleaning:</h2>
        
        
      <article id='Front page things'>

        <img src='../../media/ExitClean.jpg' alt='empty house picture' />
          <description>
          <p>With our dedicated and experienced cleaners, your home will be in tip top shape for when you leave it. This package is best for people who want to leave on good terms with whoever is in your house after, or landlords with some particularily messy tenants.</p>
              
          
          </description>
          
          
          <form action= "https://titan.csit.rmit.edu.au/~e54061/wp/processing.php" method="post">
              <p>Quantity picker Form for rooms</p>
          <input type="" placeholder="0" name="QuantityPicker">
              <br>
              <p>Drop down: Cleaning type </p>
            <select name="Clean detail">
    <option value="Fast">Fast and light</option>
    <option value="thorough" selected>Thorough</option>
    <option value="meticulous">Meticulous</option>
    <option value="moderate">Moderate</option>
            </select>
              <button type="submit">Buy</button>
          </form>
      </article>
    </ExitMain>

    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> By: Caleb McCash (s3717184) and Ryan Harris(s3719229). Group name: A2-s3719229-s3717184 10</div>
        
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

  </body>
</html>
