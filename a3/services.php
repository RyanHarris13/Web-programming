<!DOCTYPE html>
<html lang='en'>
<?php
    //session_start();
    include_once('tools.php');
    topModule('Exit and Bond cleaning- Services');
    styleCurrentNavLink('background-color: rgba(255,255,255,0.6);');
   
    preShow($_POST);
    preShow($_SESSION);
    ?>
<style>
    input[type=number]::-webkit-outer-spin-button,
input[type=number]::-webkit-inner-spin-button {
        -webkit-appearance: none !important;
    </style>

<div class="Title">

    <h5><strong>Our Services</strong></h5>


</div>
<!--<div class="exit">-->

    <h3>Exit Clean</h3>


    <form action="service.php" method="post">
    
        <form action="service.php?ID=--CL01" method="get">
            <img src='../../media/--CL01.jpg' alt='empty house picture' />
            <p>$100.00</p>
            <p2>
                This clean is for when tennants leave the premise, this is a total overhaul clean to remove anything and everything
                they have left behind <a href="service.php?ID=--CL01">More Info</a>
            </p2>
        </form>
    </form>

<!--<div class="exit">-->

    <h3>Bond Return</h3>
    <form action="service.php?ID=--CL02" method="get">
        <img src='../../media/--CL02.jpg' alt='empty house picture' />
        <p>$200.00</p>
        <p2>
            This cleaning service is directed at tennants that wish to get their bond returned.<a href="service.php?ID=--CL02">More Info</a>
        </p2>

    </form>



<!--<div class="exit">-->

    <h3>Entry Clean</h3>
    <p2>
        You cant have tennants entering a new home with cobwebs and dust everywhere, this clean is aimed at properties that
        have been purchaced and need a touch up before the tennants move in. This clean is a lighter clean to keep the house
        highly presentable and comfortable for the new tennants.
        <a href="service.php?ID=--CL03">More Info</a>
    </p2>


    <button class="open-button" onclick="openForm()">Open Form</button>

    <div class="form-popup" id="myForm">
        <form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php" method="post" class="form-container">
            <img src='../../media/ExitClean.jpg' alt='empty house picture' />
            <input type="hidden" name="id" value="SRVC001">
            <p>Option: Cleaning type </p>
            <p>Time, level of cleaning detail and price go up the further down the list</p>
            <select name="option" ,>
                <option value="" selected>Select your option</option>
                <option value="Fast">Fast and light: $100</option>
                <option value="moderate">Moderate: $125</option>
                <option value="thorough">Thorough: $150</option>
                <option value="meticulous">Meticulous: $200</option>

            </select>
            <p class='quantity'>Quantity of rooms</p>
            <button class='subtract' type='button' name='button' onclick="mySubtract();myZero();">-</button>
            <input class='number' id='qty' type='text' name='qty' value='0'>
            <button class='plus' onchange='myZero()' type='button' name='button' onclick="myAdd();myZero();">+</button>
            <br>

            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
            <input id='submit' type="submit" value="Submit" disabled>
        </form>
    </div>

<script>
    function openForm() {
        document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
        document.getElementById("myForm").style.display = "none";
    }

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
