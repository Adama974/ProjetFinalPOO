<!DOCTYPE html>
<html>
    <head>
        <title>Gestion Chambre</title>
        <link href="../../asset/style/ajoutchambre.css" rel="stylesheet">
        
        <body>
        <?php
     require('confi.php');
     require('../../controler/gestionajoutchambre.php');
    
     
     // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
     if (!isset($_SESSION["email"])) {
         header("Location: login.php");
         exit();
     }
     
     $gestionAjoutChambre = new GestionAjoutChambre($conn);
     $gestionAjoutChambre->ajouterChambre();
     
    
?>
        <div id="entetenoir"> 
            <div id="ndimg">
                <img src="../../asset/img/logoiam.jpg" width="300px" height="200">

            </div>
			<h1 id="messbv">Bienvenue <?php echo $_SESSION['email']; ?>!</h1>
            <p id="txt3">Administrateur</p>
            <a link href="pageconnexionadminreussie.php"> <button id="retour">  retour </button></a>
    
        </div>
        
            
        <form method="post">
    <br> <br>
    <fieldset>
        <legend>Ajout de chambre d'étudiant</legend>
    </fieldset><br><br>

    <label>Nom de la chambre:</label>
    <input type="text" name="nom_chambre" required><br><br>
    <label>Numero Chambre:</label>
    <input type="number" name="numero_chambre" required><br><br>
    <label>Numero Batiment:</label>
    <input type="number" name="numero_batiment" required><br><br>
    <label>Date d'expiration:</label>
    <input type="datetime-local" name="date_expiration" required><br><br>

    <button type="submit" name="ajoutch">Ajouter</button>
</form>
              
        </body>
    </head>
</html>