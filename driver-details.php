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
        <form>
            <input type="text" id="driverDetailsFirstName" data-validate='yes' data-type='string' data-min="2" data-max="25" placeholder="Name">
            <input type="text" id="driverDetailsLastName" data-validate='yes' data-type='string' data-min="2" data-max="25"  placeholder="Last name">
            <input type="text" id="driverDetailsBirthDate" name="driverDetailsBirthDate" placeholder="Birth date">
            <input type="text" id="driverDetailsLicenseNo" data-validate='yes' data-type='string' data-min="10" data-max="10"  placeholder="Driver license no">
            
            <div class="expiry-container">
                <input placeholder="Month" type="number"  id="driverDetailsExpiryMonth" class="expiry-date" data-validate='yes' data-type="integer" data-min="2" data-max="2">

            <div class="slash margin-bottom-30">/</div>

                <input placeholder="Year" type="number"  id="driverDetailsExpiryYear" class="expiry-date expiry-year"  data-validate='yes' data-type="integer" data-min="2" data-max="2">

            </div>
            
                <input type="number" id="driverDetailsPhone" placeholder="Phone number"  data-validate='yes' data-type="integer" data-min="8" data-max="10">
            
            <button class="btn green-btn" type="submit" onclick="saveDriverDetails()">Continue</a>
        </form>


</div>
<?php 
    $sLinkToScript = '<script src="js/driver-details.js"></script>';
    require_once 'bottom.php';
?>



