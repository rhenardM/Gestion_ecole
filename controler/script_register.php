<?php 
    $benrg= @$_POST["benrg"];
    $matricule= @$_POST["matricule"];
    $prenom = @$_POST["prenom"];
    $nom = @$_POST["nom"];
    
    $classe2 = @$_POST["classe2"];
    $mtpaye=  @$_POST["mtpaye"];
    $sexe= @$_POST["sexe"];
    $dateN =@$_POST["dateN"];
    $classe = @$_POST["classe"];
    $quartier= @$_POST["quartier"];
    $contact = @$_POST["contact"];
    $s_classe =@$_POST["s_classe"];
    $s_ecole =@$_POST["s_ecole"]; 
    $message='';
    $message2='';
        //register élèves
        if(isset($benrg)){ 
            if(empty($matricule)) $message="<li>Matricule laissez vide!</li>";
            if(empty($prenom)) $message.="<li>Prenom laissez vide! </li>";
            if(empty($nom))$message.="<li>Nom laissez vide!</li>";
            if(empty($classe)) $message="<li>Veuillez saisir La classe de l'élève !</li>";
            if(empty($dateN))$message.="<li>Veuillez saisir vore date de naissance !</li>";
            if(empty($s_classe)) $message.="<li>  Situation classe laissez vide! </li>";
            if(empty($s_ecole)) $message.="<li> Situation école laissez vide!</li>";
            if(empty($message and  $message2)){
                include ('../model/connexion.php');
                if (isset($_POST['benrg']) && !empty($matricule) && !empty($nom) && !empty($prenom) && !empty($sexe) && !empty($classe)
                && !empty($dateN) && !empty($quartier) && !empty($contact) && !empty($s_classe) && !empty($s_ecole)) {
                    $sql=$pdo->prepare("INSERT INTO tb_eleve(  matricule,
                                                               prenom,
                                                               nom,
                                                               sexe,
                                                               dateNaissance,
                                                               classe,
                                                               montantPaye,
                                                               quartier,
                                                               contacTuteur,
                                                               situation_classe,
                                                               situation_ecole) 
                                                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?)");                             
                    $sql->execute(array($matricule,$prenom,$nom,$sexe,$dateN,$classe,$mtpaye,$quartier,$contact,$s_classe,$s_ecole,));                              
                                          
                    if($sql){
                        $message2.= "<b>Inscription éffectuée avec succès! </b>";
                            }else{
                        $message="<b>Erreur ! </b>";
                        }
        }
    }
}

?>