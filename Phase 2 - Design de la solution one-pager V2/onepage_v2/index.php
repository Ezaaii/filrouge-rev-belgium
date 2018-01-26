<?php
require "./DB.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = new DB();
    $db->saveEmail();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Les entendeurs de voix</title>
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-113111411-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', 'UA-113111411-1');
    </script>
</head>
<body>
<div class="messageDiv">
    <p class="message"><?= isset($_SESSION['message']) ? $_SESSION['message'] : ""; ?></p>
</div>

<div class="messageDivAlt">
    <p class="messageAlt"><?= isset($_SESSION['messageAlt']) ? $_SESSION['messageAlt'] : ""; ?></p>
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
            <input type="email" id="mail" name="email" value="" placeholder="votre adress mail">
            <input type="submit" name="" value="Inscription">
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
            <i class="i fa  fa-calendar" aria-hidden="true"></i>
            <h3>Evènements</h3>
            <p>
                Les congrès internationaux d'entendeur de voix permet un visibilité par delà les frontières de cette
                expérience encore taboue.
            </p>
        </div>
        <div class="block">
            <i class="fa i fa-clipboard" aria-hidden="true"></i>
            <h3>Information</h3>
            <p>
                L'information, le soutien et la compréhension offert à ceux qui entendent des voix à déja permis à de
                nombreuses personnes de retrouver leur identité et de reprendre leur vie en mains.
            </p>
        </div>
    </div>

    <span class="copyright">Copyright - REV - 2018 -  <a href="#">copyright</a></span>
</div>
<script type="text/javascript">
    let msgText1 = document.querySelector(".message");
    let msgText2 = document.querySelector(".messageAlt");
    let msgDiv = document.querySelector(".messageDiv");
    let msgDivAlt = document.querySelector(".messageDivAlt");

    if (msgText1.innerHTML === "") {
        msgDiv.style.display = "none";
    }
    else {
        msgDiv.style.display = "block";
    }

    if (msgText2.innerHTML === "") {
        msgDivAlt.style.display = "none";
    }
    else {
        msgDivAlt.style.display = "block";
    }


    setTimeout(function () {
        msgDiv.style.display = "none";
        msgDivAlt.style.display = "none";
    }, 5000);
</script>
</body>
</html>
