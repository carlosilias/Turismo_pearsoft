<!DOCTYPE html>
<html lang="en">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">

<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Author: HiBootstrap, Category: Tourism, Multipurpose, HTML, SASS, Bootstrap" />

<title>Pear Soft - Ingenieria de software 2</title>

<link rel="stylesheet" href="assets/css/bootstrap.min.css" />

<link rel="stylesheet" href="assets/css/fontawesome.css" />

<link rel="stylesheet" href="assets/css/boxicons.min.css">

<link rel="stylesheet" href="assets/css/animate.min.css" />

<link rel="stylesheet" href="assets/css/bootstrap-datepicker.min.css">

<link rel="stylesheet" href="assets/css/nice-select.css">

<link rel="stylesheet" href="assets/css/magnific-popup.min.css" />

<link rel="stylesheet" href="assets/css/owl.carousel.min.css" />

<link rel="stylesheet" href="assets/css/meanmenu.min.css" />

<link rel="stylesheet" href="assets/css/style.css" />

<link rel="stylesheet" href="assets/css/responsive.css" />

<link rel="icon" href="assets/img/favicon.png" type="image/png" />

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<style type="text/css">
    body {
    margin: 0 0 55px 0;
}

.nav {
    position: fixed;
    bottom: 0;
    width: 100%;
    height: 55px;
    box-shadow: 0 0 3px rgba(0, 0, 0, 0.2);
    background-color: #ffffff;
    display: flex;
    overflow-x: auto;
}

.nav__link {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    flex-grow: 1;
    min-width: 50px;
    overflow: hidden;
    white-space: nowrap;
    font-family: sans-serif;
    font-size: 13px;
    color: #444444;
    text-decoration: none;
    -webkit-tap-highlight-color: transparent;
    transition: background-color 0.1s ease-in-out;
}

.nav__link:hover {
    background-color: #eeeeee;
}

.nav__link--active {
    color: #009578;
}

.nav__icon {
    font-size: 18px;
}

</style>
</head>
<body>



<header class="header-area">

<div class="top-header-area">
<div class="container">
<div class="row align-items-center">
<div class="col-xl-6 col-lg-7">
<div class="contact-info">
<div class="content">
<i class='bx bxs-graduation'></i>
<a>Universidad de la Costa</a>
</div>
<div class="content">
<i class='bx bx-receipt' ></i>
<a>Ingenieria de Software 2</span></a>
</div>
<div class="content">

</div>
</div>
</div>
<div class="col-xl-6 col-lg-5">
<div class="side-option">
<div class="item">
<a href="login.php" class="btn-secondary">
Inicia Sesion <i class='bx bx-log-in-circle'></i>
</a>
</div>
<div class="item">
<a href="#searchBox" id="searchButton" class="btn-search" data-effect="mfp-zoom-in">
<i class='bx bx-search-alt'></i>
</a>
<div id="searchBox" class="search-box mfp-with-anim mfp-hide">
<form class="search-form" action="search.php">
<input class="search-input" name="searchtitle" placeholder="Buscar" type="text">
<button class="btn-search" type="submit">
<i class='bx bx-search-alt'></i>
</button>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<!--Menu navegacion-->
<div class="main-navbar-area">
<div class="main-responsive-nav">

<!--Menu inferior-->
<nav class="nav">
  <a href="inicio.php" class="nav__link nav__link--active">
    <i class="material-icons nav__icon">home</i>
    <span class="nav__text">Inicio</span>
  </a>
  <a href="index.php" class="nav__link">
    <i class="material-icons nav__icon">travel_explore</i>
    <span class="nav__text">Explorar</span>
  </a>

  <a href="search.php" class="nav__link">
    <i class="material-icons nav__icon">search</i>
    <span class="nav__text">Buscar</span>
  </a>
  <a href="contacto.php" class="nav__link">
    <i class="material-icons nav__icon">call</i>
    <span class="nav__text">Contacto</span>
  </a>
</nav>

<div class="container">
<div class="main-responsive-menu">
<div class="logo">
<a href="inicio.php">
<img src="assets/img/turismo/logopear.png" alt="logo" height="250px" width="160px">
</a>
</div>

</div>
</div>
</div>
<div class="main-nav">
<div class="container">
<nav class="navbar navbar-expand-md navbar-light">
<a class="navbar-brand" href="inicio.php">
<img src="assets/img/turismo/logopear.png" alt="Logo" style="width: 150px; height: 60px;">
</a>
<div class="collapse navbar-collapse mean-menu">
<ul class="navbar-nav ms-auto">
<li class="nav-item">
<a href="inicio.php" class="nav-link active toggle">Inicio</a>
</li>
<li class="nav-item">
<a href="index.php" class="nav-link toggle">Explorar</a>
</li>
<li class="nav-item">
<a href="contacto.php" class="nav-link">Contacto</a>
</li>
</ul>
</div>
</nav>
</div>
</div>
</div>

</header>