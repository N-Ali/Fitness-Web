<!DOCTYPE>
<html>
    <head>
        <title>Inscription</title>
        <meta charset="utf-8"/>

    </head>

    <body>
      <div class ="Paragraphe_inscription">
        <h1>Inscription en ligne</h1>
            <p>Rejoignez notre club de sport</p>

      </div>


      <!-- div qui va englober tout le formulaire -->
    <div class="formulaire">
        <form action="inscription.php" method="post">

            <!-- creation du champ civilité-->
            <div class = "forme">
                <label for="Civilite">Civilité</label>
                    <div class ="choix_civilite">
                        <select name="Civilite">
                            <option value="Monsieur">Monsieur</option>
                            <option value="Madame">Madame</option>
                        </select>
                    </div>
            </div>

            <!-- creation du champ Nom-->
            <div class="forme">
                <label for="Nom">Nom</label>
                    <div class="champ">
                        <input type="text" name="Nom" id="Nom">
                    </div>
            </div>
            <!-- creation du champs prenom-->
            <div class="forme">
                <label for="Prenom">Prenom</label>
                <input type="text" name="Prenom" id="Prenom">
            </div>

            <!-- creation du champs telephone-->
            <div class="forme">
                <label for="Telephone">Télephone</label>
                <input type="text" name="Telephone" id="Telephone">

            </div>

            <!--creation du champ email-->
            <div class="forme">
                <label for="Email">E-mail</label>
                <input type="text" name="Email" id="Email">

            </div>

            <!-- creation du champ confirmation email-->
            <div class ="forme">
                <label for="Confirmation">Confirmation de l'email</label>
                <input type="text" name="Confirmation" id="Confirmation">
            </div>

            <!--creation du champs adresse-->
            <div class="forme">
                <label for="Adresse">Adresse</label>
                <input type="text" name="Adresse" id="Adresse">
            </div>

            <!-- creation du champs code postal-->
            <div class="forme">
                <label for="Code_postal">Code Postal</label>
                <input type="text" name="Code_postal" id="Code_postal">
            </div>

            <!-- creation du champs ville-->
            <div class="forme">
                <label for="Ville">Ville</label>
                <input type="text" name="Ville" id="Ville">
            </div>

            <!-- creation du div pour soumettre-->
            <div class="soumission">
                <input type="submit" values="envoyer">
            </div>
        </form>
    </div>

<!-- Partie du PHP -->
<?php

/* Connexion a la base de donnée */

try{
  $bdd = new PDO('mysql:host=localhost;dbname=Espace_Membre;charset=utf8','root','root');
}
catch(Exception $e){
  die('ERROR :'. $e->getMessage());

}

$req = $bdd->query('SELECT * FROM membres');

/* test pour voir si la bdd fonctionne bien */
while($data = $req->fetch()){
  echo $data['Nom'];

  $req->closeCursor();


}



?>



  </body>


</html>
