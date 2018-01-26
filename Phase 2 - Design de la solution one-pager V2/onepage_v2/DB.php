<?php

class DB // Création d'une classe pour se connecter à la DB
{
    public $db;

    public function __construct() // On crée un fonction de connection à la DB.
    {
        try {
            $this->db = new PDO('mysql:host=sql305.epizy.com;dbname=epiz_21478926_preinscription', 'epiz_21478926', 'entendeur'); //objet PDO contenant les infos de connection à la DB (nom DB, username et mot de passe)
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (Exception $exception) {
            die($exception);
        }
    }

    public function saveEmail()// prépare insertion du mail que l'on va recevoir de l'utilisateur
    {
        session_start();
        session_destroy();

        if ($_SERVER['REQUEST_METHOD'] == 'POST')// On vérifie si le mail à bien été envoyé avec la méthode POST
        {
            session_start();
            $mail = isset($_POST['email']) ? $_POST['email'] : "";
            if ($mail != "") {
                $req = $this->db->prepare("SELECT * FROM email where email = (?)");
                $req->execute([$mail]);
                $nbRow = count($req->fetchAll());

                if ($nbRow > 0) {
                    $_SESSION['messageAlt'] = "Cette adresse mail est déja enregistrée";
                } else {
                    $mail = isset($_POST['email']) ? $_POST['email'] : "";
                    $req = $this->db->prepare("insert into email (email) value (?)");//value(?) cela correspond au nombre d'élément que l'on veut insérer. Le nombre de point d'interrogation est le même que le nombre d'élément que l'on veut insérer. Ici 1 seul point car juste élement = adresse mail.
                    $req->execute([$mail]);//La requête va aller chercher $mail qui correspond au premier point d'interrogation. Attention l'ordre des éléments quand il y en a plusieurs est important premier point interrogation correspond au premier element , etc...
                    $_SESSION['message'] = "Bravo, Votre inscription est validée";
                }
            }
        }
    }

}

?>
