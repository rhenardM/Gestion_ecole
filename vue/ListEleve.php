<?php   
      require '../model/connexion.php'; 
     // require '../model/Autoloader.php'; 
      //Model\Autoloader::register();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style=" background-color:  rgb(154, 153, 214);"><br><br><br>
<!-- svg icon for return the page register-->
<div style="margin-left: 80px; margin-top: -10px;">
<a href="Register.php"><svg style="color: #3623e8;" xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-left-square" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
   </svg></a><br><br><br>
<div class="container">
   <header style=" margin-right: 50px;" class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
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
</div>
<!-- the integration table-->
</div>
    <div class="conainer">
        <div class="card-header py-3">
            <div class="card mb-2 rounded-3  shadow-sm">
                <div class="card-header py-3">
                <table style="width:60vw; margin-top: 30px; margin-left: 410px;" class="table table-bordered table-responsive table-striped" >
                        <tr>
                            <th>Matricule</th>
                            <th>Prenom</th>
                            <th>Nom</th>
                            <th>Sexe</th>
                           
                            <th>Classe</th>
                            <th>Montant payer</th>
                            <th>Quartier</th>
                           
                            <th>Situation_classe</th>
                            <th>Situation_ecole</th>
                            <th>Action</th>
                        </tr>
                        <?php $db = new connexion('gestion_ecole');?>
                        <?php foreach ($db->query('SELECT * FROM tb_eleve') as $eleve):?>
                        <tr>
                            <td><?= $eleve->matricule ?> </td>
                            <td><?= $eleve->prenom ?></td> 
                            <td><?= $eleve->nom ?></td>
                            <td><?= $eleve->sexe ?></td>
                            
                            <td><?= $eleve->classe ?></td>
                            <td><?= $eleve->montantPaye?></td>
                            <td><?= $eleve->quartier ?></td>
                            
                            <td><?= $eleve->situation_classe ?></td>
                            <td><?= $eleve->situation_ecole ?></td>
                            <td><a href=""><svg style="color: #3623e8;" xmlns="http://www.w3.org/2000/svg"  width="25" height="25" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                            </svg></a></td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
            </div>
            </div>
            </div>
    <script src="js/bootstrap.js"></script>        
</body>
</html>