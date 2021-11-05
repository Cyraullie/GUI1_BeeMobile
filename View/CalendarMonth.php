<?php
ob_start();
?>
<?php

$z = 1;
?>
    <div class="background">
        <div class="calendar_button">
            <a id="day" href="?action=AgendaDay" class="inactive">Jour</a>
            <a id="week" href="?action=AgendaWeek" class="inactive">Semaine</a>
            <a id="month" href="?action=AgendaMonth" class="active">Mois</a>
        </div>
        <!-- Slider main container -->
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->

                    <?php for ($x = 0; $x <= 11; $x++): ?>

                    <div class="swiper-slide">
                        <div class="background_calendar">
                        <h1 class="title"><?= date("F", strtotime("+ {$x} month")); ?></h1>
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

                            <?php for ($y = 0; $y < (date('t', strtotime("+ {$x} month")) / 7); $y++): ?>
                                <tr>
                                    <?php for ($i = 0; $i < 7; $i++): ?>

                                        <td class="month">
                                            <div class="title_day"></div>
                                            <div class="area_parent <?= date("d") == $z ? "thisDay" : "" ?>">
                                                <h1 class="dayOfMonth"><?= ($z <= 9) ? "0" . $z : $z ?></h1>
                                            </div>
                                        </td>
                                        <?php if ($z == date("t", strtotime("+ {$x} month"))): $z = 1;
                                            break; endif; ?>
                                        <?php $z++; endfor ?>
                                </tr>
                            <?php endfor ?>
                        </table>
                        </div>
                    </div>
                    <?php endfor ?>

            </div>
        </div>
    </div>


<?php
$contenu = ob_get_clean();
$footer = "Menu.php";
require "Layout.php";