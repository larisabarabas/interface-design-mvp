<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <link href="scss/app.css" rel="stylesheet" type="text/css" />
    <title>Rento</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" id="navigation">
    <div class="nav navbar-nav navbar-left">
    <a class="nav-link mobile-only" id="back-button" href="<?=$sLinkToPageBack ?? ''; ?>"><img class="back-arrow" src="images/arrow-back.svg"></a>
    </div>
    <a href="index.php" class="navbar-brand"><img class="header-logo" src="images/rento-logo-inversed-colors.svg"></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active d-none">
        <a class="nav-link" href="#">Home</a>
      </li>
    </ul>
    <ul class=" nav navbar-nav navbar-right">
    <li class="nav-item">
        <a class="nav-link" href="search.php">Search for a car</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">My profile</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="view-booking.php">View booking</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="index.php">Logout</a>
    </li>
    </ul>

  </div>
</nav>