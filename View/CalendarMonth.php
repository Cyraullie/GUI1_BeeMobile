<?php
ob_start();
?>
<?php

$z = 0;
?>
    <div class="background">
        <div class="calendar_button">
            <a id="day" href="?action=AgendaDay" class="inactive">Jour</a>
            <a id="week" href="?action=AgendaWeek" class="inactive">Semaine</a>
            <a id="month" href="?action=AgendaMonth" class="active">Mois</a>
        </div>


        <h1 class="title"><?= date("F"); ?></h1>
        <div class="background_calendar">

            <table>
                <tr>
                    <th> lun</th>
                    <th> mar</th>
                    <th> mer</th>
                    <th> jeu</th>
                    <th> ven</th>
                    <th> sam</th>
                    <th> dim</th>
                </tr>
                <?php for ($y = 0; $y < (date('t') / 7); $y++): ?>
                    <tr>
                        <?php for ($i = 0; $i < 7; $i++): ?>
                            <?php if ($z == date("t")): break; endif; ?>
                            <td class="month">
                                <div class="title_day"></div>
                                <div class="area_parent <?= date("d")==$z+1 ? "thisDay" : "" ?>">
                                        <h1 class="dayOfMonth"><?= date('d', strtotime("+ {$z} day")); ?></h1>
                                </div>
                            </td>
                            <?php $z++; endfor ?>
                    </tr>
                <?php endfor ?>
            </table>
        </div>
    </div>


<?php
$contenu = ob_get_clean();
$footer = "Menu.php";
require "Layout.php";