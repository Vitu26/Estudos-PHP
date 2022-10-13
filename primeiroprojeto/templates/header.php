<?php
    include_once ("helpers/url.php");
    include_once ("datas/posts.php");
    include_once ("datas/categories.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Vitu</title>
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo&family=Berkshire+Swash&family=Libre+Baskerville&family=Montserrat:wght@300;400;700&family=Roboto:wght@400;700;900&family=Rubik&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <a href="<?= $BASE_URL ?>" id="logo">
            <img src="<?= $BASE_URL ?>/img/logo.svg" alt="logo do site">
        </a>
        <nav>
            <ul id="navbar">
                <li><a href="<?= $BASE_URL ?>"class="nav-link">Home</a></li>
                <li><a href="#"class="nav-link">Categorias</a></li>
                <li><a href="#"class="nav-link">Sobre</a></li>
                <li><a href="<?= $BASE_URL?>contato.php" class="nav-link">Contato</a></li>
            </ul>
        </nav>
    </header>