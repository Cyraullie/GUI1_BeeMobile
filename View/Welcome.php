<?php
ob_start();
?>

<div class="background_welcome">

    <a id="title">BeeMobile</a>
    <div id="welcome">
        <p>Vous avez déjà un compte ?</p>
        <a class="button" href="?action=Login" >Se connecter</a>
        <a href="?action=Register">Sinon inscrivez-vous en cliquant ici</a>
    </div>
</div>


<?php
$contenu = ob_get_clean();

require "Layout.php";