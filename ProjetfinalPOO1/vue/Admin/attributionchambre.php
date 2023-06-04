<!DOCTYPE html>
<html>

<head>
    <title> Gestion chambre</title>
    <link href="../../asset/style/pageadmin3.css" rel="stylesheet">

<body>
    <?php
   require('confi.php');
   require('../../controler/gestionchambre.php');
   
   
   $gestionChambre = new GestionChambre($conn);
   
   if (isset($_POST['attribuer'])) {
       $etudiantId = $_POST['attribuer'];
       $gestionChambre->attribuerChambre($etudiantId);
   }
   
   $etudiants = $gestionChambre->getEtudiantsSansChambre();
   

    ?>
    <a id="ret" href="pageadmin3.php">Retour</a>
    <center>

        <div id="Admin"> Administrateur</div>
        <br><br>
        <div id="AMS">
    <h4>Etudiant sans chambre </h4>
    <table border="1px">
        <thead>
            <td>
                Prenom et nom
            </td>
            <td>
                Ajouter
            </td>
        </thead>

        <?php foreach ($etudiants as $etudiant) { ?>
        <tr>
            <td>
                <?php echo $etudiant['3'] . ' ' . $etudiant['1'] ?>
            </td>
            <td>
                <form action="" method="post">
                    <button value="<?php echo $etudiant['0']; ?>" name="attribuer">Attribuer</button>
                </form>
            </td>
        </tr>
        <?php  } ?>

    </table>
</div>

    </center>
</body>
</head>

</html>