<?php
ob_start();
?>

    <div class="background_login">
        <div id="login">
            <a id="title_form">Inscription</a>
            <form  method="post" action="?action=CheckRegister">
                <input type="hidden" name="action" value="Home">
                <input class="input_text" name="username" placeholder="Nom d'utilisateur" type="text">
                <input class="input_text" name="password" placeholder="Mot de passe" type="password">
                <input class="input_text" name="confirm_password" placeholder="Confirmer mot de passe" type="password">
                <input class="input_submit" type="submit" value="Connexion">
            </form>
        </div>
    </div>


<?php
$contenu = ob_get_clean();

require "Layout.php";