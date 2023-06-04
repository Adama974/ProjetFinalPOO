
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link href="../../asset/style/pageadmin.css" rel="stylesheet">
    </head>
    <body>
    <?php
   
require('confi.php');
require('../../controler/connexionadmin.php');
session_start();

if (isset($_POST['se_connecter'])) {
    $connexionAdministrateur = new ConnexionAdministrateur($conn);

    $email = $_POST['email'];
    $motDePasse = $_POST['mot_de_passe'];

    $user = $connexionAdministrateur->seConnecter($email, $motDePasse);

    if ($user) {
        $_SESSION['email'] = $email;
        header('Location: pageadmin3.php');
        exit();
    } else {
        echo "<script>alert(\"Vérifiez bien vos identifiants\")</script>";
    }
}

?>

  

        <div id="entetenoir"> 
            <div id="ndimg">
                <img src="../../asset/img/logoiam.jpg" width="300px" height="200">

            </div>
            <p id="txt3">Administrateur</p>
            <a link href="../../index.php"> <button id="retour">  Accueil </button></a>
    
        </div>
        //div pour l'image
        <div id="stimg">
            <div id="formula">

            </div>
            <div> 
                <form action="" method="post" id="formula" >
                    <div id="connect">
                        <p id="txt2">
                            connectez-vous
                        </p>

                    </div>
                    <div>
                        <input type="email" id="mail" name="email" placeholder="             azerty12@example.com">
                    </div>
                    <div>
                        <input type="password" id="mdp" name="mot_de_passe" placeholder="        votre_mot_de_passe" ></input>
                    </div>
                    <div>
                        <button type="submit" id="seconnect" name="se connecter"  >     se connecter </button>
        
                    </div>
                   
                    <?php if (! empty($message)) { ?>
    <p class="errorMessage"><?php echo $message; ?></p>
     <?php } ?>
                </form>
            </div>
            <img src="../../asset/img/image1.jpg" width=100%>


        </div>
       


    </body>

</html>