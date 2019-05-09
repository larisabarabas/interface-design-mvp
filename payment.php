<?php 
$sLinkToPageBack = 'driver-details.php';
  require_once 'top.php';
?>

<div class="main-container">
    <h1>Payment</h1>
    <p>Base Rate<span class="align-right">$27.35</span></p>
    <p>Kilometers<span class="align-right">Unlimited</span></p>
    <p>Rental Options<span class="align-right">$0.00</span></p>
    <p>Discount Codes<span class="align-right"></span></p>
    <p>Fees & Taxes<span class="align-right">$75.54</span></p>
    <p>Total<span class="align-right">$102.89</span></p>
</div>

<div class="main-container">
    <h1>Credit Card & Billing Information</h1>
    <input type="text" placeholder="Card number">
    <div>
        <input type="date">
        <input type="date">
    </div>
    <input type="text" placeholder="CVV">
</div>
<a href="confirmation.php">Continue</a>



<?php 
    require_once 'bottom.php';
?>