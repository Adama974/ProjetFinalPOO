<!DOCTYPE html>
<html>

<head>
    <link href="../../asset/style/pageconnexionetudiantreussie.css" rel="stylesheet">
</head>

<body>
    <?php
	require('confi.php');
	// Initialiser la session
	$email = $_SESSION['email'];
	$etudiant = $conn->query("SELECT * FROM etudiant where email= '$email' ")->fetch_all();
	var_dump($etudiant);
	$Chambre = $conn->query("SELECT * FROM chambre where id=" . $etudiant[0][6])->fetch_all();
	// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
	if (!isset($_SESSION["email"])) {
		header("Location: pageconnexionetudiant.php");
		exit();
	}

	?>
    <div id="entetenoir">
        <div id="ndimg">
            <h1 id="bve">Bienvenue <?php echo $_SESSION['email']; ?>!</h1>
            <div id="exit"><img src="../../asset/img/exit.png"></div>
        </div>

        <a href="deconnexionetudiant.php" id="de">deconnexion</a>


        <div id="sleep"><img src="../../asset/img/sleep.png"></div>
        <a id="chambre" href="#">chambre</a>


        <div id="profil"><img src="../../asset/img/user.png"></div>
        <a id="lepro" href="pageconnexionetudiantreussieprofil.php">profil</a>
    </div>
    <div id="stimg">
    </div>
    <div id='lemes'>

        <?php
		echo $_SESSION['email'];
		if ($etudiant[0][6] == 0) {
		?></br>
        <h1>Vous n'avez pas encore de chambre</h1>
        <?php } else {
			echo '</br>Id de ta chmbre : ' . $Chambre[0][0] . '<br/>';
			echo 'Nom de ta chahmbre : ' . $Chambre[0][1] . '<br/>';
			echo 'date expiration : ' . $Chambre[0][4] . '<br/>';
			echo 'Numero batiment : ' . $Chambre[0][3] . '<br/>';
		} ?>


    </div>

    <div id="backg">
        <img width=100% src="../../asset/img/chambre.jpg" alt="">
    </div>



</body>

</html>