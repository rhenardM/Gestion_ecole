<?php 
  session_start();
  require 'modale.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="HomeStyle.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </script>
    <title>Accueil</title>
</head>
<header>
  <!-- The bar a navigation -->
        <a href="#" class="logo"> <span>Name</span> School</a>
        <div class="menutoggle" onclick="toggleMenu();"></div>
            <ul class="navbar">
                <li><a href="#banniere" onclick="toggleMenu">Accueil</a></li>
                <li><a href="#Autres" onclick="toggleMenu">Service</a></li>
                <li><a href="#apropos" onclick="toggleMenu">Apropos</a></li>
                <li><a href="#contact" onclick="toggleMenu">Contact</a></li>
                <a href="login.php" class=" btn-reserve" data-bs-toggle="modal" data-bs-target="#modal2"  onclick="toggleMenu();">Crée compte</a>
                <a href="index.php" class=" btn-reserve">S'authrntifier</a>
            </ul>
    </header>
    <br><br><br><br><br>
  <!-- Message from welcome -->
      <div class="alert alert-success d-flex align-items-center" role="" >
        <?php echo "Bonjour ",$_SESSION['vérification'];?>
      </div>

<body onload="" style=" background-color: rgb(154, 153, 214);">
<!-- integration firt section card-->
    <div class="album py-5 bg-">
    <div class="container">    
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <!-- firt card-->
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-bold">Notre progamme</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title"><small class="fw-light"></small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <img src="image/educ.jpg" alt="" height="200px">
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary">Tout voir</button>
          </div>
        </div>
      </div>
  <!-- second card-->
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-bold">Blog Inscription élève</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title"><small class="fw-light"></small></h1>
            <ul class="list-unstyled mt-3 mb-4">
            <img src="image/561_view.png" alt="" height="200px">
              <li></li>
              <li></li>
              <li></li>
              <li></li>
            </ul>
            <a href="Register.php"><button type="button" class="w-100 btn btn-lg btn-primary">S'inscrire</button></a>
          </div>
        </div>
      </div>
  <!--Third card-->
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3 text">
            <h4 class="my-0 fw-bold">Gestion</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title"><small class="fw-light"></small></h1>
            <ul class="list-unstyled mt-3 mb-4">
            <img src="image/gest.jpg" alt="" height="200px">
            </ul>
            <a href="Gestion.php" class="w-100 btn btn-lg btn-primary">Notre gestion</a>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>  
<!-- integration second section card-->
    <div class="album py-5 bg-">
    <div class="container">    
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <!-- firt card-->
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-bold">Nos archives</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title"><small class="fw-light"></small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <img src="image/liv.webp" alt="" height="200px">
            </ul>
            <button onclick="f()" type="button" class="w-100 btn btn-lg btn-primary">Get started</button>
          </div>
        </div>
      </div>
  <!-- second card-->      
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-bold">Nouveaux élèves inscrit</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title"><small class="fw-light"></small></h1>
            <ul class="list-unstyled mt-3 mb-4">
            <img src="image/news.jpg" alt="" height="200px">
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary">Tout voir</button>
          </div>
        </div>
      </div>
  <!--Third card-->
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3 text">
            <h4 class="my-0 fw-bold">Ledership</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title"><small class="fw-light"></small></h1>
            <ul class="list-unstyled mt-3 mb-4">
            <img src="image/63bbf632320c33c88b18db39e3ace7c9.jpg" alt="" height="200px">
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary">Consulter</button>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
    <script src="js/bootstrap.js"></script>
</body>
</html>