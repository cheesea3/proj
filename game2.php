<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Oakland Games - Donkey Kong</title>
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
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
				      <li class="nav-item dropdown">
        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                <button type="button" class="btn btn-dark active"> <a href="contact.php" class="active" style="text-decoration: none; color: white">Contact</a></button>
            </ul>
        </div>
    </div>
</nav>
</header>

</div>


<div class="OaklandGames-body">

<main class="Site-content">
    <div style="text-align: center; color: white">
        <img src="assets/img/banners/gamebanner.svg"  style="height:50vh;width:100%"/>

            <h1 style="text-align:center; padding-left:30px;">Donkey Kong</h1>
			<aside>Press Space to Start, Up+down+Left+Right Keyboard Control</aside>
			<div style="float: left"><a href="game1.php"><h1><- Last game</h1></a></div> <div style="float: right"><a href="game3.php"><h1>Next game -></h1></a></div>
        </div>
    <div align="center">
<embed src="inc/swf/donkey-kong.swf" style="margin: 0 auto; float: none; margin-bottom 10px; padding-top:25px;" width="550" height="400" />
    </div>
	

</main>
			

    <nav class="OaklandGames-nav"></nav>

    <aside class="OaklandGames-news"></aside>
</div>

<!-- Footer -->
<?php include_once('inc/components/footer.php'); ?>
<!-- ./Footer -->


</body>
</html>
