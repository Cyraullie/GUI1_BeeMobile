<?php
ob_start();
?>

    <div class="background">
        <div class="calendar_button">
            <a id="day" href="?action=AgendaDay" class="active">Jour</a>
            <a id="week" href="?action=AgendaWeek" class="inactive">Semaine</a>
            <a id="month" href="?action=AgendaMonth" class="inactive">Mois</a>
        </div>

        <h1 class="title"><?= date("d/m/Y"); ?></h1>
        <div class="background_calendar">


            <div class="title_day">
                <a>10h00</a>
            </div>
            <div class="area_parent">
                <div class="content">

                    <a class="area_child">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras gravida nibh a tellus pretium
                        dictum.
                        Ut sit amet purus dapibus, pulvinar mauris sed, molestie arcu. Proin ac fermentum diam, ut
                        suscipit
                        libero. Nam ut ipsum ut justo dignissim egestas nec nec neque. Curabitur efficitur nec tortor
                        sed
                        imperdiet.

                    </a>
                </div>

                <div class="content">

                    <a class="area_child">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras gravida nibh a tellus pretium
                        dictum.
                        Ut sit amet purus dapibus, pulvinar mauris sed, molestie arcu. Proin ac fermentum diam, ut
                        suscipit
                        libero. Nam ut ipsum ut justo dignissim egestas nec nec neque. Curabitur efficitur nec tortor
                        sed
                        imperdiet.

                    </a>
                </div>
            </div>

            <div class="title_day">
                <a>12h30</a>
            </div>
            <div class="area_parent">
                <div class="content">

                    <a class="area_child">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras gravida nibh a tellus pretium
                        dictum.
                        Ut sit amet purus dapibus, pulvinar mauris sed, molestie arcu. Proin ac fermentum diam, ut
                        suscipit
                        libero. Nam ut ipsum ut justo dignissim egestas nec nec neque. Curabitur efficitur nec tortor
                        sed
                        imperdiet.

                    </a>
                </div>
            </div>

            <div class="title_day">
                <a>15h30</a>
            </div>
            <div class="area_parent">
                <div class="content">

                    <a class="area_child">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras gravida nibh a tellus pretium
                        dictum.
                        Ut sit amet purus dapibus, pulvinar mauris sed, molestie arcu. Proin ac fermentum diam, ut
                        suscipit
                        libero. Nam ut ipsum ut justo dignissim egestas nec nec neque. Curabitur efficitur nec tortor
                        sed
                        imperdiet.

                    </a>
                </div>
            </div>

            <div class="title_day">
                <a>16h30</a>
            </div>
            <div class="area_parent">
                <div class="content">

                    <a class="area_child">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras gravida nibh a tellus pretium
                        dictum.
                        Ut sit amet purus dapibus, pulvinar mauris sed, molestie arcu. Proin ac fermentum diam, ut
                        suscipit
                        libero. Nam ut ipsum ut justo dignissim egestas nec nec neque. Curabitur efficitur nec tortor
                        sed
                        imperdiet.

                    </a>
                </div>
            </div>

            <div class="title_day">
                <a>18h30</a>
            </div>
            <div class="area_parent">
                <div class="content">

                    <a class="area_child">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras gravida nibh a tellus pretium
                        dictum.
                        Ut sit amet purus dapibus, pulvinar mauris sed, molestie arcu. Proin ac fermentum diam, ut
                        suscipit
                        libero. Nam ut ipsum ut justo dignissim egestas nec nec neque. Curabitur efficitur nec tortor
                        sed
                        imperdiet.

                    </a>
                </div>
            </div>
        </div>
    </div>


<?php
$contenu = ob_get_clean();
$footer = "Menu.php";
require "Layout.php";