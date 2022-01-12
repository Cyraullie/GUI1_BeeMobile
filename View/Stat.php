<?php
ob_start();

?>
    <script type="module" src="View/JS/Horizontal_Swiper.js" defer></script>

    <div class="background">
        <div class="background_scrollable">


            <?php foreach ($user as $hive) { ?>
                <button class="accordion title_hive"><?= $hive["hives"]['name'] ?></button>
                <div class="panel background_hive">
                    <div class="panel background_center">
                        <?php foreach ($hive['hives']['stats'] as $stat) { ?>

                        <button class="accordion title_day_hive"><?= $stat['date'] ?></button>
                        <div class=" panel area_parent hive">
                            <div class="hive_area">
                                <div class="stat_size">
                                    <div class="title_note_hive">
                                        <a>Poids</a>
                                    </div>
                                    <div class="area_child hive">
                                        <div class="content">
                                            <a><?= $stat['weight'] ?> Kg</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="stat_size">
                                    <div class="title_note_hive">
                                        <a>Humidité</a>
                                    </div>
                                    <div class="area_child hive">
                                        <div class="content">
                                            <a><?= $stat['humidity'] ?>%</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="stat_size">
                                    <div class="title_note_hive">
                                        <a>Temp °C</a>
                                    </div>
                                    <div class="area_child hive">
                                        <div class="content">
                                            <a><?= $stat['temperature'] ?>°C</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>


<?php
$contenu = ob_get_clean();
$footer = "Menu.php";
require "Layout.php";