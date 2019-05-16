<?php 
// $sLinkToPageBack = 'search.php';
  require_once 'top.php';
?>
<div class="container profile-box">
    <img class="profile-icon" src="images/profile.svg">
    <h6 id="sLoggedInUserName"></h6>
    <h5 id="sLoggedInUserEmail"></h5>
</div>

<?php 
     $sLinkToScript = '<script src="js/profile.js"></script>';
    require_once 'bottom.php';
?>