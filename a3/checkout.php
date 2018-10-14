<?php
session_start();
require_once('tools.php');
topModule("checkout");
styleCurrentNavLink('background-color: rgba(255,255,255,0.6);');



if (isset($_POST['cancel'])) {
  unset($_SESSION['cart']);
  header("Location: services.php");
}
$month = $year = "";

$nameErr = $emailErr = $addressErr = $phoneErr = $cardErr = $dateErr = $yearErr = $monthErr = "";
$name = $email = $address = $phone = $card = $date = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name contains only letters, whitespace, full stop, comma, single quotations and hyphen
    if (!preg_match("/^[a-zA-Z,.' -]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["address"])) {
    $addressErr = "Address is required";
  } else {
    $address = test_input($_POST["address"]);
    if (!preg_match("/^(?:\\d+ [a-zA-Z ]+, ){2}[a-zA-Z ]+$/", $address)) {
      $addressErr = "Invalid address";
    }
  }

  if (empty($_POST["phone"])) {
    $phoneErr = "Mobile Phone is required";
  } else {
    $phone = test_input($_POST["phone"]);
    if (!preg_match("/^(\(04\)|04|\+614)( ?\d){8}$/", $phone)) {
      $phoneErr = "Invalid mobile phone number";
    }
  }

  if (empty($_POST["card"])) {
    $cardErr = "Credit Card Number is required";
  } else {
    $card = test_input($_POST["card"]);
    if (!preg_match("/^(4)( ?\d){12,19}$/", $card)) {
      $cardErr = "Invalid Credit Card Number";
    }
  }

  if (isset($_POST['month']) && (isset($_POST['year']))) {
    $month = test_input($_POST['month']);
    if ($_POST['year'] < date('Y')) {
      $yearErr = "Invalid year expiry date";
    } else {
    $year = test_input($_POST['year']);
    }
    $date = "$month/$year";
    $_POST['date'] = $date;
  }

$fp = fopen("orders.txt", "a");
for ($row = 0; $row < 3; $row++) {
  for ($col = 0; $col < 11; $col++) {

  }
}

$details = array($date, $name, $address, $phone, $email);
$cart = array($_SESSION['cart']);
$order = array_merge($details, $cart);





fputcsv($fp, $order, "\t");
  fclose($fp);
}
?>

<div class='information'>
   
    <form action="<?php echo htmlspecialchars($_SERVER[" PHP_SELF"]);?>" method="post">
        <p>Name: <input type="text" name="name" value='<?php echo $name;?>'><span class='error'> *
                <?php echo $nameErr;?></span></p>
        <br>
        <p>Email: <input type="email" name="email" value='<?php echo $email;?>'><span class='error'> *
                <?php echo $emailErr;?></span></p>
        <br>
        <p>Address: <input type="text" name="address" placeholder="# Street Name, Postcode City, Country" value='<?php echo $address;?>'><span class='error'> *
                <?php echo $addressErr;?></span></p>
        <br>
        <p>Mobile Phone: <input type="text" name="phone" value='<?php echo $phone;?>'><span class='error'> *
                <?php echo $phoneErr;?></span></p>
        <br>
        <p>Credit Card: <input type="text" name="card" value='<?php echo $card;?>'><span class='error'> *
                <?php echo $cardErr;?></span></p>
        <br>
        <div id='expiry_date'>
            <p>Expiry Date:</p>
            <br>
            <p>Month:
                <select id='month' name='month'>
                    <option <?php if ($month==01) echo 'selected' ?> value='01'>01</option>
                    <option <?php if ($month==02) echo 'selected' ?> value='02'>02</option>
                    <option <?php if ($month==03) echo 'selected' ?> value='03'>03</option>
                    <option <?php if ($month==04) echo 'selected' ?> value='04'>04</option>
                    <option <?php if ($month==05) echo 'selected' ?> value='05'>05</option>
                    <option <?php if ($month==06) echo 'selected' ?> value='06'>06</option>
                    <option <?php if ($month==07) echo 'selected' ?> value='07'>07</option>
                    <option <?php if ($month==08) echo 'selected' ?> value='08'>08</option>
                    <option <?php if ($month==09) echo 'selected' ?> value='09'>09</option>
                    <option <?php if ($month==10) echo 'selected' ?> value='10'>10</option>
                    <option <?php if ($month==11) echo 'selected' ?> value='11'>11</option>
                    <option <?php if ($month==12) echo 'selected' ?> value='12'>12</option>
                </select>
                <span class='error'> *
                    <?php echo $monthErr;?></span>
                Year:
                <?php
        $latest_year = 2068;
        echo '<select id="year" name="year">';
        foreach (range(date('Y'), $latest_year) as $x) {
          echo '<option '.($year == $x ? ' selected' : '').' value="'.$x.'">'.$x.'</option>';
        }
      echo '</select>';?>
                <span class='error'> *
                    <?php echo $yearErr;?></span>
            </p>
        </div>
        <br><br>
        <?php
    echo "<input type='hidden' name='date' value='$date'>";
    ?>
        <input type="submit" id='submit' value="Confirm">
        <?php 
        preShow($_POST);
        preShow($_SESSION);
        echo "order";
        preShow($order);
        ?>
    </form>
</div>

<?php endModule(); ?>
