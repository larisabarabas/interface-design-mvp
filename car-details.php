<?php 
$sLinkToPageBack = 'search-results.php';
  require_once 'top.php';
?>
<div class="main-container">
    <h1 class="text-center padding-top-bottom-40">Car details</h1>
    <div class="container text-center">
        <div class="row padding-bottom-20">
            <div class="col text-left"><img class="icon" src="images/car-door.svg"/>5 doors</div>
            <div class="col text-left"><img class="icon" src="images/person.svg"/>4 seats</div>
        </div>
        <div class="row">
            <div class="col text-left"><img class="icon" src="images/gears.svg"/>Manual</div>
            <div class="col text-left"><img class="icon" src="images/ac.svg"/>A/C</div>
        </div>
    </div>

    <h1 class="text-center padding-top-bottom-40">Add extra equipment</h1>
    <div class="container text-left">
        <form>
        <div class="row padding-bottom-20">
            <div class="col inline-flex">
                <input class="checkbox" type="checkbox" name="baby-seat"/>
                <p class="check-text">Baby seat</p>
            </div>
            <div class="col inline-flex">
                <input class="checkbox" type="checkbox" name="mobile-wifi"/>
                <p class="check-text">Mobile Wi-Fi</p>
            </div>
        </div>
        <div class="row">
                <div class="col inline-flex">
                    <input class="checkbox" type="checkbox" name="hands-free-nav"/>
                    <p class="check-text">Hands free navigation</p>
                </div>
        </div>
        <div class="button-container padding-top-bottom-40">
            <a  href="driver-details.php" class="btn btn-primary">Continue</a>
        </div>

        </form>
    </div>
    
</div>
      

<?php 
 $sLinkToScript = '<script src="js/search-results.js"></script>';
  require_once 'bottom.php';
?>