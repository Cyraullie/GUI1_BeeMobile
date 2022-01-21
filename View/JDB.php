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
            <?php foreach ($logs as $log): ?>
                <button class="accordion title_day"><?= $log['date'] ?></button>
                <div class=" panel area_parent">

                    <?php foreach ($log['content'] as $content): ?>
                        <div class="title_note">
                            <a><?= $content['hour'] ?></a>
                        </div>
                        <div class="area_child week">
                            <div class="content">
                                <a><?= $content['text'] ?></a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>


<?php
$contenu = ob_get_clean();
$footer = "Menu.php";
require "Layout.php";