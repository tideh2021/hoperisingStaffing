<?php

?>





<!DOCTYPE html>
<html lang="en">

<head>
  <title> <?php echo $title; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;1,300;1,600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
  <!-- <link rel="stylesheet" href="styles.css"> -->
  <script src="https://kit.fontawesome.com/1150940d8a.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://use.typekit.net/ttm6aom.css">
  <!-- <link rel="stylesheet" href="stylesA.css" type="text/css"> -->

  <style>
    <?php include './include/stylesA.css'; ?>
  </style>

</head>


<body>
  <header>
    <div class="logo">
      <a href="./index.php">
        <h1>Hoperising Staffing Links Inc.</h1>
        <p>Keeping hope alive</p>
      </a>
    </div>
    <div class="hamburger icon" id="hamburger">
      <i class="fa fa-bars"></i>
    </div>
    <span class="times">&times;</span>
    <nav class="nav-a" id="nav-a">
      <a href="./index.php">home</a>
      <a href="./employerform.php">Employers</a>
      <a href="./workersform.php">Employees/Jobs</a>
      <a href="./index.php#about">ABOUT Us</a>
      <a href="./index.php#tnomials-sect">Testimonials</a>
      <a href="./contactUs.php">CONTACT US</a>
    </nav>
  </header>