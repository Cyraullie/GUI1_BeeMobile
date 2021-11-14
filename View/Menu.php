<?php
ob_start();
?>

    <div id="menu">
        <a class="icon" href="?action=Home"><i class="fas fa-home fa-2x"></i>Accueil</a>
        <a class="icon" href="?action=AgendaDay"><i class="fas fa-calendar-alt fa-2x"></i>Agenda</a>
        <a class="icon" href="?action=Photo&search=Varroas"><i class="fas fa-camera fa-2x"></i>Photo</a>
        <a class="icon" href="?action=Stats"><i class="fas fa-chart-bar fa-2x"></i>Stats</a>
        <a class="icon" href="?action=JDB"><i class="fas fa-book fa-2x"></i>JDB</a>
    </div>


<?php
$menu = ob_get_clean();
