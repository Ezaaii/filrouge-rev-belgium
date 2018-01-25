<?php
require "DB.php";
session_start();
if (isset($_SESSION['message'])) {
    session_destroy();
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = new DB();
    $db->saveEmail();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Les entendeur</title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-113111411-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-113111411-1');
    </script>

    <style media="screen">
        .messageDiv {
            background: #2b860c;
            width: 300px;
            padding: 5px;
            border-radius: 2px;
            z-index: 5;
            display: none;
        }

        .message {
            font-family: Arial;
            color: white;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="messageDiv">
    <p class="message"><?= isset($_SESSION['message']) ? $_SESSION['message'] : ""; ?></p>
    <!-- Condition ternaire: C'est une condition isset verifique que la variable existe, et si oui (condition elle va chercher le message qui a été transmis en GET dans l'url $_GET['message'], sinon elle n'affiche rien "") -->
</div>
<div class="un">
    <div class="centré">
        <h2>Une association à votre écoute</h2>
        <p>
            Vous désirez être tenu au courant des activités organisées par notre association?
        </p>
        <p>
            Inscrivez-vous à notre newsletter
        </p>
        <form class="" action="" method="post">
            <label for="mail">mail:</label>
            <input type="email" id="mail" name="email" value="" placeholder="votre adress mail">
            <input type="submit" name="" value="INSCRIPTION">
        </form>
    </div>
</div>
<div class="deux">
    <h1>Entendre des voix</h1>
    <h2>REV - BELGIUM</h2>
    <p class="sous-titre">
        REV-Belgium (Réseau des Entendeurs de Voix) est un réseau d'aide et d'information pour les personnes qui
        entendent des voix et/ou font l'expérience de perceptions inhabituelles.
    </p>
    <div class="blocks">
        <div class="block">
            <i class="fa i fa-users" aria-hidden="true"></i>
            <h3>Groupes d'entraides</h3>
            <p>
                Nos groupes d'entraide permettent à ceux qui entendent des voix de sortir de leur isolement pour
                partager en toute liberté et sans préjugé leurs expériences.
            </p>
        </div>
        <div class="block">
            <i class="i fa  fa-address-book-o" aria-hidden="true"></i>
            <h3>Evènements</h3>
            <p>
                Les congrès internationaux d'entendeur de voix permet un visibilité par delà les frontières de cette
                expérience encore taboue.
            </p>
        </div>
        <div class="block">
            <i class="fa i fa-bullhorn" aria-hidden="true"></i>
            <h3>Information</h3>
            <p>
                L'information, le soutien et la compréhension offert à ceux qui entendent des voix à déja permis à de
                nombreuses personnes de retrouver leur identité et de reprendre leur vie en mains.
            </p>
        </div>
    </div>

    <span>Copyright - REV - 2018 -  <a href="#">copyright</a></span>
</div>
<script type="text/javascript">
    let msg = document.querySelector(".messageDiv");
    msg.addEventListener("click", function () {
        msg.style.display = "none";
    });
    setTimeout(() => {
        msg.style.display = "none";
    },
    5000
    )
</script>
</body>
</html>
