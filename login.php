<?php

include 'libs/load.php';


?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="YUHESWARI">
  <meta name="generator" content="Hugo 0.104.2">
  <title>PHOTOGRAM BY UKCREA LOGIN</title>


  <link href="/app_new/assets/dist/css/bootstrap.min.css" rel="stylesheet">


  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    

    .form-signin {
      max-width: 330px;
      padding: 15px;
    }

    .form-signin .form-floating:focus-within {
      z-index: 2;
    }

    .form-signin input[type="email"] {
      margin-bottom: -1px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
    }

    .form-signin input[type="password"] {
      margin-bottom: 10px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }
  </style>


</head>

<body>

  
    <? load_template('_header'); ?>

  <main>

    <? load_template(('_login')); ?>

  </main>

  <? load_template(('_footer')); ?>


  <script src="/app_new/assets/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>