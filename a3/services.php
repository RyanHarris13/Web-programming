<!DOCTYPE html>
<html lang='en'>
  <?php
   // session_start();
    include_once('tools.php');
    topModule('Exit and Bond cleaning- Services');
   
    styleCurrentNavLink('background-color: rgba(255,255,255,0.6);');
   
        ?>

        <div class="Title"> 

            <h5><strong>Our Services</strong></h5>
            <?php
             dataTable('services.txt' )
            ?>

        </div>
        <div class="exit">

            <h3>Exit Clean</h3>
            <p2>
              This clean is for when tennants leave the premise, this is a total overhaul clean to remove anything and everything
              they have left behind, this includes full cleans of bathrooms, a full oven + kitchen clean and all bedrooms / main 
              rooms done to an exeptional standard, with addition to a full steam cleaned carpet if neccicary.
              We promise that the property will be in selling condition for future tennants.
            </p2> 
            <form action ="service.php?id=s1" >
                <button type="Submit">Read More:</button>
              </form>
          </div>
    
          <div class="return">
    
            <h3>Bond Return</h3>
            <p2> 
            This cleaning service is directed at tennants that wish to get their bond returned. This clean will ensure you
            have a apartment / house up to par with your real estate agent's standards. This clean, like the others varies depending
            on the size of your place.
            We promise to get your bond back, and if you are not happy with our service, we will return to the premesis to fix anything
            you are not happy with.
            </p2> 
              <form action ="service.php" >
            <button type="Submit">Read More:</button>
              </form>
          </div>
    
          <div class="yeet">
    
            <h3>Entry Clean</h3>
            <p2> 
            You cant have tennants entering a new home with cobwebs and dust everywhere, this clean is aimed at properties that 
            have been purchaced and need a touch up before the tennants move in. This clean is a lighter clean to keep the house 
            highly presentable and comfortable for the new tennants.
            </p2>

                          <button type="">Read More:</button>
    
          </div>
        
    <?php
  endModule(); // Now a function call
    printMyCode();
?>