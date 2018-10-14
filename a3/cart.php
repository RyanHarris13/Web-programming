<?php
session_start();
require_once('tools.php');
topModule("Cart");
styleCurrentNavLink('background-color: rgba(255,255,255,0.6);');

$id = $oid = $qty = $price = $subtotal = $title = "";

if (isset($_POST["add"], $_POST['ID'], $_POST['qty'], $_POST['OID'], $_POST['Price'])) {
  // qty will always be positive due to a javascript that disables the button
  // when the qty <= 0
  $id = $_POST['ID'];
  $oid = $_POST['OID'];
  $qty = $_POST['qty'];
  $price = $_POST['Price'];
  $title = $_POST['Title'];
  $subtotal = price($_POST['qty'], $_POST['Price']);

  $_SESSION['cart'][$id]['Title'] = $title;
  $_SESSION['cart'][$id]['ID'] = $id;
  $_SESSION['cart'][$id]['OID'] = $oid;
  $_SESSION['cart'][$id]['qty'] = $qty;
  $_SESSION['cart'][$id]['Price'] = $price;
  $_SESSION['cart'][$id]['subtotal'] = $subtotal;
} else {
  echo "<p>Invalid order, item is not added to cart</p>";
}

$subtotal = price($_POST['qty'], $_POST['Price']);

$title = $_POST['Title'];




?>

<?php
preShow($_POST);
preShow($_SESSION);
echo "<div class='cart'>";
  echo "<h1>Your Cart</h1>";
echo "</div>";
echo "<form action='checkout.php' method='post'>";

  foreach ($_SESSION['cart'] as $item) {
echo <<<"MAIN"
<div class='row'>
  <div class='left'>
    <img id="content" src="../../media/{$item['ID']}.png" alt='{$item['ID']}' >
  </div>
  <div class='right'>
      <h3>{$item['Title']}</h1>

        <div><span class="price">\${$item['subtotal']}</span></div>

        <input type="hidden" name='id' value="{$item{'ID'}}">
        <input type="hidden" name='price' value="{$item['Price']}">
        <input type="hidden" name="qty" value="{$item['qty']}">
        <input type="hidden" name="oid" value="{$item['OID']}">

        <p>Quantity: <span>{$item['qty']}</span></p>
</div>
</div>
</div>
MAIN;
}
echo "<div class='right'>";
echo "<p><input type='submit' name='cancel' value='Empty Cart'/> or <input type='submit' name='add' value='Go to Checkout'/></p>\n</div>\n
</form>";
?>
<?php endModule();
printMyCode();
?>