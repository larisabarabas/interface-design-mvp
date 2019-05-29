<?php 
$sLinkToPageBack = 'search.php';
  require_once 'top.php';
?>
<div class="main-container">
    <h1 class="text-center padding-top-bottom-40">Select a car</h1>
    <div class="card" >
        <img class="card-img-top" src="./images/2015-citroen-c1-airscape-feel-3door-microcar-black.png" alt="Card image cap">
        <div class="card-body">
            <h1 class="card-title text-center">Mini Manual 1</h1>
            <p class="card-text car-info">Citroen C1 or similar | Manual transmission</p>

            <div class="price-info">
                <h4 class="text-center"><span id="carPrice">215</span> DKK</h4>
            </div>

            <div class="button-container" id="btn-book-1">
                <a class="green-btn">Book this car</a>
            </div>
        </div>
    </div>

    <div class="card" >
        <img class="card-img-top" src="./images/2015-citroen-c1-airscape-feel-3door-microcar-black.png" alt="Card image cap">
        <div class="card-body">
            <h1 class="card-title text-center">Mini Manual 2</h1>
            <p class="card-text car-info">Citroen C1 or similar | Manual transmission</p>

            <div class="price-info">
                <h4 class="text-center"><span id="carPrice">250</span> DKK</h4>
            </div>

            <div class="button-container" id="btn-book-2">
                <a class="green-btn">Book this car</a>
            </div>
        </div>
    </div>

    <div class="card" >
        <img class="card-img-top" src="./images/2015-citroen-c1-airscape-feel-3door-microcar-black.png" alt="Card image cap">
        <div class="card-body">
            <h1 class="card-title text-center">Mini Manual 3</h1>
            <p class="card-text car-info">Citroen C1 or similar | Manual transmission</p>

            <div class="price-info">
                <h4 class="text-center"><span id="carPrice">300</span> DKK</h4>
            </div>

            <div class="button-container" id="btn-book-3">
                <a class="green-btn">Book this car</a>
            </div>
        </div>
    </div>
</div>
      

<?php 
 $sLinkToScript = '<script src="js/search-results.js"></script>';
  require_once 'bottom.php';
?>