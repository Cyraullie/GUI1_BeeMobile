<?php
ob_start();

?>
    <script type="module" src="View/JS/Horizontal_Swiper.js" defer></script>

    <div class="background">

            <div class="calendar_button">
                <?php foreach ($user as $hive): ?>
                <select id="hive" class="active">
                    <option <?= $hive["hives"]['name'] ?></option>
                </select>
                <?php endforeach; ?>
            </div>


            <div class="background_calendar">
                <?php //foreach ($hive["hives"]["logs"] as $logs): ?>
                <button class="accordion title_day">01/10/2021</button>
                <div class=" panel area_parent">
                    <div class="title_note">
                        <a><?= //$logs["hour"]?></a>
                    </div>
                    <div class="area_child week">

                        <div class="content">
                            <a>
                                <?= //$logs["text"]?>
                            </a>
                        </div>
                    </div>
                <?php //endforeach; ?>
            </div>

    </div>



<?php
$contenu = ob_get_clean();
$footer = "Menu.php";
require "Layout.php";