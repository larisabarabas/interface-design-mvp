<?php 
  require_once 'top.php';
?>

<div class="desktop-container">
    <form class="search-bar">
        <input type="text" placeholder="Enter an airport, city or address" class="location-input">
        <input type="text" name="pickUp" id="pickUp" />
        <input type="text" name="pickOff" id="pickOff" />
        <a href="#" class="green-btn">Search</a>
    </form>

    <label class="container">Return in the same location
        <input class="checkbox" type="checkbox" name="return-to-same-location"/>
        <span class="checkmark"></span>
    </label>

    <div class="reservation-details">
        <div class="left-side">
            <div class="pickup-return">
                <div class="pickup">
                    <h1>Pickup</h1>
                    <p>Copenhagen Airport, CPH</p>
                    <h6>Fri, May 21, 10:00 AM</h6>
                </div>
                <div class="return">
                    <h1>Return</h1>
                    <p>Copenhagen Airport, CPH</p>
                    <h6>Fri, May 25, 19:00 AM</h6>
                </div>
            </div>
            <div class="car-info">
                <div class="car-image"><img src="images/2015-citroen-c1-airscape-feel-3door-microcar-black.png"></div>
            <div class="car-text">
                <h1 class="black-heading">Mini manual</h1>
                <h4>Citroen C1 or similar | Manual transmission</h4>
                <div class="car-features">
                    <div class="col text-left"><img class="icon" src="images/car-door.svg"/>5 doors</div>
                    <div class="col text-left"><img class="icon" src="images/person.svg"/>4 seats</div>
                    <div class="col text-left"><img class="icon" src="images/gears.svg"/>Manual</div>
                    <div class="col text-left"><img class="icon" src="images/ac.svg"/>A/C</div>
                </div>
                <h1>Extra equipment</h1>
                <div class="extra-equipment">
                
                    <div class="col" id="baby-seat"><img class="icon" src="images/baby.svg"/>Baby seat</div>
                
                </div>
            </div>
            
            </div>
            
        </div>
        <div class="total-info">
            <p>Base Rate<span class="align-right">$27.35</span></p>
            <p>Kilometers<span class="align-right">Unlimited</span></p>
            <p>Rental Options<span class="align-right">$0.00</span></p>
            <p>Discount Codes<span class="align-right"></span></p>
            <p>Fees & Taxes<span class="align-right">$75.54</span></p>
            <p class="total-amount">Total<span class="align-right">$102.89</span></p>
        </div>
    </div>

    <h1>Driver details</h1>
    <div class="row reservation-details">
        <input type="text" placeholder="Name"><br>
        <input type="text" placeholder="Last name"><br>
        <input type="text" id="date_ex" name="dob" placeholder="Birth date">
    </div>
    <div class="row reservation-details">
        <input type="email" placeholder="Email"><br>
        <input type="password" placeholder="Password"><br>
    </div>

    <h1>Credit Card & Billing Information</h1>
    <div class="row reservation-details">
        <input type="text" placeholder="Card number">
        <input type="text" placeholder="Cardholder name">
    </div>
    <div class="row reservation-details">
        <div class="card-expiry-cvv">
            <div class="expiry-container"><input placeholder="Month" type="text" class="expiry-date"><div class="slash">/</div><input placeholder="Year" type="text" class="expiry-date expiry-year"></div>
            <input type="text" placeholder="CVV" class="cvv">
        </div>
    </div>
    <a href="#" class="green-btn pay-btn">Pay</a>
    </div>


</div>



<?php 
 $sLinkToScript = '<script src="js/search.js"></script><script src="js/search-results.js"></script>';
  require_once 'bottom.php';
?>