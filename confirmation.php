<?php 
$sLinkToPageBack = 'search.php';
  require_once 'top.php';
?>


<div class="main-container">
  <h1 class="text-center padding-top-bottom-20">Car successfully booked!</h1>

  <div class="card info-link booking-reference-container">
    <p>Booking reference: </p>
    <p>Total: XXX $</p>
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

    <div class="button-container">
       <a> <button type="button" class="btn green-btn">Go to manage bookings</button></a>
    </div>
</div>





<?php 
    require_once 'bottom.php';
?>