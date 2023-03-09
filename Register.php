<?php require 'script_register.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="Register.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style=" background-color:  rgb(154, 153, 214);">
<div class="container">

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="">Acceuil</a>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Tapez recherche..." aria-label="Search">
            <div class="navbar-nav">
                <div class="nav-item text-nowrap">
                <a type="submit" class="nav-link px-3" href="#">Chercher</a>
                </div>
            </div>
        </header><br>  
<div class="card mb-4 rounded-3  shadow-sm">
<div class="card-header py-">
<main class="form-signin">
<form method="post" style="margin-top: -90px;">
    <h1 style="color: rgb(154, 153, 214);"class="h3 mb-3 fw-bold">Formulaire d'inscription des élèves</h1>
    <!--Message error ! -->
    <?php if (!empty($message)) {?>
      <div class="alert alert-danger">
        <?= $message ?>
      </div>
    <?php } ?>
    <!--Success Message ! -->    
    <?php if (!empty($message2)) {?>
      <div class="alert alert-success">
        <?= $message2 ?>
      </div>
    <?php } ?>
  <div class="mb-3">
  <!--from register ! -->  
    <div class="form-floating">
     <input type="number" name="matricule" value="<?php echo $matricule;?>" class="form-control" id="floatingInput" placeholder="Matricule">
     <label for="floatingInput">Matricule</label>
    </div><br>
    <div class="form-floating">
    <input type="text" name="prenom" value="<?php echo $prenom;?>" class="form-control" id="floatingPassword" placeholder="prenom">
    <label for="floatingPassword">Prenom</label>
    </div><br>

    <div class="form-floating">
    <input type="text" name="nom" value="<?php echo $nom;?>" class="form-control" id="floatingPassword" placeholder="nom">
    <label for="floatingPassword">Nom</label>
    </div><br>
  
    <div class="form-floating">
    <input type="select" name="sexe" value="<?php echo $sexe; ?>" class="form-control" id="floatingPassword" placeholder="sexe">
    <label for="floatingPassword">Sexe</label>
    </div><br>

    <div class="form-floating">
    <input type="text" name="dateN" class="form-control" id="floatingPassword" placeholder="Date naissance">
    <label for="floatingPassword">Date de naissance</label>
    </div><br>

    <div class="form-floating">
    <input type="text" name="classe" value="<?php echo $classe; ?>" class="form-control" id="floatingPassword" placeholder="classe">
    <label for="floatingPassword">Classe</label>
    </div><br>

    <div class="form-floating">
    <input type="number" name="mtpaye" class="form-control" id="floatingPassword" placeholder="Acompte_frais">
    <label for="floatingPassword">Montant payé</label>
    </div><br>

    <div class="form-floating">
    <input type="txt" name="quartier" class="form-control" id="floatingPassword" placeholder="Quartier">
    <label for="floatingPassword">Quartier</label>
    </div><br>

    <div class="form-floating">
    <input type="text" name="contact" class="form-control" id="floatingPassword" placeholder="contact">
    <label for="floatingPassword">Contact du tuteur</label>
    </div><br>

    <div class="form-floating">
    <input type="text" name="s_classe" value="<?php echo $s_classe; ?>" class="form-control" id="floatingPassword" placeholder="@exemple_nouveau">
    <label for="floatingPassword">Situation en classe</label>
    </div><br>

    <div class="form-floating">
    <input type="text" name="s_ecole" value="<?php echo $s_ecole; ?>" class="form-control" id="floatingPassword" placeholder="sit_école">
    <label for="floatingPassword">Situation école</label>
    </div><br>

    <button  type="submit" name="benrg" class="w-300 btn btn-lg btn-primary">Enregistrer</button>&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;

    <a type="submit" name="anuler" class="w-300 btn btn-lg btn-secondary" href="Home.php">Annuler</a>&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;

    <div style="margin-left: 600px;">
    <a type="submit" name="check" class="w-300 btn btn-lg btn-success" href="ListEleve.php">Check_liste_élève</a>
    </div>

    <p class="mt-5 mb-3 text-muted">Frecnch_coder&copy; 2022–2023</p>
</form>
</main>
</div>
</div>
</div>
<script src="js/bootstrap.js"></script>
</body>
</html>