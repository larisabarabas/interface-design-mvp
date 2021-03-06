<?php 
$sLinkToPageBack = 'search-results.php';
  require_once 'top.php';
?>
<div class="main-container">
    
    <h1 class="text-center car-details-heading">Car details</h1>
    <div>
        <div class="container text-center car-info">
            <img id="chosen-car-image" class="car-image" src="" alt="">
        </div>
        <h1 id="chosen-car-title" class="text-center card-title"></h1>
    </div>

    <div class="container text-center">
        <div class="row padding-bottom-40 car-details-text">
            <div class="col text-left"><img class="icon" src="images/car-door.svg"/>5 doors</div>
            <div class="col text-left"><img class="icon" src="images/person.svg"/>4 seats</div>
        </div>
        <div class="row margin-top-bottom-20 car-details-text">
            <div class="col text-left"><img class="icon" src="images/gears.svg"/>Manual</div>
            <div class="col text-left"><img class="icon" src="images/ac.svg"/>A/C</div>
        </div>
    </div>
    <h4 class="small-text">The car is delivered with a full tank. Our policy is that the car should be returned with the same amount that of gas that was there on delivery.</h4>

    <h1 class="text-center car-details-heading">Add extras</h1>
    
    <div class="container text-left car-details-text">
        <form>
        <div class="row padding-bottom-20">
            <div class="col inline-flex">
                <label class="container">Baby seat
                    <input class="checkbox" type="checkbox" id="babySeat" name="baby-seat"/>
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="col inline-flex">
                <label class="container">Mobile Wi-Fi
                    <input class="checkbox" type="checkbox" id="mobileWifi" name="mobile-wifi"/>
                    <span class="checkmark"></span>
                </label>
            </div>
        </div>
        <div class="row margin-bottom-30">
                <div class="col inline-flex">
                <label class="container">Hands free navigation
                    <input class="checkbox" type="checkbox" id="handsFreeNav" name="hands-free-nav"/>
                    <span class="checkmark"></span>
                </label>
                </div>
        </div>

        <h4 class="small-text">Each extra costs 100 DKK</h4>
        <div class="button-container padding-top-bottom-40 margin-top-40">
            <a  onclick="addExtras()" class="green-btn">Continue</a>
        </div>

        </form>
    </div>
    
</div>
      

<?php 
 $sLinkToScript = '<script src="js/car-details.js"></script>';
  require_once 'bottom.php';
?>