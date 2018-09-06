<!DOCTYPE html>
<html lang='en'>
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

      <div class='headerimg'>
          <header>
            <img src='../../media/logo.png' alt='ExitBond&Cleaning' /> 
            </header>
          </div>
          
    

    <nav>
      <div>
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
          <description>
          <p>With our dedicated and experienced cleaners, your home will be in tip top shape for when you leave it. This package is best for people who want to leave on good terms with whoever is in your house after, or landlords with some particularily messy tenants.</p>
              
          
          </description>
          <form action= "https://titan.csit.rmit.edu.au/~e54061/wp/processing.php" method="post">
              <input type="text" name="id" value="SRVC001"
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
 
    <div class="quantity">
      <button class="minus-btn" type="button" name="button">
        <img src="../../media/inus-button.png" alt="" />
      </button>
        <input type="text" name="qty" value="1">
        <button class="plus-btn" type="button" name="button">
        <img src="../../media/dd-button.png" alt="" />
      </button>
      
      
    </div>
 
  
  </div>

              <button type="submit">Purchase</button>
          </form>
          
      </article>
    </ExitMain>
<script type="text/javascript">
      $('.minus-btn').on('click', function(e) {
    		e.preventDefault();
    		var $this = $(this);
    		var $input = $this.closest('div').find('input');
    		var value = parseInt($input.val());

    		if (value > 1) {
    			value = value - 1;
    		} else {
    			value = 0;
    		}

        $input.val(value);

    	});

    	$('.plus-btn').on('click', function(e) {
    		e.preventDefault();
    		var $this = $(this);
    		var $input = $this.closest('div').find('input');
    		var value = parseInt($input.val());

    		if (value < 100) {
      		value = value + 1;
    		} else {
    			value =100;
    		}

    		$input.val(value);
    	});

      
    </script>
    <div class='bot'>
        <footer>
          <div>&copy;<script>
            document.write(new Date().getFullYear());
          </script> By: Caleb McCash (s3717184) and Ryan Harris(s3719229). Group name: A2-s3719229-s3717184 10</div>
            
          <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
        </footer>
     </div>
  </body>
</html>
