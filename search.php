<?php 
  require_once 'top.php';
?>
<div class="main-container">
    <h1 class="text-center padding-top-bottom-40">Pickup location</h1>
    <form onchange="checkValidation()">
        <div class="form-group">
            <input type="text" id="strLocation" placeholder="Pick-up Location">
        </div>
        <div class="form-group hidden" id="customReturnLocation">
            <input type="text" id="returnLocation" placeholder="Return Location">
        </div>
        <div class="col inline-flex">
                <label class="container">Return to the same location
                    <input class="checkbox" type="checkbox" onclick="showReturnLocationInput()" name="returnLocation" id="returnLocationCheck" checked/>
                    <span class="checkmark"></span>
                </label>
        </div>
        
        <h1 class="text-center padding-top-bottom-40">Pick-up/drop-off dates</h1>
        <div class="form-group">
            <label for="pickUp">Pick-up date</label>
            <input  type="text" name="pickUp" id="pickUp" placeholder="Pick-up date" />
        </div>
        <div class="form-group">
            <label for="pickOff">Drop-off date</label>
            <input  type="text" name="pickOff" id="pickOff" placeholder="Drop-off date" />
        </div>
        <div class="button-container">
            <button id="searchBtn" type="button" disabled onclick="doSearch()" class="btn green-btn">Search</button>
        </div>
    </form>
</div>
      

<?php  
 $sLinkToScript = '<script src="js/search.js"></script>';
  require_once 'bottom.php';
?>