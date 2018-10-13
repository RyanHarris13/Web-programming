<?php
session_start();
require_once('tools.php');
topModule("Cart");
styleCurrentNavLink('background-color: rgba(255,255,255,0.6);');


if (isset($_POST['cancel'])) {
  unset($_SESSION['cart']);
  header("Location: products.php");
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
preShow($_POST);
preShow($_SESSION);
  echo <<<"MAIN"
<div class='cart'>
  <h1>Your Cart</h1>
  
</div>
<div class='row'>
  <div class='left'>
    <img src="../../media/$id.jpg" alt='$id'>
  </div>
 
      <h3>$title</h1>
   

      <form action='checkout.php' method="post">
         <p>Price: '$$price'</p>
        <input type="hidden" name='id' value="$id">
        <input type="hidden" name='price' value="$price">

        <p class='quantity'>Number of rooms: $qty</p>

       <p><input type='submit' name='cancel' value='Empty Cart'/> or <input id='submit' type="submit" name="add" value="Go to Checkout"/></p>
</form>

</div>
</div>
MAIN;

?>
<?php
  endModule(); // Now a function call
    
   printMyCode();
?>
