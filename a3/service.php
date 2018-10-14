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
<form action="cart.php" method="post" ID = "PaymentForm">
    <p>$description</p>
        <input type='hidden' name='Title' value='$title'>
        <input type="hidden" name='ID' value="$ID">
        <input type="hidden" name='Price' value="$price">
        <p>Testing values: ID= '$ID', Price= '$$price'</p>
        <img src='../../media/$ID.jpg' alt='$title' />
        
        <p>Option: Cleaning type Time, level of cleaning detail and price go up the further down the list</p>
    <select id="option" name="OID" required>
        <option value="NULL" disabled selected hidden>Please select an option:</option>
        $options
    </select>
        
        <p>Quantity picker Form for rooms</p>
    <div class="quantity">
    
        <button class='subtract' type='button' name='button' onclick="mySubtract();myZero();">-</button>
        <input class='number' id='qty' type='text' name='qty' value='0'>
        <button class='plus' onchange='myZero()' type='button' name='button' onclick="myAdd();myZero();">+</button>
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
  // Cleaning types array
var cleanTypes = new Array();
cleanTypes["Exit"]=100; // Exit Clean
cleanTypes["BondR"]=100; // Bond Return
cleanTypes["Entry"]=100; // Entry Clean

// Clean level array 
var cleanLevel = new Array();
cleanLevel["fnl"]=50; // Fast and light
cleanLevel["mod"]=75; // Moderate
cleanLevel["thr"]=100; // Thorough
cleanLevel["met"]=125; // Meticulous


// THIS WORKS WITH RADIO BUTTONS 
function getTypePrice()
{ 
    // Set price variable
    var typePrice = 0;
    
    // Reference (ID = "whatever our form is")
    var form = document.forms["PaymentForm"]

    var cleanPicked = form.elements["WHATEVER THE HELL WE CALL OUR  CLEAN BUTTONS LOL"]

    for(var i = 0; i < cleanPicked.length; i++)
    { 
        // if the button is pressy pressy
        if(cleanPciked[i].checked)
        { 
            // Sets price to value of clicked button
            // goes through the array and nabs the value
            typePrice = cleanTypes[cleanPicked[i].value];
            // lets not have infinite loops ruining the server
            break;

        }
    }
        // There we have it, our clean types price will be returned where we call it <3
        return typePrice;
}

function getLevelPrice()
{
    // set price variable
    var levelPrice = 0;

    // Reference (ID = "whatever our form is")
    var form = document.forms["PaymentForm"]
    var cleanPicked = form.elements["WHATEVER THE HELL WE CALL OUR CLEAN LEVEL DROPDOWN LOL"]

    // read-y read-y the input then checks array for pricey
    levelPrice = cleanLevel[cleanPicked.value];

    // return that sucker
    return levelPrice;

}

function getRoomTotalCost() 
{
    // SAME SHIT DIFFERENT FUNCTION
    var roomsCost = 0;
    var roomPrice = 75;

    var form = document.forms["PaymentForm"]
    var cleanPicked = form.elements["WHATEVER TAG WE CALLED OUR QUANTITY PICKER"]

    roomsCost = cleanPicked * roomPrice

    // yea you return that juicy cost javascript, you useless piece of trash
    return roomsCost;

}


function totalCalc()
{
    // Yea boi thats the price right there 
    var cleanPrice = getTypePrice() + getLevelPrice() + getRoomTotalCost();

    // heres your result, hopefully php doesnt butcher this like it butchers my will to live
    var pricetxt = document.getElementById('WHATEVER WE CALLED OUR TOTALPRICE');
    pricetxt.style.display = 'block';
    pricetxt.innerHTML = "Total Price for the clean comes to: $"+cleanPrice;
}

function hideUntilDisplay()
{

    // THIS WILL HIDE THE TOTAL PRICE UNTIL WE CALL THE TOTALCALC FUNCTION, BIG YEET
    var pricetxt = document.getElementById('WHATEVER WE CALLED OUR TOTALPRICE');
    pricetxt.style.display='none';
    
}

</script>

<?php
  endModule(); // Now a function call
//printMyCode();
?>
