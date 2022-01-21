<?php
ob_start();

?>
    <script type="module" src="View/JS/Horizontal_Swiper.js" defer></script>

    <div class="background">

        <div class="calendar_button">
            <form action="?action=JDB" method="POST">
                <select id="hive" name="hive" class="active" onchange="this.form.submit()">
                    <?php foreach ($hives as $hive): ?>
                        <?php if ($hiveid == $hive['hiveid']) : ?>
                            <option selected value="<?= $hive['hiveid'] ?>"> <?= $hive['name'] ?></option>
                        <?php else: ?>
                            <option value="<?= $hive['hiveid'] ?>"> <?= $hive['name'] ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
            </form>
        </div>


        <div class="background_calendar">
            <!-- //foreach ($hive["hives"]["logs"] as $logs): ?>
            <button class="accordion title_day">01/10/2021</button>
            <div class=" panel area_parent">
                <div class="title_note">
                    <a> //$logs["hour"]</a>
                </div>
                <div class="area_child week">

                    <div class="content">
                        <a>
                             //$logs["text"]
                        </a>
                    </div>
                </div>
             //endforeach; ?> -->
        </div>

    </div>


<?php
$contenu = ob_get_clean();
$footer = "Menu.php";
require "Layout.php";