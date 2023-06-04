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
    class ConnexionAdministrateur {
        private $conn;
    
        public function __construct($conn) {
            $this->conn = $conn;
        }
    
        public function seConnecter($email, $motDePasse) {
            $email = $this->sanitizeInput($email);
            $motDePasse = $this->sanitizeInput($motDePasse);
    
            $query = "SELECT * FROM administrateur WHERE email='$email' AND mot_de_passe='$motDePasse'";
            $result = mysqli_query($this->conn, $query) or die('Impossible de se connecter au serveur MySQL');
    
            if (mysqli_num_rows($result) == 1) {
                $user = mysqli_fetch_assoc($result);
                return $user;
            } else {
                return false;
            }
        }
    
        private function sanitizeInput($input) {
            $input = stripslashes($input);
            $input = mysqli_real_escape_string($this->conn, $input);
            return $input;
        }
    }
    
    ?>
</body>
</html>