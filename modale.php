<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <!-- Modal login -->
<div class="container">
        <div class="modal fade" data-bs-backdrop="static" id="modal1" >
            <div class="modal-dialog  modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"></h4>
                        <button type="button" class="close btn btn-danger" data-bs-dismiss="modal">x</button>
                    </div>
                    <div class="modal-body" >
                      <h4 class="mb-3-fw-normal">Kayeye etikali okotisa makambu awa</h4>
                         
                    </div>
                    <div class="modal-footer">
                      <p class="mt-5 mb-3 text">&copy; Frecnch_coder</p>
                      <p class="mt-5 mb-3 text"> 2022–2023</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Modal register -->
    <div class="container">
    <div class="modal fade" data-bs-backdrop="static" id="modal2"><br><br><br><br><br><br>
      <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content  ">
          <div class="modal-header">

              <h4 class="modal-title"></h4>
                <button type="button" class="close btn btn-danger" data-bs-dismiss="modal">x</button>
                  </div>
                  <div class="modal-body" >
                    <main class="form-signin w-100 m-auto">
                      <div class="group-form">
                        <form name="form" method="POST" enctype="multipart/form-data">
                          <h2>Crée un compte compte admin</h2>
                            <div class="form-loating">
                              <label for="floatingInput">Nom</label >   
                              <input type="text" name="name" class="form-control"placeholder="">
                              </div>
                              <div class="form-loating">
                              <label for="floatingInput">Prenom</label >   
                              <input type="text" name="firtname" class="form-control"placeholder="">
                              </div>
                              <div class="form-loating">
                              <label for="floatingInput">Login</label >   
                              <input type="text" name="login" class="form-control"placeholder="" require>
                              </div>
                              <div class="form-floatin">
                              <label for="floatingInput">Mot de passe</label>
                              <input type="password" name="pass" class="form-control"placeholder="">
                              </div>
                              <div class="form-floatin">
                              <label for="floatingInput">Confirmation mot de passe</label>
                              <input type="password" name="repass" class="form-control"placeholder="">
                              </div>
                              <br>
                              <div>
                              <button type="submit" name="valider" class="w-100 btn btn-primary " >submit</button>
                            </form>
                            </div>
                          </main> 
                    </div>
                    <div class="modal-footer">
                      <p class="mt-5 mb-3 ">&copy; Frecnch_coder</p>
                      <p class="mt-5 mb-3 "> 2022–2023</p><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.js"></script>
</body>
</html>