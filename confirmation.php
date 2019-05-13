<?php 
$sLinkToPageBack = 'search.php';
  require_once 'top.php';
?>


<div class="main-container">
  <h1 class="text-center padding-top-bottom-20">Car successfully booked!</h1>

  <div>
      <div class="container text-center car-info">
          <img id="chosen-car-image" class="car-image" src="" alt="">
      </div>
      <h1 id="chosen-car-title" class="black-heading text-center"></h1>
  </div>

  <div class="card info-link booking-reference-container">
    <p>Booking reference:<span>&nbsp;KEA2019</span></p>
    <p>Total: <span id="payment-total"></span> DKK</p>
  </div>

  <div class="card info-link">
        <h1 class="margin-bottom-1rem">Pickup</h1>
        <p>Copenhagen Airport, CPH</p>
        <p id="chosen-pickup" class="ui-widget-header">Fri, May 21, 10:00 AM</p>
    </div>
    <div class="card info-link">
        <h1 class="margin-bottom-1rem">Return</h1>
        <p>Copenhagen Airport, CPH</p>
        <p id="chosen-dropoff" class="ui-widget-header margin-bottom-20px">Fri, May 21, 10:00 AM</p>
    </div>

    <div class="button-container">
       <a href='view-booking.php'> <button type="button" class="btn green-btn">Go to manage bookings</button></a>
    </div>
</div>




<script>document.getElementById('back-button').className += ' hidden';</script>

<?php 
    $sLinkToScript = '<script src="js/confirmation.js"></script>';
    require_once 'bottom.php';
?>