<?php
ob_start();

?>
    <script type="module" src="View/JS/Horizontal_Swiper.js" defer></script>

            <div class="background">
                <div class="calendar_button">
                    <a id="day" href="?action=AgendaDay" class="active">Jour</a>
                    <a id="week" href="?action=AgendaWeek" class="inactive">Semaine</a>
                    <a id="month" href="?action=AgendaMonth" class="inactive">Mois</a>
                </div>
                <!-- Slider main container -->
                <div class="swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                <?php for ($i = 0; $i < 7; $i++): ?>
                    <div class="swiper-slide">
                        <h1 class="title"><?= date("d/m/Y", strtotime("+ {$i} day")) ?></h1>
                        <div class="background_calendar">

                            <button class="accordion title_day">10h00</button>
                            <div class="panel area_parent">
                                <div class="content">

                                    <a class="area_child">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras gravida nibh a
                                        tellus pretium
                                        dictum.
                                        Ut sit amet purus dapibus, pulvinar mauris sed, molestie arcu. Proin ac
                                        fermentum diam, ut
                                        suscipit
                                        libero. Nam ut ipsum ut justo dignissim egestas nec nec neque. Curabitur
                                        efficitur nec
                                        tortor
                                        sed
                                        imperdiet.

                                    </a>
                                </div>

                                <div class="content">

                                    <a class="area_child">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras gravida nibh a
                                        tellus pretium
                                        dictum.
                                        Ut sit amet purus dapibus, pulvinar mauris sed, molestie arcu. Proin ac
                                        fermentum diam, ut
                                        suscipit
                                        libero. Nam ut ipsum ut justo dignissim egestas nec nec neque. Curabitur
                                        efficitur nec
                                        tortor
                                        sed
                                        imperdiet.

                                    </a>
                                </div>
                            </div>

                            <button class="accordion title_day">12h30</button>
                            <div class="panel area_parent">
                                <div class="content">

                                    <a class="area_child">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras gravida nibh a
                                        tellus pretium
                                        dictum.
                                        Ut sit amet purus dapibus, pulvinar mauris sed, molestie arcu. Proin ac
                                        fermentum diam, ut
                                        suscipit
                                        libero. Nam ut ipsum ut justo dignissim egestas nec nec neque. Curabitur
                                        efficitur nec
                                        tortor
                                        sed
                                        imperdiet.

                                    </a>
                                </div>
                            </div>

                            <button class="accordion title_day">15h30</button>
                            <div class="panel area_parent">
                                <div class="content">

                                    <a class="area_child">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras gravida nibh a
                                        tellus pretium
                                        dictum.
                                        Ut sit amet purus dapibus, pulvinar mauris sed, molestie arcu. Proin ac
                                        fermentum diam, ut
                                        suscipit
                                        libero. Nam ut ipsum ut justo dignissim egestas nec nec neque. Curabitur
                                        efficitur nec
                                        tortor
                                        sed
                                        imperdiet.

                                    </a>
                                </div>
                            </div>

                            <button class="accordion title_day">16h30</button>
                            <div class="panel area_parent">
                                <div class="content">

                                    <a class="area_child">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras gravida nibh a
                                        tellus pretium
                                        dictum.
                                        Ut sit amet purus dapibus, pulvinar mauris sed, molestie arcu. Proin ac
                                        fermentum diam, ut
                                        suscipit
                                        libero. Nam ut ipsum ut justo dignissim egestas nec nec neque. Curabitur
                                        efficitur nec
                                        tortor
                                        sed
                                        imperdiet.

                                    </a>
                                </div>
                            </div>

                            <button class="accordion title_day">18h30</button>
                            <div class="panel area_parent">
                                <div class="content">

                                    <a class="area_child">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras gravida nibh a
                                        tellus pretium
                                        dictum.
                                        Ut sit amet purus dapibus, pulvinar mauris sed, molestie arcu. Proin ac
                                        fermentum diam, ut
                                        suscipit
                                        libero. Nam ut ipsum ut justo dignissim egestas nec nec neque. Curabitur
                                        efficitur nec
                                        tortor
                                        sed
                                        imperdiet.

                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                <?php endfor; ?>

            </div>
        </div>
            </div>





<?php
$contenu = ob_get_clean();
$footer = "Menu.php";
require "Layout.php";