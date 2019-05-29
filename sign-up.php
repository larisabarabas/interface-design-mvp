<?php 
    $sLinkToPageBack = 'sign-in.php';
  require_once 'top.php';
?>

    <div class="main-container">
        <h1>Sign up</h1>
        <form onchange="checkValidation()">
            <input type="text" id="signUpFirstName" placeholder="First Name" data-validate="yes" data-type="string" data-min="2" data-max="20">
            <input type="text" id="signUpLastName" placeholder="Last name" data-validate="yes" data-type="string" data-min="2" data-max="20">
            <label class="no-margin">Date of birth</label>
            <input type="text" id="signUpBirthDate" name="signUpBirthDate" placeholder="Birth date">
            <input type="text" id="signUpEmail" placeholder="Email" data-validate="yes" data-type="email" data-min="6" data-max="50">
            <input type="password" id="signUpPassword" placeholder="Password" data-validate="yes" data-type="string" data-min="6" data-max="50">
            <button onclick="signUp()" type="button" class="btn green-btn" disabled id="signupBtn">Sign up</button>
        </form>


        
        

    </div>


<?php
     $sLinkToScript = '<script src="js/signup.js"></script>';
    require_once 'bottom.php';
?>