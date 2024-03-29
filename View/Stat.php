<?php
ob_start();
?>
    <script type="module" src="View/JS/Horizontal_Swiper.js" defer></script>
    <div class="background">
       <a class="buttonIcon" href="?action=CreateHive"><i class="fas fa-plus"></i></a>
        <div class="background_scrollable">
            <?php foreach ($hives as $hive) {?>

                <button class="accordion title_hive"><a><?= $hive['name'] ?></a> <div><a class="white-hive-icon fa-2x" href="?action=EditHive&hive=<?= $hive['hiveid'] ?>"><i class="fas fa-edit"></i></a><a class="white-hive-icon fa-2x" href="?action=DeleteHive&hive=<?= $hive['hiveid'] ?>"><i class="fas fa-trash-alt"></i></a></div></button>
                <div class="panel background_hive">
                    <div class="panel background_center">
                        <a class="buttonIcon" href="?action=CreateStat&hive=<?= $hive->hiveid ?>"><i class="fas fa-plus"></i></a>
                        <?php foreach ($stats->find(['hiveid' => $hive['hiveid']]) as $stat) { ?>

                        <button class="accordion title_day_hive"><a><?= $stat['date'] ?></a> <div><a class="white-icon fa-2x" href="?action=EditStats&hive=<?= $hive['hiveid'] ?>&stat=<<?= $stat['date'] ?>>"><i class="fas fa-edit"></i></a><a class="white-hive-icon fa-2x" href="?action=DeleteStat&statDate=<<?= $stat['date'] ?>>"><i class="fas fa-trash-alt"></i></a></div></button>
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