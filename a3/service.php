<!DOCTYPE html>
<html lang='en'>
<?php
session_start();
include_once('tools.php');
topModule('Exit and Bond cleaning- Service');
styleCurrentNavLink('background-color: rgba(255,255,255,0.6);');

$product = readData('services.txt');

if (isset($_GET['id']) && array_key_exists($_GET['id'], $product)) {
  $ID =  $_GET['id'];
} else {
  header("Location: services.php");
}

$title = $product[$ID]["FL"]["Title"];
$price = $product[$ID]["FL"]["Price"];
$description = $product[$ID]["FLx"]["Description"];
$options = retrieveOptions($product[$ID]);
    ?>
<?php
     echo <<<"MAIN"
<div class="Title">
    <h5><strong>$title</strong></h5>
</div>
<div class=''>
    <p>$description</p>
</div>
<form action="cart.php" method="post">
        <input type='hidden' name='title' value='$title'>
        <input type="hidden" name='id' value="$id">
        <input type="hidden" name='price' value="$price">
        
        <img src='../../media/$id.jpg' alt='$title' />
    
        <p>Option: Cleaning type Time, level of cleaning detail and price go up the further down the list</p>
    <select id="option" name="oid" value="please select">
        $options
    </select>
        
        <p>Quantity picker Form for rooms</p>
    <div class="quantity">
        <button class='subtract' type='button' name='button' onclick="mySubtract();myZero();">-</button>
        <input class='number' id='qty' type='text' name='qty' value='0'>
        <button class='plus' onchange='myZero()' type='button' name='button' onclick="myAdd();myZero();">+</button>
        <br>
    </div>
    <input id='submit' type="submit" value="Add-to-Cart" disabled>


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
printMyCode();
?>
