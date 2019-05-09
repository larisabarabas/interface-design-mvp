<?php 
    $sLinkToPageBack = 'sign-in.php';
  require_once 'top.php';
?>

    <nav>
        <a href="sign-in.html"><img class="back" src="images/arrow-back.svg"></a>
        <a href="index.html"><img class="header-logo" src="images/rento-logo-inversed-colors.svg"></a>
    </nav>

    <div class="main-container">
        <h1>Sign up</h1>
        <input type="text" placeholder="Name">
        <input type="text" placeholder="Last name">
        <input type="text" id="date_ex" placeholder="Birth date">
        <input type="text" placeholder="Email">
        <input type="text" placeholder="Password">

        <a href="search.php" class="green-btn">Sign up</a>

    </div>


<?php
    require_once 'bottom.php';
?>