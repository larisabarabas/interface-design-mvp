<?php 
$sLinkToPageBack = 'driver-details.php';
  require_once 'top.php';
?>

<div class="main-container">
    <h1 class="padding-top-bottom-40">Payment</h1>
    <div class="payment-info">
        <p>Base Rate<span class="align-right" id="chosenCarPrice"></span></p>
        <p>Kilometers<span class="align-right">Unlimited</span></p>
        <p>Extras<span class="align-right" id="extrasPrice"></span></p>
        <p>VAT<span class="align-right" id="VAT"></span></p>
        <p class="total">Total<span class="align-right total" id="total"></span></p>
    </div>
        <h2>Credit Card & Billing Information</h2>
        <form >
            <input type="text" id="paymentCardNo" data-validate='yes' data-type='integer' data-min="12" data-max="12" placeholder="Card number">
            <input type="text" id="paymentCardHolder"  data-validate='yes' data-type='string' data-min="2" data-max="25" placeholder="Cardholder name">
            <div class="card-expiry-cvv">
                <div class="expiry-container"><input placeholder="Month" id="paymentCardExpiryMonth" type="text" data-validate='yes' data-type="integer" data-min="2" data-max="2" class="expiry-date"><div class="slash">/</div><input placeholder="Year" id="paymentCardExpiryYear" type="text" data-validate='yes' data-type="integer" data-min="2" data-max="2" class="expiry-date expiry-year"></div>
                <input id="paymentCardCVV" type="text" data-validate='yes' data-type="integer" data-min="3" data-max="3" placeholder="CVV" class="cvv">
            </div>
        
            <button id="payBtn"  type="submit" onclick="pay()" class=" btn green-btn">Pay now</button>
        </form>
    
</div>



<?php 
    $sLinkToScript = '<script src="js/payment.js"></script>';
    require_once 'bottom.php';
?>