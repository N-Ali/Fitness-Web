<?php

/* Connexion a la bdd */
try {
    $bdd = new PDO('mysql:host=localhost;dbname=Espace_Membre;charset=utf8', 'root', 'root');

}

catch(Exception $e){
    die('ERROR :'.$e->getMessage());
}

//Insertion des donnnes dans la bdd via une requete SQL//

$reqs = $bdd->prepare('INSERT INTO  membres(Civilite,Nom,Prenom,Telephone,Email,Confirmation,Adresse,Code_posta,Ville) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)');
$reqs->execute(array($_POST['Civilite'], $_POST['Nom'], $_POST['Prenom'], $_POST['Telephone'], $_POST['Email'], $_POST['Confirmation'], $_POST['Adresse'], $_POST['Code_postal'],$_POST['Ville']));

echo $_POST['Civilite'] . ' : '. $_POST['Nom'];
//header('Location: formulaire_contacte.php');
?>