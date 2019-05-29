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

    <!-- <div class="form-check">
        <input id="search-input" class="form-check-input" type="checkbox" value="" id="defaultCheck1">
        <label class="form-check-label" for="defaultCheck1">
            Return in the same location
        </label>
    </div> -->

    <div class="car-card">
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
            <h1>Add extra equipment</h1>
            <div class="extra-equipment">
            
                <label class="container">Baby seat
                    <input class="checkbox" type="checkbox" name="baby-seat"/>
                    <span class="checkmark"></span>
                </label>
            
            
                <label class="container">Mobile Wi-Fi
                    <input class="checkbox" type="checkbox" name="mobile-wifi"/>
                    <span class="checkmark"></span>
                </label>
            
            
                <label class="container">Hands free navigation
                    <input class="checkbox" type="checkbox" name="hands-free-nav"/>
                    <span class="checkmark"></span>
                </label>
            </div>
        </div>
        <div class="car-pay">
            <div class="price"><sup>$</sup>27.35</div>
            <a href="#" class="green-btn">Book this car</a>
        </div>

    </div>

    <div class="car-card">
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
            <h1>Add extra equipment</h1>
            <div class="extra-equipment">
            
                <label class="container">Baby seat
                    <input class="checkbox" type="checkbox" name="baby-seat"/>
                    <span class="checkmark"></span>
                </label>
            
            
                <label class="container">Mobile Wi-Fi
                    <input class="checkbox" type="checkbox" name="mobile-wifi"/>
                    <span class="checkmark"></span>
                </label>
            
            
                <label class="container">Hands free navigation
                    <input class="checkbox" type="checkbox" name="hands-free-nav"/>
                    <span class="checkmark"></span>
                </label>
            </div>
        </div>
        <div class="car-pay">
            <div class="price"><sup>$</sup>27.35</div>
            <a href="#" class="green-btn">Book this car</a>
        </div>

    </div>

</div>



<?php 
 $sLinkToScript = '<script src="js/search.js"></script><script src="js/search-results.js"></script>';
  require_once 'bottom.php';
?>