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

class InscriptionEtudiant {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function inscrireEtudiant($nom, $prenom, $email, $dateNaissance, $motDePasse) {
        $nom = $this->sanitizeInput($nom);
        $prenom = $this->sanitizeInput($prenom);
        $email = $this->sanitizeInput($email);
        $dateNaissance = $this->sanitizeInput($dateNaissance);
        $motDePasse = $this->sanitizeInput($motDePasse);

        $hashedMotDePasse = hash('sha256', $motDePasse);

        $query = "INSERT INTO etudiant (nom, prenom, email, date_de_naissance, mot_de_passe)
                  VALUES ('$nom', '$prenom', '$email', '$dateNaissance', '$hashedMotDePasse')";

        $res = mysqli_query($this->conn, $query);

        if ($res) {
            return true;
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