<?php
ob_start();
?>
    <script type="module" src="View/JS/Horizontal_Swiper.js" defer></script>

    <div class="background">
        <div class="background_scrollable">
            <div class="background_hive">

                <a class="form title_day_hive"><?= $stats['date'] ?></a>
                <div class="form hive_area">
                    <form action="?action=UpdateStats" method="post">
                    <input type="hidden" name="hive" value="<?= $stats['hiveid'] ?>">
                    <input type="hidden" name="stat" value="<?= $stats['_id'] ?>">
                    <div class="stat_form_size">
                        <div class="title_note_hive">
                            <label for="weight">Poids en Kg</label>
                        </div>
                        <input id="weight" name="weight" class="area_child hive content form" min="0" value="<?= $stats['weight'] ?>" type="number">

                    </div>
                    <div class="stat_form_size">
                        <div class="title_note_hive">
                            <label for="humidity">Humidité en %</label>
                        </div>
                        <input id="humidity" name="humidity" class="area_child hive content form" min="0" value="<?= $stats['humidity'] ?>" type="number" >
                    </div>
                    <div class="stat_form_size">
                        <div class="title_note_hive">
                            <label for="temp">Temp °C</label>
                        </div>
                        <input id="temp" name="temp" class="area_child hive content form" min="0" value="<?= $stats['temperature'] ?>" type="number" >
                    </div>
                        <input class="button" value="Mettre à jour" type="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>


<?php
$contenu = ob_get_clean();
$footer = "Menu.php";
require "Layout.php";