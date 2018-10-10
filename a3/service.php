<!DOCTYPE html>
<html lang='en'>
    <style>
input[type=number]::-webkit-outer-spin-button,
input[type=number]::-webkit-inner-spin-button {
        -webkit-appearance: none !important;
    }
</style>
  <?php
   // session_start();
    include_once('tools.php');
    topModule('Exit and Bond cleaning- Services');
   
    styleCurrentNavLink('background-color: rgba(255,255,255,0.6);');
    dataTable('services.txt' )
        ?>

 
   

       

          <div class='sidetext'>
          <p>With our dedicated and experienced cleaners, your home will be in tip top shape for when you leave it.
             This package is best for people who want to leave on good terms with whoever is in your house after, 
             or landlords with some particularily messy tenants. This clean will make sure that you are able to sell / rent 
             the house to any new prospectors. This clean covers all rooms, bathrooms and the kitchen in great detail. Full
             steam cleaned carpets and more.</p>
              
          
          </div>
          <form action= "https://titan.csit.rmit.edu.au/~e54061/wp/processing.php" method="post">
               <img src='../../media/ExitClean.jpg' alt='empty house picture' />
              <input type="hidden" name="id" value="SRVC001">
              <p>Option: Cleaning type </p>
              <p>Time, level of cleaning detail and price go up the further down the list</p>
            <select name="option",>
                <option value=""selected>Select your option</option>
                <option value="Fast">Fast and light: $100</option>
                <option value="moderate">Moderate: $125</option>
                <option value="thorough">Thorough: $150</option>
                <option value="meticulous">Meticulous: $200</option>
                
            </select>
        <p>Quantity picker Form for rooms</p>
   
 
    <div class="description">
      
 
 
   <p class='quantity'>Quantity</p>
                  <button class='subtract' type='button' name='button' onclick="mySubtract();myZero();">-</button>
                  <input class='number' id='qty' type='text' name='qty' value='0'>
                  <button class='plus' onchange='myZero()' type='button' name='button' onclick="myAdd();myZero();">+</button>
                  <br>
</div>
<input id='submit' type="submit" value="Submit" disabled>

      
     </form>
          
      
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
    <?php
  endModule(); // Now a function call
    printMyCode();
?>
