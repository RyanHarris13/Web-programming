<!DOCTYPE html>
<html lang='en'>
    <style>
input[type=number]::-webkit-outer-spin-button,
input[type=number]::-webkit-inner-spin-button {
        -webkit-appearance: none !important;
    }
</style>
  <?php
   session_start();
    include_once('tools.php');
    topModule('Exit and Bond cleaning- Service');
   
    styleCurrentNavLink('background-color: rgba(255,255,255,0.6);');
    dataTable('services.txt' );
    
        
if (isset($_GET['id']) && array_key_exists($_GET['id'], $product)) {
  $ID =  $_GET['id'];
} else {
  header("Location: products.php");
}

$title = $product[$ID]["FL"]["Title"];
$price = $product[$ID]["FL"]["Price"];
$description = $product[$ID]["FL"]["Description"];
$options = retrieveOptions($product[$ID]);


  if (isset($_POST["add"]))
    $_SESSION['cart']=$_POST;
  else if (isset($_POST["append"]))
    $_SESSION['cart'][]=$_POST;
   else if (isset($_POST["delete"]))
    unset ($_SESSION['cart']);
        ?>

 
   

       
<?php
     echo <<<"MAIN"
          <div class='sidetext'>
          <p>$description</p>
              
          
          </div>
          <form action= "services.php" method="post">
          <input type="hidden" name="id" value="$ID">
          <input type="hidden" name="price" value="$price">
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
          MAIN;
?>
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
    
?>