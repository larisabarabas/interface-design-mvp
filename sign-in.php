<?php
    $sLinkToPageBack = 'index.php';
  require_once 'top.php';
?>

    <div class="main-container">
        <h1>Sign in</h1>
        <form>
            <input type="email" placeholder="Email" id="loginEmail" data-validate="yes" data-type="email" data-min="6" data-max="50">
            <input type="password" placeholder="Password" id="loginPassword" data-validate="yes" data-type="string" data-min="6" data-max="50">
        </form>
        <a class="green-btn" onclick='login()'>Sign in</a>
        <div class="bottom-links">
            <span onclick="changePassword()">Forgot password?</span>
            <a href="sign-up.php">Sign up</a>
        </div>
    </div>

    
<?php 
    $sLinkToScript = '<script src="js/signin.js"></script>';
    require_once 'bottom.php';
?>

