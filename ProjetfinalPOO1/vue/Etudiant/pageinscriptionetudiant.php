<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <title></title>
        <link href="../../asset/style/pageinscriptionetudiant.css" rel="stylesheet">
    </head>
    <body>
    <?php

require('confi.php');
require('../../controler/inscriptionetudiant.php');

if (isset($_POST['submit'])) {
    $inscriptionEtudiant = new InscriptionEtudiant($conn);

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $dateNaissance = $_POST['date_de_naissance'];
    $motDePasse = $_POST['mot_de_passe'];

    if ($inscriptionEtudiant->inscrireEtudiant($nom, $prenom, $email, $dateNaissance, $motDePasse)) {
        header('Location: pageinscriptionreussie.php');
        exit();
    }
}
?>
        
         <div style="position:absolute;top:60px; width:1280px ;font-size: 25px ; ">

         <center>
                <form action="" method="post">
                <div> INSCRIPTION</div>
            <br>
            <label>Nom:</label>
                <input type="text" name="nom" required autocomplete="off"><br><br>
              
                <label>Prénom:</label>
                <input type="text" name="prenom" required autocomplete="off"><br><br>

                <label>adresse mail:</label>
                <input type="email" name="email" required autocomplete="off"><br><br>
              
                <label>Date de Naissance:</label>
                <input type="date" name="date_de_naissance" required autocomplete="off"><br><br>              
                <label>Mot De Passe:</label>
                <input type="password" name="mot_de_passe" required autocomplete="off"><br><br>
                
                <button type="submit" name="submit" id="inscrire" > S'inscrire </button>
                </form>
         </center>     
          </div>
            <div> <img src="../../asset/img/image1.jpg" width=100%  height=600 >  </div>
            <?php  ?>
    </body>

</html>