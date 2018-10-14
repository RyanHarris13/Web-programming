<!DOCTYPE html>
<html lang='en'>
<?php
session_start();
include_once('tools.php');
topModule('Exit and Bond cleaning- Service');
styleCurrentNavLink('background-color: rgba(255,255,255,0.6);');

$product = readData('services.txt');

if (isset($_GET['ID']) && array_key_exists($_GET['ID'], $product)) {
  $ID =  $_GET['ID'];
} else {
  header("Location: services.php");
}


$title = $product[$ID]["FL"]["Title"];
$price = $product[$ID]["FL"]["Price"];
$description = $product[$ID]["FL"]["Description"];
$options = retrieveOptions($product[$ID]);
    ?>
<?php
     
     echo <<<"MAIN"
<div class="hero-image">
    <div class="hero-text">
    </div>
    <h1>$title</h1>
</div>
 <?php
       preShow($_POST);
        preShow($_SESSION);
?>
        
<form action="cart.php" method="post" id = 'ItemDes'>
    <p>$description</p>
        <input type='hidden' name='Title' value='$title'>
        <input type="hidden" name='ID' value="$ID">
        <input type="hidden" name='Price' value="$price">
        <p>Price= '$$price'</p>
        <img src='../../media/$ID.jpg' alt='$title' />
        
        <p>Option: Cleaning type Time, level of cleaning detail and price go up the further down the list</p>
    <select id="option" name="OID" required>
        <option value="NULL" disabled selected hidden>Please select an option:</option>
        $options
    </select>
        
        <p>Quantity picker Form for rooms</p>
    <div class="quantity">
        <button class='subtract' type='button' name='button' id='subtract'  onclick="mySubtract();myZero();">-</button>
        <input class='number' id='qty' type='text' name='qty' value='0'>
        <button class='plus' onchange='myZero()' type='button' name='button id='add' onclick="myAdd();myZero();">+</button>
        <br>
    </div>

   <input id='submit' type="submit" name="add" value="Add to Cart" disabled>


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

<?php endModule();
printMyCode();
?>
