<?php
ob_start();
$user = $DBuser;
?>
    <script type="module" src="View/JS/Horizontal_Swiper.js" defer></script>
<?php foreach ($DBuser as $user){ ?>
    <div class="background">
        <div class="background_scrollable">
            <?php foreach ($user["hives"] as $hive) { ?>
                <button class="accordion title_hive"><?= $hive['name'] ?></button>
                <div class="panel background_hive">
                    <div class="panel background_center">

                        <?php foreach ($hive['stats'] as $stat) { ?>

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
<?php } ?>

<?php
$contenu = ob_get_clean();
$footer = "Menu.php";
require "Layout.php";