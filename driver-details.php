<?php 
  $sLinkToPageBack = 'search-results.php';
  require_once 'top.php';
?>

<div class="main-container">

    <h1 class="padding-top-bottom-40">Driver Details</h1>
    <div class="col inline-flex" id="driverCheckbox">
                <label class="container">I am the driver
                    <input class="checkbox" type="checkbox" onClick="prefillData()" name="checkDriver" id="checkDriver"/>
                    <span class="checkmark"></span>
                </label>
        </div>
    
        <input type="text" id="driverDetailsFirstName" placeholder="Name">
        <input type="text" id="driverDetailsLastName" placeholder="Last name">
        <input type="text" id="driverDetailsBirthDate" name="driverDetailsBirthDate" placeholder="Birth date">
        <input type="number" id="driverDetailsLicenseNo"  placeholder="Driver license no">
        
        <div class="expiry-container">
        <form>
            <input placeholder="Month" type="text" maxLength="2" id="driverDetailsExpiryMonth" class="expiry-date" data-type="integer" data-min="2" data-max="2">
        </form>
            <div class="slash margin-bottom-30">/</div>
        <form>
            <input placeholder="Year" type="text" maxLength="2" id="driverDetailsExpiryYear" class="expiry-date expiry-year" data-type="integer" data-min="2" data-max="2">
        </form>
        </div>
        
            <input type="number" id="driverDetailsPhone" placeholder="Phone number" data-type="integer" data-min="10000000" data-max="99999999">
        
    <a class="green-btn" onclick="saveDriverDetails()">Continue</a>

</div>
<?php 
    $sLinkToScript = '<script src="js/driver-details.js"></script>';
    require_once 'bottom.php';
?>



