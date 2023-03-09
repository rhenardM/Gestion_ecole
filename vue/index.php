<?php include_once '../controler/script_login.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/StyleLogin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body style="background-color: rgb(154, 153, 214);;">
<div class="container">
    <main class="form-signin ">
        <!-- form login -->
    <form heigt style=" margin-top: -100px;" method="post">
        <svg style="color: #000; margin-left: 195px; " xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
        </svg> <br><br>
        <!-- Message Error from script_login.php ! -->
        <?php if(!empty($erreur)){?>          
        <div class="alert alert-danger d-flex align-items-center" role="alert" >
        <svg  xmlns="http://www.w3.org/2000/svg"  width="25px" height="20px" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </svg>
            <?php echo $erreur?></div>
        <?php }?>
        <!-- fin Message --> 
        <div class="form-floating">
        <input type="text" name="username" class="form-control" id="floatingInput" placeholder="username">
        <label for="floatingInput">Nom d'utilisateur</label>
        </div><br>
        <div class="form-floating">
        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Mot de passe</label>
        </div>
        <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Se souvenir de moi
        </label>
        </div>
        <button type="submit" name="valider" class="w-100 btn btn-lg btn-primary">valider</button>    
        <p class="mt-5 mb-3 text-muted">Frecnch_coder&copy; 2022–2023</p>
    </form>
    </main>
    </div>
    <script src="js/bootstrap.js"></script>
</body>
</html>