<?php 
  require_once 'top.php';
?>

<div class="main-container">
    <h1>View Booking</h1>
    <input type="text" id="booking-number" placeholder="Enter your booking number">

    <div class="button-container padding-top-bottom-40 margin-top-40">
        <a onclick="showBooking()" class="green-btn">Continue</a>
    </div>

</div>



<?php
    $sLinkToScript = '<script src="js/search-booking.js"></script>';
    require_once 'bottom.php';
?>