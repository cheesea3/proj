<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Oakland Gamers - Home</title>
<?php include_once('inc/components/head.php'); ?>
</head>
<body class="OaklandGames">

<div class="OaklandGames-header">
<header>
    <div class="banner" style="text-align: center;">
        <div class="container" style="padding-bottom:20px; padding-top:15px">
            <img src="assets/img/logo/logo.svg"/>
        </div>
    </div>
<nav class="navbar navbar-expand-lg navbar-dark bg-ig">
    <div class="container">
        <a class="navbar-brand" href="/"><img src="assets/img/logo/altlogo.svg" width="48px" height="48px"/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample07">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
				      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Games
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="game1.php">Space Invaders</a>
          <a class="dropdown-item" href="game2.php">Donkey Kong</a>
          <a class="dropdown-item" href="game3.php">Pacman</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="games.php">Games Page</a>
        </div>
      </li>
            </ul>
            <ul class="nav justify-content-end">
                <button type="button" class="btn btn-dark"> <a href="contact.php"style="text-decoration: none; color: white">Contact</a></button
            </ul>
        </div>
    </div>
</nav>
</header>

</div>


<div class="OaklandGames-body">
    <main class="ImperfectGamers-content">
        <main class="Site-content">
    <div style="text-align: center; color: white">
        <img src="assets/img/banners/homebanner.svg"  style="height:50vh;width:100%"/>

            <h1 style="text-align:left; padding-left:30px;">New Games</h1>
        </div>

<div style="padding:50px">
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title" style="color:#F0AD00;">Space Invaders</h5>
        <p class="card-text" style="color:black">Play this classic game online in all its glory! This game is so addictive.</p>
        <a href="game1.php" class="btn btn-primary">Play</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title" style="color:#F0AD00;">Donkey Kong</h5>
        <p class="card-text" style="color:black">Play the original of two amazing awesome franchises from everyone's youth.</p>
        <a href="game2.php" class="btn btn-primary">Play</a>
      </div>
    </div>
  </div>
    <div class="col-sm-6" style="margin: 0 auto; float: none; margin-bottom 10px; padding-top:25px;">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title" style="color:#F0AD00;">Pacman</h5>
        <p class="card-text" style="color:black">Everybody knows and loves Pacman!</p>
        <a href="game3.php" class="btn btn-primary">Play</a>
      </div>
    </div>
  </div>

</div>
</div>
</main>
</main>
		</header>



    <nav class="OaklandGames-nav"></nav>

    <aside class="OaklandGames-news"></aside>
</div>

<!-- Footer -->
<?php include_once('inc/components/footer.php'); ?>
<!-- ./Footer -->



</body>
</html>