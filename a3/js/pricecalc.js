
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
    var form = document.forms["WHATEVER THE HELL WE CALLED OUR FORM"]

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
    var form = document.forms["WHATEVER THE HELL WE CALLED OUR FORM"]
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

    var form = document.forms["WHATEVER THE HELL WE CALLED OUR FORM"]
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