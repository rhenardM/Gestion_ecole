<?php require 'modale.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: rgb(154, 153, 214);">
  <div class="container" style="margin-left: 750px; margin-top: 100px;">
    <main class="form">
        <table>
	        <tr>
                <td>
                    <input class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal1" type="submit" name="bliste" value="LISTE DES ELEVES D'UNE CLASSE" class="bouton2">
                </td>
                    <td>
                        <select name="classe2" id="" >
                            <option  value="6eme H">6eme</option>
                            <option  value="5eme H">5eme</option>
                            <option  value="4eme H">4eme</option>
                            <option  value="3eme H">3eme</option>
                            <option  value="2eme">8eme</option>
                            <option  value="2eme">7eme</option>
                            <option  value="6eme">6eme</option>
                            <option  value="5eme">5eme</option>
                            <option  value="4eme">4eme</option>
                            <option  value="3eme">3eme</option>
                            <option  value="2eme">2eme</option>
                            <option  value="1ere">1ere</option>>
                    </select>
                </td>
            </tr>
	    </table>
        <div class="btn-group">
            <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                Action
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Separated link</a></li>
            </ul>
        </div>
    </main>
</div>
<script src="js/bootstrap.js"></script>
</body>
</html>