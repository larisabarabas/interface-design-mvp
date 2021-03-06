<?php 
// $sLinkToPageBack = 'search.php';
  require_once 'top.php';
?>

<div class="main-container">
    <h1 class="margin-bottom-1rem padding-top-bottom-20">View Booking</h1>
    <div class="card" >
        <img id="chosen-car-image" class="card-img-top" src="" alt="Card image cap">
        <div class="card-body">
            <h1 id="chosen-car-title" class="text-center card-title"></h1>
            <div class="card info-link booking-reference-container">
        <p>Booking reference:<span>&nbsp;KEA2019</span></p>
        <p>Total: <span id="payment-total"></span> DKK</p>
    </div>
        </div>
    </div>
    <div class="card info-link">
        <h1 class="margin-bottom-1rem">Pickup</h1>
        <p class="font-size-17"><span id="pickup-location"></span></p>
        <p id="chosen-pickup" class="ui-widget-header"></p>
    </div>
    <div class="card info-link">
        <h1 class="margin-bottom-1rem">Return</h1>
        <p class="font-size-17"><span id="dropoff-location"></span></p>
        <p id="chosen-dropoff" class="ui-widget-header margin-bottom-20px"></p>
    </div>

    <h1 class="text-center margin-bottom-1rem margin-top-20px fsize-17" id="car-details-padding-top">Car details</h1>
    <div class="container text-center font-size-17" id="car-details">
        <div class="row padding-bottom-20">
            <div class="col text-left"><img class="icon" src="images/car-door.svg"/>5 doors</div>
            <div class="col text-left"><img class="icon" src="images/person.svg"/>4 seats</div>
        </div>
        <div class="row">
            <div class="col text-left"><img class="icon" src="images/gears.svg"/>Manual</div>
            <div class="col text-left"><img class="icon" src="images/ac.svg"/>A/C</div>
        </div>
    </div>


    <span id="extra-equipment-on-view-booking" class="card info-link text-center font-size-17">
        <h1 class="margin-bottom-1rem fsize-17">Selected equipment</h1>
        <div class="text-center font-size-17">
            <div class="row">
                <div class="col text-left hidden" id="baby-seat"><img class="icon" src="images/baby.svg"/>Baby seat</div>
                <div class="col text-left hidden" id="mobile-wifi"><img class="icon" src="images/wifi.svg"/>Mobile Wifi</div>
            </div>
            <div class="row">
                <div class="col text-left hidden" id="hands-free"><img class="icon" src="images/navigation.svg"/>Hands free</div>
            </div>
        </div>
    </span>

</div>

<?php 
    $sLinkToScript = '<script src="js/confirmation.js"></script>';
    require_once 'bottom.php';
?>