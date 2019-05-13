<?php 
  $sLinkToPageBack = 'search-results.php';
  require_once 'top.php';
?>

<div class="main-container">

    <h1>Driver Details</h1>
    <input type="text" placeholder="Name"><br>
    <input type="text" placeholder="Last name"><br>
    <input type="text" id="date_ex" name="dob" placeholder="Birth date">
    <input type="email" placeholder="Email"><br>
    <input type="password" placeholder="Password"><br>
    <a class="green-btn"href="payment.php">Continue</a>

</div>
<?php 
    $sLinkToScript = '<script src="js/signup.js"></script>';
    require_once 'bottom.php';
?>



