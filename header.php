<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=400, initial-scale=0.5">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Suur-Inkubio</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('template_directory');?>/assets/css/front.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head();?>
  </head>

  <body>
  
  <!-- Navbar -->
  <nav class="navbar navbar-inverse navbar-toggleable-sm fixed-top">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a href="/" class="navbar-brand d-flex mr-auto">
      <img alt="" height="20" src="<?php bloginfo('template_directory');?>/assets/images/inkulogo-valko.png">
    </a>
    <div class="navbar-collapse collapse text-center" id="collapsingNavbar">
      <ul class="navbar-nav mx-auto w-100 justify-content-center">
        <li class="nav-item">
          <a class="nav-link" href="#">Abeille</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Yrityksille</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Kiltalaisille</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Yhteystiedot</a>
        </li>
    </div>
  </nav>
  <!-- End navbar -->
