<?php
ob_start();

?>
    <script type="module" src="View/JS/Horizontal_Swiper.js" defer></script>

    <div class="background">
        <div class="calendar_button">
            <a id="varroa" href="?action=Photo&search=Varroas"
               class="<?= ($_GET['search'] == "Varroas") ? "active" : "inactive" ?>">Varroa</a>
            <a id="reine" href="?action=Photo&search=Reine"
               class="<?= ($_GET['search'] == "Reine") ? "active" : "inactive" ?>">Reines</a>
        </div>

        <div class="background_photo">
            <label class="custom-file-upload">
                <input type="file"/>
                Choisir une image
            </label>
        </div>
    </div>


<?php
$contenu = ob_get_clean();
$footer = "Menu.php";
require "Layout.php";