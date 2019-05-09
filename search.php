<?php 
  require_once 'top.php';
?>
<div class="main-container">
    <h3 class="text-center padding-top-bottom-40">Search for a car</h3>
    <form>
        <div class="form-group">
            <input type="text" class="form-control" id="strLocation" placeholder="Location">
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">
                Return in the same location
            </label>
        </div>
        <p class="text-center padding-top-bottom-40">Pick-up/drop-off dates</p>
        <div class="form-group">
            <input class="form-control" type="text" name="pickUp" id="pickUp" />
        </div>
        <div class="form-group">
            <input  class="form-control" type="text" name="pickOff" id="pickOff" />
        </div>
        <div class="button-container">
            <button type="button" onclick="doSearch()" class="btn btn-primary">Search</button>
        </div>
    </form>
</div>
      

<?php 
 $sLinkToScript = '<script src="js/search.js"></script>';
  require_once 'bottom.php';
?>