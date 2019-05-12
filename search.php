<?php 
  require_once 'top.php';
?>
<div class="main-container">
    <h1 class="text-center padding-top-bottom-40">Pickup location</h1>
    <form>
        <div class="form-group">
            <input type="text" id="strLocation" placeholder="Location">
        </div>
        <div class="col inline-flex">
                <label class="container">Return to the same location
                    <input class="checkbox" type="checkbox" onchange="showReturnLocationInput()" name="returnLocation" id="returnLocationCheck" checked/>
                    <span class="checkmark"></span>
                </label>
        </div>
        <div class="form-group hidden" id="customReturnLocation">
            <input type="text" id="strLocation" placeholder="Location">
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
            <button type="button" onclick="doSearch()" class="btn green-btn">Search</button>
        </div>
    </form>
</div>
      

<?php 
 $sLinkToScript = '<script src="js/search.js"></script>';
  require_once 'bottom.php';
?>