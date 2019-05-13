<?php 
    $sLinkToPageBack = 'sign-in.php';
  require_once 'top.php';
?>

    <div class="main-container">
        <h1>Sign up</h1>
        <input type="text" placeholder="Name">
        <input type="text" placeholder="Last name">
        <input type="text" id="date_ex" name="dob" placeholder="Birth date">
        <input type="text" placeholder="Email">
        <input type="password" placeholder="Password">

        <a href="search.php" class="green-btn">Sign up</a>

    </div>


<?php
     $sLinkToScript = '<script src="js/signup.js"></script>';
    require_once 'bottom.php';
?>