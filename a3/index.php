<!DOCTYPE html>
<html lang='en'>
    <?php
   // session_start();
    include_once('tools.php');
    topModule('Exit and Bond cleaning- Services');
   
    styleCurrentNavLink('background-color: rgba(255,255,255,0.6);');
    dataTable('services.txt' )
        ?>
    
<div class="hero-image">
        <div class="hero-text">
    </div>
    <h1>Clean With Style </h1>
        </div>
      <div class="ColText1">

        <h3>Our Background:</h3>
        <p2>
          We are a small family based cleaning business based in melbourne. We have been doing high order cleaning for exits and bonds for 
          over 10 years. Our teams have years of experience under their belt. We started this business as a small cleaning department for 
          some real estate agents, and since then we have expanded to cleaning for the largest real estate firms in victoria and Cleaning
          high value properties to exeptional standards throughout Melbourne.
        </p2> 

      </div>

      <div class="ColText2">

         <img src='../../media/cleaning peeps.jpg' />

      </div>

      <div class="ColText3">

        <h3>Our focus:</h3>
        <p2> 
        Our focus is to bring the highest quality of cleans to any property. Bringing even the worst of houses to a spic and span 
        standard ready to be sold or enough to get your bond back, as is our promise. Our precision on our cleans is our top priority, 
        missing spots is unnaceptable, and because of that we will come for a callback without hesitation. We pride ourselves in leaving
        a perfect service so every customer gets exactly what they paid for.    
        </p2>

      </div>
<?php
  endModule(); // Now a function call
    printMyCode();
?>

    
