<?php 
// $sLinkToPageBack = 'search.php';
  require_once 'top.php';
?>

<div class="main-container">
    <h1 class="margin-bottom-1rem">View Booking</h1>
    <div class="card" >
        <img class="card-img-top" src="./images/2015-citroen-c1-airscape-feel-3door-microcar-black.png" alt="Card image cap">
        <div class="card-body">
            <h1 class="text-center card-title">Mini manual</h1>
            <p class="card-text car-info">Booking reference: <span class="booking-reference">KEA2019</span></p>
        </div>
    </div>
    <div class="card info-link">
        <h1 class="margin-bottom-1rem">Pickup</h1>
        <p>Copenhagen Airport, CPH</p>
        <p class="ui-widget-header">Fri, May 21, 10:00 AM</p>
    </div>
    <div class="card info-link">
        <h1 class="margin-bottom-1rem">Return</h1>
        <p>Copenhagen Airport, CPH</p>
        <p class="ui-widget-header margin-bottom-20px">Fri, May 21, 10:00 AM</p>
    </div>

    <h1 class="text-center margin-bottom-1rem margin-top-20px fsize-17" id="car-details-padding-top">Car details</h1>
    <div class="container text-center" id="car-details">
        <div class="row padding-bottom-20">
            <div class="col text-left"><img class="icon" src="images/car-door.svg"/>5 doors</div>
            <div class="col text-left"><img class="icon" src="images/person.svg"/>4 seats</div>
        </div>
        <div class="row">
            <div class="col text-left"><img class="icon" src="images/gears.svg"/>Manual</div>
            <div class="col text-left"><img class="icon" src="images/ac.svg"/>A/C</div>
        </div>
    </div>


    <div class="card info-link container text-center">
        <h1 class="margin-bottom-1rem fsize-17">Selected equipment</h1>
        <div class="row">
            <div class="col" id="baby-seat"><img class="icon" src="images/baby.svg"/>Baby seat</div>
        </div>
    </div>

</div>

<?php 
    require_once 'bottom.php';
?>