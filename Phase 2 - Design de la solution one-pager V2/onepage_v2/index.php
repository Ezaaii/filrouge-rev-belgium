<?php
require "./DB.php";
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
$db = new DB();
$db->saveEmail();
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
<style media="screen">
.message{
background: yellow;
}
</style>
</head>
<body>
<div class="message">
<?= isset($_GET['message']) ? $_GET['message']: ""; ?>
<!-- Condition ternaire: C'est une condition isset verifique que la variable existe, et si oui (condition elle va chercher le message qui a été transmis en GET dans l'url $_GET['message'], sinon elle n'affiche rien "") -->
</div>
<form action="" method="post">
<input type="email" name="email">
<input type="submit" name="" value="inscription">
</form>

</body>
<script type="text/javascript">
let msg = document.querySelector(".message");
msg.addEventListener("click",function(){
msg.style.display = "none";
})
</script>
</html>
