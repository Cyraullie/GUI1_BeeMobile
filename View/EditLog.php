<?php
ob_start();
?>

    <div class="background">
        <div class="background_scrollable">
            <div class="background_hive">
                <?php if (isset($message) and isset($typeMessage)) { ?>
                    <a class="banner_message <?= $typeMessage ?>"><?= $message ?></a>
                <?php } ?>
                <div class="form_area">
                    <a class="form title_day_hive"></a>
                    <div class="form hive_area">
                        <form action="?action=UpdateLog&logDate=<?= $date ?>&oldHour=" method="post">
                            <?php foreach ($logs['content'] as $content): ?>
                                <?php if ($content['hour'] == $oldHour) : ?>
                                    <div class="stat_form_size">
                                        <div class="title_note_hive">
                                            <label id="oldLog" name="oldLog"><?= $content['hour'] ?></label>
                                        </div>
                                        <input id="logHour" name="logHour" type="hidden" value="<?= $content['hour'] ?>">
                                        <input id="logName" name="logName" value="<?= $content['text'] ?>"
                                               class="area_child hive content form" type="text">
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            <input class="button" value="Mettre à jour" type="submit">
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>


<?php
$contenu = ob_get_clean();
$footer = "Menu.php";
require "Layout.php";