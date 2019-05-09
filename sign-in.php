<?php
    $sLinkToPageBack = 'index.php';
  require_once 'top.php';
?>

    <nav>
        <a href="index.php"><img class="back" src="images/arrow-back.svg"></a>
        <a href="index.php"><img class="header-logo" src="images/rento-logo-inversed-colors.svg"></a>
    </nav>

    <div class="main-container">
        <h1>Sign in</h1>
        <input type="text" placeholder="Email">
        <input type="password" placeholder="Password">
        <a href="search.php" class="green-btn">Sign in</a>
        <div class="bottom-links">
            <a href="#">Forgot password?</a>
            <a href="sign-up.php">Sign up</a>
        </div>
    </div>

    
<?php 
    require_once 'bottom.php';
?>

