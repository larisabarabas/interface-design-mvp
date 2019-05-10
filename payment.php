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

    <h2>Credit Card & Billing Information</h2>
    <input type="text" placeholder="Card number">
    <input type="text" placeholder="Cardholder name">
    <div class="card-expiry-cvv">
        <div class="expiry-container"><input placeholder="Month" type="text" class="expiry-date"><div class="slash">/</div><input placeholder="Year" type="text" class="expiry-date expiry-year"></div>
        <input type="text" placeholder="CVV" class="cvv">
    </div>
    
    <a href="confirmation.php" class="green-btn">Continue</a>
</div>



<?php 
    require_once 'bottom.php';
?>