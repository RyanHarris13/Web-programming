 <?php
function topModule($pageTitle) {
    session_start();
    $output = <<<"TOPMODULE"
<head>
    <meta charset="utf-8"
    <title>$pageTitle</title>
    
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
    <script src='../wireframe.js'></script>
    

  </head>
  <body>
    <nav>
      <div>
        <h1> 
          Exit and Bond Cleaning
        </h1>
          <ul>
           <li><a href="login.php" >Members login</a></li>
            <li><a href="services.php" >Services and Pricing</a></li>
            <li><a href="index.php">Home</a></li>
          </ul>
        </div>
      </nav>
      <main>
TOPMODULE;
    echo $output;
} 
function endModule(){
    $output = <<<"ENDMODULE"
    </main>
    <div class = "bot"
    <footer id="bot">
        <br>
          <div>&copy;<script>
            document.write(new Date().getFullYear());
          </script> By: Caleb McCash (s3717184) and Ryan Harris(s3719229). Group name: A2-s3719229-s3717184 68</div>
            
          <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
          <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
        </footer>
     </div>
     </div>
  </body>
</html>
ENDMODULE;
echo $output;
}
     function preShow( $arr, $returnAsString=false ) {
  $ret  = '<pre>' . print_r($arr, true) . '</pre>';
  if ($returnAsString)
    return $ret;
  else 
    echo $ret; 
         
     }
function printMyCode() {
  $lines = file($_SERVER['SCRIPT_FILENAME']);
  echo "<pre class='mycode'>\n";
  foreach ($lines as $lineNo => $lineOfCode)
     printf("%3u: %1s \n", $lineNo, rtrim(htmlentities($lineOfCode)));
  echo "</pre>";
}
   
  function readData($file) {
  $service = array();
  $fp = fopen($file, 'r');
  if (($ids = fgetcsv($fp, 0, "\t")) !== false) {
    while ($cells = fgetcsv($fp, 0, "\t")) {
      for ($x = 1; $x<count($cells); $x++)
          $service[$cells[0]][$cells[1]][$ids[$x]]= $cells[$x];
    }
  }
  fclose($fp);
  return $service;
  }
function dataTable($file){
    echo"<table align = 'center' class = 'services'>\n\n";
    $fp = fopen($file, 'r');
    while(($line= fgetcsv($fp, 0, "\t"))!==false){
        foreach ($line as $cell){
            echo"<td>". htmlspecialchars($cell) . "</td>";
        }
        echo"</tr>\n";
        }
    fclose($fp);
    echo"\n</table>";
    }
function php2js( $arr, $arrName ) {
  $lineEnd="";
  echo "<script>\n";
  echo "  var $arrName = ".json_encode($arr, JSON_PRETTY_PRINT);
  echo "</script>\n\n";
}

function styleCurrentNavLink( $css ) {
  $here = $_SERVER['SCRIPT_NAME']; 
  $bits = explode('/',$here); 
  $filename = $bits[count($bits)-1]; 
  echo "<style>nav a[href$='$filename'] { $css }</style>";
}
function check_cc($cc, $extra_check = false){
    $cards = array(
        "visa" => "(4\d{12}(?:\d{3})?)",
        "amex" => "(3[47]\d{13})",
        "mastercard" => "(5[1-5]\d{14})"
    );

    $names = array("Visa", "American Express", "Mastercard");
    $matches = array();
    $pattern = "#^(?:".implode("|", $cards).")$#";
    $result = preg_match($pattern, str_replace(" ", "", $cc), $matches);
    if($extra_check && $result > 0){
        $result = (validatecard($cc))?1:0;
    }
    return ($result>0)?$names[sizeof($matches)-2]:false;
}

function retrieveOptions($product){
    $read = "";
    foreach ($product as $OID => $Details) {
      $read .= "<option value='$OID'>{$Details["Option"]}</option>";
    }
    return $read;
  }
function price($num1, $num2) {
    $number = $num1 * $num2;
    return number_format((float)$number, 2, '.', '');
  }

function validateCC($cc_num, $type) {

    if($type == "Card") {
    $denum = "Card";
    } elseif($type == "Visa") {
    $denum = "Visa";
    }

    if($type == "Card") {
    $pattern = "";//ANY CARD REGEX NEEDED
    if (preg_match($pattern,$cc_num)) {
    $verified = true;
    } else {
    $verified = false;
    }

    } elseif($type == "Visa") {
    $pattern = "/^([4]{1})([0-9]{12,15})$/";//Visa
    if (preg_match($pattern,$cc_num)) {
    $verified = true;
    echo "THIS IS A VISA CARD"
    //"MAKE VISA ICON APPEAR HERE"
    } else {
    $verified = false;
    }
    }

    if($verified == false) {
    //Do something when the stupid user inevitably decides to mash the keyboard
    echo "Credit card invalid. Please make sure that you entered a valid <em>" . $denum . "</em> credit card ";
    } else { 
    // ANY OTHER STUFF WHEN VALIDATION DOES THE DO
    }
    $creditDate=date_create("USER INPUTTED CREDIT CARD DATE IDK HOW TO LINK PHP TO THE BOX");
    $today = new DateTime();
    $diff=date_diff($creditDate,today)
    
    if($diff < "WHATEVER BOX WE HAVE THE CREDIT CARD IN") { // I have no clue how to link it to a box
        // DISPLAY MESSAGE SAYING SOMETHING ABOUT BLAH BLAH CANT EXPIRE WITHIN A MONTH IDK HOW
    
    }
    
    
}

?>