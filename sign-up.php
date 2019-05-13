<?php 
    $sLinkToPageBack = 'sign-in.php';
  require_once 'top.php';
?>

    <div class="main-container">
        <h1>Sign up</h1>
        <input type="text" id="signUpFirstName" placeholder="First Name">
        <input type="text" id="signUpLastName" placeholder="Last name">
        <input type="text" id="signUpBirthDate" name="signUpBirthDate" placeholder="Birth date">
        <input type="text" id="signUpEmail" placeholder="Email">
        <input type="password" id="signUpPassword" placeholder="Password">

        <a onclick="signUp()" class="green-btn">Sign up</a>

    </div>


<?php
     $sLinkToScript = '<script src="js/signup.js"></script>';
    require_once 'bottom.php';
?>