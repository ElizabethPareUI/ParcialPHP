<?php


$routes = [
    'home' => [
        'title' => 'Home',
    ],
    'catalogue' => [
        'title' => 'Catalogue',
    ],
    'details' => [
        'title' => 'Details',
    ],
    'work-us' => [
        'title' => 'Work with Us',
    ],
    'about-us'=> ['About',
    ],
    '404' => [
        'title' => 'Error',
    ],
];

$section = $_GET['s'] ?? 'home';

if(!isset($routes[$section])) {

    $section = "404";
}

$routeConfig = $routes[$section];


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3b276e87db.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title><?= $routeConfig['title'];?> | Antípoda </title>
    <link rel="stylesheet" href="css/style.css">


</head>
<body>
    <header>
        <img class="logo"  src="images/logo.png" alt="Logo" width="126" height="126" class="d-inline-block align-text-top">

    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">            
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php?s=home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="index.php?s=catalogue">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="index.php?s=about-us">About Us</a>
                <li class="nav-item">
                <a class="nav-link" href="index.php?s=work-us">Work with us</a>
              </li>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-light" type="submit"><i class="fa-solid fa-magnifying-glass" style="color: #000000;"></i></button>
            </form>
          </div>
        </div>
        <span>
            <i class="cart d-flex fa-solid fa-cart-shopping"></i>
        </span>
      </nav>
    </header>

    <main class="main-content">
    <?php
        require __DIR__ . '/views/' . $section . '.php';
    ?>
    </main>
    
    <footer class="py-5">
        <div class="row">
          <div class="col-6 col-md-2 mb-3">
    
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Visit Us</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
            </ul>
          </div>
    
          
    
          <div class="col-md-5 offset-md-1 mb-3">
            <form>
              <h5>Subscribe to our newsletter</h5>
              <p>Monthly digest of what's new and exciting from us.</p>
              <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                <label for="newsletter1" class="visually-hidden">Email address</label>
                <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                <button class="btn-footer" type="button">Subscribe</button>
              </div>
            </form>
          </div>
        </div>
    
        <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
          <p>© 2024 Antípoda, Inc. All rights reserved.</p>
          <ul class="list-unstyled d-flex">
            <li class="ms-3"><i class="fa-brands fa-square-x-twitter fa-xl"></i><a  href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
            <li class="ms-3"><i class="fa-brands fa-square-instagram fa-xl"></i><a  href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
            <li class="ms-3"><i class="fa-brands fa-facebook fa-xl"></i><a  href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
          </ul>
        </div>
      </footer>

      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
























