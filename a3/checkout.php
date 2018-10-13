<?php
session_start();
require_once('tools.php');
topModule("Cart");
styleCurrentNavLink('background-color: rgba(255,255,255,0.6);');

  // qty will always be positive due to a javascript that disables the button
  // when the qty <= 0


$price = $_POST['Price'];
$title = $_POST['Title'];
?>
<?php
$Name = '';
$Email = '';
$Address = '';
$MobilePhone= '';
$CreditCard = '';
$CardExprDate = '';
$message = 'Please enter your details into the form below';
?>
<form action="orders.txt" method="post">
    <p><input type='text' name='Name' value='<?php echo $Name; ?>' /></p>
    <p><input type='email' name='Email' value='<?php echo $Email; ?>' /></p>
    <p><input type='text' name='Address' value='<?php echo $Address; ?>' /></p>
    <p><input type='text' name='MobilePhone' value='<?php echo $MobilePhone; ?>' /></p>
    <p><input type='text' name='Creditcard' value='<?php echo $CreditCard; ?>' /></p>
    <p><input type='date' name='CardEXPDate' value='<?php echo $CardExprDate; ?>' /></p>
    <p><input type=submit value='Submit' /></p>
</form>

<?php
  endModule(); // Now a function call
    preShow($_POST);
    preShow($_SESSION);
   printMyCode();
?>
