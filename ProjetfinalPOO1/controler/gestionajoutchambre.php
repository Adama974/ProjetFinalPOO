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
    class GestionAjoutChambre {
        private $conn;
    
        public function __construct($conn) {
            $this->conn = $conn;
        }
    
        public function ajouterChambre() {
            if (isset($_REQUEST['nom_chambre'], $_REQUEST['numero_chambre'], $_REQUEST['date_expiration'], $_REQUEST['numero_batiment'])) {
                $nom = stripslashes($_REQUEST['nom_chambre']);
                $nom = mysqli_real_escape_string($this->conn, $nom);
                $numero_chambre = stripslashes($_REQUEST['numero_chambre']);
                $numero_chambre = mysqli_real_escape_string($this->conn, $numero_chambre);
                $date = stripslashes($_REQUEST['date_expiration']);
                $date = mysqli_real_escape_string($this->conn, $date);
                $numero_batiment = stripslashes($_REQUEST['numero_batiment']);
                $numero_batiment = mysqli_real_escape_string($this->conn, $numero_batiment);
    
                $query = "INSERT into `chambre` (nom_chambre, numero_chambre, numero_batiment, date_expiration)
                        VALUES ('$nom', '$numero_chambre', '$numero_batiment', '$date')";
                $res = mysqli_query($this->conn, $query);
    
                if ($res) {
                    echo '<h3>ajout chambre reussie</h3>';
                    echo '<h3>remplir le formulaire pour ajouter une autre chambre</h3>';
                }
            }
        }
    }
    
    ?>
</body>
</html>