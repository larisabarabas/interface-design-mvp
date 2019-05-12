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

    <form>
        <div class="form-group">
            <input type="text" class="form-control" id="strLocation" placeholder="Location">
        </div>
        <div class="form-check">
            <input id="search-input" class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">
                Return in the same location
            </label>
        </div>
        <h1 class="text-center padding-top-bottom-40">Pick-up/drop-off dates</h1>
        <div class="form-group">
            <input class="form-control" type="text" name="pickUp" id="pickUp" />
        </div>
        <div class="form-group">
            <input  class="form-control" type="text" name="pickOff" id="pickOff" />
        </div>
        <div class="button-container">
            <button type="button" onclick="doSearch()" class="btn green-btn">Search</button>
        </div>
    </form>
</div>



<?php 
 $sLinkToScript = '<script src="js/search.js"></script><script src="js/search-results.js"></script>';
  require_once 'bottom.php';
?>