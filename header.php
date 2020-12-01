<?php
	require_once 'lib/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?=SITENAME?> | <?=SLOGAN?></title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="<?=MULTIPATH?>css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="<?=MULTIPATH?>css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="<?=MULTIPATH?>css/style.css" rel="stylesheet">
</head>

<body>
	<!--Navbar -->
<nav class="mb-1 fixed-top navbar navbar-expand-lg navbar-dark  mdb-color darken-3">
  <a class="navbar-brand" href="#"><?=SITENAME?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
    aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?=SITEURL?>">Home
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=SITEURL?>login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=SITEURL?>register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" target="_blank" href="<?=FACEBOOKURL?>">
        	<i class="fab fa-facebook"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" target="_blank" href="<?=TWITTERURL?>">
        	<i class="fab fa-twitter"></i>
        </a>
      </li>
     <li class="nav-item">
        <a class="nav-link" target="_blank" href="<?=GITHUBURL?>">
        	<i class="fab fa-github"></i>
        </a>
      </li>
    </ul>
  </div>
</nav>
