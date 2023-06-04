<!DOCTYPE html>
<html>
    <head>
        <title>Gestion Chambre</title>
        <link href="../../asset/style/ajoutchambre.css" rel="stylesheet">
        
        <body>
        <?php
  require('confi.php');
  require('../../controler/gestionajoutadmin.php');

  
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  if (!isset($_SESSION["email"])) {
      header("Location: login.php");
      exit();
  }
  
  $gestionAjoutAdministrateur = new GestionAjoutAdministrateur($conn);
  $gestionAjoutAdministrateur->ajouterAdministrateur();
  
    
?>
        <div id="entetenoir"> 
            <div id="ndimg">
                <img src="../../asset/img/logoiam.jpg" width="300px" height="200">

            </div>
			<h1 id="messbv">Bienvenue <?php echo $_SESSION['email']; ?>!</h1>
            <p id="txt3">Administrateur</p>
            <a link href="pageconnexionadminreussie.php"> <button id="retour">  retour </button></a>
    
        </div>
        
            
        <form action="" method="post">
    <br> <br>
    <fieldset>
        <legend>Ajout administrateur</legend>
    </fieldset><br><br>

    <label>Identifiant (Adresse mail):</label>
    <input type="email" name="email" required><br><br>
    <label>Prénom:</label>
    <input type="text" name="prenom" required><br><br>
    <label>Nom:</label>
    <input type="text" name="nom" required><br><br>
    <label>Date de naissance:</label>
    <input type="date" name="date_de_naissance" required><br><br>
    <label>Mot de passe:</label>
    <input type="password" name="mot_de_passe" required><br><br>

    <button type="submit" name="ajoutadm">Ajouter</button>
</form>

              
        </body>
    </head>
</html>