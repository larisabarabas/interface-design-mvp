<?php 
  $sLinkToPageBack = 'search-results.php';
  require_once 'top.php';
?>

<div class="main-container">

    <h1 class="padding-top-bottom-40">Driver Details</h1>
    <input type="text" placeholder="Name">
    <input type="text" placeholder="Last name">
    <input type="text" id="date_ex" name="dob" placeholder="Birth date">
    <input type="email" placeholder="Email">
    <input type="password" placeholder="Password">
    <a class="green-btn"href="payment.php">Continue</a>

</div>
<?php 
    $sLinkToScript = '<script src="js/signup.js"></script>';
    require_once 'bottom.php';
?>



