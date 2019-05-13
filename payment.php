<?php 
$sLinkToPageBack = 'driver-details.php';
  require_once 'top.php';
?>

<div class="main-container">
    <h1 class="padding-top-bottom-40">Payment</h1>
    <p>Base Rate<span class="align-right" id="chosenCarPrice"></span></p>
    <p>Kilometers<span class="align-right">Unlimited</span></p>
    <p>Extras<span class="align-right" id="extrasPrice"></span></p>
    <p>VAT<span class="align-right" id="VAT"></span></p>
    <p>Total<span class="align-right" id="total"></span></p>

    <h2>Credit Card & Billing Information</h2>
        <input type="text" id="paymentCardNo" placeholder="Card number">
        <input type="text" id="paymentCardHolder" placeholder="Cardholder name">
        <div class="card-expiry-cvv">
            <div class="expiry-container"><input placeholder="Month" id="paymentCardExpiryMonth" type="text" class="expiry-date"><div class="slash">/</div><input placeholder="Year" id="paymentCardExpiryYear" type="text" class="expiry-date expiry-year"></div>
            <input type="text" placeholder="CVV" class="cvv">
        </div>
    
        <button id="payBtn" onclick="pay()" class=" btn green-btn">Pay now</button>
</div>



<?php 
    $sLinkToScript = '<script src="js/payment.js"></script>';
    require_once 'bottom.php';
?>