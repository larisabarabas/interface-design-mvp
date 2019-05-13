<?php
    $sLinkToPageBack = 'index.php';
  require_once 'top.php';
?>

    <div class="main-container">
        <h1>Sign in</h1>
        <input type="email" placeholder="Email" id="loginEmail">
        <input type="password" placeholder="Password" id="loginPassword">
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

