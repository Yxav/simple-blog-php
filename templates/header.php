<?php
  include_once("helpers/url.php")

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog Codar</title>

  <!-- PROJECT STYLESHEET -->
  <link rel="stylesheet" href="<?= $BASE_URL ?>css/styles.css">
  <!-- GOOGLE FONTS -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
</head>

<body>
  <header>
    <a href="<?=$BASE_URL?>" id="logo">
      <img src="<?=$BASE_URL?>/img/logo.svg" alt="Blog codar">
    </a>
    <nav>
      <ul>
        <li><a href="<?=$BASE_URL?>">Home</a></li>
        <li><a href="#">Categorias</a></li>
        <li><a href="#">Sobre</a></li>
        <li><a href="<?=$BASE_URL?>contact.php">Contato</a></li>
      </ul>
    </nav>
  </header>