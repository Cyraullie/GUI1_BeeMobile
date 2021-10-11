<?php
ob_start();
?>

<div class="background">
    <div id="login">
        <a id="title_form">Connexion</a>
        <form method="get">
            <input type="hidden" name="action" value="home">
            <input class="input_text" placeholder="Nom d'utilisateur" type="text">
            <input class="input_text" placeholder="Mot de passe" type="password">
            <input class="input_submit" type="submit" value="Connexion">
        </form>
    </div>
</div>


<?php
$contenu = ob_get_clean();
$footer = "Menu.php";
require "Layout.php";