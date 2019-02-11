<?php

/* Connexion a la bdd */
try {
    $bdd = new PDO('mysql:host=localhost;dbname=Espace_Membre;charset=utf8', 'root', 'root');

}

catch(Exception $e){
    die('ERROR :'.$e->getMessage());
}

$pass_hache = password_hash($_POST['Mot_de_passe'], PASSWORD_DEFAULT);
$pass_hache2 = password_hash($_POST['Confirm_Mot_de_passe'], PASSWORD_DEFAULT);

//Insertion des donnnes dans la bdd via une requete SQL//

$reqs = $bdd->prepare('INSERT INTO  membres(Civilite,Nom,Prenom,Telephone,Email,Confirmation,Mot_de_passe,Confirm_Mot_de_passe,Adresse,Code_postal,Ville) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
$reqs->execute(array($_POST['Civilite'], $_POST['Nom'], $_POST['Prenom'], $_POST['Telephone'], $_POST['Email'], $_POST['Confirmation'], $pass_hache = $_POST['Mot_de_passe'], $pass_hache2 = $_POST['Confirm_Mot_de_passe'], $_POST['Adresse'], $_POST['Code_postal'],$_POST['Ville']));

header('Location: src/templates/menu.php');
?>