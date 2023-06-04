<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class GestionAjoutEtudiant {
        private $conn;
    
        public function __construct($conn) {
            $this->conn = $conn;
        }
    
        public function ajouterEtudiant() {
            if (isset($_REQUEST['nom'], $_REQUEST['prenom'], $_REQUEST['date_de_naissance'], $_REQUEST['mot_de_passe'])) {
                $nom = stripslashes($_REQUEST['nom']);
                $nom = mysqli_real_escape_string($this->conn, $nom);
                $prenom = stripslashes($_REQUEST['prenom']);
                $prenom = mysqli_real_escape_string($this->conn, $prenom);
                $email = stripslashes($_REQUEST['email']);
                $email = mysqli_real_escape_string($this->conn, $email);
                $date = stripslashes($_REQUEST['date_de_naissance']);
                $date = mysqli_real_escape_string($this->conn, $date);
                $mot_de_passe = stripslashes($_REQUEST['mot_de_passe']);
                $mot_de_passe = mysqli_real_escape_string($this->conn, $mot_de_passe);
    
                $query = "INSERT into `etudiant` (nom, prenom, email, date_de_naissance, mot_de_passe)
                        VALUES ('$nom', '$prenom', '$email', '$date', '" . hash('sha256', $mot_de_passe) . "')";
                $res = mysqli_query($this->conn, $query);
    
                if ($res) {
                    echo '<h3>ajout etudiant reussie</h3>';
                    echo '<h3>remplir le formulaire pour ajouter un autre etudiant</h3>';
                }
            }
        }
    }
    
    ?>
</body>
</html>