<?php
session_start();
require_once('tools.php');
topModule("Cart");
styleCurrentNavLink('background-color: rgba(255,255,255,0.6);');

if (isset($_POST['cancel'])) {
  unset($_SESSION['cart']);
  header("Location: services.php");
}

if (isset($_POST["add"], $_POST['ID'], $_POST['qty'], $_POST['OID'])) {
  // qty will always be positive due to a javascript that disables the button
  // when the qty <= 0
  $id = $_POST['ID'];
  $oid = $_POST['OID'];
  $qty = $_POST['qty'];
  $_SESSION['cart'][$id]['OID'] = $oid;
  $_SESSION['cart'][$id]['qty'] = $qty;
} else {
  echo "<p>Invalid order, item is not added to cart</p>";
}

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


<?php
  endModule(); // Now a function call
    preShow($_POST);
    preShow($_SESSION);
   printMyCode();
?>

