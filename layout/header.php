<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/820a086d7e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/assets/css/style.css">
    <title>easpire</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#"><img class="easpire-logo-small" alt=""
                    src="../public/assets/images/easpire-logo-small01-1@2x.png"></a>
            <div class="collapse navbar-collapse  main-data" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item all-navbar-content active">
                        <a class="nav-link px-3 all-data " href="/eAspire/page/home.php">Home</a>
                    </li>
                    <li class="nav-item all-navbar-content">
                        <a class="nav-link px-3 all-data" href="/eAspire/page/about.php">About Us</a>
                    </li>
                    <li class="nav-item all-navbar-content">
                        <a class="nav-link px-3 all-data" href="/eAspire/page/product.php">Product</a>
                    </li>
                    <li class="nav-item all-navbar-content">
                        <a class="nav-link px-3 all-data" href="/eAspire/page/services.php">Services</a>
                    </li>
                    <li class="nav-item all-navbar-content">
                        <a class="nav-link px-3 all-data" href="#">Career</a>
                    </li>
                    <li class="nav-item all-navbar-content">
                        <a class="nav-link px-3 all-data" href="#">Success Stories</a>
                    </li>
                    <li class="nav-item ml-5">
                        <div class="frame1">
                            <div class="contact mt-2" id="contactText">
                                <a href="#">Contact</a>
                            </div>
                        </div>
                    </li>

                  
                </ul>
            </div>
            <div class="menu-icon" onclick="toggleMenu()">☰</div>
        </nav>
         <div class="navbar menu-info">
           
            <ul class="nav-links">
              <li class="nav-item"><a href="#">Home</a></li>
              <li class="nav-item"><a href="#">About Us</a></li>
              <li class="nav-item"><a href="#">Products</a></li>
              <li class="nav-item"><a href="#">Services</a></li>
              <li class="nav-item"><a href="#">Contact</a></li>
            </ul>
          </div>
          
          <script>
            function toggleMenu() {
              var navLinks = document.querySelector('.nav-links');
              navLinks.classList.toggle('active');
            }
          </script>
    </header>
   




