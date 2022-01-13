<?php
ob_start();
?>

<div class="background_login">
    <div id="login">
        <a id="title_form">Connexion</a>
        <form method="post" action="?action=CheckLogin">
            <input id="username"  name="username" class="input_text" placeholder="Nom d'utilisateur" type="text">
            <input id="password" name="password" class="input_text" placeholder="Mot de passe" type="password">
            <input class="input_submit" type="submit" value="Connexion">
        </form>
    </div>
</div>


<?php
$contenu = ob_get_clean();

require "Layout.php";