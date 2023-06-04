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
    class GestionChambre {
        private $conn;
    
        public function __construct($conn) {
            $this->conn = $conn;
        }
    
        public function getEtudiantsSansChambre() {
            $etudiants = $this->conn->query('SELECT * FROM etudiant WHERE Chambre = 0')->fetch_all();
            return $etudiants;
        }
    
        public function attribuerChambre($etudiantId) {
            $_SESSION['attribuer'] = $etudiantId;
            header('Location: attributionchambre2.php');
            exit();
        }
    }
    
    ?>
</body>
</html>